var WLPluginAssistant = (function(document, $, expressionSyntaxes, WLPluginEditor) {
	var assistants = [],
		hideAll,
		types = expressionSyntaxes['Plugin'].types,
		construct = function(el) {
			var me = this,
				cl = el.getAttribute('id') + 'button',
				$el = $(el),
				buttonDrag = this.button = document.createElement('img'),
				$buttonDrag = $(buttonDrag),
				buttonEdit = this.button = document.createElement('img'),
				$buttonEdit = $(buttonEdit);

			this.el = el;
			this.$el = $el;
			el.assistant = this;

			buttonDrag.setAttribute('src', 'editor/img/arrow-move.png');
			buttonDrag.setAttribute('contenteditable', 'false');
			buttonDrag.el = el;
			buttonDrag.$el = $el;
			buttonDrag.className = cl + ' helper drag';

			$buttonDrag
				.on('dragstart', function() {
					$el.detach();
					$buttonDrag.fadeTo(0, 0);
					$buttonEdit.detach();
				})
				.on('mouseover', function(e) {
					$el.addClass('draggable');
					e.stopPropagation();
				})
				.on('mouseout', function() {
					$el.removeClass('draggable');
				});

			buttonDrag.ondragend = document.body.ondragend = function(e) {
				setTimeout(function() {
					$el.removeClass('draggable');
					$buttonDrag
						.detach()
						.fadeTo(0, 1);

					$('img.' + cl).filter(':visible')
						.first()
						.after(el)
						.remove();

				}, 1);
			};

			buttonEdit.setAttribute('src', 'editor/img/cog.png');
			buttonEdit.setAttribute('contenteditable', 'false');
			buttonEdit.el = el;
			buttonEdit.$el = $el;
			buttonEdit.className = cl + ' helper edit';
			buttonEdit.onclick = function() {
				me.assembleParametersFromEl();
			};
			$buttonEdit
				.on('dragstart', function(e) {
					e.preventDefault();
				})
				.on('mouseover', function(e) {
					$el.addClass('draggable');
					e.stopPropagation();
				})
				.on('mouseout', function() {
					$el.removeClass('draggable');
				});

			this.show = function() {
				this.hideAll();
				var pos = $el.position();
				$buttonDrag
					.insertBefore($el)
					.css('left', (pos.left + 10) + 'px')
					.css('top', pos.top + 'px');

				$buttonEdit
					.insertBefore($el)
					.css('left', (pos.left + 35) + 'px')
					.css('top', pos.top + 'px');
			};

			this.hide = function() {
				if (!el.unhidable) {
					$buttonDrag.detach();
					$buttonEdit.detach();
				}
			};

			assistants.push(this);
		};

	construct.prototype = {
		hideAll: hideAll = function() {
			console.log(assistants);
			for (var i = 0; i < assistants.length; i++) {
				assistants[i].hide();
			}
		},
		assembleParametersFromEl: function() {
			var $el = this.$el,
				parameters = decodeURIComponent($el.attr('data-plugin-parameters') + ''),
				existingParameters = (parameters ? JSON.parse(parameters) : {}),
				typeName = $el.attr('data-plugin-type'),
				type = types[typeName],
				wLPluginEditor = new WLPluginEditor(type),
				defaultParameters = wLPluginEditor.parameters,
				parametersOverride = {},
				parameterValue,

				i;

			for( i in defaultParameters ) {
				parametersOverride[i] = {
					label: defaultParameters[i].label,
					type: defaultParameters[i].type,
					value: (existingParameters[i] ? existingParameters[i] : defaultParameters[i].value)
				};
			}

			wLPluginEditor.ui(parametersOverride);
		}
	};

	document.onkeydown = function() {
		hideAll();
	};

	return construct;
})(document, jQuery, expressionSyntaxes, WLPluginEditor);