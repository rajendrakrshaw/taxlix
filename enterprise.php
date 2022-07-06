
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<title>
		Enterprise Business Solutions - Taxlix
	</title>
	
	<meta name="keywords" content="GST, GSTP, GSP, GSTN, Goods and Services Tax, GST Bill, GST law, GST software, GST App, GST solution, GST website, Goods and Service Tax Network, GST API" />
	<meta name="description" content="Discover ClearTax enterprise solutions for secured, safer and error free services. Get 5X Faster Filing, seamless data integration, 360 support from our team and with an uptime of 99.9% to support your business growth." />
	<meta name="author" content="ClearTax" />
	<meta name="copyright" content="Defmacro Software Pvt. Ltd. Copyright (c) 2020" />

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no" />

	<meta name="google-site-verification" content="QRKBEdtz1fiPAGB6su7gSD9W9Bf2XnHN2VOGKgrETWE" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:app:id:googleplay" content="in.cleartax.cleartax" />
	<meta name="twitter:site" content="@ClearTax_In" />
	<meta name="twitter:title" content="Enterprise Business Solutions - ClearTax" />
	<meta name="twitter:description" content="Discover ClearTax enterprise solutions for secured, safer and error free services. Get 5X Faster Filing, seamless data integration, 360 support from our team and with an uptime of 99.9% to support your business growth." />
	<meta name="twitter:image:src"
		content="https://assets1.cleartax-cdn.com/social/cleartax-og-image-v5.png" />
	<meta name="twitter:domain" content="http://cleartax.in" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"cae9b2cfc9",applicationID:"230127566"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(9),c=t(10),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(11);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(u&&u<r.startTime)return;var i=[r],o=a({});o&&i.push(o),l("lcp",i)}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){var e=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(e)return e.type&&(t["net-type"]=e.type),e.effectiveType&&(t["net-etype"]=e.effectiveType),e.rtt&&(t["net-rtt"]=e.rtt),e.downlink&&(t["net-dlink"]=e.downlink),t}function c(t){if(t instanceof y&&!w){var e=Math.round(t.timeStamp),n={type:t.type};a(n),e<=v.now()?n.fid=v.now()-e:e>v.offset&&e<=Date.now()?(e-=v.offset,n.fid=v.now()-e):e=v.now(),w=!0,l("timing",["fi",e,n])}}function f(t){"hidden"===t&&(u=v.now(),l("pageHide",[u]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var u,s,d,p,l=t("handle"),v=t("loader"),m=t(8),g=t(3),y=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(h){}d=new PerformanceObserver(i);try{d.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}p=new PerformanceObserver(o);try{p.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var w=!1,b=["click","keydown","mousedown","pointerdown","touchstart"];b.forEach(function(t){document.addEventListener(t,c,g(!1))})}m(f)}},{}],7:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],8:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],9:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],10:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],11:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){h[t]=m(t).concat(e)}function v(t,e){var n=h[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return h[t]||[]}function g(t){return p[t]=p[t]||i(n)}function y(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var h={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:y,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(9),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!M++){var t=T.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+T.offset],null,"api"),c("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===m.readyState&&o()}function o(){c("mark",["domContent",a()+T.offset],null,"api")}var a=t(5),c=t("handle"),f=t(9),u=t("ee"),s=t(7),d=t(2),p=t(3),l=d.getConfiguration("ssl")===!1?"http":"https",v=window,m=v.document,g="addEventListener",y="attachEvent",h=v.XMLHttpRequest,w=h&&h.prototype,b=!1;NREUM.o={ST:setTimeout,SI:v.setImmediate,CT:clearTimeout,XHR:h,REQ:v.Request,EV:v.Event,PR:v.Promise,MO:v.MutationObserver};var E=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1216.min.js"},O=h&&w&&w[g]&&!/CriOS/.test(navigator.userAgent),T=e.exports={offset:a.getLastTimestamp(),now:a,origin:E,features:{},xhrWrappable:O,userAgent:s,disabled:b};if(!b){t(1),t(6),m[g]?(m[g]("DOMContentLoaded",o,p(!1)),v[g]("load",r,p(!1))):(m[y]("onreadystatechange",i),v[y]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var M=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(10),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"cae9b2cfc9","applicationID":"230127566","transactionName":"NVUGNUpUWxBTU0ZeXAwfIhRWVkEKXV4dREcDRA0CZ0VUBFdDHEFaB0cXPlBUWwdeVUANQBZREAhbakUCVVVBaEULVRM=","queueTime":0,"applicationTime":159,"agent":""}</script>
	<meta itemprop="name" content="Enterprise Business Solutions - ClearTax" />
	<meta itemprop="description" content="Discover ClearTax enterprise solutions for secured, safer and error free services. Get 5X Faster Filing, seamless data integration, 360 support from our team and with an uptime of 99.9% to support your business growth." />
	<meta itemprop="image"
		content="https://assets1.cleartax-cdn.com/social/cleartax-og-image-v5.png" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Enterprise Business Solutions - ClearTax" />
	<meta property="og:image"
		content="https://assets1.cleartax-cdn.com/social/cleartax-og-image-v5.png" />
	<meta property="og:image:alt" content="Discover ClearTax enterprise solutions for secured, safer and error free services. Get 5X Faster Filing, seamless data integration, 360 support from our team and with an uptime of 99.9% to support your business growth." />
	<meta property="og:description" content="Discover ClearTax enterprise solutions for secured, safer and error free services. Get 5X Faster Filing, seamless data integration, 360 support from our team and with an uptime of 99.9% to support your business growth." />

	 
	<link rel="shortcut icon" href="./images/logo.png" type="image/png" />
	
	<link rel="apple-touch-icon" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" />

	 
	<link rel="shortcut icon" href="./images/logo.png" type="image/png" />
	
	
	<link rel="dns-prefetch" href="https://assets1.cleartax-cdn.com" />
	<link type="text/css" rel="stylesheet" href="https://assets1.cleartax-cdn.com/content-prod/css/littlegiant-c6822.css" media="screen" />
	<!-- for amp page -->
	
	<!-- For Canonical Link Addition -->
	
		<link rel="canonical" href="https://cleartax.in/enterprise">
	
	<style>
		@font-face {
			font-family: "Gilroy";
			font-weight: normal;
			src: url('https://assets1.cleartax-cdn.com/cleartax-frontend/font/1606117730_gilroy_regular.otf') format('opentype');
			font-display: swap;
		}

		@font-face {
			font-family: "Gilroy";
			font-weight: 500;
			src: url('https://assets1.cleartax-cdn.com/cleartax-frontend/font/1606117853_gilroy_medium.otf') format('opentype');
			font-display: swap;
		}

		@font-face {
			font-family: "Gilroy";
			font-weight: 600;
			src: url('https://assets1.cleartax-cdn.com/cleartax-frontend/font/1606117950_gilroy_semibold.otf') format('opentype');
			font-display: swap;
		}

		@font-face {
			font-family: "Gilroy";
			font-weight: 700;
			src: url('https://assets1.cleartax-cdn.com/cleartax-frontend/font/1606118037_gilroy_bold.otf') format('opentype');
			font-display: swap;
		}

		@font-face {
			font-family: "Gilroy";
			font-weight: 800;
			src: url('https://assets1.cleartax-cdn.com/cleartax-frontend/font/1606118078_gilroy_extrabold.otf') format('opentype');
			font-display: swap;
		}

		body {
			font-family: 'Gilroy', sans-serif;
		}
	</style>
	<!-- Global site tag (gtag.js) - Google Analytics (optimize code) -->
	<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-23349176-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());
		gtag("config", "UA-23349176-1", { optimize_id: "GTM-T33JCLR" });
		gtag("config", "UA-23349176-12");
		gtag("config", "UA-23349176-13");
	</script>
	<script>
		/**
		 * Convert url params to base 64
		 *
		 * @param {string} url The base URL to be navigated to.
		 * @param {string} urlReturnPath Any existing return path defined.
		 */
		function createBase64(url , urlReturnPath){
			var oldPath ='';
			if(urlReturnPath){
				oldPath = atob(urlReturnPath);
			}
			var returnPath = btoa(oldPath+'/?'+location.search.substr(1));
			console.log(returnPath);
			if(returnPath) {
				location.href = url + '&return_path='+returnPath;
			} else {
				location.href = url;
			}
			
		}
	</script>
	

<!-- [SCRIPTS FOR GOOGLE ANALYTICS 4 PROPERTY] -->
<script defer>
    var gaProperty = {};
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    // WEBSITE GROWTH PARENT
    gaProperty.config = ['G-C37VX8T52R'];
    gaProperty.groups = ['website_growth'];

    const { config, groups } = gaProperty;
    
        
            config.push('G-RZPZDJWP2E', 'G-VETB4D2SKW');
            groups.push('business', 'consumer');
        
    

    for(var i=0; i < config.length ; i++){
        var script = document.createElement("script");
        script.src = `https://www.googletagmanager.com/gtag/js?id=${config[i]}`;
        script.defer = true;
        document.head.appendChild(script);
        gtag('config', config[i], { 
            'groups': groups[i], 
            'content_group': 'v2_enterprise',
        });
    }
    const path = window.location.pathname;
    gtag('event', 'pageview', {
        'page_title': document.title,
        'current_page_pathname': path.endsWith('/') ? path.slice(0, path.length -1) : path,
        'parent_category': 'v2',
        'sub_category': 'enterprise',
        'send_to': gaProperty.groups,
    })
</script>
	<script>
	const productReturnPath = {
		"gst": "?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9",
		"e-invoicing-gst": "?product=einvoice&return_path=L3Nzbz9yZHI9Lw==",
		"business": "?product=business&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
		"individuals": "?product=cleartax&return_path=L015QWNjb3VudC9zdGFydD9yZWY9c3Nv",
		"ca": "?product=tax_experts&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
		"sme": "?product=sme&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
		"enterprise": "?product=einvoice&return_path=L3Nzbz9yZHI9Lw==",
		"tds": "?product=tds&return_path=L2FwaS9hY2NvdW50L2xvZ2luX2NhbGxiYWNr", 
		"taxcloud": "?product=taxcloud&return_path=L0VudGl0eQ==",
		"eway-bill": "?product=eway_bill&return_path=Lw==",
		"default": "?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==",
		
		"einvoice": "?product=einvoice",
		"tdsNoReturnPath": "?product=tds",
		"ewaybillNoReturnPath": "?product=eway_bill",
		"gstNoReturnPath": "?product=gst",
		"maxitc": "?product=mtsg&return_path=Lw=="
	}
</script>

<script defer>
	document.addEventListener("DOMContentLoaded", function () {
		const anchors = document.querySelectorAll('a');
		anchors.forEach(anchor => {
			if ((anchor.href) && (anchor.href).includes("accounts.cleartax.in") && (!anchor.referrerpolicy))
				anchor.setAttribute('referrerpolicy', 'no-referrer-when-downgrade');
		});
	});
</script>

<script>
	function googleLoginSignUp(obj, logObj = {}) {
    	({ label = '', product = '', IDofEmail = '' } = logObj);
		obj.setAttribute('referrerpolicy', 'no-referrer-when-downgrade');
  		var email = document.getElementById(IDofEmail || obj.previousElementSibling.id);
  		var emailVal = email.value;
		var emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!emailVal || emailVal == "" || !emailRegex.test(emailVal)) {
			document.getElementById('errmsg').innerHTML = "Please enter a valid Email ID";
			email.focus();
			return;
		}
		var signUpUrl = "https://accounts.cleartax.in/v2";
        signUpUrl += productReturnPath[product] || productReturnPath[parentCategory] || productReturnPath.default;
        signUpUrl += "&source=" + window.location.pathname.slice(3) + "&ref=v2_" + label + "&s_username=" + emailVal;
		
		handleTrack({label: label + '_' + obj.textContent.trim(), url: signUpUrl, value: '{}EmailID :: ' + emailVal + '{}original_referrer :: ' + window.location.href, isSSO: true});
		
		window.location.href = signUpUrl;
		return false;
	}
</script>

	<!-- script for hubspot integration -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/19630596.js"></script>
</head>


<body class="lil-root">
	<style>
.header-sidenav {
    top: 3rem;
}

.nav-dropdown .lil-dropdown-menu {
    top: 4.6rem;
}

