<!doctype html>
<!-- Server: sfs-consume-8 -->
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VgQOV19AAQoJVlNT"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(16),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(17),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,v="fn"+h,w="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(v,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(v,function(t,n){i(w,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(v,function(t,n){i(w,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(19)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(19)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(19)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(19)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):v?v(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(19)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,v=l.SI,w="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(w,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!v&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(16),s=t(17),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t,n){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,n])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){if(!o)return!1;if(t!==o)return!1;if(!n)return!0;if(!i)return!1;for(var e=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==e[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}n.exports={agent:o,version:i,match:r}},{}],16:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],17:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],18:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],19:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(17),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=m(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[g[e]];return d&&d.push([b,e,r,a]),a}}function p(t,n){y[t]=m(t).concat(n)}function h(t,n){var e=y[t];if(e)for(var r=0;r<e.length;r++)e[r]===n&&e.splice(r,1)}function m(t){return y[t]||[]}function v(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",g[e]=n,n in u||(u[n]=[])})}var y={},g={},b={on:p,addEventListener:p,removeEventListener:h,emit:e,get:v,listeners:m,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(16),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!E++){var t=x.info=NREUM.info,n=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(g,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+x.offset],null,"api");var e=p.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-x.offset}var s=(new Date).getTime(),c=t("handle"),f=t(16),u=t("ee"),d=t(15),l=window,p=l.document,h="addEventListener",m="attachEvent",v=l.XMLHttpRequest,w=v&&v.prototype;NREUM.o={ST:setTimeout,SI:l.setImmediate,CT:clearTimeout,XHR:v,REQ:l.Request,EV:l.Event,PR:l.Promise,MO:l.MutationObserver};var y=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=v&&w&&w[h]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:s,now:a,origin:y,features:{},xhrWrappable:b,userAgent:d};t(12),p[h]?(p[h]("DOMContentLoaded",i,!1),l[h]("load",r,!1)):(p[m]("onreadystatechange",o),l[m]("onload",r)),c("mark",["firstbyte",s],null,"api");var E=0,O=t(18)},{}]},{},["loader",2,10,4,3]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":1,"licenseKey":"f516fac27e","agent":"","transactionName":"MVRXZBQHCBZRV0wIDAgec0UIBRIMX1oXEgVIUlpeFRMLAB5XVw8XFF5ZXAMUFUtUW08PDwlQUQoiCRELXFtZBSAJX0FCCQoKAEIaXAQFB0RZRA==","applicationID":"999221","errorBeacon":"bam.nr-data.net","applicationTime":100}</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        
        
        <script  src="//a.fsdn.com/con/js/sftheme/cmp.js?1552069670" ></script>
        


        

        <script>
            /*global unescape, window, SF*/
            // Setup our namespace
            if (!window.SF) { window.SF = {}; }
            if (!window.net) { window.net = {}; }
            if (!window.net.sf) { window.net.sf = {}; }
            SF.Ads = {};
            SF.cdn = '//a.fsdn.com/con';
            SF.deploy_time = '1552069670';
            SF.sandiego = true;
            SF.sandiego_chrome = true;
            
            SF.Breakpoints = {
              small: 0,
              medium: 640,
              leaderboard: 743,
              billboard: 985,
              large: 1053,
              xlarge: 1295,
              xxlarge: 1366
            };
            SF.initial_breakpoints_visible = {};
            for (var bp in SF.Breakpoints) {
                if (!SF.Breakpoints.hasOwnProperty(bp)) {
                    continue;
                }
                SF.initial_breakpoints_visible[bp] = !window.matchMedia || window.matchMedia('(min-width: ' + SF.Breakpoints[bp] + 'px)').matches;
            }
        </script><script>
            SF.Ads.prebidOptions = {
                showIndicators: false,
                analytics: false,
                timeout: 650,
                timeouts_by_bids: {650: 3, 2000: 1, 3000: 0},
                
            };

            SF.Ads.prebidUnits = [];
            SF.Ads.viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            SF.Ads.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

            if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '364668'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472239'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [2], 'accountId': '15680', 'zoneId': '486002'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265096}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224517, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178263, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120069}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432591-0',
                    tag: 'SF_Temp5_728x90_A',
                    mediaTypes: { banner: { sizes: [] } }
                }; 
                if (SF.Ads.viewportWidth >= 728 && SF.Ads.viewportHeight >= 200){
                    thisUnit.mediaTypes.banner.sizes = [[728, 90]];
                } 
                if (SF.Ads.viewportWidth >= 970 && SF.Ads.viewportHeight >= 901){
                    thisUnit.mediaTypes.banner.sizes = [[728, 90], [970, 250]];
                }

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '542316'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '320x50', 'ct': '630563'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [43], 'accountId': '15680', 'zoneId': '610848'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 12559081}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4738794, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 189802, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12558822}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1512154506943-0',
                    tag: 'SF_Mobile_320x50_A',
                    mediaTypes: { banner: { sizes: [[320, 50]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '364669'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472240'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'sizes': [2], 'accountId': '15680', 'zoneId': '486004'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265097}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4225352, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178264, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120070}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432592-0',
                    tag: 'SF_Temp5_728x90_B',
                    mediaTypes: { banner: { sizes: [[728, 90]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '364665'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472236'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [15, 10], 'accountId': '15680', 'zoneId': '486002'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265099}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224515, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178259, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120065}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432593-0',
                    tag: 'SF_Temp5_300x250_A',
                    mediaTypes: { banner: { sizes: [[300, 250], [300, 600]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '364666'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472237'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486004'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265101}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224506, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178261, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120067}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432594-0',
                    tag: 'SF_Temp5_300x250_B',
                    mediaTypes: { banner: { sizes: [[300, 250]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.large) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '364667'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472238'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486004'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265102}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224516, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178262, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120068}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432598-0',
                    tag: 'SF_Temp5_300x250_C',
                    mediaTypes: { banner: { sizes: [[300, 250]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '382341', 'sizes': [728, 90]}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '490021'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [2, 15, 10], 'accountId': '15680', 'zoneId': '486002'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9317137}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4225239, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178265, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120071}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432595-0',
                    tag: 'SF_Temp5_multi_A',
                    mediaTypes: { banner: { sizes: [[700, 500], [728, 90], [300, 250], [336, 280], [602, 147], [622, 147], [622, 297], [300, 600]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '382342', 'sizes': [300, 250]}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '490015'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'sizes': [2, 15], 'accountId': '15680', 'zoneId': '486004'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9317140}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4225240, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 178266, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12120072}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1392148432596-0',
                    tag: 'SF_Temp5_multi_B',
                    mediaTypes: { banner: { sizes: [[700, 500], [728, 90], [300, 250], [336, 280], [602, 147], [622, 147], [622, 297]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '542317'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '627928'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'sizes': [43], 'accountId': '15680', 'zoneId': '798260'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 12559084}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4738792, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 189801, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12558816}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1512154653435-0',
                    tag: 'SF_Mobile_Multi_B',
                    mediaTypes: { banner: { sizes: [[300, 50], [300, 250], [320, 50], [320, 100]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            if (!SF.initial_breakpoints_visible.leaderboard) {
                var thisUnit =  {
                    bids: [{'params': {'tagid': '542318'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '627932'}, 'bidder': 'pulsepoint'},
                            {'params': {'siteId': '103240', 'sizes': [43], 'accountId': '15680', 'zoneId': '798260'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 12559087}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4738791, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'dmxid': 189800, 'memberid': '101054'}, 'bidder': 'districtmDMX'},
                            {'params': {'placementId': 12558815}, 'bidder': 'districtm'},
                            ],
                    code: 'div-gpt-ad-1512154755912-0',
                    tag: 'SF_Mobile_Multi_C',
                    mediaTypes: { banner: { sizes: [[300, 50], [300, 250], [320, 50], [320, 100]] } }
                };

                SF.Ads.prebidUnits.push(thisUnit);
            }
            SF.Ads.prebidAdjustments = {"bidder_deflations": {"rubiconlite": 1, "komoona": 0.92, "onefiftytwo": 0.9, "indexexchange": 0.95, "sovrn": 0.94, "aardvark": 1, "aol": 0.98, "brealtime": 0.98, "districtm": 1, "oftmedia": 0.9, "emxdigital": 1, "pulsepoint": 0.93, "rubicon": 1.1, "indexex#hange": 0.98, "springserve": 0.001, "districtmdmx": 1, "appnexus": 1, "rhythmone": 0.85}, "inflation": 1.18, "floor": 0.02};
        </script>
        <script id="pbjs_script" data-dom="https://d3tglifpd8whs6.cloudfront.net"  src="//a.fsdn.com/con/js/sftheme/vendor/bizx-prebid.js?1552069670" ></script>
        <script>
            bizx.cmp.ifConsent('all', 'all', function(){
                SF.Ads.disallowPersonalization = 0;
            }, function(){
                SF.Ads.disallowPersonalization = 1;
            }, function () {
                if (window.bizxPrebid){
                    window.bizxPrebid.Ads.initPrebid(window.bizxPrebid.adUnits);
                }
            });
        </script>
        
        <link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
        
        
        <link  rel="stylesheet" href="//a.fsdn.com/con/css/sandiego.css?1552069670">
        

        
        
        <meta id="project_name" name="project_name" content="php-proxy">

        
        <meta name="description" content="PHP Http Proxy is a php script for taking webpages from one server and processes so that your main server is proctected/hidden.  Usefull for those…">
        <meta name="keywords" content="Networking, WWW/HTTP,  Open Source, Open Source Software, Development, Community, Source Code, Secure,  Downloads, Free Software">
<noscript>
    <meta http-equiv="refresh" content="5; url=https://downloads.sourceforge.net/project/php-proxy/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz?r=http%3A%2F%2Fuclaut.net%2F-1FDCW%2FF3NuV%3Frndad%3D609546739-1552198876&amp;ts=1552198931&amp;use_mirror=excellmedia">
</noscript>

        <title>Download PHP Web Proxy from SourceForge.net</title>
        <link rel="icon" sizes="180x180" href="//a.fsdn.com/con/img/sandiego/logo-180x180.png" type="image/png">
<link rel="icon" sizes="any" href="//a.fsdn.com/con/img/sandiego/svg/originals/sf-icon-orange-no_sf.svg" type="image/svg+xml">
<link rel="apple-touch-icon" sizes="180x180" href="//a.fsdn.com/con/img/sandiego/logo-180x180.png">
<link rel="mask-icon" href="//a.fsdn.com/con/img/sandiego/svg/originals/sf-icon-orange-no_sf.svg" color="#FF6600">
    
        <link rel="canonical" href="https://sourceforge.net/projects/php-proxy/">
    
        
        <script>
            /*global unescape, window, console, jQuery, $, net, SF, DD_belatedPNG, ga */
            if (!window.SF) {
                window.SF = {};
            }
        </script>

        <script>
            SF.EU_country_codes = ["BE", "FR", "BG", "DK", "VG", "WF", "HR", "BM", "DE", "HU", "JE", "FI", "FK", "YT", "NL", "PT", "CW", "NC", "LV", "RE", "LT", "LU", "PF", "GI", "TF", "RO", "PN", "TC", "PL", "PM", "GS", "GR", "GP", "EE", "IT", "GG", "CZ", "CY", "SX", "IO", "AT", "AW", "AX", "GL", "IE", "KY", "ES", "ME", "MF", "BL", "GF", "SK", "MT", "SI", "SH", "MQ", "MS", "AI", "SE", "GB"];
            SF.unknown_country_codes = ["", "A1", "A2", "O1"];
        </script>
        
<script src="//a.fsdn.com/con/js/sftheme/vendor/promise.polyfill.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/modernizr.3.3.1.custom.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/sticky.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/lib/jquery-2.2.4.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/shared_head.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme-typescript/compliance.js?1552069670"></script>



        <style>.q9c85b6c16991eb9e9899e60abb864e7d55f704ac { display: none !important; }</style>
    <link rel="alternate" type="application/rss+xml" title="PHP Web Proxy&#8230;Recent Activity" href="/p/php-proxy/activity/feed" />
    


        
<script>
    SF.adblock = true;
</script><script>
       /*global Foundation */
           /*global googletag, bizxPrebid */
            SF.Ads.gptExpected();
       var gptadslots=[];
       var gptadHandlers={};
       var gptadRenderers=[];
       var gptadComplements={};

       googletag.cmd.push(function() {
           var leaderboard = googletag.sizeMapping()
               .addSize([970, 901], [[728, 90], [970, 250]])
               .addSize([728, 200], [[728, 90]])
               .build();
           var leaderboardInContent = googletag.sizeMapping()
               .addSize([1280, 200], [[728, 90], [970, 250]])
               .addSize([728, 200], [[728, 90]])
               .build();

            //prebid_log('GPT push define slots and targeting');
            googletag.pubads()
               .setForceSafeFrame(true)
               .setTargeting('usingSafeFrame','1')
               .setSafeFrameConfig({
                    allowOverlayExpansion: true,
                    allowPushExpansion: true,
                    sandbox: true
            });
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_728x90_A',[],'div-gpt-ad-1392148432591-0')
                                                    .defineSizeMapping( leaderboard )
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('page_type',"pg_download"));
            gptadComplements['/41014381/Sourceforge/SF_Temp5_728x90_A'] = ["SF_Temp5_HubIcon_200x90_A", ["728x90"]] ;
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_HubIcon_200x90_A',[200, 90],'div-gpt-ad-1324209358854-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"200x90")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_320x50_A',[320, 50],'div-gpt-ad-1512154506943-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"320x50")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_728x90_B',[728, 90],'div-gpt-ad-1392148432592-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"728x90")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_300x250_A',[[300, 250], [300, 600]],'div-gpt-ad-1392148432593-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"300x250,300x600")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_300x250_B',[300, 250],'div-gpt-ad-1392148432594-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"300x250")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_300x250_C',[300, 250],'div-gpt-ad-1392148432598-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"300x250")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_multi_A',[[700, 500], [728, 90], [300, 250], [336, 280], [602, 147], [622, 147], [622, 297], [300, 600]],'div-gpt-ad-1392148432595-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"700x500,728x90,300x250,336x280,602x147,622x147,622x297,300x600")
                                                        .setTargeting('page_type',"pg_download"));
            gptadHandlers['/41014381/Sourceforge/SF_Temp5_multi_A'] = ["checkDirectSoldForLeadForm"];
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Temp5_multi_B',[[700, 500], [728, 90], [300, 250], [336, 280], [602, 147], [622, 147], [622, 297]],'div-gpt-ad-1392148432596-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"700x500,728x90,300x250,336x280,602x147,622x147,622x297")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_Multi_B',[[300, 50], [300, 250], [320, 50], [320, 100]],'div-gpt-ad-1512154653435-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"300x50,300x250,320x50,320x100")
                                                        .setTargeting('page_type',"pg_download"));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_Mobile_Multi_C',[[300, 50], [300, 250], [320, 50], [320, 100]],'div-gpt-ad-1512154755912-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('oss_tpc',["Networking", "WWW/HTTP", "System", "Internet"])
                                                        .setTargeting('shortname',"php-proxy")
                                                        .setTargeting('dc_ref',"https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download")
                                                        .setTargeting('sz',"300x50,300x250,320x50,320x100")
                                                        .setTargeting('page_type',"pg_download"));
            

            googletag.pubads().setRequestNonPersonalizedAds(SF.Ads.disallowPersonalization);


            googletag.pubads().setTargeting('requestSource', 'GPT');
            googletag.pubads().enableAsyncRendering();

            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().addEventListener('slotOnload', function(event) {
                SF.Ads.Helpers.getSizeAndSetClass.call(this, event);
            });
            googletag.pubads().addEventListener('slotRenderEnded', function(event) {
                var unitName = event.slot.getAdUnitPath();
                if ( unitName in gptadHandlers ) {
                   for (var i = 0; i < gptadHandlers[unitName].length; i++) {
                       try {
                           SF.Ads.RenderHandlers[gptadHandlers[unitName][i]].call(this, event);
                       } catch (e) {
                       }
                   }
                }

                SF.Ads.RenderHandlers.decorateSizeDelivered.call(this, event);
                if (unitName in gptadComplements) {
                    if (gptadComplements[unitName][1].indexOf(SF.Ads.Helpers.getSizeDelivered(event)) >=0) {
                        gptadRenderers[gptadComplements[unitName][0]].call();
                    }
                }
                if(SF.Ads.scrollFixable) {
                    SF.Ads.scrollFixable.scrollRelocate();
                }
            });
            googletag.pubads().addEventListener('impressionViewable', SF.Ads.RenderHandlers.viewabilityInstrumentation);
            
            googletag.pubads().addEventListener('slotRenderEnded', SF.Ads.listenerForBlockThis);
            bizxPrebid.Ads.pushToGoogle();

            googletag.enableServices();
        });
   </script> 

        

        
