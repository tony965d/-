  <?php 
    global $top;
  ?>  

  <footer class="footer top-footer">
    <div class="footer__container">
      <div class="footer__inner inner">
        <div class="footer__logo">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/logo.png" alt="">
        </div>
        <div class="footer__block">
          <div class="footer__twoColumn footer-twoColumn">
            <picture class="footer-twoColumn__image">
              <!-- ↓幅768px以上で表示↓ -->
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/footer-school-pc.jpg">
              <!-- ↓幅767以下で表示↓ -->
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/footer-school-sp.jpg" alt="">
            </picture>
            <div class="footer-twoColumn__content">
              <p class="footer-twoColumn__text">
                〒532-0003<br>
                大阪市淀川区宮原1-2-47（新大阪駅前）<br>
                TEL.06-6396-2941（代）<br>
                FAX.06-6397-1841
              </p>
              <div class="footer-twoColumn__body">
                <a href="<?php echo $top ?>" class="squareButton">アクセス<span class="menuArrow menuArrow--access"></span></a>
                <a href="<?php echo $top ?>" class="mediumButton">
                  <span class="mediumButton__icon"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer-mail-icon.png" alt=""></span>mail@ochw.ac.jp
                </a>
                <a href="<?php echo $top ?>" class="mediumButton mediumButton--tel">
                <span class="mediumButton__icon"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/footer-tel-icon.png" alt=""></span>0120-128-294</a>
              </div>
            </div>
          </div>
          <nav class="footer__nav footerNav">
            <ul class="footerNav__items">
              <li class="footerNav__item footerNav__item--first">
                <a href="#" class="footerNav__title">学校紹介<span class="menuArrow menuArrow--footerNav u-mobile"></span></a>
                <ul class="footerNav__menu footerNav-menu">
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">建学の理念5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">施設・設備5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">年間スケジュール5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">在校生の1日5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">卒業生Voice5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">リンク5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">情報公開5</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">職業実践専門課程 認定校5</a>
                  </li>
                </ul>
              </li>
              <li class="footerNav__item">
                <a href="#" class="footerNav__title">学科紹介<span class="menuArrow menuArrow--footerNav u-mobile"></span></a>
                <ul class="footerNav__menu footerNav-menu">
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">看護学科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">介護福祉科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">社会福祉科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">保健保育科 昼主コース</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">保健保育科 夜主コース</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">精神保健福祉科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">社会福祉専攻科</a>
                  </li>
                </ul>
              </li>
              <li class="footerNav__item">
                <a href="#" class="footerNav__title">入学試験・学費<span class="menuArrow menuArrow--footerNav u-mobile"></span></a>
                <ul class="footerNav__menu footerNav-menu">
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">募集学科・応募資格</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">入試案内：看護学科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">入試案内：介護福祉科 / 社会福祉科 / 保健保育科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">入試案内：精神保健福祉科・社会福祉専攻科</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">学費一覧</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">学費サポート</a>
                  </li>
                </ul>
              </li>
              <li class="footerNav__item">
                <a href="#" class="footerNav__title">就職情報<span class="menuArrow menuArrow--footerNav u-mobile"></span></a>
                <ul class="footerNav__menu footerNav-menu">
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">就職サポート</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">就職先一覧</a>
                  </li>
                </ul>
              </li>
              <li class="footerNav__item">
                <a href="#" class="footerNav__title">訪問者別<span class="menuArrow menuArrow--footerNav u-mobile"></span></a>
                <ul class="footerNav__menu footerNav-menu">
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">高校1・２年生の方へ</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">社会人・大学生・短大生の方へ</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">遠方の方へ</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">保護者の方へ</a>
                  </li>
                </ul>
              </li>
              <li class="footerNav__item">
                <ul class="footerNav__menu footerNav-menu">
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">通信教育科をご希望の方へ</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">卒業生の方へ</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">採用担当の方へ</a>
                  </li>
                  <li class="footerNav-menu__item">
                    <a href="<?php echo $top ?>" class="pcNav-menu__link">高校教員の方へ</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="footer__schoolArea schoolArea">
      <div class="schoolArea__inner inner">
        <div class="schoolArea__wrapper">
          <ul class="schoolArea__list">
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">学校法人大阪滋慶学園</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">滋慶医療科学大学</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">滋慶医療科学大学大学院</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">大阪医療福祉専門学校</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">大阪ハイテクノロジー専門学校</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">大阪医療技術学園専門学校</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">大阪医療看護専門学校</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">美作市スポーツ医療看護専門学校</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">出雲医療看護専門学校</a>
            </li>
            <li class="schoolArea__item">
              <a href="<?php echo $top ?>" class="schoolArea__link">鳥取市医療看護専門学校</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer__inner inner">
        <nav class="footer__bottomNav footer-bottomNav">
          <ul class="footer-bottomNav__menu">
            <li class="footer-bottomNav__item footer-bottomNav__item--first">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">サイトマップ</a>
            </li>
            <li class="footer-bottomNav__item">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">プライバシー</a>
            </li>
            <li class="footer-bottomNav__item">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">ソーシャルメディアポリシー</a>
            </li>
            <li class="footer-bottomNav__item u-mobile">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">職業体験セミナー</a>
            </li>
            <li class="footer-bottomNav__item u-mobile">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">職業体験ネット</a>
            </li>
            <li class="footer-bottomNav__item u-mobile">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">特定商取引に関する法律に基づく表記</a>
            </li>
            <li class="footer-bottomNav__item u-mobile">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">お問い合わせ</a>
            </li>
            <li class="footer-bottomNav__item u-mobile">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">法人について</a>
            </li>
            <li class="footer-bottomNav__item u-mobile">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">滋慶学園グループ</a>
            </li>
            <li class="footer-bottomNav__item u-desktop">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">特定商取引に関する法律に基づく表記</a>
            </li>
            <li class="footer-bottomNav__item u-desktop">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">お問い合わせ</a>
            </li>
            <li class="footer-bottomNav__item u-desktop">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">法人について</a>
            </li>
            <li class="footer-bottomNav__item u-desktop">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">滋慶学園グループ</a>
            </li>
            <li class="footer-bottomNav__item footer-bottomNav__item--return u-desktop">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">職業体験セミナー</a>
            </li>
            <li class="footer-bottomNav__item u-desktop">
              <a href="<?php echo $top ?>" class="footer-bottomNav__link">職業体験ネット</a>
            </li>
          </ul>
        </nav>
        <div class="footer__copyright">
          <small>
            大阪保健福祉専門学校<br class="u-mobile">
            看護師・介護福祉士・社会福祉士・精神保健福祉士・保育士をめざすなら<br class="u-mobile">
            © All rights reserved.
          </small>
        </div>
      </div>
    </div>
    <div class="footer__pageTop pageTop js-pageTop">
      <p class="pageTop__text">
        PAGE<br>
        TOP
      </p>
      <div class="pageTop__arrow">
        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/arrow.png" alt="">
      </div>
    </div>
  </footer>
  <div class="ctaBlock">
    <div class="ctaBlock__contents">
      <a href="<?php echo $top ?>" class="ctaBlock__box">
        <p class="ctaBlock__text">オープンキャンパス</p>
        <div class="ctaBlock__icon">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/open-campus-icon.png" alt="">
        </div>
      </a>
      <a href="<?php echo $top ?>" class="ctaBlock__box ctaBlock__box--requestInformation">
        <p class="ctaBlock__text ctaBlock__text--requestInformation">資料請求</p>
        <div class="ctaBlock__icon ctaBlock__icon--requestInformation">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/request-information-icon.png" alt="">
        </div>
      </a>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>