// var ACCOUNT_STATIC_PATH = '/public/seajs';
var ACCOUNT_STATIC_PATH = 'https://static.hdslb.com/account/seajs';

var _sea_prefix = '';
if (typeof use_min_js != 'undefined' && use_min_js == 1) {
	_sea_prefix = '-min';
}

//公共组建相关脚本
seajs.config({
    paths: {
        "plugin": ACCOUNT_STATIC_PATH + "/plugin/",
        "common": ACCOUNT_STATIC_PATH + "/common/"
    },
    alias: {
        "jquery": ACCOUNT_STATIC_PATH + "/plugin/jquery-1.8.3.min.js",
        "artDialog": ACCOUNT_STATIC_PATH + "/plugin/dialog/artDialog.min.js",
        "artDialog-green-css": ACCOUNT_STATIC_PATH + "/plugin/dialog/skins/green.css",
        "artDialog-white-css": ACCOUNT_STATIC_PATH + "/plugin/dialog/skins/white.css",
        "popup": ACCOUNT_STATIC_PATH + "/plugin/popup.js",
        "uploadify": ACCOUNT_STATIC_PATH + "/plugin/uploadify/jquery.uploadify-3.1.js",
        "uploadify-css": ACCOUNT_STATIC_PATH + "/plugin/uploadify/uploadify.css",
        "ajaxform": ACCOUNT_STATIC_PATH + "/plugin/ajaxform.js",
        "jvalidate": ACCOUNT_STATIC_PATH + "/plugin/jvalidate.js",
        "md5": ACCOUNT_STATIC_PATH + "/plugin/md5.js",
        "calendar": ACCOUNT_STATIC_PATH + "/plugin/calendar/calendar.js",
        "request": ACCOUNT_STATIC_PATH + "/plugin/request.js",
        "common": ACCOUNT_STATIC_PATH + "/common/common.js",
        "captcha": ACCOUNT_STATIC_PATH + "/common/captcha.js",
        "fastclick": ACCOUNT_STATIC_PATH + "/common/fastclick.js",
        "mng": ACCOUNT_STATIC_PATH + "/common/mng.js",
        "utils": ACCOUNT_STATIC_PATH + "/common/utils.js",
        "jsencrypt": ACCOUNT_STATIC_PATH + "/plugin/jsencrypt.min.js",
        "jquery-ui-css" : ACCOUNT_STATIC_PATH + "/plugin/autocomplete/jquery-ui.css",
        "jquery-autocomplete" : ACCOUNT_STATIC_PATH + "/plugin/autocomplete/jquery-ui.js",
        "underscore": ACCOUNT_STATIC_PATH + "/plugin/underscore-min.js",
        "Chart" : ACCOUNT_STATIC_PATH + "/plugin/Chart.min.js",
        "slip" : ACCOUNT_STATIC_PATH + "/plugin/slip.js",
        "tap": ACCOUNT_STATIC_PATH + "/plugin/jquery.tap.js",
        "qrcode": ACCOUNT_STATIC_PATH + "/plugin/qrcode.min.js",
        "tpl": ACCOUNT_STATIC_PATH + "/plugin/artTemplate.js",
        "datepicker": ACCOUNT_STATIC_PATH + "/plugin/zebra.datepicker.min.js",
        "pager": ACCOUNT_STATIC_PATH + "/plugin/jquery.simplePagination.js",
        "base": ACCOUNT_STATIC_PATH + "/base.js"
    }
});