<!-- CCM Tag -->
<script>
  (function () {
    /*global _ml:true, window */
    _ml = window._ml || {};
    _ml.eid = '771';

    var s = document.getElementsByTagName('script')[0], cd = new Date(), mltag = document.createElement('script');
    mltag.type = 'text/javascript'; mltag.async = true;
    mltag.src = '//ml314.com/tag.aspx?' + cd.getDate() + cd.getMonth() + cd.getFullYear();
    s.parentNode.insertBefore(mltag, s);
  })();
</script>
<!-- End CCM Tag -->

        
    <script src="//a.fsdn.com/con/js/adframe.js?1552069670"></script>

    
    <script>

        /*jshint ignore:start*/
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() {
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        /*jshint ignore:end*/

        //var $ = jQuery.noConflict(); // jshint ignore:line
    </script>
    <script>
        SF.devicePixelRatio = Math.round(window.getDevicePixelRatio()*10)/10;
            ga('create', "UA-36130941-1", {
                'name': 'sfnt1', 'sampleRate': 9});
            
                /*global _ml:true */
                if (typeof _ml !== 'undefined' && _ml.us) {
                    if (_ml.us.tp && _ml.us.tp.length > 0) {
                        ga('sfnt1.set', 'dimension2', _ml.us.tp[0]);
                    }
                    if (_ml.us.pc && _ml.us.pc.length > 0) {
                        ga('sfnt1.set', 'dimension7', _ml.us.pc[0]);
                    }
                    ga('sfnt1.set', 'dimension3', _ml.us.ind);
                    ga('sfnt1.set', 'dimension4', _ml.us.cr);
                    ga('sfnt1.set', 'dimension5', _ml.us.cs);
                    ga('sfnt1.set', 'dimension6', _ml.us.dm);
                    ga('sfnt1.set', 'dimension8', _ml.us.sn);
                }

                
                    ga('sfnt1.set', 'dimension9', 'php-proxy');
                    ga('sfnt1.set', 'dimension10', 'pg_dwnld');
                    ga('sfnt1.set', 'dimension11','/php-proxy/Dean 1.6 pre-alpha/PHP-PROXY_Dean_1.6.tar.gz');
                    
                        
                    ga('sfnt1.set', 'dimension13', 'Logged Out');
                    ga('sfnt1.set', 'dimension14', 'No');  
                    
                    ga('sfnt1.set', 'dimension16', 'sync');
                    ga('sfnt1.set', 'dimension17', SF.devicePixelRatio);
            ga('sfnt1.send', 'pageview');
        

        
    </script>
    
    <script>
        /* globals bizx */
        function initPiwik(){
            var _paq = window._paq = window._paq || [];
            _paq.push(['trackPageView', document.title, {
                    dimension1: 'php-proxy',
                dimension2: 'pg_dwnld',
                dimension3: SF.devicePixelRatio,
                
            }]);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//analytics.slashdotmedia.com/";
                _paq.push(['setTrackerUrl', u+'sf.php']);
                _paq.push(['setSiteId', 39]);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'sf.js'; s.parentNode.insertBefore(g,s);
            })();
        }
        bizx.cmp.ifConsent('publisher', ['storage', 'measurement'], initPiwik);
    </script>
<script>
    SF.ShowProgressBar = true;
</script>


<script>
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({ article:'auto'});
(function (e, f, u) {
    e.async = 1;
    e.src = u;
    f.parentNode.insertBefore(e, f);
})(document.createElement('script'),
    document.getElementsByTagName('script')[0],
    '//cdn.taboola.com/libtrc/sourceforge/loader.js');
</script>


        <script> try{(function(){ var cb = new Date().getTime(); var s = document.createElement("script"); s.defer = true; s.src = "//tag.crsspxl.com/s1.js?d=2396&cb="+cb; var s0 = document.getElementsByTagName('script')[0]; s0.parentNode.insertBefore(s, s0); })();}catch(e){} </script>


        
    </head>
    <body id="pg_dwnld"
          class="  anonymous has-ads sandiego">
        

        <div id="busy-spinner"></div>
        
        
<div id="messages">
</div>


        <div class="off-canvas position-right" id="offCanvas" data-off-canvas>
    <!-- Menu -->
    <ul class="header-nav-menulist">
        <li class="highlight social row">
            <span class="social-label">Connect</span>
            <span class="social-icons">
                
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
<span></span>
            </span>
        </li>
        <li class="highlight search">
            <form method="get" action="/directory/">
    
        <input type="text" placeholder="Search for software or solutions" autocomplete="off" name="q" >
        
        <label>
        <input type="submit" class="bt" value="">
            

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
        </label>
    
    </form>
        </li>
        

    

    
    
    
        <li class="highlight"><a href="/articles/">Articles</a></li>
    
    
        <li class="highlight"><a href="/cloud-storage-providers/">Cloud Storage</a></li>
    
    
        <li class="highlight"><a href="/business-voip/">Business VoIP</a></li>
    
    
    
        <li class="highlight"><a href="/speedtest/">Internet Speed Test</a></li>
    

    

        <li><a href="/directory/">Open Source Software</a></li>
        <li><a href="/software/">Business Software</a></li>
        <li><a href="/blog" title="Blog">Blog</a></li>
        <li><a href="https://deals.sourceforge.net/?utm_source=sourceforge&utm_medium=navbar&utm_campaign=homepage">Deals</a></li>
        <li><a href="/support">Help</a></li>
        
        <li><a href="/create">Create</a></li>
        
        
        <li><a href="https://sourceforge.net/auth/">Join/Login</a></li>
        
        <li><a href="/about">About</a></li>
        <li><a href="/top">Top Downloaded Projects</a></li>
        <li><a href="/blog/category/sitestatus/">Site Status</a></li>
        <li><a href="https://twitter.com/sfnet_ops">@sfnet_ops</a></li>
        <li><a href="https://twitter.com/sourceforge">@sourceforge</a></li>
        <li><a href="https://p.sf.net/sourceforge/docs">Site Documentation</a></li>
        <li><a href="/support">Support Request</a></li>
        <li><a href="https://slashdotmedia.com/terms-of-use/">Terms</a></li>
        <li><a href="https://slashdotmedia.com/privacy-statement/">Privacy</a></li>
        <li><a href="https://slashdotmedia.com/opt-out-choices/">Opt Out</a></li>
        <li><a href="https://slashdotmedia.com/">Advertise</a></li>
    </ul>
</div>

        <div class="off-canvas-content" data-off-canvas-content>
            
            
<script>
    SF.linkout_icon = '<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><polygon class="st0" points="243.2,243.2 56.8,243.2 56.8,56.8 123,56.8 123,9 9,9 9,291 291,291 291,179.4 243.2,179 "/><polygon class="st0" points="128.5,213 155,186.5 176,165.5 206.7,196.3 235.5,132.5 248.9,102.6 290.6,9.8 291,9 290.6,9.2 197.4,51.1 169.1,63.8 103.7,93.3 137,126.5 115.9,147.5 89.5,174 "/></svg>';
</script>


    <section class="sandiego l-header-nav-top show-for-large">
        <div class="row">
            <a href="/" title="Home" class="sf-logo">
                

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
            </a>
            <nav class="links">

                <a href="/support" title="Help">Help</a>
                
                <a href="/create" title="Create">Create</a>
                

                
                <a href="/user/registration/" title="Join" >Join</a>
                <a href="https://sourceforge.net/auth/" title="Login">Login</a>
                
            </nav>
        </div>
    </section>

<div class="l-header-nav sticky sandiego l-header-nav-collapse">

    <section class="sandiego l-header-nav-top hide-for-large">
        <div class="row">
            <a href="/" title="Home" class="sf-logo">
                

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
            </a>
            <div class="title-bar-right">
                <button type="button" class="menu-icon" data-toggle="offCanvas"></button>
            </div>
        </div>
    </section>
    <section class="sandiego l-header-nav-bottom">
        <nav class="row">
            <a href="/" title="Home" class="sf-logo">
                

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
            </a>
            <div class="links">
                

    
        <div class="nav-dropdown">
            <a href="/directory" title="Browse">Open Source Software</a>

            <ul class="nav-dropdown-menu">
                <li><a href="/directory/business-enterprise/financial/accounting/">Accounting</a></li>
                <li><a href="/directory/business-enterprise/enterprise/crm/">CRM</a></li>
                <li><a href="/directory/business-enterprise/enterprise/enterprisebi/">Business Intelligence</a></li>
                <li><a href="/directory/graphics/graphics/3dmodeling/">CAD</a></li>
                <li><a href="/directory/business-enterprise/enterprise/plm/">PLM</a></li>
                <li><a href="/directory/business-enterprise/enterprise/processmanagement/">BPM</a></li>
                <li><a href="/directory/business-enterprise/project-management/">Project Management</a></li>
                <li><a href="/directory/business-enterprise/knowledgemanagement/">Knowledge Management</a></li>
                <li><a href="/directory/development/">Development</a></li>
                <li><a href="/directory/business-enterprise/enterprise/sales/">Sales</a></li>
                <li><a href="/directory/business-enterprise/ecommerce/">E-Commerce</a></li>
                <li><a href="/directory/business-enterprise/enterprise/erp/">ERP</a></li>
                <li><a href="/directory/business-enterprise/enterprise/humanresources/">HR</a></li>
                <li><a href="/directory/system-administration/">IT Management</a></li>
                <li><a href="/directory/security-utilities/">IT Security</a></li>
                <li><a href="/directory/business-enterprise/suites/">Office</a></li>
                <li><a href="/directory/science-engineering/">Science & Engineering</a></li>
                <li><a href="/directory">All Software</a></li>
            </ul>
        </div>

        <div class="nav-dropdown">
            <a href="/software">Business Software</a>
            <ul class="nav-dropdown-menu  dropdown-with-pane">
                
                <li class="pane-parent">
                    <a href="/software/crm/">CRM</a>
                    <div class="sub-pane">
                        <div class="heading">CRM</div>

                        
                            <a href="/software/crm/">CRM</a>
                        
                            <a href="/software/customer-service/">Customer Service</a>
                        
                            <a href="/software/customer-engagement/">Customer Engagement</a>
                        
                            <a href="/software/customer-experience/">Customer Experience</a>
                        
                            <a href="/software/point-of-sale/">Point of Sale</a>
                        
                            <a href="/software/content-management/">Content Management System (CMS)</a>
                        
                            <a href="/software/lead-management/">Lead Management</a>
                        
                            <a href="/software/event-management/">Event Management</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/accounting/">Accounting &amp; Finance</a>
                    <div class="sub-pane">
                        <div class="heading">Accounting &amp; Finance</div>

                        
                            <a href="/software/accounting/">Accounting</a>
                        
                            <a href="/software/billing-and-invoicing/">Billing and Invoicing</a>
                        
                            <a href="/software/budgeting/">Budgeting</a>
                        
                            <a href="/software/compliance/">Compliance</a>
                        
                            <a href="/software/payment-processing/">Payment Processing</a>
                        
                            <a href="/software/risk-management/">Risk Management</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/big-data/">Analytics</a>
                    <div class="sub-pane">
                        <div class="heading">Analytics</div>

                        
                            <a href="/software/big-data/">Big Data</a>
                        
                            <a href="/software/business-intelligence/">Business Intelligence</a>
                        
                            <a href="/software/predictive-analytics/">Predictive Analytics</a>
                        
                            <a href="/software/reporting/">Reporting</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/collaboration/">Collaboration</a>
                    <div class="sub-pane">
                        <div class="heading">Collaboration</div>

                        
                            <a href="/software/collaboration/">Team Collaboration</a>
                        
                            <a href="/software/idea-management/">Idea Management</a>
                        
                            <a href="/software/conference/">Conferencing</a>
                        
                            <a href="/software/engineering-cad/">CAD</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/communications/">Communications</a>
                    <div class="sub-pane">
                        <div class="heading">Communications</div>

                        
                            <a href="/software/call-center/">Call Center</a>
                        
                            <a href="/software/call-recording/">Call Recording</a>
                        
                            <a href="/software/call-tracking/">Call Tracking</a>
                        
                            <a href="/software/ivr/">IVR</a>
                        
                            <a href="/software/predictive-dialer/">Predictive Dialer</a>
                        
                            <a href="/software/telephony/">Telephony</a>
                        
                            <a href="/software/voip/">VoIP</a>
                        
                            <a href="/software/web-conferencing/">Web Conferencing</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/marketing/">Marketing</a>
                    <div class="sub-pane">
                        <div class="heading">Marketing</div>

                        
                            <a href="/software/campaign-management/">Campaign Management</a>
                        
                            <a href="/software/digital-asset-management/">Digital Asset Management</a>
                        
                            <a href="/software/email-marketing/">Email Marketing</a>
                        
                            <a href="/software/lead-generation/">Lead Generation</a>
                        
                            <a href="/software/marketing-automation/">Marketing Automation</a>
                        
                            <a href="/software/seo/">SEO</a>
                        
                            <a href="/software/digital-signage/">Digital Signage</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/erp/">ERP</a>
                    <div class="sub-pane">
                        <div class="heading">ERP</div>

                        
                            <a href="/software/erp/">ERP</a>
                        
                            <a href="/software/product-lifecycle-management/">PLM</a>
                        
                            <a href="/software/business-process-management/">Business Process Management</a>
                        
                            <a href="/software/ehs-management/">EHS Management</a>
                        
                            <a href="/software/supply-chain-management/">Supply Chain Management</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/human-resources/">HR</a>
                    <div class="sub-pane">
                        <div class="heading">HR</div>

                        
                            <a href="/software/360-degree-feedback/">360 Degree Feedback</a>
                        
                            <a href="/software/human-resources/">Human Resource Management</a>
                        
                            <a href="/software/benefits-administration/">Benefits Administration</a>
                        
                            <a href="/software/compensation-management/">Compensation Management</a>
                        
                            <a href="/software/employee-engagement/">Employee Engagement</a>
                        
                            <a href="/software/applicant-tracking/">Applicant Tracking</a>
                        
                            <a href="/software/time-clock/">Time Clock</a>
                        
                            <a href="/software/workforce-management/">Workforce Management</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/it-management/">IT Management</a>
                    <div class="sub-pane">
                        <div class="heading">IT Management</div>

                        
                            <a href="/software/it-management/">IT Management</a>
                        
                            <a href="/software/application-performance-management/">Application Performance Management</a>
                        
                            <a href="/software/application-lifecycle-management/">Application Lifecycle Management</a>
                        
                            <a href="/software/it-asset-management/">IT Asset Management</a>
                        
                            <a href="/software/database-management/">Database Management</a>
                        
                            <a href="/software/cloud-management/">Cloud Management</a>
                        
                            <a href="/software/network-monitoring/">Network Monitoring</a>
                        
                            <a href="/software/help-desk/">Help Desk</a>
                        
                            <a href="/software/issue-tracking/">Issue Tracking</a>
                        
                            <a href="/software/devops/">DevOps</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/it-security/">Security</a>
                    <div class="sub-pane">
                        <div class="heading">Security</div>

                        
                            <a href="/software/it-security/">IT Security</a>
                        
                            <a href="/software/endpoint-protection/">Endpoint Protection</a>
                        
                            <a href="/software/identity-management/">Identity Management</a>
                        
                            <a href="/software/network-security/">Network Security</a>
                        
                            <a href="/software/email-security/">Email Security</a>
                        

                    </div>
                </li>
                
                <li class="pane-parent">
                    <a href="/software/project-management/">Project Management</a>
                    <div class="sub-pane">
                        <div class="heading">Project Management</div>

                        
                            <a href="/software/project-management/">Project Management</a>
                        
                            <a href="/software/task-management/">Task Management</a>
                        
                            <a href="/software/project-portfolio-management/">Project Portfolio Management</a>
                        
                            <a href="/software/time-tracking/">Time Tracking</a>
                        

                    </div>
                </li>
                
                 <li>
                    <a href="/software/">All Software</a>
                 </li>
            </ul>
        </div>

        <div class="nav-dropdown">
            <a href="#">Services</a>
            <ul class="nav-dropdown-menu">
                
                <li><a href="/business-voip/">Business VoIP</a></li>
                

                
                <li><a href="/cloud-storage-providers/">Cloud Storage</a></li>
                

                
                <li><a href="/speedtest/">Internet Speed Test</a></li>
                

            </ul>
        </div>

        <div class="nav-dropdown">
            <a href="#">Resources</a>
            <ul class="nav-dropdown-menu">
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/articles">Articles</a></li>
                  <li><a href="https://deals.sourceforge.net/?utm_source=sourceforge&utm_medium=navbar&utm_campaign=homepage">Deals</a></li>
            </ul>
        </div>
    

                <div class="dev-menu-when-stuck">
                    Menu
                    <ul class="dev-menu-dropdown header-nav-menulist">
                        <li><a href="/support">Help</a></li>
                        <li><a href="/create">Create</a></li>
                        <li><a href="/user/registration/" title="Join" >Join</a></li>
                        <li><a href="https://sourceforge.net/auth/" title="Login">Login</a></li>
                    </ul>
                </div>
                <div class="search-toggle-when-stuck">
                    <a class="search-toggle">
                        

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
                    </a>
                </div>
            </div>

            <div class="search">
                <div class="social-icons">
                    
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
<span></span>
                </div>
                <form method="get" action="/directory/">
    
    <div class="typeahead__container">
      <div class="typeahead__field">
        <div class="typeahead__query">
        
        <input type="text" placeholder="Search for software or solutions" autocomplete="off" name="q" >
        
        </div>
        
        <label>
        <input type="submit" class="bt" value="">
            

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg>
        </label>
    
      </div>
    </div>
    
    </form>
            </div>
        </nav>
    </section>
    <div id="banner-sterling" class="sterling">
        
        
        


    