.nav-dropdown:before {
    /* based on position of menu */
    top: 3rem;
}
.nav-bg {
    /* fallback for IE, mozilla */
    background: -moz-linear-gradient(#fff, #fff);
    background: -ms-linear-gradient(#fff, #fff);
}
.nav-bg-black {
    background: -moz-linear-gradient(#181F2A, #181F2A);
    background: -ms-linear-gradient(#181F2A, #181F2A);
}

.lil-accordian > summary:first-of-type {
    list-style-type: none;
}
.search-btn{
outline: none;
background: url('https://assets1.cleartax-cdn.com/cleartax/images/1622642165_vector.png') center center no-repeat;
z-index: 2;
cursor: pointer;
background-size: 25px 25px;
height: 40px;
width: 40px;
display: inline-block;
}
.search-wrapper{
position: relative;
margin-left: 2%;
margin-right: 2%;
outline: none;
}
.search-wrapper:focus-within{
position: relative;
width: 50%;
}
.search-wrapper:focus-within ~ .hide-onsearch {
display: none;
}
.search-box{
visibility: hidden;
position: absolute;
left:0;
width: 40px;
transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
outline: none;
height: 40px;

z-index: 1;
cursor: text;
border-radius: 10px;
background: white;
}
.search-hits{
width: 0;
visibility: hidden;
border-radius: 14px;
cursor: pointer;
position: absolute;
left: 0;

transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
top:50%;
background: white;
padding: 10px;
}
.search-wrapper:focus-within .search-box{
visibility:visible;
padding-left:45px;
width:100%
}
.search-wrapper:focus-within .search-hits{
visibility:visible;
width:100%;
--width: calc(100%);
}
@media only screen and (max-width: 1017px) {
.search-wrapper:focus-within {
    width: 40%;
}
}


.search-fixed{
position: fixed;
top: 35px;
height: auto;
width: 100%;
height: 50px;
padding-left: 10px;
padding-right: 10px;
left: 0px;
}

.search-box-mobile{
padding-left:10px;
width: 100%;
height: 100%;
outline:none;
}



.search-fixed:focus-visible {
visibility:visible
}

.search-btn-mobile{
width: 40px;
position: absolute;
height: 40px;
right: 13px;
top: 29px;
font-size: 20px;
position: absolute;
/* background: url(https://assets1.cleartax-cdn.com/cleartax/images/1622396747_search11.png) center center no-repeat; */
outline: none;
}
.searchbox-mobile-wrapper {

display: block;
position: relative;
background: #FFFFFF;
padding: 10px;
border: 1px solid #80808024;
border-radius: 12px;
margin-top: 20px;
}
.searchbox-mobile-wrapper:before, .searchbox-mobile-wrapper:after {
content: '';
display: block;
position: absolute;
bottom: 100%;
width: 0;
height: 0;
}
.searchbox-mobile-wrapper:before {
right: 30px;
border: 11px solid transparent;
border-bottom-color: #ddd;
}
.searchbox-mobile-wrapper:after {
right: 30px;
border: 10px solid transparent;
border-bottom-color: #fff;
}

#hitsMobile{
width: 100%;
background: white;
/* box-shadow: 0px 0px 8px 0px #80808096; */
/* border: 1px solid #80808024; */
border-radius: 12px;
}
.results{
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}

.results:hover,.results:active{
text-overflow: none;
white-space: normal;
/* overflow: visible; */
}

.dropdown-size-limit{
max-width:85%;
left:6% !important;
height:fit-content !important;
border-radius:8px !important;
}
.resource-dropdown-size-limit{
    height:fit-content !important;
    border-radius:8px !important;
}
.resource-dropdown-width-2{
    max-width:50%;
    left:15% !important;
}
.resource-dropdown-width-3{
    max-width: 65%;
    left:11% !important;
}
.resource-dropdown-width-4{
    max-width: 85%;
    left:6% !important;
}

/* For 720p res. or lower */
@media screen and (min-width: 768px) and (max-height: 700px) {
.dropdown-size-limit{
    height: calc(100vh - 100px) !important;
}
.low-res-scroll{
    overflow-y: scroll;
}	

.nav-menu-sticky{
position: sticky;
top: 0;
background-color: #fff;
}
.low-res-scroll::-webkit-scrollbar {
width: 8px;
}
.low-res-scroll::-webkit-scrollbar-track {
background: #f1f1f1; 
}

.low-res-scroll::-webkit-scrollbar-thumb {
background: #3142597a; 
border-radius: 10px;
}

.low-res-scroll::-webkit-scrollbar-thumb:hover {
background: #555; 
}
}

.fit-content{
padding-top: 1px;
height: fit-content !important;
}
</style>




	




<style>
	.divider{
		border: 0;
		height: 1px;
		margin-left: 4%;
		margin-right: 4%;
		background: radial-gradient(78.32% 50% at 50% 50%, #9092A3 0%, rgba(224, 224, 224, 0) 100%);
	}
	.box-shadow-xl{
		box-shadow: 0px 30px 60px 0px rgba(164, 172, 178, 0.3);
	}
	@media only screen and (max-width: 767px) {
		.divider{
			margin-left: 0px;
			margin-right: 0px;
		}
	}

	.nav-dropdown.lil-dropdown-open::before{
		display: none !important;
	}
</style>

	
<!-- <nav id="headerNavbar" class="lil-nav nav-bg">
	<span id="pageCategory" style="display: none">enterprise</span>
	<div class="lil-container lil-h-full lil-w-full lil-flex sm:lil-px-4 " id="navbarContainer">

	</div>
</nav> -->
<?php
    include 'header.php';
?>






<script>const masterData = {
  "master": {
    "logo": "https://assets1.cleartax-cdn.com/cleartax/images/1642742112_logosvg.svg",
    "product_navbar": {
      "label_text": "Products",
      "designType": "dropdown_product",
      "dropdownHeader": [
        {
          "id": "enterprise",
          "title": "Enterprise",
          "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1605874053_enterprise.svg",
          "url": "https://cleartax.in/enterprise"
        },
        {
          "id": "tax_experts",
          "title": "Tax Experts",
          "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1605873968_taxexpert.svg",
          "url": "https://cleartax.in/tax-experts"
        },
        {
          "id": "sme",
          "title": "SMEs",
          "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1605874025_sme.svg",
          "url": "https://cleartax.in/sme"
        },
        {
          "id": "individuals",
          "title": "Individuals",
          "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1605873928_individuals.svg",
          "url": "https://cleartax.in/you"
        }
      ],
      "dropdownObj": {
        "enterprise": [
          {
            "id": "gst",
            "url": "https://cleartax.in/gst",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603967824_ic_clear_gst.svg",
            "title": "GST",
            "desc": "G1-G9 filing ASP/GSP Solution"
          },
          {
            "id": "einvoicing",
            "url": "https://cleartax.in/s/e-invoicing-enterprise-software",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1606372771_einvoicing3.png",
            "title": "E-Invoicing",
            "desc": "Bulk invoicing within any ERP"
          },
          {
            "id": "maxITC",
            "url": "http://cleartax.in/s/max-itc",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1623152598_taxsavings.png",
            "title": "MaxITC",
            "desc": "Maximise ITC for Business"
          },
          {
            "id": "ewaybill",
            "url": "https://cleartax.in/s/gst-eway-bill-software",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603967983_ic_ewayb.svg",
            "title": "E-Way Bill",
            "desc": "Generate E-Way Bills at scale"
          },
          {
            "id": "tds",
            "url": "https://cleartax.in/tds",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1606218204_cleartds.svg",
            "title": "TDS",
            "desc": "e-TDS return filing solution"
          },
          {
            "id": "clearinvoicediscounting",
            "url": "https://clear.in/clearfin/",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1637581671_soldproperty.svg",
            "title": "Invoice Discounting",
            "desc": "Supply chain finance simplified"
          }
        ],
        "tax_experts": [
          {
            "id": "gst",
            "url": "https://cleartax.in/gst",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603967824_ic_clear_gst.svg",
            "title": "GST",
            "desc": "G1-G9 filing ASP/GSP Solution"
          },
          {
            "id": "tds",
            "url": "https://cleartax.in/tds",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1606218204_cleartds.svg",
            "title": "TDS",
            "desc": "e-TDS return filing solution"
          },
          {
            "id": "taxcloud",
            "url": "https://cleartax.in/s/taxcloud",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603968183_ic_taxcloud.svg",
            "title": "TaxCloud",
            "desc": "Manage ITRs for multiple clients"
          },
          {
            "id": "clearpro",
            "url": "https://cleartax.in/s/clearpro",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1614344289_clearproapp.svg",
            "title": "ClearPro App",
            "desc": "Track Filing Status on app"
          }
        ],
        "sme": [
          {
            "id": "clearone",
            "url": "https://clear.in/clearone",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1618557796_clearone.svg",
            "title": "ClearOne",
            "desc": "Easy Invoicing for Businesses"
          },
          {
            "id": "gst",
            "url": "https://cleartax.in/gst",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603967824_ic_clear_gst.svg",
            "title": "GST",
            "desc": "G1-G9 filing ASP/GSP Solution"
          },
          {
            "id": "clear",
            "url": "https://cleartax.in/s/clearone-invoicing-billing-app/",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1606369221_clearapp.png",
            "title": "Clear App",
            "desc": "Invoicing App for Businesses"
          },
          {
            "id": "launchpad",
            "url": "http://cleartax.in/clear-launchpad",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1627897850_clearlaunchpad1.png",
            "title": "Launchpad",
            "desc": "Start and manage your business"
          }
        ],
        "individuals": [
          {
            "id": "itr",
            "url": "https://cleartax.in/income-tax-efiling",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603968068_ic_itr.svg",
            "title": "ITR",
            "desc": "File Tax returns within minutes"
          },
          {
            "id": "itrpro",
            "url": "https://cleartax.in/services/",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1606217684_clearservices.svg",
            "title": "ITR Pro",
            "desc": "Expert-assisted tax filing"
          },
          {
            "id": "invest",
            "url": "https://cleartax.in/save",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1606217655_clearinvest.svg",
            "title": "Invest",
            "desc": "Save and grow wealth"
          },
          {
            "id": "black",
            "url": "https://cleartax.in/s/black",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1603967633_ic_black_app.svg",
            "title": "Black",
            "desc": "Invest & File ITR in one app"
          }
        ]
      }
    },
    "more_dropdown": {
      "label_text": "More",
      "designType": "dropdown_column_1",
      "hide_on_search_click": true,
      "dropdownObj": [
        {
          "url": "https://cleartax.in/s/about-us",
          "title": "About us"
        },
        {
          "url": "https://cleartax.in/s/career",
          "title": "Careers"
        },
        {
          "url": "https://docs.cleartax.in/cleartax-learn/",
          "title": "ClearLearn"
        },
        {
          "url": "https://news.cleartax.in/",
          "title": "ClearChronicles"
        },
        {
          "url": "https://cleartax.in/g/terms/",
          "title": "Glossary"
        },
        {
          "url": "https://cleartax.in/s/webinars",
          "title": "Webinars"
        },
        {
          "url": "https://cleartax.in/s/trust",
          "title": "Trust & Safety"
        }
      ]
    },
    "product_navbar_v2": {
      "label_text": "Products",
      "designType": "dropdown_product_v2",
      "dropdownHeader": [
        {
          "id": "enterprise",
          "title": "ENTERPRISE",
          "showIconsList": true,
          "seeAll": {
            "label_text": "See all",
            "url": "https://cleartax.in/enterprise"
          }
        },
        {
          "id": "individuals",
          "title": "INDIVIDUALS",
          "showIconsList": true,
          "seeAll": {
            "label_text": "See all",
            "url": "https://cleartax.in/you"
          }
        },
        {
          "id": "more_products",
          "title": "MORE PRODUCTS",
          "url": "https://cleartax.in/tax-experts",
          "showIconsList": false,
        }
      ],
      "dropdownObj": {
        "enterprise": [
          {
            "id": "gst",
            "url": "https://cleartax.in/gst",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645192552_group2860.svg",
            "title": "GST",
          },
          {
            "id": "maxITC",
            "url": "http://cleartax.in/s/max-itc",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645425887_group3306.png",
            "title": "MaxITC",
          },
          {
            "id": "einvoicing_discounting",
            "url": "https://clear.in/invoice-discounting",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645437399_group.png",
            "title": "Invoice Discounting",
          },
          {
            "id": "e-invoice_bill",
            "url": "https://cleartax.in/s/e-invoicing-enterprise-software",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645437697_group.png",
            "title": "E-Invoicing & E-Way Bill",
          },
          {
            "id": "tds",
            "url": "https://cleartax.in/tds",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645437865_group3621.png",
            "title": "TDS",
          },
          {
            "id": "cc",
            "url": "https://www.clear.in/capture",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1656318963_cc21.png",
            "title": "Capture",
          }
        ],
        "individuals": [
          {
            "id": "itr",
            "url": "https://cleartax.in/income-tax-efiling",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645426019_group2830.png",
            "title": "ITR Filing",
          },
          {
            "id": "black",
            "url": "https://cleartax.in/save",
            "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1645426108_group3283.png",
            "title": "Black (Save & Invest)",
          }
        ],
        "more_products": [
          {
            "id": "clearone",
            "url": "https://clear.in/clearone",
            "title": "ClearOne - Invoicing for SMEs",
          },
          {
            "id": "tax_experts",
            "url": "https://cleartax.in/tax-experts",
            "title": "Products for Tax Experts",
          },
          {
            "id": "tax_consultant",
            "url": "https://cleartax.in/services/",
            "title": "Tax Consultant Services",
          },
          {
            "id": "crypto_taxation",
            "url": "https://cleartax.in/crypto-tax",
            "title": "Crypto Taxation",
          },
          {
            "id": "mf",
            "url": "https://cleartax.in/mutual-funds/",
            "title": "Mutual Funds",
          }
        ]
      }
    },
  },

  "gst": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        },
        "item_2": {
          "label_text": "Resources",
          "designType": "dropdown_column_2",
          "dropdownObj": {
            "column1": [
              {
                "id": "webinars",
                "url": "https://cleartax.in/s/webinars",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639128667_frame.svg",
                "title": "Webinars",
                "desc": "Latest Webinars on GST"
              },
              {
                "id": "clearLearn",
                "url": "https://docs.cleartax.in/cleartax-learn/",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639129584_frame1.svg",
                "title": "ClearLearn",
                "desc": "Learn GST basics"
              },
              {
                "id": "gstCalender",
                "url": "https://cleartax.in/s/gst-calendar",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639131550_frame.svg",
                "title": "GST Calendar",
                "desc": "Track Important GST Dates"
              },
              {
                "id": "gstCalculator",
                "url": "https://cleartax.in/s/tax-calculation-gst",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639129232_frame.svg",
                "title": "GST Calculator",
                "desc": "Calculate GST by Tax slabs"
              }
            ],
            "column2": [
              {
                "id": "gstProductGuide",
                "url": "https://cleartax.in/s/gst-product-guides",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639401628_group18140503.svg",
                "title": "GST Product Guide",
                "desc": "Guide to using ClearGST"
              },
              {
                "id": "glossary",
                "url": "https://cleartax.in/g/terms/",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639130878_frame.svg",
                "title": "Fintech Glossary",
                "desc": "Complete Financial Guide"
              },
              {
                "id": "clearChronicles",
                "url": "https://news.cleartax.in/",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639131028_frame.svg",
                "title": "ClearChronicles",
                "desc": "Latest News on GST"
              }
            ]
          }
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "label_text": "Company",
          "designType": "dropdown_column_1",
          "hide_on_search_click": true,
          "dropdownObj": [
            {
              "url": "https://cleartax.in/s/about-us",
              "title": "About us"
            },
            {
              "url": "https://cleartax.in/s/career",
              "title": "Careers"
            },
            {
              "url": "https://clear.in/s/press",
              "title": "Media & Press"
            },
            {
              "url": "https://cleartax.in/s/trust",
              "title": "Trust & Safety"
            }
          ]
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Start free trial",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "taxcloud",
              "url": "https://taxcloudindia.com/Entity",
              "title": "My Taxcloud"
            },
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=gst",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "gst-return-filing-software": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        },
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": false,
          "url": "https://cleartax.in/Meta/Contact"
        }
      }
    }
  },

  "maxitc": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": false,
        "item_4": {
          "label_text": "Request a demo",
          "designType": "blue_btn",
          "url": "https://cleartax.in/s/contact-sales?pageCategoryType=maxitc&ref=/s/max-itc/",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "taxcloud",
              "url": "https://taxcloudindia.com/Entity",
              "title": "My Taxcloud"
            },
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=gst",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "homeV2": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "modal_grey_btn",
          "modalId": "login-personal-business",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "modal_blue_btn",
          "modalId": "try-for-free-personal-business",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "homeV1": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "modal_grey_btn",
          "modalId": "login-personal-business",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "modal_blue_btn",
          "modalId": "try-for-free-personal-business",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "individuals": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydD9yZWY9c3Nv&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydD9yZWY9c3Nv",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=efiling",
              "title": "All Products"
            },
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "rewards",
              "url": "https://cleartax.in/rewards/myrewards",
              "title": "My rewards"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "ca": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=tax_experts&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=tax_experts&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=gst",
              "title": "All Products"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "taxcloud",
              "url": "https://taxcloudindia.com/Entity",
              "title": "My Taxcloud"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "sme": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=sme&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=sme&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=gst",
              "title": "All Products"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "tally": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try Now",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "einv",
              "url": "https://einv.cleartax.in/",
              "title": "My e-invoicing"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=e_invoicing",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "e-invoicing-enterprise-software": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        },
        "item_2": {
          "label_text": "Resources",
          "designType": "dropdown_column_2",
          "dropdownObj": {
            "column1": [
              {
                "id": "webinars",
                "url": "https://cleartax.in/s/webinars",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639128667_frame.svg",
                "title": "Webinars",
                "desc": "Latest Webinars on GST"
              },
              {
                "id": "clearLearn",
                "url": "https://docs.cleartax.in/cleartax-learn/",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639129584_frame1.svg",
                "title": "ClearLearn",
                "desc": "Learn GST basics"
              },
              {
                "id": "gstCalender",
                "url": "https://cleartax.in/s/gst-calendar",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639131550_frame.svg",
                "title": "GST Calendar",
                "desc": "Track Important GST Dates"
              },
              {
                "id": "gstCalculator",
                "url": "https://cleartax.in/s/tax-calculation-gst",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639129232_frame.svg",
                "title": "GST Calculator",
                "desc": "Calculate GST by Tax slabs"
              }
            ],
            "column2": [
              {
                "id": "gstProductGuide",
                "url": "https://cleartax.in/s/gst-product-guides",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639401628_group18140503.svg",
                "title": "GST Product Guide",
                "desc": "Guide to using ClearGST"
              },
              {
                "id": "glossary",
                "url": "https://cleartax.in/g/terms/",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639130878_frame.svg",
                "title": "Fintech Glossary",
                "desc": "Complete Financial Guide"
              },
              {
                "id": "clearChronicles",
                "url": "https://news.cleartax.in/",
                "icon": "https://assets1.cleartax-cdn.com/cleartax/images/1639131028_frame.svg",
                "title": "ClearChronicles",
                "desc": "Latest News on GST"
              }
            ]
          }
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Request a demo",
          "designType": "blue_btn",
          "new_tab": true,
          "url": "https://cleartax.in/s/contact-sales?pageCategoryType=einvoice&ref=/s/v2/enterprise/",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "einv",
              "url": "https://einv.cleartax.in/",
              "title": "My e-invoicing"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=e_invoicing",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "einv-referral": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try Now",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "gst-pay-later": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L3MvZ3N0LXBheS1sYXRlcg==",
          "hide_for_logged_in_user": true
        },
        "item_4": false,
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },
  
  "itr": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "clearnetwork": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": false,
        "item_4": {
          "label_text": "Request a demo",
          "designType": "modal_blue_btn",
          "modalId": "contact-sales",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "enterprise": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice&return_path=L3Nzbz9yZHI9Lw==&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice&return_path=L3Nzbz9yZHI9Lw==",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=e_invoicing",
              "title": "All Products"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "einv",
              "url": "https://einv.cleartax.in/",
              "title": "My e-invoicing"
            },
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "tds": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=tds&return_path=L2FwaS9hY2NvdW50L2xvZ2luX2NhbGxiYWNr&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=tds&return_path=L2FwaS9hY2NvdW50L2xvZ2luX2NhbGxiYWNr",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "taxcloud",
              "url": "https://taxcloudindia.com/Entity",
              "title": "My Taxcloud"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=tds",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "taxcloud": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=taxcloud&return_path=L0VudGl0eQ==&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=taxcloud&return_path=L0VudGl0eQ==",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxcloud",
              "url": "https://taxcloudindia.com/Entity",
              "title": "My Taxcloud"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "tds",
              "url": "https://cleartds.com/deductors",
              "title": "My TDS"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=taxcloud",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "eway-bill": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=eway_bill&return_path=Lw==&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=eway_bill&return_path=Lw==",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "ewb",
              "url": "https://ewb.cleartax.in/",
              "title": "My e-Way Bill"
            },
            {
              "id": "einv",
              "url": "https://einv.cleartax.in/",
              "title": "My e-invoicing"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=eway_bill",
              "title": "All Products"
            }
          ]
        }
      }
    }
  },

  "business": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=business&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=business&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "einvoice": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=einvoice",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },

  "tax_experts": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=tax_experts&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=tax_experts&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },
  "contact-sales": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==&flow=login",
          "dynamicURL": {
            'https://cleartax.in/gst': 'https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9&flow=login',

            'https://cleartax.in/enterprise': 'https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9&flow=login',

            'https://cleartax.in/s/e-invoicing-enterprise-software': 'https://accounts.cleartax.in/v2?product=einvoice&flow=login',

            'https://cleartax.in/s/gst-eway-bill-software': 'https://accounts.cleartax.in/v2?product=eway_bill&return_path=Lw==&flow=login',

            'https://cleartax.in/tds': 'https://accounts.cleartax.in/v2?product=tds&return_path=L2FwaS9hY2NvdW50L2xvZ2luX2NhbGxiYWNr&flow=login',

            'https://cleartax.in/s/taxcloud': 'https://accounts.cleartax.in/v2?product=taxcloud&return_path=L0VudGl0eQ==&flow=login'

          },
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==",
          "dynamicURL": {
            'https://cleartax.in/gst': 'https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9',

            'https://cleartax.in/enterprise': 'https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9',

            'https://cleartax.in/s/e-invoicing-enterprise-software': 'https://accounts.cleartax.in/v2?product=einvoice',

            'https://cleartax.in/s/gst-eway-bill-software': 'https://accounts.cleartax.in/v2?product=eway_bill&return_path=Lw==',

            'https://cleartax.in/tds': 'https://accounts.cleartax.in/v2?product=tds&return_path=L2FwaS9hY2NvdW50L2xvZ2luX2NhbGxiYWNr',

            'https://cleartax.in/s/taxcloud': 'https://accounts.cleartax.in/v2?product=taxcloud&return_path=L0VudGl0eQ=='

          },
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },
  "crypto": {
    "navbar": {
      "theme": "dark",
      "left": {
        "logo": "https://assets.website-files.com/61f975a54e7c639beec54feb/61faaa4e15e533677e3c7cfd_Logo%20dark.svg",
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": false,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "File ITR",
          "designType": "grey_btn",
          "url": "https://cleartax.in/services/tax_filing/c",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Manage crypto",
          "designType": "blue_btn",
          "url": "https://cleartax.in/crypto-tax",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }     
    }
  },
  "icici-partner": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L3MvaWNpY2ktcGFydG5lcnNoaXAtY2li",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L3MvaWNpY2ktcGFydG5lcnNoaXAtY2li",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  },
  "default": {
    "navbar": {
      "left": {
        "item_1": {
          "fromMaster": true,
          "itemName": "product_navbar_v2"
        }
      },
      "right": {
        "search_bar": true,
        "item_1": {
          "fromMaster": true,
          "itemName": "more_dropdown"
        },
        "item_2": {
          "label_text": "Contact us",
          "designType": "link",
          "hide_on_search_click": true,
          "url": "https://cleartax.in/Meta/Contact"
        },
        "item_3": {
          "label_text": "Login",
          "designType": "grey_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==&flow=login",
          "hide_for_logged_in_user": true
        },
        "item_4": {
          "label_text": "Try for Free",
          "designType": "blue_btn",
          "url": "https://accounts.cleartax.in/v2?product=cleartax&return_path=L015QWNjb3VudC9zdGFydA==",
          "hide_for_logged_in_user": true
        },
        "item_5": {
          "label_text": "My Account",
          "designType": "account_dropdown",
          "url": "https://cleartax.in/Meta/Contact",
          "hide_for_logged_out_user": true,
          "dropdownObj": [
            {
              "id": "taxreturns",
              "url": "https://cleartax.in/MyAccount/start",
              "title": "My tax returns"
            },
            {
              "id": "investment",
              "url": "https://cleartax.in/save/dashboard/portfolio?ref=static-login-dropdown",
              "title": "My investments"
            },
            {
              "id": "orders",
              "url": "https://cleartax.in/services/my_orders",
              "title": "My orders"
            },
            {
              "id": "gst",
              "url": "https://gst.cleartax.in/n?ref=static-login-dropdown",
              "title": "My GST"
            },
            {
              "id": "allProducts",
              "url": "https://cleartax.in/launchpad?source=home",
              "title": "All Products"
            },
            {
              "id": "profile",
              "url": "https://cleartax.in/MyAccount",
              "title": "Profile"
            }
          ]
        }
      }
    }
  }
}</script>
<script>
    const pageCategory = document.getElementById("pageCategory").innerHTML;
	const get_navbar_data = masterData[pageCategory] ? masterData[pageCategory]['navbar'] : masterData.default['navbar'];
	const get_common_data = masterData.master;
	let nav_bar_html = '';
	
	if(get_navbar_data.theme && get_navbar_data.theme === "dark"){
		document.getElementById("headerNavbar").style.backgroundColor = "#000";
	}
	
	for (const keys in get_navbar_data) {
		
		switch(keys){
			case "left":
				nav_bar_html +=`<div class="sm:lil-hidden lil-flex lil-h-full lil-w-1/2 md:lil-w-2/5">`;
				nav_bar_html += logoHtml(get_navbar_data[keys]);
			break;

			case "right":
				nav_bar_html += `<div class="sm:lil-hidden lil-flex lil-justify-end lil-h-full lil-w-2/3">`
				if(get_navbar_data[keys].search_bar){
					nav_bar_html += searchBarHtml();
				}
			break;
		}
		nav_bar_html += navabrHtmlCreation(get_navbar_data[keys]);
		nav_bar_html +='</div>'
	}
	nav_bar_html += navabrMobileHtmlCreation(get_navbar_data);

	document.getElementById("navbarContainer").innerHTML = nav_bar_html;

	function navabrHtmlCreation(sides){
		let sides_html = ''
		for (const ph in sides) {
			let selectedPlaceholder = sides[ph].fromMaster ? get_common_data[sides[ph].itemName] : sides[ph];
			if(selectedPlaceholder){
				switch (selectedPlaceholder.designType){
				case "dropdown_product":
					sides_html += productDropdown(selectedPlaceholder);
				break;
				case "dropdown_product_v2":
					sides_html += productDropdownV2(selectedPlaceholder);
				break;
				case "dropdown_column_2":
					sides_html += multiColDropdown(selectedPlaceholder, 2);
				break;
				case "dropdown_column_3":
					sides_html += multiColDropdown(selectedPlaceholder, 3);
				break;
				case "dropdown_column_4":
					sides_html += multiColDropdown(selectedPlaceholder, 4);
				break;
				case "dropdown_column_1":
					sides_html += singleColDropdown(selectedPlaceholder);
				break;
				case "link":
					sides_html += linkDesign(selectedPlaceholder);
				break;
				case "grey_btn":
					sides_html += greyBtn(selectedPlaceholder);
				break;
				case "blue_btn":
					sides_html += blueBtn(selectedPlaceholder);
				break;
				case "modal_grey_btn":
					sides_html += modalGreyBtn(selectedPlaceholder);
				break;
				case "modal_blue_btn":
					sides_html += modalBlueBtn(selectedPlaceholder);
				break;
				case "account_dropdown":
					sides_html += accountDropdown(selectedPlaceholder);
				break;
			}
			}
		}
		return sides_html;
	}

	// mobile html creation
	function navabrMobileHtmlCreation(items){
		let mobile_html = `<div class="lil-hidden sm:lil-flex lil-h-full lil-w-4/5">${logoHtml(get_navbar_data.left)}
			${getProductDropdownHTML(items)}
			</div>`

		mobile_html += `<div class="lil-w-1/5 lil-hidden lil-items-center sm:lil-flex sm:lil-justify-end">`
		
		if(items.right.search_bar){
			mobile_html += mobileSearchBar();
		}
		const onDarkThemeToggleColor = get_navbar_data.theme=='dark' ? `style="border-color:#fff;"` : ''
		mobile_html += `<div class="lil-toggle" id="mobile-header-toggle">
				<div class="lil-toggle-bar" ${onDarkThemeToggleColor}></div>
				<div class="lil-toggle-bar" ${onDarkThemeToggleColor}></div>
				<div class="lil-toggle-bar lil-toggle-bar-half" ${onDarkThemeToggleColor}></div>
			</div> <div class="lil-sidenav lil-p-4 header-sidenav " id="mobile-header-sidenav"><div class="lil-flex lil-flex-wrap lil-pb-8 lil-mb-8">`
		
		for(let el in items){
			let sides = get_navbar_data[el];
			for (const ph in sides) {
				let selectedPlaceholder = sides[ph].fromMaster ? get_common_data[sides[ph].itemName] : sides[ph];
				if(selectedPlaceholder){
					switch (selectedPlaceholder.designType){
						// case "dropdown_product":
						// 	mobile_html += productDropdownMobile(selectedPlaceholder);
						// break;
						case "dropdown_column_2":
							mobile_html += multiColDropdownMobile(selectedPlaceholder);
						break;
						case "dropdown_column_3":
							mobile_html += multiColDropdownMobile(selectedPlaceholder);
						break;
						case "dropdown_column_4":
							mobile_html += multiColDropdownMobile(selectedPlaceholder);
						break;
						case "dropdown_column_1":
							mobile_html += singleColDropdownMobile(selectedPlaceholder);
						break;
						case "link":
							mobile_html += linkDesignMobile(selectedPlaceholder);
						break;
						case "grey_btn":
							mobile_html += greyBtn(selectedPlaceholder);
						break;
						case "blue_btn":
							mobile_html += blueBtn(selectedPlaceholder);
						break;
						case "modal_grey_btn":
							mobile_html += modalGreyBtn(selectedPlaceholder);
						break;
						case "modal_blue_btn":
							mobile_html += modalBlueBtn(selectedPlaceholder);
						break;
						case "account_dropdown":
							mobile_html += accountDropdownMobile(selectedPlaceholder);
						break;
					}
				}
			}
		}
		mobile_html += `</div></div> <div class="lil-overlay"></div></div>`
		return mobile_html
	}

	function logoHtml(obj){
		const logoUrl = obj.logo ? obj.logo : get_common_data.logo;
		return `
		<a data-label="Clear" onclick="handleTrack({label: 'navbar_image_BrandIcon', obj: this})" class="lil-flex lil-items-center" href="https://cleartax.in">
				
				<img class="lil-mr-6" width="140" height="26" alt="Clear"
				src="${logoUrl}" alt="Clear" />
				
				
			</a>
		`
	}
	function searchBarHtml(){
		return `
		<div class="lil-flex lil-items-center search-wrapper" tabindex="1" onfocus="handleTrack({label: 'navbar_search_button', obj: this})">
				<input id="searchBox" name="search" type="text" placeholder="Search ClearTax" class="lil-border-grey-300 lil-border-sm lil-shadow-md search search-box">
				<input id="search_submit"  type="" class="search-btn" disabled="true">
				<div id="hits" class="search-hits"></div>
		</div>
		`
	}
	function mobileSearchBar(){
		return `<input id="search-submit-mobile" type="submit" value="" class="search-btn search-btn-nav-mobile"  onclick="handleTrack({label: 'navbar_search_button', obj: this});" placeholder="">
			<div class="search-fixed lil-invisible" tabindex="2">
				<div class="lil-shadow-sm searchbox-mobile-wrapper">
					<input id="searchBoxMobile" name="search" type="text" placeholder="Search ClearTax" class="search-box-mobile">
				</div>
				
				<p id="search_submit_mobile"  type="" class="lil-vertical-tab-arrow search-btn-mobile"  disabled="true">&#10005;</p>
				<!-- <input id="search_submit"  type="" class="search-btn-mobile"  disabled="true"> -->
				<div id="hitsMobile" class="search-hits-mobile"></div>
			</div>`
	}

	function productDropdown(obj){
		let authClass = setAuthClass(obj);
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''

		let prod_drop_html = `<div class="lil-mt-6 sm:lil-hidden fit-content ${authClass} ${searchHideClass}">
							<div class="lil-flex lil-items-center lil-mx-6 lil-mt-1 lil-dropdown nav-dropdown md:lil-px-0">
								<div class="lil-text-base lil-font-bold lil-pb-6 lil-nav-text lil-cursor-pointer">
									${obj.label_text}
									<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0"></span>
								</div>
								<div class="lil-dropdown-menu lil-dropdown-full-menu low-res-scroll dropdown-size-limit">
									<div class="menu-wrapper">
										<div class="lil-flex lil-container nav-menu-sticky lil-border-b-sm lil-border-grey-300 nav-menu-container" style="padding-left:4%;padding-right:4%">`
		
		for(let header of obj.dropdownHeader){
			prod_drop_html += `	<a onclick="handleTrack({label: 'navbar_Products_Dropdown_button', obj: this})" href="${header.url}" class="lil-w-1/4 lil-dropdown-submenu">
					<div class="lil-flex lil-py-2 lil-px-1 lil-items-center lil-dropdown-submenu-header lil-dropdown-menu-item">
						<div class="lil-w-1/5">
							<img src="${header.icon}"
								width="44" height="44" alt="${header.id}" />
						</div>
						<div class="lil-w-4/5">
							<h6>${header.title}</h6>
						</div>
					</div>
				</a>`
		}
		prod_drop_html += `</div> <div class="lil-flex lil-container" style="padding-left:4%;padding-right:4%">`;
		
		for(let headerobj of obj.dropdownHeader){
			prod_drop_html += `<div class="lil-w-1/4 lil-dropdown-submenu">`

			for(let dropObj of obj.dropdownObj[headerobj.id]){
				prod_drop_html += `
				<a data-label="${dropObj.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_${dropObj.title}', obj: this})" target="_blank" href="${dropObj.url}"  referrerpolicy="no-referrer-when-downgrade">
						<div class="lil-flex lil-items-center lil-p-1 lil-dropdown-menu-item">
							<div class="lil-w-1/5">
								<img src="${dropObj.icon}" height="45" width="45" alt="${dropObj.title}" />
								</div>
								<div class="lil-w-4/5">
								<p class="lil-text-base lil-text-font-500 lil-font-semibold">${dropObj.title}</p>
								<p class="lil-text-s-14">
									${dropObj.desc}
								</p>
							</div>
						</div>
					</a>
				`
			}
			prod_drop_html += '</div>'
		}
		prod_drop_html += `</div></div></div></div></div>`

		return prod_drop_html;
	}

	function productDropdownV2(obj){
		let authClass = setAuthClass(obj);
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		const onDarkThemeTextColor = get_navbar_data.theme=='dark' ? 'lil-text-white' : 'lil-nav-text'		
		const onDarkThemeBorder = get_navbar_data.theme=='dark' ? `style="border-color: white;"` : ''		

		let prod_drop_html = 	`<div class="lil-mt-6 sm:lil-hidden fit-content ${authClass} ${searchHideClass}">
							<div class="lil-flex lil-items-center lil-mx-6 lil-mt-1 lil-dropdown nav-dropdown md:lil-px-0">
								<div class="lil-text-base lil-font-bold lil-pb-6 ${onDarkThemeTextColor} lil-cursor-pointer">
									${obj.label_text}
									<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0" ${onDarkThemeBorder}></span>
								</div>
								<div class="lil-dropdown-menu lil-dropdown-full-menu low-res-scroll dropdown-size-limit box-shadow-xl">
									<div class="menu-wrapper">
										<div class="lil-flex lil-flex-wrap lil-container nav-menu-sticky nav-menu-container" style="padding-left:8%;padding-right:4%">`
		
		for(let header of obj.dropdownHeader){
			prod_drop_html += `
					<div class="lil-w-1/3 lil-pl-8 lil-flex lil-py-2 lil-items-center lil-mt-6 lil-mb-2">
						<div class="lil-w-full">
							<h6 class="lil-text-base lil-font-semibold lil-text-font-200">${header.title}</h6>
						</div>
					</div>`
		}
		prod_drop_html += `</div>
		<hr class="divider" />
		<div class="lil-flex lil-container" style="padding-left:8%;padding-right:4%">`;
		
		for(let headerobj of obj.dropdownHeader){
			prod_drop_html += `<div class="lil-w-1/3 lil-px-4 lil-dropdown-submenu">`

			for(let dropObj of obj.dropdownObj[headerobj.id]){
				prod_drop_html += `
				<a data-label="${dropObj.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_${headerobj.title}', obj: this})" target="_blank" href="${dropObj.url}"  referrerpolicy="no-referrer-when-downgrade">
						<div class="lil-flex lil-items-center lil-py-2 lil-pl-4 lil-dropdown-menu-item">`

					if(headerobj.showIconsList){
						prod_drop_html += `<div class="lil-w-2/12">
								<img src="${dropObj.icon}" height="24" width="24" alt="${dropObj.title}" />
								</div>`
					}
								
					prod_drop_html += `<div class="${headerobj.showIconsList ? 'lil-w-10/12' : 'lil-w-full'}">
								<p class="lil-text-base lil-text-font-500 lil-font-semibold">${dropObj.title}</p>
							</div>
						</div>
					</a>
				`
			}
			if(headerobj.seeAll){
				prod_drop_html += `<div class="lil-flex lil-pl-4 lil-pb-6">
					<div class="lil-w-2/12"></div>
					<div class="lil-w-10/12">
						<a data-label="${headerobj.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_seeAll_${headerobj.title}', obj: this})" class="lil-btn-link lil-items-center lil-text-s-14 sm:lil-pl-4 sm:lil-pr-0 sm:lil-py-0" href="${headerobj.seeAll.url}" target="_blank">
					${headerobj.seeAll.label_text}<span class="lil-font-medium">&nbsp; →</span>
				</a></div>
				</div>`
			}
			prod_drop_html += '</div>'
		}
		prod_drop_html += `</div></div></div></div></div>`

		return prod_drop_html;
	}

	function multiColDropdown(obj, colNum){
		let authClass = setAuthClass(obj);
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''

		let multi_drop_html = `
		<div class="lil-mt-6 sm:lil-hidden fit-content ${authClass} ${searchHideClass}">
			<div class="lil-flex lil-items-center lil-mx-6 lil-mt-1 lil-dropdown nav-dropdown md:lil-px-0">
			<div class="lil-text-base lil-font-bold lil-pb-6 lil-nav-text lil-cursor-pointer">
				${obj.label_text}
				<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0"></span>
			</div>
			<div class="lil-dropdown-menu lil-dropdown-full-menu low-res-scroll resource-dropdown-size-limit resource-dropdown-width-${colNum}">
				<div class="menu-wrapper">
					<div class="lil-flex lil-px-12">`
		for(let col in obj.dropdownObj){
			multi_drop_html += `<div class="lil-w-1/${colNum} lil-dropdown-submenu">`
			for(let el of obj.dropdownObj[col]){
				multi_drop_html += `<a data-label="${el.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_resources', obj: this})" target="_blank" href="${el.url}"  referrerpolicy="no-referrer-when-downgrade">
					<div class="lil-flex lil-items-center lil-p-1 lil-dropdown-menu-item">
						<div class="lil-w-1/5">
							<img src="${el.icon}" height="45" width="45" alt="${el.title}" />
						</div>
					<div class="lil-w-4/5">
						<p class="lil-text-base lil-text-font-500 lil-font-semibold">${el.title}</p>
							<p class="lil-text-s-14">
								${el.desc}
							</p>
						</div>
					</div>
				</a>`
			}
			multi_drop_html += '</div>'
		}
		multi_drop_html += `</div></div></div></div></div>`

		return multi_drop_html;
	}

	function singleColDropdown(obj){

		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		const onDarkThemeTextColor = get_navbar_data.theme=='dark' ? 'lil-text-white' : 'lil-nav-text'		
		const onDarkThemeBorder = get_navbar_data.theme=='dark' ? `style="border-color: white;"` : ''

		let authClass = setAuthClass(obj);

		let single_drop_html = `<div class="lil-flex lil-items-center lil-h-full lil-dropdown lil-mx-3 md:lil-mx-1 nav-dropdown ${authClass} ${searchHideClass}"> <div class="lil-text-base lil-font-medium ${onDarkThemeTextColor} lil-cursor-pointer">
			${obj.label_text}
			<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0" ${onDarkThemeBorder}></span>
		</div>
		<div class="lil-dropdown-menu lil-px-4">`

		for(let list of obj.dropdownObj){
			single_drop_html += `<div class="lil-p-4 lil-text-font-500 lil-text-s-20 lil-font-medium">
										<a onclick="handleTrack({label: 'navbar_${obj.label_text}_Dropdown_button', obj: this})" target="_blank" class="hover:lil-text-blue-350" href="${list.url}" >${list.title}</a>
									</div>`
		}
		single_drop_html += `</div></div>`
		return single_drop_html;
	}

	function linkDesign(obj){
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		const onDarkThemeTextColor = get_navbar_data.theme=='dark' ? 'lil-text-white' : ''
		
		let authClass = setAuthClass(obj);
		
		let htmlCode =`<a onclick="handleTrack({label: 'navbar_button', obj: this})" target="_blank" 
				href="${obj.url}" class="lil-h-full lil-flex lil-items-center support-navbar ${authClass} ${searchHideClass}">
				<div class="lil-text-base lil-font-medium ${onDarkThemeTextColor} lil-mx-6 md:lil-mx-1">${obj.label_text}</div></a>`
		
		return htmlCode
	}

	function greyBtn(obj){

		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		let authClass = setAuthClass(obj);
		let loginURL = obj.url;

		if(obj.dynamicURL){
			if(obj.dynamicURL[document.referrer]){
				loginURL = obj.dynamicURL[document.referrer]
			}
			else {
				const urlParams = new URLSearchParams(window.location.search);
				const pageCategoryType = urlParams.get('pageCategoryType');
				const defaultReturnPath = (window.location.pathname.includes('/s/contact-sales') 
					? productReturnPath['business'] 
					: productReturnPath['default'])
				const categorySsoLink = productReturnPath[pageCategoryType] || productReturnPath['v2'] || defaultReturnPath;
				const btnText = obj.label_text.toLowerCase().replace(/\s+/g, '');
				const isLoginFlow = (btnText === 'login') ? '&flow=login' : '';
				loginURL = "https://accounts.cleartax.in/v2" + categorySsoLink + isLoginFlow;
			}
		}

		return `<div class="lil-flex lil-h-full lil-items-center sm:lil-w-1/2 sm:lil-mt-8 sm:lil-px-2 ${authClass} ${searchHideClass}"> <a onclick="handleTrack({label: 'navbar_button', obj: this})" target="${obj.new_tab?"_blank":"_self"}"  class="lil-ml-6 lil-btn lil-btn-grey lg:lil-ml-2 md:lil-ml-1 sm:lil-ml-0 sm:lil-w-full" href="${loginURL}" referrerpolicy="no-referrer-when-downgrade">${obj.label_text}</a> </div>`
	}

	function blueBtn(obj){
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		let authClass = setAuthClass(obj);
		let loginURL = obj.url;
		if(obj.dynamicURL){
			if(obj.dynamicURL[document.referrer]){
				loginURL = obj.dynamicURL[document.referrer]
			}
			else {
				const urlParams = new URLSearchParams(window.location.search);
				const pageCategoryType = urlParams.get('pageCategoryType');
				const defaultReturnPath = (window.location.pathname.includes('/s/contact-sales') 
					? productReturnPath['business'] 
					: productReturnPath['default'])
				const categorySsoLink = productReturnPath[pageCategoryType] || productReturnPath['v2'] || defaultReturnPath;
				const btnText = obj.label_text.toLowerCase().replace(/\s+/g, '');
				const isLoginFlow = (btnText === 'login') ? '&flow=login' : '';
				loginURL = "https://accounts.cleartax.in/v2" + categorySsoLink + isLoginFlow;
			}
		}
		return `<div class="lil-flex lil-h-full lil-items-center sm:lil-w-1/2 sm:lil-mt-8 sm:lil-px-2 ${authClass} ${searchHideClass}"> <a onclick="handleTrack({label: 'navbar_button', obj: this})" href="${loginURL}" target="${obj.new_tab?"_blank":"_self"}" class="lil-btn lil-btn-blue lil-ml-6 lg:lil-ml-2 md:lil-ml-1 sm:lil-ml-0 sm:lil-w-full" referrerpolicy="no-referrer-when-downgrade">${obj.label_text}</a></div>`
	}

	function modalGreyBtn(obj){
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		let authClass = setAuthClass(obj);

		return `<div class="lil-flex lil-h-full lil-items-center sm:lil-w-1/2 sm:lil-mt-8 sm:lil-px-2 ${authClass} ${searchHideClass}"> <a onclick="handleTrack({label: 'navbar_button', modal: '${obj.modalId}', obj: this});" class="lil-ml-6 lil-btn lil-btn-grey lil-cursor-pointer lg:lil-ml-2 md:lil-ml-1 sm:lil-ml-0 sm:lil-w-full" referrerpolicy="no-referrer-when-downgrade">${obj.label_text}</a> </div>`
	}

	function modalBlueBtn(obj){
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		let authClass = setAuthClass(obj);
		return `<div class="lil-flex lil-h-full lil-items-center sm:lil-w-1/2 sm:lil-mt-8 sm:lil-px-2 ${authClass} ${searchHideClass}"> <a onclick="handleTrack({label: 'navbar_button', modal: '${obj.modalId}', obj: this});" class="lil-btn lil-btn-blue lil-cursor-pointer lil-ml-6 lg:lil-ml-2 md:lil-ml-1 sm:lil-ml-0  sm:lil-w-full" referrerpolicy="no-referrer-when-downgrade">${obj.label_text}</a> </div>`
	}


	function accountDropdown(obj){
		const searchHideClass = obj.hide_on_search_click ? 'hide-onsearch' : ''
		let authClass = setAuthClass(obj);
		let account_drop_html = `<div class="lil-h-full ${authClass} ${searchHideClass}">
				<div class="lil-flex lil-items-center lil-h-full lil-dropdown lil-mx-6 md:lil-mx-1 nav-dropdown">
					<div class="lil-text-base lil-font-bold lil-nav-text lil-cursor-pointer">
						${obj.label_text}
						<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0"></span>
					</div>
				<div class="lil-dropdown-menu">`
		for(let list of obj.dropdownObj){
			account_drop_html += `<div class="lil-p-4 lil-text-font-500 lil-text-s-20 lil-font-medium"> 
									<a onclick="handleTrack({label: 'navbar_MyAccount_Dropdown_button', obj: this})" class="hover:lil-text-blue-350" href="${list.url}" referrerpolicy="no-referrer-when-downgrade">${list.title}</a>
								</div>`
		}
		account_drop_html += `<div class="lil-p-4 lil-text-font-500 lil-text-s-20 lil-font-medium">
							<a class="hover:lil-text-blue-350" href="#" onclick="logout()">Logout</a>
						</div></div></div></div>`


		return account_drop_html;
	}

	function getProductDropdownHTML(items){
		let product_html ='';
		for(let el in items){
			let sides = get_navbar_data[el];
			for (const ph in sides) {
				let selectedPlaceholder = sides[ph].fromMaster ? get_common_data[sides[ph].itemName] : sides[ph];
				if(selectedPlaceholder){
					switch (selectedPlaceholder.designType){
						case "dropdown_product_v2":
							product_html += productDropdownV2Mobile(selectedPlaceholder);
						break;
						case "dropdown_product":
							product_html += productDropdownMobileNew(selectedPlaceholder);
						break;
					}
				}
			}
		}
		return product_html
	}
	function productDropdownMobileNew(obj){
		let authClass = setAuthClass(obj);

		let prod_drop_html = `
			<div class="lil-text-s-14 lil-font-medium lil-py-3  lil-cursor-pointer" id="mobile-header-product-toggle">
				${obj.label_text}
				<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0"></span>
			</div>
			<div class="lil-sidenav lil-p-4 header-sidenav" id="mobile-product-sidenav"><div class="lil-flex lil-flex-wrap lil-pb-8 lil-mb-8">
				${productDropdownMobile(obj)}
			</div></div>
			`

		return prod_drop_html;

	}

	function productDropdownV2Mobile(obj){
		let authClass = setAuthClass(obj);		
		const onDarkThemeTextColor = get_navbar_data.theme=='dark' ? 'lil-text-white' : ''		
		const onDarkThemeBorder = get_navbar_data.theme=='dark' ? `style="border-color: white;"` : ''
		const onDarkThemeBlackBg = get_navbar_data.theme=='dark' ? 'lil-bg-black' : ''
		let prod_drop_html = `<div class="lil-text-s-14 lil-font-medium lil-py-3 ${onDarkThemeTextColor} lil-cursor-pointer" 				 id="mobile-header-product-toggle">
		${obj.label_text}
		<span class="lil-inline-block lil-caret lil-caret-down lil-ml-1 md:lil-ml-0" ${onDarkThemeBorder}"></span>
		</div>
		<div class="lil-sidenav lil-p-4 header-sidenav" id="mobile-product-sidenav"><div class="lil-flex lil-flex-wrap lil-pb-8 lil-mb-8">
		${productDropdownMobileV2Temaplate(obj)}
		</div></div>`
		return prod_drop_html;
	}
	function productDropdownMobileV2Temaplate(obj){
		let authClass = setAuthClass(obj);
		let product_html = `<div class="lil-w-full ${authClass}">`;

		for(let header of obj.dropdownHeader){
			let right_html = '';
			if(header.seeAll){
			right_html = `<a data-label="${header.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_seeAll_${header.title}', obj: this})" class="lil-btn-link lil-text-s-14" href="${header.seeAll.url}" target="_blank">
					${header.seeAll.label_text}
				</a>`
			} else{
				right_html = '';
			}

			product_html  += `<div class="lil-mb-4">
								<div class="lil-flex lil-flex-wrap lil-justify-between lil-pt-4 lil-pb-2">
									<div class="lil-w-1/2 lil-font-semibold lil-text-font-200 lil-text-s-14">${header.title}</div>
									<div class="lil-w-1/2 lil-text-s-14 lil-text-right lil-pr-4">${right_html}</div>
									
								</div>
								<hr class="divider" />
							<div class="lil-block lil-py-4">`

			for(let dropObj of obj.dropdownObj[header.id]){
				product_html += `
				<a data-label="${dropObj.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_${header.title}', obj: this})" target="_blank" href="${dropObj.url}" referrerpolicy="no-referrer-when-downgrade">
					<div class="lil-flex lil-items-center lil-p-2">`

					if(header.showIconsList){
						product_html += `<div class="lil-w-1/12">
							<img src="${dropObj.icon}" height="15" width="15" alt="${dropObj.title}" />
						</div>`
					}
						
					product_html += `<div class="${header.showIconsList ? 'lil-w-11/12' : 'lil-w-full'}">
							<p class="lil-text-s-14 lil-font-medium lil-text-font-500">${dropObj.title}</p>
						</div>
					</div>
				</a>`
			}
			product_html += '</div></div>'
		}
		product_html += '</div>'
		return product_html;
	}
	function productDropdownMobile(obj){
		let authClass = setAuthClass(obj);
		let product_html = `<div class="lil-w-full ${authClass}">
						<div class="lil-mb-4">
							<p>${obj.label_text}</p>
						</div>`;

		for(let header of obj.dropdownHeader){
			product_html  += `<div class="lil-mb-4">
							<details class="lil-w-full lil-accordian">
								<summary class="lil-cursor-pointer">
									<div class="lil-flex lil-items-center">
										<img class="lil-w-1/12" src="${header.icon}" height="35" width="35" alt="${header.id}"/>
										<div class="lil-w-10/12 lil-font-bold lil-text-font-600 lil-text-s-20 lil-ml-4">${header.title}</div>
										<div class="lil-w-1/12 lil-accordian-caret lil-order-3 lil-ml-auto"></div>
									</div>
								</summary>
								<div class="lil-block lil-bg-grey-150 lil-py-4">`

			for(let dropObj of obj.dropdownObj[header.id]){
				product_html += `
				<a data-label="${dropObj.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_${header.id}', obj: this})" target="_blank" href="${dropObj.url}" referrerpolicy="no-referrer-when-downgrade">
					<div class="lil-flex lil-items-center lil-p-2 lil-dropdown-menu-item">
						<div class="lil-w-2/12">
							<img src="${dropObj.icon}" height="35" width="35" alt="${dropObj.title}" />
						</div>
						<div class="lil-w-10/12">
							<p class="lil-text-base lil-font-bold lil-text-font-600">${dropObj.title}</p>
							<p class="lil-text-s-14">
								${dropObj.desc}
							</p>
						</div>
					</div>
				</a>`
			}
			product_html += '</div></details></div>'
		}
		product_html += '</div> <div class="lil-border-b-lg lil-border-grey-250 lil-w-full lil-mb-8"></div>'
		return product_html;
	}

	function multiColDropdownMobile(obj){
		let authClass = setAuthClass(obj);
		let multi_html =`<div class="lil-mb-4 lil-w-full ${authClass}">
							<details class="lil-w-full lil-accordian">
								<summary class="lil-cursor-pointer">
									<div class="lil-flex lil-items-center">
										<p class="lil-w-11/12 lil-text-s-20 lil-ml-4">${obj.label_text}</p>
										<div class="lil-w-1/12 lil-accordian-caret lil-order-3 lil-ml-auto"></div>
									</div>
								</summary>
								<div class="lil-block lil-bg-grey-150 lil-py-4">`
		
		for(let col in obj.dropdownObj){
			for(let el of obj.dropdownObj[col]){
				multi_html += `<a data-label="${el.title}" onclick="handleTrack({label: 'navbar_Products_Dropdown_button_${obj.label_text}', obj: this})" target="_blank" href="${el.url}" referrerpolicy="no-referrer-when-downgrade">
					<div class="lil-flex lil-items-center lil-p-2 lil-dropdown-menu-item">
						<div class="lil-w-2/12">
							<img src="${el.icon}" height="35" width="35" alt="${el.title}" />
						</div>
						<div class="lil-w-10/12">
							<p class="lil-text-base lil-font-bold lil-text-font-600">${el.title}</p>
							<p class="lil-text-s-14">
								${el.desc}
							</p>
						</div>
					</div>
				</a>`
			}
		}
		multi_html += `</div></details></div>`

		return multi_html;

	}

	function singleColDropdownMobile(obj){
		let authClass = setAuthClass(obj);
		let dropdown_html = `<div class="lil-mb-4 lil-w-full ${authClass}">
							<details class="lil-w-full lil-accordian">
								<summary class="lil-cursor-pointer">
									<div class="lil-flex lil-items-center">
										<p class="lil-w-11/12 lil-text-s-20 lil-ml-4">${obj.label_text}</p>
										<div class="lil-w-1/12 lil-accordian-caret lil-order-3 lil-ml-auto"></div>
									</div>
								</summary>
								<div class="lil-block lil-bg-grey-150 lil-py-2 lil-mt-4">`

		for(let list of obj.dropdownObj){
			dropdown_html+= `<div class="lil-p-4 lil-text-font-500 lil-text-s-20 lil-font-medium">
										<a onclick="handleTrack({label: 'navbar_${obj.label_text}_Dropdown_button', obj: this})" target="_blank" class="hover:lil-text-blue-350" href="${list.url}">${list.title}</a>
									</div>`
		}
		dropdown_html += `</div></details></div>`
		return dropdown_html;
	}
	function linkDesignMobile(obj){
		let authClass = setAuthClass(obj);
		return `<div class="lil-w-full lil-mb-4 ${authClass}">
					<a onclick="handleTrack({label: 'navbar_button', obj: this})" target="_blank" href="${obj.url}">
						<p class="lil-inline-block lil-text-s-20 lil-ml-4">${obj.label_text}</p>
					</a>
				</div>`
	}
	function accountDropdownMobile(obj){
		let authClass = setAuthClass(obj);
		let acc_html = `<div class="lil-flex lil-w-full ${authClass}">
						<div class="lil-w-full lil-my-4">
						<details class="lil-w-full lil-accordian">
							<summary class="lil-cursor-pointer">
								<div class="lil-flex lil-items-center">
									<p class="lil-w-11/12 lil-text-s-20 lil-ml-4">${obj.label_text}</p>
									<div class="lil-w-1/12 lil-accordian-caret lil-order-3 lil-ml-auto"></div>
								</div>
							</summary>
						<div class="lil-block lil-bg-grey-150 lil-py-2 lil-mt-4">`
	
		for(let list of obj.dropdownObj){
			acc_html += `<div class="lil-p-4 lil-text-font-500 lil-text-s-20 lil-font-medium">
				<a onclick="handleTrack({label: 'navbar_MyAccount_Dropdown_button', obj: this})" class="hover:lil-text-blue-350" href="${list.url}" referrerpolicy="no-referrer-when-downgrade">${list.title}</a>
				</div>`
		}
		acc_html += `</div></details></div></div>
						<div class="lil-w-full lil-my-4 ${authClass}">
							<a href="#" onclick="logout()">
								<p class="lil-inline-block lil-text-s-20 lil-ml-4">Logout</p>
							</a>
					</div>`

		return acc_html;
		
	}
	function setAuthClass(obj){
		let authClass = ''
		if(obj.hide_for_logged_in_user){
			authClass = 'nav-logged-out-container'
		}
		if(obj.hide_for_logged_out_user){
			authClass = 'nav-logged-in-container lil-hidden'
		}
		return authClass;
	}
