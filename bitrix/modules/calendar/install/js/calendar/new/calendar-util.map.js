{"version":3,"sources":["calendar-util.js"],"names":["window","Util","calendar","config","additionalParams","this","userSettings","dayLength","type","userId","parseInt","ownerId","accessNames","handleAccessNames","DATE_FORMAT_BX","BX","message","DATETIME_FORMAT_BX","DATE_FORMAT","date","convertBitrixFormat","DATETIME_FORMAT","substr","length","TIME_FORMAT","util","trim","TIME_FORMAT_BX","isAmPmMode","TIME_FORMAT_SHORT_BX","replace","TIME_FORMAT_SHORT","KEY_CODES","backspace","enter","escape","space","delete","left","right","up","down","z","y","shift","ctrl","alt","cmd","cmdRight","pageUp","pageDown","prototype","getEventPath","entry","url","path","indexOf","id","formatDate","from","getWeekDays","weekDays","getWeekStart","weekStart","getWeekEnd","MO","TU","WE","TH","FR","SA","SU","getWeekDayOffset","day","weekDayOffsetIndex","i","getWeekDayByInd","index","isHoliday","weekHolidays","week_holidays","hasOwnProperty","yearHolidays","year_holidays","yearWorkdays","year_workdays","getDay","monthDate","getDate","month","getMonth","isToday","curDate","Date","getFullYear","getWorkTime","userWorkTime","work_time_start","work_time_end","workTime","start","Math","floor","parseFloat","end","ceil","proxy","setWorkTime","min","max","userOptions","save","formatTime","h","m","skipMinutes","isDate","getMinutes","getHours","res","undefined","isNaN","toString","ampm","timestamp","getTime","format","formatDateTime","formatDateUsable","showYear","parseTime","str","parseDate","trimSeconds","cnt","k","regMonths","bUTC","isNotEmptyString","expr","RegExp","aDate","match","aFormat","aDateArgs","aFormatArgs","aResult","array_search","getNumMonth","toUpperCase","d","setUTCDate","setUTCFullYear","setUTCMonth","setUTCHours","setDate","setFullYear","setMonth","setHours","bPM","findTargetNode","node","parentCont","prefix","viewsCont","attributes","name","findParent","n","j","getViewHeight","minHeight","height","GetWindowInnerSize","document","innerHeight","showWeekNumber","getUserOption","getWeekNumber","weekNumber","getScrollbarWidth","outer","mainCont","appendChild","create","props","className","widthNoScroll","offsetWidth","style","overflow","inner","widthWithScroll","result","cleanNode","getMessagePlural","messageId","number","pluralForm","langId","defaultValue","setUserOption","value","getKeyCodes","getMousePos","e","event","x","pageX","pageY","clientX","clientY","documentElement","scrollLeft","body","clientLeft","scrollTop","clientTop","getDayCode","getTextColor","color","charAt","substring","r","g","b","light","getTimeValue","round","getTimeEx","getTimeByInt","intValue","hour","getTimeByFraction","val","useFloor","getWeekNumberInMonthByDate","origDate","getSimpleTimeList","push","label","adaptTimeValue","timeValue","timeList","diff","ind","abs","getMeetingRoomList","meetingRooms","getLocationList","locationList","setLocationList","mergeSocnetDestinationConfig","socnetDestination","USERS","code","getSocnetDestinationConfig","key","users","groups","EXTRANET_USER","DENY_TOALL","UA","DEPARTMENT","sonetgroups","SONETGROUPS","department","departmentRelation","DEPARTMENT_RELATION","LAST","SELECTED","getActionUrl","actionUrl","getTimezoneList","timezoneList","getDefaultColors","defaultColorsList","getFormSettings","formType","formSettings","saveFormSettings","settings","pinnedFields","randomInt","random","getAccessName","setAccessName","getSectionAccessTasks","sectionAccessTasks","getTypeAccessTasks","typeAccessTasks","getDefaultTypeAccessTask","taskId","accessTasks","getDefaultSectionAccessTask","getSuperposedTrackedUsers","trackingUsersList","sort","a","LAST_NAME","localeCompare","getSuperposedTrackedGroups","trackingGroupList","isUserCalendar","isGroupCalendar","userIsOwner","hexToRgb","hex","exec","hexToRgba","opacity","parseLocation","ar","split","mrid","mrevid","room_id","room_event_id","getTextLocation","location","ID","NAME","getTextReminder","in_array","getEditTaskPath","editTaskPath","getViewTaskPath","viewTaskPath","readOnlyMode","readOnly","sectionList","sectionController","getSectionListForEdit","getLoader","size","html","applyHacksForPopupzIndex","zIndex","PopupMenu","Data","isObject","popupWindow","isShown","params","popupContainer","isFilterEnabled","counters","getCalDavConnections","connections","isRichLocationEnabled","locationFeatureEnabled","isDarkColor","toLowerCase","#86b100","#0092cc","#00afc7","#da9100","#00b38c","#de2b24","#bd7ac9","#838fa0","#ab7917","#e97090","#9dcf00","#2fc6f6","#56d1e0","#ffa900","#47e4c2","#f87396","#9985dd","#a8adb4","#af7e00","getAvilableViews","avilableViews","getCustumViews","customViews","placementParams","gridPlacementList","isMeetingsEnabled","bSocNet","bIntranet","isAccessibilityEnabled","isPrivateEventsEnabled","useViewSlider","showEventDescriptionInSimplePopup","doBxContextFix","top","Object","keys","forEach","__BX","Access","SocNetLogDestination","restoreBxContextFix","BXEventCalendar","addCustomEvent"],"mappings":"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","file":"calendar-util.map.js"}