<div id="SF_Temp5_728x90_A_wrapped" data-id="div-gpt-ad-1392148432591-0" class="draper   
visibility_rules
 v_728_leaderboard  v_970_billboard "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432591-0"></div>');
}());

gptadRenderers['SF_Temp5_728x90_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1392148432591-0').parents('.draper').css("min-height", 90 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432591-0');
    });
};
gptadRenderers['SF_Temp5_728x90_A']();  // jshint ignore:line
}
</script>
</div>
        


    

<div id="SF_Mobile_320x50_A_wrapped" data-id="div-gpt-ad-1512154506943-0" class="draper   
"
>
<script>
/*global googletag */
if (!SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1512154506943-0"></div>');
}());

gptadRenderers['SF_Mobile_320x50_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1512154506943-0').parents('.draper').css("min-height", 50 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1512154506943-0');
    });
};
gptadRenderers['SF_Mobile_320x50_A']();  // jshint ignore:line
}
</script>
</div>
        


    

<div id="SF_Temp5_HubIcon_200x90_A_wrapped" data-id="div-gpt-ad-1324209358854-0" class="draper hub  
visibility_rules
 v_200_billboard "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.billboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1324209358854-0"></div>');
}());

gptadRenderers['SF_Temp5_HubIcon_200x90_A'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1324209358854-0');
    });
};

}
</script>
</div>
    </div>
</div>

            
                

                
<div class="full-width-masthead project-masthead" id="downloading" >
    
    
<div class="backdrop" style="box-sizing: content-box; padding-bottom: 131px"></div>

    <div class="content">
        
    <nav id="breadcrumbs" class="breadcrumbs">
        <ul>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" href="/"><span itemprop="title">Home</span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/directory"><span itemprop="title">Browse</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/directory/system-administration/"><span itemprop="title">System Administration</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="/directory/system-administration/networking/"><span itemprop="title">Networking</span></a></li><li class="project">PHP Web Proxy</li>
            
        </ul>
    </nav>


        <div id="starting">
            

<div class="overview">

    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>


    <div class="title">
        
        
        
        
        
        <h1 itemprop="name"><a href="/projects/php-proxy/" itemprop="url">PHP Web Proxy</a></h1>
         
          


        
        
        <h3 class="brought-by">

            
                <div class="project-status">Status: <span class="status-value">Inactive</span></div>
            

            Brought to you by:
            
                
                    <a href="http://sourceforge.net/users/abitkin">abitkin</a>
                
            
        </h3>
        

        
    </div>

    
</div>

            <p id="downloader" class="">
    Your download will start shortly...
</p>



<div class="radial-progress">
    <div class="circle">
        <div class="mask full">
            <div class="fill"></div>
        </div>
        <div class="mask half">
            <div class="fill"></div>
            <div class="fill fix"></div>
        </div>
    </div>
    <div class="inset"></div>
</div>



<script id="redirect-template" type="text/x-handlebars-template">
Learn more: check out <a href="/projects/php-proxy/postdownload">screenshots, reviews, and more</a>. We'll take you there in a few moments.
</script>
            


        </div>

        <div class="buttons clearfix">
            

            
            <a class="button default" data-open="psp-newsletter-modal">Get Updates</a>
    <div class="psp_newsletter_subscribe reveal" data-reveal id="psp-newsletter-modal" data-v-offset="0">
        <div class="modal-content">
            <div class="small-12 row modal-header">
                <div class="sf-email-icon small-6 medium-4">
                    <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><g><circle class="st0" cx="149.8" cy="150.3" r="149"/><path class="st1" d="M240.7,115.6l-27.6-20.7V64.5h-40.5l-17.4-13c-3.3-2.4-7.8-2.4-11.1,0l-17.4,13H86.3v30.4l-27.6,20.7c-2.5,1.2-4.3,3.8-4.3,6.8v109.4H245V122.4C245,119.4,243.3,116.8,240.7,115.6z"/><polygon class="st2" points="208.9,139.8 152.4,185.5 90.6,139.8 90.6,69.8 208.9,69.8 "/><g><path class="st3" d="M240.7,115.6l-27.6-20.7V64.5h-40.5l-17.4-13c-3.3-2.4-7.8-2.4-11.1,0l-17.4,13H86.3v30.4l-27.6,20.7c-2.5,1.2-4.3,3.8-4.3,6.8v109.4H245V122.4C245,119.4,243.3,116.8,240.7,115.6z M62.9,124.9l63.8,48.3l-63.8,46.1C62.9,219.3,62.9,124.9,62.9,124.9z M133.6,178.5l16.1,12.2l16.1-12.2l62,44.9H71.6L133.6,178.5z M172.9,173.2l63.8-48.3v94.4L172.9,173.2z M230.9,118.7l-17.8,13.4v-26.8L230.9,118.7z M149.2,58.2c0.3-0.2,0.7-0.2,1,0l8.4,6.3h-17.9L149.2,58.2z M204.8,72.9v65.6l-55,41.7l-55-41.7V72.9 M86.3,132.2l-17.8-13.4l17.8-13.3V132.2z"/></g></g><g><path class="st4" d="M155.4,121c0-12.5-4.4-18.2-6.8-20.3c-0.5-0.4-1.2,0-1.1,0.6c0.5,7-8.4,8.8-8.4,19.8l0,0c0,0,0,0,0,0.1c0,6.7,5.1,12.2,11.4,12.2c6.3,0,11.4-5.5,11.4-12.2c0,0,0,0,0-0.1l0,0c0-3.1-1.2-6.1-2.4-8.3c-0.2-0.4-0.9-0.3-0.8,0.1C160.8,122.5,155.4,128.4,155.4,121z"/><g><path class="st4" d="M141.9,147.3c-0.3,0-0.6-0.1-0.8-0.3l-29-29c-0.4-0.4-0.4-1.1,0-1.5l30.6-30.6c0.2-0.2,0.5-0.3,0.8-0.3h8.8c0.5,0,0.9,0.3,1,0.7c0.1,0.3,0.1,0.8-0.2,1.2l-28.8,28.8c-0.6,0.6-0.6,1.5,0,2.1l22.8,22.8c0.4,0.4,0.4,1.1,0,1.5l-4.4,4.4C142.5,147.2,142.2,147.3,141.9,147.3z"/></g><g><path class="st4" d="M147.7,152.4c-0.5,0-0.9-0.3-1-0.7c-0.1-0.3-0.1-0.8,0.2-1.2l28.8-28.8c0.3-0.3,0.4-0.7,0.4-1.1s-0.2-0.8-0.4-1.1L153,96.8c-0.4-0.4-0.4-1.1,0-1.5l4.4-4.4c0.2-0.2,0.5-0.3,0.8-0.3s0.6,0.1,0.8,0.3l29,29c0.2,0.2,0.3,0.5,0.3,0.8s-0.1,0.6-0.3,0.8l-30.6,30.6c-0.2,0.2-0.5,0.3-0.8,0.3L147.7,152.4L147.7,152.4z"/></g></g></svg>
                </div>
                <div class="column small-12 medium-8">
                    <span class="subscribe-tagline medium-8">Get project updates, sponsored content from our select partners, and more.</span>
                </div>
            </div>

            

<form action="/user/newsletters/subscribe" method="post"
      class="newsletter-subscribe-form compliance-form optin-wide kmunl-subscribe-form"
      data-shortname="php-proxy" data-handler="KMUNSWidget" >
    <input type="hidden" name="XCjXtbJyUNAnMA1kS2zKcYa5VMQE" value="user">
    <input type="hidden" name="XHyXtbICDI4YGgL9cnceHBPg4XtM" value="PSP">

    <div class="row">
        <div class="column small-12 large-6">
            <input type="email" class="subscriber-email" name="XHDPveJuMsOVz6RxVFAXlLcQr5Tk"  placeholder="Enter your email address" value="" required>
            
        </div>
        <label class="column ">
            <span class="show-for-sr">Country</span>
            <span class="input">
<select id="country-masthead" name="XHjXtbJyUNAll9db_lE5FZtEETWg" required class=" use-placeholder-color">
    
    <option value="">Country:</option>
    
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID" selected>Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set-state column small-6 large-3">
            <span class="show-for-sr">State</span>
            <span class="input">
<select id="state-masthead" name="XHCX2eIaFsOVz6RxVFAXlLcQr5Tk"  class=" use-placeholder-color">
    
    <option value=""></option>
    
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>
    </div>
    <div class="row">
        
            <div class="column small-12 large-4">
                
<label>
    <span class="show-for-sr">Full Name</span>
    <input name="XHTjjdJcW05AaShXc1mfMEdeQDzU" type="text" value="" placeholder="Full name" required >
</label>
<span class="fielderror"></span>
            </div>

            <div class="column small-12 large-4">
                
    <label class="phone-label">
        <span class="show-for-sr">Phone Number</span>
        <input type="tel" name="XHCbqdpyFsOVz6RxVFAXlLcQr5Tk" value="" placeholder="Phone Number " class="phone" required>
    </label>
    <input type="text" name="XECbqdpyFGRXrFMDjXuTFLXFPWEc" value="" placeholder="Ext" class="phone-ext">
    <span class="fielderror"></span>
    <span class="fielderror"></span>
            </div>

            
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Job Title</span>
        <input type="text" name="XGjztewR1pvm5Q5wetE7wAmx6Aw4" value="" placeholder="Job Title" class="job" required>
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Industry</span>
        <input type="text" name="XET_sfYeTMgLqlqOWN0fMpLMtcXs" value="" placeholder="Industry" class="industry" required>
        <span class="fielderror"></span>
    </label>
        </div>
        <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company</span>
        <input type="text" name="XHjXtdIKBKAll9db_lE5FZtEETWg" value="" placeholder="Company " class="company" required>
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company Size</span>
        
<select id="employees-1938808" name="XEDPvaZ6PPxX2E8DjXuTFLXFPWEc" required class="employees use-placeholder-color">
    
    <option value="">Company Size:</option>
    
    <option value="1 - 25">1 - 25</option>
    <option value="26 - 99">26 - 99</option>
    <option value="100 - 499">100 - 499</option>
    <option value="500 - 999">500 - 999</option>
    <option value="1,000 - 4,999">1,000 - 4,999</option>
    <option value="5,000 - 9,999">5,000 - 9,999</option>
    <option value="10,000 - 19,999">10,000 - 19,999</option>
    <option value="20,000 or More">20,000 or More</option>
</select>

        <span class="fielderror"></span>
    </label>
    </div>
        

        <div class="column small-12">
            
                
 

<label class="input-set input-set-kmu kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XGj3vbAR1pvm5Q5wetE7wAmx6Aw4" value="php-proxy"  data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


                
                
 

<label class="input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XEjjnboGMIwTnBUQFSPgPh_EE:Aw" value="sitewide"  data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


                
 