</script>

<script>
	; (function () {
		/* mobile header interaction */
		var productDropdown = document.getElementById('mobile-header-product-toggle');
		let searchMobile = document.getElementById("search-submit-mobile");
		let hamburgerIconToHide = document.getElementById('mobile-header-toggle');
		if (productDropdown) {
			productDropdown.addEventListener('click', function () {
				var productSidebar = document.getElementById('mobile-product-sidenav');
				if (productSidebar) {
					if (productSidebar.classList.contains('lil-sidenav-open')) {
						productSidebar.classList.remove('lil-sidenav-open');
						hamburgerIconToHide.classList.remove('lil-hidden');
						if(searchMobile) searchMobile.classList.remove('lil-invisible')
					} else {
						productSidebar.classList.add('lil-sidenav-open');
						hamburgerIconToHide.classList.add('lil-hidden');
						if(searchMobile) searchMobile.classList.add('lil-invisible')
					}
				}

		
			
			});
		}
	})()
</script>

<style>	
	#contact-sales {
		width: 400px;
	}

	.myntra_width{
        width: 170px;
	}
	.brandHeight{
		height: 150px;
	}
	#request-demo {
			width: 700px;
		}
	#sticky-rad{
		transition: 1s;
		bottom: -100px;
	}
	.productCards{
		transition: 0.4s;
		width: 46%;

		background: #FFFFFF;

		border: 1px solid #EBEBEC;
		box-sizing: border-box;
		box-shadow: 10px 10px 24px rgba(146, 153, 158, 0.12);
		border-radius: 16px;
		margin: 10px auto;
	}
	.productCards:hover{
		transition: 0.4s;
		transform: scale(1.1);
	}

	.productIcon{
		width: 52px;
		margin-left: -12px;
	}
	
	.servicesFold {
		background-color: #F8F8F8;
	}
	.serviceCard img{
		margin-top: -6px;
	}

	.lil-btn-blue-outline {
    	border: 1.5px solid #1678FB;
    	color: #1678FB;
	}
	@media only screen and (min-width: 768px) {
        #contact-sales {
            width: 700px;
        }
		#rad-contact-sales{
			width: 700px;
		}
    }

	@media only screen and (max-width: 767px) {
		#product-ecosystem-tab .lil-capsule-tabs {
			top: 3rem;
		}
		.myntra_width{
			width: 80px;
    		padding: 0 10px;
		}
		.brandHeight{
			height: 100%;
		}
		#request-demo {
			width: 90%;
		}
		#rad-contact-sales{
			width: 90%;
		}
		.productIcon{
			width: 44px;
			margin-left: -6px;
			margin-bottom: 10px;
		}
	}
	@media only screen and (max-width: 400px) {
		#contact-sales {
			width: 300px;
		}

	}
	@media only screen and (min-width: 768px) {
		.hero-section {
			padding-top: 5%;
		}
	}
	@media only screen and (max-width: 400px){
        .hero-line{
			font-size: 15px;
		}
    }
	@media only screen and (width: 1280px) {
		.hero-section .hero-header {
			font-size: 56px;
		}
	}

	
</style>
<div class="lil-container lil-pt-20 sm:lil-pt-8">
	<section
		class="lil-flex hero-section lil-pb-20 md:lil-pt-6 md:lil-items-start md:lil-flex-col-reverse sm:lil-pb-0 sm:lil-flex-col-reverse">
		<div class="lil-w-2/3 md:lil-w-full sm:lil-w-full">
			<p class="lil-text-s-24 lil-font-bold sm:lil-hidden">For Enterprises</p>
			<h1 class="lg:lil-text-s-56 hero-header">Financial transformation for <br class="sm:lil-hidden"/>Indian enterprises</h1>
			<p class="lil-w-2/3 sm:lil-w-full lil-mt-6">Taking 3500+ Indian enterprises into the world of real-time compliance, vendor management and credit</p>
			<div class="lil-pt-6 lil-mt-4 lil-flex lil-flex-wrap sm:lil-mt-0 sm:lil-pt-8">
				<a onclick="handleTrack({label: 'hero_button', obj: this})" class="lil-btn lil-btn-blue sm:lil-w-full sm:lil-mt-0" href="contactSales.php" target="_blank">
				Request a demo
				</a>
			</div>
		</div>
		<div class="lil-w-1/2 md:lil-w-full sm:lil-w-full">
			<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606738274_hero_enterprise.png"
				class="lil-block lil-mx-auto xl:lil-hidden lg:lil-hidden md:lil-hidden"/>
			<video width="100%" height="auto" autoplay muted loop class="lil-block lil-mx-auto sm:lil-hidden">
				<source src="https://assets1.cleartax-cdn.com/cleartax/images/1614922489_stack_102.mp4" type="video/mp4">
				Your browser does not support HTML video.
			</video>
		</div>
	</section>
</div>
<!-- product cards -->
<div class="lil-container sm:lil-hidden">
	<section
		class="lil-flex lil-items-center hero-section lil-py-20 md:lil-pt-6 md:lil-items-start md:lil-flex-col-reverse sm:lil-pb-0 sm:lil-flex-col-reverse">
		<div class="lil-flex lil-flex-wrap md:lil-mt-10  sm:lil-mt-10 lil-w-1/2 md:lil-w-full sm:lil-w-full">
			
			<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
				<div>
					<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
						<span class="productIcon">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646218648_cleargst.png" alt=GST software>
						</span> 
						<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">GST software</h5>
					</div>
					<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">G1-G9 filing, ASP/GSP solution</p>
				</div>
				<a class="lil-mt-6 lil-btn-link sm:lil-hidden lil-cursor-pointer" target="_blank" href="https://cleartax.in/gst?ref=/s/v2/enterprise/">
					Know more →
				</a>
			</div>
			
			<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
				<div>
					<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
						<span class="productIcon">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646219057_cleareinvoicing.png" alt=E-Invoicing>
						</span> 
						<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">E-Invoicing</h5>
					</div>
					<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">Bulk invoicing in any Tally or ERP</p>
				</div>
				<a class="lil-mt-6 lil-btn-link sm:lil-hidden lil-cursor-pointer" target="_blank" href="https://cleartax.in/s/e-invoicing-enterprise-software?ref=/s/v2/enterprise/">
					Know more →
				</a>
			</div>
			
			<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
				<div>
					<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
						<span class="productIcon">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646219106_100itc.png" alt=MaxITC>
						</span> 
						<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">MaxITC</h5>
					</div>
					<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">Unblock working capital through 100% ITC claims</p>
				</div>
				<a class="lil-mt-6 lil-btn-link sm:lil-hidden lil-cursor-pointer" target="_blank" href="https://cleartax.in/s/max-itc?ref=/s/v2/enterprise/">
					Know more →
				</a>
			</div>
			
			<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
				<div>
					<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
						<span class="productIcon">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646219112_cleartdr.png" alt=TDS>
						</span> 
						<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">TDS</h5>
					</div>
					<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">e-TDS return filing solution</p>
				</div>
				<a class="lil-mt-6 lil-btn-link sm:lil-hidden lil-cursor-pointer" target="_blank" href="https://cleartax.in/tds?ref=/s/v2/enterprise/">
					Know more →
				</a>
			</div>
			
		</div>
		<div class="lil-w-1/2 lil-pl-8 sm:lil-p-0 md:lil-pl-0 md:lil-w-full sm:lil-w-full">
			<h1 class="lg:lil-text-s-56 hero-header">Compliance stack for max savings</h1>
			<p class="sm:lil-w-full lil-mt-6">Enterprise grade products with industry-leading tools for automation and tax savings</p>
			<div class="lil-pt-6 lil-mt-4 lil-flex lil-flex-wrap sm:lil-mt-0 sm:lil-pt-8 sm:lil-hidden">
				<a onclick="handleTrack({label: 'hero_button', obj: this})" class="lil-btn lil-btn-blue sm:lil-w-full sm:lil-mt-0" href="contactSales.php" target="_blank">
				Request a demo
				</a>
			</div>
		</div>
	</section>
</div>
<section
		class="xl:lil-hidden md:lil-hidden lil-flex lil-items-center hero-section lil-py-20 md:lil-pt-6 md:lil-items-start md:lil-flex-col-reverse sm:lil-pb-0 sm:lil-flex-col-reverse">
		<div class="lil-flex lil-flex-wrap md:lil-mt-10 lil-px-2 sm:lil-mt-10 lil-w-1/2 md:lil-w-full sm:lil-w-full">
			
			<a target="_blank" href="https://cleartax.in/gst?ref=/s/v2/enterprise/">
				<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
					<div>
						<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
							<span class="productIcon">
								<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646218648_cleargst.png" alt=GST software>
							</span> 
							<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">GST software</h5>
						</div>
						<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">G1-G9 filing, ASP/GSP solution</p>
					</div>
					<a class="lil-mt-4 lil-btn-link lil-text-s-14 lil-cursor-pointer" target="_blank" href="https://cleartax.in/gst?ref=/s/v2/enterprise/">
						Know more →
					</a>
				</div>
			</a>
			
			<a target="_blank" href="https://cleartax.in/s/e-invoicing-enterprise-software?ref=/s/v2/enterprise/">
				<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
					<div>
						<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
							<span class="productIcon">
								<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646219057_cleareinvoicing.png" alt=E-Invoicing>
							</span> 
							<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">E-Invoicing</h5>
						</div>
						<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">Bulk invoicing in any Tally or ERP</p>
					</div>
					<a class="lil-mt-4 lil-btn-link lil-text-s-14 lil-cursor-pointer" target="_blank" href="https://cleartax.in/s/e-invoicing-enterprise-software?ref=/s/v2/enterprise/">
						Know more →
					</a>
				</div>
			</a>
			
			<a target="_blank" href="https://cleartax.in/s/max-itc?ref=/s/v2/enterprise/">
				<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
					<div>
						<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
							<span class="productIcon">
								<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646219106_100itc.png" alt=MaxITC>
							</span> 
							<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">MaxITC</h5>
						</div>
						<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">Unblock working capital through 100% ITC claims</p>
					</div>
					<a class="lil-mt-4 lil-btn-link lil-text-s-14 lil-cursor-pointer" target="_blank" href="https://cleartax.in/s/max-itc?ref=/s/v2/enterprise/">
						Know more →
					</a>
				</div>
			</a>
			
			<a target="_blank" href="https://cleartax.in/tds?ref=/s/v2/enterprise/">
				<div class="productCards lil-flex lil-flex-col lil-justify-between lil-shadow-xl lil-rounded-xl lil-p-6 sm:lil-p-4">
					<div>
						<div class="lil-flex lil-items-center sm:lil-flex-col sm:lil-items-start">
							<span class="productIcon">
								<img src="https://assets1.cleartax-cdn.com/cleartax/images/1646219112_cleartdr.png" alt=TDS>
							</span> 
							<h5 class="lil-text-s-24 sm:lil-text-s-14 lil-ml-2 sm:lil-ml-0">TDS</h5>
						</div>
						<p class="lil-mt-4 lil-text-s-20 sm:lil-text-s-14">e-TDS return filing solution</p>
					</div>
					<a class="lil-mt-4 lil-btn-link lil-text-s-14 lil-cursor-pointer" target="_blank" href="https://cleartax.in/tds?ref=/s/v2/enterprise/">
						Know more →
					</a>
				</div>
			</a>
			
		</div>
		<div class="lil-w-1/2 lil-pl-8 sm:lil-p-0 md:lil-pl-0 md:lil-w-full sm:lil-w-full sm:lil-px-4">
			<h1 class="lg:lil-text-s-56 hero-header">Compliance stack for max savings</h1>
			<p class="sm:lil-w-full lil-mt-6">Enterprise grade products with industry-leading tools for automation and tax savings</p>
			<div class="lil-pt-6 lil-mt-4 lil-flex lil-flex-wrap sm:lil-mt-0 sm:lil-pt-8 sm:lil-hidden">
				<a onclick="handleTrack({label: 'hero_button', obj: this})" class="lil-btn lil-btn-blue sm:lil-w-full sm:lil-mt-0" href="contactSales.php" target="_blank">
				Request a demo
				</a>
			</div>
		</div>
</section>


	<!--Section 5-->
	<div class="lil-container">
		<section class="lil-pt-24 lil-pb-10 sm:lil-py-0">
			<div class="lil-text-center sm:lil-text-left">
				<h2>Explore the enterprise stack</h2>
				<p class="lil-pt-6 lil-px-20 sm:lil-px-0 sm:lil-pt-4">
					Our product suite covers the entire value chain from your vendors to your organization and
					your customers, from core tax platform such as GST to network needs such as e-Invoicing
				</p>
			</div>
			<div class="lil-mt-24 sm:lil-mt-12" id="product-ecosystem-tab">
				<ul
					class="lil-w-full lil-h-12 lil-capsule-tabs lil-tab-cta-list lil-text-s-24 lil-text-font-200 md:lil-text-s-20 sm:lil-text-base">
					<li class="lil-w-1/3 lil-capsule-tab lil-justify-center lil-capsule-tab-active lil-tab-cta">
						<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606825841_organization.svg" width="32"
							class="lil-mr-3 sm:lil-mr-1" />
						Your Organization
					</li>
					<li class="lil-w-1/3 lil-capsule-tab lil-justify-center lil-tab-cta">
						<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606825832_vendor.svg" width="32"
							class="lil-mr-3 sm:lil-mr-1" />
						Your Vendor
					</li>
					<li class="lil-w-1/3 lil-capsule-tab lil-justify-center lil-tab-cta">
						<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606825849_customer.svg" width="32"
							class="lil-mr-3 sm:lil-mr-1" />
						Your Customers
					</li>
				</ul>
				<div class="lil-py-16 sm:lil-py-10">
					
					
					<div class="lil-capsule-tab-content">
						
							<div id="org-ecosystem-tab" class="lil-flex sm:lil-flex-wrap">
								<div class="promise-segment-tabs lil-w-1/3 lil-pr-10 sm:lil-hidden">
									<ul
										class="lil-tab-cta-list lil-vertical-promise-tabs lil-h-full xl:lil-justify-between lg:lil-justify-between md:lil-justify-between">
										
										
										<li class="lil-promise-tab lil-promise-tab-active lil-tab-cta">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Core GST filing</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">GST data pulls</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Advanced reconciliation</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Smart reporting</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Airline travel credit</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">CFO dashboard</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Managed services</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Billing </h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">TDS</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Employee ITR</h6>
											</a>
										</li>
										
									</ul>
								</div>
								<div class="lil-w-3/4 lil-flex sm:lil-flex-col sm:lil-w-full">
									
									
									<div
										class="verticalPromiseTabsContent lil-flex lil-flex-wrap lil-mb-auto lil-pt-24 sm:lil-pl-0 sm:lil-pt-0">
										
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Core GST filing</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													From data import to filing and challan payment, 3x faster experience, 100% accuracy on all return types.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Core GST filing', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805613_desktop_fold_completeecosystem_tabs_yourorganisation_gstfiling.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GSTR 1 and 3B, 9</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Best in class 9/9C</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GSTIN and PAN level</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GSTR-6, 7, 8 and ITC-04</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Export-import refunds</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">GST data pulls</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Pull 2 year invoice history from GSTN for a GSTIN or a PAN in seconds with multi-month 2A reports.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_GST data pulls', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805482_desktop_fold_completeecosystem_tabs_yourorganisation_gstdatapulls.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Multi-month 2A</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GSTR1, 3B, 9C</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GSTIN and PAN level</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Pull entire history</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">99.99% uptime</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Advanced reconciliation</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Experience the most powerful AI powered invoice reconciliation engine with 5x speed at 6,000 invoice per sec.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Advanced reconciliation', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805894_cleartaxcloud1.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">2A vs purchase register</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">G8 vs purchase register</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Vendor-wise matching</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GSTIN and PAN level</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">e-Invoicing integrated</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">e-Way Bill integrated</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Smart reporting</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Comparison, summary, ledger reports to share insights among teams and claim 100% ITC across all GSTINs.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Smart reporting', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805695_desktop_fold_completeecosystem_tabs_yourorganisation_smartreports.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">G1, G3B filing status</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Comparison : 3B vs 2A</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Comparison : GSTR 1 vs 3B</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Supplier compliance</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Ledger balance</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Sales-purchase-stock report</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Airline travel credit</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													10x faster discovery of unclaimed air travel tax credits replacing cumbersome reconciliation of airline invoices.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Airline travel credit', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805292_desktop_fold_completeecosystem_tabs_yourorganisation_airlinetravelcredit.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">RPA fetched invoices</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Integrated GST recon</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Auto-prepare inwards register</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">CFO dashboard</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Get compliance overview with sales, purchases, tax outflow, credits and vendor risk summarized for CFO office.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_CFO dashboard', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805303_desktop_fold_completeecosystem_tabs_yourorganisation_cfodashboard.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Sales-purchase view</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Tax outflow, credit view</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">PAN summary</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GST health check</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Vendor compliance</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Vendor risk</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Managed services</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Outsource tax filing and compliance end to end with core and custom services on indirect and direct taxation.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Managed services', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805991_managedservices.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Indirect Tax - Core</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Indirect Tax - Custom</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Direct Tax</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Billing </h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Invoicing solution that helps your vendors create professional invoices, manage inventory and track payments.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Billing ', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805623_desktop_fold_completeecosystem_tabs_yourorganisation_invoicing.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">GST compliant invoicing</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Inventory management</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Payment tracking</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">TDS</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													India's leading e-TDS return preparation and TDS e-filing platform that prepares FVUs and Form 16s seamlessly.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_TDS', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805773_desktop_fold_completeecosystem_tabs_yourorganisation_tds.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Bulk PAN verification</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Unconsumed challan detection</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Form 16 management</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Employee ITR</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Let your entire employee base file any ITRs in under 7 min with drag and drop of Form 16s and few checks.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Employee ITR', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606805688_desktop_fold_completeecosystem_tabs_yourorganisation_itr.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Any ITR filing</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Form 16 integrations</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Dedicated support</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
					
						<div class="lil-capsule-tab-content lil-hidden">
							
							<div id="customer-ecosystem-tab" class="lil-flex sm:lil-flex-wrap">
								<div class="promise-segment-tabs lil-w-1/3 lil-pr-10 sm:lil-hidden">
									<ul
										class="lil-tab-cta-list lil-vertical-promise-tabs lil-h-full xl:lil-justify-between lg:lil-justify-between md:lil-justify-between">
										
										
										<li class="lil-promise-tab lil-promise-tab-active lil-tab-cta">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Vendor KYC</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Vendor communication</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">Vendor financing</h6>
											</a>
										</li>
										
									</ul>
								</div>
								<div class="lil-w-3/4 lil-flex sm:lil-flex-col sm:lil-w-full">
									
									
									<div
										class="verticalPromiseTabsContent lil-flex lil-flex-wrap lil-mb-auto lil-pt-24 sm:lil-pl-0 sm:lil-pt-0">
										
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Vendor KYC</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Validate vendor GSTINs upto 5,000 at a time and onboard selectively maintaining vendor masters with ratings.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Vendor KYC', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606807989_vendorkyc.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">KYC and onboarding</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Bulk validation</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Rate vendors</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Fetch MSME tags</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">2-way ERP integration</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Vendor communication</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Draft custom emails, even in bulk to vendors apprising them of missing or incorrect invoices and claim 100% ITC.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Vendor communication', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606808041_vendor_com.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Custom emails</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Attach reconciliation status</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Send reminders</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Get compliance reports</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Update ratings</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">Vendor financing</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													Help your vendors grow while maintaining your credit terms with a collateral free loan product to pay GST later.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_Vendor financing', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606808103_vendor_fin.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Pay GST later</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Starting at 1% per month</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Collateral free</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
					
						<div class="lil-capsule-tab-content lil-hidden">
							
							<div id="vendor-ecosystem-tab" class="lil-flex sm:lil-flex-wrap">
								<div class="promise-segment-tabs lil-w-1/3 lil-pr-10 sm:lil-hidden">
									<ul
										class="lil-tab-cta-list lil-vertical-promise-tabs lil-h-full xl:lil-justify-between lg:lil-justify-between md:lil-justify-between">
										
										
										<li class="lil-promise-tab lil-promise-tab-active lil-tab-cta">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">e-Invoicing</h6>
											</a>
										</li>
										
										
										<li class="lil-promise-tab lil-tab-cta lil-mt-4">
											
											<a
												class="lil-text-center lil-w-full lil-flex lil-justify-center lil-items-center">
												<h6 class="lil-text-s-20">e-Waybills</h6>
											</a>
										</li>
										
									</ul>
								</div>
								<div class="lil-w-3/4 lil-flex sm:lil-flex-col sm:lil-w-full">
									
									
									<div
										class="verticalPromiseTabsContent lil-flex lil-flex-wrap lil-mb-auto lil-pt-24 sm:lil-pl-0 sm:lil-pt-0">
										
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">e-Invoicing</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													India's second largest e-Invoice generator that is fast, dependable and affordable, integrated with GST platform.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_e-Invoicing', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606806735_einvoicing_ent.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">2-way ERP integrated</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Create, cancel, print</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Custom templates</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Scheduling and automation</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Notifications and alerts</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Inwards e-Invoice inbox</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									
										<div
											class="verticalPromiseTabsContent lil-hidden lil-mb-auto lil-pt-24 lil-flex lil-flex-wrap sm:lil-pt-6 sm:lil-pl-0 sm:lil-block sm:lil-mt-6">
											
											<div class="lil-w-7/12 lil-pr-8 md:lil-px-8 sm:lil-px-0 sm:lil-w-full">
												<h4 class="sm:lil-text-s-24">e-Waybills</h4>
												<p class="lil-pt-6 lil-pb-4 sm:lil-py-2">
													India's second large e-Invoice generator that is fast, dependable and affordable, integrated with GST platform.
												</p>
												<a onclick="handleTrack({label: 'fold_explore_enterprise_stack_button_e-Waybills', obj: this})" href="contactSales.php" target="_blank" class="lil-btn lil-btn-blue-outline lil-cursor-pointer">Request a demo</a>
											</div>
											<div class="lil-w-5/12 sm:lil-w-full sm:lil-py-3">
												<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606806648_ewaybill.png">
											</div>
											<div class="lil-w-full lil-flex lil-flex-wrap lil-pt-10 sm:lil-pt-0">
												<div class="lil-flex lil-flex-wrap lil-w-full">
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">2-way ERP integrated</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Multi-vehicle EWBs</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Scheduling and automation</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Fraud and outlier detection</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Branch-level access control</span>
														</div>
													</div>
													
													<div class="lil-w-1/3 lil-flex lil-mt-6 sm:lil-w-full">
														<div class="lil-w-1/6">
															<div
																class="lil-tick-wrapper lil-border-blue-350">
																<div class="lil-tick lil-border-blue-350"></div>
															</div>
														</div>
														<div class="lil-w-5/6 lil-pr-2">
															<span
																class="lil-text-base lil-font-semibold lil-text-font-500">Integrations with DSC</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
		</section>
	</div>
<section class="lil-container servicesFold lil-text-center lil-py-32 sm:lil-py-20">
	<h2>Looking for expert services?</h2>
	<div class="lil-mt-6">
		<p>In addition to providing software services, we also offer expert services to help you manage your business and legal compliances. </p>
		<div class="lil-flex lil-flex-wrap lil-mt-0">
			
				<div class="serviceCard lil-w-1/3 md:lil-w-1/2 sm:lil-w-full lil-flex lil-items-start lil-text-left lil-text-left lil-mt-12">
					<img src=https://assets1.cleartax-cdn.com/cleartax/images/1646281916_group17741.png width="44px" alt="" />
					<div class="lil-ml-2">
						<h5 class="lil-mt-auto lil-text-s-18">Company incorporation</h5>
						<p class="lil-text-s-14 lil-mt-2 lil-w-10/12">Expert assistance on how and which business structure to select.</p>
					</div>
				</div>
			
				<div class="serviceCard lil-w-1/3 md:lil-w-1/2 sm:lil-w-full lil-flex lil-items-start lil-text-left lil-text-left lil-mt-12">
					<img src=https://assets1.cleartax-cdn.com/cleartax/images/1646281898_cleargst.png width="44px" alt="" />
					<div class="lil-ml-2">
						<h5 class="lil-mt-auto lil-text-s-18">GST registration services</h5>
						<p class="lil-text-s-14 lil-mt-2 lil-w-10/12">GST services in Registration, Compliance review, cancellation etc.</p>
					</div>
				</div>
			
				<div class="serviceCard lil-w-1/3 md:lil-w-1/2 sm:lil-w-full lil-flex lil-items-start lil-text-left lil-text-left lil-mt-12">
					<img src=https://assets1.cleartax-cdn.com/cleartax/images/1646281927_group18140925.png width="44px" alt="" />
					<div class="lil-ml-2">
						<h5 class="lil-mt-auto lil-text-s-18">Legal compliance</h5>
						<p class="lil-text-s-14 lil-mt-2 lil-w-10/12">Legal drafting, documentation review, change in company name etc.</p>
					</div>
				</div>
			
				<div class="serviceCard lil-w-1/3 md:lil-w-1/2 sm:lil-w-full lil-flex lil-items-start lil-text-left lil-text-left lil-mt-12">
					<img src=https://assets1.cleartax-cdn.com/cleartax/images/1646281910_group17652.png width="44px" alt="" />
					<div class="lil-ml-2">
						<h5 class="lil-mt-auto lil-text-s-18">Launch and run a startup</h5>
						<p class="lil-text-s-14 lil-mt-2 lil-w-10/12">Legal drafting, documentation review, change in company name etc.</p>
					</div>
				</div>
			
				<div class="serviceCard lil-w-1/3 md:lil-w-1/2 sm:lil-w-full lil-flex lil-items-start lil-text-left lil-text-left lil-mt-12">
					<img src=https://assets1.cleartax-cdn.com/cleartax/images/1646281932_incometaxreturns.png width="44px" alt="" />
					<div class="lil-ml-2">
						<h5 class="lil-mt-auto lil-text-s-18">Government registrations</h5>
						<p class="lil-text-s-14 lil-mt-2 lil-w-10/12">Registration for Shop licence, PF, PAN, FSSAI and more</p>
					</div>
				</div>
			
				<div class="serviceCard lil-w-1/3 md:lil-w-1/2 sm:lil-w-full lil-flex lil-items-start lil-text-left lil-text-left lil-mt-12">
					<img src=https://assets1.cleartax-cdn.com/cleartax/images/1646281921_group18140924.png width="44px" alt="" />
					<div class="lil-ml-2">
						<h5 class="lil-mt-auto lil-text-s-18">Trademark & digital signature</h5>
						<p class="lil-text-s-14 lil-mt-2 lil-w-10/12">Trademark registrations and renewals; Digital signature certificate</p>
					</div>
				</div>
				
		</div>
		<p class="lil-text-s-14 lil-text-center lil-mt-20">To explore all such services, check out our expert services page</p>
		<a href="./services.php" class="lil-btn lil-btn-blue lil-mt-6">Explore services</a>
	</div>
</section>

<section class="lil-pt-32 lil-pb-10 lil-container sm:lil-pt-8">
	<h2 class="lil-w-4/6 sm:lil-w-full">
		Complete ecosystem of enterprise grade products
	</h2>
	<img class="lil-mt-16" src="https://assets1.cleartax-cdn.com/cleartax/images/1606737945_enterprise_fold12.png"
		width="100%">
	<!--<img class="lil-w-full lil-mt-10 xl:lil-hidden lg:lil-hidden md:lil-hidden" src="https://assets1.cleartax-cdn.com/cleartax/images/1606886401_organization.png"> -->
</section>


<div class="lil-container">
	<!--Section 4-->
	<section class="lil-mt-32 lil-pb-5 sm:lil-mt-8">
		<div class="lil-flex">
			<div class="lil-w-8/12 lil-pt-20 sm:lil-w-full sm:lil-pt-0">
				<h2>
					Right partners for <br /> good reasons
				</h2>
			</div>
			<div class="lil-w-4/12 sm:lil-hidden">
				<img width="400" height="400"
					src="https://assets1.cleartax-cdn.com/cleartax/images/1606825287_rightpartners.png" />
			</div>
		</div>
		<!-- Promises -->
		<div class="lil-w-full lil-flex lil-flex-wrap lil-mt-10 sm:lil-mt-2">
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10"
							src="https://assets1.cleartax-cdn.com/cleartax/images/1606825477_lessmanhours.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h5 class="sm:lil-text-s-24">Upto 7% <br />
							tax savings</h5>
						<p class="lil-mt-5 sm:lil-mt-4">
							Improve your cash-flow and costs with
							our AI powered reconciliation engine.
							It identifies almost every unused input tax credit for all GSTINs under a PAN.
						</p>
					</div>
				</div>
			</div>
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10"
							src="https://assets1.cleartax-cdn.com/cleartax/images/1606825457_5xfaster.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h5 class="sm:lil-text-s-24">Upto 10x
							faster experience</h5>
						<p class="lil-mt-5 sm:lil-mt-4">
							Save man-hours at every step of filing-
							import, preparation, validatation, filing and
							analysis. Automate data import from
							100+ ERPs through integration.
						</p>
					</div>
				</div>
			</div>
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10"
							src="https://assets1.cleartax-cdn.com/cleartax/images/1606825487_zerocompliance.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h5 class="sm:lil-text-s-24">Zero <br />
							compliance risk</h5>
						<p class="lil-mt-5 sm:lil-mt-4">
							Designed and tested by 80k+ in-house
							tax experts, our product stack is accurate
							and up-to-date with over the air changes unlike on-premise software.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="lil-pt-24">
        <div class="lil-flex lil-items-center sm:lil-flex-wrap lil-rounded-lg lil-bg-blue-350 sm:lil-py-6">
    <div class="lil-px-4 lil-py-4 sm:lil-py-0 sm:lil-w-full">
        <img class="lil-h-6" src="https://assets1.cleartax-cdn.com/cleartax/images/1655102270_sapcerti_int_sapnetw_w_r_neg11.svg" alt="sap" height="55" width="100">
    </div>
    <div class="lil-text-white lil-pr-2 sm:lil-pt-4 lil-py-2 sm:lil-pl-4 sm:lil-w-full">
        <div class="lil-border-l-sm lil-border-white lil-py-2 lil-pl-6 sm:lil-pl-0 sm:lil-border-none" style="font-size: 15px;">
            Seamlessly integrate SAP ERPs with Clear’s GST, E-Invoicing, E-WayBill, MaxITC, meeting all recommended requirements recommended by SAP.
        </div>
    </div>
