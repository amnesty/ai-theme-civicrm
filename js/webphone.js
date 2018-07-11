/**
 * Webphone script
 * @author Ipglobal
 */

/**
 * Check if navigator is IE 9 or below
 * @returns {boolean}
 */
var isIE9OrBelow = function() {
   return /MSIE\s/.test(navigator.userAgent) && parseFloat(navigator.appVersion.split("MSIE")[1]) < 9;
}
if (isIE9OrBelow()) {
    //alert ("Your browser is IE 8 or below, please update it.");
}

// GLOBAL & CONFIG vars

// IE not working:
//var thisScript = document.currentScript;
var thisScriptId        = 'libWebphone';
var wphLocateCode       = 'es-ES';
var defaultLocateCode   = 'es';
var timerWebphoneLoaded = 0;
var timesLoopValidation = 0;
var overideWebphone     = false;
var webphoneIsLoadded   = false;
var limitWaitWphSec     = 1;
var widgetByUrl         = 0;
var intervalIdWph          = null
var webphone_objects = [];
//var wph                 =  null;

//var environment = document.getElementById(thisScriptId).getAttribute("env");
var allowedEnvironmet = ['amnesty', 'amnesty'];
var defaultEnvironmet = 'amnesty';
var wphServices       = 'https://webservice.webphone.net/wphcalls/leads/getobjconfiginfo/';
var wphCdnImgServices = '//app.webphone.net/img/';

//var clientFolder = (environment && allowedEnvironmet.indexOf(environment) !== -1) ? environment : defaultEnvironmet;

var clientFolder ='amnesty';

var developmentEnv = (clientFolder == 'amnesty') ? true : false;
//var idWidgetDev = 2467;

var urlHostname = 'llamamegratis.es';
var resourcesDomainSrc = '//'+urlHostname+'/'+clientFolder;
var wphurlBase = resourcesDomainSrc+'/webphone.html';

var allowedLocateSite = ['ES', 'GB', 'CA'];
//var wphJquery = jQuery.noConflict();
var IsOnPlanificadorcall = false;
var webphoneConfigTraffic = null;


function getWidgetBySource(){

    if(getSiteLangCode()=='es'){
        webphoneConfigTraffic = webphoneConfigTrafficES;
    }else{
        webphoneConfigTraffic = webphoneConfigTrafficEN;
    }

    if(typeof webphoneConfigTraffic[getCampaignSource()] !='undefined'){
        var trafficSource = getCampaignSource();
        //jQuery('.contactPhoneAll').text(webphoneConfigTraffic[trafficSource].telTxt);
        //jQuery(".contactPhoneAll").attr("href", "tel:" +webphoneConfigTraffic[trafficSource].telToCall);
        widgetByUrl = webphoneConfigTraffic[trafficSource].widget;
    }else{
        //jQuery('.contactPhoneAll').text(webphoneConfigTraffic['default'].telTxt);
        //jQuery(".contactPhoneAll").attr("href", "tel:" +webphoneConfigTraffic['default'].telToCall);
        widgetByUrl = webphoneConfigTraffic['default'].widget;
    }
    return widgetByUrl;
}

function getDDIBySource(){

    if(getSiteLangCode()=='es'){
        webphoneConfigTraffic = webphoneConfigTrafficES;
    }else{
        webphoneConfigTraffic = webphoneConfigTrafficEN;
    }

    ddidata={};

    if(typeof webphoneConfigTraffic[getCampaignSource()] !='undefined'){
        var trafficSource = getCampaignSource();
        //jQuery('.contactPhoneAll').text(webphoneConfigTraffic[trafficSource].telTxt);
        //jQuery(".contactPhoneAll").attr("href", "tel:" +webphoneConfigTraffic[trafficSource].telToCall);
        ddidata = {'telTxt': webphoneConfigTraffic[trafficSource].telTxt,'telToCall': webphoneConfigTraffic[trafficSource].telToCall};
    }else{
        //jQuery('.contactPhoneAll').text(webphoneConfigTraffic['default'].telTxt);
        //jQuery(".contactPhoneAll").attr("href", "tel:" +webphoneConfigTraffic['default'].telToCall);
        ddidata = {'telTxt': webphoneConfigTraffic['default'].telTxt,'telToCall': webphoneConfigTraffic['default'].telToCall};
    }
    return ddidata;
}

function initWebphoneTracking(){

    getCampaignSource();

    ddidata = getDDIBySource();

    //jQuery('p:contains("+34 912 913 756")').html(jQuery('p:contains("+34 912 913 756")').html().replace('+34 912 913 756','+34 910 607 549'))

    jQuery('p:contains("+34 912 913 756")').each(function(i, obj) {
       jQuery(obj).html(jQuery(obj).html().replace('+34 912 913 756',ddidata.telTxt));
    });

    jQuery('.contact-phone-header').attr('href','tel:'+ddidata.telToCall);
    jQuery('.contact-phone-header').html('<span class="fa fa-phone"></span>'+ddidata.telTxt);

}

//

function setWebphoneCookie(cname, cvalue, exdays) {
    /*if(isPrivateBrowsingSupportedStorage()){
        sessionStorage[cname]= cvalue;
    }*/
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getWebphoneCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    /*if(isPrivateBrowsingSupportedStorage() && sessionStorage[cname]!=''){
        return sessionStorage[cname];
    }*/
    return "";
}


