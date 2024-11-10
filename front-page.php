<?php get_header(); ?>

  <main>
    <section class="mv js-mv">
      <div class="mv__wrapper">
        <picture class="mv__image">
          <!-- ↓幅768px以上で表示↓ -->
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/mv-pc.jpg">
          <!-- ↓幅767以下で表示↓ -->
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/mv-sp.jpg" alt="">
        </picture>
        <h2 class="mv__body">
          <span class="mv__title">一生役立つ</span>
          <span class="mv__title">国家資格</span>
        </h2>
      </div>
      <div class="mv__circleBlock">
        <div class="mv__circleBox circleBox circleBox--first">
          <p class="circleBox__top">開校以来27年連続</p>
          <p class="circleBox__middleFirst">就職率</p>
          <p class="circleBox__bottomFirst">100<span class="circleBox__bottomFirst-sub">%</span></p>
        </div>
        <div class="mv__circleBox circleBox circleBox--second">
          <p class="circleBox__topSecond">JR新大阪駅<span class="circleBox__topSecond-sub">から</span></p>
          <p class="circleBox__bottom">徒歩<span class="circleBox__bottom-sub">3</span>分</p>
        </div>
        <div class="mv__circleBox circleBox circleBox--third">
          <p class="circleBox__top">文部科学大臣認定</p>
          <p class="circleBox__middle">職業実践専門課程</p>
          <p class="circleBox__bottom">認定校</span></p>
        </div>
      </div>
      <a href="<?php echo $top ?>" class="mv__banner">
        <picture class="mv__banner-image">
          <!-- ↓幅768px以上で表示↓ -->
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/mv-banner-pc.png">
          <!-- ↓幅767以下で表示↓ -->
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/mv-banner-sp.png" alt="">
        </picture>
      </a>
    </section>

    <div class="sectionOuter">
      <section class="advantage">
        <div class="advantage__inner inner">
          <div class="advantage__wrapper">
            <div class="advantage__header">
              <div class="advantage__header-icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/header-icon.png" alt="">
              </div>
              <h2 class="advantage__title">
                <span class="advantage__title-top">
                  大阪保健福祉専門学校<span class="advantage__title-middle">は</span><br>
                </span>
                <span class="advantage__title-bottom">
                  <span class="advantage__title-bg">国家資格<span class="advantage__title-small">と</span>就職</span><span class="advantage__title-small advantage__title-small--black">に</span><span class="advantage__title-gradation">強い！</span>
                </span>
              </h2>
            </div>
            <div class="advantage__body">
              <div class="advantage__body-inner inner">
                <div class="advantage__body-wrapper">
                  <div class="advantage__block advantageBlock advantageBlock--first">
                    <div class="advantageBlock__header">
                      <p class="advantageBlock__title">
                        1年<span class="advantageBlock__title-small">で</span><br class="u-mobile">
                        国家試験合格<span class="advantageBlock__title-small">を</span>目指せる<span class="advantageBlock__title-small">！</span>
                      </p>
                    </div>
                    <div class="advantageBlock__body">
                      <div class="advantageBlock__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/pass-rate1.jpg" alt="">
                      </div>
                      <div class="advantageBlock__image">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/pass-rate2.jpg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="advantage__unit">
                    <div class="advantage__block advantageBlock advantageBlock--second">
                      <div class="advantageBlock__header advantageBlock__header--sub">
                        <p class="advantageBlock__title">就職率<span class="advantageBlock__title-small">と</span>求人件数</p>
                      </div>
                      <div class="advantageBlock__body">
                        <picture class="advantageBlock__image advantageBlock__image--second">
                          <!-- ↓幅768px以上で表示↓ -->
                          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/employment-rate-pc.jpg">
                          <!-- ↓幅767以下で表示↓ -->
                          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/employment-rate-sp.jpg" alt="">
                        </picture>
                      </div>
                    </div>
                    <div class="advantage__block advantageBlock advantageBlock--third">
                      <div class="advantageBlock__header advantageBlock__header--sub">
                        <p class="advantageBlock__title">グループ校連携<span class="advantageBlock__title-small">で安心</span></p>
                      </div>
                      <div class="advantageBlock__body">
                        <picture class="advantageBlock__image advantageBlock__image--third">
                          <!-- ↓幅768px以上で表示↓ -->
                          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/group-school-pc.jpg">
                          <!-- ↓幅767以下で表示↓ -->
                          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/group-school-sp.jpg" alt="">
                        </picture>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="course top-course"> 
        <div class="course__inner inner">
          <div class="course__wrapper">
            <div class="course__sectionHeader sectionHeader">
              <h2 class="sectionHeader__title">COURSE</h2>
              <p class="sectionHeader__subTitle">学科紹介</p>
            </div>
            <div class="course__courseCards courseCards">
              <a href="<?php echo $top ?>" class="courseCards__card courseCard courseCard--first">
                <p class="courseCard__tag">昼間3年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc1.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp1.jpg" alt="">
                </picture>
                <div class="courseCard__body">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category">看護学科</h3>
                    <p class="courseCard__text">「看護師になる」のもっと先をいく<br class="u-desktop">“未来志向の看護師”に</p>
                  </div>
                  <div class="courseCard__footer">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title">めざす職業</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text"><span class="u-desktop">・</span>看護師</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text"><span class="u-desktop">・</span>助産師</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text"><span class="u-desktop">・</span>保健師など</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・病院・クリニック・福祉施設</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・訪問介護ステーション など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="courseCards__card courseCard">
                <p class="courseCard__tag courseCard__tag--blue">昼間2年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc2.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp2.jpg" alt="">
                </picture>
                <div class="courseCard__body courseCard__body--blue">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category courseCard__category--blue">介護福祉科</h3>
                    <p class="courseCard__text">+αのスキルと資格を持ち、<br class="u-desktop">人の夢を叶える介護福祉士に</p>
                  </div>
                  <div class="courseCard__footer courseCard__footer--blue">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title courseCard__block-title--blue">めざす職業</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--blue"><span class="u-desktop">・</span>介護福祉士</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--blue"><span class="u-desktop">・</span>ケアマネージャー など</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title courseCard__block-title--blue">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・福祉施設</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・病院 など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="courseCards__card courseCard">
                <p class="courseCard__tag courseCard__tag--green">昼間4年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc3.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp3.jpg" alt="">
                </picture>
                <div class="courseCard__body courseCard__body--green">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category courseCard__category--green">社会福祉科</h3>
                    <p class="courseCard__text">関西唯一の4年制専門学校で<br class="u-desktop">社会福祉士・精神保健福祉士を目指す</p>
                  </div>
                  <div class="courseCard__footer courseCard__footer--green">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title courseCard__block-title--green">めざす職業</p>
                      <ul class="courseCard__block-list courseCard__block-list--left">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--green"><span class="u-desktop">・</span>社会福祉士<span class="u-desktop">　・精神保健福祉士</span></p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--green">精神保健福祉士</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--green"><span class="u-desktop">・</span>生活相談員<span class="u-desktop">　・医療ソーシャルワーカー</span></p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--green">医療ソーシャルワーカー</p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--green">・生活支援員</p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--green">・スクールソーシャルワーカー</p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--green">・児童福祉司　など</p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--green"><span class="u-desktop">・</span>生活支援員など</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title courseCard__block-title--green">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・行政機関　・学校</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・福祉施設　・病院 など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="courseCards__card courseCard">
                <p class="courseCard__tag courseCard__tag--pink">昼主２年制+専攻科1年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc4.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp4.jpg" alt="">
                </picture>
                <div class="courseCard__body courseCard__body--pink">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category courseCard__category--pink">保健保育科</h3>
                    <p class="courseCard__text">実践力と子どもへの愛を備えた<br class="u-desktop">保育士・幼稚園教諭を育む</p>
                  </div>
                  <div class="courseCard__footer courseCard__footer--pink">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title courseCard__block-title--pink">めざす職業</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--pink"><span class="u-desktop">・</span>保育士<span class="u-desktop">・幼稚園教諭 など</span></p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--pink">幼稚園教諭 など</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title courseCard__block-title--pink">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・保育園、企業　・病院内の保育所</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・児童養護施設、乳児院</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・障がい児・者支援施設　・幼稚園</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・認定こども園</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・民間の託児事業所、商業施設内の託児施設など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="courseCards__card courseCard">
                <p class="courseCard__tag courseCard__tag--light-blue">夜主コース2年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc5.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp5.jpg" alt="">
                </picture>
                <div class="courseCard__body courseCard__body--light-blue">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category courseCard__category--light-blue">保健保育科</h3>
                    <p class="courseCard__text">関西唯一、夜2年で学び、<br class="u-desktop">卒業と同時に保育士資格取得</p>
                  </div>
                  <div class="courseCard__footer courseCard__footer--light-blue">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title courseCard__block-title--light-blue">めざす職業</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--light-blue"><span class="u-desktop">・</span>保育士</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title courseCard__block-title--light-blue">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・保育園、企業　・病院内の保育所</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・児童養護施設、乳児院</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・障がい児・者支援施設　・幼稚園</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・民間の託児事業所、商業施設内の託児施設など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="courseCards__card courseCard">
                <p class="courseCard__tag courseCard__tag--purple">夜間１年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc6.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp6.jpg" alt="">
                </picture>
                <div class="courseCard__body courseCard__body--purple">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category courseCard__category--purple">精神保健福祉科</h3>
                    <p class="courseCard__text">１年で“メンタルヘルス × 福祉”の<br class="u-desktop">プロになる！</p>
                  </div>
                  <div class="courseCard__footer courseCard__footer--purple">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title courseCard__block-title--purple">めざす職業</p>
                      <ul class="courseCard__block-list courseCard__block-list--left">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>精神科ソーシャルワーカー</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>相談支援専門員<span class="u-desktop">　・生活支援員　・就労支援員</span></p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>メンタルヘルスソーシャルワーカー</p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>スクールソーシャルワーカー</p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>・行政機関（福祉職）  など</p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>生活支援員</p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--purple"><span class="u-desktop">・</span>就労支援員など</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title courseCard__block-title--purple">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・精神科病院/クリニック</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・障がい福祉サービス事業所</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・就労支援事業所　・行政機関　・学校　など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="courseCards__card courseCard">
                <p class="courseCard__tag courseCard__tag--yellow">夜間１年制</p>
                <picture class="courseCard__image">
                  <!-- ↓幅768px以上で表示↓ -->
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/course-pc7.jpg">
                  <!-- ↓幅767以下で表示↓ -->
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/course-sp7.jpg" alt="">
                </picture>
                <div class="courseCard__body courseCard__body--yellow">
                  <div class="courseCard__header">
                    <h3 class="courseCard__category courseCard__category--yellow">社会福祉専攻科</h3>
                    <p class="courseCard__text">多様なフィールドで活躍できる<br class="u-desktop">“社会福祉士”を１年で目指す</p>
                  </div>
                  <div class="courseCard__footer courseCard__footer--yellow">
                    <div class="courseCard__block">
                      <p class="courseCard__block-title courseCard__block-title--yellow">めざす職業</p>
                      <ul class="courseCard__block-list courseCard__block-list--left">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--yellow"><span class="u-desktop">・</span>生活相談員<span class="u-desktop">　・生活支援員</span></p>
                        </li>
                        <li class="courseCard__block-item u-mobile">
                          <p class="courseCard__block-text courseCard__block-text--yellow">生活支援員</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--yellow"><span class="u-desktop">・</span>医療ソーシャルワーカー</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text courseCard__block-text--yellow"><span class="u-desktop">・</span>地域福祉活動専門員<span class="u-mobile">など</span></p>
                        </li>
                        <li class="courseCard__block-item u-desktop">
                          <p class="courseCard__block-text courseCard__block-text--yellow">・スクールソーシャルワーカーなど</p>
                        </li>
                      </ul>
                    </div>
                    <div class="courseCard__block courseCard__block--second u-desktop">
                      <p class="courseCard__block-title courseCard__block-title--yellow">活躍のフィールド</p>
                      <ul class="courseCard__block-list">
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・障がい者福祉サービス事業所</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・就労支援事業所</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・母子生活支援施設/児童福祉施設</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・病院/クリニック　・高齢者福祉サービス事業所</p>
                        </li>
                        <li class="courseCard__block-item">
                          <p class="courseCard__block-text">・社会福祉協議会　・行政機関 など</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
              <a href="<?php echo $top ?>" class="course__contents courseContents">
                <div class="courseContents__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/course-contents.jpg" alt="">
                </div>
                <div class="courseContents__content">
                  <h3 class="courseContents__title">通信教育科はこちら</h3>
                  <div class="courseContents__body">
                    <h4 class="courseContents__subTitle">看護通信教育科</h4>
                    <p class="courseContents__text">
                      仕事を続けながら２年間で
                      看護師へ。<br>
                      准看護師の方のための<br class="u-mobile">
                      通信教育課程です。
                    </p>
                    <span class="menuArrow menuArrow--courseContents"></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

    </div>
    <section class="schoolGuide">
      <div class="schoolGuide__wrapper">
        <div class="schoolGuide__openCampus">
          <div class="schoolGuide__openCampus-inner inner">
            <div class="schoolGuide__openCampus-speechBubble">
              <p class="schoolGuide__openCampus-text">ダミータイトルです。バナーのリンク先紹介</p>
            </div>
            <a href="<?php echo $top ?>" class="schoolGuide__openCampus-banner">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/openCampus-banner.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="schoolGuide__inner inner">
        <div class="schoolGuide__materialsRequest">
          <div class="schoolGuide__materialsRequest-block">
            <a href="<?php echo $top ?>" class="schoolGuide__materialsRequest-box">
              <div class="schoolGuide__materialsRequest-icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/materialsRequest-icon.png" alt="">
              </div>
              <p class="schoolGuide__materialsRequest-text">
                資料請求は<br>
                こちら
              </p>
              <span class="menuArrow menuArrow--materialsRequest"></span>
            </a>
          </div>
        </div>
        <div class="schoolGuide__line lineBlock">
          <div class="lineBlock__header">
            <h4 class="lineBlock__title">公式LINEのココが便利！</h4>
          </div>
          <div class="lineBlock__cards lineCards">
            <div class="lineCards__card lineCard">
              <div class="lineCard__icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/line-number1.png" alt="">
              </div>
              <div class="lineCard__body">
                <p class="lineCard__text">
                  気になることがすぐ解決！<br>
                  気軽に何でも質問OK!
                </p>
              </div>
            </div>
            <div class="lineCards__card lineCard">
              <div class="lineCard__icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/line-number2.png" alt="">
              </div>
              <div class="lineCard__body">
                <p class="lineCard__text">
                  イベントの開催情報を<br>
                  見逃さない！
                </p>
              </div>
            </div>
            <div class="lineCards__card lineCard">
              <div class="lineCard__icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/line-number3.png" alt="">
              </div>
              <div class="lineCard__body">
                <p class="lineCard__text">
                  願書の締め切りを<br>
                  お知らせ！
                </p>
              </div>  
            </div>
            <div class="lineCards__card lineCard">
              <div class="lineCard__icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/line-number4.png" alt="">
              </div>
              <div class="lineCard__body">
                <p class="lineCard__text">
                  オープンキャンパス<br>
                  簡単申し込み！
                </p>
              </div>  
            </div>
            <div class="lineCards__card lineCard">
              <div class="lineCard__icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/line-number5.png" alt="">
              </div>
              <div class="lineCard__body">
                <p class="lineCard__text">
                  親子で見られる！<br>
                  カンタン資料請求
                </p>
              </div>  
            </div>
            <div class="lineCards__card lineCard">
              <div class="lineCard__icon">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/line-number6.png" alt="">
              </div>
              <div class="lineCard__body">
                <p class="lineCard__text">
                  ご希望の学科別お役立ち<br>
                  コラム定期配信！
                </p>
              </div>  
            </div>
          </div>
          <div class="lineBlock__button">
            <a href="<?php echo $top ?>" class="buttonLine">
              友達登録は<br class="u-mobile">こちらから<span class="menuArrow menuArrow--line"></span>
            </a>
          </div>

        </div>
      </div>
    </section>

    <section class="message top-message">
      <div class="message__inner inner">
        <div class="message__wrapper">
          <div class="message__sectionHeader sectionHeader">
            <h2 class="sectionHeader__title sectionHeader__title--openCampus">MESSAGE</h2>
            <p class="sectionHeader__subTitle">先輩からのメッセージ</p>
          </div>
          <div class="message__body">
            <div class="message__cards messageCards">
              <?php 
                $message_query = new WP_Query(
                  array(
                  'post_type'      => 'message',
                  'posts_per_page' => 6,
                  )
                );
              ?>
              <?php if ( $message_query->have_posts() ) : ?>
              <?php while ( $message_query->have_posts() ) : ?>
              <?php $message_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="messageCards__card messageCard">
                <?php 
                  $terms = get_the_terms($post->ID, 'message_category');
                  if ($terms && !is_wp_error($terms)) { // $terms が配列またはオブジェクトであることを確認
                    foreach ($terms as $term) {
                      $term_bg_color = get_term_meta($term->term_id, 'background_color', true); // 各メッセージカテゴリーの背景色を取得
                      echo '<p class="messageCard__category" style="background-color: ' . esc_attr($term_bg_color) . ';">';
                      echo esc_html($term->name); // 出力をエスケープ
                      echo '</p>';
                    }
                  }
                ?>
                <div class="messageCard__image">
                  <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php } else { ?>
                  <?php } ?>
                </div>
                <p class="messageCard__name"><?php the_title(); ?></p>
                <?php
                  // ブロックデータを取得
                  $blocks = parse_blocks(get_the_content());
                  foreach ($blocks as $block) {
                    if ($block['blockName'] === 'lazyblock/message') {
                      // 'message-text' が単なる文字列である場合
                      $message_text = $block['attrs']['message-text'];
                      if (!empty($message_text)) {
                          echo '<p class="messageCard__text"><span class="menuArrow menuArrow--message"></span>';
                          echo esc_html($message_text); // 変数を正しく出力
                          echo '</p>';
                      }
                      break; // 最初の該当するブロックだけを処理したい場合
                    }
                  }
                ?>
              </a>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif;  ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="openCampus">
      <div class="openCampus__inner inner">
        <div class="openCampus__wrapper">
          <div class="openCampus__logo">
            <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/open-campus-logo.png" alt="">
          </div>
          <div class="openCampus__sectionHeader sectionHeader sectionHeader--center">
            <h2 class="sectionHeader__title sectionHeader__title--openCampus">OPEN CAMPUS</h2>
            <p class="sectionHeader__subTitle">オープンキャンパスに行こう！</p>
          </div>
          <div class="openCampus__body">
            <?php
              // ブロックデータを取得
              $blocks = parse_blocks(get_the_content());
              foreach ($blocks as $block) {
                if ($block['blockName'] === 'lazyblock/open-campus') { ///// "sns-banner"の部分が名前 /////
                  $openCampus_loop = json_decode(urldecode($block['attrs']['open-campus-loop']), true); ///// "susBanner-images"の部分がループ名 /////
                  if (!empty($openCampus_loop)) {
                    foreach ($openCampus_loop as $openCampus_item) {
                      echo '<a href="' . esc_url($openCampus_item['open-campus-link']) . '" class="openCampus__banner">';
                      echo '<img src="' . esc_url($openCampus_item['open-campus-image']['url']) . '" alt="">';
                      echo '</a>';
                    }
                  }
                }
              }
            ?> 
          </div>
          <div class="openCampus__button">
            <a href="<?php echo $top ?>" class="button">イベント一覧はこちら</a>
          </div>
        </div>
      </div>
    </section>

    <section class="news">
      <div class="news__inner inner">
        <div class="news__wrapper">
          <div class="news__twoColumn news-twoColumn">
            <div class="news-twoColumn__block">
              <div class="news-twoColumn__sectionHeader sectionHeader">
                <h2 class="sectionHeader__title">NEWS</h2>
                <p class="sectionHeader__subTitle">お知らせ</p>
              </div>
              <ul class="news-twoColumn__list">
                <?php 
                  $news_query = new WP_Query(
                    array(
                      'post_type'      => 'news',
                      'posts_per_page' => 4,
                    )
                  );
                ?>
                <?php if ( $news_query->have_posts() ) : ?>
                <?php while ( $news_query->have_posts() ) : ?>
                <?php $news_query->the_post(); ?>
                <li class="news-twoColumn__item">
                  <a href="<?php the_permalink(); ?>" class="news-twoColumn__link">
                    <?php the_title(); ?><span class="menuArrow menuArrow--news"></span>
                  </a>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif;  ?>
              </ul>
            </div>
            <picture class="news-twoColumn__image">
              <!-- ↓幅768px以上で表示↓ -->
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/news-pc.jpg">
              <!-- ↓幅767以下で表示↓ -->
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/news-sp.jpg" alt="">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section class="topics top-topics">
      <div class="topics__inner inner">
        <div class="topics__wrapper">
          <div class="topics__sectionHeader sectionHeader sectionHeader--center">
            <h2 class="sectionHeader__title">TOPICS</h2>
            <p class="sectionHeader__subTitle">注目のトピック！</p>
          </div>
        </div>
      </div>
      <div class="topics__body">
        <div class="topics__body-inner inner">
          <div class="topics__body-wrapper">
            <div class="topics__swiper swiper js-swiperTopics">
              <div class="topics__swiper-wrapper swiper-wrapper">
                <?php
                  $topics_query = new WP_Query(
                    array(
                      'post_type'      => 'topics',
                      'posts_per_page' => 5,
                    )
                  );
                ?>
                <?php if ( $topics_query->have_posts() ) : ?>
                <?php while ( $topics_query->have_posts() ) : ?>
                <?php $topics_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="topics__image swiper-slide">
                  <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('full'); ?>
                  <?php } else { ?>
                  <?php } ?>
                </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif;  ?>
              </div>
            </div>
            <div class="topics__swiper-button-prev swiper-button-prev"></div>
            <div class="topics__swiper-button-next swiper-button-next"></div>
          </div>
          <div class="topics__swiper-pagination swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section class="instagram top-instagram">
      <div class="instagram__inner inner">
        <div class="instagram__wrapper">
          <div class="blog__sectionHeader sectionHeader sectionHeader--center">
            <h2 class="sectionHeader__title">Instagram</h2>
            <p class="sectionHeader__subTitle">学生生活＆最新情報をチェック！</p>
          </div>
        </div>
      </div>
      <div class="instagram__body">
        <div class="instagram__body-inner">
          <div class="instagram__swiper swiper js-swiperInstagram">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="instagram__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram1.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="instagram__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram2.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="instagram__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram3.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="instagram__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram4.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="instagram__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram5.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="instagram__image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram6.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="instagram__button">
          <a href="<?php echo $top ?>" class="button">インスタグラムはこちら<span class="menuArrow menuArrow--button"></a>
        </div>
      </div>
    </section>

    <section class="blog top-blog">
      <div class="blog__inner inner">
        <div class="blog__wrapper">
          <div class="blog__sectionHeader sectionHeader sectionHeader--center">
            <h2 class="sectionHeader__title">BLOG</h2>
            <p class="sectionHeader__subTitle">ダミーサブタイトルです</p>
          </div>
        </div>
      </div>
      <div class="blog__swiperArea">
        <div class="blog__swiperArea-inner inner">
          <div class="blog__swiperArea-wrapper">
            <div class="blog__swiper swiper js-swiperBlog">
              <div class="blog__cards blogCards swiper-wrapper">
                <?php
                  echo '<!-- User Agent: ' . $_SERVER['HTTP_USER_AGENT'] . ' -->';
                  // デバッグ用: モバイル判定の結果を表示
                  if (wp_is_mobile()) {
                    echo '<!-- Mobile detected -->';
                  } else {
                    echo '<!-- Desktop detected -->';
                  }
                  // スマホの場合とPCの場合の分岐
                  $num = wp_is_mobile() ? 3 : 6;
                  // デバッグ用: クエリ引数を表示
                  $args = array(
                      'post_type'      => 'post',
                      'posts_per_page' => $num, // ここに上で設定した数字が代入される
                  );
                  $blog_query = new WP_Query($args);
                  if ($blog_query->have_posts()) :
                  while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                <div class="swiper-slide">
                  <a href="<?php the_permalink(); ?>" class="blogCards__card blogCard">
                    <figure class="blogCard__image">
                      <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail('full'); ?>
                      <?php } ?>
                    </figure>
                    <div class="blogCard__header">
                      <time class="blogCard__date"><?php the_time('Y.m.d'); ?></time>
                      <?php
                        $category = get_queried_object();
                        $background_color = get_term_meta($category->term_id, 'background_color', true);
                      ?>
                      <div class="blog__categories categories">
                        <?php
                          $terms = get_the_terms(get_the_ID(), 'category');
                          if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                              $term_bg_color = get_term_meta($term->term_id, 'background_color', true); // 各カテゴリーの背景色を取得
                              echo '<div class="categories__category category">';
                              echo '<p class="category__name is-active" style="background-color: ' . esc_attr($term_bg_color) . ';">';
                              echo esc_html($term->name);
                              echo '</p></div>';
                            }
                          }
                        ?>
                      </div>
                    </div>
                    <p class="blogCard__title"><?php the_title(); ?></p>
                  </a>
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif;  ?>
              </div>
            </div>
          </div>
          <div class="blog__swiper-button-prev swiper-button-prev"></div>
        </div>
        <div class="blog__swiper-pagination swiper-pagination"></div>
      </div>
      <div class="blog__button">
        <a href="<?php echo $top ?>" class="button">イベント詳細はこちら<span class="menuArrow menuArrow--button"></a>
      </div>
    </section>

    <section class="sns top-sns">
      <div class="sns__inner inner">
        <div class="sns__wrapper">
          <div class="sectionHeader sectionHeader--center">
            <h2 class="sectionHeader__title">SNS</h2>
          </div>
          <div class="sns__block snsBlock">
            <div class="snsBlock__caption">
              <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/sns-caption.png" alt="">
            </div>
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
      <div class="sns__bannerSlide snsSlide">
        <!-- Swiper START -->
        <div class="snsSlide__swiper swiper js-swiperBanner">
          <!-- メイン表示部分 -->
          <div class="snsSlide__swiper-wrapper swiper-wrapper">
              <!-- 各スライド -->
            <?php
              // ブロックデータを取得
              $blocks = parse_blocks(get_the_content());
              foreach ($blocks as $block) {
                if ($block['blockName'] === 'lazyblock/sns-banner') {
                  $snsBanner_loop = json_decode(urldecode($block['attrs']['snsBanner-loop']), true);
                  if (!empty($snsBanner_loop)) {
                    foreach ($snsBanner_loop as $snsBanner_item) {
                      echo '<a href="' . esc_url($snsBanner_item['snsBanner-link']) . '" class="snsSlide__swiper-slide swiper-slide">';
                      echo '<img src="' . esc_url($snsBanner_item['snsBanner-image']['url']) . '" alt="">';
                      echo '</a>';
                    }
                  }
                }
              }
            ?>
          </div>
        </div>
        <div class="snsSlide__swiper-pagination swiper-pagination"></div>
        <!-- Swiper END -->
      </div>
    </section>
  </main>

<?php get_footer(); ?>





<!-- <section class="about top-about">
      <div class="about__inner inner">
        <div class="cards">
          <a href="#" class="cards__card card">
            <figure class="card__image">
              <img src="/assets/images/common/ダミー1.png" alt="">
            </figure>
            <div class="card__header">
              <time class="card__date">20XX.XX/XX</time>
              <p class="card__title">タイトル</p>
            </div>
            <div class="card__body">
              <p class="card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </p>
            </div>
          </a>
        </div>
        <a href="<?php echo $top ?>" class="button">イベント詳細はこちら</a>
      </div>
    </section> -->