</div>
    </div>
	<!--Section 5-->
	<section class="lil-mt-32 lil-pb-10 sm:lil-pb-0">
		<div class="lil-text-center sm:lil-text-left">
			<h2>
				We integrate with every <br />
				ERP out there. Big and small.
			</h2>
			<p class="lil-mt-6 lil-w-4/6 lil-mx-auto sm:lil-w-full">
				We have completed over 500 integrations with large businesses for <a href="https://cleartax.in/gst" class="lil-underline">GST</a>, <a
					href="https://cleartax.in/s/e-invoicing-enterprise-software" class="lil-underline">e-Invoicing</a> and <a href="https://cleartax.in/s/gst-eway-bill-software" class="lil-underline">e-Waybills</a>. Our capability
				spans SAP S4 HANA/ECC, Oracle Netsuite, MS Navision/Dynamic, Tally and other ERPs.
			</p>
			<a onclick="handleTrack({label: 'fold_we_integrate_with_every_erp_button', obj: this})" href="contactSales.php" target="_blank" class="lil-mt-4 lil-btn lil-btn-link lil-px-0 lil-cursor-pointer">Let us talk<span
					class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></a>
		</div>

	</section>
	<section class="lil-mt-32 lil-pb-24 sm:lil-pb-0">
		<div class="lil-flex sm:lil-flex-wrap">
			<div class="lil-w-1/3 sm:lil-w-full">
				<h2>
					Flexible error free, data import modes
				</h2>
				<p class="lil-mt-6 sm:lil-mt-4">
					Bring in your data securely via <a
						href="https://meet.google.com/linkredirect?authuser=0&dest=https%3A%2F%2Fdocs.cleartax.in%2Fcleartax-for-developers%2F"
						target="_blank" class="lil-underline">APIs</a> or SFTP or Templates.- we give you every option
					to connect easily.
				</p>
				<a onclick="handleTrack({label: 'fold_flexible_error_free_data_import_button', obj: this})" href="contactSales.php" target="_blank" class="lil-mt-4 lil-btn lil-btn-link lil-pl-0 lil-cursor-pointer sm:lil-hidden">Get a free demo<span
						class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></a>
			</div>
			<div
				class="lil-w-2/3 lil-border-grey-250 lil-border-sm lil-rounded-xl lil-p-6 lil-ml-16 sm:lil-w-full sm:lil-ml-0 sm:lil-mt-10 sm:lil-border-none sm:lil-p-0">
				<div id="flexible-ingest-tab" class="sm:lil-flex sm:lil-overflow-auto">
					<ul
						class="lil-w-2/3 lil-h-10 lil-capsule-tabs lil-tab-cta-list lil-text-font-200 md:lil-w-full sm:lil-hidden">
						<li
							class="lil-w-1/3 lil-capsule-tab lil-justify-center lil-capsule-tab-active lil-text-base lil-tab-cta">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606826365_icon.svg" width="15"
								class="lil-mr-1" />
							API
						</li>
						<li class="lil-w-1/3 lil-capsule-tab lil-justify-center lil-text-base lil-tab-cta">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606826460_sftp.svg" width="15"
								class="lil-mr-1" />
							SFTP
						</li>
						<li class="lil-w-1/3 lil-capsule-tab lil-justify-center lil-text-base lil-tab-cta">
							<img src="https://assets1.cleartax-cdn.com/cleartax/images/1606826483_templates.svg"
								width="15" class="lil-mr-1" />
							Templates
						</li>
					</ul>
					<div id="ingestionSlick" class="lil-flex lil-mt-6 lil-w-full sm:lil-overflow-auto">
						<div class="lil-capsule-tab-content lil-outline-none sm:lil-w-full">
							<div class="lil-text-font-500 lil-font-bold lil-text-s-20 lil-pb-6 xl:lil-hidden lg:lil-hidden md:lil-hidden">API</div>
							<img height="480" src="https://assets1.cleartax-cdn.com/cleartax/images/1606814082_api.png"
								class="lil-w-full" />
							<div class="lil-h-8 sm:lil-hidden"></div>
						</div>
						<div class="lil-capsule-tab-content lil-hidden lil-outline-none sm:lil-w-full sm:lil-block sm:lil-visible">
							<div class="lil-text-font-500 lil-font-bold lil-text-s-20 lil-pb-6 lil-pl-4 xl:lil-hidden lg:lil-hidden md:lil-hidden">SFTP</div>
							<img height="480" src="https://assets1.cleartax-cdn.com/cleartax/images/1606814099_sftp.png"
								class="lil-w-full" />
							<div class="lil-h-3 sm:lil-hidden"></div>
						</div>
						<div class="lil-capsule-tab-content lil-hidden lil-outline-none sm:lil-w-full sm:lil-block m:lil-visible">
							<div class="lil-text-font-500 lil-font-bold lil-text-s-20 lil-pb-6 lil-pl-4 xl:lil-hidden lg:lil-hidden md:lil-hidden">Templates</div>
							<img height="480" src="https://assets1.cleartax-cdn.com/cleartax/images/1606814115_templates.png"
								class="lil-w-full" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="lil-mt-32 lil-pb-10 sm:lil-pb-0">
		<div class="lil-flex lil-flex-wrap">
			<div class="lil-w-7/12 sm:lil-w-full">
				<h2>
					Bank-grade <br />enterprise security
				</h2>
				<p class="lil-mt-6">
					Primarily we are a GST Suvidha Provider or GSP.
					We were awarded a GSP license after rigorous scrutiny of our technological and financial
					capabilities to serve our clients. A GSP connects directly with the GST system via secure GST System
					APIs. With this, we are able to cater to the needs of the customers much better than a standalone
					ASP.

				</p>
				<a onclick="handleTrack({label: 'fold_bank_grade_security_button', obj: this})" href="https://cleartax.in/s/contact-sales?pageCategoryType=gst&form=business&ref=/s/v2/enterprise/" target="_blank" class="lil-mt-4 lil-btn lil-btn-link lil-pl-0 lil-cursor-pointer sm:lil-hidden" >
					Contact sales<span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span>
				</a>
			</div>
			<div class="lil-w-5/12 sm:lil-hidden">
				<img class="lil-float-right" width="340" height="340"
					src="https://assets1.cleartax-cdn.com/cleartax/images/1606815354_gsp_ent.png" />
			</div>
		</div>
		<div class="lil-w-full lil-flex lil-flex-wrap lil-mt-10 sm:lil-mt-2">
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606110290_encryption.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">SSL encryption</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							We are 128-bit SSL certified which means your data reaches our servers safely.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606308817_privacyaware.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">ISO 27001 data storage</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							AWS services with quarterly VAPT and external audits to check controls with completely secure access to VPC.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606817014_certificate.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">SOC 2 certified</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							We ensure security, availability, confidentiality and privacy of your data.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606817871_fullaudittrails.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">Branch-level controls</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							For e-waybills and e-invoicing you can provide access control to product at regional office levels.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606817933_certificate.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">2-factor authentication</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							Additional layer of protection to give your user accounts more security against vulnerability.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606818015_authentication.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">User access management</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							Grant specific access rights to specific set of users, manage these rights centrally.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606817428_dataarchival.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">Data archival, retrieval</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							You can archive and access all your data any time, in line with government regulations.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606817383_fullaudittrails1.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">Full audit trails</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							Upto 8 year audit trails for your data, filings and any change made to the same.
						</p>
					</div>
				</div>
			</div>
			
			<div class="lil-w-1/3 sm:lil-w-full">
				<div class="lil-promise-horizontal">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12 sm:lil-h-10" src="https://assets1.cleartax-cdn.com/cleartax/images/1606817547_ipwhitelist.svg" />
					</div>
					<div class="lil-promise-content sm:lil-pt-6">
						<h6 class="sm:lil-text-s-24">IP-whitelisting</h6>
						<p class="lil-mt-5 lil-pr-4 sm:lil-mt-4">
							We empower you with ability to provide a range of IP addresses to permit or block account activity.
						</p>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<section class="lil-mt-32">
		<div>
			<h2>Unmatched, 99.99% uptime</h2>
			<p class="lil-mt-6 lil-w-4/5 sm:lil-mt-4">
				We ensure business continuity with unparalleled reliability. We provide web portal backup and 99.99% uptime using our multiple redundancy tech architecture. We have spare GSP calls on-tap and can connect with all NIC-like Invoice Registration Portals (IRPs).
			</p>
			<a onclick="handleTrack({label: 'fold_unmatched_99.99_uptime_button', obj: this})" href="./contactSales.php" target="_blank" class="lil-mt-4 lil-btn lil-btn-link lil-pl-0 lil-cursor-pointer sm:lil-hidden">Contact sales<span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></a>
		</div>
		<div class="lil-flex lil-flex-wrap lil-mt-16 sm:lil-flex-col-reverse sm:lil-mt-6">
			<div class="lil-w-1/3 md:lil-w-2/3 sm:lil-w-full sm:lil-mt-6">
				<div class="lil-flex lil-items-center lil-pt-10 lil-w-full sm:lil-pt-6">
					<div class="lil-w-1/6 xl:lil-w-1/12"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1606818564_multiplegsp.svg"
							width="40" /></div>
					<div class="lil-px-6 lil-w-5/6 sm:lil-px-0">
						<p class="lil-text-font-500">Multiple GSP Backups connecting 2000+ enterprises</p>
					</div>
				</div>
				<div class="lil-flex lil-pt-10 lil-items-center lil-w-full sm:lil-pt-6">
					<div class="lil-w-1/6 xl:lil-w-1/12"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1606818503_multipleredundancies.svg"
							width="40" /></div>
					<div class="lil-px-6 lil-w-5/6 sm:lil-px-0">
						<p class="lil-text-font-500">Multiple redundancies on account of ASP/GSP license</p>
					</div>
				</div>
				<div class="lil-flex lil-pt-10 lil-w-full lil-items-center sm:lil-pt-6">
					<div class="lil-w-1/6 xl:lil-w-1/12"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1606818468_zerodowntime1.svg"
							width="40" /></div>
					<div class="lil-px-6 lil-w-5/6 sm:lil-px-0">
						<p class="lil-text-font-500">Zero downtime with undisrupted e-invoicing</p>
					</div>
				</div>
			</div>
			<div class="lil-w-2/3 md:lil-w-full md:lil-mt-4 sm:lil-w-full">
				<img class="xl:lil-hidden lg:lil-hidden md:lil-hidden" src="https://assets1.cleartax-cdn.com/cleartax/images/1606818659_99.99uptime.png" />
				<video width="100%" height="auto" autoplay muted loop class="lil-block lil-mx-auto sm:lil-hidden">
					<source src="https://assets1.cleartax-cdn.com/cleartax/images/1608283275_99.9reliability.mp4" type="video/mp4">
					Your browser does not support HTML video.
				</video>
			</div>
		</div>
	</section>
	
	<section class="lil-mt-32 lil-pb-24 sm:lil-py-0">

		<div class="lil-flex lil-pt-24 sm:lil-pt-0 sm:lil-flex-wrap">
			<div class="lil-w-1/2 md:lil-w-full sm:lil-w-full">
				<h2><span class="lil-text-blue-350">360°</span><br />
					support </h2>
				<div class="lil-flex lil-pt-6 lil-items-center sm:lil-items-start">
					<p class=" sm:lil-w-5/6 lil-w-9/12">With a team of 50 ex-Big 4 CAs to advise you as required, we are
						focused on giving you support whenever you need it.</p>
				</div>
				<div class="lil-pt-4 lil-flex lil-flex-wrap">
					<a onclick="handleTrack({label: 'fold_360_support_button', obj: this})" class="lil-mt-4 lil-btn lil-btn-link lil-pl-0 lil-cursor-pointer sm:lil-hidden"
					href="./contactSales.php" target="_blank">Contact sales<span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></a>
				</div>
			</div>
			<div class="lil-w-1/2 md:lil-w-full sm:lil-w-full sm:lil-pt-4">
				<div class="lil-pt-0 lil-p-4 sm:lil-px-0">

					<div class="lil-flex lil-pt-0 lil-w-full">
						<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-1"><img
								src="https://assets1.cleartax-cdn.com/cleartax/images/1606828442_onboarding.svg"
								height="60" width="60" /></div>
						<div class="lil-px-6 lil-w-5/6">
							<p class="lil-text-font-500 lil-font-bold lil-text-lg">Onboarding Managers</p>
							<p class="lil-text-base lil-pt-2">Dedicated onboarding managers to help you get going</p>
						</div>
					</div>
					<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-4 sm:lil-pl-1"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1605952657_arrowdown.svg" height="20"
							width="20" /></div>
					<div class="lil-flex lil-pt-0 lil-w-full">
						<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-1"><img
								src="https://assets1.cleartax-cdn.com/cleartax/images/1606828800_training.svg"
								height="60" width="60" /></div>
						<div class="lil-pl-6 lil-w-5/6">
							<p class="lil-text-font-500 lil-font-bold lil-text-lg">Training</p>
							<p class="lil-text-base lil-pt-2">with hands-on demonstration and hand-holding for team</p>
						</div>
					</div>
					<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-4 sm:lil-pl-1"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1605952657_arrowdown.svg" height="20"
							width="20" /></div>
					<div class="lil-flex lil-pt-0 lil-w-full">
						<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-1"><img
								src="https://assets1.cleartax-cdn.com/cleartax/images/1606828930_accountmanager.svg"
								height="60" width="60" /></div>
						<div class="lil-px-6 lil-w-5/6">
							<p class="lil-text-font-500 lil-font-bold lil-text-lg">Dedicated Key Account Managers</p>
							<p class="lil-text-base lil-pt-2">1 hour issue acknowledgement & 1 day issue resolution</p>
						</div>
					</div>
					<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-4 sm:lil-pl-1"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1605952657_arrowdown.svg" height="20"
							width="20" /></div>
					<div class="lil-flex lil-pt-0 lil-w-full">
						<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-1"><img
								src="https://assets1.cleartax-cdn.com/cleartax/images/1606828837_features.svg"
								height="60" width="60" /></div>
						<div class="lil-px-6 lil-w-5/6">
							<p class="lil-text-font-500 lil-font-bold lil-text-lg">New feature requests</p>
							<p class="lil-text-base lil-pt-2">1 hour issue acknowledgement & 1 day issue resolution</p>
						</div>
					</div>
					<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-4 sm:lil-pl-1"><img
							src="https://assets1.cleartax-cdn.com/cleartax/images/1605952657_arrowdown.svg" height="20"
							width="20" /></div>
					<div class="lil-flex lil-pt-0 lil-w-full">
						<div class="lil-w-1/6 xl:lil-w-1/12 lil-m-1"><img
								src="https://assets1.cleartax-cdn.com/cleartax/images/1606828892_onsitevisit.svg"
								height="60" width="60" /></div>
						<div class="lil-px-6 lil-w-5/6">
							<p class="lil-text-font-500 lil-font-bold lil-text-lg">Onsite visits</p>
							<p class="lil-text-base lil-pt-2">Dedicated onboarding managers to help you get going</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<section class="lil-mt-32 lil-py-10 sm:lil-py-0">
		<div class="lil-text-center sm:lil-text-left">
			<h2>Outsource to managed services</h2>
			<p class="lil-mt-6 lil-w-5/6 lil-mx-auto lil-px-10 sm:lil-w-full sm:lil-px-0">
				ClearTax also provides multiple managed services as per the requirements of the customers with
				end-to-end outsourcing of tax function and compliance needs.
			</p>
		</div>
		<div class="lil-flex lil-flex-wrap lil-mt-24 md:lil-justify-center sm:lil-mt-6">
			<div class="lil-w-1/3 lil-pr-4 md:lil-w-1/2 sm:lil-w-full sm:lil-px-0 sm:lil-mt-2">
				<div class="lil-shadow-xl lil-pl-6 lil-pb-6 sm:lil-flex sm:lil-flex-col sm:lil-items-center">
					<img class="lil-float-right lil-inline-block sm:lil-float-none" width="180"
						src="https://assets1.cleartax-cdn.com/cleartax/images/1606824685_p1.png" />
					<div class="lil-clear-both lil-mt-8 sm:lil-pt-6 sm:lil-mt-0">
						<h6>
							<span class="lil-font-normal">Indirect Tax</span> <br />
							Core compliance
						</h6>
						<ul class="lil-pt-12 lil-pl-4 lil-list-disc sm:lil-pt-10">
							<li>
								<p class="lil-text-font-500">
									Preparation and filing of monthly GST returns (any GSTR) </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Monthly vendor reconciliation with GSTR 2A and purchase </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Preparation and filing of GST annual returns (GSTR 9) </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Filing of quarterly GST refunds on exports (GST-RFD-01) </p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="lil-w-1/3 lil-px-2 md:lil-w-1/2 sm:lil-w-full sm:lil-px-0 sm:lil-mt-2">
				<div class="lil-shadow-xl lil-pl-6 lil-pb-6 sm:lil-flex sm:lil-flex-col sm:lil-items-center">
					<img class="lil-float-right lil-inline-block sm:lil-float-none" width="180"
						src="https://assets1.cleartax-cdn.com/cleartax/images/1606824705_p2.png" />
					<div class="lil-clear-both lil-mt-8">
						<h6>
							<span class="lil-font-normal">Indirect Tax</span> <br />
							Customized services
						</h6>
						<ul class="lil-pt-12 lil-pl-4 lil-list-disc">
							<li>
								<p class="lil-text-font-500">
									Support to auditors while filing
									of GSTR 9C (GST Audit) </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Email advisory with respect to
									multiple GST queries </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Special reconciliations : G6 vs G6A, EWB vs G1, EINV vs G1 </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									GSTIN verification, vendor KYC and onboarding </p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="lil-w-1/3 lil-pl-4 md:lil-w-1/2 md:lil-mt-10 sm:lil-w-full sm:lil-px-0 sm:lil-mt-2">
				<div class="lil-shadow-xl lil-pl-6 lil-pb-6">
					<img class="lil-float-right lil-inline-block" width="180"
						src="https://assets1.cleartax-cdn.com/cleartax/images/1606824714_p3.png" />
					<div class="lil-clear-both lil-mt-8">
						<h6>
							<span class="lil-font-normal">Direct Tax</span> <br />
							Related services
						</h6>
						<ul class="lil-pt-12 lil-pl-4 lil-list-disc">
							<li>
								<p class="lil-text-font-500">
									Filing and preparation of TDS
									returns (24Q/26Q/27Q) </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Form 16 generation with DSC
									related services </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Reconciliation of 26AS and TDS
									receivable, PAN verification </p>
							</li>
							<li class="lil-mt-10">
								<p class="lil-text-font-500">
									Filing and preparation of
									corporate tax return </p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	

<style>
	.results-compaines p{
		overflow: hidden;
    	text-overflow: ellipsis;
		white-space: nowrap;
	}
	.results-compaines p:hover{
		overflow: visible;
		white-space: normal;
	}
</style>

<script>
	window.addEventListener('DOMContentLoaded', ()=>{
		/**
 *                 ****** AUTO COMPLETE *******
 * User can instansiate this functionality by simply calling the autoCompletFn
 * which takes param like
 * @arg {string} inputId - input element id you want to attach the autocomplete to 
 * @arg {string} results -  element id which will get populated with results 
 * @arg {function} callback - function will return the results in an array format to show in dropdown 
 * 
 * @returns {Object} - Object containing @callback getSelectedIndex which itself returns the selected index
 * 
 * 
 * @example autoCompletFn(`inputId`,`resultId`,apiCall).getSelectedIndex(index=>{
			selectedIndex = index
		})
 */

let autocomplete = {
    _inputNode:null,
    _query:"",
    _resultNode:null,
    _dataCb:null,
    selectedIndex:null,

    init:function(inputId,resultNodeId,getDataCb){
        autocomplete._inputNode = document.getElementById(inputId);
        autocomplete._resultNode = document.getElementById(resultNodeId);
        autocomplete._dataCb = getDataCb;
        autocomplete.bindInputChange();
        autocomplete.bindInputClick();

        return autocomplete;
    },

    outsideClickHandler:function(){
        var event = new Event('input', {
            bubbles: true,
            cancelable: true,
        });
        autocomplete._inputNode.dispatchEvent(event);
        autocomplete.hideResults();
        window.removeEventListener('click',autocomplete.windowClickHandler)
    },
    hideResults:function(){
        autocomplete._resultNode.classList.replace('lil-visible','lil-invisible')
    },

    showResults:function(){
        autocomplete._resultNode.classList.replace('lil-invisible','lil-visible')
    },

    getEmptyHtml:function(){
        return `<span class="lil-block lil-py-2 lil-text-grey-500 lil-text-s-14" >Sorry No Result Found</span>`
    },

    getResultsHtml:function(options){
        return  options.map(ele=>{
            boldEle = ele.slice(0, autocomplete._inputNode.value.length);
            normalEle = ele.slice(autocomplete._inputNode.value.length, ele.length);
            return `<p class="hover:lil-text-blue-350 lil-py-2 lil-text-s-14 lil-cursor-pointer"><b class="lil-text-black">${boldEle}</b>${normalEle}</p>`
        }).join('')
    },

    populate:async function(){
        //populateOptionFn this function should return an array of elements ["a","b","c"]
        let options = await autocomplete._dataCb(autocomplete._query);
        let html = options.length ? autocomplete.getResultsHtml(options):autocomplete.getEmptyHtml();
        autocomplete._resultNode.innerHTML = html;
        autocomplete.bindResultClick();
        autocomplete.showResults();
    },

    bindResultClick:function(){
        let resultNodes = autocomplete._resultNode.getElementsByTagName("p");
        for(let i=0;i<resultNodes.length;i++){
            resultNodes[i].addEventListener('click',autocomplete.resultClickHandler(resultNodes[i],i))
        }
    },

    resultClickHandler:function(optionsNode,index){
        return function(){
            autocomplete._inputNode.value = optionsNode.innerText;
            autocomplete._resultNode.innerHTML  = autocomplete.getResultsHtml([optionsNode.innerText]);
            autocomplete.getSelectedIndex(index);
            autocomplete.outsideClickHandler()
            autocomplete.hideResults();
        }
    },

    regisgerSelectedIndexCb:function(selectedCb){
        autocomplete.getSelectedIndex = selectedCb
    },
    bindInputClick:function(){
        autocomplete._inputNode.addEventListener('click',autocomplete.inputClickHandler)
    },

    inputClickHandler:function(){
        if(autocomplete._query){
            autocomplete.showResults();
        }
        window.addEventListener('click',autocomplete.windowClickHandler)
    },


    windowClickHandler:function(e) {
        if(!autocomplete._inputNode.contains(e.target) && !autocomplete._resultNode.contains(e.target)){
            autocomplete.outsideClickHandler()
        }
    },
    bindInputChange:function(){
        autocomplete._inputNode.addEventListener('input',autocomplete.inputChangeHandler)
    },
    
    inputChangeHandler:function(e){
        let {currentTarget,cancelable} = e
        if(!cancelable){
            autocomplete._query = currentTarget.value 
            autocomplete.getSelectedIndex(null);
            autocomplete.populate(autocomplete._query);
            e.stopImmediatePropagation()
        }
    }
}

let autoCompletFn =  function(inputId,resultId,cb){
    autocomplete.init(inputId,resultId,cb);
    return {getSelectedIndex:autocomplete.regisgerSelectedIndexCb}
}
		/**
 *                 ****** FORM VALIDATION *******
 * Simple Javascript Validaiton for input fields 
 * TO USE - Call getFormInstance function with the following arguments this will return 
 * a form instance of inputElements which itself will handle the validation and showing the error logic
 * 
 * @arg  {Object[]} formInputs - formInputs array this will contain all the inputs you want validation for
 * @arg {string} formInputs[].name - The name of the input field. Will show up when validation fails
 * @arg {string} formInputs[].inputEleId - The id of the input field.
 * @arg {Functions Array} formInputs[].validationArr - You can use the Validation class functions 
 * which will be used for validations You can extend this class and create new util functions for validation
 * but these funciton should return err and msg property
 * @arg {string} type - Type of input field 
 * @arg {string} apiKey - Use this field if you want to use getValues funciton of formInstance which will
 * return the key and value pair for the formgroup input fields 
 * 
 * @returns {Object} - FormInstance object
 * 
 * @example @see {@link _includes/v2/contactSales.html}
 * 
 */

class ValidationsClass {
    static isEmpty(value,name){
        if(!value){
            return {err:true,msg:`${name} can not be empty`}
        }
    }
    static isUnChecked(value,name){
        if(!value){
            return {err:true,msg:`${name} should be selected`}
        }
    }
    static maxLimit(limit){
        return function(value,name){
            if(value.length>limit){
                return {err:true,msg:`${name} can not be greater than ${limit} digits`}
            }
        }
    }
    static isNameValid(value,name){
        let regexp = /[^a-zA-Z,. ]/;
        if(regexp.test(value)){
            return {err:true,msg:`Name is not valid`}
        }
    }
    static isEmail(value,name){
        let emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!emailRegex.test(value)){
            return {err:true,msg:`Email is not valid`}
        }
        
    }
    static validDomain(emailID) {
        let BLACKLIST = ["gmail.com","yahoo.com","yahoo.co.in","rediffmail.com","hotmail.com","yahoo.in","updated.com","cleartax.in","id.in","xyz.com","nil.com","ymail.com","outlook.com","xx.xx","abc.com","live.com","mail.com","gamil.com","junk.com","gmai.com","abc.in","live.in","a.com","x.x","a.a","rediff.com","yahoo.co.uk","leads.com","in.ey.com","123.com","xx.x","xxx.com","aa.aa","redfm.in","zz.zz","yhaoo.co.in","yahoo.om","yahoo.com.au","yahoo.co","yahoo.ca","yaho.co.in","xxx.xx","x.xx","x.com","abad.in","123gmail.com","z.z","yohoo.com","ymail.in","ymail.co","yahoomail.co.in","yahooco.in","yahoo.on","yahoo.con","yahoo.comm","yahoo.com.sg","yahoo.com.in","yahoo.coin","yahoo.co.on","yahoo.co.om","yahoo.cim","yahoo.aco.in","yahho.com","xzy.com","xyz.in","xyz.c","xys.com","xxxx.xxx","xxx.xxx","xx.in","xx.com","143gmail.com","126.com","123.comk","ac.com"];
        let mailDomain = emailID.split("@")[1];
        let isValid = !BLACKLIST.some(function (domain) {
            return mailDomain === domain;
        })
        if(!isValid){
            return {err:true,msg:`Please enter a valid business email id`}
        }
    }
    static isPhoneNoValid(value,name){
        let phoneNoRegex =  /^(\s*[\(?])?(?:([\)]?)([\-])?|[0]?)?[6789]\d{9}$/
        if(!phoneNoRegex.test(value)){
            return {err:true,msg:`Phone number is not valid`}
        }
    }

    static customValidation(cb){
        return (value,name)=>cb(value,name)
    }
    
}

class inputElements {
    constructor(inputEleId,validationArr=[],type,name,onChangeCb,apiKey,initValue){
        this._initialValues = {inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue};
        this.init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue);
    }
    init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue=""){
      this._name = name;
      this._apiKey = apiKey
      this._validations = validationArr;
      this._type = type;
      this._inputEle = document.getElementById(inputEleId);
      this.valid = !validationArr || !validationArr.length ? true:false
      this.value = initValue
      this._onChangeCb = onChangeCb;
      this._inputEle.value = initValue;
      if(this._type=="checkbox"&&initValue){
        this._inputEle.checked = true
      }
      this.bindEle();
      this.createErrorNode();
    }
    bindEle(){
        this._inputEle.addEventListener('input',this.onChange.bind(this))
    }
    onChange({currentTarget}){
        let value = this._type=="checkbox"?currentTarget.checked:currentTarget.value
        this.validate(value);
        if(this._onChangeCb){
            this._onChangeCb(currentTarget,this)
        }
    }
   
    onError(error){
        this.insertErrorTxt(error.msg);
        this.showError();
        this.valid = false
        this.errorMsg = error.msg;
    }
    onSuccess(value){
        this.hideError();
        this.value = value
        this.valid = true;
        this._inputEle.setAttribute("value",value)
        this._inputEle.value = value
        if(this._type=="checkbox"&&value){
          this._inputEle.checked = true
        }
    }
    validate(value){
        if(this._validations.length){
            for(let i=0;i<this._validations.length;i++){
                let ele = this._validations[i];
                let error = ele(value,this._name);
                if(error && error.err){
                    this.onError(error)
                    break;
                }
                else{
                   this.onSuccess(value)
                }  
            }
        }
        else this.onSuccess(value)
    }
    insertErrorTxt(err){
        this._errorNode.innerText = err
    }
    hideError(){
        this._errorNode.style.display = "none";
    }

    showError(){
        this._errorNode.style.display = "inline-block";
    }

    createErrorNode(){
        let para = document.createElement("span");
        para.setAttribute('id', `${inputElements._inputEle}_error`);
        para.setAttribute('class','lil-text-red lil-text-s-10');
        this._errorNode = para;
        if(this._type=="checkbox"){
            this._inputEle.parentElement.insertAdjacentElement('afterend', this._errorNode);
        } else{
            this._inputEle.insertAdjacentElement('afterend', this._errorNode);
        }
    }

    reLoadEle(){
      this.init(this._initialValues.inputEleId, this._initialValues.validationArr,this._initialValues.type,this._initialValues.name,this._initialValues.onChangeCb,this._initialValues.apiKey,this._inputEle.initValue);
    }

}


class formGroup {
    _formEle={};
    constructor(formEleArr){
        this._formEle =  formEleArr.filter(Boolean).reduce(((resultObj,ele)=>{
            return {...resultObj,[ele.inputEleId]:new inputElements(ele.inputEleId,ele.validationArr,ele.type,ele.name,ele.onChangeCb,ele.apiKey,ele.initValue)}
        }),{})
    }
    isFormValid(){
        for (const key in this._formEle) {
            const element = this._formEle[key];
            if(element.valid == false) return false
        }
        return true
    }
    add({inputEleId,validationArr,type,name,onChangeCb,apiKey}){
        let inputInstance = new inputElements(inputEleId,validationArr,type,name,onChangeCb,apiKey)
        this._formEle[inputEleId] = inputInstance;
    }
    remove(id){
        delete this._formEle[id]
    }
    getValues(){
        let values = {}
        for (const key in this._formEle) {
            const element = this._formEle[key];
            values[element._apiKey]= element.value
        }
        return values
    }
    validateFormEle(){
        let errorObj = {};
        for(const key in this._formEle) {
            const element = this._formEle[key];
            element.validate(element.value);
            if( !element.valid )
                errorObj[element._name] = element.errorMsg;
        }
        return errorObj;
    }
    reload(){
      for(const key in this._formEle) {
        const element = this._formEle[key];
        element.reLoadEle()
      }
    }

}