function getCampaignSource(){
    campaingValue = getWebphoneCookie('webphoneNavigation');
    if(campaingValue =='' || typeof campaingValue =='undefined'){
        if(document.URL.indexOf("gclid") >= 0 || document.referrer.indexOf("gclid")>= 0){

                        setWebphoneCookie('webphoneNavigation','Paid Search',1);

        }else if(document.URL.indexOf("utm_medium=cpc") >= 0 || document.referrer.indexOf("utm_medium=cpc") >= 0){

                if(document.URL.indexOf("Google") >= 0 ||
                    document.referrer.indexOf("Google")>= 0 ||
                        document.URL.indexOf("google") >= 0 ||
                            document.referrer.indexOf("google")>= 0){

                        setWebphoneCookie('webphoneNavigation','Paid Search',1);

                }else if(document.URL.indexOf("Facebook") >= 0 ||
                    document.referrer.indexOf("Facebook")>= 0 ||
                        document.URL.indexOf("facebook") >= 0 ||
                            document.referrer.indexOf("facebook")>= 0){

                        setWebphoneCookie('webphoneNavigation','Paid Social',1);
                }else{
                        setWebphoneCookie('webphoneNavigation','Paid Search',1);
                }

        }else if(window.location.href.indexOf('Facebook')>=0 ||  document.referrer.indexOf('Facebook')>=0 ||
             window.location.href.indexOf('facebook')>=0 ||  document.referrer.indexOf('facebook')>=0 ||
                window.location.href.indexOf('Twitter')>=0 ||  document.referrer.indexOf('Twitter')>=0 ||
                window.location.href.indexOf('twitter')>=0 ||  document.referrer.indexOf('twitter')>=0 ||
                window.location.href.indexOf('social')>=0 ||  document.referrer.indexOf('social')>=0 ||
                window.location.href.indexOf('Instagram')>=0 ||  document.referrer.indexOf('Instagram')>=0 ){

                        setWebphoneCookie('webphoneNavigation','Social',1);

        }else if(document.URL.indexOf("utm_source=bing") >= 0 || document.referrer.indexOf("utm_source=bing") >= 0){

            setWebphoneCookie('webphoneNavigation','Paid Search',1);

        }else if(document.referrer.indexOf("google.")>= 0){

            setWebphoneCookie('webphoneNavigation','Organic Search',1);

        }else if(document.referrer.indexOf("bing.") >= 0){

            setWebphoneCookie('webphoneNavigation','Organic Search',1);

        }else if(document.referrer.indexOf("yahoo.")>= 0){

            setWebphoneCookie('webphoneNavigation','Organic Search',1);

        }else if(document.referrer.indexOf("duckduckgo.")   >= 0    ||
                document.referrer.indexOf("yippy.")         >= 0    ||
                document.referrer.indexOf("wolframalpha.")  >= 0    ||
                document.referrer.indexOf("ask.")           >= 0    ||
                document.referrer.indexOf("yandex.")        >= 0    ||
                document.referrer.indexOf("aol.")           >= 0    ||
                document.referrer.indexOf("live.")          >= 0    ||
                document.referrer.indexOf("msn.")           >= 0    ||
                document.referrer.indexOf("snap.")          >= 0    ||
                document.referrer.indexOf("boing.")         >= 0    ||
                document.referrer.indexOf("altavista.")     >= 0    ||
                document.referrer.indexOf("baidu.")         >= 0 ){

            setWebphoneCookie('webphoneNavigation','Organic Search',1);


        }else if(document.URL.indexOf("utm_medium=email") >= 0 || document.referrer.indexOf("utm_medium=email") >= 0 ){

            setWebphoneCookie('webphoneNavigation','Email',1);

        }else if((document.referrer === '' || document.referrer !=='') &&
             window.location.search!==''){

            setWebphoneCookie('webphoneNavigation','Other',1);

        }else if(document.referrer ===''){

            setWebphoneCookie('webphoneNavigation','Direct',1);

        }else if(document.referrer !==''){

            setWebphoneCookie('webphoneNavigation','Referral',1);

        }else{

            setWebphoneCookie('webphoneNavigation','Other',1);

        }

        return getWebphoneCookie('webphoneNavigation');

    }

    //console.log(campaingValue);

    return campaingValue;
}





 function ajaxWphRequest(url, method, callback, params) {
     var obj;
     try {
      obj = new XMLHttpRequest();
     } catch(e){
       try {
         obj = new ActiveXObject("Msxml2.XMLHTTP");
       } catch(e) {
         try {
           obj = new ActiveXObject("Microsoft.XMLHTTP");
         } catch(e) {
           alert("Your browser does not support Ajax.");
           return false;
         }
       }
     }
     obj.onreadystatechange = function() {
      if(obj.readyState == 4) {
         callback(obj);
      }
     }
     obj.open(method, url, true);
     obj.send(params);
     return obj;
 }

function isOnallowedLocateSite(lang){
    for (var key in allowedLocateSite) {
        if(allowedLocateSite[key] == lang.toUpperCase()) return true;
    }
    return false;
}


function isPrivateBrowsingSupportedStorage() {
    if (window.sessionStorage) {
        var test = "__localstoragetest__";

        try {
            window.sessionStorage.setItem(test, test);
            window.sessionStorage.removeItem(test);
        } catch(ex) {
            return false;
        }
        return true;
    }
    return false;
}

function setSessionLocateWebphone(lang){
    if (isPrivateBrowsingSupportedStorage() && typeof sessionStorage === 'object') {
        sessionStorage._wphLocateCode = lang;
    }
}

