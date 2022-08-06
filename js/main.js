// safariのbfcashe対策
window.onpageshow = function(event) {
  if (event.persisted) {
    window.location.reload()
  }
};

jQuery(function ($) {

  // スリック
  $('.js-mainSlick').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 5000,
    autoplaySpeed: 4000,
    autoplay: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    dots: true,
    arrows: false,

  });

  $('.js-subSlick').slick({
    speed: 2000,
    autoplaySpeed: 7000,
    autoplay: true,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    prevArrow: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="prev_icon arrow"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM288 360c0 9.531-5.656 18.19-14.41 22C270.5 383.3 267.3 384 264 384c-5.938 0-11.81-2.219-16.34-6.406l-112-104C130.8 269 128 262.7 128 256s2.781-13.03 7.656-17.59l112-104c7.031-6.469 17.22-8.156 25.94-4.406C282.3 133.8 288 142.5 288 152V360z"/></svg>',
    nextArrow: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="next_icon arrow"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM312.3 273.6l-112 104C195.8 381.8 189.9 384 184 384c-3.25 0-6.5-.6562-9.594-2C165.7 378.2 160 369.5 160 360v-208c0-9.531 5.656-18.19 14.41-22c8.75-3.75 18.94-2.062 25.94 4.406l112 104C317.2 242.1 320 249.3 320 256S317.2 269 312.3 273.6z"/></svg>',
    responsive: [
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  $('.js-subSlick2').slick({
    speed: 2000,
    autoplaySpeed: 7000,
    autoplay: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    prevArrow: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="prev_icon arrow"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM288 360c0 9.531-5.656 18.19-14.41 22C270.5 383.3 267.3 384 264 384c-5.938 0-11.81-2.219-16.34-6.406l-112-104C130.8 269 128 262.7 128 256s2.781-13.03 7.656-17.59l112-104c7.031-6.469 17.22-8.156 25.94-4.406C282.3 133.8 288 142.5 288 152V360z"/></svg>',
    nextArrow: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="next_icon arrow"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM312.3 273.6l-112 104C195.8 381.8 189.9 384 184 384c-3.25 0-6.5-.6562-9.594-2C165.7 378.2 160 369.5 160 360v-208c0-9.531 5.656-18.19 14.41-22c8.75-3.75 18.94-2.062 25.94 4.406l112 104C317.2 242.1 320 249.3 320 256S317.2 269 312.3 273.6z"/></svg>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  // 別ページからのアンカーリンクのズレを防ぐ
  function anchorLink() {
    const urlHash = location.hash;
    if (urlHash) {
      $('html,body').stop().scrollTop(0);
      setTimeout(function () {
        const position = $(urlHash).offset().top;
        $('html,body').animate({ scrollTop: position }, 'slow');
      }, 100);
    }
  }
  // window.loadではsafariの際に動かなくなるので注意
  $(document).ready(function () {
    anchorLink();
  });
  

  // PCのみドロップダウンにする
  function dropMenu() {
    const width = $(window).width();

    if (width > 1024) {
      $('.hasChild > a').off('click');
      $('.hasChild').children('ul').css('display', '');
    } else {
      $('.header__nav a').click(function () {
        $('.header__spbtn').removeClass('js-active');
        $('.header__nav').removeClass('js-panel');
        $('main').removeClass('js-blur');
        $('body').removeClass('js-noscroll');
      });
    }
  }
  $(window).on('load', function () {
    dropMenu();
  });
  $(window).resize(function () {
    dropMenu();
  });

  // ハンバーガボタン
  $('.header__spbtn').click(function () {
    $(this).toggleClass('js-active');
    $('.header__nav').toggleClass('js-panel');
    $('main').toggleClass('js-blur');
    $('body').toggleClass('js-noscroll');
  });

  // 時差で出てくるパネル（コロナへの取り組み）
  function fadeUpDelay() {
    const delay = 0.5;
    let fadeInTime = delay;
    $('.js-fadeUpDelay-outer').each(function () {
      if ($('.js-fadeUpDelay-outer').length) {
        //const parentUl = this; //ul
        const scroll = $(window).scrollTop(); //スクロールしている量（下→増、上→減）
        const fadeUpPos = $('.js-fadeUpDelay-outer').offset().top + 200; //文字列の位置（固定値）
        const windowHight = $(window).height(); //windowの高さ（固定値）
        const childrenLi = $(this).children(); // li

        // scroll >= fadeUpPos - windowHight→スクロールをしていき、画面内にアニメーションを付けたい要素が入ったとき
        if (scroll >= fadeUpPos - windowHight) {
          $(childrenLi).each(function () {
            if (!$(this).hasClass('js-fadeUpDelay-after')) {
              $(this).css('animation-delay', fadeInTime + 's');
              $(this).addClass('js-fadeUpDelay-after');
              fadeInTime = fadeInTime + delay;
            }
          }); //$(childrenLi).each
        }
      }//if ($('.js-fadeUp2-outer')
    }); //$('.js-fadeUp2-outer').each(function () {
  } //function delayfadeUp()

  $(window).on('load', function () {
    fadeUpDelay();
  });
  $(window).scroll(function () {
    fadeUpDelay();
  });

  // タブ切り替え
  function cssId(clickId) {
    if (clickId) {
      const cid = clickId;
      $('.trouble__tab li').find('a').each(function () {
        const allTab = $(this).attr('href');
        if (allTab == clickId) {
          const parentLi = $(this).parent();
          $('.trouble__tab li').removeClass('js-active');
          $(parentLi).addClass('js-active');
          $('.trouble__tabArea').removeClass('js-active');
          $(clickId).addClass('js-active');
        }
      });
    }
  }
  $('.trouble__tab a').on('click', function () {
    const clickId = $(this).attr('href');
    cssId(clickId);
    // aタグを無効にして、リロードして場所がずれるのを防ぐ
    return false;
  });

  // スクロールすると文字がじわっとでてくる&写真がふわっと移動してくる＆背景色が変わる
  function BlurFadeBg() {
    $('.js-blur, .js-fadeUp, .js-bg').each(function () {
      if ($('.js-blur, .js-fadeUp1, .js-fadeUp2, .js-fadeUp3, .js-bg').length) { // この要素がない他のページにいった際にエラーを防ぐ
        const blurTxt = $('.js-blur').offset().top;
        const scroll = $(window).scrollTop();
        const upImg1 = $('.js-fadeUp1').offset().top;
        const upImg2 = $('.js-fadeUp2').offset().top;
        const upImg3 = $('.js-fadeUp3').offset().top;
        const changeBg = $('.js-bg').offset().top - 500;
        const changeBgEnd = changeBg + $('.js-bg').outerHeight() + 100;
        const windowHight = $(window).height();

        if (scroll >= changeBg - windowHight) {
          $('.js-bg').addClass('js-bg-after');
        }
        if (scroll >= blurTxt - windowHight) {
          $('.js-blur').addClass('js-blur-after');
        }
        if (scroll >= upImg1 - windowHight) {
          $('.js-fadeUp1').addClass('js-fadeUp1-after');
        }
        if (scroll >= upImg2 - windowHight) {
          $('.js-fadeUp2').addClass('js-fadeUp2-after');
        }
        if (scroll >= upImg3 - windowHight) {
          $('.js-fadeUp3').addClass('js-fadeUp3-after');
        }
        if (scroll >= changeBg && changeBgEnd >= scroll) {
          $('.js-bg').addClass('js-bg-after');
        } else {
          $('.js-bg').removeClass('js-bg-after');
        }
      }
    });
  }

  // 画面を読み込んだ時と、スクロールしたときに位置をとる
  $(window).scroll(function () {
    BlurFadeBg();
  });
  $(window).on('load', function () {
    BlurFadeBg();
  });

  // 文字が左から出てくる（フッター直前）
  function slideTxt() {
    if ($('.js-slideLeft').length) {

      $('.js-slideLeft').each(function () {
        const slideLeftTxt = $(this).offset().top;
        const scroll = $(window).scrollTop();
        const windowHight = $(window).height();
        if (scroll >= slideLeftTxt - windowHight) {
          $(this).addClass('js-slide-toRight');
          $(this).children('.js-slideIn-inner').addClass('textKeep');
        }
      });
    }
  }

  $(window).scroll(function () {
    slideTxt();
  });
  $(window).on('load', function () {
    slideTxt();
  });



}); //jQUery(function