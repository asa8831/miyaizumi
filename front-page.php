<?php get_header(); ?>
<main>
  <section class="fv">
    <div class="fv__inner inner__basic">
      <div class="fv__txt">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php if (get_locale() == "ja") : ?>宮泉市オフィシャルサイト<?php else : ?>Miyaizumi City Official Site<?php endif; ?></a></h1>
      </div>
      <ul class="js-mainSlick">
        <li class="slick-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/fv1.jpg') ?>" alt=""></li>
        <li class="slick-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/fv2.jpg') ?>" alt=""></li>
        <li class="slick-slide"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/fv3.jpg') ?>" alt=""></li>
      </ul>
    </div>
  </section>

  <?php
  $args = array(
    'post_type' => 'column',
  );
  $customPosts = get_posts($args);
  ?>

  <section id="rec" class="recommend">
    <div class="recommend__inner inner__basic">
      <h2 class="section__ttl"><?php if (get_locale() == "ja") : ?>おすすめ情報＆コラム<?php else : ?>Pick Up&Column<?php endif; ?></h2>
      <ul class="js-subSlick subSlick">
        <?php if ($customPosts) : foreach ($customPosts as $customPost) : setup_postdata($customPost); 
        ?>
            <li class="slick-slide">
              <a href="<?php echo get_permalink($customPost->ID); ?>">
                <?php 
                // アイキャッチ画像を取得
                $thumbnail_id = get_post_thumbnail_id($customPost->ID);
                $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                if (get_post_thumbnail_id($customPost->ID)) {
                  echo '<img src="' . $thumb_url[0] . '" alt="アイキャッチ">';
                } else {
                  // アイキャッチ画像が登録されていなかったときの画像
                  echo '<img src="' . get_template_directory_uri() . '/img/noimage350.png" alt="アイキャッチ">';
                }
                ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif;
        wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>


  <section class="prologue js-bg">
    <div class="prologue__inner inner__basic">
      <article class="prologue__txt js-blur">
        <?php if (get_locale() == "ja") : ?>
          <p>誰もが心の中に"ふるさと"があります</p>
          <p>しかし、"ふるさと"とはなんでしょうか</p>
          <p>優しい思い出<br>頑張った出来事<br>涙のでる体験</p>
          <p>思い出すだけで心がギュッとなる<br>それがふるさとではないでしょうか</p>
          <p>あなたの第二のふるさととして心が震える体験をお届けしたい</p>
          <p>私たちはそんな思いでお待ちしております</p>
        <?php else : ?>
          <p>Everyone has a "hometown" in their heart</p>
          <p>But what is "hometown"?</p>
          <p>Tender memories<br>Events of hard work<br>Tearful experiences</p>
          <p>Just remembering it makes my heart squeak<br>Isn't that what a hometown is all about?</p>
          <p>We want to be your second home and bring you a mind-blowing experience</p>
          <p>We are waiting for you with this in mind</p>
        <?php endif; ?>
      </article>
      <article class="prologue__imgs">
        <div class="prologue__img1 js-fadeUp1"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/pro1.jpg') ?>" alt=""></div>
        <div class="prologue__img2 js-fadeUp2"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/pro2.jpg') ?>" alt=""></div>
        <div class="prologue__img3 js-fadeUp3"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/pro3.jpg') ?>" alt=""></div>
      </article>
    </div>
  </section>

  <section id="aba" class="about">
    <div class="about__inner inner__basic">
      <h2 class="section__ttl"><?php if (get_locale() == "ja") : ?>宮泉市はこんな街<?php else : ?>About Miyaizumi<?php endif; ?></h2>
      <p class="about__txt">
        <?php if (get_locale() == "ja") : ?>
          宮泉市とは、〇〇県の中心部に位置する市です。<br>
          元々、山からの美味しい湧水とそれによって取れる農作物が有名な土地で、「野菜と言えば」となると真っ先に人々の口から名前が挙げられるくらい、大変有名な土地でした。<br>採れた農作物は非常に味が濃く、甘かったため、朝廷への献上品として大変喜ばれたことから「宮廷の泉」という意味の「宮泉」という名前を時の天皇からいただいたと伝えられています。<br>現代になり、宮泉市は東北の中心として、人口100万人を有する大都市となりました。<br>山からの湧水は今でもこんこんと湧き出ており、美味しい野菜や、豊な温泉地、緑あふれる街並みを支えています。
        <?php else : ?>
          Miyazu City is located in the center of 〇〇 Prefecture.<br>Originally, the area was famous for its delicious spring water from the mountains and the crops grown there.<br>The crops were so rich in flavor and sweet that they were so highly prized as offerings to the imperial court that the emperor gave the area the name "Miyaspring," meaning "spring of the court.<br>In modern times, Miyazumi has become a large city with a population of 1 million, the center of the Northeast.<br>The spring water from the mountain is still gushing out and supporting delicious vegetables, bountiful hot springs, and verdant cityscapes.
        <?php endif; ?>
      </p>
      <div class="about__link">
        <a href="" class="btn"><?php if (get_locale() == "ja") : ?>これまで<?php else : ?>Past<?php endif; ?></a>
        <a href="" class="btn"><?php if (get_locale() == "ja") : ?>今<?php else : ?>Now<?php endif; ?></a>
        <a href="" class="btn"><?php if (get_locale() == "ja") : ?>これから<?php else : ?>Future<?php endif; ?></a>
      </div>

    </div>
  </section>

  <section class="model">
    <div class="model__inner inner__basic">
      <h2 class="section__ttl"><?php if (get_locale() == "ja") : ?>滞在プランモデル<?php else : ?>Stay Plan Model<?php endif; ?></h2>
      <ul class="js-subSlick2 subSlick">
        <li class="slick-slide"><a><img src="<?php echo esc_url(get_template_directory_uri() . '/img/model1.jpg') ?>" alt="">
            <p class="labelTxt">
              <?php if (get_locale() == "ja") : ?>満喫グルメの2日間<?php else : ?>Enjoy Meal for Two days<?php endif; ?>
            </p>
          </a></li>
        <li class="slick-slide"><a><img src="<?php echo esc_url(get_template_directory_uri() . '/img/model2.jpg') ?>" alt="">
            <p class="labelTxt"><?php if (get_locale() == "ja") : ?>週末癒しの一人旅<?php else : ?>Weekend Healing Solo Trip<?php endif; ?></p>
          </a></li>
        <li class="slick-slide"><a><img src="<?php echo esc_url(get_template_directory_uri() . '/img/model3.jpg') ?>" alt="">
            <p class="labelTxt"><?php if (get_locale() == "ja") : ?>家族の思い出の1ページ<?php else : ?>For a family memories<?php endif; ?></p>
          </a></li>
        <li class="slick-slide"><a><img src="<?php echo esc_url(get_template_directory_uri() . '/img/model4.jpg') ?>" alt="">
            <p class="labelTxt"><?php if (get_locale() == "ja") : ?>心が求める風景に出会う<?php else : ?>Meet the Impressive landscape<?php endif; ?></p>
          </a></li>
        <li class="slick-slide"><a><img src="<?php echo esc_url(get_template_directory_uri() . '/img/model5.jpg') ?>" alt="">
            <p class="labelTxt"><?php if (get_locale() == "ja") : ?>仲良しメンバーと<?php else : ?>With your Friends<?php endif; ?></p>
          </a></li>
      </ul>

    </div>
  </section>

  <section id="plan" class="support palla1">
    <div class="support__inner inner__basic">
      <h3 class="borderBtm__ttl">
        <?php if (get_locale() == "ja") : ?>旅行者に対する<br class="sp">宮泉市のコロナへの取り組み<?php else : ?>Miyazumi City's Corona Initiatives for Travelers<?php endif; ?>
      </h3>
      <p>
        <?php if (get_locale() == "ja") : ?>旅行者の方にも安心して宮泉市での滞在を楽しんでいただけるように、このような取り組みを行っています。<?php else : ?>We do this so that travelers can enjoy their stay in Miyazumi City with peace of mind.<?php endif; ?>
      </p>
      <ul class="support__panel js-fadeUpDelay-outer">
        <li class="js-fadeUpDelay">
          <h4>
            <?php if (get_locale() == "ja") : ?>「コロナ対策済店舗」の認定<?php else : ?>Certification as a "Corona-proof store"<?php endif; ?>
          </h4>
          <div class="support__panel--img"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/restaurant.png') ?>" alt=""></div><img src="" alt="">
          <p>
            <?php if (get_locale() == "ja") : ?>コロナ対策に対して宮泉市が規定した基準を満たした飲食店を「コロナ対策済店舗」と認定し、ステッカーをお配りしています。<?php else : ?>Restaurants that meet the standards set by Miyazumi City for corona countermeasures are certified as "corona-proofed restaurants" and receive a sticker.<?php endif; ?>
          </p>
          <a href="" class="btn">
            <?php if (get_locale() == "ja") : ?>コロナ対策<br>済店舗一覧<?php else : ?>List of Corona-measured stores<?php endif; ?>
          </a>

        </li>
        <li class="js-fadeUpDelay">
          <h4>
            <?php if (get_locale() == "ja") : ?>事前予約導入支援<?php else : ?>Support for introducing advance reservations<?php endif; ?>
          </h4>
          <div class="support__panel--img"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/booking.png') ?>" alt=""></div><img src="" alt="">
          <p>
            <?php if (get_locale() == "ja") : ?>開催されるイベントや観光施設について予約制の導入を推進し、安心して参加・来場できる場の提供を支援しています。<?php else : ?>We promote the introduction of a reservation system for events and tourist facilities to be held, and support the provision of places where people can participate and visit with peace of mind.<?php endif; ?>
          </p>
        </li>
        <li class="js-fadeUpDelay">
          <h4>
            <?php if (get_locale() == "ja") : ?>混雑の可視化<?php else : ?>Visualization of congestion<?php endif; ?>
          </h4>
          <div class="support__panel--img"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/graph.png') ?>" alt=""></div><img src="" alt="">
          <p>
            <?php if (get_locale() == "ja") : ?>市が設置したライブカメラ映像により、駅や観光地など混雑が予想される場所の混雑具合を場にいかずとも確認していただけます。また、ビッグデータを活用した混雑予測を配信し、密を避けて観光がしやすくしています。<?php else : ?>Live camera images installed by the city allow visitors to check congestion at stations, tourist attractions, and other places where congestion is expected without having to go to the site. In addition, the system delivers congestion forecasts using big data to make it easier for visitors to avoid congestion.<?php endif; ?>
          </p>
        </li>
        <li class="js-fadeUpDelay">
          <h4>
            <?php if (get_locale() == "ja") : ?>アルコール消毒液の設置<?php else : ?>Installation of alcohol disinfectant solutions in public institutions<?php endif; ?>
          </h4>
          <div class="support__panel--img"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/bottle.png') ?>" alt=""></div><img src="" alt="">
          <p>
            <?php if (get_locale() == "ja") : ?>アルコール消毒液を公共機関へ設置し、常に清潔で感染リスクの少ない市作りを目指しています。現在は1,235箇所へアルコール消毒液を設置しています。<?php else : ?>We have installed alcohol disinfectant solutions in public institutions, aiming to create a city that is always clean and has a low risk of infection. Currently, we have installed alcohol disinfectants in 1,235 locations.<?php endif; ?>
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section id="tro" class="trouble">
    <div class="trouble__inner inner__basic">
      <h2 class="section__ttl"><?php if (get_locale() == "ja") : ?>こんな時、困った時<?php else : ?>The case you're in trouble<?php endif; ?></h2>
      <div class="trouble__tabOuter">
        <ul class="trouble__tab">
          <li class="js-active"><a href="#fever"><?php if (get_locale() == "ja") : ?>発熱の疑い<?php else : ?>Suspicion of fever<?php endif; ?></a></li>
          <li><a href="#lost"><?php if (get_locale() == "ja") : ?>落とし物<?php else : ?>Something lost<?php endif; ?></a></li>
          <li><a href="#others"><?php if (get_locale() == "ja") : ?>その他<?php else : ?>Other Case<?php endif; ?></a></li>
        </ul>

        <div id="fever" class="trouble__tabArea js-active">
          <h3><?php if (get_locale() == "ja") : ?>発熱の疑い<?php else : ?>Suspicion of fever<?php endif; ?></a></h3>
          <dl>
            <dt>
              <?php if (get_locale() == "ja") : ?>コロナ総合相談ダイヤル<?php else : ?>Corona General Consultation Dial<?php endif; ?>
            </dt>
            <dd>022-334-6457</dd>
          </dl>
          <dl>
            <dt>
              <?php if (get_locale() == "ja") : ?>中里病院外来<?php else : ?>Nakasato Hospital<?php endif; ?>
            </dt>
            <dd>022-326-4235</dd>
            <dd>
              <?php if (get_locale() == "ja") : ?>宮泉市中里区5丁目6-2<?php else : ?>5-6-12 Nakasato MiyaizumiCity<?php endif; ?>
            </dd>
          </dl>
        </div>
        <div id="lost" class="trouble__tabArea">
          <h3><?php if (get_locale() == "ja") : ?>落とし物<?php else : ?>Something lost<?php endif; ?></a></h3>
          <dl>
            <dt>
              <?php if (get_locale() == "ja") : ?>落とし物総合案内所<?php else : ?>Lost and Found Information Desk<?php endif; ?>
            </dt>
            <dd>022-654-7746</dd>
          </dl>
          <dl>
            <dt>
              <?php if (get_locale() == "ja") : ?>山王警察署<?php else : ?>Sanno Police Station<?php endif; ?>
            </dt>
            <dd>022-111-6654</dd>
            <dd>
              <?php if (get_locale() == "ja") : ?>宮泉市山王町3-2-123<?php else : ?>3-2-123 Sannou MiyaizumiCity<?php endif; ?>
            </dd>
          </dl>
        </div>
        <div id="others" class="trouble__tabArea">
          <h3><?php if (get_locale() == "ja") : ?>その他<?php else : ?>Other Case<?php endif; ?></a></h3>
          <dl>
            <dt>
              <?php if (get_locale() == "ja") : ?>宮泉市観光案内所(本部総合案内所)<?php else : ?>Miyazumi Tourist Information Center<?php endif; ?>
            </dt>
            <dd>022-654-7746</dd>
            <dd>
              <?php if (get_locale() == "ja") : ?>宮泉市九段6-8-19<?php else : ?>6-8-19 Kudan MiyaizumiCity<?php endif; ?>
            </dd>
          </dl>
          <dl>
            <dt>
              <?php if (get_locale() == "ja") : ?>宮泉市観光物産協会<?php else : ?>Miyazumi Tourist and Product Association<?php endif; ?>
            </dt>
            <dd>022-111-6654</dd>
            <dd>
              <?php if (get_locale() == "ja") : ?>宮泉市九段4-3-2<?php else : ?>4-3-2 Kudan MiyaizumiCity<?php endif; ?>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <section class="lastMessage">
    <div class="lastMessage__inner">

      <h2 class="js-slideIn js-slideLeft">
        <span class="js-slideIn-inner js-slideLeft-inner">
          <?php if (get_locale() == "ja") : ?>宮泉市でお会いできることを<br class="sp">楽しみにしています<?php else : ?>We look forward to <br class="sp">seeing you in Miyazumi City!<?php endif; ?>
        </span>
      </h2>
    </div>
  </section>

</main>
<?php get_footer(); ?>