<label class="input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XEjjnboGMIwTnBUQFSPgPh_EE:Aw" value="sitewide research"  data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>


            

            

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XFjXtd4aBJQTMDVMC1gKLfS2ysu0" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XFjXtd4aBJQTMDVMC1gKLfS2ysu0" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XFjXtd4aBJQTMDVMC1gKLfS2ysu0" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    
</div>


            <input type="hidden" name="XEjjnboGMIwTnBUQFSPgPh_EE:Aw" class="input-assumed-newsletters" value="">
            <input type="hidden" name="XGj3vbAR1pvm5Q5wetE7wAmx6Aw4" class="input-assumed-kmu" value="">
        </div>

        
 

<label class="input-set input-set-agree-general allow-precheck column small-12">
    <span class="checkbox"> <input type="checkbox" name="XHjXtd4GFKARl9db_lE5FZtEETWg" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>


        
 

<label class="input-set input-set-agree-general-gdpr minimum-explicit-required column small-12">
    <span class="checkbox"> <input type="checkbox" name="XHjXtd4GFKARl9db_lE5FZtEETWg" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>



        <div class="subscriber-submit-wrapper column small-12">
            

    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="bottomleft"
          data-size="invisible"
          >
    </div>


            <button type="submit" class="subscriber-submit blue button">
                <span>
                    Subscribe
                </span>
            </button>
        </div>
    </div>
    
  <input type="hidden" name="_visit_cookie" value="a91b70d5-a30d-4566-aad3-c649db7a8482"/>
    <input type='hidden' name='timestamp' value='1552198931'/>
    <input type='hidden' name='spinner' value='XGVaCGfLgRnCTYDZ2vm3vDtsnUmQ'/>
    <p class='q9c85b6c16991eb9e9899e60abb864e7d55f704ac'><label for='XHj7td5eZdkBl9db_lE5FZtEETWg'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XHj7td5eZdkBl9db_lE5FZtEETWg' name='XHz7td5eZdoYGgL9cnceHBPg4XtM' type=
             'text'/></p>
    <p class='q9c85b6c16991eb9e9899e60abb864e7d55f704ac'><label for='XHj7td5eZdkFl9db_lE5FZtEETWg'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XHj7td5eZdkFl9db_lE5FZtEETWg' name='XHz7td5eZd4YGgL9cnceHBPg4XtM' type=
             'text'/></p>
</form>


            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="column small-12 row close-container">
                <a class="close-text column small-12" data-close href="#">No, thanks</a>
            </div>
        </div>
    </div>
            

            <a id="share-project-button" class="button default" href="#">Share This</a>
            

<div class="social-sharing-buttons invisible hide">
    
    
    
    <a class="social-media-icon twitter" href="https://twitter.com/share?url=https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download&amp;text=Download%20PHP%20Web%20Proxy%20on%20SourceForge%20for%20free%21%20" title="Share PHP Web Proxy on SourceForge on Twitter">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
    <a class="social-media-icon facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download&title=PHP%20Web%20Proxy%20on%20SourceForge" title="Share PHP Web Proxy on SourceForge on facebook">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
    <a class="social-media-icon linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https://sourceforge.net/projects/php-proxy/files/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz/download&title=PHP%20Web%20Proxy%20on%20SourceForge&source=SourceForge.net" title="Share PHP Web Proxy on SourceForge on LinkedIn">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
</div>


            
                
    
    <div class="reveal" id="mirror-modal">
        <div class="modal-content row">
            <div class="column small-12 row modal-header">
            </div>

            <div id="mirror-drawer"></div>

            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <a class="button default mirror " id="btn-problems-downloading" data-release-url="https://downloads.sourceforge.net/project/php-proxy/php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz?r=http%3A%2F%2Fuclaut.net%2F-1FDCW%2FF3NuV%3Frndad%3D609546739-1552198876&amp;ts=1552198931&amp;use_mirror=excellmedia" rel="nofollow" href="/settings/mirror_choices?projectname=php-proxy&amp;filename=php-proxy/Dean%201.6%20pre-alpha/PHP-PROXY_Dean_1.6.tar.gz&amp;selected=excellmedia">Problems Downloading?</a>
            
        </div>

        <div class="file-info">
            <div class="file-name">
                    PHP-PROXY_Dean_1.6.tar.gz
                
            </div>

            
            
            <div id="scanned_by">
                <span>Scanned by:</span> <a href="http://www.bitdefender.com/business/"><img alt="Bitdefender" src="//a.fsdn.com/con/img/bitdefender.png" width="116" height="17"/></a>
            </div>
        </div>

        
    </div>
    <div id="mirror">
        <div class="mirror-title">Mirror Provided by</div><a id="provider_top" href="http://excellmedia.net/" title="Excell Media"><img class="mirror-logo" alt="Excell Media"
                  src="https://a.fsdn.com/mirrorimages/excellmedia-xlarge.png" width="230" height="126" 
                    srcset="https://a.fsdn.com/mirrorimages/excellmedia-hidpi.png 2x" /></a>
          <div class="mirror-footer">Learn more about Excell Media  - <a href="http://excellmedia.net/" title="Excell Media">Visit Site</a></div>
    </div>
</div>

                <div class="l-two-column-page">
                    <div class="l-content-column">
                        
<div class="project-body">
    <article class="main-content">

         
    
        
        


<div class="nel-empty">
  
<span id="9029e9d5-d5ff-4da2-a9d7-7ea90b3ceb32"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=9029e9d5-d5ff-4da2-a9d7-7ea90b3ceb32&z=18221',
        '',
        '9029e9d5-d5ff-4da2-a9d7-7ea90b3ceb32');
</script>
  
    
    
    
<span id="c1a25438-96de-4d69-81f6-d8b43b95bc03"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=c1a25438-96de-4d69-81f6-d8b43b95bc03&z=18825',
        '',
        'c1a25438-96de-4d69-81f6-d8b43b95bc03');
</script>
  
</div>



<div class="nel-empty">
  
<span id="68bf0c7d-2713-4e30-8d48-1e5b990b3772"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=68bf0c7d-2713-4e30-8d48-1e5b990b3772&z=18221',
        '',
        '68bf0c7d-2713-4e30-8d48-1e5b990b3772');
</script>
  
</div>



<div class="nel-empty">
  
<span id="19ee201f-c92f-4119-8409-c6263dd1f440"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=19ee201f-c92f-4119-8409-c6263dd1f440&z=18221',
        '',
        '19ee201f-c92f-4119-8409-c6263dd1f440');
</script>
  
</div>



<div class="nel-empty">
  
<span id="9ada4aba-c9e6-4894-8ee4-a636028dfacd"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=9ada4aba-c9e6-4894-8ee4-a636028dfacd&z=18221',
        '',
        '9ada4aba-c9e6-4894-8ee4-a636028dfacd');
</script>
  
</div>



<div class="nel-empty">
  
<span id="90e19f68-f6b4-4fbf-a066-f5928da3d6c5"></span>
<script>
    /* globals bizx */
    
    bizx.cmp.trackingPixel('publisher', ['storage', 'measurement'],
        '/directory/tp/?b=21483&c=3248&cb=90e19f68-f6b4-4fbf-a066-f5928da3d6c5&z=18221',
        '',
        '90e19f68-f6b4-4fbf-a066-f5928da3d6c5');
</script>
  
</div>


        
            <section class="sterling">
            


    
    

<div id="SF_Temp5_multi_A_wrapped" data-id="div-gpt-ad-1392148432595-0" class="draper multisize  checkDirectSoldForLeadForm
visibility_rules
 v_622_leaderboard  v_602_leaderboard  v_300_leaderboard  v_336_leaderboard  v_700_leaderboard  v_728_leaderboard "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432595-0"></div>');
}());

gptadRenderers['SF_Temp5_multi_A'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432595-0');
    });
};
gptadRenderers['SF_Temp5_multi_A']();  // jshint ignore:line
}
</script>
</div>
            


    
    

<div id="SF_Mobile_Multi_B_wrapped" data-id="div-gpt-ad-1512154653435-0" class="draper multisize  
"
>
<script>
/*global googletag */
if (!SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1512154653435-0"></div>');
}());

gptadRenderers['SF_Mobile_Multi_B'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1512154653435-0');
    });
};
gptadRenderers['SF_Mobile_Multi_B']();  // jshint ignore:line
}
</script>
</div>
            </section>
        
    

        <section class="sterling">
            


    
    

<div id="SF_Temp5_multi_B_wrapped" data-id="div-gpt-ad-1392148432596-0" class="draper multisize  
visibility_rules
 v_622_leaderboard  v_602_leaderboard  v_300_leaderboard  v_336_leaderboard  v_700_leaderboard  v_728_leaderboard "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432596-0"></div>');
}());

gptadRenderers['SF_Temp5_multi_B'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432596-0');
    });
};
gptadRenderers['SF_Temp5_multi_B']();  // jshint ignore:line
}
</script>
</div>
            


    
    

<div id="SF_Mobile_Multi_C_wrapped" data-id="div-gpt-ad-1512154755912-0" class="draper multisize  
"
>
<script>
/*global googletag */
if (!SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1512154755912-0"></div>');
}());

gptadRenderers['SF_Mobile_Multi_C'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1512154755912-0');
    });
};
gptadRenderers['SF_Mobile_Multi_C']();  // jshint ignore:line
}
</script>
</div>
        </section>
        

        
        <div class="small-12 columns hr-bottom">
            <aside class="content-supplement">
                <header>
                    <h3>PHP Web Proxy Overview</h3>
                </header>

                <div class="project-container">
                    
                    <p id="description">PHP Http Proxy is a php script for taking webpages from one server and processes so that your main server is proctected/hidden.  Usefull for those who have or require indirect access to the web and or their server.</p>
                </div>
            </aside>
        </div>
        


        


        
        <div class="small-12 columns hr-bottom">
            
<section id="project-additional-trove" class="content-supplement">
    <header>
        <h2>Additional Details for PHP Web Proxy</h2>
    </header>
    <div class="project-container">
        <section class="project-info">
    <header>
        <h3>Languages</h3>
    </header>
    <section class="content"><a href="/directory/natlanguage:english/" itemprop=inLanguage>English</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>Intended Audience</h3>
    </header>
    <section class="content"><a href="/directory/audience:developers/">Developers</a>, <a href="/directory/audience:endusers/">End Users/Desktop</a>, <a href="/directory/audience:other/">Other Audience</a>, <a href="/directory/audience:sysadmins/">System Administrators</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>User Interface</h3>
    </header>
    <section class="content"><a href="/directory/environment:web/">Web-based</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>Programming Language</h3>
    </header>
    <section class="content"><a href="/directory/language:php/">PHP</a></section>
</section>


        <section class="project-info">
            <header>
                <h4>Registered</h4>
            </header>
            <section class="content">
                2002-04-28
            </section>
        </section>

        
        <section class="project-info">
            <header>
                <h3>Last Updated</h3>
            </header>
            <section class="content">
                <time itemprop="dateModified" class="dateUpdated" datetime="2013-04-11">2013-04-11</time>
            </section>
        </section>
        <section class="project-info">
            <header>
                <h3>Categories</h3>
            </header><a href="/directory/system-administration/networking/" itemprop="applicationCategory">Networking</a>, <a href="/directory/internet/www/" itemprop="applicationCategory">WWW/HTTP</a></section>
        <section class="project-info">
            <header>
                <h3>Maintainers</h3>
            </header><a href="/users/abitkin"><span>abitkin</span></a>
        </section>
    </div>
</section>

        </div>
        
        
<aside class="m-wide-widget m-wide-projects-widget ">
    <header>Recommended Projects</header>
    <div class="body">
        <ul>
            
            





<li>
    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="https://sourceforge.net/projects/phpproxy" title="Find out more about phpproxy">
                
                <strong>phpproxy</strong>
            </a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true">

    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
</div>


        <a href="/projects/phpproxy/reviews/" class="count" title="Reviews">1 Review</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/phpproxy/files/stats/timeline" title="Downloads This Week">6 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/phpproxy/activity">
        <time class="dateUpdated" datetime="2013-03-27">2013-03-27</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="https://sourceforge.net/projects/phpproxy" title="Find out more about phpproxy" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
            





<li>
    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="https://sourceforge.net/projects/poxy" title="Find out more about PHProxy">
                
                <strong>PHProxy</strong>
            </a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true">

    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
</div>


        <a href="/projects/poxy/reviews/" class="count" title="Reviews">57 Reviews</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/poxy/files/stats/timeline" title="Downloads This Week">0 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/poxy/activity">
        <time class="dateUpdated" datetime="2017-06-05">2017-06-05</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="https://sourceforge.net/projects/poxy" title="Find out more about PHProxy" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
            





<li>
    

<div class="project-icon   " >
    
    
    <img alt="KeePass Icon" 
src="//a.fsdn.com/allura/p/keepass/icon?1506873000?&amp;w=48"
    srcset="//a.fsdn.com/allura/p/keepass/icon?1506873000?&amp;w=72 1.5x
        ,
            //a.fsdn.com/allura/p/keepass/icon?1506873000?&amp;w=96 2x"/></div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="https://sourceforge.net/projects/keepass" title="Find out more about KeePass">
                
                <strong>KeePass</strong>
            </a>
            
            <a href="https://sourceforge.net/projects/keepass" title="Find out more about KeePass" class="summary-inline">A lightweight and easy-to-use password manager</a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true">

    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    
    <div class="star responsive half">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z"/><path class="st0" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8"/></svg>
    </div>

    
</div>


        <a href="/projects/keepass/reviews/" class="count" title="Reviews">514 Reviews</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/keepass/files/stats/timeline" title="Downloads This Week">126,258 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/keepass/activity">
        <time class="dateUpdated" datetime="2019-02-26">2019-02-26</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="https://sourceforge.net/projects/keepass" title="Find out more about KeePass" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
        </ul>
    </div>
