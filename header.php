<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
  </head>

  <?php 
    global $top;
  ?>  

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="header" class="header">
    <div class="header__inner inner">
      <div class="header__twoColumn">
        <div class="header__left">
          <div class="header__left-top">
            <h1 class="header__logo">
              <a href="<?php echo $top ?>" class="header__image"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo.png" alt=""></a>
            </h1>
            <nav class="header__pcNav-sub pcNav-sub">
              <ul class="pcNav-sub__items">
                <li class="pcNav-sub__item">
                  <a href="<?php echo $top ?>" class="pcNav-sub__menu">職業実践専門課程</a>
                </li>
                <li class="pcNav-sub__item">
                  <a href="<?php echo $top ?>" class="pcNav-sub__menu">学校情報公開</a>
                </li>
              </ul>
            </nav>
          </div>
          <nav class="header__pcNav pcNav">
            <ul class="pcNav__items">
              <li class="pcNav__item">
                <div class="pcNav__menu js-pcNav-open1">
                  <a href="<?php echo $top ?>" class="pcNav__title">学校紹介</a>
                </div>
              </li>
              <li class="pcNav__item">
                <div class="pcNav__menu js-pcNav-open2">
                  <a href="<?php echo $top ?>" class="pcNav__title">学科紹介</a>
                </div>
              </li>
              <li class="pcNav__item">
                <div class="pcNav__menu js-pcNav-open3">
                  <a href="<?php echo $top ?>" class="pcNav__title">入学試験・学費</a>
                </div>
              </li>
              <li class="pcNav__item">
                <div class="pcNav__menu js-pcNav-open4">
                  <a href="<?php echo $top ?>" class="pcNav__title">就職情報</a>
                </div>  
              </li>
              <li class="pcNav__item">
                <div class="pcNav__menu js-pcNav-open5">
                  <a href="<?php echo $top ?>" class="pcNav__title">訪問者別</a>
                </div>  
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__right">
          <a href="<?php echo $top ?>" class="header__rightBox header__rightBox--access">
            <div class="header__rightBox-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header-icon-access.png" alt="">
            </div>
            <p class="header__rightBox-text">アクセス</p>
          </a>
          <a href="<?php echo $top ?>" class="header__rightBox header__rightBox--line">
            <div class="header__rightBox-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header-icon-line.png" alt="">
            </div>
            <p class="header__rightBox-text">LINE</p>
          </a>
          <a href="<?php echo $top ?>" class="header__rightBox header__rightBox--contact">
            <div class="header__rightBox-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header-icon-contact.png" alt="">
            </div>
            <p class="header__rightBox-text">お問合せ</p>
          </a>
        </div>
        <div class="header__pcNav-body js-pcNav-body1">
          <ul class="header__pcNav-items pcNav-items">
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">建学の理念</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">施設・設備</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">年間スケジュール</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">在校生の1日</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">卒業生Voice</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">リンク</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">情報公開</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">職業実践専門課程 認定校</a>
            </li>
          </ul>
        </div>
        <div class="header__pcNav-body header__pcNav-body--course js-pcNav-body2">
          <ul class="header__pcNav-items pcNav-items pcNav-items--course">
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-nav1.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text">看護学科</p>
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image pcNav-items__linkContent-image--blue">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-nav2.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text pcNav-items__linkContent-text--blue">介護福祉科</p>
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image pcNav-items__linkContent-image--green">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-nav3.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text pcNav-items__linkContent-text--green">社会福祉科</p>
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image pcNav-items__linkContent-image--pink">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-nav4.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text pcNav-items__linkContent-text--pink">保健保育科 昼主コース</p>
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image pcNav-items__linkContent-image--light-blue">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-nav5.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text pcNav-items__linkContent-text--light-blue">保健保育科 夜主コース</p>
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image pcNav-items__linkContent-image--purple">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-nav6.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text pcNav-items__linkContent-text--purple">精神保健福祉科</p>
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__linkContent">
                <div class="pcNav-items__linkContent-image pcNav-items__linkContent-image--yellow">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc7.jpg" alt="">
                </div>
                <p class="pcNav-items__linkContent-text pcNav-items__linkContent-text--yellow">社会福祉専攻科</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="header__pcNav-body js-pcNav-body3">
          <ul class="header__pcNav-items pcNav-items">
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">募集学科・応募資格</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">入試案内：看護学科</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link pcNav-items__link--top">
                入試案内：介護福祉科 / <br>
                社会福祉科 / 保健保育科
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link pcNav-items__link--top">
                入試案内：精神保健福祉科・<br>
                社会福祉専攻科
              </a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">学費一覧</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">学費サポート</a>
            </li>
          </ul>
        </div>
        <div class="header__pcNav-body js-pcNav-body4">
          <ul class="header__pcNav-items pcNav-items">
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">就職サポート</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">就職先一覧</a>
            </li>
          </ul>
        </div>
        <div class="header__pcNav-body header__pcNav-body--guest js-pcNav-body5">
          <ul class="header__pcNav-items pcNav-items pcNav-items--guest">
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">高校1・２年生の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">社会人・大学生・短大生の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">遠方の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">保護者の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">通信教育科をご希望の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">卒業生の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">採用担当の方へ</a>
            </li>
            <li class="pcNav-items__item">
              <a href="<?php echo $top ?>" class="pcNav-items__link">高校教員の方へ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header__sideBanner-block js-sideBanner">
        <a href="<?php echo $top ?>" class="header__sideBanner sideBanner">
          <p class="sideBanner__text">オープン<br>キャンパス</p>
          <div class="sideBanner__icon">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/side-banner-icon1.png" alt="">
          </div>
          <span class="menuArrow menuArrow--sideBanner"></span>
        </a>
        <a href="<?php echo $top ?>" class="header__sideBanner sideBanner sideBanner--requestInformation">
          <p class="sideBanner__text">資料請求</p>
          <div class="sideBanner__icon">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/side-banner-icon2.png" alt="">
          </div>
          <span class="menuArrow menuArrow--sideBanner"></span>
        </a>
      </div>
      <div class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <nav class="header__spNav spNav js-spNav">
      <div class="spNav__inner inner">
        <div class="spNav__wrapper">
          <ul class="spNav__items spNav__items--first">
            <li class="spNav__item">
              <p class="spNav__menu active js-spHeader-open"><span class="spNav__menu-reference"></span>学校紹介<span class="menuArrow active"></span></p>
              <div class="spNav__body js-spHeader-body">
                <ul class="spNav__body-items spNav-items">
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">学校紹介</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">施設・設備</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">年間スケジュール</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">在校生の1日</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">リンク</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">情報公開</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">職業実践専門課程 認定校</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">special feature “あなたがいてくれて良かった”</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="spNav__item">
              <p class="spNav__menu active js-spHeader-open"><span class="spNav__menu-reference"></span>学科紹介<span class="menuArrow active"></span></p>
              <div class="spNav__body js-spHeader-body">
                <ul class="spNav__body-items spNav-items">
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">学校紹介</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">施設・設備</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">年間スケジュール</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">在校生の1日</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">リンク</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">情報公開</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">職業実践専門課程 認定校</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">special feature “あなたがいてくれて良かった”</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="spNav__item">
              <p class="spNav__menu active js-spHeader-open"><span class="spNav__menu-reference"></span>入学試験・学費<span class="menuArrow active"></span></p>
              <div class="spNav__body js-spHeader-body">
                <ul class="spNav__body-items spNav-items">
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">学校紹介</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">施設・設備</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">年間スケジュール</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">在校生の1日</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">リンク</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">情報公開</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">職業実践専門課程 認定校</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">special feature “あなたがいてくれて良かった”</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="spNav__item">
              <p class="spNav__menu active js-spHeader-open"><span class="spNav__menu-reference"></span>就職情報<span class="menuArrow active"></span></p>
              <div class="spNav__body js-spHeader-body">
                <ul class="spNav__body-items spNav-items">
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">学校紹介</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">施設・設備</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">年間スケジュール</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">在校生の1日</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">リンク</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">情報公開</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">職業実践専門課程 認定校</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">special feature “あなたがいてくれて良かった”</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="spNav__item">
              <p class="spNav__menu active js-spHeader-open"><span class="spNav__menu-reference"></span>訪問者別<span class="menuArrow active"></span></p>
              <div class="spNav__body js-spHeader-body">
                <ul class="spNav__body-items spNav-items">
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">学校紹介</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">施設・設備</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">年間スケジュール</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">在校生の1日</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">リンク</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">情報公開</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">職業実践専門課程 認定校</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">special feature “あなたがいてくれて良かった”</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <div class="spNav__menuBoxes menuBoxes">
            <div class="menuBoxes__item menuBox menuBox--first">
              <p class="menuBox__title">オープンキャンパス</p>
              <div class="menuBox__icon menuBox__icon--openCampus">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu-box-icon1.png" alt="">
              </div>
            </div>
            <div class="menuBoxes__unit">
              <div class="menuBoxes__item menuBox menuBox--second">
                <p class="menuBox__title">資料請求</p>
                <div class="menuBox__icon menuBox__icon--requestInformation">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu-box-icon2.png" alt="">
                </div>
              </div>
              <div class="menuBoxes__item menuBox menuBox--third">
                <p class="menuBox__title">アクセス</p>
                <div class="menuBox__icon menuBox__icon--access">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu-box-icon3.png" alt="">
                </div>
              </div>
            </div>
            <div class="menuBoxes__unit">
              <div class="menuBoxes__item menuBox menuBox--fourth">
                <p class="menuBox__title">LINE</p>
                <div class="menuBox__icon menuBox__icon--line">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu-box-icon4.png" alt="">
                </div>
              </div>
              <div class="menuBoxes__item menuBox menuBox--fifth">
                <p class="menuBox__title">お問合せ</p>
                <div class="menuBox__icon menuBox__icon--contact">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu-box-icon5.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <ul class="spNav__items">
            <li class="spNav__item">
              <p class="spNav__menu spNav__menu--language active js-spHeader-open"><span class="spNav__menu-language"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/menu-language-icon.png" alt=""></span>Language<span class="menuArrow active"></span></p>
              <div class="spNav__body js-spHeader-body">
                <ul class="spNav__body-items spNav-items">
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">日本語</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">インドネシア語</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">タイ語</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">ベトナム語</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">英語</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">韓国語</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">中国語（簡体）</a>
                  </li>
                  <li class="spNav-items__item">
                    <a href="<?php echo $top ?>" class="spNav-items__link">中国語（繁体）</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="spNav__item">
              <a href="<?php echo $top ?>" class="spNav__menu"><span class="spNav__menu-reference"></span>職業実践専門課程<span class="menuArrow menuArrow--right"></a>
            </li>
            <li class="spNav__item">
              <a href="<?php echo $top ?>" class="spNav__menu"><span class="spNav__menu-reference"></span>学校情報公開<span class="menuArrow menuArrow--right"></a>
            </li>
          </ul>
          <div class="spNav__snsBlock snsBlock">
            <a href="<?php echo $top ?>" class="snsBlock-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/sns-icon1.png" alt="">
            </a>
            <a href="<?php echo $top ?>" class="snsBlock-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/sns-icon2.png" alt="">
            </a>
            <a href="<?php echo $top ?>" class="snsBlock-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/sns-icon3.png" alt="">
            </a>
            <a href="<?php echo $top ?>" class="snsBlock-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/sns-icon4.png" alt="">
            </a>
            <a href="<?php echo $top ?>" class="snsBlock-icon">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/sns-icon5.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  
    