function getSessionLocateWebphone(){
    if (isPrivateBrowsingSupportedStorage() && typeof sessionStorage === 'object' && typeof sessionStorage._wphLocateCode !== 'undefined' && typeof sessionStorage._wphLocateCode !== ''){
        //return sessionStorage._wphLocateCode;
        //return sessionStorage._wphLocateCode;
        if(typeof sessionStorage._wphLocateCode.split('-')[1]!='undefined'){
            return getSiteLangCode()+'-'+sessionStorage._wphLocateCode.split('-')[1];
        }else{
            return sessionStorage._wphLocateCode;
        }
    }else{
        return wphLocateCode;
    }
}

function getSiteLangCode(){
    if(document.getElementsByTagName('html')[0].getAttribute('lang')!=null){
        return document.getElementsByTagName('html')[0].getAttribute('lang').toLowerCase();
    }else{
        //return defaultLocateCode;
        //***** Default - Get id Lang on dataLayer *****/
        return 'es';
    }
}


function getMyWphLangId(idfield){
    try {
        var myLangId ='';
        if (typeof dataLayer !='undefined') {
            for (var i=0; i<dataLayer.length; i++) {
                  if(typeof dataLayer[i][idfield] !='undefined'){
                    myLangId=dataLayer[i][idfield];
                    break;
                  }
            }
            //return myLangId;
        }
        switch(myLangId) {
            case '1':
                myLangId = 'es';
                break;
            case '2':
                myLangId = 'en';
                break;
            case '3':
                myLangId = 'de';
                break;
            case '4':
                myLangId = 'fr';
                break;
            case '7':
                myLangId = 'it';
                break;
            case '8':
                myLangId = 'pt';
                break;
            case '9':
                myLangId = 'ru';
                break;
            default:
                myLangId = getLangSimpleNavigator();
        }

        return myLangId;

    } catch(ex) {
        return getLangSimpleNavigator();
    }
}


function getAjaxIp(){
    try{
        var ajax = ajaxWphRequest('//freegeoip.net/json/', 'get',  function(obj) {
            if(typeof obj.responseText !='undefined'){
                if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
                    try{
                        response = JSON.parse(obj.responseText);
                        if(typeof response.country_code !='undefined' && response.country_code!=''){
                            //if(isOnallowedLocateSite(response.country_code)){
                            if(isOnallowedLocateSite(getSiteLangCode())){
                                //wphLocateCode = response.country_code.toLowerCase()+'-'+response.country_code;
                                wphLocateCode = getSiteLangCode()+'-'+response.country_code;
                            }else{
                                //wphLocateCode = defaultLocateCode+'-'+response.country_code;
                                wphLocateCode = getSiteLangCode()+'-'+response.country_code;
                            }
                        }
                    }catch(exception){
                        wphLocateCode = getLangNavigator();
                    }
                }else{
                    wphLocateCode = getLangNavigator();
                }
            }
        })
    }
    catch(exception){
        return getLangNavigator();
    }
    return getLangNavigator();
}

function getLocateByUseData(){
    if(isPrivateBrowsingSupportedStorage() && typeof sessionStorage === 'object' && (typeof sessionStorage._wphLocateCode === 'undefined' || sessionStorage._wphLocateCode === '')){
        try{
            var ajax = ajaxWphRequest('//freegeoip.net/json/', 'get',  function(obj) {
                if(typeof obj.responseText !='undefined'){
                    if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
                        try{
                            response = JSON.parse(obj.responseText);
                            //console.log(response);
                            if(typeof response.country_code !='undefined' && response.country_code!=''){
                                ////2017-11-14 Change html lang   if(isOnallowedLocateSite(response.country_code)){
                                    if(isOnallowedLocateSite(getSiteLangCode())){
                                    //console.log(response.country_code.toLowerCase()+'-'+response.country_code);
                                    //2017-11-14 Change html lang   wphLocateCode = response.country_code.toLowerCase()+'-'+response.country_code;
                                    wphLocateCode = getSiteLangCode()+'-'+response.country_code;
                                    setSessionLocateWebphone(wphLocateCode);
                                }else{
                                    //wphLocateCode = defaultLocateCode+'-'+response.country_code;
                                    wphLocateCode = getSiteLangCode()+'-'+response.country_code;
                                    setSessionLocateWebphone(wphLocateCode);
                                }
                            }
                        }catch(exception){
                            wphLocateCode = getLangNavigator();
                            setSessionLocateWebphone(wphLocateCode);
                        }
                    }else{
                        wphLocateCode = getLangNavigator();
                        setSessionLocateWebphone(wphLocateCode);
                    }
                }
            })
        }
        catch(exception){
            wphLocateCode = getLangNavigator();
            setSessionLocateWebphone(wphLocateCode);
        }
    }else if(isPrivateBrowsingSupportedStorage() && typeof sessionStorage === 'object' && typeof sessionStorage._wphLocateCode !== 'undefined'){
        wphLocateCode = getSessionLocateWebphone();
    }else{
        wphLocateCode = getAjaxIp();
    }

}



