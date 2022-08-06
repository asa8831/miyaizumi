<?php get_header(); ?>
<main>
  <section class="article__top">
    <div class="article__topInner">
      <?php
      $main_img = CFS()->get('main_img');
      if ($main_img) :
      ?>
        <div class="article__topLeft">
          <img src="<?php echo $cfs->get('main_img'); ?>" alt="">
        </div>
      <?php endif; ?>

      <div class="article__topRight">
        <h1><?php the_title(); ?></h1>
        <?php
        $main_summary = CFS()->get('main_summary');
        if ($main_summary) :
        ?>
          <p><?php echo $cfs->get('main_summary'); ?>
          <p>
          <?php endif; ?>
          <?php
          $main_url = CFS()->get('main_url');
          if ($main_url) :
         echo $cfs->get('main_url'); 
         endif; ?>

          <div class="article__tag">
            <!-- 記事が属しているターム名を取得 -->
            <?php
            // column_cat→タクソノミースラッグ
            $colum_terms = get_the_terms($post->ID, 'column_cat');
            if ($colum_terms) :
              foreach ($colum_terms as $colum_term) :
            ?>
                <span><a href=""><?php echo $colum_term->name ?></a></span>

            <?php endforeach;
            endif; ?>
          </div>
      </div>
    </div>
  </section>

  <section class="article">
    <div class="article__inner inner__basic">

      <?php
      $section_loop = CFS()->get('section_loop');
      foreach ($section_loop as $section) : 
        $ttl =$section['section_ttl'];
        $article =$section['section_article'];
        $img1 = $section['section_img1'];
        $img2 = $section['section_img2'];
      ?>
        <article class="one_article">
          <div class="article__main">
          <?php if ($ttl) : ?>
            <h2><?php echo $section['section_ttl']; ?></h2>
            <?php endif;
              if ($article) :
          ?>
            <p><?php echo $section['section_article']; ?></p>
          </div>
          <?php endif;?>
          <div class="<?php if ($img2) : ?>article__pic<?php else : ?>article__pic center<?php endif; ?>">
            <?php if ($img1) : ?>
            <div class="article__pic1">
                <img src="<?php echo $section['section_img1']; ?>" alt="">
            </div>
          <?php endif;
              if ($img2) :
          ?>
            <div class="article__pic2"><img src="<?php echo $section['section_img2']; ?>" alt=""></div>
          <?php endif; ?>
          </div>
        </article>
      <?php endforeach; ?>
      <?php
          $main_url = CFS()->get('main_url');
          if ($main_url) :
         echo $cfs->get('main_url'); 
         endif; ?>

    </div>
  </section>



</main>
<?php get_footer(); ?>