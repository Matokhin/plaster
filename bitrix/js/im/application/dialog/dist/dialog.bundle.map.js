{"version":3,"sources":["dialog.bundle.js"],"names":["this","BX","Messenger","exports","im_application_core","im_provider_rest","promise","pull_client","ui_vue","im_lib_logger","im_lib_utils","Vue","component","props","userId","default","dialogId","data","realDialogId","created","_this","event","$on","metaPress","$event","ctrlKey","metaKey","$root","$bitrixApplication","params","place","id","computed","isDialog","Utils","dialog","isChatId","isEnableGesture","isEnableGestureQuoteFromRight","methods","logEvent","name","_len","arguments","length","Array","_key","Logger","info","apply","concat","template","DialogApplication","undefined","babelHelpers","classCallCheck","inited","initPromise","Promise","rootNode","node","document","createElement","VueVendorV2","initCore","then","initComponent","initComplete","createClass","key","value","_this2","resolve","reject","Core","ready","controller","_this3","console","log","getStore","commit","getDialogId","options","quoteEnable","autoplayVideo","darkBackground","addRestAnswerHandler","DialogRestHandler","create","store","context","getters","application","chatId","diskFolderId","createVue","el","getUserId","vue","promise$$1","getLocalize","parseInt","toString","getHost","location","origin","getSiteId","addLocalize","phrases","Application","Provider","Rest","Lib"],"mappings":"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","file":"dialog.bundle.map.js"}