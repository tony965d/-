<?php get_header(); ?>

  <main>
    <section class="mv js-mv">
      <div class="mv__wrapper">
        <picture class="mv__image mv__image--open-campus">
          <!-- ↓幅768px以上で表示↓ -->
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/pc/open-campus-mv-pc.jpg">
          <!-- ↓幅767以下で表示↓ -->
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/sp/open-campus-mv-sp.jpg" alt="">
        </picture>
        <h2 class="mv__body mv__body--open-campus">
          <span class="mv__title mv__title--open-campus">OPEN</span>
          <span class="mv__title mv__title--open-campus">CAMPUS</span>
          <span class="mv__subTitle">オープンキャンパス</span>
        </h2>
        <div class="mv__icon">
          <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/open-campus-mv-icon.png" alt="">
        </div>
      </div>
    </section>

    <section class="lead">
      <div class="lead__inner inner">
        <div class="lead__wrapper">
          <ul class="lead__menu">
            <li class="lead__item">
              <a href="<?php echo $top ?>" class="lead__link">介護福祉科 / 社会福祉科 / 保健保育科<span class="menuArrow menuArrow--lead"></span></a>
            </li>
            <li class="lead__item">
              <a href="<?php echo $top ?>" class="lead__link lead__link--red">看護学科<span class="menuArrow menuArrow--lead"></span></a>
            </li>
            <li class="lead__item">
              <a href="<?php echo $top ?>" class="lead__link lead__link--yellow">精神保健福祉科 / 社会福祉専攻科<span class="menuArrow menuArrow--lead"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="event top-event">
      <div class="event__inner inner">
        <div class="event__wrapper">
          <div class="message__sectionHeader sectionHeader sectionHeader--center">
            <h2 class="sectionHeader__title sectionHeader__title--event">EVENT LINEUP</h2>
            <p class="sectionHeader__subTitle">イベント一覧</p>
          </div>
          <div class="event__dot">
            <span class="dot"></span>
            <span class="dot dot--second"></span>
          </div>
        </div>
      </div>
      <div class="event__block eventBlock">
        <div class="eventBlock__container">
          <div class="eventBlock__inner inner">
            <div class="eventBlock__wrapper">
              <div class="eventBlock__header">
                <h4 class="eventBlock__category">介護福祉科 / 社会福祉科 / 保健保育科</h4>
                <h3 class="eventBlock__title">オープンキャンパス<span class="eventBlock__subTitle">（来校型）</span></h3>
              </div>
              <div class="eventBlock__banner">
                <p class="eventBlock__banner-caption">
                  オープンキャンパスにご参加いただいた高校2年生を対象に、LINE追加特典としてカフェチケットをプレゼントいたします。ぜひお立ち寄りください！
                </p>
                <div class="eventBlock__banner-image">
                  <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/event-banner.jpg" alt="">
                </div>
              </div>
              <div class="eventBlock__body">
                <div class="eventBlock__body-header">
                  <p class="eventBlock__body-title">開催日時<span class="eventBlock__body-subTitle">午前の部　10:00～12:30／午後の部　14:00～16:30</span></p>
                  <p class="eventBlock__body-title">開催内容<span class="eventBlock__body-subTitle">学校・学科説明/体験実習/校舎見学/学費・入試相談</span></p>
                </div>
                <div class="eventBlock__body-contents eventSchedule">
                  <ul class="eventBlock__schedule eventSchedule__list">
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/7（土）</p>
                        <div class="eventSchedule__timeBlock">
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">10:00〜</a>
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">14:00〜</a>
                        </div>
                      </div>
                    </li>
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/8（日）</p>
                        <div class="eventSchedule__timeBlock">
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">10:00〜</a>
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">14:00〜</a>
                        </div>
                      </div>
                      <div class="eventSchedule__caution">
                        <p class="eventSchedule__caution-text">※14:00～の部は、介護福祉科・保健保育科のみ開催します。</p>
                      </div>
                    </li>
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/14（土）</p>
                        <div class="eventSchedule__timeBlock">
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">10:00〜</a>
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">14:00〜</a>
                        </div>
                      </div>
                    </li>
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/15（日）</p>
                        <div class="eventSchedule__timeBlock">
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">14:00〜</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="eventSchedule__button">
                    <a href="<?php the_permalink(); ?>" class="eventSchedule-button">日程をもっと見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="event__block eventBlock eventBlock--red">
        <div class="eventBlock__container eventBlock__container--red">
          <div class="eventBlock__inner eventBlock__inner--red inner">
            <div class="eventBlock__wrapper">
              <div class="eventBlock__header">
                <h4 class="eventBlock__category eventBlock__category--red">看護学科</h4>
                <h3 class="eventBlock__title eventBlock__title--red">オープンキャンパス<span class="eventBlock__subTitle eventBlock__subTitle--red">（来校型）</span></h3>
              </div>
              <div class="eventBlock__body">
                <div class="eventBlock__body-header">
                  <p class="eventBlock__body-title eventBlock__body-title--red">開催日時<span class="eventBlock__body-subTitle">午前の部　10:00～12:30／午後の部　14:00～16:30</span></p>
                  <p class="eventBlock__body-title eventBlock__body-title--red">開催内容<span class="eventBlock__body-subTitle">学校・学科説明/体験実習/校舎見学/学費・入試相談</span></p>
                </div>
                <div class="eventBlock__body-contents eventSchedule">
                  <ul class="eventBlock__schedule eventSchedule__list">
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/7（土）</p>
                        <div class="eventSchedule__timeBlock eventSchedule__timeBlock--red">
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">10:00〜</a>
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">14:00〜</a>
                        </div>
                      </div>
                    </li>
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/14（土）</p>
                        <div class="eventSchedule__timeBlock eventSchedule__timeBlock--red">
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">10:00〜</a>
                          <a href="<?php the_permalink(); ?>" class="eventSchedule__time">14:00〜</a>
                        </div>
                      </div>
                    </li>
                    <li class="eventSchedule__item">
                      <div class="eventSchedule__item-block">
                        <p class="eventSchedule__date">9/15（日）</p>
                      </div>
                      <div class="eventSchedule__caution">
                        <p class="eventSchedule__caution-text">
                          ※14:★オープンキャンパスの開催はございませんが、<br>
                          14:00〜面接対策セミナー （詳細）を開催します。
                        </p>
                      </div>
                    </li>
                  </ul>
                  <div class="eventSchedule__button">
                    <a href="<?php the_permalink(); ?>" class="eventSchedule-button">日程をもっと見る</a>
                  </div>
                </div>
              </div>
            </div>
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

    <section class="faq">
      <div class="wave-background"></div>
      <div class="faq__inner inner">
        <div class="faq__wrapper">
          <div class="faq__sectionHeader sectionHeader">
            <h2 class="sectionHeader__title">FAQ</h2>
            <p class="sectionHeader__subTitle">よくある質問</p>
          </div>
          <div class="faq__body">
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
            <div class="faq__block faqBlock">
              <span class="faqBlock__button js-faqBlock-open"></span>
              <h3 class="faqBlock__title">タイトル</h3>
              <div class="faqBlock__body js-faqBlock-body">
                <p class="faqBlock__text">
                  答え文がここにきます。ダミー文です。文章がここに入ります。答え文がここにきます。
                  ダミー文です。文章がここに入ります。答え文がここにきます。ダミー文です。文章がここに入ります。
                  答え文がここにきます。ダミー文です。文章がここに入ります。
                </p>
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </section>

    <section class="openCampus openCampus--sub">
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

    <section class="course course--sub top-course"> 
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

    <section class="schoolGuide">
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
        <div class="instagram__body-inner inner">
          <div class="instagram__swiper swiper js-swiperInstagram">
            <div class="instagram__swiper-wrapper swiper-wrapper">
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram1.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram2.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram3.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram4.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram5.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram6.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram6.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram6.jpg" alt="">
              </div>
              <div class="instagram__image swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/instagram6.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="instagram__button">
          <a href="<?php echo $top ?>" class="button">インスタグラムはこちら<span class="menuArrow menuArrow--button"></a>
        </div>
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
