var top1 = $('#section-1').offset().top;
var top2 = $('#section-2').offset().top;
var top3 = $('#section-3').offset().top;
var top4 = $('#section-4').offset().top;
var top5 = $('#section-5').offset().top;

$(document).scroll(function () {
    var scrollPos = $(document).scrollTop();
    if (scrollPos >= top1 && scrollPos < top2) {
        $('#header').css('background', '#f00');
    } else if (scrollPos >= top2 && scrollPos < top3) {
        $('#header').css('background', '#0f0');
    } else if (scrollPos >= top3) {
        $('#header').css('background', '#00f');
    }
});