</aside>

        <hr class="bottom">


        
        <div class="small-12 columns content-supplement">
            
    <div class="m-project-activity columns small-12 ">
        <div class="heading">
            <h3>Project Activity</h3>
            <div>
                <a class="button yellow icon-only follow-action-disabled show-for-medium"
                   href="https://sourceforge.net/auth/?return_to=%2Fprojects%2Fphp-proxy%2Ffiles%2Fphp-proxy%2FDean%25201.6%2520pre-alpha%2FPHP-PROXY_Dean_1.6.tar.gz%2Fdownload%3Fuse_mirror%3Dexcellmedia"
                        title="Follow PHP Web Proxy - Requires login"><svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg></a>
                <a class="button blue icon-only show-for-medium" href="/p/php-proxy/activity/feed" title="RSS"><svg    xmlns="http://www.w3.org/2000/svg"           viewBox="0 0 1408.1818 1408"   version="1.1">  <path     d="m 384,1216 q 0,80 -56,136 -56,56 -136,56 -80,0 -136,-56 -56,-56 -56,-136 0,-80 56,-136 56,-56 136,-56 80,0 136,56 56,56 56,136 z m 512,123 q 2,28 -17,48 -18,21 -47,21 l -135,0 q -25,0 -43,-16.5 Q 636,1375 634,1350 612,1121 449.5,958.5 287,796 58,774 33,772 16.5,754 0,736 0,711 L 0,576 q 0,-29 21,-47 17,-17 43,-17 l 5,0 q 160,13 306,80.5 146,67.5 259,181.5 114,113 181.5,259 67.5,146 80.5,306 z m 512,2 q 2,27 -18,47 -18,20 -46,20 l -143,0 q -26,0 -44.5,-17.5 Q 1138,1373 1137,1348 1125,1133 1036,939.5 947,746 804.5,603.5 662,461 468.5,372 275,283 60,270 35,269 17.5,250.5 0,232 0,207 L 0,64 Q 0,36 20,18 38,0 64,0 l 3,0 Q 329,13 568.5,120 808,227 994,414 q 187,186 294,425.5 107,239.5 120,501.5 z"          /></svg></a>
            </div>
        </div>
        <div id="project-activity">
            
            <div class="space--placeholder" style="height: 315px"></div>
        </div>
        <p class="all-activities"><a href="/p/php-proxy/activity">See All Activity &gt;</a></p>
    </div>

    <script type="text/x-handlebars-template" id="project-activity-template">
    
        <ul class="list-of-activities">
            {{#each timeline}}
            <li class="item">
                <time datetime="{{ iso8601date this.published }}" title="{{ readable_date this.published }}">{{ ago this.published }}</time>
                <div>
                {{#ifTagged "release"}}
                  {{ cap this.verb }}
                {{else}}
                  {{ icon this.actor.activity_extras.icon_url }}
                  {{ activity_obj this.actor }}
                  {{ this.verb }}
                {{/ifTagged}}
                {{ activity_obj this.obj }}
                {{#if this.target.activity_name}} on {{ activity_obj this.target }}{{/if}}
                </div>
                <div class="summary">
                    {{ this.obj.activity_extras.summary }}
                </div>
            </li>
            {{/each}}
        </ul>
    
    </script>
        </div>
        
        

<div id="taboola-below-article-thumbnails"></div>
<script>
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({
    mode: 'thumbnails-b',
    container: 'taboola-below-article-thumbnails',
    placement: 'Below Article Thumbnails',
    target_type: 'mix'
});
</script>

        

        
            
<aside class="m-wide-widget m-wide-projects-widget ">
    <header>Top 3 Projects in Networking</header>
    <div class="body">
        <ul>
            
            





<li>
    

<div class="project-icon   " >
    
    
    <img alt="Scrollout F1 Icon" 
src="//a.fsdn.com/allura/p/scrollout/icon?1513717495?&amp;w=48"
    srcset="//a.fsdn.com/allura/p/scrollout/icon?1513717495?&amp;w=72 1.5x
        ,
            //a.fsdn.com/allura/p/scrollout/icon?1513717495?&amp;w=96 2x"/></div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="/projects/scrollout/" title="Find out more about Scrollout F1">
                
                <strong>Scrollout F1</strong>
            </a>
            
            <a href="/projects/scrollout/" title="Find out more about Scrollout F1" class="summary-inline">An easy-to-use anti-spam email gateway</a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true">

    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    
    <div class="star responsive half">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z"/><path class="st0" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8"/></svg>
    </div>

    
</div>


        <a href="/projects/scrollout/reviews/" class="count" title="Reviews">89 Reviews</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/scrollout/files/stats/timeline" title="Downloads This Week">446,138 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/scrollout/activity">
        <time class="dateUpdated" datetime="2018-04-08">2018-04-08</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="/projects/scrollout/" title="Find out more about Scrollout F1" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
            





<li>
    

<div class="project-icon  default-project-icon " >
    
    
    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><rect class="st0" width="300" height="300"/><g><path class="st1" d="M162.5,154.8c0-28.9-10.2-42-15.6-46.9c-1.1-1-2.7-0.1-2.6,1.3c1.1,16.3-19.4,20.3-19.4,45.9h0c0,0.1,0,0.1,0,0.2c0,15.6,11.8,28.3,26.3,28.3c14.5,0,26.3-12.7,26.3-28.3c0-0.1,0-0.1,0-0.2h0c0-7.2-2.7-14.1-5.5-19.3c-0.5-1-2.1-0.6-1.9,0.3C174.9,158.1,162.5,171.8,162.5,154.8z"/><g><path class="st1" d="M131.2,215.6c-0.7,0-1.3-0.3-1.8-0.7l-67.2-67.1c-1-1-1-2.6,0-3.6l70.9-70.9c0.5-0.5,1.1-0.7,1.8-0.7h20.4c1.2,0,2,0.8,2.3,1.6c0.3,0.7,0.3,1.9-0.5,2.7l-66.7,66.7c-1.3,1.3-1.3,3.5,0,4.9l52.7,52.7c1,1,1,2.6,0,3.6L133,214.9C132.5,215.4,131.9,215.6,131.2,215.6z"/></g><g><path class="st1" d="M144.7,227.4c-1.2,0-2-0.8-2.3-1.5c-0.3-0.7-0.3-1.9,0.5-2.7l66.7-66.7c0.7-0.6,1-1.5,1-2.4s-0.4-1.8-1-2.4l-52.7-52.7c-1-1-1-2.6,0-3.6l10.2-10.2c0.5-0.5,1.1-0.7,1.8-0.7c0.7,0,1.3,0.3,1.8,0.7l67,67.1c0.5,0.5,0.7,1.1,0.7,1.8s-0.3,1.3-0.7,1.8l-70.9,70.9c-0.5,0.5-1.1,0.7-1.8,0.7H144.7z"/></g></g></svg>
    </div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="/projects/autoap/" title="Find out more about AutoAP">
                
                <strong>AutoAP</strong>
            </a>
            
            <a href="/projects/autoap/" title="Find out more about AutoAP" class="summary-inline">A script to find open Wi-Fi connections and the strongest signal</a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true">

    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    
    <div class="star responsive half">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"><path class="st1" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8c11.3,37.1,22.6,74,34,110.9c39-0.8,78-1.5,117.2-2.3c-0.3,0.3-0.5,0.4-0.7,0.6c-15.7,11-31.5,22.1-47.2,33.1c-15.5,10.8-30.9,21.7-46.4,32.5c-0.5,0.4-0.6,0.7-0.4,1.3c12.1,35.8,24.3,71.6,36.4,107.4c0.1,0.2,0.1,0.4,0.2,0.8C210.8,269.1,179.8,246.3,148.8,223.4z"/><path class="st0" d="M148.8,223.4c-31.1,22.9-62.2,45.8-93.5,68.9c0.1-0.4,0.2-0.7,0.3-0.9c12.7-35.9,25.3-71.7,38-107.6c0.2-0.6,0.2-1-0.4-1.4c-30.8-21.4-61.6-42.8-92.4-64.2c-0.7-0.5-0.9-1-0.7-1.8c0.4,0,0.8,0,1.1,0c26.2,0.3,52.4,0.7,78.6,1c11.3,0.2,22.7,0.3,34,0.5c0.8,0,1.1-0.2,1.4-1c11.1-36.2,22.3-72.4,33.4-108.5c0.1-0.2,0.1-0.4,0.3-0.8"/></svg>
    </div>

    
</div>


        <a href="/projects/autoap/reviews/" class="count" title="Reviews">24 Reviews</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/autoap/files/stats/timeline" title="Downloads This Week">372,477 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/autoap/activity">
        <time class="dateUpdated" datetime="2015-08-06">2015-08-06</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="/projects/autoap/" title="Find out more about AutoAP" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
            





<li>
    

<div class="project-icon   " >
    
    
    <img alt="waircut Icon" 
src="//a.fsdn.com/allura/p/waircut/icon?1507804841?&amp;w=48"
    srcset="//a.fsdn.com/allura/p/waircut/icon?1507804841?&amp;w=72 1.5x
        ,
            //a.fsdn.com/allura/p/waircut/icon?1507804841?&amp;w=96 2x"/></div>

    <div class="project-info ">
        <div class="result-heading-texts">
            <a href="/projects/waircut/" title="Find out more about waircut">
                
                <strong>waircut</strong>
            </a>
            
            <a href="/projects/waircut/" title="Find out more about waircut" class="summary-inline">WPS wireless protocol audit software for Windows</a>
            
        </div>
        
        <div class="stats">
            
    
    <div class="rating">
        





<div class="m-stars" aria-hidden="true">

    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
    
    
    
    
    
    
    <div class="star responsive yellow">
        <svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 285.8" style="enable-background:new 0 0 300 285.8;" xml:space="preserve"><polygon class="st0" points="150,0 185.4,109.2 300,109.2 207.3,176.6 242.7,285.8 150,218.3 57.3,285.8 92.7,176.6 0,109.2 114.6,109.2 "/></svg>
    </div>

    
</div>


        <a href="/projects/waircut/reviews/" class="count" title="Reviews">8 Reviews</a>
    </div>
    

    <strong>
        <span class="label">Downloads:</span>
        <a href="/projects/waircut/files/stats/timeline" title="Downloads This Week">11,949 This Week</a>
    </strong>

    <strong>
        <span class="label">Last Update:</span>
        <a href="/p/waircut/activity">
        <time class="dateUpdated" datetime="2019-02-18">2019-02-18</time>
        </a>
    </strong>

        </div>
        
    </div>
    <div>
        <a href="/projects/waircut/" title="Find out more about waircut" class="button green hollow see-project">See Project</a>
    </div>
</li>

            
        </ul>
    </div>
</aside>

        

        
        <div class="dlp_newsletter_subscribe">
            
<div class="m-kmu row">
    <div class="small-12 column">
        <div class="row is-collapse-child">
            <div class="small-12 column">
                <h1>Keep Me Updated!</h1>
                <div class="subscribe-tagline">Get PHP Web Proxy updates, sponsored content from our select partners and more.</div>
                

<form action="/user/newsletters/subscribe" method="post"
      class="newsletter-subscribe-form compliance-form optin-wide kmunl-subscribe-form"
      data-shortname="php-proxy" data-handler="KMUNSWidget" data-delay-captcha>
    <input type="hidden" name="XCjXtbJyUNAnMA1kS2zKcYa5VMQE" value="user">
    <input type="hidden" name="XHyXtbICDI4YGgL9cnceHBPg4XtM" value="DLP">

    <div class="row">
        <div class="column small-12 large-6">
            <input type="email" class="subscriber-email" name="XHDPveJuMsOVz6RxVFAXlLcQr5Tk"  placeholder="Enter your email address" value="" required>
            
        </div>
        <label class="column ">
            <span class="show-for-sr">Country</span>
            <span class="input">
<select id="country" name="XHjXtbJyUNAll9db_lE5FZtEETWg" required class=" use-placeholder-color">
    
    <option value="">Country:</option>
    
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID" selected>Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set-state column small-6 large-3">
            <span class="show-for-sr">State</span>
            <span class="input">
<select id="state" name="XHCX2eIaFsOVz6RxVFAXlLcQr5Tk"  class=" use-placeholder-color">
    
    <option value=""></option>
    
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>
    </div>
    <div class="row">
        
            <div class="column small-12 large-4">
                
<label>
    <span class="show-for-sr">Full Name</span>
    <input name="XHTjjdJcW05AaShXc1mfMEdeQDzU" type="text" value="" placeholder="Full name" required >
</label>
<span class="fielderror"></span>
            </div>

            <div class="column small-12 large-4">
                
    <label class="phone-label">
        <span class="show-for-sr">Phone Number</span>
        <input type="tel" name="XHCbqdpyFsOVz6RxVFAXlLcQr5Tk" value="" placeholder="Phone Number " class="phone" required>
    </label>
    <input type="text" name="XECbqdpyFGRXrFMDjXuTFLXFPWEc" value="" placeholder="Ext" class="phone-ext">
    <span class="fielderror"></span>
    <span class="fielderror"></span>
            </div>

            
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Job Title</span>
        <input type="text" name="XGjztewR1pvm5Q5wetE7wAmx6Aw4" value="" placeholder="Job Title" class="job" required>
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Industry</span>
        <input type="text" name="XET_sfYeTMgLqlqOWN0fMpLMtcXs" value="" placeholder="Industry" class="industry" required>
        <span class="fielderror"></span>
    </label>
        </div>
        <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company</span>
        <input type="text" name="XHjXtdIKBKAll9db_lE5FZtEETWg" value="" placeholder="Company " class="company" required>
        <span class="fielderror"></span>
    </label>
    </div>
    <div class="column small-12 large-4">
    <label>
        <span class="show-for-sr">Company Size</span>
        
<select id="employees-9266767" name="XEDPvaZ6PPxX2E8DjXuTFLXFPWEc" required class="employees use-placeholder-color">
    
    <option value="">Company Size:</option>
    
    <option value="1 - 25">1 - 25</option>
    <option value="26 - 99">26 - 99</option>
    <option value="100 - 499">100 - 499</option>
    <option value="500 - 999">500 - 999</option>
    <option value="1,000 - 4,999">1,000 - 4,999</option>
    <option value="5,000 - 9,999">5,000 - 9,999</option>
    <option value="10,000 - 19,999">10,000 - 19,999</option>
    <option value="20,000 or More">20,000 or More</option>
</select>

        <span class="fielderror"></span>
    </label>
    </div>
        

        <div class="column small-12">
            
                
 

<label class="input-set input-set-kmu kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XGj3vbAR1pvm5Q5wetE7wAmx6Aw4" value="php-proxy"  data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


                
                
 

<label class="input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XEjjnboGMIwTnBUQFSPgPh_EE:Aw" value="sitewide"  data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


                
 

<label class="input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XEjjnboGMIwTnBUQFSPgPh_EE:Aw" value="sitewide research"  data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>


            

            

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XFDnkf5eSNS_nD0Yf3R4ZmzuueEc" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XFjXtd4aBJQTMDVMC1gKLfS2ysu0" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XFjXtd4aBJQTMDVMC1gKLfS2ysu0" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XFjXtd4aBJQTMDVMC1gKLfS2ysu0" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    
</div>


            <input type="hidden" name="XEjjnboGMIwTnBUQFSPgPh_EE:Aw" class="input-assumed-newsletters" value="">
            <input type="hidden" name="XGj3vbAR1pvm5Q5wetE7wAmx6Aw4" class="input-assumed-kmu" value="">
        </div>

        
 

<label class="input-set input-set-agree-general allow-precheck column small-12">
    <span class="checkbox"> <input type="checkbox" name="XHjXtd4GFKARl9db_lE5FZtEETWg" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>


        
 

<label class="input-set input-set-agree-general-gdpr minimum-explicit-required column small-12">
    <span class="checkbox"> <input type="checkbox" name="XHjXtd4GFKARl9db_lE5FZtEETWg" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="/support">Contact Us</a> for more details.</span>
    

</label>



        <div class="subscriber-submit-wrapper column small-12">
            

    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="bottomleft"
          data-size="invisible"
          >
    </div>


            <button type="submit" class="subscriber-submit  button">
                <span>
                    Subscribe
                </span>
            </button>
        </div>
    </div>
    
  <input type="hidden" name="_visit_cookie" value="a91b70d5-a30d-4566-aad3-c649db7a8482"/>
    <input type='hidden' name='timestamp' value='1552198931'/>
    <input type='hidden' name='spinner' value='XGVaCGfLgRnCTYDZ2vm3vDtsnUmQ'/>
    <p class='q9c85b6c16991eb9e9899e60abb864e7d55f704ac'><label for='XHj7td5eZd0Bl9db_lE5FZtEETWg'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XHj7td5eZd0Bl9db_lE5FZtEETWg' name='XHz7td5eZdoYGgL9cnceHBPg4XtM' type=
             'text'/></p>
    <p class='q9c85b6c16991eb9e9899e60abb864e7d55f704ac'><label for='XHj7td5eZd0Fl9db_lE5FZtEETWg'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XHj7td5eZd0Fl9db_lE5FZtEETWg' name='XHz7td5eZd4YGgL9cnceHBPg4XtM' type=
             'text'/></p>
</form>


            </div>
        </div>
    </div>
</div>

        </div>
        
        <section class="sterling">
            


    

<div id="SF_Temp5_728x90_B_wrapped" data-id="div-gpt-ad-1392148432592-0" class="draper leaderboard  
visibility_rules
 v_728_leaderboard "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432592-0"></div>');
}());

gptadRenderers['SF_Temp5_728x90_B'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432592-0');
    });
};
gptadRenderers['SF_Temp5_728x90_B']();  // jshint ignore:line
}
</script>
</div>
        </section>
        
    </article>
</div>
                    </div>
                    <div class="l-gutter">
                    </div>
                    <div class="l-side-column">
                        
<div class="scroll-fixable">
    
    <section class="sterling">
    


    
    

<div id="SF_Temp5_300x250_A_wrapped" data-id="div-gpt-ad-1392148432593-0" class="draper multisize  
visibility_rules
 v_300_large "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432593-0"></div>');
}());

