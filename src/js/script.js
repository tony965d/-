
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
   
   
   $('.js-hamburger').click(function() {
      if($('.js-hamburger').hasClass('active')) {
      $('.js-hamburger').removeClass('active');
      $('.js-spNav').fadeOut(500);
      $('body').css('overflow', 'auto');
      } else {
      $('.js-hamburger').addClass('active');
      $('.js-spNav').fadeIn(500);
      $('body').css('overflow', 'hidden');
      }
   });

   
   
   // /// mv画像swiperフェードアウト /////
   // let mvSwiper = new Swiper(".js-mvSwiper", {
   //    loop: true,
   //    effect: 'fade',
   //    autoplay: {
   //    delay: 4000,
   //    disableOnInteraction: false,
   //    },
   //    speed: 2000,
   // });
 


   ///// * ズームアウト */////
   $(document).ready(function() {
      // ページが読み込まれた後に実行されるコード
      $('.js-mvSub').each(function() {
      // アニメーションを適用したい要素にスタイルを設定
      $(this).css('animation', 'zoomOut 1s ease-out forwards');
      });
   });

   

   ///// 下からフェードイン /////
   $(".js-fadeUp").css("opacity", 0);
      ScrollTrigger.batch(".js-fadeUp", {
      onEnter: (elements, triggers) => {
      gsap.set(elements, { y: '20%', opacity: 0 });
      gsap.to(elements, { y: 0, opacity: 1, duration: 1 }); // アニメーション時間を1秒に変更
      },
      start: "top 60%", // スクロール開始位置を少し下にずらす（60%の位置で開始）
      once: true
   });



   ///// 左からフェードイン /////
   $(".js-fadeLeft").css("opacity", 0);
      ScrollTrigger.batch(".js-fadeLeft", {
      onEnter: (elements, triggers) => {
      gsap.set(elements, { x: '-20%', opacity: 0 }); // 左に移動させる
      gsap.to(elements, { x: 0, opacity: 1, duration: 1 }); // 左からフェードインする
      },
      start: "top 70%", // スクロール開始位置を少し下にずらす（70%の位置で開始）
      once: true
   });
   

   
  //// ContactForm7エラー箇所までスクロール /////
  let wpcf7El = document.querySelector(".wpcf7");
  if (wpcf7El) { // 要素が存在する場合にのみイベントリスナーを追加
    wpcf7El.addEventListener("wpcf7invalid", function () {
      let speed = 1000;
      let header = $(".header").innerHeight(); // 固定ヘッダー・ナビの高さを取得
      setTimeout(function () {
        let firstErrorEl = $(".wpcf7-not-valid:first"); // エラーが発生した箇所の最初の要素を取得
        let scrollAmount = firstErrorEl.offset().top - header; //スクロール位置を取得
        $("html, body").animate({ scrollTop: scrollAmount }, speed, "swing"); //スムーズスクロール
      }, 100);
    }, false);
  }



   ///// spヘッダーアコーディオン /////
   $(function() {
      //クリックで動く
      $('.js-spHeader-open').click(function(){
      $(this).toggleClass('active');
      $(this).find('.menuArrow').toggleClass('active');
      $(this).next('.js-spHeader-body').slideToggle();
      });
   });


   // ///// pcヘッダー　ホバーモーダル /////
   // $(document).ready(function() {
   //    // ホバーでactiveクラスを切り替える
   //    $('.js-pcNav-open').hover(function() {
   //      // ホバー時に対応する.js-pcNav-bodyにactiveクラスを付与・削除
   //      $(this).closest('.pcNav__item').find('.js-pcNav-body').toggleClass('active');
   //    });
   //  });



   ///// headerメニューホバーで表示 PC
   $(document).ready(function() {
      // 各クラスに対してホバーイベントを設定
      for (let i = 1; i <= 5; i++) {
         $(`.js-pcNav-open${i}, .js-pcNav-body${i}`).hover(
            function() {
               // マウスが要素に入ったときにactiveクラスを追加
               $(`header`).find(`.js-pcNav-body${i}`).addClass('active');
            },
            function() {
               // マウスが要素から出たときにactiveクラスを削除
               $(`header`).find(`.js-pcNav-body${i}`).removeClass('active');
            }
         );
      }
   });



   ///// スクロール時にボタンを表示＆非表示 /////
   const footerTop = $('.js-pageTop');
   footerTop.hide();

   ///// スクロールイベントでボタンを表示/非表示 /////
   $(window).on('scroll', () => {
   const height = $('.js-mv').outerHeight();
   if ($(window).scrollTop() < height) {
      // 指定px以上のスクロールでボタンを表示
      footerTop.fadeOut(700);
      } else {
         // 画面が指定pxより上ならボタンを非表示
         footerTop.fadeIn(700); // displayをflexに設定
      }
   });

   ///// ボタンをクリックしたらスクロールして上に戻る /////
   footerTop.on('click', () => {
   $('body,html').animate({ scrollTop: 0 }, 300, 'swing');
   return false;
   });


   
   const swiperBanner = new Swiper('.js-swiperBanner', {
      slidesPerView: 'auto', // スライドの数を自動調整
      centeredSlides: true,
      spaceBetween: 13,
      loop: true,
      autoplay: {
         delay: 4000,
         reverseDirection: true,
      },
      speed: 1000,
      pagination: {
         el: ".swiper-pagination",
      },
      breakpoints: {
         768: {
            spaceBetween: 27,
         },
      },
   });



    const swiperInstagram = new Swiper('.js-swiperInstagram', {
      loop: true, // ループ有効
      slidesPerView: 3.5, // 一度に表示する枚数
      // freeMode: true,
      spaceBetween: 5,
      speed: 1000,
      autoplay: {
         delay: 2000,
         disableOnInteraction: false,
         reverseDirection: true,
      },
      loopedSlides: 5,
      breakpoints: {
         768: {
            spaceBetween: 11,
            slidesPerView: 5.4, // 一度に表示する枚数
         },
      },      
   });



   const swiperTopics = new Swiper('.js-swiperTopics', {
      loop: true, // ループ有効
      slidesPerView: 1, // 一度に表示する枚数
      autoplay: {
         delay: 2000,
         reverseDirection: true,
      },
      speed: 1000,
      pagination: {
         el: ".swiper-pagination",
      },
      navigation: {
         prevEl: '.swiper-button-prev', // 前のスライドボタン
         nextEl: '.swiper-button-next', // 前のスライドボタン
     },
      breakpoints: {
         768: {
            spaceBetween: 22,
            slidesPerView: 3, // 一度に表示する枚数
         },
      },
   });


   
   ///// FAQアコーディオン /////
   $(function() {
      $('.js-faqBlock-body').hide(); // 初期状態を非表示に
      //クリックで動く
      $('.js-faqBlock-open').click(function(){
          $(this).toggleClass('active');
          $(this).closest('.faq__block').find('.js-faqBlock-body').slideToggle();
      });
   });
  



});





let mySwiper = null;
const mediaQuery = window.matchMedia('(min-width: 768px)');

const checkBreakpoint = (e) => {
  if (e.matches) {
    // 768px以上の場合にSwiperを初期化
    if (!mySwiper) {
      initSwiper();
    }
  } else if (mySwiper) {
    // 767px以下の場合にSwiperを削除
    mySwiper.destroy(false, true);
    mySwiper = null;
  }
}

const initSwiper = () => {
  mySwiper = new Swiper('.js-swiperBlog', {
   invert: false,
   slidesPerView: 4.5,
   spaceBetween: 23,
   loop: true,
   // loopAdditionalSlides: 5,
   // loopedSlides: 5,
   speed: 1000,
   autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      reverseDirection: true // ループの進行方向を逆
   },
   grabCursor: true,
   pagination: {
         el: ".swiper-pagination",
         clickable: true, 
      },
      navigation: {
         prevEl: '.swiper-button-prev', // 前のスライドボタン
      },
  });
};

mediaQuery.addListener(checkBreakpoint);
checkBreakpoint(mediaQuery);



