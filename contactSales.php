
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<title>
		Contact Sales - Taxlix
	</title>
	
	<meta name="keywords" content="Contact Sales" />
	<meta name="description" content="" />
	<meta name="author" content="ClearTax" />
	<meta name="copyright" content="Defmacro Software Pvt. Ltd. Copyright (c) 2020" />

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no" />

	<meta name="google-site-verification" content="QRKBEdtz1fiPAGB6su7gSD9W9Bf2XnHN2VOGKgrETWE" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:app:id:googleplay" content="in.cleartax.cleartax" />
	<meta name="twitter:site" content="@ClearTax_In" />
	<meta name="twitter:title" content="Contact Sales - Cleartax" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image:src"
		content="https://assets1.cleartax-cdn.com/cleartax/images/1599836130_frame14.jpg" />
	<meta name="twitter:domain" content="http://cleartax.in" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"cae9b2cfc9",applicationID:"230127566"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(9),c=t(10),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(11);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(u&&u<r.startTime)return;var i=[r],o=a({});o&&i.push(o),l("lcp",i)}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){var e=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(e)return e.type&&(t["net-type"]=e.type),e.effectiveType&&(t["net-etype"]=e.effectiveType),e.rtt&&(t["net-rtt"]=e.rtt),e.downlink&&(t["net-dlink"]=e.downlink),t}function c(t){if(t instanceof y&&!w){var e=Math.round(t.timeStamp),n={type:t.type};a(n),e<=v.now()?n.fid=v.now()-e:e>v.offset&&e<=Date.now()?(e-=v.offset,n.fid=v.now()-e):e=v.now(),w=!0,l("timing",["fi",e,n])}}function f(t){"hidden"===t&&(u=v.now(),l("pageHide",[u]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var u,s,d,p,l=t("handle"),v=t("loader"),m=t(8),g=t(3),y=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(h){}d=new PerformanceObserver(i);try{d.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}p=new PerformanceObserver(o);try{p.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var w=!1,b=["click","keydown","mousedown","pointerdown","touchstart"];b.forEach(function(t){document.addEventListener(t,c,g(!1))})}m(f)}},{}],7:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],8:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],9:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],10:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],11:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){h[t]=m(t).concat(e)}function v(t,e){var n=h[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return h[t]||[]}function g(t){return p[t]=p[t]||i(n)}function y(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var h={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:y,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(9),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!M++){var t=T.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+T.offset],null,"api"),c("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===m.readyState&&o()}function o(){c("mark",["domContent",a()+T.offset],null,"api")}var a=t(5),c=t("handle"),f=t(9),u=t("ee"),s=t(7),d=t(2),p=t(3),l=d.getConfiguration("ssl")===!1?"http":"https",v=window,m=v.document,g="addEventListener",y="attachEvent",h=v.XMLHttpRequest,w=h&&h.prototype,b=!1;NREUM.o={ST:setTimeout,SI:v.setImmediate,CT:clearTimeout,XHR:h,REQ:v.Request,EV:v.Event,PR:v.Promise,MO:v.MutationObserver};var E=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1216.min.js"},O=h&&w&&w[g]&&!/CriOS/.test(navigator.userAgent),T=e.exports={offset:a.getLastTimestamp(),now:a,origin:E,features:{},xhrWrappable:O,userAgent:s,disabled:b};if(!b){t(1),t(6),m[g]?(m[g]("DOMContentLoaded",o,p(!1)),v[g]("load",r,p(!1))):(m[y]("onreadystatechange",i),v[y]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var M=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(10),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"cae9b2cfc9","applicationID":"230127566","transactionName":"NVUGNUpUWxBTU0ZeXAwfIhRWVkEKXV4dREcDRA0CZ0VUBFdDHEFaB0cXPlBUWwdeVUANQBZREAhbakUCVVVBaEULVRM=","queueTime":0,"applicationTime":9,"agent":""}</script>
	<meta itemprop="name" content="Contact Sales - Cleartax" />
	<meta itemprop="description" content="" />
	<meta itemprop="image"
		content="https://assets1.cleartax-cdn.com/cleartax/images/1599836130_frame14.jpg" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Contact Sales - Cleartax" />
	<meta property="og:image"
		content="https://assets1.cleartax-cdn.com/cleartax/images/1599836130_frame14.jpg" />
	<meta property="og:image:alt" content="" />
	<meta property="og:description" content="" />

	 
	<link rel="shortcut icon" href="https://assets1.cleartax-cdn.com/cleartax/images/1644906212_clearfavicon.png" type="image/png" />
	
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
	
		<link rel="canonical" href="https://cleartax.in/contact-sales">
	
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
            'content_group': 'v2_contact-sales',
        });
    }
    const path = window.location.pathname;
    gtag('event', 'pageview', {
        'page_title': document.title,
        'current_page_pathname': path.endsWith('/') ? path.slice(0, path.length -1) : path,
        'parent_category': 'v2',
        'sub_category': 'contact-sales',
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
	<span id="pageCategory" style="display: none">contact-sales</span>
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
          "url": "https://cleartax.in/s/contact-sales?pageCategoryType=einvoice&ref=/s/contact-sales/",
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

    Nottypot JS and CSS Includes
    <link rel="stylesheet" href="https://assets1.cleartax-cdn.com/cleartax/images/1632576721_nottypot.jquery.min.css">
	<link type="text/css" rel="stylesheet" href="https://assets1.cleartax-cdn.com/content-prod/css/animate.css" media="print" onload="this.media='all'; this.onload = null"  />
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <style>
	  .player-container {
	max-width: 700px;
	margin: auto;
}
.playbtn-thumbnail-container{
  position: absolute;
  height: 100%;
  width: 100%;
 
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;

}
.player {
	width: 100%;
}

.video-played{
  height: 100%;
  width: 100%;
  height: 0;
  padding-bottom: 57%; 
  position: relative;
  overflow: hidden;
}

.player video {
    cursor: pointer;
	width: 100%;
	height: auto;
	position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.controls {
	padding: 0;
	position: absolute;
	bottom: -80px;
	width: 100%;
	height: 47px;
	box-sizing: border-box;
	background: linear-gradient(
		180deg,
		rgba(37, 37, 37, 0) 10%,
		rgba(37, 37, 37, 0.6) 80%
	);
	transition: all 0.1s ease-in 5s;
}
.player:hover .controls {
  bottom: 0;
	transition: all 0.2s ease-out;
}



.player:fullscreen:hover .controls{
  bottom: 0;
}

.time {
  color:#efefef;
	margin-right: 10px;
}

.controls-main {
	width: calc(100% - 40px);
	margin: auto;
	height: 100%;
	display: flex;
	justify-content: space-between;
}
.controls-left,
.controls-right {
	flex: 1;
	display: flex;
	align-items: center;
	overflow: hidden;
}
.controls-left {
	padding-left: 10px;
}
.controls-right {
	padding-right: 10px;
	justify-content: flex-end;
}
.volume {
	display: flex;
	align-items: center;
}
.volume-btn {
    cursor: pointer;
	margin-right: 10px;
}
.volume-btn #volume-off, .volume-btn #volume-high {
	opacity: 0;
}
.volume-btn.loud #volume-high{
	opacity: 1;
}
.volume-btn.muted #volume-off {
	opacity: 1;
}
.volume-btn.muted #volume-high, .volume-btn.muted #volume-low {
	opacity: 0;
}
.volume-slider {
    cursor: pointer;
	height: 2px;
	width: 80px;
	background: rgba(60, 60, 60, 0.6);;
	border-radius: 6px;
	position: relative;
    margin-bottom: 1px;
}
.volume-slider:hover{
    height: 4px;
}
.volume-filled {
	background: #efefef;
	width: 100%;
	height: 100%;
	border-radius: 6px;
	transition: width 0.2s ease-in-out;
}
.screensizeIcon:hover, .play-btn:hover.play-btn:before, .play-btn:hover.play-btn:after{
	/* background: var(--accent); */
  transform: scale(1.2);
}
button {
}
.play-btn {
    cursor: pointer;
    width: 20px;
    height: 20px;
	position: relative;
    margin-right: 10px;
	transform: rotate(-90deg) scale(0.8);
	transition: -webkit-clip-path 0.3s ease-in 0.1s, shape-inside 0.3s ease-in 0.1s,
		transform 0.8s cubic-bezier(0.85, -0.25, 0.25, 1.425);
}
.play-btn.paused {
	transform: rotate(0deg);
}
.play-btn:before,
.play-btn:after {
	content: "";
	position: absolute;
	background: #efefef;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	transition: inherit;
}
.play-btn:before {
	-webkit-clip-path: polygon(0 10%, 100% 10%, 100% 40%, 0 40%);
	shape-inside: polygon(0 10%, 100% 10%, 100% 40%, 0 40%);
}
.play-btn:after {
	-webkit-clip-path: polygon(0 60%, 100% 60%, 100% 90%, 0 90%);
	shape-inside: polygon(0 60%, 100% 60%, 100% 90%, 0 90%);
}
.play-btn.paused:before {
	-webkit-clip-path: polygon(10% 0, 90% 51%, 90% 51%, 10% 51%);
	shape-inside: polygon(0 0, 100% 51%, 100% 51%, 0 51%);
}
.play-btn.paused:after {
	-webkit-clip-path: polygon(10% 49.5%, 80% 49.5%, 90% 49.5%, 10% 100%);
	shape-inside: polygon(10% 49.5%, 80% 49.5%, 90% 49.5%, 10% 100%);
}
button:focus {
	outline: none;
}
.speed-list {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
	margin-right: 20px;
	text-align: center;
}
.speed-list li {
	color: #efefef;
	padding: 5px;
	cursor: default;
}
.speed-list li:hover,
.speed-list li.active {
	color: #1678fb;
	font-weight: bold;
}
.fullscreen {
    cursor: pointer;
	display: flex;
	justify-content: center;
}

.progressBar {
  --thumbSize: 18px;
  --trackSize: 2px;
  --thumbBg: #fff;
  --trackBg: #f2f2f2;
  --progressBg: #1678fb;

  --webkitProgressPercent: 0%;
}

.progressBar {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  cursor: pointer;
    height: 2px;
    width: calc(100% - 40px);
    margin: auto;
    border-radius: 6px;
    position: absolute;
    left: 20px;
    bottom: 100%;
    transition: height 0.1s ease-in-out;


}
.progressBar:focus {
  outline: none;
}
.__thumbnail{
  cursor: pointer;
  height: 65px;
  position: absolute;
  z-index: 1;
}
/* Thumb */
.progressBar::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: var(--thumbSize);
  height: var(--thumbSize);
  background-color: var(--thumbBg);
  border-radius: calc(var(--thumbSize) / 2);
  border: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  margin-top: calc(((var(--thumbSize) - var(--trackSize)) / 2) * -1);
  cursor: pointer;
}





/* Track */
.progressBar::-webkit-slider-runnable-track {
  height: var(--trackSize);
  background-image: linear-gradient(
    90deg,
    var(--progressBg) var(--webkitProgressPercent),
    var(--trackBg) var(--webkitProgressPercent)
  );
  border-radius: calc(var(--trackSize) / 2);
}
.progressBar:hover::-webkit-slider-runnable-track {
  height: 4px;
}

.hidden{
  visibility: hidden;
}
.show{
  visibility: visible;
}
/* .changeBottomControls{
  bottom:0
} */

.slidecontainer {
  width: 100%;
}
.slider:hover {
  opacity: 1;
}  
 
.slider {
  -webkit-appearance: none;
  width: 100px;
  height: 2px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.hide-mobile{
  display: none;
}


/* Play btn styles */
.stroke-solid {
        stroke-dashoffset: 0;
        stroke-dashArray: 300;
        stroke-width: 4px;
        transition: stroke-dashoffset 1s ease,  opacity 1s ease;
    }

    .icon {
        transform: scale(0.8);
        transform-origin: 50% 50%;
        transition: transform 200ms ease-out;
    }

    #playBtn:hover .stroke-solid {
        opacity: 1;
        stroke-dashoffset: 300;
    }

    #playBtn:hover .icon {
        transform: scale(0.9);
    }

    .playBtn {
        cursor: pointer;
        position: absolute ;
         top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%); 
    }
   
@media screen and (max-width: 420px) {
  .mobile-player{
    height: 100%;
    width: 100%;
    top: 0;
    padding-top: 25%;
    background-color: rgba(0,0,0, 0.7);
    left: 0;
    position: fixed;
    z-index: 99999999;
  }
  .cross-icon-mobile{
    color: #efefef;
    position: fixed;
    top: 30px;
    right:10px;
    font-size: 20px;
  } 
  .show-mobile{
    display: block;
  }
  .slider{
    display: none;
  }
}

  </style>
<style>
	#socialProofDiv{
		display: none;
		margin-top: 5px;
	}
	#gst-video, #e-invoice-video, #invoice-discounting-video, #max-itc-video{
		background-color: #e5e5e5;
		background-repeat: no-repeat;
		background-size: 30px 30px;
		background-position: center;
	}
	.sp-comp-img{
		width: 120px;
		margin: 15px 30px;
	}
	.lil-text-s-16{
		font-size: 16px;
	}
	/* style for carousel */


.document-center {
/* position: absolute; */
width: 82%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;
margin-top: 18px;
position: relative;
}

/*We do this because the carousel needs to be 100% width 
in order for the aspect ratio trick to work*/
.carousel-container {
max-width: 2000px;
width: 100%;
height: 140px;
}

/*This is the actual carousel. Overflow hidden acts as a mask*/

.carousel {
position: relative;
width: 100%;
height: 300px;
/*Width of image is 980px. Height is 570px.*/
padding-top: calc(570 / 980 * 100%);
border-radius: 20px;
overflow: hidden;
}

.arrowContainer{
	position: absolute;
    left: -24px;
    top: 50%;
    width: 113%;
    display: flex;
    justify-content: space-between;
}

.slider-title{
	color: #334257;
}

video{
	border-radius: 20px;
	overflow: hidden;
	object-fit: inherit;
}

.circle-container {
position: absolute;
display: flex;
justify-content: center;
align-items: start;
bottom: 0;
left: 0;
width: 100%;
height: 45px;
}

.circle {
border: 1px solid white;
width: 12px;
height: 12px;
border-radius: 50%;
margin: 0 5px;
cursor: pointer;
}

.circle-fill {
background-color: white;
}

.text-container p:nth-child(1) {
margin: 10px 100px;
font-size: 1.5em;
}

.text-container p:nth-child(2) {
margin: 10px 100px 20px 100px;
}

.carousel-screen {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
/* border: 1px solid gray; */
/* border-radius: 5px; */
}
.brandImages{
	width: 80%;
	margin: auto;
	margin-top: 5%;
}

/* Animations */
@keyframes toRight {
0% {
	left: 0;
}
100% {
	left: 100%;
}
}

@keyframes toLeft {
0% {
	left: 0;
}
100% {
	left: -100%;
}
}

@keyframes comeRight {
0% {
	left: 100%;
}
100% {
	left: 0;
}
}

@keyframes comeLeft {
0% {
	left: -100%;
}
100% {
	left: 0;
}
}
@media screen and (max-width:768px){
	.document-center{
		width: 100%;
	}

	.headingMain{
		font-size: 32px;
	}

	#forms-container{
		position: relative;
    	margin-top: 10%;
	}

	.arrowContainer{
		position: absolute;
    	left: -27px;
    	top: 50%;
    	width: 117%;
    	display: flex;
    	justify-content: space-between;
	}
}

.activeFormType{
	color: #1678FB;
	border-bottom: solid 2px #1678FB;
}
.notActiveFormType{
	color: #ADB1BB;
	border-bottom: solid 1px rgba(0, 0, 0, 0.1);
}

.formSelect{
	background-color: white !important;
	border: solid 1px #E0E0E0;
	padding: 0.6rem;
}
.productTabActive{
	font-size: 14px;
	border-radius: 20px;
	color: #1678FB;
	border: solid 1px #1678FB;
}
.productTabNonActive{
	font-size: 14px;
	border-radius: 20px;
	color: #ADB1BB;
	border: solid 1px rgba(0, 0, 0, 0.1);
}
.pointsDemo{
	list-style-type: disc; 
	color: #9092A3;
	padding-left: 25px;
}

.arrow:hover{
	transition: 0.4s;
	border-radius: 50%;
	transform: scale(1.2);
	cursor: pointer;
}
.border-form-container{
	border: solid 1px rgb(240, 240, 240);
}

.floating-btn{
	align-items: center;
	z-index: 5000;
	position: fixed;
	left: 50%;
	bottom: 10px;
	transform: translate(-50%, 0%);
	background-color: #1678FB;
	border-radius: 20px;
	padding: 6px 16px;
	box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.096);
	/* border: solid 1px #1678FB; */
	/* color: #1678FB; */
	color: white;
	font-weight: 500;
	animation: bounce 1600ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
  	cursor: pointer;
}


@keyframes bounce {
50% {
	transform: translate(-50%, -10%);
  }
}

.arrow-container{
	margin-left: 12px;
}

.videoContainer{
	position: relative;
	width: 90%;
	margin: auto;
}

.playBtn{
	position: absolute;
	left: 50%;
	top: 50%;
	z-index: 1;
	transform: translate(-50%,-50%);
	cursor: pointer;
	width: 100%;
	height: 100%;
	display: grid;
	place-items: center;
}

.playBtn:hover{
	transform: translate(-50%,-50%) !important;
}


.ratingCard{
	display: flex;
	justify-content: center;
	flex-direction: column;
	background-color: #F8FBFF;
	border-radius: 20px;
	width: 95%;
	margin: auto;
}


