(function(){define(["utilities/global","controllers/application"],function(){var e=window.LSP.utilities,t=function(){var t={},n=window.LSP;return t={name:"badges",events:{application:{onAttachEvents:function(e,n){$("div[data-badge]:not(.badges-hasBadge), a[data-badge]:not(.badges-hasBadge)",n.selector).append(t.makeElement).addClass("badges-hasBadge")}}},assets:{},makeElement:function(t,n){return $(this).attr("data-badge").length>0?'<div class="badges-badge badge-'+e.camelCase($(this).attr("data-badge"))+'">'+$(this).attr("data-badge")+"</div>":""}},t}();e.register("controller","badges",t)})})();