function getLangSimpleNavigator(){
    changeLang = false;
    var wphNavigatorlang = window.navigator.languages ? window.navigator.languages[0] : null;
    wphNavigatorlang = wphNavigatorlang || window.navigator.language || window.navigator.browserLanguage || $
    if (wphNavigatorlang.indexOf('-') !== -1) wphNavigatorlang = wphNavigatorlang.split('-')[0];
    if (wphNavigatorlang.indexOf('_') !== -1) wphNavigatorlang = wphNavigatorlang.split('_')[0];

    if(typeof wphNavigatorlang !='undefined' && wphNavigatorlang != null){
        wphNavigatorlang = wphNavigatorlang.toLowerCase();
        if(!isOnallowedLocateSite(wphNavigatorlang.toUpperCase())){
           wphNavigatorlang = 'es';
        }
        //Transform En To GB
    }else{
        wphNavigatorlang = 'es';
    }

    return wphNavigatorlang;

}

function getLangNavigator(){
    changeLang = false;
    var wphNavigatorlang = window.navigator.languages ? window.navigator.languages[0] : null;
    wphNavigatorlang = wphNavigatorlang || window.navigator.language || window.navigator.browserLanguage || $
    if (wphNavigatorlang.indexOf('-') !== -1) wphNavigatorlang = wphNavigatorlang.split('-')[0];
    if (wphNavigatorlang.indexOf('_') !== -1) wphNavigatorlang = wphNavigatorlang.split('_')[0];

    if(typeof wphNavigatorlang !='undefined' && wphNavigatorlang != null){
        wphNavigatorlang = wphNavigatorlang.toLowerCase();
        if(!isOnallowedLocateSite(wphNavigatorlang.toUpperCase())){
           wphNavigatorlang = 'es';
        }
        //Transform En To GB
    }else{
        wphNavigatorlang = 'es';
    }

    if(wphNavigatorlang =='en'){
        return 'en-GB';
    }
    //console.log('getLangNavigator');
    //2017-11-14 Change html lang  return wphNavigatorlang.toLowerCase()+'-'+wphNavigatorlang.toUpperCase();
    return getSiteLangCode()+'-'+wphNavigatorlang.toUpperCase();
}

/**
 * Load scripts and css necessary
 */
function initScripts() {

    if (typeof jQuery === 'undefined') {
        var jqueryScript = document.createElement("script");
        jqueryScript.type = "text/javascript";
        //jqueryScript.src = "//code.jquery.com/jquery-3.2.1.min.js";
        jqueryScript.src = resourcesDomainSrc+"/js/jquery-3.2.1.min.js";
        document.getElementsByTagName('head')[0].appendChild(jqueryScript);
    }

    var intervaljQueryLoadId = setInterval(function(){
        if (typeof jQuery !== 'undefined') {
            clearInterval(intervaljQueryLoadId);

            if (typeof webphonebox === 'undefined') {
                //$("head").append('<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/webphonebox/3.0.47/jquery.webphonebox.min.css" />');
                var webphoneboxCss = document.createElement("link");
                webphoneboxCss.type = "text/css";
                webphoneboxCss.rel = "stylesheet";
                webphoneboxCss.href = resourcesDomainSrc + "/css/jquery.webphonebox.min.css";
                document.getElementsByTagName('head')[0].appendChild(webphoneboxCss);

                var webphoneboxScript = document.createElement("script");
                webphoneboxScript.type = "text/javascript";
                //webphoneboxScript.src = "//cdnjs.cloudflare.com/ajax/libs/webphonebox/3.0.47/jquery.webphonebox.min.js";
                webphoneboxScript.src = resourcesDomainSrc + "/js/jquery.webphonebox.min.js";

                document.getElementsByTagName('head')[0].appendChild(webphoneboxScript);

                //checkIfWebphoneV2Exist();
               // console.log("************  initScripts");
            }
        }
    }, 50);
}

function forceLoadLib(){
    var webphoneboxCss = document.createElement("link");
    webphoneboxCss.type = "text/css";
    webphoneboxCss.rel = "stylesheet";
    webphoneboxCss.href = resourcesDomainSrc + "/css/jquery.webphonebox.min.css";
    document.getElementsByTagName('head')[0].appendChild(webphoneboxCss);

    var webphoneboxScript = document.createElement("script");
    webphoneboxScript.type = "text/javascript";
    //webphoneboxScript.src = "//cdnjs.cloudflare.com/ajax/libs/webphonebox/3.0.47/jquery.webphonebox.min.js";
    webphoneboxScript.src = resourcesDomainSrc + "/js/jquery.webphonebox.min.js";

    document.getElementsByTagName('head')[0].appendChild(webphoneboxScript);
   // console.info(">> webphoneboxScript addedd!!");
    isWebphoneloadded = true;
}


function isWebphoneLoaded(){
    if(existWebphoneScriptOnPage() && typeof wph !='undefined' && typeof wph.objects[0] !='undefined' && typeof wph.objects[0].id !='undefined' && wph.isLibLoaded){

        clearInterval(timerWebphoneLoaded);


        Webphone.prototype.callFromObject = function(id_Obj, cliPhone){
            openWebphone(id_Obj);
        };

        Webphone.prototype.showForm = function(id_Obj){
            openWebphone(id_Obj);
        }

        overideWebphone = true;

        //console.log("inside isWebphoneLoaded  " + timesLoopValidation);



        //$("script[src*='//app.webphone.net/script/script.js']").remove();

        $("object").each(function(i){
            if(this.id && (this.type.indexOf("webphone") !== -1)){
                webphone_objects.push(this.id);
            }
        });

    }

    if(!existWebphoneScriptOnPage() && timesLoopValidation>limitWaitWphSec && !overideWebphone){

        clearInterval(timerWebphoneLoaded);

        window.Webphone = function(){};
        window.wph = new Webphone();
        Webphone.prototype.callFromObject = function(id_Obj, cliPhone){
            openWebphone(id_Obj);
        };

        Webphone.prototype.showForm = function(id_Obj){
            openWebphone(id_Obj);
        }

        $("object").each(function(i){
            if(this.id && (this.type.indexOf("webphone") !== -1)){
                webphone_objects.push(this.id);
            }
        });

        //console.log("inside No overide No exist Webphone  " + timesLoopValidation);
    }

    timesLoopValidation ++;

    //console.log("timesLoopValidation " + timesLoopValidation);
}

