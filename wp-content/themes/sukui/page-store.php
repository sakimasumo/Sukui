<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span></a></li>
            <li class="breadcrumb__item"><?php wp_title(); ?></li>
        </ul>
    </section>
    <!-- タイトルエリア -->
    <div class="container pagetop start">
        <div class="pagetop__logo"><img src="<?= get_template_directory_uri(); ?>/images/store-logo.png" alt=""></div>
    </div>
    <!-- メインエリア -->
    <main>
        <section class="container storecategory start">
            <h2 class="products__title">
                <img src="<?= get_template_directory_uri(); ?>/images/products-s.png" alt="">
                </h2>
            <ul class="storecategory__list">
                <li class="storecategory__item"><a href="#skincare"><img src="<?= get_template_directory_uri(); ?>/images/skincarelink.jpg" alt=""></a></li>
                <li class="storecategory__item"><a href="#basemake"><img src="<?= get_template_directory_uri(); ?>/images/basemakelink.jpg" alt=""></a></li>
                <li class="storecategory__item"><a href="#pointmake"><img src="<?= get_template_directory_uri(); ?>/images/pointmakelink.jpg" alt=""></a></li>
            </ul>
        </section>
        <!-- スキンケア -->
        <section class="container storebox start">
            <h2 class="storebox__title" id="skincare"><img src="<?= get_template_directory_uri(); ?>/images/skincare.png" alt=""></h2>
            <ul class="storebox__list">
            <?php
            $args = array(
              'post_type' => 'product',
              'tax_query' =>array(
                array(
                  'taxonomy' => 'product',
                  'field' => 'slug',
                  'terms' => 'skincare'
                ),
                ),
              'post_status' => 'publish',
              'post_per_page' => -1,
              'order' => 'DESC'
            );
            $customPosts = get_posts($args);
            ?>
            <?php if($customPosts): ?>
            <?php foreach($customPosts as $post): setup_postdata($post); ?>
              <li class="storebox__item">
                <a href="<?php the_permalink(); ?>"  class="storebox__item__link">
                    <?php the_post_thumbnail();?>
                      <h3 class="storebox__item__name"><?php the_title(); ?><h3>
                      <p  class="storebox__item__price">￥<?= number_format(post_custom('price')) ?>(税込)</p>
                </a>
              </li>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </ul>
          </section>
        <!-- ベースメイク -->
        <section class="container storebox">
            <h2 class="storebox__title" id="basemake"><img src="<?= get_template_directory_uri(); ?>/images/basemake.png" alt=""></h2>
            <ul class="storebox__list">
            <?php
            $args = array(
              'post_type' => 'product',
              'tax_query' =>array(
                array(
                  'taxonomy' => 'product',
                  'field' => 'slug',
                  'terms' => 'basemake'
                ),
                ),
              'post_status' => 'publish',
              'post_per_page' => -1,
              'order' => 'DESC'
            );
            $customPosts = get_posts($args);
            ?>
            <?php if($customPosts): ?>
            <?php foreach($customPosts as $post): setup_postdata($post); ?>
              <li class="storebox__item">
                <a href="<?php the_permalink(); ?>"  class="storebox__item__link">
                    <?php the_post_thumbnail();?>
                      <h3 class="storebox__item__name"><?php the_title(); ?><h3>
                      <p  class="storebox__item__price">￥<?= number_format(post_custom('price')) ?>(税込)</p>
                </a>
              </li>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </ul>
          </section>
        <!-- ポイントメイク -->
        <section class="container storebox">
            <h2 class="storebox__title" id="pointmake"><img src="<?= get_template_directory_uri(); ?>/images/pointmake.png" alt=""></h2>
            <ul class="storebox__list">
            <?php
            $args = array(
              'post_type' => 'product',
              'tax_query' =>array(
                array(
                  'taxonomy' => 'product',
                  'field' => 'slug',
                  'terms' => 'pointmake'
                ),
                ),
              'post_status' => 'publish',
              'post_per_page' => -1,
              'order' => 'DESC'
            );
            $customPosts = get_posts($args);
            ?>
            <?php if($customPosts): ?>
            <?php foreach($customPosts as $post): setup_postdata($post); ?>
              <li class="storebox__item">
                <a href="<?php the_permalink(); ?>"  class="storebox__item__link">
                    <?php the_post_thumbnail();?>
                      <h3 class="storebox__item__name"><?php the_title(); ?><h3>
                      <p  class="storebox__item__price">￥<?= number_format(post_custom('price')) ?>(税込)</p>
                </a>
              </li>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </ul>
          </section>
    </main>
<?php get_footer(); ?>