gptadRenderers['SF_Temp5_300x250_A'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1392148432593-0').parents('.draper').css("min-height", 250 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432593-0');
    });
};
gptadRenderers['SF_Temp5_300x250_A']();  // jshint ignore:line
}
</script>
</div>


    

<div id="SF_Temp5_300x250_B_wrapped" data-id="div-gpt-ad-1392148432594-0" class="draper medrec  
visibility_rules
 v_300_large "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432594-0"></div>');
}());

gptadRenderers['SF_Temp5_300x250_B'] = function(){  // jshint ignore:line
    
        if (!SF.adblock) {
            $('#div-gpt-ad-1392148432594-0').parents('.draper').css("min-height", 250 + 13); // 13 for height of .lbl-ad
        }
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432594-0');
    });
};
gptadRenderers['SF_Temp5_300x250_B']();  // jshint ignore:line
}
</script>
</div>
    


    

<div id="SF_Temp5_300x250_C_wrapped" data-id="div-gpt-ad-1392148432598-0" class="draper medrec  
visibility_rules
 v_300_large "
>
<script>
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148432598-0"></div>');
}());

gptadRenderers['SF_Temp5_300x250_C'] = function(){  // jshint ignore:line
    
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148432598-0');
    });
};
gptadRenderers['SF_Temp5_300x250_C']();  // jshint ignore:line
}
</script>
</div>
    </section>


    
</div>

    
<script>
if (!SF.adblock && SF.initial_breakpoints_visible.large) {
    
    SF.Ads.scrollFixable = new SF.ScrollFixable($('.scroll-fixable').eq(0), {"watchAvoidStickiness": true, "avoidElement": ".l-header-nav, .l-header-nav-bottom", "adjustHorizontal": false});
    
}
</script>

                    </div>
                </div>
            
            

<footer class="sandiego">
    <section class="l-nav-top">
        <nav class="row">
            <div class="columns show-for-large large-2">
                <a href="/about" title="About">About</a>
                <a href="/blog/category/sitestatus/" title="Site Status">Site Status</a>
                <a href="https://twitter.com/sfnet_ops" title="@sfnet_ops">@sfnet_ops</a>
            </div>
            <div class="columns show-for-large large-2">
                
                    <a href="/create" title="Create a Project">Create a Project</a>
                    <a href="/directory/" title="Open Source Software Directory">Open Source Software</a>
                    <a href="/software/" title="Business Software Directory">Business Software</a>
                

                
                <a href="/top" title="Top Downloaded Projects">Top Downloaded Projects</a>
                
            </div>
            <div class="columns show-for-large large-2">
                <a href="/blog/" title="Blog">Blog</a>
                <a href="https://twitter.com/sourceforge" title="@sourceforge">@sourceforge</a>
                <a href="https://library.slashdotmedia.com/" title="Resources">Resources</a>
            </div>
            <div class="columns show-for-large large-2">
                <a href="/articles/" title="Industry News">Articles</a>
                
                <a href="https://p.sf.net/sourceforge/docs" title="Site Documentation">Site Documentation</a>
                
                <a href="/support" title="Support Request">Support Request</a>
            </div>

            <div class="columns small-12 large-4 sf-logo">
                <a href="/" title="Home" class="sf-logo">
                    

