(function(){define(["jquery"],function(){window.LSP=window.LSP||{},window.LSP.utilities=window.LSP.utilities||{},$.extend(window.LSP.utilities,function(){var e={},t=window.LSP,n=[],r=[];return e={redirectTo:function(e){document.location=e.replace("www.lonestarpercussion","lspsandbox.explorewebdev")},md5:function(e){return""},formatDate:function(e,t){e=typeof e=="string"&&e.indexOf(":")<0?e.replace(/-/g,"/"):e,e=typeof e=="string"?new Date(e):e,e=e||new Date,t=t||"l, F jS Y g:ia";var n="",r={shortMonths:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],longMonths:["January","February","March","April","May","June","July","August","September","October","November","December"],shortDays:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],longDays:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],d:function(e){return(e.getDate()<10?"0":"")+e.getDate()},D:function(e){return this.shortDays[e.getDay()]},j:function(e){return e.getDate()},l:function(e){return this.longDays[e.getDay()]},N:function(e){return e.getDay()+1},S:function(e){return e.getDate()%10==1&&e.getDate()!=11?"st":e.getDate()%10==2&&e.getDate()!=12?"nd":e.getDate()%10==3&&e.getDate()!=13?"rd":"th"},w:function(e){return e.getDay()},z:function(e){var t=new Date(e.getFullYear(),0,1);return Math.ceil((e-t)/864e5)},W:function(e){var t=new Date(e.getFullYear(),0,1);return Math.ceil(((e-t)/864e5+t.getDay()+1)/7)},F:function(e){return this.longMonths[e.getMonth()]},m:function(e){return(e.getMonth()<9?"0":"")+(e.getMonth()+1)},M:function(e){return this.shortMonths[e.getMonth()]},n:function(e){return e.getMonth()+1},t:function(e){var t=new Date;return(new Date(t.getFullYear(),t.getMonth(),0)).getDate()},L:function(e){var t=e.getFullYear();return t%400===0||t%100!==0&&t%4===0},o:function(e){var t=new Date(e.valueOf());return t.setDate(t.getDate()-(e.getDay()+6)%7+3),t.getFullYear()},Y:function(e){return e.getFullYear()},y:function(e){return(""+e.getFullYear()).substr(2)},a:function(e){return e.getHours()<12?"am":"pm"},A:function(e){return e.getHours()<12?"AM":"PM"},B:function(e){return Math.floor(((e.getUTCHours()+1)%24+e.getUTCMinutes()/60+e.getUTCSeconds()/3600)*1e3/24)},g:function(e){return e.getHours()%12||12},G:function(e){return e.getHours()},h:function(e){return((e.getHours()%12||12)<10?"0":"")+(e.getHours()%12||12)},H:function(e){return(e.getHours()<10?"0":"")+e.getHours()},i:function(e){return(e.getMinutes()<10?"0":"")+e.getMinutes()},s:function(e){return(e.getSeconds()<10?"0":"")+e.getSeconds()},u:function(e){var t=e.getMilliseconds();return(t<10?"00":t<100?"0":"")+t},O:function(e){return(-e.getTimezoneOffset()<0?"-":"+")+(Math.abs(e.getTimezoneOffset()/60)<10?"0":"")+Math.abs(e.getTimezoneOffset()/60)+"00"},P:function(e){return(-e.getTimezoneOffset()<0?"-":"+")+(Math.abs(e.getTimezoneOffset()/60)<10?"0":"")+Math.abs(e.getTimezoneOffset()/60)+":00"},T:function(e){var t=e.getMonth();e.setMonth(0);var n=e.toTimeString().replace(/^.+ \(?([^\)]+)\)?$/,"$1");return e.setMonth(t),n},Z:function(e){return-e.getTimezoneOffset()*60},c:function(e){return e.format("Y-m-d\\TH:i:sP")},r:function(e){return e.toString()},U:function(e){return e.getTime()/1e3}};for(var i=0;i<t.length;i++){var s=t.charAt(i);i-1>=0&&t.charAt(i-1)=="\\"?n+=s:r[s]?n+=r[s](e):s!="\\"&&(n+=s)}return n},isEqual:function(e,t){var n=!!e&&!!t;return $.each(e,function(r,i){if(!t.hasOwnProperty(r)&&e[r]+"".length>0||e[r]+""!=e[r]+"")return n=!1,!1}),n&&$.each(t,function(r,i){if(!e.hasOwnProperty(r)&&t[r]+"".length>0||t[r]+""!=e[r]+"")return n=!1,!1}),n},scrollTo:function(e){e=$(e);if(!e)return $.Deferred().resolve();var t=$(window).height(),n=Math.max($("body").scrollTop(),$("html").scrollTop()),r=(e.offset()||{}).top;if(r<n||r>n+t)return LSP.controllers.application.getContext()==="phone"?($("body, html").scrollTop(e.offset().top-20),$.Deferred().resolve()):$("body, html").animate({scrollTop:e.offset().top-20},500)},getURLParameters:function(){var e={},t,n=window.location.href+"#",r=n.slice(n.indexOf("?")+1,n.indexOf("#")).split("&");for(var i=0;i<r.length;i++)t=r[i].split("="),e[t[0]]=decodeURIComponent(t[1]).replace(/\+/g," ");return function(){return e}}(),cleanArray:function(e){for(var t=0;t<e.length;t++)if(e[t]===undefined||(e[t]||"").length<1||e[t]===null||typeof e[t]=="object"&&$.isEmptyObject(e[t]))e.splice(t,1),t--;return e},findBetween:function(e,t,n){var r=n.indexOf(e)+e.length,i=(n+t).indexOf(t,r);return n.substr(r,i-r)},camelCase:function(e){var t=function(e,t){return(t+"").toUpperCase()},n=function(e,t){return(t+"").toLowerCase()};return e.replace(/[^A-Za-z0-9]+/g,"-").replace(/^-ms-/,"ms-").replace(/-([\da-z])/gi,t).replace(/^([A-Z]){1}/,n)},isValid:function(e,t){return LSP.controllers.validation.isValid(e,t)},cleanTrailing:function(e){return(e||"").replace(/^[.\s]+|[.\s]+$/g,"")},parseMicroTemplate:function(){function t(n,r){if(n){var i=/^[A-Za-z]{1}[-:A-Za-z0-9_]+$/.test(n)?e[n]=e[n]||t(document.getElementById(n).innerHTML):new Function("obj","var p=[],print=function(){p.push.apply(p,arguments);};with(obj){var _util=window.LSP.utilities,_controllers=window.LSP.controllers;p.push('"+n.replace(/[\r\t\n]/g," ").replace(/'(?=[^#]*#>)/g,"	").split("'").join("\\'").split("	").join("'").replace(/<#=(.+?)#>/g,"',$1,'").split("<#").join("');").split("#>").join("p.push('")+"');}return p.join('');");return r?i.apply(r,[r]):i}return null}var e={};return t}(),parseCurrency:function(e){var t=isNaN(t=Math.abs(t))?2:t,n=n!==undefined?n:"$",r=r||",",i=i||".",s=e<0?"-":"",o=parseInt(e=Math.abs(+e||0).toFixed(t),10)+"",u=(u=o.length)>3?u%3:0;return n+s+(u?o.substr(0,u)+r:"")+o.substr(u).replace(/(\d{3})(?=\d)/g,"$1"+r)+(t?i+Math.abs(e-o).toFixed(t).slice(2):"")},register:function(e,t,n){switch(e){case"model":window.LSP.models=window.LSP.models||{},n.name=t,window.LSP.models[t]=n;break;case"controller":window.LSP.controllers=window.LSP.controllers||{},n.name=t,window.LSP.controllers[t]=n,window.LSP.controllers.application.init(n);break;case"asset":window.LSP.assets=window.LSP.assets||{},n.name=t,window.LSP.assets[t]=n}}},e}())})})();