function existWebphoneScriptOnPage(){
    return $("script[src*='//app.webphone.net/script/script.js']").length>0;
}



/**
 *
 * Check if showDivIfIsParentHidden
 *
**/

function checkIfWebphoneV2Exist(){
    timerWebphoneLoaded = setInterval(function(){ isWebphoneLoaded(); }, 250);
}

/**
 *
 * Check if showDivIfIsParentHidden
 *
**/

function showDivIfIsParentHidden(){
    /*if($("script[src*='//llamamegratis.es/iberostar/js/webphone.js']").parents('div').length == 1){
        if(jQuery("script[src*='//llamamegratis.es/iberostar/js/webphone.js']").parents('div').css("display") == "none"){
            jQuery("script[src*='//llamamegratis.es/iberostar/js/webphone.js']").parents('div').show();
        }
    } */
}

/**
 * Check if necessary scripts are loaed
 * @returns {boolean}
 */
function isLoadScripts(){
    if ((typeof jQuery !== 'undefined') &&
        (typeof jQuery.webphonebox !== 'undefined')) {
        //console.info(">> Webphone is ready to Rock!!");
        webphoneIsLoadded = true;
        return true;
    }
    return false;
}


/**
 * Open Webphone popup
 */
function openWebphone(widget) {
    try{
        jQuery.webphonebox.close();

        jQuery.webphonebox.open({
            /*openSpeed: 5000,
             openEffect: 'elastic',
             closeEffect:"elastic",
             openMethod:"zoomIn",*/
            src: getWebphoneUrl(widget),
            type: 'iframe',
            iframe: {
                scrolling: 'no',
                preload: true,
                css: {
                    width: '1024px'
                }
            },
            width: '1024px',
            opts: {
                speed: 50,
                margin: [0, 0],
                gutter: 0,
                infobar: false,
                buttons: false,
                slideShow: false,
                fullScreen: false,
                //thumbs: false,
                closeBtn: false,
                closeClickOutside: true,
                smallBtn: 'inline'
            }
        });
        dataLayer.push({
            'event': 'webphone.onclick'
        });
    }
    catch(exception){
        //TODO Check exception;
        forceLoadLib();
        //setTimeout(function(){ openWebphone(widget); }, 2000);
    }
    // Adjust iframe height according to the contents
    //parent.$.webphonebox.getInstance().update();
    // Close current webphonebox instance
    //parent.$.webphonebox.getInstance().close();
}

/*
var intervalId = setInterval(function(){
    if (isLoadScripts()) {
        clearInterval(intervalId);
        getLocateByUseData();
        (function ($) {
            $(document).ready(function () {
                //openWebphone(1183);

            });

        })(jQuery);
    }
}, 100);
*/


/**
 * Get param field form url this script
 * @param field
 * @returns {string}
 */
function getParamScript(field){

    var parameters = document.getElementById(thisScriptId).src.split('?')[1];
    //var parameters = document.getElementById(thisScript.id).src.split('?')[1];

    parameters = parameters.split("&");
    for (var i = 0; i < parameters.length; i++) {
      var temp = parameters[i].split("=");
      if(field == temp[0]){
          return decodeURI(temp[1]);
      }
    }
}

/**
 * Get param field form url
 * @param field
 * @param url
 * @returns {string}
 */
function getParamsByUrlWph(field, url){

    var parameters = url.split('?')[1];
    if(typeof parameters!='undefined'){
        parameters = parameters.split("&");
        for (var i = 0; i < parameters.length; i++) {
          var temp = parameters[i].split("=");
          if(field == temp[0]){
              return decodeURI(temp[1]);
          }
        }
    }
}


/**
 * Create complete URL to Webphone popup
 * @param urlBase
 * @returns {*}
 */
function getWebphoneUrl(widget) {


    var urlWebphone = wphurlBase;
    var brand       = '';
    var button      = 2048;
    currentlang     = getSessionLocateWebphone();//getLocateByUseData();

    var separator = (urlWebphone.indexOf("?") === -1) ? "?" : "&";
    urlWebphone += (currentlang) ? separator+"lang="+currentlang : separator+"lang="+wphLocateCode;
    separator = (urlWebphone.indexOf("?") === -1) ? "?" : "&";
    urlWebphone += (widget) ? separator+"widget="+widget : '';


    if (typeof document.URL !== 'undefined') {
        separator = (urlWebphone.indexOf("?") === -1) ? "?" : "&";
        urlWebphone += separator+'wphUrl#'+document.URL;
    }

    return urlWebphone;
}

function openPopupDirectPopupPlanificador() {
    //getWebphoneUrl(getWidgetBySource());
    openWebphone(getWidgetBySource());
}

function OpenPopupPlanificador(){
     IsOnPlanificadorcall = true;
    openWebphone(getWidgetBySource());
}


