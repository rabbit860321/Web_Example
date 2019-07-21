(function($) {
    $.fn.jtab = function() {
        $('.tab-hd-item').on('mouseenter', function() {
            var index = $('.tab-hd-item').index(this);
            var bdLiDom = $('.tab-bd-item').get(index);
            $(bdLiDom).addClass('on').siblings().removeClass('on');
        });
    };
})(jQuery);