var getFormInstance = (formEleArr)=>new formGroup(formEleArr)

		const formId = 'contact-sales-section';
		let selectedIndex ;
		let isWhatsAppConsentPresent;
		let errorObj;
		if('enterprise' == 'tally' || 'enterprise' == 'e-invoicing-enterprise-software'){
			isWhatsAppConsentPresent= true
    	}
		if('v2' != "ksa-einvoicing" 
			&& 'v2' != "ksa-einvoicing-ar"
			&& '' != "ksa-einvoicing"
			&& '' != "ksa-einvoicing-ar"){
				autoCompletFn(`${formId}-company-name`,`${formId}-companies-options`,getCompanyName).getSelectedIndex(index=>{
					selectedIndex = index
				})
			}
		
	


		if('v2' === "ksa-einvoicing" 
			|| 'v2' === "ksa-einvoicing-ar"
			|| '' === "ksa-einvoicing"
			|| '' === "ksa-einvoicing-ar"){
		
			formValidateObj = [
				{name:"Name",inputEleId:`${formId}-username`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username"},
				{name:"Phone No",inputEleId:`${formId}-phoneno`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"PhoneNo"},
				{name:"Email",inputEleId:`${formId}-emailid`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail],type:"text",apiKey:"Email"},
				{name:"Company Name",inputEleId:`${formId}-company-name`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"CompanyName"},
				{name:"Number of Invoices",inputEleId:`${formId}-numberInvoices`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"InvoicesNumber"},
				{name:"isd",inputEleId:`${formId}-isd`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"ISD"},
				{name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"},
				{name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"}

			]
		}else{

			formValidateObj = [
				{name:"Name",inputEleId:`${formId}-username`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username"},
				{name:"Phone No",inputEleId:`${formId}-phoneno`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isPhoneNoValid],type:"text",apiKey:"PhoneNo"},
				{name:"Email",inputEleId:`${formId}-emailid`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail,ValidationsClass.validDomain],type:"text",apiKey:"Email"},
				{name:"Company Name",inputEleId:`${formId}-company-name`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"CompanyName"},
				{name:"Company Designation",inputEleId:`${formId}-designation`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleDesignation,apiKey:"Designation"},
				{name:"Company Designation Other",inputEleId:`${formId}-designation-other`,validationArr:[],type:"text",apiKey:"DesignationOther"},
				{name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"},
				{name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"}
			]
		}



		let formInstance = getFormInstance(formValidateObj)



		if(isWhatsAppConsentPresent){
			formInstance.add({name:"Whatsapp Consent",inputEleId:`${formId}-waconsent`,validationArr:[],type:"checkbox",apiKey:"waconsent"})
		}

		if('v2' == "ksa-einvoicing" 
			|| 'v2' == "ksa-einvoicing-ar"
			|| '' == "ksa-einvoicing"
			|| '' == "ksa-einvoicing-ar"){
			formInstance.add({name:"isd",inputEleId:`${formId}-isd`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"ISD"});
			formInstance.add({name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"companyERP"},);
			formInstance.add({name:"Allow to contact",inputEleId: `${formId}-accept-call`,validationArr:[ValidationsClass.isUnChecked],type:"checkbox",apiKey:"acceptCall"});
		}else{
			formInstance.add({name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"});
			formInstance.add({name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"});
		}



		function handleDesignation(target) {
			if(target.value == 'Other'){
				document.getElementById(`${formId}-designation-other`).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`${formId}-designation-other`).classList.add('lil-hidden');
			}
		};

		function handleErp(target) {
			if(target.value == 'Others'){
				document.getElementById(`${formId}-companyerp-other`).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`${formId}-companyerp-other`).classList.add('lil-hidden');
			}
		};

		function customValidator(value){
			if(selectedIndex==null || selectedIndex==undefined){
				return {err:true,msg:`Company name is not valid`}
			}
		}
		let foldLabel;
		let submitBtn = document.getElementById(`${formId}-submit-form`)
		submitBtn.addEventListener('click',(e)=>{
			foldLabel =  track_Label;
      const downloadWhitepaperLabel = "fold_end_to_end_solution_Download Whitepaper_button_Download Whitepaper  →"
			track_Label = ('fold_get_a_free_demo_lets_talk') ? ('fold_get_a_free_demo_lets_talk' + '_' + e.target.value) : '';
			track_Value = '{}redirect_url :: ' + e.target.href + '{}FormType :: contact-sales';
			if(formInstance.isFormValid()){
				let formdata = formInstance.getValues()
				let userData = {...formdata,
					companyERP:formdata.companyERP=="Others"?formdata.companyERPOther:formdata.companyERP,
					Designation:formdata.Designation=="Other"?formdata.DesignationOther:formdata.Designation,
					"utm-source" :new URL(window.location.href).searchParams.get("utm_source"),
					"utm-campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
					PageURL :window.location.href,
					Date :new Date(new Date()).toDateString(),
      				Time:new Date(new Date()).toLocaleTimeString(),
					"Downloaded-Whitepaper": downloadWhitepaperLabel == foldLabel?"Yes":"No",
				}
				if(isWhatsAppConsentPresent){
					userData.waconsent = formdata.waconsent?"Yes":"No";
				}
				submitBtn.classList.add('lil-btn-disabled');
				submitForm(userData)
			}
			else{
				trackFormSubmit(formId, 'Error')
				formInstance.validateFormEle()
			}

		})

		function getUserData (userName,phoneNum,workmail,isd,erp,numbrInvoice,CompanyName=""){
			return {
				"leadPlatforms": {
					"google_sheet": {
						"sheet_name": "ksaRAD"
					},
					"salesforce": true
				},
				"leadData": {
					"type": "GCC-contact-sales-form",
					"typeName": "Tax Experts",
					"data": {
						"name": userName,
						"phone_number": phoneNum,
						"email": workmail,
						"ISD": isd,
						"company_erp": erp,
						"InvoicesNumber": numbrInvoice,
						"company_name": CompanyName,
						"PageURL":  window.location.href,
                        "Date": new Date(new Date()).toDateString(),
                        "Time": new Date(new Date()).toLocaleTimeString()
					}
				}
			}
		}
		function postToCommonAddLead(formData){
			const {Username,PhoneNo,Email,ISD,companyERP,CompanyName,InvoicesNumber} = formData;
          $.ajax({
            url:window.location.origin + "/f/common-lead/common-add-lead",
            type:"POST",
            data: JSON.stringify(getUserData(Username,PhoneNo,Email,ISD,companyERP,InvoicesNumber,CompanyName)),
            processData: false,
    				headers: {
              "Content-Type": "application/json",
            },
            dataType: "json",
            success: function(){
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById(`${formId}-success-wrapper`)
				.classList.remove("lil-hidden");
				document.getElementById(`${formId}-wrapper`).classList.add("lil-hidden");
				trackFormSubmit(formId, 'Success');
            },
            error: function(){
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector(`${formId}-error-msg`).innerHTML = "Request failed! Please try again.";
				trackFormSubmit(formId, 'Failure');
			 } 
          })
		}

		function submitForm(formData){

			trackFormSubmit(formId, 'Submit');

			let url
			if('/s/v2/enterprise/' == "/s/contact-sales-tds-206/"){
				url = `https://script.google.com/macros/s/AKfycbx5gux0ib9YiQ5oCsN3s6Nx8a0QIsXrpJK96RSM_DnBkd5g7aCoczSKYEXOuWhetfhs/exec?${new URLSearchParams(formData)}`
			} else if('enterprise' == "maxitc"){
				url = `https://script.google.com/macros/s/AKfycbzlu8dUsDt88M4rSq7C8IaW_ck2mOC7uo2IZ--fO4AiroO7jI3Bt0xSkrBKe8p6-MDruw/exec?${new URLSearchParams(formData)}`
			} else if(('' == "ksa-einvoicing" || '' == "ksa-einvoicing-ar")|| 'v2' == 'ksa-einvoicing'){
				postToCommonAddLead(formData);
				return;
			} else{
				url = `https://script.google.com/macros/s/AKfycbyITE9Bs96Ala1wb6TqqgIWx6-cgscA6JFlsPydAe0p2Kgni5YU/exec?${new URLSearchParams(formData)}`
			}
			fetch(url)
			.then(response => response.json())
  			.then(data => {
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById(`${formId}-success-wrapper`)
				.classList.remove("lil-hidden");
				document.getElementById(`${formId}-wrapper`).classList.add("lil-hidden");
				let category = 'enterprise';
				if(category === 'tally' || category === 'e-invoicing-enterprise-software' ){
					loadTallyScripts();
				}
				trackFormSubmit(formId, 'Success');
				
			  })
			.catch(err=>{
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector(`${formId}-error-msg`).innerHTML = "Request failed! Please try again.";
				trackFormSubmit(formId, 'Failure');
			})
		}
		async function getCompanyName(query){
			try{
				let response  = await fetch(`https://cleartax.in/f/company/search?query=${query}`)
				let data =  JSON.parse(await response.json());
				if(data.length){
						return data.map((ele)=>{
							if(ele && ele.fields && ele.fields.company_name){
								return ele.fields.company_name
							}
						})
					}
					else return []
			}
			catch(e){
				return []
			}
		}
	})
	

</script>

				</div>
			</div>
		</div>
	</section>
</div>

<!-- Request a demo Contact sales Modal -->
<div class="lil-modal lil-rounded-xl" id="rad-contact-sales">
	<span class="lil-modal-close lil-cursor-pointer lil-text-font-500 lil-text-s-18"
		onClick="closeModal(document.getElementById('rad-contact-sales'))">&#10005;</span>
	<div data-foldLocation class="lil-px-10 lil-py-10">
		



<div id="rad-contact-sales-modal-wrapper">
	<div class="lil-text-center">
		<span id="CTAlabel" class="lil-text-s-18 lil-text-font-500 lil-font-bold">Request a demo</span>
		
		<p class="lil-text-s-14 lil-pt-2">Please fill the details to contact our enterprise sales team</p>
		
	</div>
	<p class="rad-contact-sales-modal-error-msg lil-text-red lil-text-s-10 lil-mb-4 lil-text-center"></p>
	<form class="lil-mt-4 contact-sales-form lil-flex lil-flex-wrap" data-identifier="rad-contact-sales-modal" data-location="" data-category="enterprise">
		<div class="lil-w-1/2 lil-mb-4 lil-px-4 sm:lil-w-full sm:lil-pr-0 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="rad-contact-sales-modal-username" >Name*</label>
			<input id="rad-contact-sales-modal-username" tabindex="0" class="lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="" maxlength="56"/>
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pl-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="rad-contact-sales-modal-emailid">Company Email*</label>
			<input id="rad-contact-sales-modal-emailid" tabindex="0" class="lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="" type="email" maxlength="56" />
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pr-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="rad-contact-sales-modal-phoneno">Phone Number*</label>
			
			<input id="rad-contact-sales-modal-phoneno" tabindex="0" class="lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" type="tel"
				placeholder="(+91) ### ### ####" />
			
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pl-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="rad-contact-sales-modal-company-name">Company Name*</label>
			<input id="rad-contact-sales-modal-company-name" tabindex="0" class="lil-w-full lil-mt-1 lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 companyInput" placeholder="" />
			<div class="results-companies-wrp lil-relative">
				<div id="rad-contact-sales-modal-companies-options" class="lil-border-grey-300 lil-bg-white lil-w-full lil-border-sm lil-p-2 lil-rounded-xl results lil-absolute results-compaines lil-invisible">
				</div>
			</div>


		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pr-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="rad-contact-sales-modal-company-ERP">Company ERP*</label>
			<select id="rad-contact-sales-modal-company-ERP" data-identifier="rad-contact-sales-modal" tabindex="0" class="lil-block lil-w-full lil-mt-1 lil-outline-none" >
				<option value="" disabled selected class="">Select your option</option>
				<option value="Tally">Tally</option>
				<option value="SAP B1">SAP B1</option>
				<option value="SAP HANA">SAP HANA</option>
				<option value="SAP ECC">SAP ECC</option>
				<option value="Oracle">Oracle</option>
				<option value="Microsoft">Microsoft</option>
				<option value="Netsuite">Netsuite</option>
				<option value="Inhouse ERP">Custom ERP</option>
				<option value="Others">Others</option>
			</select>
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
			<input id="rad-contact-sales-modal-companyerp-other" tabindex="0" class="lil-w-full lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56"/>
		</div>
		
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pl-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="rad-contact-sales-modal-designation">Designation</label>
			<select id="rad-contact-sales-modal-designation" tabindex="0" class="lil-block lil-w-full lil-mt-1 lil-outline-none" >
				<option value="" disabled selected>Select your option</option>
				<option value="Chief Financial Officer">Chief Financial Officer</option>
				<option value="Head/VP/Director/GM(Finance/Taxation)">Head/VP/Director/GM (Finance/ Taxation)</option>
				<option value="Head/VP/Director/GM(Accounts/Audit)">Head/VP/Director/GM (Accounts/Audit)</option>
				<option value="Senior Manager (Finance/ Taxation)">Senior Manager (Finance/ Taxation)</option>
				<option value="Senior Manager (Accounts/ Audit)">Senior Manager (Accounts/ Audit)</option>
				<option value="Other">Other</option>
			</select>
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
			<input id="rad-contact-sales-modal-designation-other" tabindex="0" class="lil-w-full lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56" />
		</div>
		

		
		<div class="lil-w-full lil-flex lil-justify-center">
			
			
			<input id="rad-contact-sales-modal-submit-form" tabindex="0" type="button"  value="Request a demo" class="lil-btn lil-btn-blue lil-cursor-pointer lil-mt-4 lil-float-right lil-w-1/3 sm:lil-w-full" />
			
		</div>
	</form>
</div>
<div id="rad-contact-sales-modal-success-wrapper" class="lil-hidden lil-text-center">
	<p class="lil-text-base lil-font-bold lil-text-font-500">Thank you for your response</p>
	<p id="success-message"	class="lil-text-base lil-text-font-500">Our representative will get in touch with you shortly.</p>
</div>

<style>
	.results-compaines p{
		overflow: hidden;
    	text-overflow: ellipsis;
		white-space: nowrap;
	}
	.results-compaines p:hover{
		overflow: visible;
		white-space: normal;
	}
</style>

<script>
	window.addEventListener('DOMContentLoaded', ()=>{
		/**
 *                 ****** AUTO COMPLETE *******
 * User can instansiate this functionality by simply calling the autoCompletFn
 * which takes param like
 * @arg {string} inputId - input element id you want to attach the autocomplete to 
 * @arg {string} results -  element id which will get populated with results 
 * @arg {function} callback - function will return the results in an array format to show in dropdown 
 * 
 * @returns {Object} - Object containing @callback getSelectedIndex which itself returns the selected index
 * 
 * 
 * @example autoCompletFn(`inputId`,`resultId`,apiCall).getSelectedIndex(index=>{
			selectedIndex = index
		})
 */

let autocomplete = {
    _inputNode:null,
    _query:"",
    _resultNode:null,
    _dataCb:null,
    selectedIndex:null,

    init:function(inputId,resultNodeId,getDataCb){
        autocomplete._inputNode = document.getElementById(inputId);
        autocomplete._resultNode = document.getElementById(resultNodeId);
        autocomplete._dataCb = getDataCb;
        autocomplete.bindInputChange();
        autocomplete.bindInputClick();

        return autocomplete;
    },

    outsideClickHandler:function(){
        var event = new Event('input', {
            bubbles: true,
            cancelable: true,
        });
        autocomplete._inputNode.dispatchEvent(event);
        autocomplete.hideResults();
        window.removeEventListener('click',autocomplete.windowClickHandler)
    },
    hideResults:function(){
        autocomplete._resultNode.classList.replace('lil-visible','lil-invisible')
    },

    showResults:function(){
        autocomplete._resultNode.classList.replace('lil-invisible','lil-visible')
    },

    getEmptyHtml:function(){
        return `<span class="lil-block lil-py-2 lil-text-grey-500 lil-text-s-14" >Sorry No Result Found</span>`
    },

    getResultsHtml:function(options){
        return  options.map(ele=>{
            boldEle = ele.slice(0, autocomplete._inputNode.value.length);
            normalEle = ele.slice(autocomplete._inputNode.value.length, ele.length);
            return `<p class="hover:lil-text-blue-350 lil-py-2 lil-text-s-14 lil-cursor-pointer"><b class="lil-text-black">${boldEle}</b>${normalEle}</p>`
        }).join('')
    },

    populate:async function(){
        //populateOptionFn this function should return an array of elements ["a","b","c"]
        let options = await autocomplete._dataCb(autocomplete._query);
        let html = options.length ? autocomplete.getResultsHtml(options):autocomplete.getEmptyHtml();
        autocomplete._resultNode.innerHTML = html;
        autocomplete.bindResultClick();
        autocomplete.showResults();
    },

    bindResultClick:function(){
        let resultNodes = autocomplete._resultNode.getElementsByTagName("p");
        for(let i=0;i<resultNodes.length;i++){
            resultNodes[i].addEventListener('click',autocomplete.resultClickHandler(resultNodes[i],i))
        }
    },

    resultClickHandler:function(optionsNode,index){
        return function(){
            autocomplete._inputNode.value = optionsNode.innerText;
            autocomplete._resultNode.innerHTML  = autocomplete.getResultsHtml([optionsNode.innerText]);
            autocomplete.getSelectedIndex(index);
            autocomplete.outsideClickHandler()
            autocomplete.hideResults();
        }
    },

    regisgerSelectedIndexCb:function(selectedCb){
        autocomplete.getSelectedIndex = selectedCb
    },
    bindInputClick:function(){
        autocomplete._inputNode.addEventListener('click',autocomplete.inputClickHandler)
    },

    inputClickHandler:function(){
        if(autocomplete._query){
            autocomplete.showResults();
        }
        window.addEventListener('click',autocomplete.windowClickHandler)
    },


    windowClickHandler:function(e) {
        if(!autocomplete._inputNode.contains(e.target) && !autocomplete._resultNode.contains(e.target)){
            autocomplete.outsideClickHandler()
        }
    },
    bindInputChange:function(){
        autocomplete._inputNode.addEventListener('input',autocomplete.inputChangeHandler)
    },
    
    inputChangeHandler:function(e){
        let {currentTarget,cancelable} = e
        if(!cancelable){
            autocomplete._query = currentTarget.value 
            autocomplete.getSelectedIndex(null);
            autocomplete.populate(autocomplete._query);
            e.stopImmediatePropagation()
        }
    }
}

let autoCompletFn =  function(inputId,resultId,cb){
    autocomplete.init(inputId,resultId,cb);
    return {getSelectedIndex:autocomplete.regisgerSelectedIndexCb}
}
		/**
 *                 ****** FORM VALIDATION *******
 * Simple Javascript Validaiton for input fields 
 * TO USE - Call getFormInstance function with the following arguments this will return 
 * a form instance of inputElements which itself will handle the validation and showing the error logic
 * 
 * @arg  {Object[]} formInputs - formInputs array this will contain all the inputs you want validation for
 * @arg {string} formInputs[].name - The name of the input field. Will show up when validation fails
 * @arg {string} formInputs[].inputEleId - The id of the input field.
 * @arg {Functions Array} formInputs[].validationArr - You can use the Validation class functions 
 * which will be used for validations You can extend this class and create new util functions for validation
 * but these funciton should return err and msg property
 * @arg {string} type - Type of input field 
 * @arg {string} apiKey - Use this field if you want to use getValues funciton of formInstance which will
 * return the key and value pair for the formgroup input fields 
 * 
 * @returns {Object} - FormInstance object
 * 
 * @example @see {@link _includes/v2/contactSales.html}
 * 
 */

class ValidationsClass {
    static isEmpty(value,name){
        if(!value){
            return {err:true,msg:`${name} can not be empty`}
        }
    }
    static isUnChecked(value,name){
        if(!value){
            return {err:true,msg:`${name} should be selected`}
        }
    }
    static maxLimit(limit){
        return function(value,name){
            if(value.length>limit){
                return {err:true,msg:`${name} can not be greater than ${limit} digits`}
            }
        }
    }
    static isNameValid(value,name){
        let regexp = /[^a-zA-Z,. ]/;
        if(regexp.test(value)){
            return {err:true,msg:`Name is not valid`}
        }
    }
    static isEmail(value,name){
        let emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!emailRegex.test(value)){
            return {err:true,msg:`Email is not valid`}
        }
        
    }
    static validDomain(emailID) {
        let BLACKLIST = ["gmail.com","yahoo.com","yahoo.co.in","rediffmail.com","hotmail.com","yahoo.in","updated.com","cleartax.in","id.in","xyz.com","nil.com","ymail.com","outlook.com","xx.xx","abc.com","live.com","mail.com","gamil.com","junk.com","gmai.com","abc.in","live.in","a.com","x.x","a.a","rediff.com","yahoo.co.uk","leads.com","in.ey.com","123.com","xx.x","xxx.com","aa.aa","redfm.in","zz.zz","yhaoo.co.in","yahoo.om","yahoo.com.au","yahoo.co","yahoo.ca","yaho.co.in","xxx.xx","x.xx","x.com","abad.in","123gmail.com","z.z","yohoo.com","ymail.in","ymail.co","yahoomail.co.in","yahooco.in","yahoo.on","yahoo.con","yahoo.comm","yahoo.com.sg","yahoo.com.in","yahoo.coin","yahoo.co.on","yahoo.co.om","yahoo.cim","yahoo.aco.in","yahho.com","xzy.com","xyz.in","xyz.c","xys.com","xxxx.xxx","xxx.xxx","xx.in","xx.com","143gmail.com","126.com","123.comk","ac.com"];
        let mailDomain = emailID.split("@")[1];
        let isValid = !BLACKLIST.some(function (domain) {
            return mailDomain === domain;
        })
        if(!isValid){
            return {err:true,msg:`Please enter a valid business email id`}
        }
    }
    static isPhoneNoValid(value,name){
        let phoneNoRegex =  /^(\s*[\(?])?(?:([\)]?)([\-])?|[0]?)?[6789]\d{9}$/
        if(!phoneNoRegex.test(value)){
            return {err:true,msg:`Phone number is not valid`}
        }
    }

    static customValidation(cb){
        return (value,name)=>cb(value,name)
    }
    
}

class inputElements {
    constructor(inputEleId,validationArr=[],type,name,onChangeCb,apiKey,initValue){
        this._initialValues = {inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue};
        this.init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue);
    }
    init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue=""){
      this._name = name;
      this._apiKey = apiKey
      this._validations = validationArr;
      this._type = type;
      this._inputEle = document.getElementById(inputEleId);
      this.valid = !validationArr || !validationArr.length ? true:false
      this.value = initValue
      this._onChangeCb = onChangeCb;
      this._inputEle.value = initValue;
      if(this._type=="checkbox"&&initValue){
        this._inputEle.checked = true
      }
      this.bindEle();
      this.createErrorNode();
    }
    bindEle(){
        this._inputEle.addEventListener('input',this.onChange.bind(this))
    }
    onChange({currentTarget}){
        let value = this._type=="checkbox"?currentTarget.checked:currentTarget.value
        this.validate(value);
        if(this._onChangeCb){
            this._onChangeCb(currentTarget,this)
        }
    }
   
    onError(error){
        this.insertErrorTxt(error.msg);
        this.showError();
        this.valid = false
        this.errorMsg = error.msg;
    }
    onSuccess(value){
        this.hideError();
        this.value = value
        this.valid = true;
        this._inputEle.setAttribute("value",value)
        this._inputEle.value = value
        if(this._type=="checkbox"&&value){
          this._inputEle.checked = true
        }
    }
    validate(value){
        if(this._validations.length){
            for(let i=0;i<this._validations.length;i++){
                let ele = this._validations[i];
                let error = ele(value,this._name);
                if(error && error.err){
                    this.onError(error)
                    break;
                }
                else{
                   this.onSuccess(value)
                }  
            }
        }
        else this.onSuccess(value)
    }
    insertErrorTxt(err){
        this._errorNode.innerText = err
    }
    hideError(){
        this._errorNode.style.display = "none";
    }

    showError(){
        this._errorNode.style.display = "inline-block";
    }

    createErrorNode(){
        let para = document.createElement("span");
        para.setAttribute('id', `${inputElements._inputEle}_error`);
        para.setAttribute('class','lil-text-red lil-text-s-10');
        this._errorNode = para;
        if(this._type=="checkbox"){
            this._inputEle.parentElement.insertAdjacentElement('afterend', this._errorNode);
        } else{
            this._inputEle.insertAdjacentElement('afterend', this._errorNode);
        }
    }

    reLoadEle(){
      this.init(this._initialValues.inputEleId, this._initialValues.validationArr,this._initialValues.type,this._initialValues.name,this._initialValues.onChangeCb,this._initialValues.apiKey,this._inputEle.initValue);
    }

}


class formGroup {
    _formEle={};
    constructor(formEleArr){
        this._formEle =  formEleArr.filter(Boolean).reduce(((resultObj,ele)=>{
            return {...resultObj,[ele.inputEleId]:new inputElements(ele.inputEleId,ele.validationArr,ele.type,ele.name,ele.onChangeCb,ele.apiKey,ele.initValue)}
        }),{})
    }
    isFormValid(){
        for (const key in this._formEle) {
            const element = this._formEle[key];
            if(element.valid == false) return false
        }
        return true
    }
    add({inputEleId,validationArr,type,name,onChangeCb,apiKey}){
        let inputInstance = new inputElements(inputEleId,validationArr,type,name,onChangeCb,apiKey)
        this._formEle[inputEleId] = inputInstance;
    }
    remove(id){
        delete this._formEle[id]
    }
    getValues(){
        let values = {}
        for (const key in this._formEle) {
            const element = this._formEle[key];
            values[element._apiKey]= element.value
        }
        return values
    }
    validateFormEle(){
        let errorObj = {};
        for(const key in this._formEle) {
            const element = this._formEle[key];
            element.validate(element.value);
            if( !element.valid )
                errorObj[element._name] = element.errorMsg;
        }
        return errorObj;
    }
    reload(){
      for(const key in this._formEle) {
        const element = this._formEle[key];
        element.reLoadEle()
      }
    }

}

var getFormInstance = (formEleArr)=>new formGroup(formEleArr)

		const formId = 'rad-contact-sales-modal';
		let selectedIndex ;
		let isWhatsAppConsentPresent;
		let errorObj;
		if('enterprise' == 'tally' || 'enterprise' == 'e-invoicing-enterprise-software'){
			isWhatsAppConsentPresent= true
    	}
		if('v2' != "ksa-einvoicing" 
			&& 'v2' != "ksa-einvoicing-ar"
			&& '' != "ksa-einvoicing"
			&& '' != "ksa-einvoicing-ar"){
				autoCompletFn(`${formId}-company-name`,`${formId}-companies-options`,getCompanyName).getSelectedIndex(index=>{
					selectedIndex = index
				})
			}
		
	


		if('v2' === "ksa-einvoicing" 
			|| 'v2' === "ksa-einvoicing-ar"
			|| '' === "ksa-einvoicing"
			|| '' === "ksa-einvoicing-ar"){
		
			formValidateObj = [
				{name:"Name",inputEleId:`${formId}-username`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username"},
				{name:"Phone No",inputEleId:`${formId}-phoneno`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"PhoneNo"},
				{name:"Email",inputEleId:`${formId}-emailid`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail],type:"text",apiKey:"Email"},
				{name:"Company Name",inputEleId:`${formId}-company-name`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"CompanyName"},
				{name:"Number of Invoices",inputEleId:`${formId}-numberInvoices`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"InvoicesNumber"},
				{name:"isd",inputEleId:`${formId}-isd`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"ISD"},
				{name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"},
				{name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"}

			]
		}else{

			formValidateObj = [
				{name:"Name",inputEleId:`${formId}-username`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username"},
				{name:"Phone No",inputEleId:`${formId}-phoneno`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isPhoneNoValid],type:"text",apiKey:"PhoneNo"},
				{name:"Email",inputEleId:`${formId}-emailid`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail,ValidationsClass.validDomain],type:"text",apiKey:"Email"},
				{name:"Company Name",inputEleId:`${formId}-company-name`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"CompanyName"},
				{name:"Company Designation",inputEleId:`${formId}-designation`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleDesignation,apiKey:"Designation"},
				{name:"Company Designation Other",inputEleId:`${formId}-designation-other`,validationArr:[],type:"text",apiKey:"DesignationOther"},
				{name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"},
				{name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"}
			]
		}



		let formInstance = getFormInstance(formValidateObj)



		if(isWhatsAppConsentPresent){
			formInstance.add({name:"Whatsapp Consent",inputEleId:`${formId}-waconsent`,validationArr:[],type:"checkbox",apiKey:"waconsent"})
		}

		if('v2' == "ksa-einvoicing" 
			|| 'v2' == "ksa-einvoicing-ar"
			|| '' == "ksa-einvoicing"
			|| '' == "ksa-einvoicing-ar"){
			formInstance.add({name:"isd",inputEleId:`${formId}-isd`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"ISD"});
			formInstance.add({name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"companyERP"},);
			formInstance.add({name:"Allow to contact",inputEleId: `${formId}-accept-call`,validationArr:[ValidationsClass.isUnChecked],type:"checkbox",apiKey:"acceptCall"});
		}else{
			formInstance.add({name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"});
			formInstance.add({name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"});
		}



		function handleDesignation(target) {
			if(target.value == 'Other'){
				document.getElementById(`${formId}-designation-other`).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`${formId}-designation-other`).classList.add('lil-hidden');
			}
		};

		function handleErp(target) {
			if(target.value == 'Others'){
				document.getElementById(`${formId}-companyerp-other`).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`${formId}-companyerp-other`).classList.add('lil-hidden');
			}
		};

		function customValidator(value){
			if(selectedIndex==null || selectedIndex==undefined){
				return {err:true,msg:`Company name is not valid`}
			}
		}
		let foldLabel;
		let submitBtn = document.getElementById(`${formId}-submit-form`)
		submitBtn.addEventListener('click',(e)=>{
			foldLabel =  track_Label;
      const downloadWhitepaperLabel = "fold_end_to_end_solution_Download Whitepaper_button_Download Whitepaper  →"
			track_Label = ('') ? ('' + '_' + e.target.value) : '';
			track_Value = '{}redirect_url :: ' + e.target.href + '{}FormType :: contact-sales';
			if(formInstance.isFormValid()){
				let formdata = formInstance.getValues()
				let userData = {...formdata,
					companyERP:formdata.companyERP=="Others"?formdata.companyERPOther:formdata.companyERP,
					Designation:formdata.Designation=="Other"?formdata.DesignationOther:formdata.Designation,
					"utm-source" :new URL(window.location.href).searchParams.get("utm_source"),
					"utm-campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
					PageURL :window.location.href,
					Date :new Date(new Date()).toDateString(),
      				Time:new Date(new Date()).toLocaleTimeString(),
					"Downloaded-Whitepaper": downloadWhitepaperLabel == foldLabel?"Yes":"No",
				}
				if(isWhatsAppConsentPresent){
					userData.waconsent = formdata.waconsent?"Yes":"No";
				}
				submitBtn.classList.add('lil-btn-disabled');
				submitForm(userData)
			}
			else{
				trackFormSubmit(formId, 'Error')
				formInstance.validateFormEle()
			}

		})

		function getUserData (userName,phoneNum,workmail,isd,erp,numbrInvoice,CompanyName=""){
			return {
				"leadPlatforms": {
					"google_sheet": {
						"sheet_name": "ksaRAD"
					},
					"salesforce": true
				},
				"leadData": {
					"type": "GCC-contact-sales-form",
					"typeName": "Tax Experts",
					"data": {
						"name": userName,
						"phone_number": phoneNum,
						"email": workmail,
						"ISD": isd,
						"company_erp": erp,
						"InvoicesNumber": numbrInvoice,
						"company_name": CompanyName,
						"PageURL":  window.location.href,
                        "Date": new Date(new Date()).toDateString(),
                        "Time": new Date(new Date()).toLocaleTimeString()
					}
				}
			}
		}
		function postToCommonAddLead(formData){
			const {Username,PhoneNo,Email,ISD,companyERP,CompanyName,InvoicesNumber} = formData;
          $.ajax({
            url:window.location.origin + "/f/common-lead/common-add-lead",
            type:"POST",
            data: JSON.stringify(getUserData(Username,PhoneNo,Email,ISD,companyERP,InvoicesNumber,CompanyName)),
            processData: false,
    				headers: {
              "Content-Type": "application/json",
            },
            dataType: "json",
            success: function(){
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById(`${formId}-success-wrapper`)
				.classList.remove("lil-hidden");
				document.getElementById(`${formId}-wrapper`).classList.add("lil-hidden");
				trackFormSubmit(formId, 'Success');
            },
            error: function(){
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector(`${formId}-error-msg`).innerHTML = "Request failed! Please try again.";
				trackFormSubmit(formId, 'Failure');
			 } 
          })
		}

		function submitForm(formData){

			trackFormSubmit(formId, 'Submit');

			let url
			if('/s/v2/enterprise/' == "/s/contact-sales-tds-206/"){
				url = `https://script.google.com/macros/s/AKfycbx5gux0ib9YiQ5oCsN3s6Nx8a0QIsXrpJK96RSM_DnBkd5g7aCoczSKYEXOuWhetfhs/exec?${new URLSearchParams(formData)}`
			} else if('enterprise' == "maxitc"){
				url = `https://script.google.com/macros/s/AKfycbzlu8dUsDt88M4rSq7C8IaW_ck2mOC7uo2IZ--fO4AiroO7jI3Bt0xSkrBKe8p6-MDruw/exec?${new URLSearchParams(formData)}`
			} else if(('' == "ksa-einvoicing" || '' == "ksa-einvoicing-ar")|| 'v2' == 'ksa-einvoicing'){
				postToCommonAddLead(formData);
				return;
			} else{
				url = `https://script.google.com/macros/s/AKfycbyITE9Bs96Ala1wb6TqqgIWx6-cgscA6JFlsPydAe0p2Kgni5YU/exec?${new URLSearchParams(formData)}`
			}
			fetch(url)
			.then(response => response.json())
  			.then(data => {
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById(`${formId}-success-wrapper`)
				.classList.remove("lil-hidden");
				document.getElementById(`${formId}-wrapper`).classList.add("lil-hidden");
				let category = 'enterprise';
				if(category === 'tally' || category === 'e-invoicing-enterprise-software' ){
					loadTallyScripts();
				}
				trackFormSubmit(formId, 'Success');
				
			  })
			.catch(err=>{
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector(`${formId}-error-msg`).innerHTML = "Request failed! Please try again.";
				trackFormSubmit(formId, 'Failure');
			})
		}
		async function getCompanyName(query){
			try{
				let response  = await fetch(`https://cleartax.in/f/company/search?query=${query}`)
				let data =  JSON.parse(await response.json());
				if(data.length){
						return data.map((ele)=>{
							if(ele && ele.fields && ele.fields.company_name){
								return ele.fields.company_name
							}
						})
					}
					else return []
			}
			catch(e){
				return []
			}
		}
	})
	

</script>

	</div>
</div>
<div class="lil-modal-overlay"></div><!--  -->

<!-- Contact sales Modal -->
<div class="lil-modal lil-rounded-xl" id="contact-sales">
	<span class="lil-modal-close lil-cursor-pointer lil-text-font-500 lil-text-s-18"
		onClick="closeModal(document.getElementById('contact-sales'))">&#10005;</span>
	<div data-foldLocation class="lil-px-10 lil-py-10">
		



<div id="contact-sales-modal-wrapper">
	<div class="lil-text-center">
		<span id="CTAlabel" class="lil-text-s-18 lil-text-font-500 lil-font-bold">Request a demo</span>
		
		<p class="lil-text-s-14 lil-pt-2">Please fill the details to contact our enterprise sales team</p>
		
	</div>
	<p class="contact-sales-modal-error-msg lil-text-red lil-text-s-10 lil-mb-4 lil-text-center"></p>
	<form class="lil-mt-4 contact-sales-form lil-flex lil-flex-wrap" data-identifier="contact-sales-modal" data-location="" data-category="enterprise">
		<div class="lil-w-1/2 lil-mb-4 lil-px-4 sm:lil-w-full sm:lil-pr-0 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="contact-sales-modal-username" >Name*</label>
			<input id="contact-sales-modal-username" tabindex="0" class="lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="" maxlength="56"/>
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pl-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="contact-sales-modal-emailid">Company Email*</label>
			<input id="contact-sales-modal-emailid" tabindex="0" class="lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="" type="email" maxlength="56" />
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pr-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="contact-sales-modal-phoneno">Phone Number*</label>
			
			<input id="contact-sales-modal-phoneno" tabindex="0" class="lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" type="tel"
				placeholder="(+91) ### ### ####" />
			
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pl-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="contact-sales-modal-company-name">Company Name*</label>
			<input id="contact-sales-modal-company-name" tabindex="0" class="lil-w-full lil-mt-1 lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 companyInput" placeholder="" />
			<div class="results-companies-wrp lil-relative">
				<div id="contact-sales-modal-companies-options" class="lil-border-grey-300 lil-bg-white lil-w-full lil-border-sm lil-p-2 lil-rounded-xl results lil-absolute results-compaines lil-invisible">
				</div>
			</div>


		</div>
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pr-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="contact-sales-modal-company-ERP">Company ERP*</label>
			<select id="contact-sales-modal-company-ERP" data-identifier="contact-sales-modal" tabindex="0" class="lil-block lil-w-full lil-mt-1 lil-outline-none" >
				<option value="" disabled selected class="">Select your option</option>
				<option value="Tally">Tally</option>
				<option value="SAP B1">SAP B1</option>
				<option value="SAP HANA">SAP HANA</option>
				<option value="SAP ECC">SAP ECC</option>
				<option value="Oracle">Oracle</option>
				<option value="Microsoft">Microsoft</option>
				<option value="Netsuite">Netsuite</option>
				<option value="Inhouse ERP">Custom ERP</option>
				<option value="Others">Others</option>
			</select>
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
			<input id="contact-sales-modal-companyerp-other" tabindex="0" class="lil-w-full lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56"/>
		</div>
		
		<div class="lil-w-1/2 lil-px-4 sm:lil-w-full sm:lil-pl-0 lil-mb-4 sm:lil-px-0">
			<label class="lil-text-s-14 lil-text-font-500" for="contact-sales-modal-designation">Designation</label>
			<select id="contact-sales-modal-designation" tabindex="0" class="lil-block lil-w-full lil-mt-1 lil-outline-none" >
				<option value="" disabled selected>Select your option</option>
				<option value="Chief Financial Officer">Chief Financial Officer</option>
				<option value="Head/VP/Director/GM(Finance/Taxation)">Head/VP/Director/GM (Finance/ Taxation)</option>
				<option value="Head/VP/Director/GM(Accounts/Audit)">Head/VP/Director/GM (Accounts/Audit)</option>
				<option value="Senior Manager (Finance/ Taxation)">Senior Manager (Finance/ Taxation)</option>
				<option value="Senior Manager (Accounts/ Audit)">Senior Manager (Accounts/ Audit)</option>
				<option value="Other">Other</option>
			</select>
			<!-- <p class="lil-text-red lil-text-s-10 lil-mb-4"></p> -->
			<input id="contact-sales-modal-designation-other" tabindex="0" class="lil-w-full lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56" />
		</div>
		

		
		<div class="lil-w-full lil-flex lil-justify-center">
			
			
			<input id="contact-sales-modal-submit-form" tabindex="0" type="button"  value="Request a demo" class="lil-btn lil-btn-blue lil-cursor-pointer lil-mt-4 lil-float-right lil-w-1/3 sm:lil-w-full" />
			
		</div>
	</form>
</div>
<div id="contact-sales-modal-success-wrapper" class="lil-hidden lil-text-center">
	<p class="lil-text-base lil-font-bold lil-text-font-500">Thank you for your response</p>
	<p id="success-message"	class="lil-text-base lil-text-font-500">Our representative will get in touch with you shortly.</p>
</div>

<style>
	.results-compaines p{
		overflow: hidden;
    	text-overflow: ellipsis;
		white-space: nowrap;
	}
	.results-compaines p:hover{
		overflow: visible;
		white-space: normal;
	}
</style>

<script>
	window.addEventListener('DOMContentLoaded', ()=>{
		/**
 *                 ****** AUTO COMPLETE *******
 * User can instansiate this functionality by simply calling the autoCompletFn
 * which takes param like
 * @arg {string} inputId - input element id you want to attach the autocomplete to 
 * @arg {string} results -  element id which will get populated with results 
 * @arg {function} callback - function will return the results in an array format to show in dropdown 
 * 
 * @returns {Object} - Object containing @callback getSelectedIndex which itself returns the selected index
 * 
 * 
 * @example autoCompletFn(`inputId`,`resultId`,apiCall).getSelectedIndex(index=>{
			selectedIndex = index
		})
 */

let autocomplete = {
    _inputNode:null,
    _query:"",
    _resultNode:null,
    _dataCb:null,
    selectedIndex:null,

    init:function(inputId,resultNodeId,getDataCb){
        autocomplete._inputNode = document.getElementById(inputId);
        autocomplete._resultNode = document.getElementById(resultNodeId);
        autocomplete._dataCb = getDataCb;
        autocomplete.bindInputChange();
        autocomplete.bindInputClick();

        return autocomplete;
    },

    outsideClickHandler:function(){
        var event = new Event('input', {
            bubbles: true,
            cancelable: true,
        });
        autocomplete._inputNode.dispatchEvent(event);
        autocomplete.hideResults();
        window.removeEventListener('click',autocomplete.windowClickHandler)
    },
    hideResults:function(){
        autocomplete._resultNode.classList.replace('lil-visible','lil-invisible')
    },

    showResults:function(){
        autocomplete._resultNode.classList.replace('lil-invisible','lil-visible')
    },

    getEmptyHtml:function(){
        return `<span class="lil-block lil-py-2 lil-text-grey-500 lil-text-s-14" >Sorry No Result Found</span>`
    },

    getResultsHtml:function(options){
        return  options.map(ele=>{
            boldEle = ele.slice(0, autocomplete._inputNode.value.length);
            normalEle = ele.slice(autocomplete._inputNode.value.length, ele.length);
            return `<p class="hover:lil-text-blue-350 lil-py-2 lil-text-s-14 lil-cursor-pointer"><b class="lil-text-black">${boldEle}</b>${normalEle}</p>`
        }).join('')
    },

    populate:async function(){
        //populateOptionFn this function should return an array of elements ["a","b","c"]
        let options = await autocomplete._dataCb(autocomplete._query);
        let html = options.length ? autocomplete.getResultsHtml(options):autocomplete.getEmptyHtml();
        autocomplete._resultNode.innerHTML = html;
        autocomplete.bindResultClick();
        autocomplete.showResults();
    },

    bindResultClick:function(){
        let resultNodes = autocomplete._resultNode.getElementsByTagName("p");
        for(let i=0;i<resultNodes.length;i++){
            resultNodes[i].addEventListener('click',autocomplete.resultClickHandler(resultNodes[i],i))
        }
    },

    resultClickHandler:function(optionsNode,index){
        return function(){
            autocomplete._inputNode.value = optionsNode.innerText;
            autocomplete._resultNode.innerHTML  = autocomplete.getResultsHtml([optionsNode.innerText]);
            autocomplete.getSelectedIndex(index);
            autocomplete.outsideClickHandler()
            autocomplete.hideResults();
        }
    },

    regisgerSelectedIndexCb:function(selectedCb){
        autocomplete.getSelectedIndex = selectedCb
    },
    bindInputClick:function(){
        autocomplete._inputNode.addEventListener('click',autocomplete.inputClickHandler)
    },

    inputClickHandler:function(){
        if(autocomplete._query){
            autocomplete.showResults();
        }
        window.addEventListener('click',autocomplete.windowClickHandler)
    },


    windowClickHandler:function(e) {
        if(!autocomplete._inputNode.contains(e.target) && !autocomplete._resultNode.contains(e.target)){
            autocomplete.outsideClickHandler()
        }
    },
    bindInputChange:function(){
        autocomplete._inputNode.addEventListener('input',autocomplete.inputChangeHandler)
    },
    
    inputChangeHandler:function(e){
        let {currentTarget,cancelable} = e
        if(!cancelable){
            autocomplete._query = currentTarget.value 
            autocomplete.getSelectedIndex(null);
            autocomplete.populate(autocomplete._query);
            e.stopImmediatePropagation()
        }
    }
}

let autoCompletFn =  function(inputId,resultId,cb){
    autocomplete.init(inputId,resultId,cb);
    return {getSelectedIndex:autocomplete.regisgerSelectedIndexCb}
}
		/**
 *                 ****** FORM VALIDATION *******
 * Simple Javascript Validaiton for input fields 
 * TO USE - Call getFormInstance function with the following arguments this will return 
 * a form instance of inputElements which itself will handle the validation and showing the error logic
 * 
 * @arg  {Object[]} formInputs - formInputs array this will contain all the inputs you want validation for
 * @arg {string} formInputs[].name - The name of the input field. Will show up when validation fails
 * @arg {string} formInputs[].inputEleId - The id of the input field.
 * @arg {Functions Array} formInputs[].validationArr - You can use the Validation class functions 
 * which will be used for validations You can extend this class and create new util functions for validation
 * but these funciton should return err and msg property
 * @arg {string} type - Type of input field 
 * @arg {string} apiKey - Use this field if you want to use getValues funciton of formInstance which will
 * return the key and value pair for the formgroup input fields 
 * 
 * @returns {Object} - FormInstance object
 * 
 * @example @see {@link _includes/v2/contactSales.html}
 * 
 */

class ValidationsClass {
    static isEmpty(value,name){
        if(!value){
            return {err:true,msg:`${name} can not be empty`}
        }
    }
    static isUnChecked(value,name){
        if(!value){
            return {err:true,msg:`${name} should be selected`}
        }
    }
    static maxLimit(limit){
        return function(value,name){
            if(value.length>limit){
                return {err:true,msg:`${name} can not be greater than ${limit} digits`}
            }
        }
    }
    static isNameValid(value,name){
        let regexp = /[^a-zA-Z,. ]/;
        if(regexp.test(value)){
            return {err:true,msg:`Name is not valid`}
        }
    }
    static isEmail(value,name){
        let emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!emailRegex.test(value)){
            return {err:true,msg:`Email is not valid`}
        }
        
    }
    static validDomain(emailID) {
        let BLACKLIST = ["gmail.com","yahoo.com","yahoo.co.in","rediffmail.com","hotmail.com","yahoo.in","updated.com","cleartax.in","id.in","xyz.com","nil.com","ymail.com","outlook.com","xx.xx","abc.com","live.com","mail.com","gamil.com","junk.com","gmai.com","abc.in","live.in","a.com","x.x","a.a","rediff.com","yahoo.co.uk","leads.com","in.ey.com","123.com","xx.x","xxx.com","aa.aa","redfm.in","zz.zz","yhaoo.co.in","yahoo.om","yahoo.com.au","yahoo.co","yahoo.ca","yaho.co.in","xxx.xx","x.xx","x.com","abad.in","123gmail.com","z.z","yohoo.com","ymail.in","ymail.co","yahoomail.co.in","yahooco.in","yahoo.on","yahoo.con","yahoo.comm","yahoo.com.sg","yahoo.com.in","yahoo.coin","yahoo.co.on","yahoo.co.om","yahoo.cim","yahoo.aco.in","yahho.com","xzy.com","xyz.in","xyz.c","xys.com","xxxx.xxx","xxx.xxx","xx.in","xx.com","143gmail.com","126.com","123.comk","ac.com"];
        let mailDomain = emailID.split("@")[1];
        let isValid = !BLACKLIST.some(function (domain) {
            return mailDomain === domain;
        })
        if(!isValid){
            return {err:true,msg:`Please enter a valid business email id`}
        }
    }
    static isPhoneNoValid(value,name){
        let phoneNoRegex =  /^(\s*[\(?])?(?:([\)]?)([\-])?|[0]?)?[6789]\d{9}$/
        if(!phoneNoRegex.test(value)){
            return {err:true,msg:`Phone number is not valid`}
        }
    }

    static customValidation(cb){
        return (value,name)=>cb(value,name)
    }
    
}

class inputElements {
    constructor(inputEleId,validationArr=[],type,name,onChangeCb,apiKey,initValue){
        this._initialValues = {inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue};
        this.init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue);
    }
    init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue=""){
      this._name = name;
      this._apiKey = apiKey
      this._validations = validationArr;
      this._type = type;
      this._inputEle = document.getElementById(inputEleId);
      this.valid = !validationArr || !validationArr.length ? true:false
      this.value = initValue
      this._onChangeCb = onChangeCb;
      this._inputEle.value = initValue;
      if(this._type=="checkbox"&&initValue){
        this._inputEle.checked = true
      }
      this.bindEle();
      this.createErrorNode();
    }
    bindEle(){
        this._inputEle.addEventListener('input',this.onChange.bind(this))
    }
    onChange({currentTarget}){
        let value = this._type=="checkbox"?currentTarget.checked:currentTarget.value
        this.validate(value);
        if(this._onChangeCb){
            this._onChangeCb(currentTarget,this)
        }
    }
   
    onError(error){
        this.insertErrorTxt(error.msg);
        this.showError();
        this.valid = false
        this.errorMsg = error.msg;
    }
    onSuccess(value){
        this.hideError();
        this.value = value
        this.valid = true;
        this._inputEle.setAttribute("value",value)
        this._inputEle.value = value
        if(this._type=="checkbox"&&value){
          this._inputEle.checked = true
        }
    }
    validate(value){
        if(this._validations.length){
            for(let i=0;i<this._validations.length;i++){
                let ele = this._validations[i];
                let error = ele(value,this._name);
                if(error && error.err){
                    this.onError(error)
                    break;
                }
                else{
                   this.onSuccess(value)
                }  
            }
        }
        else this.onSuccess(value)
    }
    insertErrorTxt(err){
        this._errorNode.innerText = err
    }
    hideError(){
        this._errorNode.style.display = "none";
    }

    showError(){
        this._errorNode.style.display = "inline-block";
    }

    createErrorNode(){
        let para = document.createElement("span");
        para.setAttribute('id', `${inputElements._inputEle}_error`);
        para.setAttribute('class','lil-text-red lil-text-s-10');
        this._errorNode = para;
        if(this._type=="checkbox"){
            this._inputEle.parentElement.insertAdjacentElement('afterend', this._errorNode);
        } else{
            this._inputEle.insertAdjacentElement('afterend', this._errorNode);
        }
    }

    reLoadEle(){
      this.init(this._initialValues.inputEleId, this._initialValues.validationArr,this._initialValues.type,this._initialValues.name,this._initialValues.onChangeCb,this._initialValues.apiKey,this._inputEle.initValue);
    }

}


class formGroup {
    _formEle={};
    constructor(formEleArr){
        this._formEle =  formEleArr.filter(Boolean).reduce(((resultObj,ele)=>{
            return {...resultObj,[ele.inputEleId]:new inputElements(ele.inputEleId,ele.validationArr,ele.type,ele.name,ele.onChangeCb,ele.apiKey,ele.initValue)}
        }),{})
    }
    isFormValid(){
        for (const key in this._formEle) {
            const element = this._formEle[key];
            if(element.valid == false) return false
        }
        return true
    }
    add({inputEleId,validationArr,type,name,onChangeCb,apiKey}){
        let inputInstance = new inputElements(inputEleId,validationArr,type,name,onChangeCb,apiKey)
        this._formEle[inputEleId] = inputInstance;
    }
    remove(id){
        delete this._formEle[id]
    }
    getValues(){
        let values = {}
        for (const key in this._formEle) {
            const element = this._formEle[key];
            values[element._apiKey]= element.value
        }
        return values
    }
    validateFormEle(){
        let errorObj = {};
        for(const key in this._formEle) {
            const element = this._formEle[key];
            element.validate(element.value);
            if( !element.valid )
                errorObj[element._name] = element.errorMsg;
        }
        return errorObj;
    }
    reload(){
      for(const key in this._formEle) {
        const element = this._formEle[key];
        element.reLoadEle()
      }
    }

}

var getFormInstance = (formEleArr)=>new formGroup(formEleArr)

		const formId = 'contact-sales-modal';
		let selectedIndex ;
		let isWhatsAppConsentPresent;
		let errorObj;
		if('enterprise' == 'tally' || 'enterprise' == 'e-invoicing-enterprise-software'){
			isWhatsAppConsentPresent= true
    	}
		if('v2' != "ksa-einvoicing" 
			&& 'v2' != "ksa-einvoicing-ar"
			&& '' != "ksa-einvoicing"
			&& '' != "ksa-einvoicing-ar"){
				autoCompletFn(`${formId}-company-name`,`${formId}-companies-options`,getCompanyName).getSelectedIndex(index=>{
					selectedIndex = index
				})
			}
		
	


		if('v2' === "ksa-einvoicing" 
			|| 'v2' === "ksa-einvoicing-ar"
			|| '' === "ksa-einvoicing"
			|| '' === "ksa-einvoicing-ar"){
		
			formValidateObj = [
				{name:"Name",inputEleId:`${formId}-username`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username"},
				{name:"Phone No",inputEleId:`${formId}-phoneno`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"PhoneNo"},
				{name:"Email",inputEleId:`${formId}-emailid`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail],type:"text",apiKey:"Email"},
				{name:"Company Name",inputEleId:`${formId}-company-name`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"CompanyName"},
				{name:"Number of Invoices",inputEleId:`${formId}-numberInvoices`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"InvoicesNumber"},
				{name:"isd",inputEleId:`${formId}-isd`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"ISD"},
				{name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"},
				{name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"}

			]
		}else{

			formValidateObj = [
				{name:"Name",inputEleId:`${formId}-username`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username"},
				{name:"Phone No",inputEleId:`${formId}-phoneno`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isPhoneNoValid],type:"text",apiKey:"PhoneNo"},
				{name:"Email",inputEleId:`${formId}-emailid`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail,ValidationsClass.validDomain],type:"text",apiKey:"Email"},
				{name:"Company Name",inputEleId:`${formId}-company-name`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"CompanyName"},
				{name:"Company Designation",inputEleId:`${formId}-designation`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleDesignation,apiKey:"Designation"},
				{name:"Company Designation Other",inputEleId:`${formId}-designation-other`,validationArr:[],type:"text",apiKey:"DesignationOther"},
				{name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"},
				{name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"}
			]
		}



		let formInstance = getFormInstance(formValidateObj)



		if(isWhatsAppConsentPresent){
			formInstance.add({name:"Whatsapp Consent",inputEleId:`${formId}-waconsent`,validationArr:[],type:"checkbox",apiKey:"waconsent"})
		}

		if('v2' == "ksa-einvoicing" 
			|| 'v2' == "ksa-einvoicing-ar"
			|| '' == "ksa-einvoicing"
			|| '' == "ksa-einvoicing-ar"){
			formInstance.add({name:"isd",inputEleId:`${formId}-isd`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"ISD"});
			formInstance.add({name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"companyERP"},);
			formInstance.add({name:"Allow to contact",inputEleId: `${formId}-accept-call`,validationArr:[ValidationsClass.isUnChecked],type:"checkbox",apiKey:"acceptCall"});
		}else{
			formInstance.add({name:"Company ERP",inputEleId:`${formId}-company-ERP`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleErp,apiKey:"companyERP"});
			formInstance.add({name:"Company ERP Other",inputEleId:`${formId}-companyerp-other`,validationArr:[],type:"text",apiKey:"companyERPOther"});
		}



		function handleDesignation(target) {
			if(target.value == 'Other'){
				document.getElementById(`${formId}-designation-other`).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`${formId}-designation-other`).classList.add('lil-hidden');
			}
		};

		function handleErp(target) {
			if(target.value == 'Others'){
				document.getElementById(`${formId}-companyerp-other`).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`${formId}-companyerp-other`).classList.add('lil-hidden');
			}
		};

		function customValidator(value){
			if(selectedIndex==null || selectedIndex==undefined){
				return {err:true,msg:`Company name is not valid`}
			}
		}
		let foldLabel;
		let submitBtn = document.getElementById(`${formId}-submit-form`)
		submitBtn.addEventListener('click',(e)=>{
			foldLabel =  track_Label;
      const downloadWhitepaperLabel = "fold_end_to_end_solution_Download Whitepaper_button_Download Whitepaper  →"
			track_Label = ('') ? ('' + '_' + e.target.value) : '';
			track_Value = '{}redirect_url :: ' + e.target.href + '{}FormType :: contact-sales';
			if(formInstance.isFormValid()){
				let formdata = formInstance.getValues()
				let userData = {...formdata,
					companyERP:formdata.companyERP=="Others"?formdata.companyERPOther:formdata.companyERP,
					Designation:formdata.Designation=="Other"?formdata.DesignationOther:formdata.Designation,
					"utm-source" :new URL(window.location.href).searchParams.get("utm_source"),
					"utm-campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
					PageURL :window.location.href,
					Date :new Date(new Date()).toDateString(),
      				Time:new Date(new Date()).toLocaleTimeString(),
					"Downloaded-Whitepaper": downloadWhitepaperLabel == foldLabel?"Yes":"No",
				}
				if(isWhatsAppConsentPresent){
					userData.waconsent = formdata.waconsent?"Yes":"No";
				}
				submitBtn.classList.add('lil-btn-disabled');
				submitForm(userData)
			}
			else{
				trackFormSubmit(formId, 'Error')
				formInstance.validateFormEle()
			}

		})

		function getUserData (userName,phoneNum,workmail,isd,erp,numbrInvoice,CompanyName=""){
			return {
				"leadPlatforms": {
					"google_sheet": {
						"sheet_name": "ksaRAD"
					},
					"salesforce": true
				},
				"leadData": {
					"type": "GCC-contact-sales-form",
					"typeName": "Tax Experts",
					"data": {
						"name": userName,
						"phone_number": phoneNum,
						"email": workmail,
						"ISD": isd,
						"company_erp": erp,
						"InvoicesNumber": numbrInvoice,
						"company_name": CompanyName,
						"PageURL":  window.location.href,
                        "Date": new Date(new Date()).toDateString(),
                        "Time": new Date(new Date()).toLocaleTimeString()
					}
				}
			}
		}
		function postToCommonAddLead(formData){
			const {Username,PhoneNo,Email,ISD,companyERP,CompanyName,InvoicesNumber} = formData;
          $.ajax({
            url:window.location.origin + "/f/common-lead/common-add-lead",
            type:"POST",
            data: JSON.stringify(getUserData(Username,PhoneNo,Email,ISD,companyERP,InvoicesNumber,CompanyName)),
            processData: false,
    				headers: {
              "Content-Type": "application/json",
            },
            dataType: "json",
            success: function(){
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById(`${formId}-success-wrapper`)
				.classList.remove("lil-hidden");
				document.getElementById(`${formId}-wrapper`).classList.add("lil-hidden");
				trackFormSubmit(formId, 'Success');
            },
            error: function(){
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector(`${formId}-error-msg`).innerHTML = "Request failed! Please try again.";
				trackFormSubmit(formId, 'Failure');
			 } 
          })
		}

		function submitForm(formData){

			trackFormSubmit(formId, 'Submit');

			let url
			if('/s/v2/enterprise/' == "/s/contact-sales-tds-206/"){
				url = `https://script.google.com/macros/s/AKfycbx5gux0ib9YiQ5oCsN3s6Nx8a0QIsXrpJK96RSM_DnBkd5g7aCoczSKYEXOuWhetfhs/exec?${new URLSearchParams(formData)}`
			} else if('enterprise' == "maxitc"){
				url = `https://script.google.com/macros/s/AKfycbzlu8dUsDt88M4rSq7C8IaW_ck2mOC7uo2IZ--fO4AiroO7jI3Bt0xSkrBKe8p6-MDruw/exec?${new URLSearchParams(formData)}`
			} else if(('' == "ksa-einvoicing" || '' == "ksa-einvoicing-ar")|| 'v2' == 'ksa-einvoicing'){
				postToCommonAddLead(formData);
				return;
			} else{
				url = `https://script.google.com/macros/s/AKfycbyITE9Bs96Ala1wb6TqqgIWx6-cgscA6JFlsPydAe0p2Kgni5YU/exec?${new URLSearchParams(formData)}`
			}
			fetch(url)
			.then(response => response.json())
  			.then(data => {
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById(`${formId}-success-wrapper`)
				.classList.remove("lil-hidden");
				document.getElementById(`${formId}-wrapper`).classList.add("lil-hidden");
				let category = 'enterprise';
				if(category === 'tally' || category === 'e-invoicing-enterprise-software' ){
					loadTallyScripts();
				}
				trackFormSubmit(formId, 'Success');
				
			  })
			.catch(err=>{
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector(`${formId}-error-msg`).innerHTML = "Request failed! Please try again.";
				trackFormSubmit(formId, 'Failure');
			})
		}
		async function getCompanyName(query){
			try{
				let response  = await fetch(`https://cleartax.in/f/company/search?query=${query}`)
				let data =  JSON.parse(await response.json());
				if(data.length){
						return data.map((ele)=>{
							if(ele && ele.fields && ele.fields.company_name){
								return ele.fields.company_name
							}
						})
					}
					else return []
			}
			catch(e){
				return []
			}
		}
	})
	

</script>

	</div>
</div>
<div class="lil-modal-overlay"></div><!--  -->
<div class="lil-fixed lil-left-0 lil-bottom-0 lil-bg-white lil-w-full lil-py-4 lil-z-40 lil-flex lil-items-center lil-px-2 " id="sticky-rad"> 
	<a onclick="handleTrack({label: 'sticky_bottom_button', obj: this})" class="lil-btn lil-btn-blue lil-w-full" href="contactSales.php" target="_blank">
		Request a demo
	</a>
</div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
    
    
</div>
    </div>
</div>
<style>
    .footerStyle .lil-footer-text{
     color: #C0CBD9;
    }
    .footerStyle hr{
    height: 0.5px;
    border: none;
    color: #C0CBD9;
    background-color: #C0CBD9;
    }
    .footerStyle .footer-custom-button-group .gap{
     gap: 10px;   
    }
    .footerStyle ul {
        margin-bottom: 20px;
        padding-right: 5px;
        padding-left: 5px;
    }
    .footerStyle ul li a{
        color:  #929FB0;
        font-weight: 400;
    }
    .footerStyle .footer-custom-button-group ul li a{
        border: .5px solid #C0CBD9;
        background: rgba(146, 159, 176, 0.2);
        border-radius: 4px;
        padding: 2px 12px;
    }
    
    .footerStyle ul li a:hover{
        color: #fff;
        text-decoration: underline;
    }
    .footerStyle ul li a:focus{
        color: #fff;
        text-decoration: underline;
    }
    .footerStyle .footer-custom-button-group ul li a:hover{
        border: .5px solid #fff;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 4px;
        color: #314259;
        padding: 2px 12px;
        text-decoration: none;
    }
    @media (max-width: 767px){
.sm\:lil-flex-row {
    flex-direction: row;
}
.sm\:lil-flex-col {
    flex-direction: column;
}
}
@media (min-width: 768px) and (max-width: 1023px){
.md\:lil-flex-row {
    flex-direction: row;
}
.md\:lil-flex-col {
    flex-direction: col;
}
}
</style>



<script>
	
var closeModal = function(modal) {
  if(!modal) return;
  modal.classList.remove('lil-modal-open');
  modal.nextElementSibling.classList.remove('lil-block');
};

var toggleModal = function(options) {
  if (!options.id) return;
  var modal = document.getElementById(options.id);
  if (modal) {
    if (!modal.classList.contains('lil-modal-open')) {
      modal.classList.add('lil-modal-open');
      
      modal.nextElementSibling.classList.add('lil-block');
    } else {
      closeModal(modal);
    }
  }
};

</script>
<script type="text/javascript" src="https://assets1.cleartax-cdn.com/content-prod/3rdparty/jquery/jquery-2.2.1.min.js"></script>

<script>
	function createAppointment(dateTimeDetails){
  var jqxhr = $.ajax({
    url: "https://cleartax.in/f/common-lead/common-add-lead",
    type: "POST",
    dataType: "json",
    data: JSON.stringify(dateTimeDetails),
    headers: {
      "Content-Type": "application/json",
    },
    success: function success(data) {
      if (data.response !== "failure") {
        console.log('sucess timeslot')
      } else {
        alert("Something went wrong");
      }
    },
    error: function failure() {
      if (errorCallback && typeof errorCallback === 'function') {
        errorCallback();
      }
      alert("Something went wrong");
    },
  });
};

function addCommonLeads(data, email, callback, errorCallback) {
  var jqxhr = $.ajax({
    url: window.location.origin + "/f/common-lead/common-add-lead",
    type: "POST",
    dataType: "json",
    data: JSON.stringify(data),
    processData: false,
    headers: {
      "Content-Type": "application/json",
    },
    success: function success(data) {
      if (data.response !== "failure") {
        callback(email);
      } else {
        alert("Something went wrong");
      }
    },
    error: function failure() {
      if (errorCallback && typeof errorCallback === 'function') {
        errorCallback();
      }
      alert("Something went wrong");
    },
  });
};

  
function addLeads(data, email, callback, errorCallback) {
    var jqxhr = $.ajax({
      url: "https://cleartax.in/f/leadservice/add-lead",
      type: "POST",
      dataType: "json",
      data: JSON.stringify(data),
      processData: false,
      headers: {
        "Content-Type": "application/json",
      },
      success: function success(data) {
        if (data.response !== "failure") {
          callback(email);
        } else {
          alert("Something went wrong");
        }
      },
      error: function failure() {
        if (errorCallback && typeof errorCallback === 'function') {
          errorCallback();
        }
        alert("Something went wrong");
      },
    });
  };
  

function createActivity(event, note, emailAddress, callback, errorCallback) {
    var payload = {
      EmailAddress: emailAddress,
      ActivityEvent: event,
      ActivityNote: note,
      ActivityDateTime: new Date()
        .toISOString()
        .replace(/T/, " ")
        .replace(/\..+/, ""),
    };
    var jqxhr = $.ajax({
      url: "https://cleartax.in/f/leadservice/add-activity",
      method: "POST",
      dataType: "json",
      processData: false,
      data: JSON.stringify(payload),
      headers: {
        "Content-Type": "application/json",
      },
      success: function success(data) {
        if (data.response != "failure") {
          if (callback && typeof callback === 'function') {
            callback();
          }
        } else {
          alert("Something went wrong");
        }
      },
      error: function failure() {
        if (errorCallback && typeof errorCallback === 'function') {
          errorCallback();
        }
        alert("Something went wrong");
      },
    });
  };



</script>

<script>
	// function validateAndSubmitContactForm(evt, id, sectionLocation, category) {
//   if (evt) evt.preventDefault();
//   var emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//   var email = document.getElementById(id + "-emailid");
//   var phone = document.getElementById(id + "-phoneno");
//   var companyName = document.getElementById(id + "-company-name");
//   var designation = document.getElementById(id + "-designation");
//   var username = document.getElementById(id + "-username");
//   var companyERP = document.getElementById(id + "-company-ERP");
//   var designationOther = document.getElementById(id + "-designation-other");
//   var companyerpOther = document.getElementById(id + "-companyerp-other");

//   var isValid = true;
//   var emailVal = email.value.trim();
//   var phoneVal = phone.value;
//   var companyVal = companyName.value;
//   var designationVal = designation.value;
//   var nameVal = username.value;
//   var companyERPVal = companyERP.value;
//   var defaultLen=56;

//   var isValidDomain = function (emailID) {
//     if(emailID.length > defaultLen) return false;
//     var BLACKLIST = ["gmail","Yahoo","Hotmail","Live","Rediffmail","Outlook","Mail"];
//     var mailDomain = emailID.split("@")[1].split(".")[0];
//     return !BLACKLIST.some(function (domain) {
//       return mailDomain.toLowerCase() === domain.toLowerCase();
//     });
//   };
//   if (!emailVal || emailVal == "") {
//     isValid = false;
//     email.nextElementSibling.innerHTML = "Please enter your email id";
//   } else if (!emailRegex.test(emailVal)) {
//     isValid = false;
//     email.nextElementSibling.innerHTML = "Please enter a valid email ID";
//   } else if (!isValidDomain(emailVal)) {
//     isValid = false;
//     email.nextElementSibling.innerHTML = "Please enter a business email ID";
//   }
//   if (!phoneVal || phoneVal == "") {
//     isValid = false;
//     phone.nextElementSibling.innerHTML = "Please enter your phone number";
//   } else if (phoneVal.length != 10 || isNaN(phoneVal)) {
//     isValid = false;
//     phone.nextElementSibling.innerHTML = "Please enter a valid phone number";
//   }
//   if (!companyVal || companyVal == "") {
//     isValid = false;
//     companyName.nextElementSibling.innerHTML = "Please enter your company name";
//   }
//   if (companyVal.length > defaultLen) {
//     isValid = false;
//     companyName.nextElementSibling.innerHTML = "Company Name should be <" + defaultLen+ " chars";
//   }
//   if (!designationVal || designationVal == "") {
//     isValid = false;
//     designation.nextElementSibling.innerHTML = "Please enter your designation";
//   }
//   if(designationVal === 'Other' && designationOther.value.length > defaultLen) {
//     isValid = false;
//     designation.nextElementSibling.innerHTML = "Please enter designation <" + defaultLen+ " chars";
//   }
//   if (!nameVal || nameVal == "") {
//     isValid = false;
//     username.nextElementSibling.innerHTML = "Please enter your name";
//   }
//   if (nameVal.length > defaultLen) {
//     isValid = false;
//     username.nextElementSibling.innerHTML = "Name should be <" + defaultLen+ " chars";
//   }
//   if (!companyERPVal || companyERPVal == "") {
//     isValid = false;
//     companyERP.nextElementSibling.innerHTML = "Please enter your company ERP";
//   }
//   if(companyERPVal === 'Others' && companyerpOther.value.length > defaultLen) {
//     isValid = false;
//     companyERP.nextElementSibling.innerHTML = "Please enter ERP <" + defaultLen+ " chars";
//   }
//   if (!isValid) {
//     evt.preventDefault();
//   } else {
//     var waconsent = document.getElementById(id + "-waconsent");
//     var url =
//       "https://script.google.com/macros/s/AKfycbyITE9Bs96Ala1wb6TqqgIWx6-cgscA6JFlsPydAe0p2Kgni5YU/exec";
//     var utmSource = new URL(window.location.href).searchParams.get("utm_source");
//     var utmCampaign = new URL(window.location.href).searchParams.get(
//       "utm_campaign"
//     );
//     var designationOther = document.getElementById(id + "-designation-other");
//     var companyerpOther = document.getElementById(id + "-companyerp-other");
//     var pageURL = window.location.href;
//     var designationValue = designationVal === "Other" ? designationOther.value : designationVal;
//     var erpValue = companyERPVal === "Others" ? companyerpOther.value : companyERPVal;
//     var userData = {
//       Username: username.value,
//       Email: emailVal,
//       PhoneNo: phoneVal,
//       CompanyName: companyVal,
//       Designation: designationValue,
//       companyERP: erpValue,
//       "utm-source": utmSource,
//       "utm-campaign": utmCampaign,
//       PageURL: pageURL,
//       Date: new Date(new Date()).toDateString(),
//       Time: new Date(new Date()).toLocaleTimeString(),
//     };
//     if('enterprise' == 'tally' || 'enterprise' == 'e-invoicing-enterprise-software'){
//       userData['Whatsapp_Consent'] =  waconsent.checked ? "Yes" : "No";
//     }
//     var submitBtn = document.getElementById(id + '-submit-form');
//     submitBtn.classList.add('lil-btn-disabled');
//     var jqxhr = $.ajax({
//       url: url,
//       method: "GET",
//       dataType: "json",
//       data: userData,
//       success: function () {
//         submitBtn.classList.remove('lil-btn-disabled');
//         document
//           .getElementById(id + "-success-wrapper")
//           .classList.remove("lil-hidden");
//         document.getElementById(id + "-wrapper").classList.add("lil-hidden");
//         if(category === 'tally' || category === 'e-invoicing-enterprise-software' ){
//           loadTallyScripts();
//         }
//       },
//       error: function () {
//         submitBtn.classList.remove('lil-btn-disabled');
//         document.querySelector('.' + id + "-error-msg").innerHTML = "Request failed! Please try again.";
//       },
//     });
//     if (sectionLocation){
//       ct_internalTracking('enterprise', 'Click', 'contact_sales_submit', sectionLocation);
//     }else{
//       var modalLocation = document.getElementById(id + '-wrapper').parentElement.dataset.foldLocation;
//       ct_internalTracking('enterprise', 'Click', 'contact_sales_submit', modalLocation);
//     }
//   }
// };

// function handleDesignation(e, id) {
//   if (e.target.value === 'Other') {
//     document.getElementById(id + "-designation-other").classList.remove('lil-hidden');
//   } else {
//     document.getElementById(id + "-designation-other").classList.add('lil-hidden');
//   }
// };
// function handleErp(ev) {
//   var formid = ev.target.dataset.identifier;
//   if(ev.target.value === 'Others') {
//     document.getElementById(formid + '-companyerp-other').classList.remove('lil-hidden');
//   } else {
//     document.getElementById(formid + '-companyerp-other').classList.add('lil-hidden');
//   }
// };

// $(document).ready(function() {
//   $(".contact-sales-form").each(function() {
//     var form = this;
//     form.addEventListener("submit", function(ev) {
//       ev.preventDefault();
//       var formid = ev.target.dataset.identifier;
//       var foldLoc = ev.target.dataset.location;
//       var category = ev.target.dataset.category;
//       validateAndSubmitContactForm(ev, formid, foldLoc, category);
//     });
//   })
// });


</script>

<script>
	

function validateNumberonInput(id) {
  let OninputPhoneRegex = /^[6-9]\d{9}$/;
  phone = document.getElementById(id + "-phoneno");
  let phoneVal = phone.value;
  if (!phoneVal || phoneVal == "") {
    phone.nextElementSibling.innerHTML = "Please enter your phone number";
  } else if (phoneVal.length != 10 || isNaN(phoneVal) || OninputPhoneRegex.test(phoneVal) == false) {
    phone.nextElementSibling.innerHTML = "Please enter a valid phone number";
  }
  else {
    phone.nextElementSibling.innerHTML = "";
  }
  }


function validateAndSubmitDemoForm(evt, id) {
  if (evt) evt.preventDefault();
  var emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var email = document.getElementById(id + "-emailid");
  var phone = document.getElementById(id + "-phoneno");
  var username = document.getElementById(id + "-username");
  var category = document.getElementById(id + "-category");
  var phoneRegex = /^[6-9]\d{9}$/;

  var isValid = true;
  var emailVal = email.value.trim();
  var phoneVal = phone.value;
  var categoryVal = category.value;
  var nameVal = username.value;

  if (!emailVal || emailVal == "" || !emailRegex.test(emailVal)) {
    isValid = false;
    email.nextElementSibling.innerHTML = "Please enter your email id";
  }
  if (!phoneVal || phoneVal == "") {
    isValid = false;
    phone.nextElementSibling.innerHTML = "Please enter your phone number";
  } else if (phoneVal.length != 10 || isNaN(phoneVal) || phoneRegex.test(phoneVal) == false) {
    isValid = false;
    phone.nextElementSibling.innerHTML = "Please enter a valid phone number";
  }
  if (!categoryVal || categoryVal == "") {
    isValid = false;
    category.nextElementSibling.innerHTML = "Please enter category";
  }
  if (!nameVal || nameVal == "") {
    isValid = false;
    username.nextElementSibling.innerHTML = "Please enter your name";
  }
  if (!isValid) {
    trackFormSubmit(id, 'Error');
    evt.preventDefault();
  } else {
    submitRequestDemoForm(id);
  }
}


function submitRequestDemoForm(id) {
  var email = document.getElementById(id + "-emailid");
  var phone = document.getElementById(id + "-phoneno");
  var username = document.getElementById(id + "-username");
  var category = document.getElementById(id + "-category");
  var waconsent = document.getElementById(id + "-waconsent");
  var currentUrl = new URL(window.location.href);
  var utm_source = currentUrl.searchParams.get("utm_source");
  var sourceOrigin = document.referrer.slice(0, 19);
  var sourceURL = sourceOrigin !== "https://cleartax.in" ? document.location.href : document.referrer;

  trackFormSubmit(id, 'Submit');

  var leadsData = {
    leadType: "GST",
    leadName: username.value,
    leadEmail: email.value,
    leadPhoneNo: phone.value,
    note: "Lead from GST Profile Creation page",
    customAttributesMap: {
      marketingSource: utm_source,
      userTypeForm: category.value,
      Whatsapp_Consent: waconsent.checked ? "Yes" : "No",
    },
    leadSourcePage: "ClearTax GST Software",
    leadSourceUrl: currentUrl,
    referenceURL: currentUrl,
    leadCreationTime: Math.floor(new Date().getTime() / 1000),
  };
  var submitBtn = document.getElementById(id + "-submit-form");
  submitBtn.classList.add('lil-btn-disabled');
  addLeads(leadsData, email.value, function() {

    createActivity(483, 'Interested in ClearTax GST Software', email.value);
    createActivity(485, sourceURL, email.value, function() {
      if( '/s/v2/enterprise/' == "/s/gst-return-filing-software/"){
        window.location.href = 'https://cleartax.in/s/gst-filing-software-thank-you'
      } else{
        submitBtn.classList.remove('lil-btn-disabled');
        document
          .getElementById(id + "-success-wrapper")
          .classList.remove("lil-hidden");
        document.getElementById(id + "-wrapper").classList.add("lil-hidden");
      }

      trackFormSubmit(id, 'Success');

    }, function () {
      submitBtn.classList.remove('lil-btn-disabled');
    });
  }, function () {
    submitBtn.classList.remove('lil-btn-disabled');
  });
};
</script>
<script>
	
function onScrollActiveTabUtil() {
  var curScrollDistance = window.scrollY;
  
  const allTabs = document.querySelectorAll(".lil-tabs li");
  
  const contentTabs = document.querySelectorAll(".lil-tab-content");
  
  for (var i=0; i<contentTabs.length; i++) {
    
    if (
      contentTabs[i].offsetTop <=
      curScrollDistance + allTabs[i].clientHeight
    ) {
      var activeTab = document.querySelector(".lil-tabs li.lil-tab-active");
      activeTab.classList.remove("lil-tab-active");
      allTabs[i].classList.add("lil-tab-active");
    }
  }
};

function CustomTab(tabId, options) {
  this.tabId = tabId;
  this.options = options || {};
  this.currentIndex = this.options.index || 0;
  this.autoSwitcher = null;
  this.tabCtas = [];
  this.getInterval = function () {
    var switchTime = this.options.duration || 2000;
    var context = this;
    return setInterval(function () {
      if (context.currentIndex === context.tabCtas.length - 1) {
        context.tabSwitchHandler(0);
      } else {
        context.tabSwitchHandler(context.currentIndex + 1);
      }
    }, switchTime);
  };
  this.init();
};
CustomTab.prototype.init = function () {
  if (this.options.scrollableTab) {
    window.addEventListener("scroll", onScrollActiveTabUtil);
    return;
  }
  
  if (this.options.activeClass && this.options.contentIdentifier) {
    var tabCtaList = document.querySelector(this.tabId + " ul");
    this.tabCtas = tabCtaList.querySelectorAll(".lil-tab-cta");
    var context = this;
    
    for (var i=0; i<context.tabCtas.length; i++) {
      (function(index) {
        context.tabCtas[index].addEventListener("click", function () {
          clearInterval(context.autoSwitcher);
          context.tabSwitchHandler(index);
          if (context.options.autoSwitch) {
            context.autoSwitcher = context.getInterval.apply(context);
          }
        });
      })(i);
    }
    
    
    if (this.options.autoSwitch) {
      this.autoSwitcher = this.getInterval.apply(this);
    }
  } else {
    console.log("Unable to intialize custome tabs");
  }
};

CustomTab.prototype.destroy = function () {
  this.tabCtas = [];
  clearInterval(this.autoSwitcher);
};

CustomTab.prototype.tabSwitchHandler = function (index) {
  var tabContents = document.querySelectorAll(
    this.tabId + " ." + this.options.contentIdentifier
  );
  var context = this;
  
  for (var contentIndex=0; contentIndex<tabContents.length; contentIndex++) {
    if (index === contentIndex) {
      tabContents[contentIndex].classList.remove("lil-hidden");
      context.tabCtas[contentIndex].classList.add(context.options.activeClass);
      context.currentIndex = index;
    } else {
      tabContents[contentIndex].classList.add("lil-hidden");
      context.tabCtas[contentIndex].classList.remove(
        context.options.activeClass
      );
    }
  }
};

function productImageHandler(tabId, options) {
  
  products = document.querySelectorAll(tabId + " ." + options.tabIndentifier);
  
  for (var index=0; index<products.length; index++) {
    (function(index) {
      products[index].addEventListener("mouseover", function () {
          var images = document.querySelectorAll(
            tabId + " ." + options.imageIndentfier
          );
          for (var contentIndex=0; contentIndex<images.length; contentIndex++) {
            if (index === contentIndex) {
              images[contentIndex].classList.remove("lil-hidden");
            } else {
              images[contentIndex].classList.add("lil-hidden");
            }
          }
      });
    })(index);
  }
};

</script>
<script>
	(function(){
		new CustomTab('#product-ecosystem-tab', {
			align: 'horizontal',
			activeClass: 'lil-capsule-tab-active',
			contentIdentifier: 'lil-capsule-tab-content',
		});
		new CustomTab('#org-ecosystem-tab', {
			align: 'vertical',
			activeClass: 'lil-promise-tab-active',
			contentIdentifier: 'verticalPromiseTabsContent',
		});
		new CustomTab('#customer-ecosystem-tab', {
			align: 'vertical',
			activeClass: 'lil-promise-tab-active',
			contentIdentifier: 'verticalPromiseTabsContent',
		});
		new CustomTab('#vendor-ecosystem-tab', {
			align: 'vertical',
			activeClass: 'lil-promise-tab-active',
			contentIdentifier: 'verticalPromiseTabsContent',
		});
		const smallScreen = (window.innerWidth < 768);
		new CustomTab('#flexible-ingest-tab', {
			align: 'horizontal',
			activeClass: 'lil-capsule-tab-active',
			contentIdentifier: 'lil-capsule-tab-content',
			autoSwitch: !smallScreen,
			duration: 5000,
		});
	})();
	
</script>
<link href="https://assets1.cleartax-cdn.com/cleartax-frontend/slick/1604995700_slick.css" rel="stylesheet">
<script type="text/javascript" src="https://assets1.cleartax-cdn.com/content-prod/3rdparty/jquery/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="https://assets1.cleartax-cdn.com/cleartax-frontend/slick/1603112319_slick.min.js"></script>
<script>
	$(document).ready(function(){
		const settingsVerticalTab = {
			infinite: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			responsive: [
			{
				breakpoint: 768,
				settings: {
				dots: true,
				dotsClass: "custom-dots", //slick generates this <ul.custom-dots> within the appendDots container
				customPaging: function (slider, i) {
					//is required to use our custom dots
					return '<a class="dot" role="button"></a>';
				},
				},
			},
			],
		};

		const settingsBranding = {
			autoplay: true,
			autoplaySpeed: 2500,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed:1000,
			arrows:false,
			centerMode: true,
			centerPadding: '10%',
			responsive : [
				{
					breakpoint: 1280,
					settings: {
						centerMode:true,
						centerPadding: '10%'
					}
				},{
					breakpoint: 1000,
					settings: {
						centerMode:true,
						centerPadding: '5%'
					}
				},
				{
					breakpoint: 768,
					settings: {
						centerMode:false,
						centerPadding: '0%'
					}
				}
			]
		}

		if (window.innerWidth < 768) {
		$("#statsSlick").slick(settingsVerticalTab);
		$("#ingestionSlick").slick(settingsVerticalTab);
	}
	$("#brandSlick").slick(settingsBranding);
	})
</script>

<script>
	var modalCTA = document.getElementById("sticky-rad");
	var hideAndShowCTA = function () {
  	var pageHeight = 450; 
  	var y = window.scrollY;
  	if (y >= pageHeight &&  window.innerWidth < 400) {
      modalCTA.style.bottom = "0px";
  	} else {
      modalCTA.style.bottom = "-100px";
  	}
};
window.addEventListener("scroll", hideAndShowCTA);
</script>
	<script>
 var LOGOUT_API = '/f/auth/logout';
/* Utils */
function getCookie (name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
};

function toggleDisplay (el) {
    try {
        if (el.classList.contains('lil-hidden')) {
            el.classList.remove('lil-hidden');
        } else {
            el.classList.add('lil-hidden');
        }
    } catch(err) {
        console.error(err);
    }
}
var isElementVisibleOnScreen = function (element) {
    var rect = element.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
    var isVisible = (elemTop < window.innerHeight) && (elemBottom >= 0);
    return isVisible;
}

function handleSignOut() {
    if (window.innerWidth > 767) {
        var loginWrapper = document.getElementById('nav-login-container');
        var myAccountWrapper = document.getElementById('nav-my-account-container');
        if(loginWrapper){
            toggleDisplay(loginWrapper);
        }
        if(myAccountWrapper){
            toggleDisplay(myAccountWrapper);
        }
    } else {
        var mobLoginWrapper = document.querySelector('#mobile-header-sidenav #nav-login-container');
        var mobMyAccountWrapper = document.querySelector('#mobile-header-sidenav #nav-my-account-container');
        var mobLogoutWrapper = document.querySelector('#mobile-header-sidenav #nav-mobile-logout');
        if(mobLoginWrapper){
            toggleDisplay(mobLoginWrapper);
        }
        if(mobMyAccountWrapper){
            toggleDisplay(mobMyAccountWrapper);
        }
        if(mobLogoutWrapper){
            toggleDisplay(mobLogoutWrapper);
        }
    }
    const loggedOutContainer = document.querySelectorAll(".nav-logged-out-container");
    if(loggedOutContainer){
        for (let i = 0; i < loggedOutContainer.length; i++) {
            toggleDisplay(loggedOutContainer[i]);
        }
    }
    const loggedInContainer = document.querySelectorAll(".nav-logged-in-container");
    if(loggedInContainer){
        for (let i = 0; i < loggedInContainer.length; i++) {
            toggleDisplay(loggedInContainer[i]);
        }
    }
}

var logout = function() {
    userlogout()
        .then(handleSignOut)
        .catch(function(x){});
};

var userlogout = function(){
    return new Promise(function (resolve, reject) {
        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.open("GET", LOGOUT_API);
        xhr.setRequestHeader("accept", "application/json");
        xhr.setRequestHeader("content-type", "application/json");
        xhr.send();

        xhr.addEventListener("load", function () {
            if (this.status === 200) {
                resolve(this.responseText);
            } else {
                reject(JSON.parse(this.responseText));
            }
        });
    });
};

/* */
/* for global headers */
;(function() {

    function handleSignIn() {
        if (window.innerWidth > 767) {
            var loginWrapper = document.getElementById('nav-login-container');
            var myAccountWrapper = document.getElementById('nav-my-account-container');
            if(loginWrapper){
                toggleDisplay(loginWrapper);
            }
            if(myAccountWrapper){
                toggleDisplay(myAccountWrapper);
            }
        } else {
            var mobLoginWrapper = document.querySelector('#mobile-header-sidenav #nav-login-container');
            var mobMyAccountWrapper = document.querySelector('#mobile-header-sidenav #nav-my-account-container');
            var mobLogoutWrapper = document.querySelector('#mobile-header-sidenav #nav-mobile-logout');
            if(mobLoginWrapper){
                toggleDisplay(mobLoginWrapper);
            }
            if(mobMyAccountWrapper){
                toggleDisplay(mobMyAccountWrapper);
            }
            if(mobLogoutWrapper){
                toggleDisplay(mobLogoutWrapper);
            }
        }
        const loggedOutContainer = document.querySelectorAll(".nav-logged-out-container");
        if(loggedOutContainer){
            for (let i = 0; i < loggedOutContainer.length; i++) {
                toggleDisplay(loggedOutContainer[i]);
            }
        }
        const loggedInContainer = document.querySelectorAll(".nav-logged-in-container");
        if(loggedInContainer){
            for (let i = 0; i < loggedInContainer.length; i++) {
                toggleDisplay(loggedInContainer[i]);
            }
        }

    }

    // checking login status
    var checkLoginStatus = () =>{
        fetch(`/f/retcon/me/`,{
                method: 'GET',
                credentials: 'include',
            })
            .then(response => response.json())
            .then(data => {
                if(data.anon_id){
                    document.cookie = "anon_id="+ data.anon_id;
                }
                if(data.username){
                    handleSignIn();
                    return;
                }
            });
    }

    checkLoginStatus();
})();
/* */

</script>
<script type="text/javascript">
	AY = "2017-2018";
TRACKING_ENDPOINT = '/funnelmetrics';

function trackPage() {
    trackAction('pageView');
}

function trackAction(action, category, value, callback, appendCategory=true) {
    const categoryName = category;
    let actionType = action;
    let timestamp = new Date().getTime();
    if (category && appendCategory) {
        actionType += "_" + categoryName;
    }

    let dataMap = {
        category: categoryName,
        label: window.location.pathname,
        action: actionType,
        _ay: AY,
        _t: timestamp,
        original_referrer: document.referrer
    };

    if (value != undefined) {
        if (typeof (value) == 'object') {
            for (var key in value) {
                dataMap[key] = value[key];
            }
        } else {
            dataMap['value'] = value;
        }
    }

    let params = [];
    for (var key in dataMap) {
        params.push(key + "=" + dataMap[key]);
    }
    let i = new Image();
    i.src = TRACKING_ENDPOINT + '?' + params.join("&");

    window._gaq &&  window._gaq.push(['_trackEvent', categoryName, actionType, [AY, timestamp].join('::'), null, true]);
    if (callback && typeof callback === "function") {
        i.onload = callback;
        i.onerror = callback;
    }
}

function trackLinkClick(path,type) {
    console.log("Tracking ... ", path, type);
    if (type == undefined) {
        type = 'link_click';
    }
    trackAction(type, path);
}

function ct_track(category, action, label, value) {
  trackAction(action, category, value);
}

var serialize = function (obj) {
    var str = [];
    for (var p in obj)
        if (obj.hasOwnProperty(p) && obj[p] != null) {
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        }
    return str.join("&");
}

var ct_internalTracking = function (category, action, label, value) {
    console.log("Event", category, action, label, value);
    var qs = serialize({
        category: category,
        action: action,
        label: label,
        value: value,
        _ay: window._ay,
        _entityIndex: window._entityIndex,
        original_referrer: document.referrer,
        _t: new Date().getTime()
    });
    var img = new Image();
    img.src = TRACKING_ENDPOINT + "?" + qs;
}



//Single function to handle FM & GA4 tracking and/or toggle modal
var track_Label, track_Value, modal_Id;
let handleTrack = (logObj = {}) => {
    ({ label: track_Label = '', value: track_Value = '', modal: modal_Id = '', obj = '', action = 'Click', url = '', valueObj = {} } = logObj);

    //Extract button text
    var initialValue = '{}redirect_url :: ' + url;
    if (obj) {
        const dataLabel = obj.dataset.label ? obj.dataset.label : obj.textContent.trim();
        track_Label += `_${dataLabel}`;
        track_Value = `${initialValue + obj.href + track_Value}`;
    }

    if (isObject(valueObj)) {
        let nestedObj = {};
        Object.entries(valueObj).map(([key, value]) => {
            //if value is an object convert the key value pairs to a string, as nested objects are not supported in GA
            let nestedPairs = isObject(value) && objectToString(value, '{|}', ' ::: ');
            nestedObj[key] = nestedPairs || value;
        });

        //Addition of delimeters on each key value pairs
        track_Value += nestedObj && objectToString(nestedObj, '{}', ' :: ');
    }

    //Carry tracking label of the clicked button to redirected page
    const urlRegex = /\bhttps?:\/\/\S+/gi;
    let targetPage = obj.href || track_Value.match(urlRegex);
    if (targetPage) {
        logObj.targetPage = targetPage.toString();
        if (logObj.targetPage.includes("accounts.cleartax.in")) logObj.isSSO = true;
        localStorage.logObj = JSON.stringify(logObj);
    }

    //open modal
    if (modal_Id) {
        (typeof toggleModal === 'function')
            ? toggleModal({ id: modal_Id })
            : openRequestDemoClick();
        var modalEle = document.getElementById(modal_Id) || document.getElementById(modal_Id + '-modal-wrapper');
        modalEle.dataset.foldLocation = track_Label;
        track_Value += '{}FormType :: ' + modal_Id;
        action = 'Click_Open';
    }

    //To save encrypted values along with non-encrypted ones in funnel for mapping it with GA
    const trackValueObj = stringToObject(track_Value, '{}', ' :: ');
    const encryptData = encryptSensitiveUserInfo(trackValueObj);
    ct_internalTracking(funnelCategory, action, track_Label, objectToString(encryptData, '{}', ' :: '));

    //GA4 tracking
    handleTrackGA4(action,logObj, encryptData);

    
}


const handleTrackGA4 = (action, logObj, trackValueObj) => {
    const { targetPage } = logObj;
    const cloneObj = {...trackValueObj};
    const data = deleteSensitiveUserInfo(cloneObj);

    const sendProperty = gaProperty.groups;
    const path = window.location.pathname;
    const newGAObj = {
        parent_category: parentCategory,
        sub_category: categoryName,
        event_label: track_Label,
        current_page_pathname: path.endsWith('/') ? path.slice(0, path.length -1) : path,
        redirect_url: targetPage,
        ...data,
        send_to: sendProperty
    }
    if (window.ga) {
        //all keys are converted to lowercase before sending to GA4
        console.log('GA4 Event', action.toLowerCase(), toLowerKeys(newGAObj));
        gtag('set', 'content_group', 'v2_enterprise');
        gtag('event', action.toLowerCase(), toLowerKeys(newGAObj));
    }
}

const toLowerKeys = (obj) => {
    return Object.keys(obj).reduce((accumulator, key) => {
        accumulator[key.toLowerCase()] = obj[key];
        return accumulator;
    }, {});
}

const stringToObject = (text, propertySeparator, pairSeparator) => {
    const splitValues = text.split(propertySeparator).filter(value => value);
    const pairs = splitValues.map(pair => pair.split(pairSeparator));
    return Object.fromEntries(pairs);
}

const objectToString = (obj, propertySeparator, pairSeparator) => {
    let text = '';
    Object.entries(obj).map(([key, value]) => {
        text += `${propertySeparator + key + pairSeparator + value}`
        return text;
    });
    return text;
}

const encryptSensitiveUserInfo = (obj) => {
    Object.keys(obj).map(key => {
        if (key.match(/email/i) || key.match(/phone/i) || key.match(/mobile/i)) {
            obj[`encrypted_${key}`] = encryptToHex(obj[key])
            return
        }
    });
    return obj
}

const deleteSensitiveUserInfo = (obj) => {
    Object.keys(obj).map(key => {
        if (!key.includes('encrypted') && key.match(/email/i) || key.match(/phone/i) || key.match(/mobile/i)) {
            delete obj[key];
            return
        }
    });
    return obj
}


const encryptToHex = (wordToEncrypt) => {
  const encryptedWord = wordToEncrypt
    .split("")
    .map((word) => word.charCodeAt(0).toString(16))
    .join("");
  return encryptedWord;
};

const decryptFromHex = (wordToDecrypt) => {
  const decryptedWord = wordToDecrypt
    .match(/.{1,2}/g)
    .map((word) => String.fromCharCode(parseInt(word, 16)))
    .join("");
  return decryptedWord;
};

const isObject = (val) => {
  if (val === null) return false;
  return typeof val === "function" || typeof val === "object";
};



function trackFormSubmit(id, formAction, valueObj = {}) {
    const email = document.getElementById(id + "-emailid").value;
    const modalEle = document.getElementById(modal_Id) || document.getElementById(`${id}-wrapper`);
    const sectionLocation = modalEle && modalEle.dataset.foldLocation;
    track_Label = sectionLocation || track_Label || `button_${modal_Id}`;
    track_Value = (track_Value || `{}FormType :: ${modal_Id}`);
    handleTrack({action: `Click_${formAction}`, label: track_Label, value: track_Value, valueObj: {email_id: email, ...valueObj}});
  }
  
  //To access the label of clicked button from the previous page
  function checkLocalStorage(id) {
    if (localStorage.logObj) {
      logObj = JSON.parse(localStorage.logObj);
      var currentPage = window.location.pathname;
      var cpageUrl = (currentPage.endsWith("/")) ? currentPage.slice(0, currentPage.lastIndexOf("/")) : currentPage;
      if ((logObj.targetPage) && (logObj.targetPage).includes(cpageUrl) && !(logObj.isSSO)) {
        document.getElementById(id + '-wrapper').dataset.foldLocation = logObj.label;
      }
      localStorage.removeItem('logObj');
    }
  }


</script>
<script>
	var funnelCategory = 'not_set';
	var categoryName = 'enterprise';
	var parentCategory = 'v2'
	if (typeof categoryName !== 'undefined') {
		funnelCategory = parentCategory !== '' ? parentCategory + '_' + categoryName : categoryName;
	}
	if (typeof(ct_internalTracking) === 'function'){
		ct_internalTracking(funnelCategory, 'pageView', encodeURI(window.location.pathname));
	}
</script>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKPDH9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
	function debounce(func, delay) {
    var timer;
    return function() {
        var context = this,
        arg = arguments;
        clearTimeout(timer);
        timer = setTimeout(() => {
            func.apply(context, arg);
        }, delay);
    }
}
function asyncDebounce(func, delay) {
    var timer;
    return async function() {
        var context = this,
        arg = arguments;
        clearTimeout(timer);
        return new Promise((res)=>{
            setTimeout( async () => {
                return res(await func.apply(context, arg))
            }, delay);
        })
    }
}
function lazyLoading  () {
    var yetTobeLoadedImages = document.querySelectorAll("img[data-src]");
    if (yetTobeLoadedImages.length === 0) window.removeEventListener('scroll', debouncedLazyLoading);
    for(var image of yetTobeLoadedImages) {
        if(isElementVisibleOnScreen(image)){
            image.setAttribute('src', image.getAttribute('data-src'));
            image.removeAttribute('data-src');
        }
    }
    
}
var debouncedLazyLoading = debounce(lazyLoading, 400);

    function windowOnloadHandler() {
        lazyLoading();
        setTimeout(() => {
            gtmHead();
        }, 100);
    }

// window.addEventListener('DOMContentLoaded', callScripts);
window.addEventListener("scroll", debouncedLazyLoading);
window.onload =  windowOnloadHandler;

</script>
<!-- Google Tag Manager -->
<script defer>function gtmHead(){(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.defer=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MKPDH9');}
</script>
<!-- End Google Tag Manager -->

<!-- Page scheme -->

	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Article",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "https://cleartax.in/enterprise"
			
		},
		"headline": "Enterprise Business Solutions - ClearTax",
		"description": "Discover ClearTax enterprise solutions for secured, safer and error free services. Get 5X Faster Filing, seamless data integration, 360 support from our team and with an uptime of 99.9% to support your business growth.",
		"image": {
			"@type": "ImageObject",
			
			"url": "https://assets1.cleartax-cdn.com/social/cleartax-og-image-v5.png"
		},
		"articleSection": "v2",
		"keywords": "GST, GSTP, GSP, GSTN, Goods and Services Tax, GST Bill, GST law, GST software, GST App, GST solution, GST website, Goods and Service Tax Network, GST API",
		"datePublished": "",
		"dateModified": "",
		"author": {
			"@type": "Person",
			"name": "ClearTax"
		},
		"publisher": {
			"@type": "Organization",
			"name": "ClearTax",
			"logo": {
				"@type": "ImageObject",
				"url": "https://assets1.cleartax-cdn.com/cleartax-brand/logos/cleartax-logo-vertical-600x60-2017.png",
				"width": 600,
				"height": 60
			}
		}
	}
</script>


<script>
	; (function () {
		/* handle  dropdown */
		function isParent(refNode, nodeToCheck) {
  try {
    var parent = nodeToCheck.parentNode;
    while (parent) {
      if (refNode == parent) {
        return true;
      } else {
        parent = parent.parentNode;
      }
    }
    return false;
  } catch (e) {
    return false;
  }
}

function openDropdown(el) {
  try {
    el.classList.add("lil-dropdown-open");
    var navText = el.querySelector(".lil-nav-text");
    if (navText) {
      navText.classList.add("lil-text-blue-350");
    }
    var caretElement = el.querySelector(".lil-nav-text .lil-caret");
    if (caretElement) {
      caretElement.classList.remove("lil-caret-down");
      caretElement.classList.add("lil-caret-up", "lil-border-blue-350");
    }
  } catch (err) {}
}

function closeDropdown(el) {
  try {
    el.classList.remove("lil-dropdown-open");
    var navText = el.querySelector(".lil-nav-text");
    if (navText) {
      navText.classList.remove("lil-text-blue-350");
    }
    var caretElement = el.querySelector(".lil-nav-text .lil-caret");
    if (caretElement) {
      caretElement.classList.add("lil-caret-down");
      caretElement.classList.remove("lil-caret-up", "lil-border-blue-350");
    }
  } catch (err) {}
}
var navMenus = document.querySelectorAll(".nav-dropdown");
for (var i = 0; i < navMenus.length; i++) {
  try {
    navMenus[i].addEventListener(
      "mouseover",
      function (ev) {
        openDropdown(this);
      },
      false
    );

    var fullPageMenuNode = navMenus[i].querySelector(".lil-dropdown-full-menu");
    if (fullPageMenuNode) {
      fullPageMenuNode.addEventListener("click", function (ev) {
        ev.stopPropagation();
        var wrapper = this.querySelector(".menu-wrapper");
        if (!isParent(wrapper, ev.target) && wrapper !== ev.target) {
          closeDropdown(this.parentNode);
        }
      });
    }
  } catch (e) {}

  try {
    navMenus[i].addEventListener(
      "mouseleave",
      function (ev) {
        if (!isParent(this, ev.relatedTarget) && this == ev.target) {
          closeDropdown(this);
        }
      },
      false
    );
  } catch (e) {}

  try {
    navMenus[i].addEventListener(
      "click",
      function (ev) {
        if (this.classList.contains("lil-dropdown-open")) {
          closeDropdown(this);
        } else {
          openDropdown(this);
        }
      },
      false
    );
  } catch (e) {}
}

		/* mobile header interaction */
		var hamburgerIcon = document.getElementById('mobile-header-toggle');
		let searchMobile = document.getElementById("search-submit-mobile");
		let productDropdownTohide = document.getElementById('mobile-header-product-toggle');
		if (hamburgerIcon) {
			hamburgerIcon.addEventListener('click', function () {
				var headerSidebar = document.getElementById('mobile-header-sidenav');
				if (headerSidebar) {
					if (headerSidebar.classList.contains('lil-sidenav-open')) {
						headerSidebar.classList.remove('lil-sidenav-open');
						hamburgerIcon.classList.remove('lil-toggle-close');
						if(searchMobile) searchMobile.classList.remove('lil-invisible')
						if(productDropdownTohide) productDropdownTohide.classList.remove('lil-hidden')
					} else {
						headerSidebar.classList.add('lil-sidenav-open');
						hamburgerIcon.classList.add('lil-toggle-close');
						if(searchMobile) searchMobile.classList.add('lil-invisible')
						if(productDropdownTohide) productDropdownTohide.classList.add('lil-hidden')
					}
				}

		
			
			});
		}

		//script for handling sumo 
    const config ={
        attributes: true, 
          attributeFilter: ["style"]
};
// Callback function to execute when mutations are observed
const callback = function (mutationsList, observer) {
const previousTopValue = 73.6; //from the style for css selector nav-dropdown .lil-dropdown-menu
for (let i = 0; i < mutationsList.length; i += 1) {
    if (mutationsList[i].attributeName === 'style') {
        try{
            const header = document.getElementById('headerNavbar')
            const dropdownHeight = previousTopValue + header.offsetTop ;
            const dropdowns = document.querySelectorAll('.nav-dropdown .lil-dropdown-menu')
            for (let j=0; j<dropdowns.length; j++){
                dropdowns[j].style.top = '' + dropdownHeight + 'px';
            }
            
        } catch (e) {
            //headers of products without any dropdowns
        }
    } 
}
}
try {
const observer = new MutationObserver(callback);
observer.observe(document.getElementById('headerNavbar'), config);
} catch (e) {
//mutation observer failed
}

	})()
</script>
<script>
	document.addEventListener('load',function() {
		if(navigator.userAgent.toLowerCase().indexOf('android')>-1){
			$( '[id^=androidBtn]' ).css('display', 'flex');
		}
	});
</script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
       const isSearchMobile  = (() =>{
           let searchEle = document.getElementById("search-submit-mobile");
           return searchEle.parentElement.offsetWidth > 0 && searchEle.parentElement.offsetHeight > 0;
       })();
       
       let submitArrow = document.getElementById("search_submit_mobile");
       submitArrow.addEventListener('click',()=>{
           document.getElementsByClassName("search-fixed")[0].classList.add("lil-invisible")
       })
   
       const hitsBoxId = isSearchMobile?"#hitsMobile":"#hits"
        let searchWrapper = document.getElementsByClassName("search-wrapper")
        searchWrapper[0].addEventListener("mousedown",(e)=>{
           if('/s/v2/enterprise/' == "/landing-pages/search/"){
               e.preventDefault()
               document.getElementById("searchBoxContainer").focus()
           }
        })
        searchWrapper[0].addEventListener("click",(e)=>{
               document.getElementById("searchBox").focus()
        })
   
       let searchNavBarMobile = document.getElementById("search-submit-mobile")
       let searchBoxMobile = document.getElementsByClassName("searchbox-mobile-wrapper")[0]
       window.addEventListener('click', function(e){   
           if (document.getElementsByClassName('searchbox-mobile-wrapper')[0].contains(e.target) || document.getElementById("search-submit-mobile").contains(e.target) ){
               if(window.location.pathname == "/search"){
                   e.preventDefault()
                   document.getElementById("searchBoxContainer").focus()
                   return;
               }
               document.getElementsByClassName("search-fixed")[0].classList.remove("lil-invisible")
               document.getElementsByClassName("search-fixed")[0].classList.add("lil-visible")
               document.getElementById("searchBoxMobile").focus()
           } else{
               document.getElementsByClassName("search-fixed")[0].classList.remove("lil-visible")
               document.getElementsByClassName("search-fixed")[0].classList.add("lil-invisible")
           }
       });
   
       const inputCb = (event,helper) =>{
           if(event && event.target && !event.target.value){
                 document.querySelector(hitsBoxId).innerHTML = ""
                 document.querySelector(hitsBoxId).classList.remove("lil-shadow-md","lil-pt-1")
           }
           
       }
       // help render results in view from algolia api
       const algoliaRenderCb = (hits,query) =>{
         let hitBoxEle =  document.querySelector(hitsBoxId)
         if(hitBoxEle){
             if(hits.length){
             hitBoxEle.innerHTML = hits
               .map(
                 (hit,index) => {
                   let title = hit.title;
                    if(index!==hits.length-1){
                        return `<a class='lil-font-normal lil-my-5 lil-mx-2 results lil-block hover:lil-text-blue-300' onclick="handleTrack({label: 'navbar_button_Search_Result', value: {}searchQuery:${query}, obj: this});" href="${hit.url}">${title}</a>`
                    }
                     else{
                       return `<a class="lil-font-normal lil-my-5 lil-mx-2 lil-block hover:lil-text-blue-300  results" onclick="handleTrack({label: 'navbar_button_Search_searchTitle', value: {}searchQuery:${query}, obj: this});" href="${hit.url}">${title}</a>
                       <a onclick="handleTrack({label: 'navbar_button_Search', value: {}searchQuery:${query}, obj: this});" href="/search/?query=${query}" class="lil-font-medium lil-py-3  lil-text-blue-300 lil-border-grey-500 lil-block lil-text-center lil-border-t-sm">View more results &#8594;</a>
                       `
                     }
                 }
               )
               .join('');
               }
               else{
                   hitBoxEle.innerHTML =  `<p class="lil-font-normal lil-my-5 lil-mx-2 lil-block  ">Sorry no result found</p>
                       <a onclick="handleTrack({label: 'navbar_Search', value: {}searchQuery:${query}, obj: this});" href="/search/" class="lil-font-medium lil-py-3  lil-text-blue-300 lil-border-grey-500  lil-block lil-text-center lil-border-t-sm">Go to search &#8594;</a>
                       `
                 }
                 hitBoxEle.classList.add("lil-shadow-md","lil-pt-1")
           }
         }
         
       let searchBoxId = isSearchMobile?"searchBoxMobile":"searchBox"; //selecting id to take input from (mobile and desktop)
       let targetNode = document.getElementById(searchBoxId)
      
       // calling function<processChanges> from algoliaInit.js
   
       targetNode.addEventListener("input", (e)=>{
           if(e.target.value.length >= 3){
               processChanges(e.target.value,'content_article_search')
           }
       })
   
       // The below code is associated with all V2 landing pages, _layout/category_hsn_pages.html

// deboucing logic
function debounce(func, timeout = 500){
    let timer;
    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(() => { func.apply(this, args); }, timeout);
    };
}

	function saveInput(query,index){
  		console.log(query);
  		fetch("https://cleartax.in/f/content_search/algolia/algolia-search/",{method: "POST", body: JSON.stringify({
      		"requests":[
            {
               "indexName": `${index}`,
               "params": `query=${query}&hitsPerPage=5&page=0&facets=%5B%5D&tagFilters=`
            }
         ]
  		}) })
      .then(function(res){ return res.json(); })
      .then(function(data){ 
          if(index === 'test_hsn'){
            algoliaRenderCbTest_HSN(data.results[0].hits,query)
          }else{
            algoliaRenderCb(data.results[0].hits,query)
          }
       })
	}

	const processChanges = debounce((query,index) => saveInput(query,index));

     });
   </script>
   

	
	<style>
    #top-strip-form-modal.lil-modal-open{
		display: flex;
	}
	#top-strip-form-modal{
		max-width: 850px;
	}
    .formSelect{
	background-color: white !important;
	border: solid 1px #E0E0E0;
	padding: 0.6rem;
}
</style>