function openPopupLateralPopup(phone=null) {
    //getWebphoneUrl(getWidgetBySource());
    openWebphone(getWidgetBySource());
}

function directLateralPopup(phone=null) {
    //getWebphoneUrl(getWidgetBySource());
    openWebphone(getWidgetBySource());
}

function closeWohLateral() {

    jQuery(".phone-mobile").addClass('closed');
    jQuery(".phone-mobile").animate({
        left: "0px"
    }, "slow");
    jQuery(".wph-close").hide();

}

function analyticsEvents() {
    jQuery('a[href^="mailto:"]').on('click', function(e) {
        if (typeof dataLayer != 'undefined') dataLayer.push({
            'event': 'Mailto'
        });
    });

    jQuery('.mk-progress-button.contact-outline-submit.outline-btn-light').on('click', function(e) {
        if (typeof dataLayer != 'undefined') dataLayer.push({
            'event': 'Formulario.Contacto'
        });
    });


}

function appendMobileIcontocall() {
    if(getSiteLangCode()=='es'){
        var e = jQuery('<div id="phone-contactBubbles"> <a title="Cerrar" class="wph-close" href="javascript:closeWohLateral();"></a><ul> <li> <a class="phone-mobile" title="Te llamamos gratis!" data-contactbubble="true" href="javascript:void(0)" onclick="directLateralPopup();" ><div class="section-top">Planifica<br>tu camino</div><div class="section-bottom">Te llamamos<br><strong>gratis</strong></div></a></li> </ul> </div>').hide().fadeIn(1e3);
    }else{
        var e = jQuery('<div id="phone-contactBubbles"> <a title="Cerrar" class="wph-close" href="javascript:closeWohLateral();"></a><ul> <li> <a class="phone-mobile" title="We call you for free!" data-contactbubble="true" href="javascript:void(0)" onclick="directLateralPopup();" ><div class="section-top">Plan your<br>way</div><div class="section-bottom">We call you<br><strong>free</strong></div></a></li> </ul> </div>').hide().fadeIn(1e3);
    }

    jQuery("body").append(e), jQuery(".phone-mobile").css({
        left: jQuery(".phone-mobile").offset().left
    }).animate({
        left: "0px"
    }, "slow")
}

function getUrlScriptWebphone(){
    var urlScript = document.querySelector("script[src*='//llamamegratis.es/"+clientFolder+"/js/webphone.js']");
    if(typeof urlScript.src !='undefined' && urlScript.src!=''){
        return urlScript.src
    }
    return '';
}

/**
 * Create a follow element on DOM
 */
function appendFollowButton() {
    var ajax = ajaxWphRequest('https://webservice.webphone.net/wphcalls/leads/getobjconfiginfo/'+widgetByUrl, 'get',  function(obj) {
        if(typeof obj.responseText !='undefined'){
            if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
                try{
                    response = JSON.parse(obj.responseText);
                    if(typeof response.c_id !='undefined' && response.c_id!='' &&
                        typeof response.image_button !='undefined' && response.image_button!='' ){

                            setTimeout(function(){
                                var elemDiv = document.createElement('div');
                                elemDiv.id = 'webphone-button-follow-fixed';
                                elemDiv.addEventListener("click",function(e){
                                   openWebphone(widgetByUrl)
                                },false);
                                document.body.appendChild(elemDiv);
                                var img = document.createElement('img');
                                img.src = wphCdnImgServices+response.c_id+'/widgets/images/'+response.image_button; // path to the image
                                document.getElementById("webphone-button-follow-fixed").innerHTML = '';
                                document.getElementById("webphone-button-follow-fixed").appendChild(img);
                            }, 1000);

                    }
                }catch(exception){
                       setTimeout(function(){
                        var elemDiv = document.createElement('div');
                        elemDiv.id = 'webphone-button-follow-fixed';
                        elemDiv.addEventListener("click",function(e){
                           openWebphone(widgetByUrl)
                        },false);
                        document.body.appendChild(elemDiv);
                        var img = document.createElement('img');
                        img.src = "//llamamegratis.es/"+clientFolder+"/img/wphbutton.png"; // path to the image
                        document.getElementById("webphone-button-follow-fixed").innerHTML = '';
                        document.getElementById("webphone-button-follow-fixed").appendChild(img);
                    }, 2000);
                }
            }else{
                setTimeout(function(){
                        var elemDiv = document.createElement('div');
                        elemDiv.id = 'webphone-button-follow-fixed';
                        elemDiv.addEventListener("click",function(e){
                           openWebphone(widgetByUrl)
                        },false);
                        document.body.appendChild(elemDiv);
                        var img = document.createElement('img');
                        img.src = "//llamamegratis.es/"+clientFolder+"/img/wphbutton.png"; // path to the image
                        document.getElementById("webphone-button-follow-fixed").innerHTML = '';
                        document.getElementById("webphone-button-follow-fixed").appendChild(img);
                    }, 2000);
            }
        }
    })
}


/**
 * Create a chat button element on DOM
 */