</style>
<div class="lil-container" id="mainContainer">
	<section class="lil-flex lil-flex-wrap lil-pt-8 lg:lil-pt-10 lil-mt-12 lil-pb-32 md:lil-pt-6 md:lil-items-start sm:lil-pt-0 sm:lil-mt-8 sm:lil-pb-0 md:lil-pt-10 md:lil-pb-0  md:lil-flex-col-reverse md:lil-relative sm:lil-relative">
		<div id="maincontainer-leftside" class="lil-w-5/12 sm:lil-w-full sm:lil-mb-6 md:lil-w-full md:lil-mb-6 lg:lil-mt-24 xl:lil-mt-5">
			<h3 class="lil-pr-8 sm:lil-pr-0 xl:lil-text-s-40 md:lil-text-s-40 headingMain">Join <span id="joined_qty"><span class="lil-text-green-350">600K+</span> Businesses</span> simplifying their finances with Clear</h3>
			<p class="lil-text-s-16 lil-font-hairline lil-pr-8 sm:lil-pr-0 md:lil-pr-0 lil-mt-4 lil-mb-3">
				<span class="lil-font-medium lil-mb-1">Demo will cover</span>
				<ul class="pointsDemo">
					<li class="lil-mt-2">Walk-through on main features of <br/>selected products by our experts</li>
					<li class="lil-mt-2">Integration with your ERP system</li>
					<li class="lil-mt-2">Custom pricing plans</li>
				</ul>
			</p>
			<div id="socialProofDiv">
				<p class="slider-title lil-text-s-14 lil-mt-6 lil-pr-12 md:lil-pr-0 sm:lil-pr-0">Look at what our customers has to say : 
				</p>

				<div class="document-center">
				  <!--This carousel-container only exists so we can do the 
				  aspect ratio tricks in CSS-->
				  <div class="carousel-container">
					<div class="carousel" id="carousel-1" auto-scroll="">
					  <!--The uppermost screen will appear first. This is due to JavaScript-->
					  
					 	 <section class="carousel-screen">
							  <div class="ratingCard lil-p-6">
								  <p class="slider-title lil-text-s-18 lil-mb-2 lil-font-bold lil-text-center">About GST Product</p>
								 <div class="lil-flex lil-mx-auto lil-items-center lil-mt-6">
									 <img src=https://assets1.cleartax-cdn.com/cleartax/images/1650428971_stargst.png width="120px" alt=""> <span class="lil-ml-4 lil-text-s-18 lil-font-semibold" style="color: #334257;">4.6/5</span>
								 </div> 
								  <div class="lil-flex lil-mx-auto lil-items-center lil-mt-5">
									<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.25 15.333C10.9424 15.333 13.125 13.1504 13.125 10.458C13.125 7.76562 10.9424 5.58301 8.25 5.58301C5.55761 5.58301 3.375 7.76562 3.375 10.458C3.375 13.1504 5.55761 15.333 8.25 15.333Z" stroke="#1678FB" stroke-width="2" stroke-miterlimit="10"/>
										<path d="M14.5703 5.76474C15.2408 5.57582 15.9441 5.53279 16.6326 5.63853C17.3212 5.74427 17.9791 5.99634 18.562 6.37775C19.1449 6.75917 19.6393 7.26108 20.012 7.84967C20.3846 8.43826 20.6268 9.09986 20.7221 9.78992C20.8175 10.48 20.764 11.1825 20.565 11.8501C20.366 12.5177 20.0263 13.1349 19.5687 13.6602C19.1111 14.1854 18.5463 14.6065 17.9123 14.8951C17.2782 15.1837 16.5897 15.3331 15.8931 15.3331" stroke="#1678FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M1.5 18.8389C2.26138 17.7559 3.27215 16.872 4.44698 16.2618C5.62182 15.6516 6.92623 15.3331 8.25008 15.333C9.57393 15.333 10.8784 15.6514 12.0532 16.2615C13.2281 16.8717 14.239 17.7555 15.0004 18.8384" stroke="#1678FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.8926 15.333C17.2166 15.3321 18.5213 15.6501 19.6962 16.2603C20.8712 16.8705 21.8819 17.7548 22.6426 18.8384" stroke="#1678FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<p class="lil-font-bold lil-text-s-16 lil-ml-3" style="color: #334257;">15k+ ratings</p> <span class="lil-ml-1">(in last 90 days)</span>
								  </div>
							  </div>
					  	</section>
					  
					 	 <section class="carousel-screen">
							  <div class="ratingCard lil-p-6">
								  <p class="slider-title lil-text-s-18 lil-mb-2 lil-font-bold lil-text-center">About E-Invoicing Product</p>
								 <div class="lil-flex lil-mx-auto lil-items-center lil-mt-6">
									 <img src=https://assets1.cleartax-cdn.com/cleartax/images/1650428802_stareinvoice.png width="120px" alt=""> <span class="lil-ml-4 lil-text-s-18 lil-font-semibold" style="color: #334257;">4.5/5</span>
								 </div> 
								  <div class="lil-flex lil-mx-auto lil-items-center lil-mt-5">
									<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.25 15.333C10.9424 15.333 13.125 13.1504 13.125 10.458C13.125 7.76562 10.9424 5.58301 8.25 5.58301C5.55761 5.58301 3.375 7.76562 3.375 10.458C3.375 13.1504 5.55761 15.333 8.25 15.333Z" stroke="#1678FB" stroke-width="2" stroke-miterlimit="10"/>
										<path d="M14.5703 5.76474C15.2408 5.57582 15.9441 5.53279 16.6326 5.63853C17.3212 5.74427 17.9791 5.99634 18.562 6.37775C19.1449 6.75917 19.6393 7.26108 20.012 7.84967C20.3846 8.43826 20.6268 9.09986 20.7221 9.78992C20.8175 10.48 20.764 11.1825 20.565 11.8501C20.366 12.5177 20.0263 13.1349 19.5687 13.6602C19.1111 14.1854 18.5463 14.6065 17.9123 14.8951C17.2782 15.1837 16.5897 15.3331 15.8931 15.3331" stroke="#1678FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M1.5 18.8389C2.26138 17.7559 3.27215 16.872 4.44698 16.2618C5.62182 15.6516 6.92623 15.3331 8.25008 15.333C9.57393 15.333 10.8784 15.6514 12.0532 16.2615C13.2281 16.8717 14.239 17.7555 15.0004 18.8384" stroke="#1678FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M15.8926 15.333C17.2166 15.3321 18.5213 15.6501 19.6962 16.2603C20.8712 16.8705 21.8819 17.7548 22.6426 18.8384" stroke="#1678FB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									<p class="lil-font-bold lil-text-s-16 lil-ml-3" style="color: #334257;">3.5k+ ratings</p> <span class="lil-ml-1">(in last 90 days)</span>
								  </div>
							  </div>
					  	</section>
					  
					</div>
					<div class="arrowContainer" id="controller">
						<div class="left-arrow arrow">
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="14" cy="14" r="14" fill="#F5F5F5"/>
								<path d="M16.0208 9.14959C16.3768 9.50814 16.3758 10.0871 16.0185 10.4444L12.4664 13.9965L16.0196 17.5574C16.376 17.9146 16.3757 18.493 16.0189 18.8499C15.6618 19.207 15.0828 19.207 14.7257 18.8499L10.5204 14.6446C10.1625 14.2867 10.1625 13.7063 10.5204 13.3483L14.7214 9.1473C15.0805 8.78822 15.663 8.78925 16.0208 9.14959Z" fill="black"/>
							</svg>															
						</div>
						<div class="right-arrow arrow">
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="14" cy="14" r="14" transform="rotate(180 14 14)" fill="#F5F5F5"/>
								<path d="M11.9792 18.8504C11.6232 18.4919 11.6242 17.9129 11.9815 17.5556L15.5336 14.0035L11.9804 10.4426C11.624 10.0854 11.6243 9.50698 11.9811 9.15014C12.3382 8.79303 12.9172 8.79303 13.2743 9.15014L17.4796 13.3554C17.8375 13.7133 17.8375 14.2937 17.4796 14.6517L13.2786 18.8527C12.9195 19.2118 12.337 19.2107 11.9792 18.8504Z" fill="black"/>
							</svg>																
						</div>
					</div>
				  </div>
				</div>
				<script src="carousel-1-code.js"></script>
				<!--Script. Do not touch!-->
			  <script>
				  //Right Arrow & Left Arrow
				let rightArrow = document.querySelector("#controller .right-arrow");
				let leftArrow = document.querySelector("#controller .left-arrow");
				//List of all of the screens in carousel
				let screenStore = document.querySelectorAll("#carousel-1 .carousel-screen");
				let numOfScreens = screenStore.length;
				//List of all the circle stores
				let circleStore = document.querySelectorAll("#carousel-1 .circle-container .circle");
				//number to target main screen
				let currentScreen = 0;
				//currently in animation or not
				let inAnim = false;
				//Animation Time
				let animTime = 500;
				let curenctTime = 0;

				//Sort out starting position
				sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
				//Sort out circle styling
				highlightCircle(circleStore[0]);

				//User clicks on rightArrow
				rightArrow.addEventListener("click", () => {
					startAnim("right");
				});

				//User clicks on the leftArrow
				leftArrow.addEventListener("click", () => {
					startAnim("left");
				});

				//Start animation. Either towards left or right
				function startAnim(direction) {
					if(!inAnim) {
						inAnim = true;
						if(direction === "right") {
							moveRight();
							highlightCircle(circleStore[currentScreen + 1], "right");
						}else if(direction === "left"){
							moveLeft();
							highlightCircle(circleStore[currentScreen - 1], "left");
						}else{
							isAnim = false;
							return
						}
					}
				}

				//Move to the right
				function moveRight() {
					//Move towards Next screen as usual
					if(currentScreen < numOfScreens - 1){
					toLeft(screenStore[currentScreen]);
					comeRight(screenStore[currentScreen + 1]);
					setTimeout(() => {
						inAnim = false;
						currentScreen++;
						sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
					}, animTime)
					}else{
						//Or the screen coming in is the first screen again
						toLeft(screenStore[currentScreen]);
						comeRight(screenStore[0]);
						setTimeout(() => {
							inAnim = false;
							currentScreen = 0;
							sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
						}, animTime)
					}
				}

				//Move to the left
				function moveLeft() {
					//Move back to screen previously on, as usual
					if(currentScreen > 0){
						toRight(screenStore[currentScreen]);
						comeLeft(screenStore[currentScreen - 1]);
						setTimeout(() => {
						inAnim = false;
						currentScreen--;
						sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
						}, animTime)
					}else{
						//Move back to the last screen container
						toRight(screenStore[currentScreen]);
						comeLeft(screenStore[numOfScreens - 1]);
						setTimeout(() => {
							inAnim = false;
							currentScreen = numOfScreens - 1;
							sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
							}, animTime)
					}
				}

				//User clicks on one of the circles
				circleStore.forEach(circle => {
					circle.addEventListener("click", event => {
						if(!inAnim){
						//Convert NodeList to Array, to use 'indexOf' method.
						let circleStoreArray = Array.prototype.slice.call(circleStore);
						let circleIndex = circleStoreArray.indexOf(event.target);
						//Configure circle styling
						highlightCircle(event.target);
						//Work out whether we need to move right or left, or nowhere.
						if(circleIndex > currentScreen){
							changeScreenCircleClick(circleIndex, "right");
						}else if (circleIndex < currentScreen){
							changeScreenCircleClick(circleIndex, "left");
						}
					}
				})
				})

				function changeScreenCircleClick(circleIndex, direction) {
					inAnim = true;
					if(direction === "right"){
						sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[circleIndex]);
						toLeft(screenStore[currentScreen]);
						comeRight(screenStore[circleIndex]);
					}else if (direction === "left"){
						sortPositioning(screenStore[currentScreen], screenStore[circleIndex], screenStore[currentScreen + 1]);
						toRight(screenStore[currentScreen]);
						comeLeft(screenStore[circleIndex]);
					}else{
						inAnim = false;
						return
					}
					setTimeout(() => {
					inAnim = false;
					currentScreen = circleIndex;
					sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
					}, animTime)
				}

				function highlightCircle(circleSelect, direction) {
					if(circleSelect === undefined && direction === "right"){
						circleSelect = circleStore[0];
					}else if (circleSelect === undefined && direction === "left"){
						circleSelect = circleStore[numOfScreens - 1];
					}
					circleStore.forEach(circle => {
						if(circle === circleSelect){
							circle.classList.add("circle-fill");
						}else{
							circle.classList.remove("circle-fill");
						}
					})
				}


				//Animation methods
				function toLeft(screen) {
					screen.style.animation = "toLeft 0.5s ease-in-out forwards";
					setTimeout(() => {
						screen.style.animation = "";
					}, animTime);
				}

				function toRight(screen) {
					screen.style.animation = "toRight 0.5s ease-in-out forwards";
					setTimeout(() => {
						screen.style.animation = "";
					}, animTime);
				}

				function comeRight(screen) {
					screen.style.animation = "comeRight 0.5s ease-in-out forwards";
					setTimeout(() => {
						screen.style.animation = "";
					}, animTime);
				}

				function comeLeft(screen) {
					screen.style.animation = "comeLeft 0.5s ease-in-out forwards";
					setTimeout(() => {
						screen.style.animation = "";
					}, animTime);
				}



				//Sort positioning. Don't want images to overlap
				function sortPositioning(mainScreen, leftScreen, rightScreen) {
					//If right screen is undefined. We need to repeat first screen again
					if(rightScreen === undefined){
						rightScreen = screenStore[0];
					}
					//If left screen is undefined. We use the last screen
					if(leftScreen === undefined){
						leftScreen = screenStore[numOfScreens - 1];
					}
					screenStore.forEach(screen => {
						if(screen === mainScreen){
							screen.style.display = "block";
							screen.style.left = "0px";
						}else if (screen === leftScreen){
							screen.style.display = "block";
							screen.style.left = "-100%";
						}else if (screen === rightScreen){
							screen.style.display = "block";
							screen.style.left = "100%";
						}else{
							screen.style.display = "none";
						}
					})
				}

				//Auto Scroll feature
				let carousel = document.getElementById("carousel-1");
				let scrollTime = Number(carousel.getAttribute("auto-scroll"));
				//Only implement the feature if the user has included the attribute 'auto-scroll'.
				if(scrollTime) {
					//Auto Scroll will be set up the very first time
					let autoWipe = setInterval(() => {
						startAnim("right");
					}, scrollTime);
					//Clear the timer when they hover on carousel
					carousel.addEventListener("mouseenter", () => {
						clearInterval(autoWipe);
					});
					//Re-initialise the timer when they hover out of the carousel
					carousel.addEventListener("mouseleave", () => {
						autoWipe = setInterval(() => {
							startAnim("right");
						}, scrollTime);
					})

				}
			  </script>
			</div>
			<div id="firstFoldText">
			</div>
		</div>
		<div id="forms-container" class="lil-border-grey-350 lil-shadow-xl border-form-container lil-rounded-lg lil-pb-6 lil-w-7/12 md:lil-mb-10 md:lil-w-full sm:lil-mb-10 sm:lil-w-full">
			<div id="-wrapper" formIdentifier="" class="sm:lil-mb-10 md:lil-mb-10 ">
				<p class="error-msg lil-text-red lil-text-s-10 lil-mb-4 lg:lil-mb-3 lil-text-center"></p>
				<div class="lil-mt-4 contact-sales-form " data-identifier="" data-location="" data-category="contact-sales">
					<div class="lil-w-full lil-mb-4  lg:lil-mb-3  sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0">
						<div class="lil-flex align-center lil-border">
							<div class="align-center activeFormType lil-flex lil-w-1/2" id="type-business">
								<div class="lil-pb-4 lil-text-s-16 lil-text-center lil-w-full lil-rounded-lg lg:lil-text-s-12 hover:lil-text-blue-350 lil-cursor-pointer lil-font-bold">I work at a <br class="xl:lil-hidden md:lil-hidden"/>business</div>
							</div>
							<div class="align-center notActiveFormType lil-flex lil-w-1/2" id="type-taxExpert">
								<div class="lil-pb-4 lil-text-s-16 lil-text-center lil-w-full lg:lil-text-s-12 lil-rounded-lg hover:lil-text-blue-350 lil-cursor-pointer lil-font-bold">I work at a <br class="xl:lil-hidden md:lil-hidden"/>CA firm</div>
							</div>
						</div>
					</div>
			
					<!-- Form For Type Business -->
					<form class="lil-mt-6 lil-px-5" id="formbusiness" action="javascript:void(0);">
						<div  class="lil-flex lil-flex-wrap">
							<div class="lil-w-1/2 lil-mb-4 lg:lil-mb-3 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14 " for="username-formbusiness " >Your Name<span class="lil-text-red lil-text-s-18">*</span></label>
								<input id="username-formbusiness" tabindex="0" class="lil-text-s-14  formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="Amit" maxlength="56"/>
							</div>
							<div class="lil-w-1/2 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0 sm:lil-pr-0 lil-mb-4 lg:lil-mb-3 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14 " for="emailid-formbusiness ">Official email ID<span class="lil-text-red lil-text-s-18">*</span></label>
								<input id="emailid-formbusiness" tabindex="0" class="lil-text-s-14  lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 formInput" placeholder="amit@workemail.com" type="email" maxlength="56" />
							
							</div>
							<div class="lil-w-1/2  sm:lil-w-full sm:lil-pl-0 md:lil-w-full md:lil-pl-0 lil-pr-4 sm:lil-pr-0 lil-mb-4 lg:lil-mb-3 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14 " for="phoneno-formbusiness">Phone number<span class="lil-text-red lil-text-s-18">*</span></label>
								<input id="phoneno-formbusiness" tabindex="0" class="lil-text-s-14 formInput lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" type="tel" placeholder="Enter 10 digit mobile number" />
							
							</div>
							<div class="lil-w-1/2 sm:lil-w-full lil-pr-4 sm:lil-pl-0 md:lil-w-full sm:lil-pr-0 md:lil-pl-0 lil-mb-4 lg:lil-mb-3 formGroup" style="margin-top: 2px;">
								<label class="lil-text-font-500 formLabelSelect lil-text-s-14" for="turnover-formbusiness ">Turnover<span class="lil-text-red lil-text-s-18">*</span></label>

								<select id="turnover-formbusiness" data-identifier="" tabindex="0" class="lil-text-s-14 lil-rounded-xl lil-mt-1 formSelect lil-block lil-w-full lil-outline-none" value="">
									<option value="" disabled selected>Select your option</option>
									<option value="Less than 20Cr">Less than 20Cr</option>
									<option value="20Cr-50Cr">20Cr-50Cr</option>
									<option value="50Cr-100Cr">51Cr-100Cr</option>
									<option value="100Cr-500Cr">101Cr-500Cr</option>
									<option value="Greater than 500Cr">Greater than 500Cr</option>
								</select>

							</div>
							<div class="lil-w-1/2 sm:lil-w-full lil-pr-4 sm:lil-pl-0 lil-mb-4 sm:lil-pr-0 lil-pt-1 md:lil-w-full md:lil-pl-0 md:lil-mb-4 lg:lil-mb-3 lil-text-s-14 formGroup">
								<label class="lil-text-font-500 formLabelSelect lil-text-s-14" for="designation-formbusiness">Designation (optional)</label>
								<select id="designation-formbusiness" tabindex="0" class="lil-text-s-14 lil-rounded-xl formSelect lil-block lil-w-full lil-mt-1 lil-outline-none" value="">
									<option value="" disabled selected> Select your option</option>
									<option value="Chief Financial Officer">Chief Financial Officer</option>
									<option value="Head/VP/Director/GM(Finance/Taxation)">Head/VP/Director/GM (Finance/ Taxation)</option>
									<option value="Head/VP/Director/GM(Accounts/Audit)">Head/VP/Director/GM (Accounts/Audit)</option>
									<option value="Senior Manager (Finance/ Taxation)">Senior Manager (Finance/ Taxation)</option>
									<option value="Senior Manager (Accounts/ Audit)">Senior Manager (Accounts/ Audit)</option>
									<option value="Other">Other</option>
								</select>
							
								<input id="designation-other-formbusiness" tabindex="0" class="lil-w-full lil-input lil-border-sm  lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56" />
							</div>
							<div class="lil-w-1/2 lil-pr-4 lil-pt-1 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pl-0 lil-mb-4 lg:lil-mb-3 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14 lil-pt-1" for="company-name-formbusiness">Company Name (optional)</label>
								<input id="company-name-formbusiness" tabindex="0" class="lil-text-s-14 lil-z-10 formInput lil-w-full lil-mt-1 lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 companyInput" placeholder="Enter your company name"/>
								<div class="results-companies-wrp lil-relative zIndex1">
									<div id="companies-options-formbusiness" class="lil-border-grey-300 lil-bg-white lil-w-full lil-border-sm lil-p-2 lil-rounded-xl results lil-absolute results-compaines lil-invisible">
									</div>
								</div>
							</div>
							<div class="lil-hidden lil-w-1/2 lil-pt-1 sm:lil-w-full sm:lil-pl-0  md:lil-w-full md:lil-pl-0  lil-mb-4 lg:lil-mb-3 formGroup">
								<label class="lil-text-font-500 formLabelSelect lil-text-s-14" for="company-ERP-formbusiness">ERP Used</label>

								<select id="company-ERP-formbusiness" data-identifier="" tabindex="0" class="lil-text-s-14 lil-rounded-xl formSelect lil-block lil-w-full lil-outline-none" value="">
									<option value="" disabled selected >Select your option</option>
									<option value="Tally">Tally</option>
									<option value="SAP(B1/HANA/ECC)">SAP(B1/HANA/ECC)</option>
									<option value="Oracle">Oracle</option>
									<option value="Microsoft">Microsoft</option>
									<option value="Inhouse ERP">Custom ERP</option>
									<option value="Others">Others</option>
								</select>

								<input id="companyerp-other-formbusiness" tabindex="0" class="lil-w-full lil-input lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2 lil-hidden lil-mt-4" maxlength="56"/>
							</div>
							<div class="lil-flex lil-flex-col lil-mt-4 sm:lil-flex-col mobile-left-align lg:lil-mb-3 ">
								<label class="lil-flex lil-mr-5 sm:lil-mr-0 lil-text-font-500 lil-text-s-14" for="intrestedProduct-formbusiness">Select interested products<span class="lil-text-red lil-text-s-18">*</span> <span> <input type="checkbox" name="" id="intrestedInProductBusiness-allPrducts" class="intrestedInProductBusiness-span lil-ml-3 lil-mt-1" productKeyValue="All Products"/> <span class="lil-ml-1 lil-inline-flex">All Products</span></span></label>
								<div class="lil-flex lil-flex-wrap lil-mt-3" id="intrestedProduct-formbusiness">
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductBusiness-span lil-py-1 lg:lil-text-s-10"  productKeyValue="ClearGst" id="intrestedInProductBusiness-gst">GST</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductBusiness-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearE-Invoicing" id="intrestedInProductBusiness-einvoice">e-Invoicing</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductBusiness-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearMax ITC" id="intrestedInProductBusiness-maxitc">Max ITC</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductBusiness-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearE-WayBill" id="intrestedInProductBusiness-eway-bill">e-Way bill</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductBusiness-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearTDS" id="intrestedInProductBusiness-tds">TDS</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductBusiness-span lil-py-1 lg:lil-text-s-10" productKeyValue="Clear Invoice Discounting" id="intrestedInProductBusiness-ClearInvoiceDiscounting">Invoice Discounting</span>
									
								</div>
							</div>
						</div>
						
						<input type="hidden" id="gclid_field" name="gclid_field" value="">
						<div class="lil-w-full lil-flex lil-justify-center">
							<input id="submit-form-business" tabindex="0"  type="submit"  value="Send details" class="lil-btn lil-cursor-pointer lil-btn-blue lil-mt-4 lil-float-right lil-w-full" />
						</div>
					</form>
					
					<!-- Form For Type Tax Expert -->
					<form id="formtaxExpert" class="lil-hidden lil-mt-6 lil-px-5" action="javascript:void(0);">
						<div  class="lil-flex lil-flex-wrap lil-mt-5">
							<div class="lil-w-1/2 lil-mb-4 lg:lil-mb-3 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14" for="username-formtaxExpert" >Your Name<span class="lil-text-red lil-text-s-18">*</span></label>
								<input id="username-formtaxExpert" tabindex="0" class="formInput lil-text-s-14 lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="Amit    " maxlength="56"/>
							</div>
							<div class="lil-w-1/2 lil-pl-0 sm:lil-w-full sm:lil-pl-0 md:lil-w-full sm:lil-pr-0 md:lil-pl-0 lil-mb-4 lg:lil-mb-3" style="margin-top: 2px;">
								<label class="lil-text-s-14 lil-text-font-500" for="languagePrefer-formtaxExpert">Language Preference for Demo</label>
								<select id="languagePrefer-formtaxExpert" data-identifier="" tabindex="0" class="lil-text-s-14 lil-block lil-rounded-xl formSelect lil-w-full lil-mt-1 lil-outline-none" >
									<option value="" disabled  class="">Select your option</option>
									<option value="Hindi">Hindi</option>
									<option value="English" selected>English</option>
									<option value="Bengali">Bengali</option>
									<option value="Tamil">Tamil</option>
									<option value="Telugu">Telugu</option>
									<option value="Kannada">Kannada</option>
									<option value="Malayalam">Malayalam</option>
								</select>
							</div>
							<div class="lil-w-1/2 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0  lil-mb-4 lg:lil-mb-3 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14" for="emailid-formtaxExpert ">Official email ID<span class="lil-text-red lil-text-s-18">*</span></label>
								<input id="emailid-formtaxExpert" tabindex="0" class="formInput lil-text-s-14 lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" placeholder="amit@workemail.com" type="email" maxlength="56" />
							
							</div>
							<div class="lil-w-1/2 lil-pl-0 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0  lil-mb-4 lg:lil-mb-3 formGroup">
								<label class="lil-text-font-500 formLabel lil-text-s-14" for="phoneno-formtaxExpert">Phone number<span class="lil-text-red lil-text-s-18">*</span></label>
								<input id="phoneno-formtaxExpert" tabindex="0" class="formInput lil-text-s-14 lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" 	placeholder="Enter 10 digit mobile number" type="tel" />
							
							</div>
							<!-- <div class="lil-w-1/2 lil-pl-0 sm:lil-w-full sm:lil-pl-0  lil-mb-4 md:lil-w-full md:lil-pl-0 formGroup">
								<input id="phoneno-formtaxExpert" placeholder=" "  tabindex="0" class="formInput lil-text-s-14 formLabel lil-w-full lil-input lil-mt-1 lil-border-sm lil-border-grey-300 lil-rounded-xl lil-p-2" type="tel"/>
								<label class=" lil-text-font-500 formLabel lil-text-s-14" for="phoneno-formtaxExpert">Phone number<span class="lil-text-red lil-text-s-18">*</span></label>
							</div> -->
							<div class="lil-w-1/2 lil-pl-0 lil-pt-1 sm:lil-w-full sm:lil-pl-0 md:lil-w-full sm:lil-pr-0 md:lil-pl-0 lil-mb-4 lg:lil-mb-3 lil-pr-4">
								<label class="lil-text-s-14 lil-text-font-500" for="teamMembers-formtaxExpert">Number of Team Members</label>
								<select id="teamMembers-formtaxExpert" data-identifier="" tabindex="0" class="lil-text-s-14 lil-rounded-xl formSelect lil-block lil-w-full lil-mt-1 lil-outline-none" >
									<option value="" disabled  class="">Select your option</option>
									<option value="Only Me">Only Me</option>
									<option value="1-5 persons" selected>1-5 persons</option>
									<option value="5-10 persons">6-10 persons</option>
									<option value="More than 10 persons">More than 10 persons</option>
								</select>
							
							</div>
							<div class="lil-w-1/2 lil-pl-0 sm:lil-w-full lil-pt-1 sm:lil-pl-0   md:lil-w-full md:lil-pl-0 lil-mb-4 lg:lil-mb-3">
								<label class="lil-text-font-500 lil-text-s-14" for="clients-formtaxExpert">Number of Clients</label>
								<select id="clients-formtaxExpert" tabindex="0" class="lil-block lil-rounded-xl formSelect lil-text-s-14 lil-w-full lil-mt-1 lil-outline-none" >
									<option value="" disabled selected>Select your option</option>
									<option value="1-10">1-10</option>
									<option value="10-20">11-20</option>
									<option value="20-50">21-50</option>
									<option value="More than 50">More than 50</option>
								</select>
							</div>
							<!-- <div class="lil-w-1/2 lil-pr-4 sm:lil-w-full sm:lil-pr-0 md:lil-w-full md:lil-pr-0   lg:lil-mb-3 lil-mb-4">
								<label class=" lil-text-font-500 lil-text-s-14" for="typeofPractice-formtaxExpert">Type of Practice</label>
								<select id="typeofPractice-formtaxExpert" data-identifier="" tabindex="0" class="lil-text-s-14 lil-block lil-w-full lil-mt-1 lil-outline-none" >
									<option value="" disabled selected class="">Select your option</option>
									<option value="Direct Tax">Direct Tax</option>
									<option value="Indirect Tax">Indirect Tax</option>
									<option value="Both - Direct & Indirect Tax" selected>Both - Direct & Indirect Tax</option>
								</select>
							
							</div> -->
							
							
							<div class="lil-flex lil-mt-4 lil-pt-1 lil-flex-col lg:lil-mb-3 lil-mb-4 mobile-left-align">
								<label class="lil-flex lil-mr-5 sm:lil-mr-0 lil-text-font-500 lil-text-s-14" for="intrestedProduct-formtaxExpert">Select interested products<span class="lil-text-red lil-text-s-18">*</span> <span> <input type="checkbox" name="" id="intrestedInProductTaxExpert-allPrducts" class="intrestedInProductTaxExpert-span lil-ml-3 lil-mt-1" productKeyValue="All Products"/> <span class="lil-ml-1 lil-inline-flex">All Products</span></span></label>
								<div class="lil-flex lil-flex-wrap lil-mt-3">
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductTaxExpert-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearGst" id="intrestedInProductTaxExpert-gst">GST</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductTaxExpert-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearTDS" id="intrestedInProductTaxExpert-tds" >TDS</span>
									<span class="productTabNonActive lil-my-1 lil-mr-2 lil-px-2 lil-cursor-pointer intrestedInProductTaxExpert-span lil-py-1 lg:lil-text-s-10" productKeyValue="ClearTaxCloud" id="intrestedInProductTaxExpert-taxcloud" >TaxCloud</span>
									
									
								</div>
								
							</div>
						</div>
						
						<input type="hidden" id="gclid_field" name="gclid_field" value="">
						<div class="lil-w-full lil-flex lil-justify-center">
							<input id="submit-form-ca" tabindex="0"  type="button"  value="Send details" class="lil-btn lil-cursor-pointer lil-btn-blue lil-mt-4 lil-float-right lil-w-full" />
						</div>
					</form>
				
				</div>
				
			</div>
			<!-- success for business -->
			<div id="success-wrapper-business" class="lil-hidden lil-px-5">
				<div class="lil-flex lil-justify-center lil-mb-5">

					<img src="https://assets1.cleartax-cdn.com/cleartax/images/1624559166_screenshot20210624at11.55.33pm.png" width="150px" height="150px"/>
				</div>
				<div class="lil-text-center lil-mb-8">
					<p class="lil-text-base lil-text-font-500 lil-text-s-20">Thank you</p>
					<p class="lil-text-base lil-text-font-500 lil-font-hairline ">Our representative will get in touch in 24 hours. You can start exploring our products right away and sign up for a 30-day free trial. </p>
				</div>
				<div class="lil-text-center lil-mb-10 removeforeinvoice">
					<a  class="sm:lil-w-md:lil-w-full" referrerpolicy="no-referrer-when-downgrade" target="_blank" id="tryFree"><button class="lil-btn lil-btn-blue md:lil-w-full sm:lil-w-full lil-font-hairline">Try for free <span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></button>
					</a>
				</div>
				<div class="align-center lil-border-grey-350 lil-border-sm lil-flex sm:lil-flex-col lil-p-2 lil-rounded-lg">
					<img src="http://cleartax-media.s3.amazonaws.com/cleartax/images/1624560088_webinar.webp" class="lil-w-1/2 sm:lil-w md:lil-w-full lil-mr-4 sm:lil-mr-0 md:lil-mr-0" height="500" width="500">
					<!-- <div class="lil-w-1/2 lil-mr-10">
					
					</div> -->
					<div class="lil-w-1/2 sm:lil-w-full md:lil-w-full lil-py-5">
						<p class="lil-text-base lil-text-font-500 lil-text-s-20 lil-mb-2">
							Sign up for a webinar today
						</p>
						<p class="lil-font-hairline lil-mb-2 lil-text-base lil-text-font-500">We also conduct webinars across topics to help you get started.
						</p>
						<a onclick="handleTrack({label: 'fold_webinar', obj: this})" class="lil-text-blue-350" href="https://cleartax.in/s/webinars/">Register Now <span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></a>
					</div>
				</div>
			</div>
			<!-- success for tax expert  -->
			<div id="success-wrapper-tax-expert"  class="lil-hidden lil-px-5">
				<div class="lil-flex lil-justify-center lil-mb-5">

					<img src="https://assets1.cleartax-cdn.com/cleartax/images/1624559166_screenshot20210624at11.55.33pm.png" width="150px" height="150px"/>
				</div>
				<div class="lil-text-center lil-mb-8">
					<p class="lil-text-base lil-text-font-500 lil-text-s-20">Thank you</p>
					<p class="lil-text-base lil-text-font-500 lil-font-hairline ">Our representative will get in touch in 24 hours. You can also let us know a preferred time to reach out</p>
					<div class="lil-mt-6 ">
						<form id="dateTimeForm" class="lil-flex lil-items-center sm:lil-flex-col">
							<div class="formGroup lg:lil-mb-3 lil-float-left lil-mb-4 lil-pr-4 lil-w-3/4 md:lil-pr-0 md:lil-w-full sm:lil-pr-0 sm:lil-w-full">
								<label>	
									<input id="rad" style="color: black;background: white" ntypt-input data-input-style="outline" data-label-style="stacked" placeholder="Select date and time" />
								</label>
							</div>
							<div class="formGroup inline lg:lil-mb-3 lil-mb-4 md:lil-pl-0 md:lil-w-full sm:lil-pl-0 sm:lil-w-full">
								<input id="submit-datetimePicker" onclick="submitAppointment()" tabindex="0" type="button" value="Submit" class="lil-btn lil-btn-blue lil-cursor-pointer sm:lil-w-md:lil-w-full"/>
							</div>
						</form> 
					</div>
				
					<div id="dateTimeThankyou" class="lil-hidden">
						<div class="lil-text-center lil-mb-8 lil-mt-8">
							<p class="lil-text-base lil-text-font-500 lil-text-s-20">Thank you for your response.</p>
								<p class="lil-text-base lil-text-font-500 lil-font-hairline ">Our team will get back to you shortly at your scheduled time. </p>
							</div>
					</div>
					</div>
				<div class="lil-text-center lil-mb-10">
					<p class="lil-text-base lil-text-font-500 lil-font-hairline ">You can start exploring our products right away and sign up for a 30-day free trial.</p>
					<a  class="sm:lil-w-md:lil-w-full" referrerpolicy="no-referrer-when-downgrade" target="_blank" id="tryFree"><button class="lil-btn lil-btn-blue md:lil-w-full sm:lil-w-full lil-font-hairline">Try for free <span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></button>
					
					</a>
				</div>
				<div class="align-center lil-border-grey-350 lil-border-sm lil-flex sm:lil-flex-col lil-p-2 lil-rounded-lg">
					<img src="http://cleartax-media.s3.amazonaws.com/cleartax/images/1624560088_webinar.webp" class="lil-w-1/2 sm:lil-w md:lil-w-full lil-mr-4 sm:lil-mr-0 md:lil-mr-0" height="500" width="500">
					<!-- <div class="lil-w-1/2 lil-mr-10">
					
					</div> -->
					<div class="lil-w-1/2 sm:lil-w-full md:lil-w-full lil-py-5">
						<p class="lil-text-base lil-text-font-500 lil-text-s-20 lil-mb-2">
							Sign up for a webinar today
						</p>
						<p class="lil-font-hairline lil-mb-2 lil-text-base lil-text-font-500">We also conduct webinars across topics to help you get started.
						</p>
						<a class="lil-text-blue-350" onclick="handleTrack({label: 'fold_webinar', obj: this})" href="https://cleartax.in/s/webinars/" >Register Now <span class="lil-font-medium lil-inline-block">&nbsp; &#8594;</span></a>
					</div>
				</div>
			</div>
		</div>			
	</section>