<div class="lil-modal lil-bottom-0 lil-top-0 lil-items-center lil-justify-center lil-rounded-xl lil-bg-transparent lil-overflow-hidden lil-w-11/12 lg:lil-w-5/6 md:lil-w-5/6 sm:lil-w-full sm:lil-overflow-x-hidden sm:lil-overflow-y-auto custom-mobile-model"
	id="top-strip-form-modal">
	<div class="lil-bg-white lil-w-full sm:lil-h-full lil-rounded-xxl">
		<span class="lil-modal-close lil-cursor-pointer lil-text-font-500 lil-text-s-18"
			onClick="closeModal(document.getElementById('top-strip-form-modal'))">&#10005;</span>
		<div class="lil-p-4 lil-py-10 sm:lil-p-2 sm:lil-pt-6" id='stripe-form-wrapper'>
			<p class="lil-text-s-26 lil-text-font-500 lil-text-center lil-font-semibold">
				Looking for a business loan</p>
			<div class="lil-pt-6 lil-w-full lil-flex sm:lil-flex-col">
                <p class="stripe-error-msg lil-text-red lil-text-s-10 lil-mb-4 lil-text-center"></p>
                <form class="lil-mt-6 lil-px-5" id="top-strip-form" action="javascript:void(0);">
                    <div  class="lil-flex lil-flex-wrap">
                        <div class="lil-w-1/2 lil-mb-4 lg:lil-mb-3 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0 formGroup">
                            <label class="lil-text-font-500 formLabel lil-text-s-14 " for="username-formbusiness " >Name<span class="lil-text-red lil-text-s-18">*</span></label>
                            <input id="username-formbusiness" tabindex="0" class="lil-text-s-14  formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="Abhay" maxlength="56"/>
                        </div>
                        <div class="lil-w-1/2 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0 sm:lil-pr-0 lil-mb-4 lg:lil-mb-3 formGroup">
                            <label class="lil-text-font-500 formLabel lil-text-s-14 " for="phoneno-formbusiness">Phone number<span class="lil-text-red lil-text-s-18">*</span></label>
                            <input id="phoneno-formbusiness" tabindex="0" class="lil-text-s-14 formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" type="tel" placeholder="Enter 10 digit mobile number" />
                        </div>
                        <div class="lil-w-1/2  sm:lil-w-full sm:lil-pl-0 md:lil-w-full md:lil-pl-0 lil-pr-4 sm:lil-pr-0 lil-mb-4 lg:lil-mb-3 formGroup">
                            <label class="lil-text-font-500 formLabel lil-text-s-14 " for="city-formbusiness " >City<span class="lil-text-red lil-text-s-18">*</span></label>
                            <input id="city-formbusiness" tabindex="0" class="lil-text-s-14  formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="Bangalore" maxlength="56"/>
                        </div>
                        <div class="lil-w-1/2 sm:lil-w-full lil-pr-4 sm:lil-pl-0 md:lil-w-full sm:lil-pr-0 md:lil-pl-0 lil-mb-4 lg:lil-mb-3 formGroup" style="margin-top: 2px;">
                            <label class="lil-text-font-500 formLabelSelect lil-text-s-14" for="purposes-loan">Purpose of loan <span class="lil-text-red lil-text-s-18">*</span></label>

                            <select id="purposes-loan" tabindex="0" class="lil-text-s-14 lil-rounded-xl formSelect lil-block lil-w-full lil-mt-1 lil-outline-none" value="">
                                <option value="" disabled selected> Select your option</option>
                                <option value="Supplier payment">Supplier payment</option>
                                <option value="Employee salaries">Employee salaries</option>
                                <option value="Loan repayment">Loan repayment</option>
                                <option value="Machinery purchase">Machinery purchase</option>
                                <option value="Auto loan">Auto loan</option>
                                <option value="Personal loan">Personal loan</option>
                                <option value="Business Advance">Business Advance</option>
                                <option value="Other">Other</option>
                            </select>
                        
                            <input id="purposes-loan-other" tabindex="0" class="lil-w-full lil-input lil-border-sm  lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56" />

                        </div>
                        <div class="lil-w-1/2 lil-pr-4 lil-pt-1 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pl-0 lil-mb-4 lg:lil-mb-3 formGroup">
                            <label class="lil-text-font-500 formLabel lil-text-s-14 lil-pt-1" for="annual-turnover">Annual turnover - In lacs</label>
                            <input id="annual-turnover" type="number" tabindex="0" class="lil-text-s-14 lil-z-10 formInput lil-w-full lil-mt-1 lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 companyInput" placeholder="Annual turnover - In lacs"/>
                        </div>

                        <div class="lil-w-1/2  sm:lil-w-full sm:lil-pl-0 md:lil-w-full md:lil-pl-0 lil-pr-4 sm:lil-pr-0 lil-mb-4 lg:lil-mb-3 formGroup">
                            <label class="lil-text-font-500 formLabel lil-text-s-14 " for="current-financing" >Current financing/loan channels<span class="lil-text-red lil-text-s-18">*</span></label>

                            <select id="current-financing" tabindex="0" class="lil-text-s-14 lil-rounded-xl formSelect lil-block lil-w-full lil-mt-1 lil-outline-none" value="">
                                <option value="" disabled selected> Select your option</option>
                                <option value="Bank">Bank (E.g, HDFC bank)</option>
                                <option value="NBFC">NBFC (Eg., BajaJ finance)</option>
                                <option value="Money lenders">Money lenders</option>
                                <option value="Friends & family">Friends & family</option>
                                <option value="Other">Other</option>
                            </select>
                        
                            <input id="current-financing-other" tabindex="0" class="lil-w-full lil-input lil-border-sm  lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56" />

                        </div>
                        <div class="lil-w-1/2 sm:lil-w-full lil-pr-4 sm:lil-pl-0 md:lil-w-full sm:lil-pr-0 md:lil-pl-0 lil-mb-4 lg:lil-mb-3 formGroup" style="margin-top: 2px;">
                            <div class="lil-w-full">
                            <label class="lil-text-font-500 formLabelSelect lil-text-s-14" for="current-interest">Current interest rate (%)<span class="lil-text-red lil-text-s-18">*</span></label>
                                                        
                            <input id="current-interest" tabindex="0" type="number" class="lil-text-s-14  formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="10" maxlength="2"/>
                            </div>
                            <div class="lil-w-full lil-pt-6">
                                <input type="checkbox" tabindex="0" id="gst-register" />
                                <label class="lil-text-s-14 lil-text-font-500 lil-pl-4" for="gst-register">
                                    GST registered</label>
                            </div>
                        </div>
                        <div class="lil-w-1/2 sm:lil-w-full lil-pr-4 sm:lil-pl-0 lil-mb-4 sm:lil-pr-0 lil-pt-1 md:lil-w-full md:lil-pl-0 md:lil-mb-4 lg:lil-mb-3 lil-text-s-14 formGroup">
                            <label class="lil-text-font-500 formLabelSelect lil-text-s-14" for="what-business">What is your business</label>
                            <span class="lil-text-red lil-text-s-18">*</span></label>
                            <textarea id="what-business" name="what-business" rows="4" class="lil-text-s-14  formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2"
                            placeholder="Please tell us a bit more about your business - what business are you in, how many and type of customers, typical business loan needs (monthly/quarterly)"
                            ></textarea>
                        </div>

                    </div>
                    <div class="lil-w-full lil-flex lil-justify-center">
                        <input id="submit-top-stripe" tabindex="0"  type="submit"  value="Send details" class="lil-btn lil-cursor-pointer lil-btn-blue lil-mt-4 lil-float-right" />
                    </div>
                </form>

			</div>
		</div>

        <div id="stripe-success-wrapper" class="lil-hidden lil-text-center lil-p-4 lil-py-10 sm:lil-p-2 sm:lil-pt-6">
            <p id="success-message"	class="lil-text-base lil-text-font-500">Thank you for your interest, our team will get back to you shortly</p>
        </div>
	</div>
