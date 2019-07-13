/* 事件封裝 */
(function(window) {
    var EventUtil = {
        /* 封裝綁定事件的兼容處理 */
        addEvent: function(element, type, handler, isCapture) {
            if (element.addEventListener) {
                /* 標準瀏覽器 */
                isCapture = isCapture ? true : false;
                element.addEventListener(type, handler, isCapture)
            } else if (element.attachEvent) {
                /* ie6-8 */
                element.attachEvent('on' + type, function() {
                    return handler.call(element, window.event);
                });
            }
        },
        getEvent: function(e) {
            return e || window.event;
        },
        getTarget: function(e) {
            return e.target || e.srcElement;
        },
        stopPropagation: function(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else {
                e.cancelBubble = true;
            }
        }
    }
    window.EventUtil = EventUtil;
})(window || {});