function appendChatButton() {
    var ajax = ajaxWphRequest('https://webservice.webphone.net/wphcalls/leads/getobjconfiginfo/'+widgetByUrl, 'get',  function(obj) {
        if(typeof obj.responseText !='undefined'){
            if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
                try{
                    response = JSON.parse(obj.responseText);
                    if(typeof response.c_id !='undefined' && response.c_id!='' &&
                        typeof response.image_button !='undefined' && response.image_button!='' ){

                            setTimeout(function(){
                                var elemDiv = document.createElement('div');
                                elemDiv.id = 'webphone-button-chat-fixed';
                                elemDiv.addEventListener("click",function(e){
                                   openWebphone(widgetByUrl)
                                },false);
                                document.body.appendChild(elemDiv);
                                var img = document.createElement('img');
                                img.src = wphCdnImgServices+response.c_id+'/widgets/images/'+response.image_button; // path to the image
                                document.getElementById("webphone-button-chat-fixed").innerHTML = '';
                                document.getElementById("webphone-button-chat-fixed").appendChild(img);
                            }, 1000);

                    }
                }catch(exception){
                       setTimeout(function(){
                            var elemDiv = document.createElement('div');
                            elemDiv.id = 'webphone-button-chat-fixed';
                            elemDiv.addEventListener("click",function(e){
                               openWebphone(widgetByUrl)
                            },false);
                            document.body.appendChild(elemDiv);
                            var img = document.createElement('img');
                            img.src = "//llamamegratis.es/"+clientFolder+"/img/wphbutton.png"; // path to the image
                            document.getElementById("webphone-button-chat-fixed").innerHTML = '';
                            document.getElementById("webphone-button-chat-fixed").appendChild(img);
                        }, 2000);
                }
            }else{
                setTimeout(function(){
                    var elemDiv = document.createElement('div');
                    elemDiv.id = 'webphone-button-chat-fixed';
                    elemDiv.addEventListener("click",function(e){
                       openWebphone(widgetByUrl)
                    },false);
                    document.body.appendChild(elemDiv);
                    var img = document.createElement('img');
                    img.src = "//llamamegratis.es/"+clientFolder+"/img/wphbutton.png"; // path to the image
                    document.getElementById("webphone-button-chat-fixed").innerHTML = '';
                    document.getElementById("webphone-button-chat-fixed").appendChild(img);
                }, 2000);
            }
        }
    })

}

/**
 * Replace object Webphone element by widget image from Webphone obj info
 * @param idWidgetWphObj
 */
function appendButtonWphByObj(idWidgetWphObj) {
  var ajax = ajaxWphRequest('https://webservice.webphone.net/wphcalls/leads/getobjconfiginfo/'+idWidgetWphObj, 'get',  function(obj) {
    if(typeof obj.responseText !='undefined'){
      if (typeof JSON === 'object' && typeof JSON.parse === 'function') {
        try {
          response = JSON.parse(obj.responseText);
          if (typeof response.c_id != 'undefined' && response.c_id != '' &&
              typeof response.image_button != 'undefined' && response.image_button != '') {

            //setTimeout(function () {
            var elemDiv = document.createElement('div');
            elemDiv.id = 'webphone-button-' + idWidgetWphObj;
            elemDiv.addEventListener("click", function (e) {
              openWebphone(idWidgetWphObj)
            }, false);
            //document.body.appendChild(elemDiv);

            var img = document.createElement('img');
            img.src = wphCdnImgServices + response.c_id + '/widgets/images/' + response.image_button; // path to the image
            elemDiv.innerHTML= '';
            elemDiv.appendChild(img);
            jQuery(elemDiv).css({cursor: 'pointer', display: 'inline-block'});
            jQuery(elemDiv).hover(function(){
              jQuery(this).css({ opacity: '0.8' });
            }, function(){
              jQuery(this).css({ opacity: '1' });
            });
            jQuery(elemDiv).hide();
            jQuery('object[classid="webphone"]#'+idWidgetWphObj).replaceWith(elemDiv);
            jQuery(elemDiv).fadeIn(600);
            //}, 1000);
          }
        } catch (exception) {
          //setTimeout(function () {
          var elemDiv = document.createElement('div');
          elemDiv.id = 'webphone-button-' + idWidgetWphObj;
          elemDiv.addEventListener("click", function (e) {
            openWebphone(idWidgetWphObj)
          }, false);
          var img = document.createElement('img');
          img.src = "//llamamegratis.es/" + clientFolder + "/img/wphbutton.png"; // path to the image
          elemDiv.innerHTML= '';
          elemDiv.appendChild(img);
          jQuery(elemDiv).css({cursor: 'pointer', display: 'inline-block'});
          jQuery(elemDiv).hover(function(){
            jQuery(this).css({ opacity: '0.8' });
          }, function(){
            jQuery(this).css({ opacity: '1' });
          });
          jQuery(elemDiv).hide();
          jQuery('object[classid="webphone"]#'+idWidgetWphObj).replaceWith(elemDiv);
          jQuery(elemDiv).fadeIn(600);
          //}, 2000);
        }
      }
    }
  });
}


/**
 * Append Webphone button by object
 */
function appendWphButtonByObject() {
    jQuery('object[classid="webphone"]').each(function(i){
       if (typeof $(this).attr('id') != 'undefined' && $(this).attr('id') != '') {
         appendButtonWphByObj($(this).attr('id'));
       }
    });
}

function weNeedAppendFixedButton(){

    if(getParamsByUrlWph('idWidget', getUrlScriptWebphone()) !=''){
       widgetByUrl = getParamsByUrlWph('idWidget', getUrlScriptWebphone());
    }

    if(getParamsByUrlWph('typeWidget', getUrlScriptWebphone()) == 'follow'){
        if(document.getElementById("webphone-button-follow-fixed") == null) appendFollowButton();
    }else{
        if(getParamsByUrlWph('typeWidget', getUrlScriptWebphone()) == 'fixed'){
           if(document.getElementById("webphone-button-chat-fixed") == null) appendChatButton();
        }
    }
}