</div>
<div class="lil-modal-overlay"></div>
<script>/**
 *                 ****** FORM VALIDATION *******
 * Simple Javascript Validaiton for input fields 
 * TO USE - Call getFormInstance function with the following arguments this will return 
 * a form instance of inputElements which itself will handle the validation and showing the error logic
 * 
 * @arg  {Object[]} formInputs - formInputs array this will contain all the inputs you want validation for
 * @arg {string} formInputs[].name - The name of the input field. Will show up when validation fails
 * @arg {string} formInputs[].inputEleId - The id of the input field.
 * @arg {Functions Array} formInputs[].validationArr - You can use the Validation class functions 
 * which will be used for validations You can extend this class and create new util functions for validation
 * but these funciton should return err and msg property
 * @arg {string} type - Type of input field 
 * @arg {string} apiKey - Use this field if you want to use getValues funciton of formInstance which will
 * return the key and value pair for the formgroup input fields 
 * 
 * @returns {Object} - FormInstance object
 * 
 * @example @see {@link _includes/v2/contactSales.html}
 * 
 */

class ValidationsClass {
    static isEmpty(value,name){
        if(!value){
            return {err:true,msg:`${name} can not be empty`}
        }
    }
    static isUnChecked(value,name){
        if(!value){
            return {err:true,msg:`${name} should be selected`}
        }
    }
    static maxLimit(limit){
        return function(value,name){
            if(value.length>limit){
                return {err:true,msg:`${name} can not be greater than ${limit} digits`}
            }
        }
    }
    static isNameValid(value,name){
        let regexp = /[^a-zA-Z,. ]/;
        if(regexp.test(value)){
            return {err:true,msg:`Name is not valid`}
        }
    }
    static isEmail(value,name){
        let emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!emailRegex.test(value)){
            return {err:true,msg:`Email is not valid`}
        }
        
    }
    static validDomain(emailID) {
        let BLACKLIST = ["gmail.com","yahoo.com","yahoo.co.in","rediffmail.com","hotmail.com","yahoo.in","updated.com","cleartax.in","id.in","xyz.com","nil.com","ymail.com","outlook.com","xx.xx","abc.com","live.com","mail.com","gamil.com","junk.com","gmai.com","abc.in","live.in","a.com","x.x","a.a","rediff.com","yahoo.co.uk","leads.com","in.ey.com","123.com","xx.x","xxx.com","aa.aa","redfm.in","zz.zz","yhaoo.co.in","yahoo.om","yahoo.com.au","yahoo.co","yahoo.ca","yaho.co.in","xxx.xx","x.xx","x.com","abad.in","123gmail.com","z.z","yohoo.com","ymail.in","ymail.co","yahoomail.co.in","yahooco.in","yahoo.on","yahoo.con","yahoo.comm","yahoo.com.sg","yahoo.com.in","yahoo.coin","yahoo.co.on","yahoo.co.om","yahoo.cim","yahoo.aco.in","yahho.com","xzy.com","xyz.in","xyz.c","xys.com","xxxx.xxx","xxx.xxx","xx.in","xx.com","143gmail.com","126.com","123.comk","ac.com"];
        let mailDomain = emailID.split("@")[1];
        let isValid = !BLACKLIST.some(function (domain) {
            return mailDomain === domain;
        })
        if(!isValid){
            return {err:true,msg:`Please enter a valid business email id`}
        }
    }
    static isPhoneNoValid(value,name){
        let phoneNoRegex =  /^(\s*[\(?])?(?:([\)]?)([\-])?|[0]?)?[6789]\d{9}$/
        if(!phoneNoRegex.test(value)){
            return {err:true,msg:`Phone number is not valid`}
        }
    }

    static customValidation(cb){
        return (value,name)=>cb(value,name)
    }
    
}