<svg  version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"     viewBox="0 0 653 102.6" style="enable-background:new 0 0 653 102.6;" xml:space="preserve"><path class="st0" d="M66.9,54.5c0-19.1-6.8-27.8-10.4-31.1c-0.7-0.6-1.8-0.1-1.7,0.9c0.7,10.8-12.9,13.5-12.9,30.4h0    c0,0,0,0.1,0,0.1c0,10.3,7.8,18.7,17.4,18.7c9.6,0,17.4-8.4,17.4-18.7c0,0,0-0.1,0-0.1h0c0-4.8-1.8-9.4-3.6-12.8    c-0.4-0.7-1.4-0.4-1.3,0.2C75.1,56.7,66.9,65.7,66.9,54.5z"/><g>    <path class="st0" d="M46.2,94.8c-0.4,0-0.9-0.2-1.2-0.5L0.5,49.8c-0.6-0.6-0.6-1.7,0-2.4l47-47C47.8,0.2,48.2,0,48.6,0h13.5        c0.8,0,1.3,0.5,1.5,1c0.2,0.5,0.2,1.2-0.4,1.8L19.1,47c-0.9,0.9-0.9,2.3,0,3.2L54,85.2c0.6,0.6,0.6,1.7,0,2.4l-6.7,6.8        C47,94.6,46.6,94.8,46.2,94.8z"/></g><g>    <path class="st0" d="M55.1,102.6c-0.8,0-1.3-0.5-1.5-1c-0.2-0.5-0.2-1.2,0.4-1.8l44.2-44.2c0.4-0.4,0.7-1,0.7-1.6        c0-0.6-0.2-1.2-0.7-1.6L63.2,17.4c-0.6-0.6-0.6-1.7,0-2.4l6.8-6.8c0.3-0.3,0.7-0.5,1.2-0.5S72,8,72.3,8.3l44.4,44.5        c0.3,0.3,0.5,0.7,0.5,1.2s-0.2,0.9-0.5,1.2l-47,47c-0.3,0.3-0.7,0.5-1.2,0.5H55.1z"/></g><g>    <g>        <path class="st1" d="M167.2,32c-0.2,0.4-0.5,0.6-1,0.6c-0.3,0-0.7-0.2-1.2-0.7c-0.5-0.5-1.2-1-2-1.5c-0.9-0.6-1.9-1.1-3.2-1.5            c-1.3-0.5-2.9-0.7-4.8-0.7c-1.9,0-3.5,0.3-5,0.8c-1.4,0.5-2.6,1.3-3.6,2.2s-1.7,2-2.2,3.2c-0.5,1.2-0.8,2.5-0.8,3.8            c0,1.8,0.4,3.2,1.1,4.4c0.7,1.1,1.7,2.1,3,2.9c1.2,0.8,2.6,1.5,4.2,2c1.6,0.6,3.2,1.1,4.8,1.6c1.6,0.5,3.2,1.1,4.8,1.8            c1.6,0.6,2.9,1.5,4.2,2.4s2.2,2.2,3,3.6c0.7,1.4,1.1,3.2,1.1,5.3c0,2.2-0.4,4.2-1.1,6.1c-0.7,1.9-1.8,3.6-3.2,5            c-1.4,1.4-3.2,2.5-5.2,3.4c-2.1,0.8-4.4,1.2-7,1.2c-3.4,0-6.4-0.6-8.8-1.8c-2.5-1.2-4.6-2.9-6.5-5l1-1.6c0.3-0.4,0.6-0.5,1-0.5            c0.2,0,0.5,0.1,0.8,0.4c0.3,0.3,0.8,0.7,1.2,1.1c0.5,0.4,1.1,0.9,1.8,1.4c0.7,0.5,1.5,1,2.4,1.4c0.9,0.4,1.9,0.8,3.1,1.1            c1.2,0.3,2.5,0.4,4,0.4c2.1,0,3.9-0.3,5.5-0.9c1.6-0.6,3-1.5,4.1-2.5s2-2.4,2.6-3.8c0.6-1.5,0.9-3.1,0.9-4.7            c0-1.8-0.4-3.3-1.1-4.5c-0.7-1.2-1.7-2.2-3-3c-1.2-0.8-2.6-1.5-4.2-2c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.5-3.2-1.1-4.8-1.7            c-1.6-0.6-2.9-1.4-4.2-2.4c-1.2-1-2.2-2.2-3-3.7c-0.7-1.5-1.1-3.3-1.1-5.6c0-1.7,0.3-3.4,1-5c0.7-1.6,1.6-3,2.9-4.3            c1.3-1.2,2.8-2.2,4.7-3c1.9-0.7,4-1.1,6.4-1.1c2.7,0,5.1,0.4,7.3,1.3c2.1,0.9,4.1,2.2,5.9,3.9L167.2,32z"/>        <path class="st2" d="M152.9,78.8c-3.5,0-6.6-0.6-9.1-1.9c-2.5-1.2-4.8-3-6.7-5.1l-0.3-0.3l1.3-2c0.6-0.7,1.1-0.8,1.5-0.8            c0.4,0,0.8,0.2,1.2,0.6c0.3,0.3,0.8,0.7,1.3,1.1c0.5,0.4,1.1,0.9,1.7,1.4c0.7,0.5,1.4,0.9,2.3,1.3c0.9,0.4,1.9,0.8,3,1            c1.1,0.3,2.4,0.4,3.9,0.4c2,0,3.8-0.3,5.3-0.9c1.5-0.6,2.8-1.4,3.9-2.4c1-1,1.9-2.2,2.4-3.6c0.6-1.4,0.8-2.9,0.8-4.5            c0-1.7-0.3-3.1-1-4.2c-0.7-1.1-1.6-2-2.8-2.8c-1.2-0.8-2.5-1.4-4-1.9c-1.5-0.5-3.1-1.1-4.8-1.6c-1.7-0.5-3.3-1.1-4.8-1.7            c-1.6-0.7-3.1-1.5-4.3-2.5c-1.3-1-2.3-2.4-3.1-3.9c-0.8-1.6-1.2-3.5-1.2-5.8c0-1.8,0.3-3.6,1-5.3c0.7-1.7,1.7-3.2,3-4.5            c1.3-1.3,3-2.3,4.9-3.1c1.9-0.8,4.2-1.2,6.6-1.2c2.8,0,5.3,0.4,7.5,1.3c2.2,0.9,4.2,2.3,6.1,4.1l0.3,0.3l-1.1,2.1            c-0.6,1.1-1.7,1.4-3.1,0.1c-0.5-0.4-1.1-0.9-2-1.4c-0.8-0.5-1.9-1-3.1-1.5c-1.2-0.4-2.7-0.7-4.6-0.7c-1.8,0-3.4,0.3-4.8,0.8            c-1.3,0.5-2.5,1.2-3.4,2.1c-0.9,0.9-1.6,1.9-2.1,3c-0.5,1.1-0.7,2.4-0.7,3.6c0,1.6,0.3,3,1,4c0.7,1.1,1.6,2,2.8,2.8            c1.2,0.8,2.5,1.4,4,2c1.5,0.5,3.1,1.1,4.8,1.6c1.6,0.5,3.3,1.1,4.8,1.8c1.6,0.7,3.1,1.5,4.3,2.5c1.3,1,2.3,2.3,3.1,3.8            c0.8,1.5,1.2,3.4,1.2,5.6c0,2.2-0.4,4.4-1.2,6.4c-0.8,2-1.9,3.7-3.4,5.2c-1.5,1.5-3.3,2.6-5.4,3.5            C158.1,78.3,155.6,78.8,152.9,78.8z M138.4,71.3c1.7,1.9,3.7,3.4,6,4.5c2.4,1.2,5.3,1.8,8.6,1.8c2.5,0,4.8-0.4,6.8-1.2            c2-0.8,3.6-1.9,5-3.2c1.3-1.3,2.4-3,3.1-4.8c0.7-1.8,1.1-3.8,1.1-5.9c0-2-0.4-3.7-1-5.1c-0.7-1.3-1.6-2.5-2.8-3.4            c-1.2-0.9-2.5-1.7-4-2.4c-1.5-0.6-3.1-1.2-4.7-1.8c-1.6-0.5-3.2-1.1-4.8-1.6c-1.6-0.6-3-1.3-4.3-2.1c-1.3-0.8-2.3-1.9-3.1-3.1            c-0.8-1.2-1.2-2.8-1.2-4.7c0-1.4,0.3-2.8,0.8-4.1c0.5-1.3,1.3-2.5,2.3-3.4c1-1,2.3-1.8,3.8-2.3c1.5-0.6,3.3-0.8,5.2-0.8            c1.9,0,3.6,0.2,5,0.7c1.3,0.5,2.5,1,3.3,1.6c0.9,0.6,1.6,1.1,2.1,1.6c0.6,0.5,0.8,0.5,0.8,0.5c0.1,0,0.3,0,0.4-0.3l0.7-1.3            c-1.6-1.5-3.4-2.7-5.3-3.5c-2.1-0.8-4.4-1.2-7-1.2c-2.3,0-4.4,0.4-6.2,1.1c-1.8,0.7-3.3,1.7-4.5,2.8c-1.2,1.2-2.1,2.5-2.8,4.1            c-0.6,1.5-0.9,3.1-0.9,4.8c0,2.1,0.4,3.9,1.1,5.3c0.7,1.4,1.6,2.6,2.8,3.5c1.2,0.9,2.5,1.7,4,2.3c1.5,0.6,3.1,1.2,4.7,1.7            c1.6,0.5,3.2,1,4.8,1.6c1.6,0.6,3,1.2,4.3,2.1c1.3,0.8,2.4,1.9,3.1,3.2c0.8,1.3,1.2,2.9,1.2,4.9c0,1.8-0.3,3.4-0.9,5            c-0.6,1.6-1.5,2.9-2.7,4c-1.2,1.1-2.6,2-4.3,2.7c-1.7,0.6-3.6,1-5.7,1c-1.5,0-2.9-0.2-4.2-0.5c-1.2-0.3-2.3-0.7-3.2-1.1            c-0.9-0.4-1.8-0.9-2.5-1.5c-0.7-0.5-1.3-1-1.8-1.4c-0.5-0.4-0.9-0.8-1.2-1.1c-0.3-0.3-0.5-0.3-0.5-0.3c-0.1,0-0.3,0-0.5,0.3            L138.4,71.3z"/>    </g>    <g>        <path class="st1" d="M226.7,51.6c0,4-0.6,7.6-1.8,10.9c-1.2,3.3-2.9,6.1-5.1,8.4c-2.2,2.3-4.8,4.1-7.8,5.4            c-3,1.3-6.4,1.9-10.1,1.9c-3.6,0-7-0.6-10-1.9c-3-1.3-5.6-3-7.8-5.4c-2.2-2.3-3.9-5.1-5.1-8.4c-1.2-3.3-1.8-6.9-1.8-10.9            c0-4,0.6-7.6,1.8-10.9c1.2-3.3,2.9-6.1,5.1-8.4c2.2-2.3,4.8-4.1,7.8-5.4c3-1.3,6.4-1.9,10-1.9c3.7,0,7.1,0.6,10.1,1.9            c3,1.3,5.6,3,7.8,5.4c2.2,2.3,3.9,5.1,5.1,8.4C226.1,44,226.7,47.6,226.7,51.6z M222.8,51.6c0-3.6-0.5-6.9-1.5-9.8            c-1-2.9-2.4-5.3-4.2-7.3c-1.8-2-4-3.5-6.6-4.6c-2.6-1.1-5.4-1.6-8.5-1.6c-3.1,0-5.9,0.5-8.5,1.6c-2.6,1.1-4.8,2.6-6.6,4.6            c-1.8,2-3.3,4.4-4.3,7.3c-1,2.9-1.5,6.1-1.5,9.8c0,3.6,0.5,6.9,1.5,9.8c1,2.9,2.4,5.3,4.3,7.3c1.8,2,4,3.5,6.6,4.6            c2.6,1.1,5.4,1.6,8.5,1.6c3.1,0,6-0.5,8.5-1.6c2.6-1,4.8-2.6,6.6-4.6c1.8-2,3.2-4.4,4.2-7.3C222.3,58.5,222.8,55.3,222.8,51.6z"/>        <path class="st2" d="M202,78.7c-3.7,0-7.2-0.7-10.2-1.9c-3.1-1.3-5.8-3.1-8-5.5c-2.2-2.4-4-5.2-5.2-8.6c-1.2-3.3-1.9-7.1-1.9-11.1            c0-4,0.6-7.8,1.9-11.1c1.2-3.3,3-6.2,5.2-8.6c2.2-2.4,4.9-4.2,8-5.5c3.1-1.3,6.5-2,10.2-2c3.8,0,7.2,0.7,10.3,1.9            c3.1,1.3,5.8,3.1,8,5.5c2.2,2.4,4,5.3,5.2,8.6c1.2,3.3,1.8,7,1.8,11.1c0,4.1-0.6,7.8-1.8,11.1c-1.2,3.3-3,6.2-5.2,8.6            c-2.2,2.4-4.9,4.2-8,5.5C209.2,78.1,205.7,78.7,202,78.7z M202,25.7c-3.5,0-6.8,0.6-9.8,1.9c-2.9,1.2-5.5,3-7.6,5.2            c-2.1,2.2-3.8,5-4.9,8.2c-1.2,3.2-1.8,6.8-1.8,10.7c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.7,4,7.6,5.2            c2.9,1.2,6.2,1.8,9.8,1.8c3.6,0,6.9-0.6,9.8-1.8c2.9-1.2,5.5-3,7.6-5.2c2.1-2.2,3.8-5,4.9-8.1c1.2-3.2,1.8-6.8,1.8-10.7            c0-3.9-0.6-7.5-1.8-10.7c-1.2-3.2-2.8-5.9-4.9-8.2c-2.1-2.2-4.7-4-7.6-5.2C208.9,26.3,205.6,25.7,202,25.7z"/>    </g>    <g>        <path class="st1" d="M256.4,74.9c2.5,0,4.7-0.4,6.7-1.3c2-0.9,3.6-2.1,5-3.6c1.4-1.5,2.4-3.4,3.1-5.4c0.7-2.1,1.1-4.3,1.1-6.8            V25.7h3.7v32.1c0,2.9-0.5,5.5-1.4,8c-0.9,2.5-2.2,4.6-3.9,6.5c-1.7,1.8-3.8,3.3-6.2,4.3c-2.4,1-5.2,1.6-8.2,1.6            c-3,0-5.8-0.5-8.2-1.6c-2.4-1.1-4.5-2.5-6.2-4.3c-1.7-1.8-3-4-3.9-6.5c-0.9-2.5-1.4-5.2-1.4-8V25.7h3.8v32c0,2.4,0.4,4.7,1.1,6.8            c0.7,2.1,1.8,3.9,3.1,5.4c1.4,1.5,3,2.7,5,3.6C251.6,74.5,253.9,74.9,256.4,74.9z"/>        <path class="st2" d="M256.4,78.8c-3.1,0-5.9-0.5-8.4-1.6c-2.5-1.1-4.7-2.6-6.4-4.5c-1.7-1.9-3.1-4.2-4-6.7            c-0.9-2.5-1.4-5.3-1.4-8.2V25.1h5v32.7c0,2.3,0.4,4.5,1,6.6c0.7,2,1.7,3.8,3,5.2c1.3,1.5,2.9,2.6,4.8,3.5c1.9,0.8,4,1.3,6.4,1.3            c2.4,0,4.6-0.4,6.4-1.2c1.9-0.8,3.5-2,4.8-3.5c1.3-1.5,2.3-3.2,3-5.2c0.7-2,1-4.2,1-6.6V25.1h5v32.7c0,2.9-0.5,5.7-1.4,8.2            c-0.9,2.5-2.3,4.8-4,6.7c-1.7,1.9-3.9,3.4-6.4,4.5C262.3,78.3,259.5,78.8,256.4,78.8z M237.3,26.3v31.5c0,2.8,0.4,5.4,1.3,7.8            c0.9,2.4,2.1,4.5,3.8,6.3c1.6,1.8,3.6,3.2,6,4.2c2.3,1,5,1.5,8,1.5c2.9,0,5.6-0.5,8-1.5c2.3-1,4.4-2.4,6-4.2            c1.6-1.8,2.9-3.9,3.8-6.3c0.9-2.4,1.3-5,1.3-7.8V26.3h-2.5v31.5c0,2.5-0.4,4.8-1.1,7c-0.7,2.2-1.8,4.1-3.3,5.7            c-1.4,1.6-3.2,2.9-5.2,3.8c-2,0.9-4.4,1.4-6.9,1.4c-2.6,0-4.9-0.5-6.9-1.4c-2-0.9-3.8-2.2-5.2-3.8c-1.4-1.6-2.5-3.5-3.2-5.7            c-0.7-2.1-1.1-4.5-1.1-7V26.3H237.3z"/>    </g>    <g>        <path class="st1" d="M297.5,51.3c1,0,0.9,0,0.9,0l2.2,0c2.3,0,4.4-0.3,6.2-0.8c1.8-0.6,3.4-1.3,4.6-2.4c1.3-1,2.2-2.3,2.9-3.7            c0.7-1.4,1-3.1,1-4.9c0-3.7-1.2-6.4-3.6-8.2c-2.4-1.8-5.9-2.7-10.6-2.7h-9.5v22.7v2.8v23.5h-3.7V25.7h13.2c6,0,10.5,1.2,13.4,3.5            c3,2.3,4.4,5.7,4.4,10.2c0,2-0.3,3.8-1,5.4c-0.7,1.6-1.7,3.1-3,4.3c-1.3,1.2-2.8,2.3-4.6,3c-1.8,0.8-3.9,1.3-6.1,1.6            c0.6,0.4,1.1,0.9,1.6,1.5l17.9,22.4h-3.3c-0.4,0-0.7-0.1-1-0.2c-0.3-0.1-0.6-0.4-0.8-0.7l-16.6-21c-0.4-0.5-0.9-0.9-1.3-1.1            c-0.5-0.2-3.4-0.3-4.4-0.3C296.3,51.6,296.7,51.3,297.5,51.3z"/>        <path class="st2" d="M325,78.2h-4.5c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.5-1-0.9l-16.6-21c-0.4-0.5-0.7-0.8-1.1-1            c-0.4-0.1-2.8-0.3-4.1-0.3h-0.6v-2.6c0-0.9,0.2-1.4,1.8-1.4c0.9,0,1,0,1,0l2.2,0c2.2,0,4.2-0.3,6-0.8c1.7-0.5,3.2-1.3,4.4-2.3            c1.2-1,2.1-2.1,2.7-3.5c0.6-1.4,0.9-2.9,0.9-4.6c0-3.5-1.1-6-3.4-7.7c-2.3-1.7-5.7-2.6-10.2-2.6h-8.9v48.9h-5V25.1h13.9            c6.1,0,10.7,1.2,13.8,3.6c3.1,2.4,4.7,6,4.7,10.7c0,2.1-0.4,4-1.1,5.7c-0.7,1.7-1.8,3.2-3.1,4.5c-1.3,1.3-3,2.3-4.8,3.2            c-1.5,0.6-3.1,1.1-4.9,1.4c0.2,0.2,0.4,0.4,0.6,0.7L325,78.2z M296.9,53.5c1.1,0,3.4,0.1,4,0.4c0.6,0.3,1.1,0.7,1.6,1.3l16.6,21            c0.2,0.3,0.4,0.5,0.6,0.6c0.2,0.1,0.4,0.2,0.7,0.2h2l-17.1-21.4c-0.4-0.6-0.9-1-1.4-1.3l-1.5-0.9l1.8-0.2c2.2-0.2,4.2-0.7,5.9-1.5            c1.7-0.8,3.2-1.7,4.5-2.9c1.2-1.2,2.2-2.5,2.8-4.1c0.6-1.6,1-3.3,1-5.2c0-4.3-1.4-7.5-4.2-9.7c-2.8-2.2-7.2-3.3-13-3.3h-12.6V77            h2.5V28h10.1c4.7,0,8.4,0.9,10.9,2.8c2.6,1.9,3.9,4.8,3.9,8.7c0,1.9-0.4,3.6-1,5.1c-0.7,1.5-1.7,2.8-3.1,3.9            c-1.3,1.1-2.9,1.9-4.8,2.5c-1.9,0.6-4,0.9-6.4,0.9l-2.2,0c-0.1,0-0.2,0-0.9,0C297.3,51.9,297,51.9,296.9,53.5z"/>    </g>    <g>        <path class="st1" d="M367.6,68.8c0.2,0,0.5,0.1,0.6,0.3l1.5,1.6c-1.1,1.1-2.2,2.2-3.5,3.1c-1.3,0.9-2.7,1.7-4.2,2.3            c-1.5,0.6-3.2,1.1-4.9,1.5c-1.8,0.4-3.8,0.5-5.9,0.5c-3.6,0-6.9-0.6-9.9-1.9c-3-1.3-5.6-3-7.7-5.4c-2.1-2.3-3.8-5.1-5-8.4            c-1.2-3.3-1.8-6.9-1.8-10.9c0-3.9,0.6-7.5,1.9-10.8c1.2-3.3,3-6,5.2-8.4c2.2-2.3,4.9-4.1,8-5.4c3.1-1.3,6.6-1.9,10.3-1.9            c1.9,0,3.6,0.1,5.2,0.4c1.6,0.3,3,0.7,4.4,1.2c1.4,0.5,2.6,1.2,3.8,2c1.2,0.8,2.4,1.7,3.5,2.7l-1.1,1.6c-0.2,0.3-0.5,0.4-0.9,0.4            c-0.2,0-0.5-0.1-0.8-0.4c-0.3-0.3-0.8-0.6-1.3-1c-0.5-0.4-1.2-0.8-1.9-1.2c-0.7-0.5-1.6-0.9-2.7-1.2c-1-0.4-2.2-0.7-3.6-1            c-1.3-0.3-2.9-0.4-4.6-0.4c-3.2,0-6.1,0.5-8.7,1.6c-2.6,1.1-4.9,2.6-6.8,4.7c-1.9,2-3.4,4.5-4.5,7.3s-1.6,6.1-1.6,9.7            c0,3.7,0.5,6.9,1.6,9.8c1.1,2.9,2.5,5.3,4.4,7.3c1.9,2,4.1,3.5,6.6,4.6c2.5,1.1,5.3,1.6,8.2,1.6c1.9,0,3.5-0.1,5-0.4            c1.5-0.2,2.8-0.6,4-1.1c1.2-0.5,2.4-1.1,3.4-1.8c1.1-0.7,2.1-1.5,3.1-2.5c0.1-0.1,0.2-0.2,0.3-0.2            C367.3,68.9,367.5,68.8,367.6,68.8z"/>        <path class="st2" d="M351.1,78.8c-3.7,0-7.1-0.7-10.1-1.9c-3.1-1.3-5.7-3.1-7.9-5.5c-2.2-2.4-3.9-5.2-5.1-8.6            c-1.2-3.3-1.8-7.1-1.8-11.1c0-4,0.6-7.7,1.9-11c1.3-3.3,3.1-6.2,5.3-8.6c2.3-2.4,5.1-4.3,8.2-5.6c3.2-1.3,6.7-2,10.6-2            c1.9,0,3.7,0.1,5.3,0.4c1.6,0.3,3.1,0.7,4.5,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.4,1.7,3.6,2.8l0.4,0.4l-1.4,2.1            c-0.2,0.3-0.6,0.7-1.4,0.7c-0.4,0-0.7-0.2-1.2-0.5c-0.3-0.3-0.8-0.6-1.3-0.9c-0.5-0.4-1.1-0.8-1.9-1.2c-0.7-0.4-1.6-0.8-2.6-1.2            c-1-0.4-2.2-0.7-3.5-0.9c-1.3-0.2-2.8-0.4-4.5-0.4c-3.1,0-5.9,0.5-8.5,1.6c-2.5,1.1-4.8,2.6-6.6,4.5c-1.8,1.9-3.3,4.3-4.3,7.1            c-1,2.8-1.6,6-1.6,9.4c0,3.6,0.5,6.8,1.5,9.6c1,2.8,2.4,5.2,4.2,7.1c1.8,1.9,3.9,3.4,6.4,4.4c2.4,1,5.1,1.5,8,1.5            c1.8,0,3.5-0.1,4.9-0.4c1.4-0.2,2.7-0.6,3.9-1.1c1.2-0.5,2.3-1.1,3.3-1.7c1-0.7,2-1.5,3-2.4c0.2-0.2,0.3-0.2,0.5-0.3            c0.5-0.3,1.3-0.2,1.7,0.3l1.9,2l-0.4,0.4c-1.1,1.2-2.3,2.2-3.6,3.2c-1.3,0.9-2.7,1.8-4.3,2.4c-1.5,0.7-3.2,1.2-5.1,1.5            C355.3,78.6,353.3,78.8,351.1,78.8z M352.2,25.7c-3.7,0-7.1,0.6-10.1,1.9c-3,1.2-5.7,3-7.8,5.3c-2.2,2.3-3.9,5-5.1,8.2            c-1.2,3.2-1.8,6.7-1.8,10.6c0,3.9,0.6,7.5,1.8,10.7c1.2,3.2,2.8,5.9,4.9,8.2c2.1,2.2,4.6,4,7.5,5.2c2.9,1.2,6.1,1.8,9.6,1.8            c2.1,0,4-0.2,5.8-0.5c1.7-0.3,3.4-0.8,4.8-1.5c1.5-0.6,2.8-1.4,4-2.3c1.1-0.8,2.1-1.7,3-2.6l-1.1-1.2c-0.1-0.1-0.2-0.1-0.3,0            c-0.1,0-0.2,0.1-0.3,0.2c-1,0.9-2.1,1.8-3.2,2.5c-1.1,0.7-2.3,1.4-3.5,1.9c-1.3,0.5-2.7,0.9-4.1,1.1c-1.5,0.2-3.2,0.4-5.1,0.4            c-3,0-5.9-0.6-8.5-1.6c-2.6-1.1-4.9-2.7-6.8-4.7c-1.9-2-3.4-4.6-4.5-7.5c-1.1-2.9-1.6-6.3-1.6-10c0-3.6,0.5-6.9,1.6-9.9            c1.1-2.9,2.6-5.5,4.6-7.5c2-2.1,4.3-3.7,7-4.8c2.7-1.1,5.7-1.7,8.9-1.7c1.7,0,3.3,0.1,4.7,0.4c1.4,0.3,2.6,0.6,3.7,1            c1.1,0.4,2,0.8,2.8,1.3c0.8,0.5,1.4,0.9,1.9,1.3c0.5,0.4,1,0.7,1.3,1c0.3,0.3,0.5,0.3,0.5,0.3c0.3,0,0.4-0.1,0.4-0.2l0.8-1.2            c-1-0.9-2-1.6-3-2.3c-1.2-0.8-2.4-1.4-3.7-1.9c-1.3-0.5-2.8-0.9-4.3-1.2C355.7,25.9,354,25.7,352.2,25.7z"/>    </g>    <g>        <path class="st1" d="M410.3,25.7v3.1H383v21h22.7v3H383v21.6h27.3v3.1h-31.1V25.7H410.3z"/>        <path class="st2" d="M410.9,78.2h-32.3V25.1h32.3v4.3h-27.3v19.7h22.7v4.3h-22.7v20.4h27.3V78.2z M379.8,77h29.9v-1.9h-27.3V52.2            h22.7v-1.8h-22.7V28.2h27.3v-1.9h-29.9V77z"/>    </g>    <g>        <path class="st1" d="M456.8,25.1V33h-23.5v15.7h19.8v7.9h-19.8v21.6h-9.9v-53H456.8z"/>    </g>    <g>        <path class="st1" d="M514.3,51.6c0,3.9-0.6,7.5-1.9,10.8c-1.3,3.3-3.1,6.2-5.5,8.6c-2.3,2.4-5.2,4.3-8.5,5.7c-3.3,1.4-7,2-11,2            c-4,0-7.7-0.7-11-2c-3.3-1.4-6.1-3.2-8.5-5.7c-2.4-2.4-4.2-5.3-5.5-8.6s-1.9-6.9-1.9-10.8s0.6-7.5,1.9-10.8            c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.2-4.3,8.5-5.7c3.3-1.4,7-2,11-2c4,0,7.7,0.7,11,2.1c3.3,1.4,6.1,3.3,8.5,5.7            c2.3,2.4,4.2,5.3,5.5,8.6C513.6,44.1,514.3,47.7,514.3,51.6z M504.2,51.6c0-2.9-0.4-5.5-1.2-7.8c-0.8-2.3-1.9-4.3-3.3-5.9            c-1.4-1.6-3.2-2.8-5.3-3.7c-2.1-0.9-4.4-1.3-7-1.3c-2.6,0-4.9,0.4-7,1.3c-2.1,0.9-3.8,2.1-5.3,3.7c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.8s0.4,5.5,1.2,7.8c0.8,2.3,1.9,4.3,3.4,5.9c1.5,1.6,3.2,2.8,5.3,3.7c2.1,0.9,4.4,1.3,7,1.3            c2.6,0,4.9-0.4,7-1.3c2.1-0.9,3.8-2.1,5.3-3.7c1.4-1.6,2.5-3.6,3.3-5.9C503.8,57.1,504.2,54.5,504.2,51.6z"/>    </g>    <g>        <path class="st1" d="M534.9,50.4l2.3,0c1.9,0,3.5-0.2,4.9-0.7c1.4-0.5,2.5-1.1,3.4-1.9c0.9-0.8,1.6-1.8,2-2.9            c0.4-1.1,0.7-2.4,0.7-3.7c0-2.7-0.9-4.8-2.7-6.2c-1.8-1.4-4.5-2.2-8.1-2.2H531v17.6v7.1v20.7h-9.9v-53h16.2c3.6,0,6.7,0.4,9.3,1.1            c2.6,0.7,4.7,1.8,6.3,3.1c1.6,1.3,2.9,3,3.6,4.8c0.8,1.9,1.2,3.9,1.2,6.2c0,1.8-0.3,3.5-0.8,5.1c-0.5,1.6-1.3,3-2.3,4.3            c-1,1.3-2.2,2.4-3.7,3.4c-1.5,1-3.1,1.8-5,2.3c1.2,0.7,2.3,1.7,3.2,3l13.3,19.6h-8.9c-0.9,0-1.6-0.2-2.2-0.5            c-0.6-0.3-1.1-0.8-1.5-1.5c0,0-11.1-17-11.1-17c-0.3-0.4-0.9-1.3-1.5-1.4c-1.2,0-2.4,0-3.5,0c0,0,0-6,0-6.4            C533.8,50.4,534.9,50.4,534.9,50.4z"/>    </g>    <g>        <path class="st1" d="M591.4,70.9c2.2,0,4.2-0.2,5.8-0.6c1.6-0.4,3.2-1,4.7-1.7v-12h-6.6c-0.6,0-1.1-0.2-1.5-0.5            c-0.4-0.4-0.6-0.8-0.6-1.3v-5.6h17.6V73c-1.3,1-2.7,1.8-4.2,2.5c-1.5,0.7-3,1.3-4.7,1.8c-1.7,0.5-3.4,0.8-5.3,1            c-1.9,0.2-3.9,0.3-6.1,0.3c-3.9,0-7.4-0.7-10.7-2c-3.3-1.3-6.1-3.2-8.4-5.6c-2.4-2.4-4.2-5.3-5.6-8.6c-1.3-3.3-2-7-2-10.9            c0-4,0.6-7.6,1.9-11c1.3-3.3,3.1-6.2,5.5-8.6c2.4-2.4,5.3-4.3,8.7-5.6c3.4-1.3,7.2-2,11.4-2c4.3,0,8.1,0.6,11.2,1.9            c3.2,1.3,5.8,3,8,5l-2.9,4.5c-0.6,0.9-1.3,1.4-2.2,1.4c-0.6,0-1.2-0.2-1.8-0.6c-0.8-0.5-1.6-0.9-2.4-1.4c-0.8-0.5-1.7-0.9-2.7-1.2            c-1-0.3-2.1-0.6-3.3-0.8c-1.2-0.2-2.7-0.3-4.3-0.3c-2.6,0-5,0.4-7.1,1.3c-2.1,0.9-3.9,2.1-5.4,3.8c-1.5,1.6-2.6,3.6-3.4,5.9            c-0.8,2.3-1.2,4.9-1.2,7.7c0,3.1,0.4,5.8,1.3,8.2c0.9,2.4,2.1,4.4,3.6,6s3.4,2.9,5.5,3.8S588.9,70.9,591.4,70.9z"/>    </g>    <g>        <path class="st1" d="M645.7,56.8h-16.1v13.4H653v7.9h-33.4v-53H653V33h-23.5v16.3H648v5.8C648,55.1,647.9,56.8,645.7,56.8z"/>    </g></g></svg>
                </a>
            </div>
        </nav>
    </section>

    <section class="l-nav-bottom">
        <nav class="row">
            <div class="columns small-12 large-6 copyright-notice">&copy; 2019 Slashdot Media. All Rights Reserved.</div>
            <div class="columns large-6 links">
                <span class="show-for-large">
                    <a href="http://slashdotmedia.com/terms-of-use" title="Terms">Terms</a>
                    <a href="http://slashdotmedia.com/privacy-statement/" title="Privacy">Privacy</a>
                </span>
                <span id='teconsent'></span>
                
                <span class="show-for-large">
                    <a href="http://slashdotmedia.com/opt-out-choices" title="Opt Out">Opt Out</a>
                    <a href="http://slashdotmedia.com/" title="Advertise">Advertise</a>
                </span>
            </div>
        </nav>
    </section>