!function() {

        initScripts();
        intervalIdWph = setInterval(function(){
        if (isLoadScripts()) {
            clearInterval(intervalIdWph);
            //initWebphoneTracking();
            //getLocateByUseData();
            //weNeedAppendFixedButton();
            appendWphButtonByObject();
            //window.setTimeout(function() {
                    //appendMobileIcontocall()
            //}, 1000);
            //analyticsEvents();
            /*if(document.getElementById("webphone-button-bottom-fixed")!= null){
                var wphbuttonfixed = document.getElementById("webphone-button-bottom-fixed");
                wphbuttonfixed.addEventListener("click",function(e){
                    if(typeof document.body.querySelector("object") !='undefined' &&
                       document.body.querySelector("object").type.indexOf("webphone") !== -1){
                        if(typeof document.body.querySelector("object").id != 'undefined'){
                            try{
                                openWebphone(document.body.querySelector("object").id);
                            }catch(exception){

                            }
                        }
                    }
                },false);
            }*/
            (function ($) {
                jQuery(document).ready(function () {
                    // USED in DEV:
                    if (developmentEnv) {
                        //openWebphone();
                    }
                });
            })(jQuery);
        }
    }, 100);
}();

var wWindow = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var hWindow = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);


/** handleEvents **/
function handleMessageWphdinamic(m) {

    try {
        var m = JSON.parse(m.data);
    } catch (e) {
        var m = m.data;
    }

    if (Object.hasOwnProperty.call(m, 'event')) {

        var ev = document.createEvent('Event');
        ev.data = m.data;
        ev.initEvent(m.event, true, true);

        window.dispatchEvent(ev);
    }

    return;
};




var eventsCallsWph = {
    wphEvt_sentoncalldinamic: false,
    wphEvt_sentonhangupdinamic: false,
    wphEvt_sentonanswerclidinamic: false,
    wphEvt_sentonanswerusrdinamic: false,
    wphEvt_sentonerrordinamic: false,
    wphEvt_sentonformdinamic: false
};

function reseteventsCallsWph() {
    eventsCallsWph.wphEvt_sentoncalldinamic = false;
    eventsCallsWph.wphEvt_sentonhangupdinamic = false;
    eventsCallsWph.wphEvt_sentonanswerclidinamic = false;
    eventsCallsWph.wphEvt_sentonanswerusrdinamic = false;
    eventsCallsWph.wphEvt_sentonerrordinamic = false;
    eventsCallsWph.wphEvt_sentonformdinamic = false;
}

window.addEventListener("message", handleMessageWphdinamic, false);

if (typeof window.addEventListener != 'undefined') {

    window.addEventListener("wphEvt_sentoncalldinamic", function(ev) {
        if (typeof dataLayer != 'undefined' && !eventsCallsWph.wphEvt_sentoncalldinamic) {
            eventsCallsWph.wphEvt_sentoncalldinamic = true;
            if(typeof IsOnPlanificadorcall!= 'undefined' && IsOnPlanificadorcall){
                dataLayer.push({
                    'event': 'webphone.callplanificador'
                });
            }else{
               dataLayer.push({
                    'event': 'webphone.call'
                });
            }

        }
    });

    window.addEventListener("wphEvt_sentonhangupdinamic", function(ev) {
        if (typeof dataLayer != 'undefined' && !eventsCallsWph.wphEvt_sentonhangupdinamic) {
            eventsCallsWph.wphEvt_sentonhangupdinamic = true;
            dataLayer.push({
                'event': 'webphone.onhangup'
            }); /*,'webphone.duration': ev.duration});*/
        }
    });

    window.addEventListener("wphEvt_sentonanswerclidinamic", function(ev) {

        if (typeof dataLayer != 'undefined' && !eventsCallsWph.wphEvt_sentonanswerclidinamic) {
            eventsCallsWph.wphEvt_sentonanswerclidinamic = true;
            dataLayer.push({
                'event': 'webphone.onanswercli'
            });
        }
    });

    window.addEventListener("wphEvt_sentonanswerusrdinamic", function(ev) {
        if (typeof dataLayer != 'undefined' && !eventsCallsWph.wphEvt_sentonanswerusrdinamic) {
            eventsCallsWph.wphEvt_sentonanswerusrdinamic = true;
            dataLayer.push({
                'event': 'webphone.onanswerusr'
            });
        }
    });


    window.addEventListener("wphEvt_sentonerrordinamic", function(ev) {
        if (typeof dataLayer != 'undefined' && !eventsCallsWph.wphEvt_sentonerrordinamic) {
            eventsCallsWph.wphEvt_sentonerrordinamic = true;
            dataLayer.push({
                'event': 'webphone.missedcall'
            });
        }
    });

    window.addEventListener("wphEvt_sentonformdinamic", function(ev) {
        if (typeof dataLayer != 'undefined' && !eventsCallsWph.wphEvt_sentonformdinamic) {
            eventsCallsWph.wphEvt_sentonformdinamic = true;
            dataLayer.push({
                'event': 'webphone.form'
            });
        }
    });

    window.addEventListener("wphEvt_resetEvents", function(ev) {
        reseteventsCallsWph();
    });
}
