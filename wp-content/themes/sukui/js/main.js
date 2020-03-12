// hero読み込み時フェードイン
$(function() {
    // 一旦hide()で隠してフェードインさせる
    $('.hero').hide().fadeIn(2000);

});
// 読み込み時フェードイン
$(function() {
    // 一旦hide()で隠してフェードインさせる
    $('.start').hide().fadeIn(800);

});


// スクロールフェードイン
$(function() {
$(window).scroll(function() {
$('.fadein').each(function() {
    var targetElement = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > targetElement - windowHeight + 200) {
        $(this).css('opacity', '1');
        $(this).css('transform', 'translateY(0)');
    }
});
});
});

// トップボタン
jQuery(function() {
    var pagetop = $('.topbtn');
    pagetop.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 700) { //700pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
});

    // ヘッダー固定
    $(function() {
        $(window).scroll(function() {

            if ($(this).scrollTop() > 10) {
                $('.articles-scroll').addClass('is-fixed');
            } else {
                $('.articles-scroll').removeClass('is-fixed');
            }
        });
    });
    // ページ内スクロール
    $(function() {
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#"]').click(function() {
            // スクロールの速度
            var speed = 500; // ミリ秒で記述
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            $('body,html').animate({ scrollTop: position }, speed, 'swing');
            return false;
        });
    });