</div>	

<div class="lil-container">
<!-- Testimonial Section -->
<link href="https://assets1.cleartax-cdn.com/cleartax-frontend/slick/1603112387_slick.css" rel="stylesheet">
<style>
	@media only screen and (min-width: 768px) {
		#testimonialCards .lil-carousel-card-footer-action {
			font-size: 16px;
		}
		#testimonialCards .lil-carousel-card .lil-carousel-card-review{
		width: 100%;
	}

	#testimonialCards .slick-list{padding:0 65px 0 0;}
    }
</style>

	<!-- Looking for something else? -->
<section  class="lil-py-8 xl:lil-py-16 lg:lil-py-16 md:lil-py-16">
		<h2 class="lil-text-center sm:lil-text-left">Looking for something else?</h2>
		<div class="lil-flex lil-py-12 lil-pt-6 lil-justify-between md:lil-py-12 sm:lil-py-12 sm:lil-flex-col">
			
				<div class="lil-w-1/3 sm:lil-w-full lil-mb-12">
				<div class="lil-promise-horizontal lil-w-11/12 sm:lil-p-0 lil-carousel-card-footer">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12"
							src="https://assets1.cleartax-cdn.com/cleartax/images/1655796858_frombase641.svg" width="44" height="44" loading="lazy" alt="assistance_expert" />
					</div>
					<div class="lil-promise-content">
						<h5 style="font-size: 24px;" class="sm:lil-text-s-24">
							Get expert assistance
						</h5>
						<p class="lil-py-4">
							Get assistance from a ClearTax expert for filing and compliance
						</p>
					</div>
					<a onclick="handleTrack({label: 'fold_looking-for-something_assistance_expert', obj: this})"  href="https://cleartax.in/s/expert-assistance" class="lil-text-blue-350 sm:lil-text-s-12 md:lil-text-s-16 lil-pb-2 lil-font-bold lil-pt-10 sm:lil-pt-4 sm:lil-ml-0">
						Get assistance<span class="lil-font-medium">&nbsp; →</span>
					</a>
				</div>
				</div>
			
				<div class="lil-w-1/3 sm:lil-w-full lil-mb-12">
				<div class="lil-promise-horizontal lil-w-11/12 sm:lil-p-0 lil-carousel-card-footer">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12"
							src="https://assets1.cleartax-cdn.com/cleartax/images/1655796799_frombase642.svg" width="44" height="44" loading="lazy" alt="Billing_section" />
					</div>
					<div class="lil-promise-content">
						<h5 style="font-size: 24px;" class="sm:lil-text-s-24">
							Billing or account support
						</h5>
						<p class="lil-py-4">
							Assitance with biling and account related queries
						</p>
					</div>
					<a onclick="handleTrack({label: 'fold_looking-for-something_Billing_section', obj: this})"  href="https://cleartax.in/s/billing-support" class="lil-text-blue-350 sm:lil-text-s-12 md:lil-text-s-16 lil-pb-2 lil-font-bold lil-pt-10 sm:lil-pt-4 sm:lil-ml-0">
						Get support<span class="lil-font-medium">&nbsp; →</span>
					</a>
				</div>
				</div>
			
				<div class="lil-w-1/3 sm:lil-w-full lil-mb-12">
				<div class="lil-promise-horizontal lil-w-11/12 sm:lil-p-0 lil-carousel-card-footer">
					<div class="lil-promise-icon-wrapper">
						<img class="lil-h-12"
							src="https://assets1.cleartax-cdn.com/cleartax/images/1655796811_frombase643.svg" width="44" height="44" loading="lazy" alt="ClearLearn_img" />
					</div>
					<div class="lil-promise-content">
						<h5 style="font-size: 24px;" class="sm:lil-text-s-24">
							ClearLearn
						</h5>
						<p class="lil-py-4">
							Want to know more about taxes and personal finance?
						</p>
					</div>
					<a onclick="handleTrack({label: 'fold_looking-for-something_ClearLearn', obj: this})"  href="https://docs.cleartax.in/cleartax-learn" class="lil-text-blue-350 sm:lil-text-s-12 md:lil-text-s-16 lil-pb-2 lil-font-bold lil-pt-10 sm:lil-pt-4 sm:lil-ml-0">
						Learn with us<span class="lil-font-medium">&nbsp; →</span>
					</a>
				</div>
				</div>
			
		</div>
</section>
	<!-- Reinforcement section -->
	<section>
		<div class="lil-reinforcement lil-flex lil-my-8 lil-justify-between xl:lil-my-24 lg:lil-my-24">
			<div class="lil-reinforcement-content-wrapper lil-my-0">
				<div class="sm:lil-w-full">
					<div class="lil-reinforcement-title">
						<h3 class="sm:lil-pt-8 sm:lil-text-s-28">Get a free demo.
							<br> Let's Talk?<h3>
					</div>
					<div class="lil-reinforcement-button-wrapper lil-py-4">
						<a class="lil-btn lil-btn-blue lil-mr-4 sm:lil-w-full sm:lil-mb-6 lil-cursor-pointer" onclick="handleTrack({label: 'reinforcement_fold_button', obj: this});scrollToTargetAdjusted()">Book a free demo</a>
						<!-- <a onclick="handleTrack({label: 'reinforcement_fold_button', obj: this});" class="lil-btn lil-btn-white lil-mr-4 sm:lil-w-full" href="https://cleartax.in/s/contact-sales?pageCategoryType=einvoice&ref=/s/contact-sales/" target="_blank">
							Book a free demo <span class="lil-font-medium">&nbsp; &#8594;</span>
						</a> -->
					</div>
				</div>
				<div class="lil-flex lil-flex-reverse lil-items-start lil-w-1/2 sm:lil-w-full sm:lil-h-64">
					<img class="sm:lil-object-scale-down sm:lil-h-full" loading="lazy" src="https://assets1.cleartax-cdn.com/cleartax/images/1655797096_image13.png" alt="readysection" />
				</div>
			</div>
		</div>
	</section>

<div class="lil-mb-6 lil-pb-12 sm:lil-mx-4 lil-text-s-16">
		<i>*All trademarks, logos and brand names are<span><i> featured on this website</i></span> the property of their respective owners. All company, product and service names used in this website are for identification purposes only. Use of these names,trademarks and brands does not imply endorsement.</i>
</div>
</div>
<div id="floatingbtn" class="floating-btn sm:lil-flex xl:lil-hidden lg:lil-hidden md:lil-hidden">
	<div>
		Book demo now
	</div>
	<div class="arrow-container">
		<svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0.421076 1.24728C0.779621 0.891255 1.35858 0.892278 1.71586 1.24956L5.26794 4.80164L8.82884 1.2485C9.18606 0.892058 9.76451 0.892374 10.1213 1.24921C10.4784 1.60632 10.4784 2.1853 10.1213 2.54241L5.91612 6.74763C5.55814 7.10561 4.97774 7.10561 4.61976 6.74763L0.418782 2.54665C0.0597069 2.18757 0.060735 1.60508 0.421076 1.24728Z" fill="#FFFFFF"/>
		</svg>			
	</div>
</div>
<!-- footer -->

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

<footer>
    <?php
        include 'footer.php';
    ?>
</footer>


<!-- Reinforcement fold scroll function -->
<script>
	function scrollToTargetAdjusted(){
	var element = document.getElementById('forms-container');
	var headerOffset = window.innerWidth >600 ? 90 : 45;
	var elementPosition = element.getBoundingClientRect().top;
	var offsetPosition = elementPosition + window.pageYOffset - headerOffset;											
	window.scrollTo({
		 top: offsetPosition,
		 behavior: "smooth"
		});
	}
</script>
<script defer type="text/javascript" src="https://assets1.cleartax-cdn.com/cleartax-frontend/slick/1603112319_slick.min.js"></script>
<script defer>
	/**
 * Slick carousel library is used for two carousel sections
 * 1. Testimonial (Section 8)(Single Carousel)
 * 2. Press & Awards Section (Multi item carousel)
 *
 * JqueryUI used for tabs section (section 4 Plug and play)
 */
$(document).ready(function () {
	const settingsTestimonial = {
		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		speed:1000,
		nextArrow: "#testimonialRightButton",
		prevArrow: "#testimonialLeftButton",
		responsive : [
			{
				breakpoint: 768,
				settings: {
					autoplay: true,
					autoplaySpeed: 3000,
					infinite: true,
					slidesToShow: 1,
					nextArrow: "#testimonialRightButton",
					prevArrow: "#testimonialLeftButton",
				}
			}
		]
	}
//initalizing sliders
	$("#testimonialCards").slick(settingsTestimonial);

	//to counter the slider img class having display block
	if (parseInt($(window).width()) < 768) {
		const images = $('#testimonialCards .lil-carousel-card-image');
		images.hide();
	}
});
</script>
<script>/**
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
}</script>
<script>/**
 * @preserve jQuery DateTimePicker plugin v2.4.1
 * @homepage http://xdsoft.net/jqplugins/datetimepicker/
 * (c) 2014, Chupurnov Valeriy.
 */