</footer>


<div id="l-no-css" style="font-family:sans-serif;width:100%;font-size:2em;background:#fff;color:#ff3300;padding:2rem;border:1px solid #ff3300;position:absolute;top: 0;left:0;box-sizing: border-box;">
    Oh no! Some styles failed to load. Please try reloading this page, or <a href="/support" target="_blank" style="color:#0099cc;">contact support</a>.
</div>
<script>

document.addEventListener('DOMContentLoaded', function () {
    var hasCSS = window.getComputedStyle(document.querySelector('#l-no-css')).display === 'none';
    if(!hasCSS) {
        var svgs = document.querySelectorAll('svg');
        for (var x=0; x<svgs.length; x++){
            svgs[x].style.display = 'none';
        }
        window.scroll(0, 0);  
    }
});
</script>


        </div>

        
            
    
    <div id="overlay-blockthis-wrapper" style="display: none;">
        <div id="overlay-blockthis">
            <h2>Thanks for helping keep SourceForge clean.</h2>
            <a href="#" id="btn-blockthis-close">X</a>
            <form class="dropzone small-12" action="/api/instrumentation/gpt" id="blockthisForm" method="POST">
                <div class="row small-12">
                    <div class="column description small-12">
                        
  <input type="hidden" name="_visit_cookie" value="a91b70d5-a30d-4566-aad3-c649db7a8482"/>
                            <input type='hidden' name='timestamp' value='1552198931'/>
                            <input type='hidden' name='spinner' value='XGVaCGfLgRnCTYDZ2vm3vDtsnUmQ'/>
                            <p class='q9c85b6c16991eb9e9899e60abb864e7d55f704ac'><label for='XHj7td5eZdEBl9db_lE5FZtEETWg'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XHj7td5eZdEBl9db_lE5FZtEETWg' name='XHz7td5eZdoYGgL9cnceHBPg4XtM' type=
             'text'/></p>
                            <p class='q9c85b6c16991eb9e9899e60abb864e7d55f704ac'><label for='XHj7td5eZdEFl9db_lE5FZtEETWg'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XHj7td5eZdEFl9db_lE5FZtEETWg' name='XHz7td5eZd4YGgL9cnceHBPg4XtM' type=
             'text'/></p>
                        Briefly describe the problem (required):
                        <input name="XEjLnapGSLwDnCVkYSPgPh_EE:Aw" type="text" required>
                    </div>
                </div>
                <div class="column small-12">
                    <div class="upload-text">Upload screenshot of ad (required):</div>
                    <div id='upload-it'>
                        <a href="#" onclick="return false">Select a file</a>, or drag & drop file here.
                    </div>
                    <div id="upload-it-placeholder"></div> 

                    <div class="dropzone-previews" style="display: none"></div>
                    <div class="dz-message" style="display: none"></div> 
                    
                    <div id="dropzone-preview-template" style="display: none">
                        <div class="dz-preview dz-file-preview">
                            <img data-dz-thumbnail src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt=""/>
                            <div class="dz-success-mark"><span>✔</span></div>
                            <div class="dz-error-mark"><span>✘</span></div>
                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                        </div>
                    </div>
                </div>
                <div class="column small-12">
                    <u>Screenshot instructions:</u>
                    
                    <a data-external target=_blank href="http://windows.microsoft.com/en-us/windows/take-screen-capture-print-screen#take-screen-capture-print-screen=windows-8">Windows</a>
                    
                </div>
                <div class="row small-12">
                    <div class="column large-5 small-6">
                        <p>
                            <u>Click URL instructions:</u><br>
                            Right-click on the ad, choose "Copy Link", then paste here &rarr;<br>
                            (This may not be possible with some types of ads)
                        </p>
                        <a class="more-info" href="https://sourceforge.net/p/forge/documentation/Report%20a%20problem%20with%20Ad%20content/" target="_blank">More information about our ad policies</a>
                    </div>
                    <div class="column large-7 small-6">
                        <p>Please provide the ad click URL, if possible:
                        <input name="XEDXucJGLGQXhDMDjXuTFLXFPWEc" type="url">
                        </p>
                        <textarea id="gpt-info" name="XHTLjbZMW05AaShXc1mfMEdeQDzU"></textarea>
                        <input class="button" type="submit" id="btn-blockthis-submit" value="Submit Report">
                    </div>
                </div>
            </form>
        </div>
    </div>

        

        <script src="//ads.pro-market.net/ads/scripts/site-143572.js"></script>
        
<div id="newsletter-floating" class="sandiego">
    <h2>Get latest updates about Open Source Projects, Conferences and News.</h2>
    <a class="button blue" href="/user/newsletters?source=floating">Sign Up</a>
    <a id="btn-float-close">No, Thank you</a>
</div>

        

    
        
<script src="//a.fsdn.com/con/js/sftheme/vendor/audero-sticky.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sandiego/chrome.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sandiego/utilities.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/dropzone-4.3.0.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/dragster.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/lib/jquery.cookie.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/lib/jquery.dotdotdot-1.8.3.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/jquery.notify.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/shared.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/widgets.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/global.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/jquery.typeahead.min.js?1552069670"></script>


        
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.core.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.util.mediaQuery.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.util.keyboard.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.util.box.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.util.nest.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.util.triggers.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.offcanvas.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.reveal.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.dropdown.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.dropdownMenu.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/foundation6/plugins/foundation.toggler.min.js?1552069670"></script>



    <script>
        SF.pspRedirect = true;
        SF.pdlpRedirect = true; //pdlp trafficking %row is active, and its ROW.

        SF.downloadRedirectDelay = 40000;
        SF.cantDownload = false;
        SF.countdownDisplay = 'ProgressionDisplayCircle';

        $.extend(SF, {"downloadDelay": 5000, "noCountDown": false, "shortname": "php-proxy"});
            SF.Ads.enableLeadgenResize = true;
    </script>


        

        <script>
            /* global Foundation */
            $(document).foundation();
            Foundation.Triggers.forceListenersNow();
        </script>
        <noscript><p><img src="//analytics.slashdotmedia.com/sf.php?idsite=39" style="border:0;" alt="" /></p></noscript><script src="https://www.google.com/recaptcha/api.js?onload=recaptchaLoadCallback&render=explicit" async defer></script><script>
            var _linkedin_data_partner_id = "97055";
            </script><script>
            (function(){var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})();
            </script>
            <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=97055&fmt=gif" />
            </noscript>
    
    
<script src="//a.fsdn.com/con/js/sftheme/vendor/handlebars.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme-typescript/widgets.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/download-common.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/download.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/activity.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/madmen.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme-typescript/nel.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/lib/jquery.easing.min.js?1552069670"></script>
<script src="//a.fsdn.com/con/js/sftheme/vendor/jquery.mask.min.js?1552069670"></script>


    

<script>
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({flush: true
</script>