//业务相关脚本
seajs.config({
    alias: {
    	"login-index": ACCOUNT_STATIC_PATH + "/login/index" + _sea_prefix + ".js",
    	"login-mobile-index": ACCOUNT_STATIC_PATH + "/login/index-mobile" + _sea_prefix + ".js",
    	"register-index": ACCOUNT_STATIC_PATH + "/register/index" + _sea_prefix + ".js",
    	"register-mobile-index" : ACCOUNT_STATIC_PATH + "/register/index-mobile" + _sea_prefix + ".js",
    	"register-mail": ACCOUNT_STATIC_PATH + "/register/mail" + _sea_prefix + ".js",
    	"register-mail-sent": ACCOUNT_STATIC_PATH + "/register/mail-sent" + _sea_prefix + ".js",
    	"register-mail-step2": ACCOUNT_STATIC_PATH + "/register/mail-step2" + _sea_prefix + ".js",
		"register-validate-mail": ACCOUNT_STATIC_PATH + "/register/validate-mail" + _sea_prefix + ".js",
		"register-validate-phone": ACCOUNT_STATIC_PATH + "/register/validate-phone" + _sea_prefix + ".js",
		"member-bind-mail": ACCOUNT_STATIC_PATH + "/member/bind-mail" + _sea_prefix + ".js",
		"member-changePhone-step1": ACCOUNT_STATIC_PATH + "/member/change-phone-1" + _sea_prefix + ".js",
		"member-changePhone-step2": ACCOUNT_STATIC_PATH + "/member/change-phone-2" + _sea_prefix + ".js",
		"member-changePhone-step3": ACCOUNT_STATIC_PATH + "/member/change-phone-3" + _sea_prefix + ".js",
		"reset-pwd": ACCOUNT_STATIC_PATH + "/resetpwd/index" + _sea_prefix + ".js",
		"reset-pwd-mobile": ACCOUNT_STATIC_PATH + "/resetpwd/index_mobile" + _sea_prefix + ".js",
		"reset-set": ACCOUNT_STATIC_PATH + "/resetpwd/set" + _sea_prefix + ".js",
		"reset-set-mobile": ACCOUNT_STATIC_PATH + "/resetpwd/set_mobile" + _sea_prefix + ".js",
		"site-secure": ACCOUNT_STATIC_PATH + "/site/secure" + _sea_prefix + ".js",
		"site-setting": ACCOUNT_STATIC_PATH + "/site/setting" + _sea_prefix + ".js",
		"site-face": ACCOUNT_STATIC_PATH + "/site/face" + _sea_prefix + ".js",
        "site-mp": ACCOUNT_STATIC_PATH + "/site/mp" + _sea_prefix + ".js",
        "site-home": ACCOUNT_STATIC_PATH + "/site/home" + _sea_prefix + ".js",
        "site-record":ACCOUNT_STATIC_PATH + "/site/record" + _sea_prefix + ".js",
        "record-login":ACCOUNT_STATIC_PATH + "/site/record-login" + _sea_prefix + ".js",
        "record-login-feedback":ACCOUNT_STATIC_PATH + "/site/record-login-feedback" + _sea_prefix + ".js",
        "site-record-mix":ACCOUNT_STATIC_PATH + "/site/record_mix" + _sea_prefix + ".js",
		"site-record-moral":ACCOUNT_STATIC_PATH + "/site/moral" + _sea_prefix + ".js",
		"biliPager":ACCOUNT_STATIC_PATH + "/site/biliPager" + _sea_prefix + ".js",
		"site-record-exp":ACCOUNT_STATIC_PATH + "/site/exp" + _sea_prefix + ".js",
		"site-identification":ACCOUNT_STATIC_PATH + "/site/identification" + _sea_prefix + ".js",
		"answer-base":ACCOUNT_STATIC_PATH + "/answer/answer_base" + _sea_prefix + ".js",
        "answer-mobile":ACCOUNT_STATIC_PATH + "/answer/answer_mobile" + _sea_prefix + ".js",
		"answer-promotion":ACCOUNT_STATIC_PATH + "/answer/answer_promotion" + _sea_prefix + ".js",
		"answer-addq":ACCOUNT_STATIC_PATH + "/answer/answer_addq" + _sea_prefix + ".js",
		"answer_myanswer":ACCOUNT_STATIC_PATH + "/answer/answer_myanswer" + _sea_prefix + ".js",
		"answer-cool":ACCOUNT_STATIC_PATH + "/answer/answer_cool" + _sea_prefix + ".js",
		"answer-cool-mobile":ACCOUNT_STATIC_PATH + "/answer/answer_cool_mobile" + _sea_prefix + ".js",
        "answer-check":ACCOUNT_STATIC_PATH + "/answer/answer_check" + _sea_prefix + ".js",
        "answer-addBirthday":ACCOUNT_STATIC_PATH + "/answer/answer_addBirthday" + _sea_prefix + ".js",
        "answer-addBirthday-h5":ACCOUNT_STATIC_PATH + "/answer/addBirthday-h5" + _sea_prefix + ".js"
    }
});