/*global document,window,jQuery,setTimeout,clearTimeout*/
(function ($) {
	'use strict';
	var default_options  = {
		i18n: {
			ar: { // Arabic
				months: [
					"كانون الثاني", "شباط", "آذار", "نيسان", "مايو", "حزيران", "تموز", "آب", "أيلول", "تشرين الأول", "تشرين الثاني", "كانون الأول"
				],
				dayOfWeek: [
					"ن", "ث", "ع", "خ", "ج", "س", "ح"
				]
			},
			ro: { // Romanian
				months: [
					"ianuarie", "februarie", "martie", "aprilie", "mai", "iunie", "iulie", "august", "septembrie", "octombrie", "noiembrie", "decembrie"
				],
				dayOfWeek: [
					"l", "ma", "mi", "j", "v", "s", "d"
				]
			},
			id: { // Indonesian
				months: [
					"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
				],
				dayOfWeek: [
					"Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"
				]
			},
			bg: { // Bulgarian
				months: [
					"Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември"
				],
				dayOfWeek: [
					"Нд", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"
				]
			},
			fa: { // Persian/Farsi
				months: [
					'فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'
				],
				dayOfWeek: [
					'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه'
				]
			},
			ru: { // Russian
				months: [
					'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
				],
				dayOfWeek: [
					"Вск", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"
				]
			},
			uk: { // Ukrainian
				months: [
					'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень'
				],
				dayOfWeek: [
					"Ндл", "Пнд", "Втр", "Срд", "Чтв", "Птн", "Сбт"
				]
			},
			en: { // English
				months: [
					"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
				],
				dayOfWeek: [
					"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"
				]
			},
			el: { // Ελληνικά
				months: [
					"Ιανουάριος", "Φεβρουάριος", "Μάρτιος", "Απρίλιος", "Μάιος", "Ιούνιος", "Ιούλιος", "Αύγουστος", "Σεπτέμβριος", "Οκτώβριος", "Νοέμβριος", "Δεκέμβριος"
				],
				dayOfWeek: [
					"Κυρ", "Δευ", "Τρι", "Τετ", "Πεμ", "Παρ", "Σαβ"
				]
			},
			de: { // German
				months: [
					'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'
				],
				dayOfWeek: [
					"So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"
				]
			},
			nl: { // Dutch
				months: [
					"januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"
				],
				dayOfWeek: [
					"zo", "ma", "di", "wo", "do", "vr", "za"
				]
			},
			tr: { // Turkish
				months: [
					"Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
				],
				dayOfWeek: [
					"Paz", "Pts", "Sal", "Çar", "Per", "Cum", "Cts"
				]
			},
			fr: { //French
				months: [
					"Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
				],
				dayOfWeek: [
					"Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"
				]
			},
			es: { // Spanish
				months: [
					"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
				],
				dayOfWeek: [
					"Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"
				]
			},
			th: { // Thai
				months: [
					'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
				],
				dayOfWeek: [
					'อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'
				]
			},
			pl: { // Polish
				months: [
					"styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"
				],
				dayOfWeek: [
					"nd", "pn", "wt", "śr", "cz", "pt", "sb"
				]
			},
			pt: { // Portuguese
				months: [
					"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
				],
				dayOfWeek: [
					"Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"
				]
			},
			ch: { // Simplified Chinese
				months: [
					"一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"
				],
				dayOfWeek: [
					"日", "一", "二", "三", "四", "五", "六"
				]
			},
			se: { // Swedish
				months: [
					"Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September",  "Oktober", "November", "December"
				],
				dayOfWeek: [
					"Sön", "Mån", "Tis", "Ons", "Tor", "Fre", "Lör"
				]
			},
			kr: { // Korean
				months: [
					"1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"
				],
				dayOfWeek: [
					"일", "월", "화", "수", "목", "금", "토"
				]
			},
			it: { // Italian
				months: [
					"Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"
				],
				dayOfWeek: [
					"Dom", "Lun", "Mar", "Mer", "Gio", "Ven", "Sab"
				]
			},
			da: { // Dansk
				months: [
					"January", "Februar", "Marts", "April", "Maj", "Juni", "July", "August", "September", "Oktober", "November", "December"
				],
				dayOfWeek: [
					"Søn", "Man", "Tir", "Ons", "Tor", "Fre", "Lør"
				]
			},
			no: { // Norwegian
				months: [
					"Januar", "Februar", "Mars", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Desember"
				],
				dayOfWeek: [
					"Søn", "Man", "Tir", "Ons", "Tor", "Fre", "Lør"
				]
			},
			ja: { // Japanese
				months: [
					"1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"
				],
				dayOfWeek: [
					"日", "月", "火", "水", "木", "金", "土"
				]
			},
			vi: { // Vietnamese
				months: [
					"Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
				],
				dayOfWeek: [
					"CN", "T2", "T3", "T4", "T5", "T6", "T7"
				]
			},
			sl: { // Slovenščina
				months: [
					"Januar", "Februar", "Marec", "April", "Maj", "Junij", "Julij", "Avgust", "September", "Oktober", "November", "December"
				],
				dayOfWeek: [
					"Ned", "Pon", "Tor", "Sre", "Čet", "Pet", "Sob"
				]
			},
			cs: { // Čeština
				months: [
					"Leden", "Únor", "Březen", "Duben", "Květen", "Červen", "Červenec", "Srpen", "Září", "Říjen", "Listopad", "Prosinec"
				],
				dayOfWeek: [
					"Ne", "Po", "Út", "St", "Čt", "Pá", "So"
				]
			},
			hu: { // Hungarian
				months: [
					"Január", "Február", "Március", "Április", "Május", "Június", "Július", "Augusztus", "Szeptember", "Október", "November", "December"
				],
				dayOfWeek: [
					"Va", "Hé", "Ke", "Sze", "Cs", "Pé", "Szo"
				]
			},
			az: { //Azerbaijanian (Azeri)
				months: [
					"Yanvar", "Fevral", "Mart", "Aprel", "May", "Iyun", "Iyul", "Avqust", "Sentyabr", "Oktyabr", "Noyabr", "Dekabr"
				],
				dayOfWeek: [
					"B", "Be", "Ça", "Ç", "Ca", "C", "Ş"
				]
			},
			bs: { //Bosanski
				months: [
					"Januar", "Februar", "Mart", "April", "Maj", "Jun", "Jul", "Avgust", "Septembar", "Oktobar", "Novembar", "Decembar"
				],
				dayOfWeek: [
					"Ned", "Pon", "Uto", "Sri", "Čet", "Pet", "Sub"
				]
			},
			ca: { //Català
				months: [
					"Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"
				],
				dayOfWeek: [
					"Dg", "Dl", "Dt", "Dc", "Dj", "Dv", "Ds"
				]
			},
			'en-GB': { //English (British)
				months: [
					"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
				],
				dayOfWeek: [
					"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"
				]
			},
			et: { //"Eesti"
				months: [
					"Jaanuar", "Veebruar", "Märts", "Aprill", "Mai", "Juuni", "Juuli", "August", "September", "Oktoober", "November", "Detsember"
				],
				dayOfWeek: [
					"P", "E", "T", "K", "N", "R", "L"
				]
			},
			eu: { //Euskara
				months: [
					"Urtarrila", "Otsaila", "Martxoa", "Apirila", "Maiatza", "Ekaina", "Uztaila", "Abuztua", "Iraila", "Urria", "Azaroa", "Abendua"
				],
				dayOfWeek: [
					"Ig.", "Al.", "Ar.", "Az.", "Og.", "Or.", "La."
				]
			},
			fi: { //Finnish (Suomi)
				months: [
					"Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kesäkuu", "Heinäkuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"
				],
				dayOfWeek: [
					"Su", "Ma", "Ti", "Ke", "To", "Pe", "La"
				]
			},
			gl: { //Galego
				months: [
					"Xan", "Feb", "Maz", "Abr", "Mai", "Xun", "Xul", "Ago", "Set", "Out", "Nov", "Dec"
				],
				dayOfWeek: [
					"Dom", "Lun", "Mar", "Mer", "Xov", "Ven", "Sab"
				]
			},
			hr: { //Hrvatski
				months: [
					"Siječanj", "Veljača", "Ožujak", "Travanj", "Svibanj", "Lipanj", "Srpanj", "Kolovoz", "Rujan", "Listopad", "Studeni", "Prosinac"
				],
				dayOfWeek: [
					"Ned", "Pon", "Uto", "Sri", "Čet", "Pet", "Sub"
				]
			},
			ko: { //Korean (한국어)
				months: [
					"1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"
				],
				dayOfWeek: [
					"일", "월", "화", "수", "목", "금", "토"
				]
			},
			lt: { //Lithuanian (lietuvių)
				months: [
					"Sausio", "Vasario", "Kovo", "Balandžio", "Gegužės", "Birželio", "Liepos", "Rugpjūčio", "Rugsėjo", "Spalio", "Lapkričio", "Gruodžio"
				],
				dayOfWeek: [
					"Sek", "Pir", "Ant", "Tre", "Ket", "Pen", "Šeš"
				]
			},
			lv: { //Latvian (Latviešu)
				months: [
					"Janvāris", "Februāris", "Marts", "Aprīlis ", "Maijs", "Jūnijs", "Jūlijs", "Augusts", "Septembris", "Oktobris", "Novembris", "Decembris"
				],
				dayOfWeek: [
					"Sv", "Pr", "Ot", "Tr", "Ct", "Pk", "St"
				]
			},
			mk: { //Macedonian (Македонски)
				months: [
					"јануари", "февруари", "март", "април", "мај", "јуни", "јули", "август", "септември", "октомври", "ноември", "декември"
				],
				dayOfWeek: [
					"нед", "пон", "вто", "сре", "чет", "пет", "саб"
				]
			},
			mn: { //Mongolian (Монгол)
				months: [
					"1-р сар", "2-р сар", "3-р сар", "4-р сар", "5-р сар", "6-р сар", "7-р сар", "8-р сар", "9-р сар", "10-р сар", "11-р сар", "12-р сар"
				],
				dayOfWeek: [
					"Дав", "Мяг", "Лха", "Пүр", "Бсн", "Бям", "Ням"
				]
			},
			'pt-BR': { //Português(Brasil)
				months: [
					"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
				],
				dayOfWeek: [
					"Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"
				]
			},
			sk: { //Slovenčina
				months: [
					"Január", "Február", "Marec", "Apríl", "Máj", "Jún", "Júl", "August", "September", "Október", "November", "December"
				],
				dayOfWeek: [
					"Ne", "Po", "Ut", "St", "Št", "Pi", "So"
				]
			},
			sq: { //Albanian (Shqip)
				months: [
					"January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
				],
				dayOfWeek: [
					"Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"
				]
			},
			'sr-YU': { //Serbian (Srpski)
				months: [
					"Januar", "Februar", "Mart", "April", "Maj", "Jun", "Jul", "Avgust", "Septembar", "Oktobar", "Novembar", "Decembar"
				],
				dayOfWeek: [
					"Ned", "Pon", "Uto", "Sre", "čet", "Pet", "Sub"
				]
			},
			sr: { //Serbian Cyrillic (Српски)
				months: [
					"јануар", "фебруар", "март", "април", "мај", "јун", "јул", "август", "септембар", "октобар", "новембар", "децембар"
				],
				dayOfWeek: [
					"нед", "пон", "уто", "сре", "чет", "пет", "суб"
				]
			},
			sv: { //Svenska
				months: [
					"Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December"
				],
				dayOfWeek: [
					"Sön", "Mån", "Tis", "Ons", "Tor", "Fre", "Lör"
				]
			},
			'zh-TW': { //Traditional Chinese (繁體中文)
				months: [
					"一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"
				],
				dayOfWeek: [
					"日", "一", "二", "三", "四", "五", "六"
				]
			},
			zh: { //Simplified Chinese (简体中文)
				months: [
					"一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"
				],
				dayOfWeek: [
					"日", "一", "二", "三", "四", "五", "六"
				]
			},
			he: { //Hebrew (עברית)
				months: [
					'ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר'
				],
				dayOfWeek: [
					'א\'', 'ב\'', 'ג\'', 'ד\'', 'ה\'', 'ו\'', 'שבת'
				]
			},
			hy: { // Armenian
				months: [
					"Հունվար", "Փետրվար", "Մարտ", "Ապրիլ", "Մայիս", "Հունիս", "Հուլիս", "Օգոստոս", "Սեպտեմբեր", "Հոկտեմբեր", "Նոյեմբեր", "Դեկտեմբեր"
				],
				dayOfWeek: [
					"Կի", "Երկ", "Երք", "Չոր", "Հնգ", "Ուրբ", "Շբթ"
				]
			},
            kg: { // Kyrgyz
                months: [
                    'Үчтүн айы', 'Бирдин айы', 'Жалган Куран', 'Чын Куран', 'Бугу', 'Кулжа', 'Теке', 'Баш Оона', 'Аяк Оона', 'Тогуздун айы', 'Жетинин айы', 'Бештин айы'
                ],
                dayOfWeek: [
                    "Жек", "Дүй", "Шей", "Шар", "Бей", "Жум", "Ише"
                ]
            }
		},
		value: '',
		lang: 'en',

		format:	'Y/m/d H:i',
		formatTime:	'H:i',
		formatDate:	'Y/m/d',

		startDate:	false, // new Date(), '1986/12/08', '-1970/01/05','-1970/01/05',
		step: 60,
		monthChangeSpinner: true,

		closeOnDateSelect: false,
		closeOnTimeSelect: false,
		closeOnWithoutClick: true,
		closeOnInputClick: true,

		timepicker: true,
		datepicker: true,
		weeks: false,

		defaultTime: false,	// use formatTime format (ex. '10:00' for formatTime:	'H:i')
		defaultDate: false,	// use formatDate format (ex new Date() or '1986/12/08' or '-1970/01/05' or '-1970/01/05')

		minDate: false,
		maxDate: false,
		minTime: false,
		maxTime: false,

		allowTimes: [],
		opened: false,
		initTime: true,
		inline: false,
		theme: '',

		onSelectDate: function () {},
		onSelectTime: function () {},
		onChangeMonth: function () {},
		onChangeYear: function () {},
		onChangeDateTime: function () {},
		onShow: function () {},
		onClose: function () {},
		onGenerate: function () {},

		withoutCopyright: true,
		inverseButton: false,
		hours12: false,
		next: 'xdsoft_next',
		prev : 'xdsoft_prev',
		dayOfWeekStart: 0,
		parentID: 'body',
		timeHeightInTimePicker: 25,
		timepickerScrollbar: true,
		todayButton: true,
		prevButton: true,
		nextButton: true,
		defaultSelect: true,

		scrollMonth: true,
		scrollTime: true,
		scrollInput: true,

		lazyInit: false,
		mask: false,
		validateOnBlur: true,
		allowBlank: true,
		yearStart: 1950,
		yearEnd: 2050,
		monthStart: 0,
		monthEnd: 11,
		style: '',
		id: '',
		fixed: false,
		roundTime: 'round', // ceil, floor
		className: '',
		weekends: [],
		disabledDates : [],
		yearOffset: 0,
		beforeShowDay: null,

		enterLikeTab: true,
        showApplyButton: false
	};
	// fix for ie8
	if (!Array.prototype.indexOf) {
		Array.prototype.indexOf = function (obj, start) {
			var i, j;
			for (i = (start || 0), j = this.length; i < j; i += 1) {
				if (this[i] === obj) { return i; }
			}
			return -1;
		};
	}
	Date.prototype.countDaysInMonth = function () {
		return new Date(this.getFullYear(), this.getMonth() + 1, 0).getDate();
	};
	$.fn.xdsoftScroller = function (percent) {
		return this.each(function () {
			var timeboxparent = $(this),
				pointerEventToXY = function (e) {
					var out = {x: 0, y: 0},
						touch;
					if (e.type === 'touchstart' || e.type === 'touchmove' || e.type === 'touchend' || e.type === 'touchcancel') {
						touch  = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
						out.x = touch.clientX;
						out.y = touch.clientY;
					} else if (e.type === 'mousedown' || e.type === 'mouseup' || e.type === 'mousemove' || e.type === 'mouseover' || e.type === 'mouseout' || e.type === 'mouseenter' || e.type === 'mouseleave') {
						out.x = e.clientX;
						out.y = e.clientY;
					}
					return out;
				},
				move = 0,
				timebox,
				parentHeight,
				height,
				scrollbar,
				scroller,
				maximumOffset = 100,
				start = false,
				startY = 0,
				startTop = 0,
				h1 = 0,
				touchStart = false,
				startTopScroll = 0,
				calcOffset = function () {};
			if (percent === 'hide') {
				timeboxparent.find('.xdsoft_scrollbar').hide();
				return;
			}
			if (!$(this).hasClass('xdsoft_scroller_box')) {
				timebox = timeboxparent.children().eq(0);
				parentHeight = timeboxparent[0].clientHeight;
				height = timebox[0].offsetHeight;
				scrollbar = $('<div class="xdsoft_scrollbar"></div>');
				scroller = $('<div class="xdsoft_scroller"></div>');
				scrollbar.append(scroller);

				timeboxparent.addClass('xdsoft_scroller_box').append(scrollbar);
				calcOffset = function calcOffset(event) {
					var offset = pointerEventToXY(event).y - startY + startTopScroll;
					if (offset < 0) {
						offset = 0;
					}
					if (offset + scroller[0].offsetHeight > h1) {
						offset = h1 - scroller[0].offsetHeight;
					}
					timeboxparent.trigger('scroll_element.xdsoft_scroller', [maximumOffset ? offset / maximumOffset : 0]);
				};

				scroller
					.on('touchstart.xdsoft_scroller mousedown.xdsoft_scroller', function (event) {
						if (!parentHeight) {
							timeboxparent.trigger('resize_scroll.xdsoft_scroller', [percent]);
						}

						startY = pointerEventToXY(event).y;
						startTopScroll = parseInt(scroller.css('margin-top'), 10);
						h1 = scrollbar[0].offsetHeight;

						if (event.type === 'mousedown') {
							if (document) {
								$(document.body).addClass('xdsoft_noselect');
							}
							$([document.body, window]).on('mouseup.xdsoft_scroller', function arguments_callee() {
								$([document.body, window]).off('mouseup.xdsoft_scroller', arguments_callee)
									.off('mousemove.xdsoft_scroller', calcOffset)
									.removeClass('xdsoft_noselect');
							});
							$(document.body).on('mousemove.xdsoft_scroller', calcOffset);
						} else {
							touchStart = true;
							event.stopPropagation();
							event.preventDefault();
						}
					})
					.on('touchmove', function (event) {
						if (touchStart) {
							event.preventDefault();
							calcOffset(event);
						}
					})
					.on('touchend touchcancel', function (event) {
						touchStart =  false;
						startTopScroll = 0;
					});

				timeboxparent
					.on('scroll_element.xdsoft_scroller', function (event, percentage) {
						if (!parentHeight) {
							timeboxparent.trigger('resize_scroll.xdsoft_scroller', [percentage, true]);
						}
						percentage = percentage > 1 ? 1 : (percentage < 0 || isNaN(percentage)) ? 0 : percentage;

						scroller.css('margin-top', maximumOffset * percentage);

						setTimeout(function () {
							timebox.css('marginTop', -parseInt((timebox[0].offsetHeight - parentHeight) * percentage, 10));
						}, 10);
					})
					.on('resize_scroll.xdsoft_scroller', function (event, percentage, noTriggerScroll) {
						var percent, sh;
						parentHeight = timeboxparent[0].clientHeight;
						height = timebox[0].offsetHeight;
						percent = parentHeight / height;
						sh = percent * scrollbar[0].offsetHeight;
						if (percent > 1) {
							scroller.hide();
						} else {
							scroller.show();
							scroller.css('height', parseInt(sh > 10 ? sh : 10, 10));
							maximumOffset = scrollbar[0].offsetHeight - scroller[0].offsetHeight;
							if (noTriggerScroll !== true) {
								timeboxparent.trigger('scroll_element.xdsoft_scroller', [percentage || Math.abs(parseInt(timebox.css('marginTop'), 10)) / (height - parentHeight)]);
							}
						}
					});

				timeboxparent.on('mousewheel', function (event) {
					var top = Math.abs(parseInt(timebox.css('marginTop'), 10));

					top = top - (event.deltaY * 20);
					if (top < 0) {
						top = 0;
					}

					timeboxparent.trigger('scroll_element.xdsoft_scroller', [top / (height - parentHeight)]);
					event.stopPropagation();
					return false;
				});

				timeboxparent.on('touchstart', function (event) {
					start = pointerEventToXY(event);
					startTop = Math.abs(parseInt(timebox.css('marginTop'), 10));
				});

				timeboxparent.on('touchmove', function (event) {
					if (start) {
						event.preventDefault();
						var coord = pointerEventToXY(event);
						timeboxparent.trigger('scroll_element.xdsoft_scroller', [(startTop - (coord.y - start.y)) / (height - parentHeight)]);
					}
				});

				timeboxparent.on('touchend touchcancel', function (event) {
					start = false;
					startTop = 0;
				});
			}
			timeboxparent.trigger('resize_scroll.xdsoft_scroller', [percent]);
		});
	};

	$.fn.datetimepicker = function (opt) {
		var KEY0 = 48,
			KEY9 = 57,
			_KEY0 = 96,
			_KEY9 = 105,
			CTRLKEY = 17,
			DEL = 46,
			ENTER = 13,
			ESC = 27,
			BACKSPACE = 8,
			ARROWLEFT = 37,
			ARROWUP = 38,
			ARROWRIGHT = 39,
			ARROWDOWN = 40,
			TAB = 9,
			F5 = 116,
			AKEY = 65,
			CKEY = 67,
			VKEY = 86,
			ZKEY = 90,
			YKEY = 89,
			ctrlDown	=	false,
			options = ($.isPlainObject(opt) || !opt) ? $.extend(true, {}, default_options, opt) : $.extend(true, {}, default_options),

			lazyInitTimer = 0,
			createDateTimePicker,
			destroyDateTimePicker,

			lazyInit = function (input) {
				input
					.on('open.xdsoft focusin.xdsoft mousedown.xdsoft', function initOnActionCallback(event) {
						if (input.is(':disabled') || input.data('xdsoft_datetimepicker')) {
							return;
						}
						clearTimeout(lazyInitTimer);
						lazyInitTimer = setTimeout(function () {

							if (!input.data('xdsoft_datetimepicker')) {
								createDateTimePicker(input);
							}
							input
								.off('open.xdsoft focusin.xdsoft mousedown.xdsoft', initOnActionCallback)
								.trigger('open.xdsoft');
						}, 100);
					});
			};

		createDateTimePicker = function (input) {
			var datetimepicker = $('<div ' + (options.id ? 'id="' + options.id + '"' : '') + ' ' + (options.style ? 'style="' + options.style + '"' : '') + ' class="xdsoft_datetimepicker xdsoft_' + options.theme + ' xdsoft_noselect ' + (options.weeks ? ' xdsoft_showweeks' : '') + options.className + '"></div>'),
				xdsoft_copyright = $('<div class="xdsoft_copyright"><a target="_blank" href="http://xdsoft.net/jqplugins/datetimepicker/">xdsoft.net</a></div>'),
				datepicker = $('<div class="xdsoft_datepicker active"></div>'),
				mounth_picker = $('<div class="xdsoft_mounthpicker"><button type="button" class="xdsoft_prev"></button><button type="button" class="xdsoft_today_button"></button>' +
					'<div class="xdsoft_label xdsoft_month"><span></span><i></i></div>' +
					'<div class="xdsoft_label xdsoft_year"><span></span><i></i></div>' +
					'<button type="button" class="xdsoft_next"></button></div>'),
				calendar = $('<div class="xdsoft_calendar"></div>'),
				timepicker = $('<div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box"></div><button type="button" class="xdsoft_next"></button></div>'),
				timeboxparent = timepicker.find('.xdsoft_time_box').eq(0),
				timebox = $('<div class="xdsoft_time_variant"></div>'),
                applyButton = $('<button class="xdsoft_save_selected blue-gradient-button">Save Selected</button>'),
				/*scrollbar = $('<div class="xdsoft_scrollbar"></div>'),
				scroller = $('<div class="xdsoft_scroller"></div>'),*/
				monthselect = $('<div class="xdsoft_select xdsoft_monthselect"><div></div></div>'),
				yearselect = $('<div class="xdsoft_select xdsoft_yearselect"><div></div></div>'),
				triggerAfterOpen = false,
				XDSoft_datetime,
				//scroll_element,
				xchangeTimer,
				timerclick,
				current_time_index,
				setPos,
				timer = 0,
				timer1 = 0,
				_xdsoft_datetime;

			mounth_picker
				.find('.xdsoft_month span')
					.after(monthselect);
			mounth_picker
				.find('.xdsoft_year span')
					.after(yearselect);

			mounth_picker
				.find('.xdsoft_month,.xdsoft_year')
					.on('mousedown.xdsoft', function (event) {
					var select = $(this).find('.xdsoft_select').eq(0),
						val = 0,
						top = 0,
						visible = select.is(':visible'),
						items,
						i;

					mounth_picker
						.find('.xdsoft_select')
							.hide();
					if (_xdsoft_datetime.currentTime) {
						val = _xdsoft_datetime.currentTime[$(this).hasClass('xdsoft_month') ? 'getMonth' : 'getFullYear']();
					}

					select[visible ? 'hide' : 'show']();
					for (items = select.find('div.xdsoft_option'), i = 0; i < items.length; i += 1) {
						if (items.eq(i).data('value') === val) {
							break;
						} else {
							top += items[0].offsetHeight;
						}
					}

					select.xdsoftScroller(top / (select.children()[0].offsetHeight - (select[0].clientHeight)));
					event.stopPropagation();
					return false;
				});

			mounth_picker
				.find('.xdsoft_select')
					.xdsoftScroller()
				.on('mousedown.xdsoft', function (event) {
					event.stopPropagation();
					event.preventDefault();
				})
				.on('mousedown.xdsoft', '.xdsoft_option', function (event) {

					if (_xdsoft_datetime.currentTime === undefined || _xdsoft_datetime.currentTime === null) {
						_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
					}

					var year = _xdsoft_datetime.currentTime.getFullYear();
					if (_xdsoft_datetime && _xdsoft_datetime.currentTime) {
						_xdsoft_datetime.currentTime[$(this).parent().parent().hasClass('xdsoft_monthselect') ? 'setMonth' : 'setFullYear']($(this).data('value'));
					}

					$(this).parent().parent().hide();

					datetimepicker.trigger('xchange.xdsoft');
					if (options.onChangeMonth && $.isFunction(options.onChangeMonth)) {
						options.onChangeMonth.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}

					if (year !== _xdsoft_datetime.currentTime.getFullYear() && $.isFunction(options.onChangeYear)) {
						options.onChangeYear.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}
				});

			datetimepicker.setOptions = function (_options) {
				options = $.extend(true, {}, options, _options);

				if (_options.allowTimes && $.isArray(_options.allowTimes) && _options.allowTimes.length) {
					options.allowTimes = $.extend(true, [], _options.allowTimes);
				}

				if (_options.weekends && $.isArray(_options.weekends) && _options.weekends.length) {
					options.weekends = $.extend(true, [], _options.weekends);
				}

				if (_options.disabledDates && $.isArray(_options.disabledDates) && _options.disabledDates.length) {
					options.disabledDates = $.extend(true, [], _options.disabledDates);
				}

				if ((options.open || options.opened) && (!options.inline)) {
					input.trigger('open.xdsoft');
				}

				if (options.inline) {
					triggerAfterOpen = true;
					datetimepicker.addClass('xdsoft_inline');
					input.after(datetimepicker).hide();
				}

				if (options.inverseButton) {
					options.next = 'xdsoft_prev';
					options.prev = 'xdsoft_next';
				}

				if (options.datepicker) {
					datepicker.addClass('active');
				} else {
					datepicker.removeClass('active');
				}

				if (options.timepicker) {
					timepicker.addClass('active');
				} else {
					timepicker.removeClass('active');
				}

				if (options.value) {
					if (input && input.val) {
						input.val(options.value);
					}
					_xdsoft_datetime.setCurrentTime(options.value);
				}

				if (isNaN(options.dayOfWeekStart)) {
					options.dayOfWeekStart = 0;
				} else {
					options.dayOfWeekStart = parseInt(options.dayOfWeekStart, 10) % 7;
				}

				if (!options.timepickerScrollbar) {
					timeboxparent.xdsoftScroller('hide');
				}

				if (options.minDate && /^-(.*)$/.test(options.minDate)) {
					options.minDate = _xdsoft_datetime.strToDateTime(options.minDate).dateFormat(options.formatDate);
				}

				if (options.maxDate &&  /^\+(.*)$/.test(options.maxDate)) {
					options.maxDate = _xdsoft_datetime.strToDateTime(options.maxDate).dateFormat(options.formatDate);
				}

				applyButton.toggle(options.showApplyButton);

				mounth_picker
					.find('.xdsoft_today_button')
						.css('visibility', !options.todayButton ? 'hidden' : 'visible');

				mounth_picker
					.find('.' + options.prev)
						.css('visibility', !options.prevButton ? 'hidden' : 'visible');

				mounth_picker
					.find('.' + options.next)
						.css('visibility', !options.nextButton ? 'hidden' : 'visible');

				if (options.mask) {
					var e,
						getCaretPos = function (input) {
							try {
								if (document.selection && document.selection.createRange) {
									var range = document.selection.createRange();
									return range.getBookmark().charCodeAt(2) - 2;
								}
								if (input.setSelectionRange) {
									return input.selectionStart;
								}
							} catch (e) {
								return 0;
							}
						},
						setCaretPos = function (node, pos) {
							node = (typeof node === "string" || node instanceof String) ? document.getElementById(node) : node;
							if (!node) {
								return false;
							}
							if (node.createTextRange) {
								var textRange = node.createTextRange();
								textRange.collapse(true);
								textRange.moveEnd('character', pos);
								textRange.moveStart('character', pos);
								textRange.select();
								return true;
							}
							if (node.setSelectionRange) {
								node.setSelectionRange(pos, pos);
								return true;
							}
							return false;
						},
						isValidValue = function (mask, value) {
							var reg = mask
								.replace(/([\[\]\/\{\}\(\)\-\.\+]{1})/g, '\\$1')
								.replace(/_/g, '{digit+}')
								.replace(/([0-9]{1})/g, '{digit$1}')
								.replace(/\{digit([0-9]{1})\}/g, '[0-$1_]{1}')
								.replace(/\{digit[\+]\}/g, '[0-9_]{1}');
							return (new RegExp(reg)).test(value);
						};
					input.off('keydown.xdsoft');

					if (options.mask === true) {
						options.mask = options.format
							.replace(/Y/g, '9999')
							.replace(/F/g, '9999')
							.replace(/m/g, '19')
							.replace(/d/g, '39')
							.replace(/H/g, '29')
							.replace(/i/g, '59')
							.replace(/s/g, '59');
					}

					if ($.type(options.mask) === 'string') {
						if (!isValidValue(options.mask, input.val())) {
							input.val(options.mask.replace(/[0-9]/g, '_'));
						}

						input.on('keydown.xdsoft', function (event) {
							var val = this.value,
								key = event.which,
								pos,
								digit;

							if (((key >= KEY0 && key <= KEY9) || (key >= _KEY0 && key <= _KEY9)) || (key === BACKSPACE || key === DEL)) {
								pos = getCaretPos(this);
								digit = (key !== BACKSPACE && key !== DEL) ? String.fromCharCode((_KEY0 <= key && key <= _KEY9) ? key - KEY0 : key) : '_';

								if ((key === BACKSPACE || key === DEL) && pos) {
									pos -= 1;
									digit = '_';
								}

								while (/[^0-9_]/.test(options.mask.substr(pos, 1)) && pos < options.mask.length && pos > 0) {
									pos += (key === BACKSPACE || key === DEL) ? -1 : 1;
								}

								val = val.substr(0, pos) + digit + val.substr(pos + 1);
								if ($.trim(val) === '') {
									val = options.mask.replace(/[0-9]/g, '_');
								} else {
									if (pos === options.mask.length) {
										event.preventDefault();
										return false;
									}
								}

								pos += (key === BACKSPACE || key === DEL) ? 0 : 1;
								while (/[^0-9_]/.test(options.mask.substr(pos, 1)) && pos < options.mask.length && pos > 0) {
									pos += (key === BACKSPACE || key === DEL) ? -1 : 1;
								}

								if (isValidValue(options.mask, val)) {
									this.value = val;
									setCaretPos(this, pos);
								} else if ($.trim(val) === '') {
									this.value = options.mask.replace(/[0-9]/g, '_');
								} else {
									input.trigger('error_input.xdsoft');
								}
							} else {
								if (([AKEY, CKEY, VKEY, ZKEY, YKEY].indexOf(key) !== -1 && ctrlDown) || [ESC, ARROWUP, ARROWDOWN, ARROWLEFT, ARROWRIGHT, F5, CTRLKEY, TAB, ENTER].indexOf(key) !== -1) {
									return true;
								}
							}

							event.preventDefault();
							return false;
						});
					}
				}
				if (options.validateOnBlur) {
					input
						.off('blur.xdsoft')
						.on('blur.xdsoft', function () {
						  if (options.allowBlank && !$.trim($(this).val()).length) {
							$(this).val(null);
							datetimepicker.data('xdsoft_datetime').empty();
						  } else if (!Date.parseDate($(this).val(), options.format)) {
							var splittedHours   = +([$(this).val()[0], $(this).val()[1]].join('')),
								splittedMinutes = +([$(this).val()[2], $(this).val()[3]].join(''));

							// parse the numbers as 0312 => 03:12
							if(!options.datepicker && options.timepicker && splittedHours >= 0 && splittedHours < 24 && splittedMinutes >= 0 && splittedMinutes < 60) {
							  $(this).val([splittedHours, splittedMinutes].map(function(item) {
								return item > 9 ? item : '0' + item
							  }).join(':'));
							} else {
							  $(this).val((_xdsoft_datetime.now()).dateFormat(options.format));
							}

							datetimepicker.data('xdsoft_datetime').setCurrentTime($(this).val());
						  } else {
							datetimepicker.data('xdsoft_datetime').setCurrentTime($(this).val());
						  }

						  datetimepicker.trigger('changedatetime.xdsoft');
						});
				}
				options.dayOfWeekStartPrev = (options.dayOfWeekStart === 0) ? 6 : options.dayOfWeekStart - 1;

				datetimepicker
					.trigger('xchange.xdsoft')
					.trigger('afterOpen.xdsoft');
			};

			datetimepicker
				.data('options', options)
				.on('mousedown.xdsoft', function (event) {
					event.stopPropagation();
					event.preventDefault();
					yearselect.hide();
					monthselect.hide();
					return false;
				});

			//scroll_element = timepicker.find('.xdsoft_time_box');
			timeboxparent.append(timebox);
			timeboxparent.xdsoftScroller();

			datetimepicker.on('afterOpen.xdsoft', function () {
				timeboxparent.xdsoftScroller();
			});

			datetimepicker
				.append(datepicker)
				.append(timepicker);				

			if (options.withoutCopyright !== true) {
				datetimepicker
					.append(xdsoft_copyright);
			}

			datepicker
				.append(mounth_picker)
				.append(calendar)
				.append(applyButton);

			$(options.parentID)
				.append(datetimepicker);

			XDSoft_datetime = function () {
				var _this = this;
				_this.now = function (norecursion) {
					var d = new Date(),
						date,
						time;

					if (!norecursion && options.defaultDate) {
						date = _this.strToDate(options.defaultDate);
						d.setFullYear(date.getFullYear());
						d.setMonth(date.getMonth());
						d.setDate(date.getDate());
					}

					if (options.yearOffset) {
						d.setFullYear(d.getFullYear() + options.yearOffset);
					}

					if (!norecursion && options.defaultTime) {
						time = _this.strtotime(options.defaultTime);
						d.setHours(time.getHours());
						d.setMinutes(time.getMinutes());
					}

					return d;
				};

				_this.isValidDate = function (d) {
					if (Object.prototype.toString.call(d) !== "[object Date]") {
						return false;
					}
					return !isNaN(d.getTime());
				};

				_this.setCurrentTime = function (dTime) {
					_this.currentTime = (typeof dTime === 'string') ? _this.strToDateTime(dTime) : _this.isValidDate(dTime) ? dTime : _this.now();
					datetimepicker.trigger('xchange.xdsoft');
				};

				_this.empty = function () {
					_this.currentTime = null;
				};

				_this.getCurrentTime = function (dTime) {
					return _this.currentTime;
				};

				_this.nextMonth = function () {

					if (_this.currentTime === undefined || _this.currentTime === null) {
						_this.currentTime = _this.now();
					}

					var month = _this.currentTime.getMonth() + 1,
						year;
					if (month === 12) {
						_this.currentTime.setFullYear(_this.currentTime.getFullYear() + 1);
						month = 0;
					}

					year = _this.currentTime.getFullYear();

					_this.currentTime.setDate(
						Math.min(
							new Date(_this.currentTime.getFullYear(), month + 1, 0).getDate(),
							_this.currentTime.getDate()
						)
					);
					_this.currentTime.setMonth(month);

					if (options.onChangeMonth && $.isFunction(options.onChangeMonth)) {
						options.onChangeMonth.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}

					if (year !== _this.currentTime.getFullYear() && $.isFunction(options.onChangeYear)) {
						options.onChangeYear.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}

					datetimepicker.trigger('xchange.xdsoft');
					return month;
				};

				_this.prevMonth = function () {

					if (_this.currentTime === undefined || _this.currentTime === null) {
						_this.currentTime = _this.now();
					}

					var month = _this.currentTime.getMonth() - 1;
					if (month === -1) {
						_this.currentTime.setFullYear(_this.currentTime.getFullYear() - 1);
						month = 11;
					}
					_this.currentTime.setDate(
						Math.min(
							new Date(_this.currentTime.getFullYear(), month + 1, 0).getDate(),
							_this.currentTime.getDate()
						)
					);
					_this.currentTime.setMonth(month);
					if (options.onChangeMonth && $.isFunction(options.onChangeMonth)) {
						options.onChangeMonth.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}
					datetimepicker.trigger('xchange.xdsoft');
					return month;
				};

				_this.getWeekOfYear = function (datetime) {
					var onejan = new Date(datetime.getFullYear(), 0, 1);
					return Math.ceil((((datetime - onejan) / 86400000) + onejan.getDay() + 1) / 7);
				};

				_this.strToDateTime = function (sDateTime) {
					var tmpDate = [], timeOffset, currentTime;

					if (sDateTime && sDateTime instanceof Date && _this.isValidDate(sDateTime)) {
						return sDateTime;
					}

					tmpDate = /^(\+|\-)(.*)$/.exec(sDateTime);
					if (tmpDate) {
						tmpDate[2] = Date.parseDate(tmpDate[2], options.formatDate);
					}
					if (tmpDate  && tmpDate[2]) {
						timeOffset = tmpDate[2].getTime() - (tmpDate[2].getTimezoneOffset()) * 60000;
						currentTime = new Date((_xdsoft_datetime.now()).getTime() + parseInt(tmpDate[1] + '1', 10) * timeOffset);
					} else {
						currentTime = sDateTime ? Date.parseDate(sDateTime, options.format) : _this.now();
					}

					if (!_this.isValidDate(currentTime)) {
						currentTime = _this.now();
					}

					return currentTime;
				};

				_this.strToDate = function (sDate) {
					if (sDate && sDate instanceof Date && _this.isValidDate(sDate)) {
						return sDate;
					}

					var currentTime = sDate ? Date.parseDate(sDate, options.formatDate) : _this.now(true);
					if (!_this.isValidDate(currentTime)) {
						currentTime = _this.now(true);
					}
					return currentTime;
				};

				_this.strtotime = function (sTime) {
					if (sTime && sTime instanceof Date && _this.isValidDate(sTime)) {
						return sTime;
					}
					var currentTime = sTime ? Date.parseDate(sTime, options.formatTime) : _this.now(true);
					if (!_this.isValidDate(currentTime)) {
						currentTime = _this.now(true);
					}
					return currentTime;
				};

				_this.str = function () {
					return _this.currentTime.dateFormat(options.format);
				};
				_this.currentTime = this.now();
			};

			_xdsoft_datetime = new XDSoft_datetime();

			applyButton.on('click', function (e) {//pathbrite
                e.preventDefault();
                datetimepicker.data('changed',true);
                _xdsoft_datetime.setCurrentTime(getCurrentValue());
                input.val(_xdsoft_datetime.str());
                datetimepicker.trigger('close.xdsoft');
            });
			mounth_picker
				.find('.xdsoft_today_button')
				.on('mousedown.xdsoft', function () {
					datetimepicker.data('changed', true);
					_xdsoft_datetime.setCurrentTime(0);
					datetimepicker.trigger('afterOpen.xdsoft');
				}).on('dblclick.xdsoft', function () {
					input.val(_xdsoft_datetime.str());
					datetimepicker.trigger('close.xdsoft');
				});
			mounth_picker
				.find('.xdsoft_prev,.xdsoft_next')
				.on('mousedown.xdsoft', function () {
					var $this = $(this),
						timer = 0,
						stop = false;

					(function arguments_callee1(v) {
						if ($this.hasClass(options.next)) {
							_xdsoft_datetime.nextMonth();
						} else if ($this.hasClass(options.prev)) {
							_xdsoft_datetime.prevMonth();
						}
						if (options.monthChangeSpinner) {
							if (!stop) {
								timer = setTimeout(arguments_callee1, v || 100);
							}
						}
					}(500));

					$([document.body, window]).on('mouseup.xdsoft', function arguments_callee2() {
						clearTimeout(timer);
						stop = true;
						$([document.body, window]).off('mouseup.xdsoft', arguments_callee2);
					});
				});

			timepicker
				.find('.xdsoft_prev,.xdsoft_next')
				.on('mousedown.xdsoft', function () {
					var $this = $(this),
						timer = 0,
						stop = false,
						period = 110;
					(function arguments_callee4(v) {
						var pheight = timeboxparent[0].clientHeight,
							height = timebox[0].offsetHeight,
							top = Math.abs(parseInt(timebox.css('marginTop'), 10));
						if ($this.hasClass(options.next) && (height - pheight) - options.timeHeightInTimePicker >= top) {
							timebox.css('marginTop', '-' + (top + options.timeHeightInTimePicker) + 'px');
						} else if ($this.hasClass(options.prev) && top - options.timeHeightInTimePicker >= 0) {
							timebox.css('marginTop', '-' + (top - options.timeHeightInTimePicker) + 'px');
						}
						timeboxparent.trigger('scroll_element.xdsoft_scroller', [Math.abs(parseInt(timebox.css('marginTop'), 10) / (height - pheight))]);
						period = (period > 10) ? 10 : period - 10;
						if (!stop) {
							timer = setTimeout(arguments_callee4, v || period);
						}
					}(500));
					$([document.body, window]).on('mouseup.xdsoft', function arguments_callee5() {
						clearTimeout(timer);
						stop = true;
						$([document.body, window])
							.off('mouseup.xdsoft', arguments_callee5);
					});
				});

			xchangeTimer = 0;
			// base handler - generating a calendar and timepicker
			datetimepicker
				.on('xchange.xdsoft', function (event) {
					clearTimeout(xchangeTimer);
					xchangeTimer = setTimeout(function () {

						if (_xdsoft_datetime.currentTime === undefined || _xdsoft_datetime.currentTime === null) {
							_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
						}

						var table =	'',
							start = new Date(_xdsoft_datetime.currentTime.getFullYear(), _xdsoft_datetime.currentTime.getMonth(), 1, 12, 0, 0),
							i = 0,
							j,
							today = _xdsoft_datetime.now(),
							maxDate = false,
							minDate = false,
							d,
							y,
							m,
							w,
							classes = [],
							customDateSettings,
							newRow = true,
							time = '',
							h = '',
							line_time;

						while (start.getDay() !== options.dayOfWeekStart) {
							start.setDate(start.getDate() - 1);
						}

						table += '<table><thead><tr>';

						if (options.weeks) {
							table += '<th></th>';
						}

						for (j = 0; j < 7; j += 1) {
							table += '<th>' + options.i18n[options.lang].dayOfWeek[(j + options.dayOfWeekStart) % 7] + '</th>';
						}

						table += '</tr></thead>';
						table += '<tbody>';

						if (options.maxDate !== false) {
							maxDate = _xdsoft_datetime.strToDate(options.maxDate);
							maxDate = new Date(maxDate.getFullYear(), maxDate.getMonth(), maxDate.getDate(), 23, 59, 59, 999);
						}

						if (options.minDate !== false) {
							minDate = _xdsoft_datetime.strToDate(options.minDate);
							minDate = new Date(minDate.getFullYear(), minDate.getMonth(), minDate.getDate());
						}

						while (i < _xdsoft_datetime.currentTime.countDaysInMonth() || start.getDay() !== options.dayOfWeekStart || _xdsoft_datetime.currentTime.getMonth() === start.getMonth()) {
							classes = [];
							i += 1;

							d = start.getDate();
							y = start.getFullYear();
							m = start.getMonth();
							w = _xdsoft_datetime.getWeekOfYear(start);

							classes.push('xdsoft_date');

							if (options.beforeShowDay && $.isFunction(options.beforeShowDay.call)) {
								customDateSettings = options.beforeShowDay.call(datetimepicker, start);
							} else {
								customDateSettings = null;
							}

							if ((maxDate !== false && start > maxDate) || (minDate !== false && start < minDate) || (customDateSettings && customDateSettings[0] === false)) {
								classes.push('xdsoft_disabled');
							} else if (options.disabledDates.indexOf(start.dateFormat(options.formatDate)) !== -1) {
								classes.push('xdsoft_disabled');
							}

							if (customDateSettings && customDateSettings[1] !== "") {
								classes.push(customDateSettings[1]);
							}

							if (_xdsoft_datetime.currentTime.getMonth() !== m) {
								classes.push('xdsoft_other_month');
							}

							if ((options.defaultSelect || datetimepicker.data('changed')) && _xdsoft_datetime.currentTime.dateFormat(options.formatDate) === start.dateFormat(options.formatDate)) {
								classes.push('xdsoft_current');
							}

							if (today.dateFormat(options.formatDate) === start.dateFormat(options.formatDate)) {
								classes.push('xdsoft_today');
							}

							if (start.getDay() === 0  || ~options.weekends.indexOf(start.dateFormat(options.formatDate))) {
								classes.push('xdsoft_weekend');
							}

							if (options.beforeShowDay && $.isFunction(options.beforeShowDay)) {
								classes.push(options.beforeShowDay(start));
							}

							if (newRow) {
								table += '<tr>';
								newRow = false;
								if (options.weeks) {
									table += '<th>' + w + '</th>';
								}
							}

							table += '<td data-date="' + d + '" data-month="' + m + '" data-year="' + y + '"' + ' class="xdsoft_date xdsoft_day_of_week' + start.getDay() + ' ' + classes.join(' ') + '">' +
										'<div>' + d + '</div>' +
									'</td>';

							if (start.getDay() === options.dayOfWeekStartPrev) {
								table += '</tr>';
								newRow = true;
							}

							start.setDate(d + 1);
						}
						table += '</tbody></table>';

						calendar.html(table);

						mounth_picker.find('.xdsoft_label span').eq(0).text(options.i18n[options.lang].months[_xdsoft_datetime.currentTime.getMonth()]);
						mounth_picker.find('.xdsoft_label span').eq(1).text(_xdsoft_datetime.currentTime.getFullYear());

						// generate timebox
						time = '';
						h = '';
						m = '';
						line_time = function line_time(h, m) {
							var now = _xdsoft_datetime.now();
							now.setHours(h);
							h = parseInt(now.getHours(), 10);
							now.setMinutes(m);
							m = parseInt(now.getMinutes(), 10);
							var optionDateTime = new Date(_xdsoft_datetime.currentTime);
							optionDateTime.setHours(h);
							optionDateTime.setMinutes(m);
							classes = [];
							if((options.minDateTime !== false && options.minDateTime > optionDateTime) || (options.maxTime !== false && _xdsoft_datetime.strtotime(options.maxTime).getTime() < now.getTime()) || (options.minTime !== false && _xdsoft_datetime.strtotime(options.minTime).getTime() > now.getTime())) {
								classes.push('xdsoft_disabled');
							}

							var current_time = new Date(_xdsoft_datetime.currentTime);
							current_time.setHours(parseInt(_xdsoft_datetime.currentTime.getHours(), 10));
							current_time.setMinutes(Math[options.roundTime](_xdsoft_datetime.currentTime.getMinutes() / options.step) * options.step);

							if ((options.initTime || options.defaultSelect || datetimepicker.data('changed')) && current_time.getHours() === parseInt(h, 10) && (options.step > 59 || current_time.getMinutes() === parseInt(m, 10))) {
								if (options.defaultSelect || datetimepicker.data('changed')) {
									classes.push('xdsoft_current');
								} else if (options.initTime) {
									classes.push('xdsoft_init_time');
								}
							}
							if (parseInt(today.getHours(), 10) === parseInt(h, 10) && parseInt(today.getMinutes(), 10) === parseInt(m, 10)) {
								classes.push('xdsoft_today');
							}
							time += '<div class="xdsoft_time ' + classes.join(' ') + '" data-hour="' + h + '" data-minute="' + m + '">' + now.dateFormat(options.formatTime) + '</div>';
						};

						if (!options.allowTimes || !$.isArray(options.allowTimes) || !options.allowTimes.length) {
							for (i = 0, j = 0; i < (options.hours12 ? 12 : 24); i += 1) {
								for (j = 0; j < 60; j += options.step) {
									h = (i < 10 ? '0' : '') + i;
									m = (j < 10 ? '0' : '') + j;
									line_time(h, m);
								}
							}
						} else {
							for (i = 0; i < options.allowTimes.length; i += 1) {
								h = _xdsoft_datetime.strtotime(options.allowTimes[i]).getHours();
								m = _xdsoft_datetime.strtotime(options.allowTimes[i]).getMinutes();
								line_time(h, m);
							}
						}

						timebox.html(time);

						opt = '';
						i = 0;

						for (i = parseInt(options.yearStart, 10) + options.yearOffset; i <= parseInt(options.yearEnd, 10) + options.yearOffset; i += 1) {
							opt += '<div class="xdsoft_option ' + (_xdsoft_datetime.currentTime.getFullYear() === i ? 'xdsoft_current' : '') + '" data-value="' + i + '">' + i + '</div>';
						}
						yearselect.children().eq(0)
												.html(opt);

						for (i = parseInt(options.monthStart), opt = ''; i <= parseInt(options.monthEnd); i += 1) {
							opt += '<div class="xdsoft_option ' + (_xdsoft_datetime.currentTime.getMonth() === i ? 'xdsoft_current' : '') + '" data-value="' + i + '">' + options.i18n[options.lang].months[i] + '</div>';
						}
						monthselect.children().eq(0).html(opt);
						$(datetimepicker)
							.trigger('generate.xdsoft');
					}, 10);
					event.stopPropagation();
				})
				.on('afterOpen.xdsoft', function () {
					if (options.timepicker) {
						var classType, pheight, height, top;
						if (timebox.find('.xdsoft_current').length) {
							classType = '.xdsoft_current';
						} else if (timebox.find('.xdsoft_init_time').length) {
							classType = '.xdsoft_init_time';
						}
						if (classType) {
							pheight = timeboxparent[0].clientHeight;
							height = timebox[0].offsetHeight;
							top = timebox.find(classType).index() * options.timeHeightInTimePicker + 1;
							if ((height - pheight) < top) {
								top = height - pheight;
							}
							timeboxparent.trigger('scroll_element.xdsoft_scroller', [parseInt(top, 10) / (height - pheight)]);
						} else {
							timeboxparent.trigger('scroll_element.xdsoft_scroller', [0]);
						}
					}
				});

			timerclick = 0;
			calendar
				.on('click.xdsoft', 'td', function (xdevent) {
					xdevent.stopPropagation();  // Prevents closing of Pop-ups, Modals and Flyouts in Bootstrap
					timerclick += 1;
					var $this = $(this),
						currentTime = _xdsoft_datetime.currentTime;

					if (currentTime === undefined || currentTime === null) {
						_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
						currentTime = _xdsoft_datetime.currentTime;
					}

					if ($this.hasClass('xdsoft_disabled')) {
						return false;
					}

					currentTime.setDate(1);
					currentTime.setFullYear($this.data('year'));
					currentTime.setMonth($this.data('month'));
					currentTime.setDate($this.data('date'));

					datetimepicker.trigger('select.xdsoft', [currentTime]);

					input.val(_xdsoft_datetime.str());
					if ((timerclick > 1 || (options.closeOnDateSelect === true || (options.closeOnDateSelect === 0 && !options.timepicker))) && !options.inline) {
						datetimepicker.trigger('close.xdsoft');
					}

					if (options.onSelectDate &&	$.isFunction(options.onSelectDate)) {
						options.onSelectDate.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), xdevent);
					}

					datetimepicker.data('changed', true);
					datetimepicker.trigger('xchange.xdsoft');
					datetimepicker.trigger('changedatetime.xdsoft');
					setTimeout(function () {
						timerclick = 0;
					}, 200);
				});

			timebox
				.on('click.xdsoft', 'div', function (xdevent) {
					xdevent.stopPropagation();
					var $this = $(this),
						currentTime = _xdsoft_datetime.currentTime;

					if (currentTime === undefined || currentTime === null) {
						_xdsoft_datetime.currentTime = _xdsoft_datetime.now();
						currentTime = _xdsoft_datetime.currentTime;
					}

					if ($this.hasClass('xdsoft_disabled')) {
						return false;
					}
					currentTime.setHours($this.data('hour'));
					currentTime.setMinutes($this.data('minute'));
					datetimepicker.trigger('select.xdsoft', [currentTime]);

					datetimepicker.data('input').val(_xdsoft_datetime.str());

                    if (options.inline !== true && options.closeOnTimeSelect === true) {
                        datetimepicker.trigger('close.xdsoft');
                    }

					if (options.onSelectTime && $.isFunction(options.onSelectTime)) {
						options.onSelectTime.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), xdevent);
					}
					datetimepicker.data('changed', true);
					datetimepicker.trigger('xchange.xdsoft');
					datetimepicker.trigger('changedatetime.xdsoft');
				});


			datepicker
				.on('mousewheel.xdsoft', function (event) {
					if (!options.scrollMonth) {
						return true;
					}
					if (event.deltaY < 0) {
						_xdsoft_datetime.nextMonth();
					} else {
						_xdsoft_datetime.prevMonth();
					}
					return false;
				});

			input
				.on('mousewheel.xdsoft', function (event) {
					if (!options.scrollInput) {
						return true;
					}
					if (!options.datepicker && options.timepicker) {
						current_time_index = timebox.find('.xdsoft_current').length ? timebox.find('.xdsoft_current').eq(0).index() : 0;
						if (current_time_index + event.deltaY >= 0 && current_time_index + event.deltaY < timebox.children().length) {
							current_time_index += event.deltaY;
						}
						if (timebox.children().eq(current_time_index).length) {
							timebox.children().eq(current_time_index).trigger('mousedown');
						}
						return false;
					}
					if (options.datepicker && !options.timepicker) {
						datepicker.trigger(event, [event.deltaY, event.deltaX, event.deltaY]);
						if (input.val) {
							input.val(_xdsoft_datetime.str());
						}
						datetimepicker.trigger('changedatetime.xdsoft');
						return false;
					}
				});

			datetimepicker
				.on('changedatetime.xdsoft', function (event) {
					if (options.onChangeDateTime && $.isFunction(options.onChangeDateTime)) {
						var $input = datetimepicker.data('input');
						options.onChangeDateTime.call(datetimepicker, _xdsoft_datetime.currentTime, $input, event);
						delete options.value;
						$input.trigger('change');
					}
				})
				.on('generate.xdsoft', function () {
					if (options.onGenerate && $.isFunction(options.onGenerate)) {
						options.onGenerate.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'));
					}
					if (triggerAfterOpen) {
						datetimepicker.trigger('afterOpen.xdsoft');
						triggerAfterOpen = false;
					}
				})
				.on('click.xdsoft', function (xdevent) {
					xdevent.stopPropagation();
				});

			current_time_index = 0;

			setPos = function () {
				var offset = datetimepicker.data('input').offset(), top = offset.top + datetimepicker.data('input')[0].offsetHeight - 1, left = offset.left, position = "absolute";
				if (options.fixed) {
					top -= $(window).scrollTop();
					left -= $(window).scrollLeft();
					position = "fixed";
				} else {
					if (top + datetimepicker[0].offsetHeight > $(window).height() + $(window).scrollTop()) {
						top = offset.top - datetimepicker[0].offsetHeight + 1;
					}
					if (top < 0) {
						top = 0;
					}
					if (left + datetimepicker[0].offsetWidth > $(window).width()) {
						left = $(window).width() - datetimepicker[0].offsetWidth;
					}
				}
				datetimepicker.css({
					left: left,
					top: top,
					position: position
				});
			};
			datetimepicker
				.on('open.xdsoft', function (event) {
					var onShow = true;
					if (options.onShow && $.isFunction(options.onShow)) {
						onShow = options.onShow.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), event);
					}
					if (onShow !== false) {
						datetimepicker.show();
						setPos();
						$(window)
							.off('resize.xdsoft', setPos)
							.on('resize.xdsoft', setPos);

						if (options.closeOnWithoutClick) {
							$([document.body, window]).on('mousedown.xdsoft', function arguments_callee6() {
								datetimepicker.trigger('close.xdsoft');
								$([document.body, window]).off('mousedown.xdsoft', arguments_callee6);
							});
						}
					}
				})
				.on('close.xdsoft', function (event) {
					var onClose = true;
					mounth_picker
						.find('.xdsoft_month,.xdsoft_year')
							.find('.xdsoft_select')
								.hide();
					if (options.onClose && $.isFunction(options.onClose)) {
						onClose = options.onClose.call(datetimepicker, _xdsoft_datetime.currentTime, datetimepicker.data('input'), event);
					}
					if (onClose !== false && !options.opened && !options.inline) {
						datetimepicker.hide();
					}
					event.stopPropagation();
				})
				.on('toggle.xdsoft', function (event) {
					if (datetimepicker.is(':visible')) {
						datetimepicker.trigger('close.xdsoft');
					} else {
						datetimepicker.trigger('open.xdsoft');
					}
				})
				.data('input', input);

			timer = 0;
			timer1 = 0;

			datetimepicker.data('xdsoft_datetime', _xdsoft_datetime);
			datetimepicker.setOptions(options);

			function getCurrentValue() {

				var ct = false, time;

				if (options.startDate) {
					ct = _xdsoft_datetime.strToDate(options.startDate);
				} else {
					ct = options.value || ((input && input.val && input.val()) ? input.val() : '');
					if (ct) {
						ct = _xdsoft_datetime.strToDateTime(ct);
					} else if (options.defaultDate) {
						ct = _xdsoft_datetime.strToDate(options.defaultDate);
						if (options.defaultTime) {
							time = _xdsoft_datetime.strtotime(options.defaultTime);
							ct.setHours(time.getHours());
							ct.setMinutes(time.getMinutes());
						}
					}
				}

				if (ct && _xdsoft_datetime.isValidDate(ct)) {
					datetimepicker.data('changed', true);
				} else {
					ct = '';
				}

				return ct || 0;
			}

			_xdsoft_datetime.setCurrentTime(getCurrentValue());

			input
				.data('xdsoft_datetimepicker', datetimepicker)
				.on('open.xdsoft focusin.xdsoft mousedown.xdsoft', function (event) {
					if (input.is(':disabled') || (input.data('xdsoft_datetimepicker').is(':visible') && options.closeOnInputClick)) {
						return;
					}
					clearTimeout(timer);
					timer = setTimeout(function () {
						if (input.is(':disabled')) {
							return;
						}

						triggerAfterOpen = true;
						_xdsoft_datetime.setCurrentTime(getCurrentValue());

						datetimepicker.trigger('open.xdsoft');
					}, 100);
				})
				.on('keydown.xdsoft', function (event) {
					var val = this.value, elementSelector,
						key = event.which;
					if ([ENTER].indexOf(key) !== -1 && options.enterLikeTab) {
						elementSelector = $("input:visible,textarea:visible");
						datetimepicker.trigger('close.xdsoft');
						elementSelector.eq(elementSelector.index(this) + 1).focus();
						return false;
					}
					if ([TAB].indexOf(key) !== -1) {
						datetimepicker.trigger('close.xdsoft');
						return true;
					}
				});
		};
		destroyDateTimePicker = function (input) {
			var datetimepicker = input.data('xdsoft_datetimepicker');
			if (datetimepicker) {
				datetimepicker.data('xdsoft_datetime', null);
				datetimepicker.remove();
				input
					.data('xdsoft_datetimepicker', null)
					.off('.xdsoft');
				$(window).off('resize.xdsoft');
				$([window, document.body]).off('mousedown.xdsoft');
				if (input.unmousewheel) {
					input.unmousewheel();
				}
			}
		};
		$(document)
			.off('keydown.xdsoftctrl keyup.xdsoftctrl')
			.on('keydown.xdsoftctrl', function (e) {
				if (e.keyCode === CTRLKEY) {
					ctrlDown = true;
				}
			})
			.on('keyup.xdsoftctrl', function (e) {
				if (e.keyCode === CTRLKEY) {
					ctrlDown = false;
				}
			});
		return this.each(function () {
			var datetimepicker = $(this).data('xdsoft_datetimepicker');
			if (datetimepicker) {
				if ($.type(opt) === 'string') {
					switch (opt) {
					case 'show':
						$(this).select().focus();
						datetimepicker.trigger('open.xdsoft');
						break;
					case 'hide':
						datetimepicker.trigger('close.xdsoft');
						break;
					case 'toggle':
						datetimepicker.trigger('toggle.xdsoft');
						break;
					case 'destroy':
						destroyDateTimePicker($(this));
						break;
					case 'reset':
						this.value = this.defaultValue;
						if (!this.value || !datetimepicker.data('xdsoft_datetime').isValidDate(Date.parseDate(this.value, options.format))) {
							datetimepicker.data('changed', false);
						}
						datetimepicker.data('xdsoft_datetime').setCurrentTime(this.value);
						break;
					case 'validate':
						var $input = datetimepicker.data('input');
						$input.trigger('blur.xdsoft');
						break;
					}
				} else {
					datetimepicker
						.setOptions(opt);
				}
				return 0;
			}
			if ($.type(opt) !== 'string') {
				if (!options.lazyInit || options.open || options.inline) {
					createDateTimePicker($(this));
				} else {
					lazyInit($(this));
				}
			}
		});
	};
	$.fn.datetimepicker.defaults = default_options;
}(jQuery));
(function () {

/*! Copyright (c) 2013 Brandon Aaron (http://brandon.aaron.sh)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version: 3.1.12
 *
 * Requires: jQuery 1.2.2+
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});

// Parse and Format Library
//http://www.xaprb.com/blog/2005/12/12/javascript-closures-for-runtime-efficiency/
/*
 * Copyright (C) 2004 Baron Schwartz <baron at sequent dot org>
 *
 * This program is free software; you can redistribute it and/or modify it
 * under the terms of the GNU Lesser General Public License as published by the
 * Free Software Foundation, version 2.1.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Lesser General Public License for more
 * details.
 */
Date.parseFunctions={count:0};Date.parseRegexes=[];Date.formatFunctions={count:0};Date.prototype.dateFormat=function(b){if(b=="unixtime"){return parseInt(this.getTime()/1000);}if(Date.formatFunctions[b]==null){Date.createNewFormat(b);}var a=Date.formatFunctions[b];return this[a]();};Date.createNewFormat=function(format){var funcName="format"+Date.formatFunctions.count++;Date.formatFunctions[format]=funcName;var codePrefix="Date.prototype."+funcName+" = function() {return ";var code="";var special=false;var ch="";for(var i=0;i<format.length;++i){ch=format.charAt(i);if(!special&&ch=="\\"){special=true;}else{if(special){special=false;code+="'"+String.escape(ch)+"' + ";}else{code+=Date.getFormatCode(ch);}}}if(code.length==0){code="\"\"";}else{code=code.substring(0,code.length-3);}eval(codePrefix+code+";}");};Date.getFormatCode=function(a){switch(a){case"d":return"String.leftPad(this.getDate(), 2, '0') + ";case"D":return"Date.dayNames[this.getDay()].substring(0, 3) + ";case"j":return"this.getDate() + ";case"l":return"Date.dayNames[this.getDay()] + ";case"S":return"this.getSuffix() + ";case"w":return"this.getDay() + ";case"z":return"this.getDayOfYear() + ";case"W":return"this.getWeekOfYear() + ";case"F":return"Date.monthNames[this.getMonth()] + ";case"m":return"String.leftPad(this.getMonth() + 1, 2, '0') + ";case"M":return"Date.monthNames[this.getMonth()].substring(0, 3) + ";case"n":return"(this.getMonth() + 1) + ";case"t":return"this.getDaysInMonth() + ";case"L":return"(this.isLeapYear() ? 1 : 0) + ";case"Y":return"this.getFullYear() + ";case"y":return"('' + this.getFullYear()).substring(2, 4) + ";case"a":return"(this.getHours() < 12 ? 'am' : 'pm') + ";case"A":return"(this.getHours() < 12 ? 'AM' : 'PM') + ";case"g":return"((this.getHours() %12) ? this.getHours() % 12 : 12) + ";case"G":return"this.getHours() + ";case"h":return"String.leftPad((this.getHours() %12) ? this.getHours() % 12 : 12, 2, '0') + ";case"H":return"String.leftPad(this.getHours(), 2, '0') + ";case"i":return"String.leftPad(this.getMinutes(), 2, '0') + ";case"s":return"String.leftPad(this.getSeconds(), 2, '0') + ";case"O":return"this.getGMTOffset() + ";case"T":return"this.getTimezone() + ";case"Z":return"(this.getTimezoneOffset() * -60) + ";default:return"'"+String.escape(a)+"' + ";}};Date.parseDate=function(a,c){if(c=="unixtime"){return new Date(!isNaN(parseInt(a))?parseInt(a)*1000:0);}if(Date.parseFunctions[c]==null){Date.createParser(c);}var b=Date.parseFunctions[c];return Date[b](a);};Date.createParser=function(format){var funcName="parse"+Date.parseFunctions.count++;var regexNum=Date.parseRegexes.length;var currentGroup=1;Date.parseFunctions[format]=funcName;var code="Date."+funcName+" = function(input) {\nvar y = -1, m = -1, d = -1, h = -1, i = -1, s = -1, z = -1;\nvar d = new Date();\ny = d.getFullYear();\nm = d.getMonth();\nd = d.getDate();\nvar results = input.match(Date.parseRegexes["+regexNum+"]);\nif (results && results.length > 0) {";var regex="";var special=false;var ch="";for(var i=0;i<format.length;++i){ch=format.charAt(i);if(!special&&ch=="\\"){special=true;}else{if(special){special=false;regex+=String.escape(ch);}else{obj=Date.formatCodeToRegex(ch,currentGroup);currentGroup+=obj.g;regex+=obj.s;if(obj.g&&obj.c){code+=obj.c;}}}}code+="if (y > 0 && z > 0){\nvar doyDate = new Date(y,0);\ndoyDate.setDate(z);\nm = doyDate.getMonth();\nd = doyDate.getDate();\n}";code+="if (y > 0 && m >= 0 && d > 0 && h >= 0 && i >= 0 && s >= 0)\n{return new Date(y, m, d, h, i, s);}\nelse if (y > 0 && m >= 0 && d > 0 && h >= 0 && i >= 0)\n{return new Date(y, m, d, h, i);}\nelse if (y > 0 && m >= 0 && d > 0 && h >= 0)\n{return new Date(y, m, d, h);}\nelse if (y > 0 && m >= 0 && d > 0)\n{return new Date(y, m, d);}\nelse if (y > 0 && m >= 0)\n{return new Date(y, m);}\nelse if (y > 0)\n{return new Date(y);}\n}return null;}";Date.parseRegexes[regexNum]=new RegExp("^"+regex+"$",'i');eval(code);};Date.formatCodeToRegex=function(b,a){switch(b){case"D":return{g:0,c:null,s:"(?:Sun|Mon|Tue|Wed|Thu|Fri|Sat)"};case"j":case"d":return{g:1,c:"d = parseInt(results["+a+"], 10);\n",s:"(\\d{1,2})"};case"l":return{g:0,c:null,s:"(?:"+Date.dayNames.join("|")+")"};case"S":return{g:0,c:null,s:"(?:st|nd|rd|th)"};case"w":return{g:0,c:null,s:"\\d"};case"z":return{g:1,c:"z = parseInt(results["+a+"], 10);\n",s:"(\\d{1,3})"};case"W":return{g:0,c:null,s:"(?:\\d{2})"};case"F":return{g:1,c:"m = parseInt(Date.monthNumbers[results["+a+"].substring(0, 3)], 10);\n",s:"("+Date.monthNames.join("|")+")"};case"M":return{g:1,c:"m = parseInt(Date.monthNumbers[results["+a+"]], 10);\n",s:"(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)"};case"n":case"m":return{g:1,c:"m = parseInt(results["+a+"], 10) - 1;\n",s:"(\\d{1,2})"};case"t":return{g:0,c:null,s:"\\d{1,2}"};case"L":return{g:0,c:null,s:"(?:1|0)"};case"Y":return{g:1,c:"y = parseInt(results["+a+"], 10);\n",s:"(\\d{4})"};case"y":return{g:1,c:"var ty = parseInt(results["+a+"], 10);\ny = ty > Date.y2kYear ? 1900 + ty : 2000 + ty;\n",s:"(\\d{1,2})"};case"a":return{g:1,c:"if (results["+a+"] == 'am') {\nif (h == 12) { h = 0; }\n} else { if (h < 12) { h += 12; }}",s:"(am|pm)"};case"A":return{g:1,c:"if (results["+a+"] == 'AM') {\nif (h == 12) { h = 0; }\n} else { if (h < 12) { h += 12; }}",s:"(AM|PM)"};case"g":case"G":case"h":case"H":return{g:1,c:"h = parseInt(results["+a+"], 10);\n",s:"(\\d{1,2})"};case"i":return{g:1,c:"i = parseInt(results["+a+"], 10);\n",s:"(\\d{2})"};case"s":return{g:1,c:"s = parseInt(results["+a+"], 10);\n",s:"(\\d{2})"};case"O":return{g:0,c:null,s:"[+-]\\d{4}"};case"T":return{g:0,c:null,s:"[A-Z]{3}"};case"Z":return{g:0,c:null,s:"[+-]\\d{1,5}"};default:return{g:0,c:null,s:String.escape(b)};}};Date.prototype.getTimezone=function(){return this.toString().replace(/^.*? ([A-Z]{3}) [0-9]{4}.*$/,"$1").replace(/^.*?\(([A-Z])[a-z]+ ([A-Z])[a-z]+ ([A-Z])[a-z]+\)$/,"$1$2$3");};Date.prototype.getGMTOffset=function(){return(this.getTimezoneOffset()>0?"-":"+")+String.leftPad(Math.floor(Math.abs(this.getTimezoneOffset())/60),2,"0")+String.leftPad(Math.abs(this.getTimezoneOffset())%60,2,"0");};Date.prototype.getDayOfYear=function(){var a=0;Date.daysInMonth[1]=this.isLeapYear()?29:28;for(var b=0;b<this.getMonth();++b){a+=Date.daysInMonth[b];}return a+this.getDate();};Date.prototype.getWeekOfYear=function(){var b=this.getDayOfYear()+(4-this.getDay());var a=new Date(this.getFullYear(),0,1);var c=(7-a.getDay()+4);return String.leftPad(Math.ceil((b-c)/7)+1,2,"0");};Date.prototype.isLeapYear=function(){var a=this.getFullYear();return((a&3)==0&&(a%100||(a%400==0&&a)));};Date.prototype.getFirstDayOfMonth=function(){var a=(this.getDay()-(this.getDate()-1))%7;return(a<0)?(a+7):a;};Date.prototype.getLastDayOfMonth=function(){var a=(this.getDay()+(Date.daysInMonth[this.getMonth()]-this.getDate()))%7;return(a<0)?(a+7):a;};Date.prototype.getDaysInMonth=function(){Date.daysInMonth[1]=this.isLeapYear()?29:28;return Date.daysInMonth[this.getMonth()];};Date.prototype.getSuffix=function(){switch(this.getDate()){case 1:case 21:case 31:return"st";case 2:case 22:return"nd";case 3:case 23:return"rd";default:return"th";}};String.escape=function(a){return a.replace(/('|\\)/g,"\\$1");};String.leftPad=function(d,b,c){var a=new String(d);if(c==null){c=" ";}while(a.length<b){a=c+a;}return a;};Date.daysInMonth=[31,28,31,30,31,30,31,31,30,31,30,31];Date.monthNames=["January","February","March","April","May","June","July","August","September","October","November","December"];Date.dayNames=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];Date.y2kYear=50;Date.monthNumbers={Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,Jul:6,Aug:7,Sep:8,Oct:9,Nov:10,Dec:11};Date.patterns={ISO8601LongPattern:"Y-m-d H:i:s",ISO8601ShortPattern:"Y-m-d",ShortDatePattern:"n/j/Y",LongDatePattern:"l, F d, Y",FullDateTimePattern:"l, F d, Y g:i:s A",MonthDayPattern:"F d",ShortTimePattern:"g:i A",LongTimePattern:"g:i:s A",SortableDateTimePattern:"Y-m-d\\TH:i:s",UniversalSortableDateTimePattern:"Y-m-d H:i:sO",YearMonthPattern:"F, Y"};
}());




jQuery('#datetimepicker').datetimepicker({
    step: 30,
    // defaultTime: new Date().getHours()+2+':00',
    defaultTime: '15:00',
    minTime: '11:00',
    minDate: new Date(),
    maxTime: '21:00',
    // onSelectTime: function () {
    //     var currentTime = new Date().getHours()+2;
    //     var tempCurrentime = '17';
    //     var todayDate = new Date().getDate();
    //     var tempDateselected = 23;
    //     console.log('change time')
    //     console.log('todayDate', todayDate)
    //     if(tempCurrentime > 16 && tempDateselected > todayDate){
            
    //         alert('Please select next working date');
    //     }
    //     else{
    //         console.log('else statement')
    //     }
    // },
    onGenerate: function(){
        jQuery(this).find('.xdsoft_date.xdsoft_weekend')
          .addClass('xdsoft_disabled');
         
        },
        onShow:function(){
            // var currentHour = new Date().getHours();
            var currentHour = 20;
          var currentAddHour = currentHour+2;
          var today = new Date();
          var nextDay = today.setDate(new Date(today).getDate() + 1);
          var nextDateFormat = new Date(nextDay);
          console.log('next Date time', nextDateFormat)
          console.log('current hour', currentHour);
          console.log('current hour add', currentAddHour)
          console.log('new date', new Date())
          if( currentAddHour >= 18 ){
            this.setOptions({
                minTime: '10:00',
                defaultTime: '10:00',
                maxTime: '18:00',
                defaultDate: new Date(),
                minDate: new Date(),
                });
          } 
          else{
              console.log('date is lesser')
          } 
          
        },
        // onSelectDate:function(dateText){
        //     var dynamicDate = dateText.getDate()
        //     console.log('date time', dateText)
        //     var todayDate = new Date().getDate();
        //     console.log('dynamic date', dynamicDate, 'today date', todayDate)
        //     if( dynamicDate > todayDate){
        //         this.setOptions({
        //             defaultTime: '11:00',
        //               minTime: '11:00',
        //               maxTime:'18:00'
        //             });
        //     }
        // }
});
</script>
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
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script>function createAppointment(dateTimeDetails){
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
	
	if(window.innerWidth < 748){
		document.getElementById('maincontainer-leftside').classList.add('lil-container');
		document.getElementById('mainContainer').classList.replace('lil-container', 'lil-px-3');

		var formsContainer = document.getElementById('forms-container');
		var floatingbtn = document.getElementById('floatingbtn');
		let fixedFormTop = formsContainer.getBoundingClientRect().top;
		window.addEventListener('scroll', () => {
					let { top, bottom } = formsContainer.getBoundingClientRect();
					if(window.innerHeight > top+400 && bottom > 0){
						floatingbtn.style.display = "none";
					}else{
						floatingbtn.style.display = "flex";
					}
		});
		floatingbtn.addEventListener('click', () =>{
						window.scrollTo(0,fixedFormTop);
						handleTrack({label: 'booknowbtn', obj: floatingbtn})

		})
	}
</script>
<script>

	window.addEventListener('DOMContentLoaded', (event) => {
		let ssoUrl = {
			"ClearGst":'https://accounts.cleartax.in/v2?product=gst&return_path=L24vc3NvP3JlZGlyZWN0X3VybD1MMjQ9',
			"ClearE-Invoicing":'https://accounts.cleartax.in/v2?product=einvoice',
			"ClearMax ITC":'https://accounts.cleartax.in/v2?product=einvoice',
			"ClearE-WayBill":"https://accounts.cleartax.in/v2?product=eway_bill&return_path=Lw==",
			"ClearTDS":"https://accounts.cleartax.in/v2?product=tds&return_path=L2FwaS9hY2NvdW50L2xvZ2luX2NhbGxiYWNr",
			"Need more help":"https://accounts.cleartax.in/v2?product=business&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
			"All Products":"https://accounts.cleartax.in/v2?product=business&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
			"ClearTaxCloud":"https://accounts.cleartax.in/v2?product=taxcloud&return_path=L0VudGl0eQ==",
			"ClearPro App":"https://cleartax.in/s/clearpro",
			"business":"https://accounts.cleartax.in/v2?product=business&return_path=L2xhdW5jaHBhZD9zb3VyY2U9Z3N0",
		}
		let tryForFreeBtn = document.getElementById("tryFree");
		let selectedForm = "Business"
		let errorObj;
		let selectedProductBusiness = {};
		let selectedProductTaxExpert = {};
		let selectedProductsInForm = {};
		let intrestedProducts = [];
		let countSelectedProd = 0
		const listOfNavbtns = document.querySelectorAll('.nav-logged-out-container a');
		const lostOfSuccessTryforFree = document.querySelectorAll('.removeforeinvoice');
		tryForFreeBtn.addEventListener("click",(e)=>{
			handleTrack({label: 'fold_success', obj: e.target});
			let selectedProd = selectedForm=="Business"?selectedProductBusiness:selectedProductTaxExpert;
			if(countSelectedProd>1||countSelectedProd==0){
				window.location.href = ssoUrl.business
			}
			else if(countSelectedProd==1){
				let ele = Object.keys(selectedProd).filter((ele)=>selectedProd[ele] ==1)[0]
				window.location.href = ssoUrl[ele]
			}
		})

		let businessForm = document.getElementById("formbusiness")
		let taxExpertForm = document.getElementById("formtaxExpert")
		
		let businessButton = document.getElementById("type-business")
		let taxExpertButton = document.getElementById("type-taxExpert")
		
		let intrestedInBusinessProd = document.querySelectorAll(".intrestedInProductBusiness-span");
		let intrestedInTaxProd = document.querySelectorAll(".intrestedInProductTaxExpert-span");
		

		businessButton.addEventListener("click",(e)=>{
			handleTrack({label: 'organization_type_button', obj: e.target});
			onBusinessTypeChange("Business");
			document.getElementById("joined_qty").innerHTML =`<span class="lil-text-green-350">600K+</span> Businesses</span>`;
		})
		taxExpertButton.addEventListener("click",(e)=>{
			handleTrack({label: 'organization_type_button', obj: e.target});
			onBusinessTypeChange("Tax Experts");
			document.getElementById("joined_qty").innerHTML =`<span class="lil-text-green-350">80K+</span> Tax Experts</span>`;			
		})
		function selectProduct(selectedProduct){
			return function({target}){
				let needmorehelp = document.getElementById('taxNeedMoreHelp');
				producitonSelection(selectedProduct,target)
			}
		}

		function producitonSelection(selectedProduct,currentTarget){
			let product = currentTarget.getAttribute('productKeyValue');

			if(product == "All Products"){
					if(!selectedProduct[product]){
						for(i=0;i<intrestedProducts.length-1;i++){
							let ele = intrestedProducts[i];
							selectedProduct[ele.attributes.productkeyvalue.nodeValue] = 1
							const isSelected = ele.classList.contains('productTabNonActive');
							if(isSelected) {
								ele.classList.replace('productTabNonActive','productTabActive')
								countSelectedProd++;
							}
						}
					}
					else{
						for(i=0;i<intrestedProducts.length-1;i++){
							let ele = intrestedProducts[i]
							selectedProduct[ele.attributes.productkeyvalue.nodeValue] = 0
							const isSelected = ele.classList.contains('productTabActive');
							if(isSelected) {
								ele.classList.replace('productTabActive','productTabNonActive')
								countSelectedProd--;
							}
						}
					}
					businessSelectedProductValidation()
					return;
				}
				if(!selectedProduct[product]){
					selectedProduct[product] = 1
					const isSelected = currentTarget.classList.contains('productTabNonActive');
					if(isSelected) {
						currentTarget.classList.replace('productTabNonActive','productTabActive')
						countSelectedProd++;
					}
				}
				else{
					selectedProduct[product] = 0
					const isSelected = currentTarget.classList.contains('productTabActive');
					if(isSelected) {
						currentTarget.classList.replace('productTabActive','productTabNonActive')
						countSelectedProd--;
					}
				}
				businessSelectedProductValidation()
			
				let listOfproductTabActive = document.querySelectorAll('#intrestedProduct-formbusiness .productTabActive');
				if(taxExpertForm.classList.contains('lil-hidden')){
					if(listOfproductTabActive.length === 1 && selectedProduct['ClearE-Invoicing'] === 1){
							lostOfSuccessTryforFree.forEach(item => {
								item.style.display = "none";
							});
					}else{
							lostOfSuccessTryforFree.forEach(item => {
								item.style.display = "block";
							});
					}
				}
				
		}
		window.onload = function() {
			beginingOption();
		};
		function beginingOption() {
			const queryString = window.location.search;
	 		const urlParams = new URLSearchParams(queryString);
			const pageCategoryType = urlParams.get('pageCategoryType');
			const selectedFormUrl = urlParams.get('form');
			if(selectedFormUrl == "tax-expert"){
				onBusinessTypeChange("Tax Experts");
				let ele = document.getElementById(`intrestedInProductTaxExpert-${pageCategoryType}`)
				if(ele)
				producitonSelection(selectedProductTaxExpert,ele)
			}
			else{
				onBusinessTypeChange("Business");
				let ele = document.getElementById(`intrestedInProductBusiness-${pageCategoryType}`);
				if(pageCategoryType==='einvoice'){
					listOfNavbtns.forEach(item => {
						if(item.innerText === "Try for Free"){
							item.style.display = "none";
						}
					});
				}
				if(ele)
				producitonSelection(selectedProductBusiness,ele)
			}
		}
	
		function onBusinessTypeChange(value="Business"){
			if(selectedForm!==value){
				selectedForm = value
				if(value=="Business"){
					businessButton.classList.replace("notActiveFormType", "activeFormType");
					taxExpertButton.classList.replace("activeFormType", "notActiveFormType");
					
				}
				else{
					businessButton.classList.replace("activeFormType", "notActiveFormType");
					taxExpertButton.classList.replace("notActiveFormType", "activeFormType");
				}
				businessForm.classList.toggle("lil-hidden")
				taxExpertForm.classList.toggle("lil-hidden")
			}

			//common onclick function for both forms
			intrestedProducts = selectedForm === 'Business' ? intrestedInBusinessProd : intrestedInTaxProd;
			selectedProductsInForm = selectedForm === 'Business' ? selectedProductBusiness : selectedProductTaxExpert;
			for(i=0;i<intrestedProducts.length;i++){
				let ele = intrestedProducts[i];
				if (ele.getAttribute('listener') !== 'true'){
					ele.setAttribute('listener', 'true');
					ele.addEventListener("click",selectProduct(selectedProductsInForm));
				}
				
			}
			
		}	
		// For Business Form//
		const formId = '';
		let selectedIndex ;
		let cb = asyncDebounce(getCompanyName,500)
	
		autoCompletFn(`company-name-formbusiness`,`companies-options-formbusiness`,cb).getSelectedIndex(index=>{
			selectedIndex = index
		})
	
		let formBusinessValidateObj = [
			{name:"Name",inputEleId:`username-formbusiness`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isNameValid,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username",initValue:""},
			{name:"Phone No",inputEleId:`phoneno-formbusiness`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isPhoneNoValid,ValidationsClass.customValidation(customPhoneNumberCheck)],type:"text",apiKey:"PhoneNo",initValue:""},
			{name:"Email",inputEleId:`emailid-formbusiness`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail,ValidationsClass.validDomain],type:"text",apiKey:"Email",initValue:""},
			{name:"Company Name",inputEleId:`company-name-formbusiness`,type:"text",apiKey:"CompanyName",initValue:""},
			{name:"Turnover",inputEleId:`turnover-formbusiness`,validationArr:[ValidationsClass.isEmpty],type:"text",apiKey:"Turnover",initValue:""},
			{name:"Company ERP",inputEleId:`company-ERP-formbusiness`,type:"text",onChangeCb:handleErp,apiKey:"CompanyERP",initValue:""},
			{name:"Company Designation",inputEleId:`designation-formbusiness`,type:"text",onChangeCb:handleDesignation,apiKey:"Designation",initValue:""},
			{name:"Company ERP Other",inputEleId:`companyerp-other-formbusiness`,validationArr:[],type:"text",apiKey:"companyERPOther",initValue:""},
			{name:"Company Designation Other",inputEleId:`designation-other-formbusiness`,validationArr:[],type:"text",apiKey:"DesignationOther",initValue:""},
			{name:"Whatsapp Consent",inputEleId:`waconsent-formbusiness`,validationArr:[],type:"checkbox",apiKey:"waconsent",initValue:true}
		]
		
		let formBusinessInstance = getFormInstance(formBusinessValidateObj)
		function handleDesignation(target) {
			if(target.value == 'Other'){
				document.getElementById(`designation-other-formbusiness`,ValidationsClass.isNameValid).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`designation-other-formbusiness`,ValidationsClass.isNameValid).classList.add('lil-hidden');
			}
		};

		function customPhoneNumberCheck(target){
			let phoneNo = ["6000000000", "6111111111", "6121212121", "6123456789", "6222222222", "6333333333", "6444444444", "6555555555", "6666600000", "6666611111", "6666622222", "6666633333", "6666644444", "6666655555", "6666666666", "6666677777", "6666688888", "6666699999", "6767676767", "6777777777", "6888888888", "6999999999", "7000000000", "7111111111", "7121212121", "7123456789", "7222222222", "7333333333", "7417417410", "7444444444", "7555555555", "7777700000", "7777711111", "7777722222", "7777733333", "7777744444", "7777755555", "7777766666", "7777777777", "7777788888", "7777799999", "7878787878", "7888888888", "7894561230", "7999999999", "8000000000", "8111111111", "8123456789", "8222222222", "8333333333", "8444444444", "8528528520", "8555555555", "8777777777", "8888800000", "8888811111", "8888822222", "8888833333", "8888844444", "8888855555", "8888866666", "8888877777", "8888888888", "8888899999", "8989898989", "8999999999", "9000000000", "9009009009", "9111111111", "9123456789", "9222222222", "9333333333", "9444444444", "9555555555", "9639639630", "9777777777", "9876543210", "9888888888", "9898989898", "9988998899", "9999900000", "9999911111", "9999922222", "9999933333", "9999944444", "9999955555", "9999966666", "9999977777", "9999988888", "9999999999"];
			if(!phoneNo.every((ele)=>ele!=target))
			return {err:true,msg:`Phone number is not valid`}
		}
	
		function handleErp(target) {
			if(target.value == 'Others'){
				document.getElementById(`companyerp-other-formbusiness`,ValidationsClass.isNameValid).classList.remove('lil-hidden');
			}
			else {
				document.getElementById(`companyerp-other-formbusiness`,ValidationsClass.isNameValid).classList.add('lil-hidden');
			}
		};
	
		function customValidator(value){
			if(selectedIndex==null || selectedIndex==undefined){
				return {err:true,msg:`Company name is not valid`}
			}
		}	
		window.onbeforeunload = function() {
			formReload()
		}
	
		let formValidateTaxExpertObj = [
			{name:"Name",inputEleId:`username-formtaxExpert`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isNameValid,ValidationsClass.maxLimit(56)],type:"text",apiKey:"Username",initValue:""},
			{name:"Phone No",inputEleId:`phoneno-formtaxExpert`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.isPhoneNoValid],type:"text",apiKey:"PhoneNo",initValue:""},
			{name:"Email",inputEleId:`emailid-formtaxExpert`,validationArr:[ValidationsClass.isEmpty,ValidationsClass.maxLimit(56),ValidationsClass.isEmail],type:"text",apiKey:"Email",initValue:""},
			{name:"Clients",inputEleId:`clients-formtaxExpert`,type:"text",apiKey:"Clients",initValue:""},
			// {name:"Type of Product",inputEleId:`typeofPractice-formtaxExpert`,type:"text",apiKey:"TypeOfPractice",initValue:"Both - Direct & Indirect Tax"},
			{name:"Team Members",inputEleId:`teamMembers-formtaxExpert`,type:"text",apiKey:"TeamMembers",initValue:"1-5 persons"},
			{name:"Language Prefer",inputEleId:`languagePrefer-formtaxExpert`,type:"text",apiKey:"LanguagePrefer",initValue:"English"},
			{name:"Whatsapp Consent",inputEleId:`waconsent-formtaxExpert`,validationArr:[],type:"checkbox",apiKey:"waconsent",initValue:true}
		]
		
		
		let formInstanceTax = getFormInstance(formValidateTaxExpertObj)
		// console.log('form instance tax', formInstanceTax)
		let submitBtnBusiness = document.getElementById(`submit-form-business`);
		let submitBtnTaxExpert = document.getElementById(`submit-form-ca`);
		
		function getSelectedProduct(){
			let prodString = ""
			let prodObj = 	selectedForm == "Business"?selectedProductBusiness:selectedProductTaxExpert;
			Object.keys(prodObj).forEach((ele,index)=>{
				if(prodObj[ele]){
					if(!prodString)prodString=prodString.concat(`${ele}`)
					else prodString=prodString.concat(`; ${ele}`)
				}
			})
			return prodString
		}
			
		submitBtnTaxExpert.addEventListener('click',(e)=>{
			debugger;
			track_Label = e.target.value;
			track_Value = `{}redirect_url :: ${e.target.href}`;
			console.log(track_Label);
			let formTaxInstance = formInstanceTax;
			if(formTaxInstance.isFormValid()){
				submitBtnTaxExpert.classList.add('lil-btn-disabled');
				// let formdataTax = formTaxInstance.getValues();
				// console.log('tax input values', formdataTax);
				// submitFormTaxExpert();
				submitFormData();
			}
			else{
				errorObj = formTaxInstance.validateFormEle();
				trackSubmitClick('Error');
			}
			
		})

		getFormValues = (formInstance) =>{
			let formData = formInstance.getValues()
			let userData = {...formData,
				SHEET_NAME: "ContactUsBusiness",
				CompanyERP:formData.CompanyERP=="Others"?formData.companyERPOther:formData.CompanyERP,
				Designation:formData.Designation=="Other"?formData.DesignationOther:formData.Designation,
				"utm-source" :new URL(window.location.href).searchParams.get("utm_source"),
				"utm-campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
				pageUrl :window.location.href,
				Date :new Date(new Date()).toDateString(),
				Time:new Date(new Date()).toLocaleTimeString(),
				SelectedProduct:getSelectedProduct(),
				WhatsappConsent:formData.waconsent?"Yes":"No"
			}
			return userData
		}
		
		const createErrorforBusinessProductSelection = () => {
    if (!document.getElementById('intrested-product_error')) {
        let para = document.createElement("span");
        para.setAttribute('id', `intrested-product_error`);
        para.setAttribute('class', 'lil-text-red lil-text-s-10');
        const businessProduct = document.getElementById('intrestedProduct-formbusiness');
        businessProduct.parentElement.insertAdjacentElement('afterend', para);
    }
}

function businessSelectedProductValidation() {
    document.getElementById('intrestedProduct-formbusiness').value = countSelectedProd
    createErrorforBusinessProductSelection()
    const businessProductError = document.getElementById('intrested-product_error');
    if (countSelectedProd == 0 && selectedForm === "Business") {
        businessProductError.innerText = "Atleast 1 product should be selected"
        businessProductError.style.display = "inline-block"
    } else {
        businessProductError.style.display = "none"
    }
}

function isBusinessProductSelectionValid() {
    createErrorforBusinessProductSelection();
    let businessProductsvalue = document.getElementById('intrestedProduct-formbusiness')
    businessProductsvalue.value = 0
    if (countSelectedProd > 0) {
        businessProductsvalue.value = countSelectedProd;
    }
    let value = businessProductsvalue.value
    if (value === 0) {
		const errMsg = "Atleast 1 product should be selected";
        document.getElementById('intrested-product_error').innerText = errMsg;
        errorObj["Products Selected"] = errMsg;
        return false
    } else {
        return true
    }
}

		submitBtnBusiness.addEventListener('click',(e)=>{
			track_Label = e.target.value;
			track_Value = `{}redirect_url :: ${e.target.href}`;
			if(formBusinessInstance.isFormValid() && isBusinessProductSelectionValid()){
				let userData = getFormValues(formBusinessInstance)
				submitBtnBusiness.classList.add('lil-btn-disabled');
				// submitFormBusiness(userData,formBusinessInstance)
				submitFormData();
			}
			else{
				errorObj = formBusinessInstance.validateFormEle();
				isBusinessProductSelectionValid()
				trackSubmitClick('Error');
			}
		})

		function trackSubmitClick(formAction){
			var formTypeId = 'formtaxExpert';
			var buttonText = submitBtnTaxExpert.value;
			if(selectedForm == 'Business') {
				formTypeId = 'formbusiness';
				buttonText =  submitBtnBusiness.value;
			};
			var email = document.getElementById(`emailid-${formTypeId}`).value;
			const waConsent = document.getElementById(`waconsent-${formTypeId}`).value;
			const urlParams = new URLSearchParams(window.location.search);
			const ref = urlParams.get('ref') || '';
			const pageCategoryType = urlParams.get('pageCategoryType') || '';
			var sectionLocation = document.getElementById(`-wrapper`).dataset.foldLocation;
			var selectedProducts = getSelectedProduct();
			track_Label = (sectionLocation || 'hero_button') + `_${buttonText}`;
			let trackExtraValues = {FormType: selectedForm, selected_products: selectedProducts, wa_consent: waConsent, source_page: ref, source_page_category: pageCategoryType, Email_ID: email};
			if(formAction.toLowerCase().includes('error')) trackExtraValues.error_obj = errorObj;
			handleTrack({action: `Click_${formAction}`, label: track_Label, value: track_Value, valueObj: trackExtraValues})
		}

		// function submitFormBusiness(formdataBusiness,formInstanceBusiness){
		// 	trackSubmitClick('Submit');
		// 	let url =`https://script.google.com/macros/s/AKfycby_xVAK23AVr5xtZMp-J52JTzsIRFsiQU76cca3-P6BFIxIuAMoy3hoTQ7UEMDjpx5k/exec?${new URLSearchParams(formdataBusiness)}`		
		// 	fetch(url)
		// 	.then(response => response.json())
		// 		.then(data => {
		// 			submitBtnBusiness.classList.remove('lil-btn-disabled');
		// 			document.getElementById(`success-wrapper-business`)
		// 			.classList.remove("lil-hidden");
		// 			document.getElementById(`wrapper`).classList.add("lil-hidden");
		// 			if (history.pushState) {
		// 				var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?ref=thank_you';
		// 				window.history.pushState({path:newurl},'',newurl);
		// 				window.scrollTo(0, 0);
		// 				trackSubmitClick('Success');
		// 			}
		// 		})
		// 	.catch(err=>{
		// 		submitBtnBusiness.classList.remove('lil-btn-disabled');
		// 		document.querySelector(`error-msg`).innerHTML = "Request failed! Please try again.";
		// 	})  
		// }


		//common submit function for both form
		function submitFormData(){
			trackSubmitClick('Submit');
			let taxFormData = getFormValues(formInstanceTax);
			let businessFormData = getFormValues(formBusinessInstance)
			var hubspotcookie = getCookie("hubspotutk");
			var sourceOrigin = document.referrer.slice(0, 19);
			var sourceURL = sourceOrigin !== "https://cleartax.in" ? document.location.href : document.referrer;
			var leadsData = selectedForm == "Tax Experts" ? 
				{
				"leadPlatforms": {
					"lsq":{
						"add_lead":true,
						"add_activity":true,
					},
					"slack": true,
					"hubspot": {
					"cookie": hubspotcookie,
					"utm_source" :new URL(window.location.href).searchParams.get("utm_source"),
					"utm_medium" :new URL(window.location.href).searchParams.get("utm_medium"),
					"utm_term" :new URL(window.location.href).searchParams.get("utm_term"),
					"utm_campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
					"utm_adgroup" :new URL(window.location.href).searchParams.get("utm_adgroup"),
					"utm_keyword" :new URL(window.location.href).searchParams.get("utm_keyword"),  
					}
				},
				"leadData":{
					"type": "contact-sales-form",
					"typeName": selectedForm,
					"data": {
						"name": taxFormData.Username,
						"phone_number":taxFormData.PhoneNo,
						"email":taxFormData.Email,
						"clients":taxFormData.Clients,
						"team_members":taxFormData.TeamMembers,
						"language_prefer":taxFormData.LanguagePrefer,
						"product_selected":taxFormData.SelectedProduct,
						"utm_source" :new URL(window.location.href).searchParams.get("utm_source"),
						"utm_medium" :new URL(window.location.href).searchParams.get("utm_medium"),
						"utm_term" :new URL(window.location.href).searchParams.get("utm_term"),
						"utm_campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
						"utm_adgroup" :new URL(window.location.href).searchParams.get("utm_adgroup"),
						"utm_keyword" :new URL(window.location.href).searchParams.get("utm_keyword"), 
						"whatsapp_consent":taxFormData.WhatsappConsent,
						"lead_source_page":"Contact Sales Page",
						"lead_source_url":new URL(window.location.href),
						"reference_url":document.referrer,
						"note":"Lead from Contact Sales page",
						"leadType":"GST",
						"lead_creation_time":Math.floor(new Date().getTime() / 1000),
						
					},
				}
			}: {
				"leadPlatforms": {
					"google_sheet": {
						"sheet_name": "ContactUsBusiness"
					},
					"slack": true,
					"hubspot": {
					"cookie": hubspotcookie,
					"utm_source" :new URL(window.location.href).searchParams.get("utm_source"),
					"utm_medium" :new URL(window.location.href).searchParams.get("utm_medium"),
					"utm_term" :new URL(window.location.href).searchParams.get("utm_term"),
					"utm_campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
					"utm_adgroup" :new URL(window.location.href).searchParams.get("utm_adgroup"),
					"utm_keyword" :new URL(window.location.href).searchParams.get("utm_keyword"),   
					}
				},
				"leadData":{
					"type": "contact-sales-form",
					"typeName": selectedForm,
					"data": {
						"name": businessFormData.Username,
						"phone_number":businessFormData.PhoneNo,
						"email":businessFormData.Email,
						"turnover":businessFormData.Turnover,
						"company_name":businessFormData.CompanyName,
						"designation":businessFormData.Designation,
						"company_erp":businessFormData.CompanyERP,
						"utm-source" :new URL(window.location.href).searchParams.get("utm_source"),
						"utm-campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
						"product_selected":businessFormData.SelectedProduct,
						"whatsapp_consent":businessFormData.WhatsappConsent,
						"lead_source_url" :new URL(window.location.href),
						"utm_source" :new URL(window.location.href).searchParams.get("utm_source"),
						"utm_medium" :new URL(window.location.href).searchParams.get("utm_medium"),
						"utm_term" :new URL(window.location.href).searchParams.get("utm_term"),
						"utm_campaign" :new URL(window.location.href).searchParams.get("utm_campaign"),
						"utm_adgroup" :new URL(window.location.href).searchParams.get("utm_adgroup"),
						"utm_keyword" :new URL(window.location.href).searchParams.get("utm_keyword"), 
					}
				}
			}
			
			addCommonLeads(leadsData, selectedForm == "Tax Experts" ?taxFormData.Email:businessFormData.Email, function() {
				trackSubmitClick('Success');
				//to track before the url is changed
				window.setTimeout (() => { 
					if (history.pushState) {
						var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?ref=thank_you';
						window.history.pushState({path:newurl},'',newurl);
						window.scrollTo(0, 0);
					}
				}, 500);
				if(selectedForm=='Business'){
					submitBtnBusiness.classList.remove('lil-btn-disabled');
					document.getElementById(`success-wrapper-business`)
					.classList.remove("lil-hidden");
					document.getElementById(`-wrapper`).classList.add("lil-hidden");
					
				}
				else{
					var selectedallproducts = getSelectedProduct();
					// createActivityContactSales(selectedallproducts, 602, sourceURL, taxFormData.Email, function() {
						submitBtnTaxExpert.classList.remove('lil-btn-disabled');
						document.getElementById(`success-wrapper-tax-expert`)
						.classList.remove("lil-hidden");
						document.getElementById(`-wrapper`).classList.add("lil-hidden");
					// });
				}
			});

			if(window.lintrk){
				window.lintrk('track', { conversion_id: 6433180 });
			}
		}
		








		// function submitFormTaxExpert(formDataTax){
		// 	trackSubmitClick('Submit');
		// 	let formValues = getFormValues(formInstanceTax)
		// 	var sourceOrigin = document.referrer.slice(0, 19);
		// 	var sourceURL = sourceOrigin !== "https://cleartax.in" ? document.location.href : document.referrer;
		// 	var leadsData = {
		// 		leadType: "GST",
		// 		leadName: formValues.Username,
		// 		leadEmail: formValues.Email,
		// 		leadPhoneNo: formValues.PhoneNo,
		// 		note: "Lead from GST Profile Creation page",
		// 		customAttributesMap: {
		// 			marketingSource: formValues.utm_source,
		// 			// userTypeForm: category.value,
		// 			Whatsapp_Consent: formValues.waconsent ? "Yes" : "No",
		// 		},
		// 		leadSourcePage: "ClearTax GST Software",
		// 		leadSourceUrl: new URL(window.location.href),
		// 		referenceURL:  new URL(window.location.href),
		// 		leadCreationTime: Math.floor(new Date().getTime() / 1000),
		// 	};

		// 	submitBtnBusiness.classList.remove('lil-btn-disabled');
			
		// 	addLeads(leadsData, formValues.Email, function() {
					
		// 			var selectedallproducts = getSelectedProduct();
		// 			console.log('selected', selectedallproducts)
		// 			createActivityContactSales(selectedallproducts, 602, sourceURL, formValues.Email, function() {
		// 			// search(formValues.Email);
		// 			submitBtnTaxExpert.classList.remove('lil-btn-disabled');
		// 			document.getElementById(`success-wrapper-tax-expert`)
		// 				.classList.remove("lil-hidden");
		// 				document.getElementById(`wrapper`).classList.add("lil-hidden");
		// 				if (history.pushState) {
		// 					var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?ref=thank_you';
		// 					window.history.pushState({path:newurl},'',newurl);
		// 					window.scrollTo(0, 0);
		// 					trackSubmitClick('Success');
		// 				}
		// 			}, function () {
						
		// 			});
		// 	});
		// }
		

		function formReload(){
			formBusinessInstance.reload();
			formInstanceTax.reload();
			if(selectedForm !== "Business"){
				onBusinessTypeChange();
			}
			
			for(let i=0;i<intrestedProducts.length;i++){
				let ele = intrestedProducts[i];
				ele.classList.replace('lil-bg-blue-150','lil-bg-grey-250');
			}
			countSelectedProd=0
			selectedProductsInForm = {};
			selectedProductTaxExpert={};
			selectedProductBusiness={}
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
	
<style>
	.zIndex1{
		z-index: 1;
	}
	.results-compaines p{
		overflow: hidden;
    	text-overflow: ellipsis;
		white-space: nowrap;
	}
	.results-compaines p:hover{
		overflow: visible;
		white-space: normal;
	}
	.align-center{
		align-items: center;
	}
	
	@media only screen and (max-width: 998px) {
		.mobile-left-align{
	 	  align-items:baseline;
		}
		.right-border-0{
			border-right: 0px;
		}
  }

</style>
<script>
	var dates = '';
$(function () {
    var minDateSet = () => {
    	var today = new Date();
    	var myToday = new Date().setHours( new Date().getHours() + 2 );
    	if(today.getHours()>=16){
     	   myToday = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1, 0, 0, 0);   
    	}
    	return myToday;
    }
    var invalidObjArr = [
    	{
    	    start: '00:00',
    	    end: '10:59',
    	    recurring: { repeat: 'weekly', weekDays: 'MO,TU,WE,TH,FR,SA' },
    	    title: 'Breakfast Break',
    	},
    	{
    	    start: '18:05',
    	    end: '23:59',
    	    recurring: { repeat: 'weekly', weekDays: 'MO,TU,WE,TH,FR,SA' },
    	    title: 'Dinner Break',
    	},
    	{
    	    recurring: {
    	        repeat: 'weekly',
    	        weekDays: 'SU',
    	    }
    	}
    ];

    $('#rad').nottypot().datepicker({
        controls: ['datetime'],
        dateFormat: 'DD-MM-YYYY',
        dateWheels: '|DDD D MMM|',
        headerText: 'Slot: {value}',
        stepMinute: 5,
		theme: 'ios',
		themeVariant: 'light',
        min: minDateSet(),
        invalid: invalidObjArr,
		onChange: (value)=>{
			dates = value.value;
		}
    });
    // $('#rad').on('change', function() {
    //     console.log($('#rad').nottypot('getVal'));
    // })
        
    });
</script>	

<script>
function submitAppointment() {
  	function convertSingleNumberToDouble(n){
  		return n > 9 ? "" + n: "0" + n;
	}
	var dateTimeThankyou = document.getElementById('dateTimeThankyou');
	var dateTimeForm = document.getElementById('dateTimeForm');
	dateTimeThankyou.classList.remove('lil-hidden');
	dateTimeForm.classList.add('lil-hidden');
	var emailDetails = document.getElementById('emailid-formtaxExpert');
	var phoneNumberDetails = document.getElementById('phoneno-formtaxExpert');
	var nameDetails = document.getElementById('username-formtaxExpert');
	emailDetailsValue = emailDetails.value;
	phoneNumberDetailsValue = phoneNumberDetails.value;
	nameDetailsValue = nameDetails.value;
	var dueDateValue= dates;
	var dueDateTimestamp = new Date(dueDateValue);
	var convertedDueDateTimestamp = dueDateTimestamp.getFullYear() + "-" + convertSingleNumberToDouble(dueDateTimestamp.getMonth()+1) + "-" + convertSingleNumberToDouble(dueDateTimestamp.getDate()) + " " + convertSingleNumberToDouble(dueDateTimestamp.getHours()) + ":" + convertSingleNumberToDouble(dueDateTimestamp.getMinutes()) + ":" + dueDateTimestamp.getSeconds() + "0";
	var dateTimeDetails = {
		"leadPlatforms": {
			"lsq": {
				"add_appointment": true
			}
		},
		"leadData": {
			"type": "contact-sales-form",
			"typeName": "Tax Experts",
			"data": {
				"DueDate": convertedDueDateTimestamp,
				"email": emailDetailsValue,
				"phone_number": phoneNumberDetailsValue,
				"name": nameDetailsValue
			}
		}
	}
	createAppointment(dateTimeDetails);
}
</script>
<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MKPDH9"></script>
<script src="https://assets1.cleartax-cdn.com/cleartax/images/1632576618_nottypot.jquery.min.js" defer></script>
  <!-- <script>
	//   for gst-video
		  let gstvideoimg = new Image()
		  gstvideoimg.src = document.getElementById("gst-video").getAttribute('poster');
		  gstvideoimg.onload = function(){
			  document.getElementById("gst-video").style.backgroundColor = "white"
		  }
		  let gstlastEvent =null
		  let gstvideo = setUpVideo('gst-video',{
			  isPosterPresent:true,
			  isMobileOverlay:true,
			  onUpdateCb:(currentTime,{videoInstance})=>{
				  let gstpercent  = (currentTime/videoInstance.getDuration()).toFixed(2);
				  let gstsystem = checkMobile()?"mobile":"desktop";
				  if(gstpercent==0 && gstlastEvent!=0)
					  handleTrack({action: 'Click_Play', label: 'hero_video', value: `{}progress ::  ${gstpercent}`});
				  if((gstpercent == .25 && gstlastEvent!=.25) || (gstpercent==.50&& gstlastEvent!=.50) || (gstpercent==.75&& gstlastEvent!=.75))
					  handleTrack({action: 'Click_PlayProgress', label: 'hero_video', value: `{}progress ::  ${gstpercent}`});

				  gstlastEvent = gstpercent
			  },
			  onScreenSizeChangeCb:(screenSize,player)=>{
				  if(screenSize=="fullscreen")
					  handleTrack({action: 'Click_zoomIn', label: 'hero_video'});
			  }
		  })

		  // for e-invoice video
		  let einvoicevideoimg = new Image()
		  einvoicevideoimg.src = document.getElementById("e-invoice-video").getAttribute('poster');
		  einvoicevideoimg.onload = function(){
			  document.getElementById("e-invoice-video").style.backgroundColor = "white"
		  }
		  let einvoicelastEvent =null
		  let einvoicevideo = setUpVideo('e-invoice-video',{
			  isPosterPresent:true,
			  isMobileOverlay:true,
			  onUpdateCb:(currentTime,{videoInstance})=>{
				  let einvoicepercent  = (currentTime/videoInstance.getDuration()).toFixed(2);
				  let einvoicesystem = checkMobile()?"mobile":"desktop";
				  if(einvoicepercent==0 && einvoicelastEvent!=0)
					  handleTrack({action: 'Click_Play', label: 'hero_video', value: `{}progress ::  ${einvoicepercent}`});
				  if((einvoicepercent == .25 && einvoicelastEvent!=.25) || (einvoicepercent==.50&& einvoicelastEvent!=.50) || (einvoicepercent==.75&& einvoicelastEvent!=.75))
					  handleTrack({action: 'Click_PlayProgress', label: 'hero_video', value: `{}progress ::  ${einvoicepercent}`});
  
				  einvoicelastEvent = einvoicepercent
			  },
			  onScreenSizeChangeCb:(screenSize,player)=>{
				  if(screenSize=="fullscreen")
					  handleTrack({action: 'Click_zoomIn', label: 'hero_video'});
			  }
		  })

		  // for invoice-discounting video
		  let invoiceDsicountvideoimg = new Image()
		  invoiceDsicountvideoimg.src = document.getElementById("invoice-discounting-video").getAttribute('poster');
		  invoiceDsicountvideoimg.onload = function(){
			  document.getElementById("invoice-discounting-video").style.backgroundColor = "white"
		  }
		  let invoiceDsicountlastEvent =null
		  let invoiceDsicountvideo = setUpVideo('invoice-discounting-video',{
			  isPosterPresent:true,
			  isMobileOverlay:true,
			  onUpdateCb:(currentTime,{videoInstance})=>{
				  let invoiceDsicountpercent  = (currentTime/videoInstance.getDuration()).toFixed(2);
				  let invoiceDsicountsystem = checkMobile()?"mobile":"desktop";
				  if(invoiceDsicountpercent==0 && invoiceDsicountlastEvent!=0)
					  handleTrack({action: 'Click_Play', label: 'hero_video', value: `{}progress ::  ${invoiceDsicountpercent}`});
				  if((invoiceDsicountpercent == .25 && invoiceDsicountlastEvent!=.25) || (invoiceDsicountpercent==.50&& invoiceDsicountlastEvent!=.50) || (invoiceDsicountpercent==.75&& invoiceDsicountlastEvent!=.75))
					  handleTrack({action: 'Click_PlayProgress', label: 'hero_video', value: `{}progress ::  ${invoiceDsicountpercent}`});
  
				  invoiceDsicountlastEvent = invoiceDsicountpercent
			  },
			  onScreenSizeChangeCb:(screenSize,player)=>{
				  if(screenSize=="fullscreen")
					  handleTrack({action: 'Click_zoomIn', label: 'hero_video'});
			  }
		  });
  
  </script> -->

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
        gtag('set', 'content_group', 'v2_contact-sales');
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
	var categoryName = 'contact-sales';
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
			"@id": "https://cleartax.in/contact-sales"
			
		},
		"headline": "Contact Sales - Cleartax",
		"description": "",
		"image": {
			"@type": "ImageObject",
			
				"width": "1200",
				"height": "628",
			
			"url": "https://assets1.cleartax-cdn.com/cleartax/images/1599836130_frame14.jpg"
		},
		"articleSection": "v2",
		"keywords": "Contact Sales",
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
           if('/s/contact-sales/' == "/landing-pages/search/"){
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