class inputElements {
    constructor(inputEleId,validationArr=[],type,name,onChangeCb,apiKey,initValue){
        this._initialValues = {inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue};
        this.init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue);
    }
    init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue=""){
      this._name = name;
      this._apiKey = apiKey
      this._validations = validationArr;
      this._type = type;
      this._inputEle = document.getElementById(inputEleId);
      this.valid = !validationArr || !validationArr.length ? true:false
      this.value = initValue
      this._onChangeCb = onChangeCb;
      this._inputEle.value = initValue;
      if(this._type=="checkbox"&&initValue){
        this._inputEle.checked = true
      }
      this.bindEle();
      this.createErrorNode();
    }
    bindEle(){
        this._inputEle.addEventListener('input',this.onChange.bind(this))
    }
    onChange({currentTarget}){
        let value = this._type=="checkbox"?currentTarget.checked:currentTarget.value
        this.validate(value);
        if(this._onChangeCb){
            this._onChangeCb(currentTarget,this)
        }
    }
   
    onError(error){
        this.insertErrorTxt(error.msg);
        this.showError();
        this.valid = false
        this.errorMsg = error.msg;
    }
    onSuccess(value){
        this.hideError();
        this.value = value
        this.valid = true;
        this._inputEle.setAttribute("value",value)
        this._inputEle.value = value
        if(this._type=="checkbox"&&value){
          this._inputEle.checked = true
        }
    }
    validate(value){
        if(this._validations.length){
            for(let i=0;i<this._validations.length;i++){
                let ele = this._validations[i];
                let error = ele(value,this._name);
                if(error && error.err){
                    this.onError(error)
                    break;
                }
                else{
                   this.onSuccess(value)
                }  
            }
        }
        else this.onSuccess(value)
    }
    insertErrorTxt(err){
        this._errorNode.innerText = err
    }
    hideError(){
        this._errorNode.style.display = "none";
    }

    showError(){
        this._errorNode.style.display = "inline-block";
    }

    createErrorNode(){
        let para = document.createElement("span");
        para.setAttribute('id', `${inputElements._inputEle}_error`);
        para.setAttribute('class','lil-text-red lil-text-s-10');
        this._errorNode = para;
        if(this._type=="checkbox"){
            this._inputEle.parentElement.insertAdjacentElement('afterend', this._errorNode);
        } else{
            this._inputEle.insertAdjacentElement('afterend', this._errorNode);
        }
    }

    reLoadEle(){
      this.init(this._initialValues.inputEleId, this._initialValues.validationArr,this._initialValues.type,this._initialValues.name,this._initialValues.onChangeCb,this._initialValues.apiKey,this._inputEle.initValue);
    }

}


class formGroup {
    _formEle={};
    constructor(formEleArr){
        this._formEle =  formEleArr.filter(Boolean).reduce(((resultObj,ele)=>{
            return {...resultObj,[ele.inputEleId]:new inputElements(ele.inputEleId,ele.validationArr,ele.type,ele.name,ele.onChangeCb,ele.apiKey,ele.initValue)}
        }),{})
    }
    isFormValid(){
        for (const key in this._formEle) {
            const element = this._formEle[key];
            if(element.valid == false) return false
        }
        return true
    }
    add({inputEleId,validationArr,type,name,onChangeCb,apiKey}){
        let inputInstance = new inputElements(inputEleId,validationArr,type,name,onChangeCb,apiKey)
        this._formEle[inputEleId] = inputInstance;
    }
    remove(id){
        delete this._formEle[id]
    }
    getValues(){
        let values = {}
        for (const key in this._formEle) {
            const element = this._formEle[key];
            values[element._apiKey]= element.value
        }
        return values
    }
    validateFormEle(){
        let errorObj = {};
        for(const key in this._formEle) {
            const element = this._formEle[key];
            element.validate(element.value);
            if( !element.valid )
                errorObj[element._name] = element.errorMsg;
        }
        return errorObj;
    }
    reload(){
      for(const key in this._formEle) {
        const element = this._formEle[key];
        element.reLoadEle()
      }
    }

}

var getFormInstance = (formEleArr)=>new formGroup(formEleArr)
</script>
<script>
	window.addEventListener('DOMContentLoaded', ()=>{
		/**
 *                 ****** AUTO COMPLETE *******
 * User can instansiate this functionality by simply calling the autoCompletFn
 * which takes param like
 * @arg {string} inputId - input element id you want to attach the autocomplete to 
 * @arg {string} results -  element id which will get populated with results 
 * @arg {function} callback - function will return the results in an array format to show in dropdown 
 * 
 * @returns {Object} - Object containing @callback getSelectedIndex which itself returns the selected index
 * 
 * 
 * @example autoCompletFn(`inputId`,`resultId`,apiCall).getSelectedIndex(index=>{
			selectedIndex = index
		})
 */

let autocomplete = {
    _inputNode:null,
    _query:"",
    _resultNode:null,
    _dataCb:null,
    selectedIndex:null,

    init:function(inputId,resultNodeId,getDataCb){
        autocomplete._inputNode = document.getElementById(inputId);
        autocomplete._resultNode = document.getElementById(resultNodeId);
        autocomplete._dataCb = getDataCb;
        autocomplete.bindInputChange();
        autocomplete.bindInputClick();

        return autocomplete;
    },

    outsideClickHandler:function(){
        var event = new Event('input', {
            bubbles: true,
            cancelable: true,
        });
        autocomplete._inputNode.dispatchEvent(event);
        autocomplete.hideResults();
        window.removeEventListener('click',autocomplete.windowClickHandler)
    },
    hideResults:function(){
        autocomplete._resultNode.classList.replace('lil-visible','lil-invisible')
    },

    showResults:function(){
        autocomplete._resultNode.classList.replace('lil-invisible','lil-visible')
    },

    getEmptyHtml:function(){
        return `<span class="lil-block lil-py-2 lil-text-grey-500 lil-text-s-14" >Sorry No Result Found</span>`
    },

    getResultsHtml:function(options){
        return  options.map(ele=>{
            boldEle = ele.slice(0, autocomplete._inputNode.value.length);
            normalEle = ele.slice(autocomplete._inputNode.value.length, ele.length);
            return `<p class="hover:lil-text-blue-350 lil-py-2 lil-text-s-14 lil-cursor-pointer"><b class="lil-text-black">${boldEle}</b>${normalEle}</p>`
        }).join('')
    },

    populate:async function(){
        //populateOptionFn this function should return an array of elements ["a","b","c"]
        let options = await autocomplete._dataCb(autocomplete._query);
        let html = options.length ? autocomplete.getResultsHtml(options):autocomplete.getEmptyHtml();
        autocomplete._resultNode.innerHTML = html;
        autocomplete.bindResultClick();
        autocomplete.showResults();
    },

    bindResultClick:function(){
        let resultNodes = autocomplete._resultNode.getElementsByTagName("p");
        for(let i=0;i<resultNodes.length;i++){
            resultNodes[i].addEventListener('click',autocomplete.resultClickHandler(resultNodes[i],i))
        }
    },

    resultClickHandler:function(optionsNode,index){
        return function(){
            autocomplete._inputNode.value = optionsNode.innerText;
            autocomplete._resultNode.innerHTML  = autocomplete.getResultsHtml([optionsNode.innerText]);
            autocomplete.getSelectedIndex(index);
            autocomplete.outsideClickHandler()
            autocomplete.hideResults();
        }
    },

    regisgerSelectedIndexCb:function(selectedCb){
        autocomplete.getSelectedIndex = selectedCb
    },
    bindInputClick:function(){
        autocomplete._inputNode.addEventListener('click',autocomplete.inputClickHandler)
    },

    inputClickHandler:function(){
        if(autocomplete._query){
            autocomplete.showResults();
        }
        window.addEventListener('click',autocomplete.windowClickHandler)
    },


    windowClickHandler:function(e) {
        if(!autocomplete._inputNode.contains(e.target) && !autocomplete._resultNode.contains(e.target)){
            autocomplete.outsideClickHandler()
        }
    },
    bindInputChange:function(){
        autocomplete._inputNode.addEventListener('input',autocomplete.inputChangeHandler)
    },
    
    inputChangeHandler:function(e){
        let {currentTarget,cancelable} = e
        if(!cancelable){
            autocomplete._query = currentTarget.value 
            autocomplete.getSelectedIndex(null);
            autocomplete.populate(autocomplete._query);
            e.stopImmediatePropagation()
        }
    }
}

let autoCompletFn =  function(inputId,resultId,cb){
    autocomplete.init(inputId,resultId,cb);
    return {getSelectedIndex:autocomplete.regisgerSelectedIndexCb}
}
		/**
 *                 ****** FORM VALIDATION *******
 * Simple Javascript Validaiton for input fields 
 * TO USE - Call getFormInstance function with the following arguments this will return 
 * a form instance of inputElements which itself will handle the validation and showing the error logic
 * 
 * @arg  {Object[]} formInputs - formInputs array this will contain all the inputs you want validation for
 * @arg {string} formInputs[].name - The name of the input field. Will show up when validation fails
 * @arg {string} formInputs[].inputEleId - The id of the input field.
 * @arg {Functions Array} formInputs[].validationArr - You can use the Validation class functions 
 * which will be used for validations You can extend this class and create new util functions for validation
 * but these funciton should return err and msg property
 * @arg {string} type - Type of input field 
 * @arg {string} apiKey - Use this field if you want to use getValues funciton of formInstance which will
 * return the key and value pair for the formgroup input fields 
 * 
 * @returns {Object} - FormInstance object
 * 
 * @example @see {@link _includes/v2/contactSales.html}
 * 
 */

class ValidationsClass {
    static isEmpty(value,name){
        if(!value){
            return {err:true,msg:`${name} can not be empty`}
        }
    }
    static isUnChecked(value,name){
        if(!value){
            return {err:true,msg:`${name} should be selected`}
        }
    }
    static maxLimit(limit){
        return function(value,name){
            if(value.length>limit){
                return {err:true,msg:`${name} can not be greater than ${limit} digits`}
            }
        }
    }
    static isNameValid(value,name){
        let regexp = /[^a-zA-Z,. ]/;
        if(regexp.test(value)){
            return {err:true,msg:`Name is not valid`}
        }
    }
    static isEmail(value,name){
        let emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!emailRegex.test(value)){
            return {err:true,msg:`Email is not valid`}
        }
        
    }
    static validDomain(emailID) {
        let BLACKLIST = ["gmail.com","yahoo.com","yahoo.co.in","rediffmail.com","hotmail.com","yahoo.in","updated.com","cleartax.in","id.in","xyz.com","nil.com","ymail.com","outlook.com","xx.xx","abc.com","live.com","mail.com","gamil.com","junk.com","gmai.com","abc.in","live.in","a.com","x.x","a.a","rediff.com","yahoo.co.uk","leads.com","in.ey.com","123.com","xx.x","xxx.com","aa.aa","redfm.in","zz.zz","yhaoo.co.in","yahoo.om","yahoo.com.au","yahoo.co","yahoo.ca","yaho.co.in","xxx.xx","x.xx","x.com","abad.in","123gmail.com","z.z","yohoo.com","ymail.in","ymail.co","yahoomail.co.in","yahooco.in","yahoo.on","yahoo.con","yahoo.comm","yahoo.com.sg","yahoo.com.in","yahoo.coin","yahoo.co.on","yahoo.co.om","yahoo.cim","yahoo.aco.in","yahho.com","xzy.com","xyz.in","xyz.c","xys.com","xxxx.xxx","xxx.xxx","xx.in","xx.com","143gmail.com","126.com","123.comk","ac.com"];
        let mailDomain = emailID.split("@")[1];
        let isValid = !BLACKLIST.some(function (domain) {
            return mailDomain === domain;
        })
        if(!isValid){
            return {err:true,msg:`Please enter a valid business email id`}
        }
    }
    static isPhoneNoValid(value,name){
        let phoneNoRegex =  /^(\s*[\(?])?(?:([\)]?)([\-])?|[0]?)?[6789]\d{9}$/
        if(!phoneNoRegex.test(value)){
            return {err:true,msg:`Phone number is not valid`}
        }
    }

    static customValidation(cb){
        return (value,name)=>cb(value,name)
    }
    
}

class inputElements {
    constructor(inputEleId,validationArr=[],type,name,onChangeCb,apiKey,initValue){
        this._initialValues = {inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue};
        this.init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue);
    }
    init(inputEleId,validationArr,type,name,onChangeCb,apiKey,initValue=""){
      this._name = name;
      this._apiKey = apiKey
      this._validations = validationArr;
      this._type = type;
      this._inputEle = document.getElementById(inputEleId);
      this.valid = !validationArr || !validationArr.length ? true:false
      this.value = initValue
      this._onChangeCb = onChangeCb;
      this._inputEle.value = initValue;
      if(this._type=="checkbox"&&initValue){
        this._inputEle.checked = true
      }
      this.bindEle();
      this.createErrorNode();
    }
    bindEle(){
        this._inputEle.addEventListener('input',this.onChange.bind(this))
    }
    onChange({currentTarget}){
        let value = this._type=="checkbox"?currentTarget.checked:currentTarget.value
        this.validate(value);
        if(this._onChangeCb){
            this._onChangeCb(currentTarget,this)
        }
    }
   
    onError(error){
        this.insertErrorTxt(error.msg);
        this.showError();
        this.valid = false
        this.errorMsg = error.msg;
    }
    onSuccess(value){
        this.hideError();
        this.value = value
        this.valid = true;
        this._inputEle.setAttribute("value",value)
        this._inputEle.value = value
        if(this._type=="checkbox"&&value){
          this._inputEle.checked = true
        }
    }
    validate(value){
        if(this._validations.length){
            for(let i=0;i<this._validations.length;i++){
                let ele = this._validations[i];
                let error = ele(value,this._name);
                if(error && error.err){
                    this.onError(error)
                    break;
                }
                else{
                   this.onSuccess(value)
                }  
            }
        }
        else this.onSuccess(value)
    }
    insertErrorTxt(err){
        this._errorNode.innerText = err
    }
    hideError(){
        this._errorNode.style.display = "none";
    }

    showError(){
        this._errorNode.style.display = "inline-block";
    }

    createErrorNode(){
        let para = document.createElement("span");
        para.setAttribute('id', `${inputElements._inputEle}_error`);
        para.setAttribute('class','lil-text-red lil-text-s-10');
        this._errorNode = para;
        if(this._type=="checkbox"){
            this._inputEle.parentElement.insertAdjacentElement('afterend', this._errorNode);
        } else{
            this._inputEle.insertAdjacentElement('afterend', this._errorNode);
        }
    }

    reLoadEle(){
      this.init(this._initialValues.inputEleId, this._initialValues.validationArr,this._initialValues.type,this._initialValues.name,this._initialValues.onChangeCb,this._initialValues.apiKey,this._inputEle.initValue);
    }

}


class formGroup {
    _formEle={};
    constructor(formEleArr){
        this._formEle =  formEleArr.filter(Boolean).reduce(((resultObj,ele)=>{
            return {...resultObj,[ele.inputEleId]:new inputElements(ele.inputEleId,ele.validationArr,ele.type,ele.name,ele.onChangeCb,ele.apiKey,ele.initValue)}
        }),{})
    }
    isFormValid(){
        for (const key in this._formEle) {
            const element = this._formEle[key];
            if(element.valid == false) return false
        }
        return true
    }
    add({inputEleId,validationArr,type,name,onChangeCb,apiKey}){
        let inputInstance = new inputElements(inputEleId,validationArr,type,name,onChangeCb,apiKey)
        this._formEle[inputEleId] = inputInstance;
    }
    remove(id){
        delete this._formEle[id]
    }
    getValues(){
        let values = {}
        for (const key in this._formEle) {
            const element = this._formEle[key];
            values[element._apiKey]= element.value
        }
        return values
    }
    validateFormEle(){
        let errorObj = {};
        for(const key in this._formEle) {
            const element = this._formEle[key];
            element.validate(element.value);
            if( !element.valid )
                errorObj[element._name] = element.errorMsg;
        }
        return errorObj;
    }
    reload(){
      for(const key in this._formEle) {
        const element = this._formEle[key];
        element.reLoadEle()
      }
    }

}

var getFormInstance = (formEleArr)=>new formGroup(formEleArr)

		const formId = 'top-strip-form-modal';
		let selectedIndex ;
		let isWhatsAppConsentPresent;
		let errorObj;

		let topStripFormValidateObj = [
				{name:"Name",inputEleId:'username-formbusiness',validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Name"},
				{name:"Phone No",inputEleId:'phoneno-formbusiness',validationArr:[ValidationsClass.isEmpty,ValidationsClass.isPhoneNoValid],type:"text",apiKey:"PhoneNo"},
				{name:"City",inputEleId:'city-formbusiness',validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"City"},
				{name:"Purposes of Loan",inputEleId:'purposes-loan',validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handlepurposeLoan,apiKey:"PurposesOfLoan"},
				{name:"Purposes of Loan Other",inputEleId:'purposes-loan-other',validationArr:[],type:"text",apiKey:"PurposesLoanOther"},
				{name:"What is your business",inputEleId:'what-business',validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Business"},
                {name:"Annual turnover - In lacs",inputEleId:'annual-turnover',validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",apiKey:"AnnualTurnover"},
                {name:"Current financing/loan channels",inputEleId:'current-financing',validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56)],type:"text",onChangeCb:handleCurrentFinance,apiKey:"CurrentFinancing"},
				{name:"Current financing/loan channels Other",inputEleId:'current-financing-other',validationArr:[],type:"text",apiKey:"CurrentFinancingOther"},
                {name:"Current interest rate",inputEleId:'current-interest',validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(2)],type:"text",apiKey:"CurrentInterest"},
                {name:"GST registered",inputEleId:"gst-register",validationArr:[],type:"checkbox",apiKey:"gstRegister"}
			]

		let formInstance = getFormInstance(topStripFormValidateObj)

		function handlepurposeLoan(target) {
			if(target.value == 'Other'){
				document.getElementById('purposes-loan-other').classList.remove('lil-hidden');
			}
			else {
				document.getElementById('purposes-loan-other').classList.add('lil-hidden');
			}
		};
        function handleCurrentFinance(target) {
			if(target.value == 'Other'){
				document.getElementById('current-financing-other').classList.remove('lil-hidden');
			}
			else {
				document.getElementById('current-financing-other').classList.add('lil-hidden');
			}
		};

		let submitBtn = document.getElementById('submit-top-stripe')
		submitBtn.addEventListener('click',(e)=>{
			if(formInstance.isFormValid()){
				let formdata = formInstance.getValues()
				let userData = {...formdata,
                    gstRegister: formdata.gstRegister?"Yes":"No",
					"utm-source" :new URL(window.location.href).searchParams.get("utm_source"),
					"utm-campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
					PageURL :window.location.href,
					Date :new Date(new Date()).toDateString(),
      				Time:new Date(new Date()).toLocaleTimeString(),
				}
				submitBtn.classList.add('lil-btn-disabled');
				submitForm(userData)
			}
			else{
				formInstance.validateFormEle()
			}

		})

		function submitForm(formData){
			let url = `https://script.google.com/macros/s/AKfycbyPgKtHdPbZtunsOD2YbxQKRcSXL4HLFBAQBvjsyneohF020lyu/exec?${new URLSearchParams(formData)}`;
			fetch(url)
			.then(response => response.json())
  			.then(data => {
				submitBtn.classList.remove('lil-btn-disabled');
				document.getElementById('stripe-success-wrapper')
				.classList.remove("lil-hidden");
				document.getElementById('stripe-form-wrapper').classList.add("lil-hidden");
			  })
			.catch(err=>{
				submitBtn.classList.remove('lil-btn-disabled');
				document.querySelector('stripe-error-msg').innerHTML = "Request failed! Please try again.";
			})
		}
	})

</script>
	
</body>

</html>