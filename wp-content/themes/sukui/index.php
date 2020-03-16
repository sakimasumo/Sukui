<?php get_header(); ?>
    <!-- トップイメージ -->
    <div class="container top hero">
      <div class="top__img">
        <div class="top__logo"><img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="" /></div>
      </div>
    </div>
    <!-- メインエリア -->
    <main>
      <!-- about -->
      <h2 class="container about fadein">
        <a href="about.html">
          <img src="<?= get_template_directory_uri(); ?>/images/aboutlink.jpg" alt="" />
        </a>
      </h2>
      <!-- pickup -->
      <section class="container pickup fadein">
        <h2 class="pickup__title">
          <img src="<?= get_template_directory_uri(); ?>/images/pickup-s.png" alt="" />
        </h2>
        <ul class="pickup__list">
          <li class="pickup__item1"></li>
          <li class="pickup__item2">banner</li>
        </ul>
      </section>
      <!-- products -->
      <section class="container products fadein">
        <h2 class="products__title">
          <img src="<?= get_template_directory_uri(); ?>/images/products-s.png" alt="" />
        </h2>
        <ul class="products__list">
          <li class="products__item">
            <a href="store.html#skincare"
              ><img src="<?= get_template_directory_uri(); ?>/images/skincarelink.jpg" alt=""
            /></a>
          </li>
          <li class="products__item">
            <a href="store.html#basemake"
              ><img src="<?= get_template_directory_uri(); ?>/images/basemakelink.jpg" alt=""
            /></a>
          </li>
          <li class="products__item">
            <a href="store.html#pointmake"
              ><img src="<?= get_template_directory_uri(); ?>/images/pointmakelink.jpg" alt=""
            /></a>
          </li>
        </ul>
      </section>
      <!-- news -->
      <section class="container news fadein">
        <h2 class="news__title">
          <img src="<?= get_template_directory_uri(); ?>/images/news-s.png" alt="" />
        </h2>
        <div class="news__box">
          <dl class="news__list">
          <?php
                $args = array(
                    "post_type" => "news",
                    "post_status" => "publish",
                    "posts_per_page" => 3
                );
                $customPosts = get_posts($args);
                ?>
                <?php if ($customPosts): ?>
                    <?php foreach ($customPosts as $post): setup_postdata($post);?>
            <dt class="news__date"><?= get_post_time("Y.m.d"); ?></dt>
            <dd class="news__contents"><?php the_title(); ?></dd>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

          </dl>
          <a href="<?php echo get_page_link(15); ?>" class="news__button"
            ><img src="<?= get_template_directory_uri(); ?>/images/more.png" alt=""
          /></a>
        </div>
      </section>
      <!-- rank -->
      <section class="container rank fadein">
        <h2 class="rank__title">
          <img src="<?= get_template_directory_uri(); ?>/images/ranking-s.png" alt="" />
        </h2>
        <ul class="rank__list">
        <ul class="rank__list">
        <?php
                $args = array(
                    "post_type" => "ranking",
                    "post_status" => "publish",
                    "post_per_page" => -1
                );
                $customPosts = get_posts($args);
                ?>
                <?php if ($customPosts): ?>
                    <?php foreach ($customPosts as $post): setup_postdata($post);?>
          <li class="rank__item">
            <?php the_post_thumbnail('ranking_img'); ?>
            <div class="rank__num"><span><?= post_custom('ranknum'); ?></span></div>
            <p class="rank__caption"><?php the_title(); ?></p>
            <p class="rank__price">￥<?= number_format(post_custom('price')) ?>(税込)</p>
          </li>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php wp_reset_postdata() ?>
        </ul>
        </ul>
      </section>
    </main>
    <!-- トップに戻るボタン -->
    <div class="topbtn">
      <p>
        <a href="<?php home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/topbtn.png" alt=""/></a>
      </p>
    </div>
<?php get_footer(); ?>
