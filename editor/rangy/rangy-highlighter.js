/**
 * Highlighter module for Rangy, a cross-browser JavaScript range and selection library
 * http://code.google.com/p/rangy/
 *
 * Depends on Rangy core, TextRange and CssClassApplier modules.
 *
 * Copyright 2013, Tim Down
 * Licensed under the MIT license.
 * Version: 1.3alpha.799
 * Build date: 27 November 2013
 */
rangy.createModule("Highlighter",["ClassApplier"],function(a,b){function f(a,b){return a.characterRange.start-b.characterRange.start}function j(a,b){this.type=a,this.converterCreator=b}function k(a,b){i[a]=new j(a,b)}function l(a){var b=i[a];if(b instanceof j)return b.create();throw new Error("Highlighter type '"+a+"' is not valid")}function m(a,b){this.start=a,this.end=b}function o(a,b,c,d,e,f){e?(this.id=e,h=Math.max(h,e+1)):this.id=h++,this.characterRange=b,this.doc=a,this.classApplier=c,this.converter=d,this.containerElementId=f||null,this.applied=!1}function p(a,b){b=b||"textContent",this.doc=a||document,this.classAppliers={},this.highlights=[],this.converter=l(b)}var c=a.dom,d=c.arrayContains,e=c.getBody,g=[].forEach?function(a,b){a.forEach(b)}:function(a,b){for(var c=0,d=a.length;c<d;++c)b(a[c])},h=1,i={};j.prototype.create=function(){var a=this.converterCreator();return a.type=this.type,a},a.registerHighlighterType=k,m.prototype={intersects:function(a){return this.start<a.end&&this.end>a.start},union:function(a){return new m(Math.min(this.start,a.start),Math.max(this.end,a.end))},intersection:function(a){return new m(Math.max(this.start,a.start),Math.min(this.end,a.end))},toString:function(){return"[CharacterRange("+this.start+", "+this.end+")]"}},m.fromCharacterRange=function(a){return new m(a.start,a.end)};var n={rangeToCharacterRange:function(a,b){var c=a.getBookmark(b);return new m(c.start,c.end)},characterRangeToRange:function(b,c,d){var e=a.createRange(b);return e.moveToBookmark({start:c.start,end:c.end,containerNode:d}),e},serializeSelection:function(a,b){var c=a.getAllRanges(),d=c.length,e=[],f=d==1&&a.isBackward();for(var g=0,h=c.length;g<h;++g)e[g]={characterRange:this.rangeToCharacterRange(c[g],b),backward:f};return e},restoreSelection:function(a,b,c){a.removeAllRanges();var d=a.win.document;for(var e=0,f=b.length,g,h,i;e<f;++e)h=b[e],i=h.characterRange,g=this.characterRangeToRange(d,h.characterRange,c),a.addRange(g,h.backward)}};k("textContent",function(){return n}),k("TextRange",function(){var b;return function(){if(!b){var c=a.modules.TextRange;if(!c)throw new Error("TextRange module is missing.");if(!c.supported)throw new Error("TextRange module is present but not supported.");b={rangeToCharacterRange:function(a,b){return m.fromCharacterRange(a.toCharacterRange(b))},characterRangeToRange:function(b,c,d){var e=a.createRange(b);return e.selectCharacters(d,c.start,c.end),e},serializeSelection:function(a,b){return a.saveCharacterRanges(b)},restoreSelection:function(a,b,c){a.restoreCharacterRanges(c,b)}}}return b}}()),o.prototype={getContainerElement:function(){return this.containerElementId?this.doc.getElementById(this.containerElementId):e(this.doc)},getRange:function(){return this.converter.characterRangeToRange(this.doc,this.characterRange,this.getContainerElement())},fromRange:function(a){this.characterRange=this.converter.rangeToCharacterRange(a,this.getContainerElement())},getText:function(){return this.getRange().toString()},containsElement:function(a){return this.getRange().containsNodeContents(a.firstChild)},unapply:function(){this.classApplier.undoToRange(this.getRange()),this.applied=!1},apply:function(){this.classApplier.applyToRange(this.getRange()),this.applied=!0},getHighlightElements:function(){return this.classApplier.getElementsWithClassIntersectingRange(this.getRange())},toString:function(){return"[Highlight(ID: "+this.id+", class: "+this.classApplier.cssClass+", character range: "+this.characterRange.start+" - "+this.characterRange.end+")]"}},p.prototype={addClassApplier:function(a){this.classAppliers[a.cssClass]=a},getHighlightForElement:function(a){var b=this.highlights;for(var c=0,d=b.length;c<d;++c)if(b[c].containsElement(a))return b[c];return null},removeHighlights:function(a){for(var b=0,c=this.highlights.length,e;b<c;++b)e=this.highlights[b],d(a,e)&&(e.unapply(),this.highlights.splice(b--,1))},removeAllHighlights:function(){this.removeHighlights(this.highlights)},getIntersectingHighlights:function(a){var b=[],c=this.highlights,e=this.converter;return g(a,function(a){g(c,function(c){a.intersectsRange(c.getRange())&&!d(b,c)&&b.push(c)})}),b},highlightCharacterRanges:function(b,c,d){var e,f,h,i=this.highlights,j=this.converter,k=this.doc,l=[],n=this.classAppliers[b];d=d||null;var p,q,r;d&&(p=this.doc.getElementById(d),p&&(q=a.createRange(this.doc),q.selectNodeContents(p),r=new m(0,q.toString().length),q.detach()));var s,t,u;for(e=0,f=c.length;e<f;++e){s=c[e],u=!1,r&&(s=s.intersection(r));for(h=0;h<i.length;++h)d==i[h].containerElementId&&(t=i[h].characterRange,t.intersects(s)&&(l.push(i[h]),i[h]=new o(k,t.union(s),n,j,null,d)));u||i.push(new o(k,s,n,j,null,d))}g(l,function(a){a.unapply()});var v=[];return g(i,function(a){a.applied||(a.apply(),v.push(a))}),v},highlightRanges:function(b,c,d){var f=[],h=this.converter,i=d?d.id:null,j;return d&&(j=a.createRange(d),j.selectNodeContents(d)),g(c,function(a){var b=d?j.intersection(a):a;f.push(h.rangeToCharacterRange(b,d||e(a.getDocument())))}),this.highlightCharacterRanges(f,c,i)},highlightSelection:function(b,c,d){var f=this.converter;c=c||a.getSelection();var h=this.classAppliers[b],i=c.win.document,j=d?i.getElementById(d):e(i);if(!h)throw new Error("No class applier found for class '"+b+"'");var k=f.serializeSelection(c,j),l=[];g(k,function(a){l.push(m.fromCharacterRange(a.characterRange))});var n=this.highlightCharacterRanges(b,l,d);return f.restoreSelection(c,k,j),n},unhighlightSelection:function(b){b=b||a.getSelection();var c=this.getIntersectingHighlights(b.getAllRanges());return this.removeHighlights(c),b.removeAllRanges(),c},getHighlightsInSelection:function(b){return b=b||a.getSelection(),this.getIntersectingHighlights(b.getAllRanges())},selectionOverlapsHighlight:function(a){return this.getHighlightsInSelection(a).length>0},serialize:function(a){var b=this.highlights;b.sort(f);var c=["type:"+this.converter.type];return g(b,function(b){var d=b.characterRange,e=[d.start,d.end,b.id,b.classApplier.cssClass,b.containerElementId];a&&a.serializeHighlightText&&e.push(b.getText()),c.push(e.join("$"))}),c.join("|")},deserialize:function(a){var b=a.split("|"),c=[],d=b[0],f,g,h,i=!1;if(!d||!(f=/^type:(\w+)$/.exec(d)))throw new Error("Serialized highlights are invalid.");g=f[1],g!=this.converter.type&&(h=l(g),i=!0),b.shift();var j,k,n,p,q;for(var r=b.length,s;r-->0;)s=b[r].split("$"),n=new m(+s[0],+s[1]),p=s[4]||null,q=p?this.doc.getElementById(p):e(this.doc),i&&(n=this.converter.rangeToCharacterRange(h.characterRangeToRange(this.doc,n,q),q)),j=this.classAppliers[s[3]],k=new o(this.doc,n,j,this.converter,parseInt(s[2]),p),k.apply(),c.push(k);this.highlights=c}},a.Highlighter=p,a.createHighlighter=function(a,b){return new p(a,b)}})