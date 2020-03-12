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
        <div class="pagetop__logo"><img src="<?= get_template_directory_uri(); ?>/images/news-logo.png" alt=""></div>
    </div>
    <!-- メインエリア -->
    <main>
        <section class="container newsbox start">
            <ul class="newsbox__list">
                <?php
                $args = array(
                    "post_type" => "news",
                    "post_status" => "publish",
                    "post_per_page" =>4
                );
                $customPosts = get_posts($args);
                ?>
                <?php if ($customPosts): ?>
                    <?php foreach ($customPosts as $post): setup_postdata($post);?>
                    <li class="newsbox__item">
                        <div class="newsbox__img">
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(''); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri();?>/images/flower1.png" alt="" height="150" width="150">
                            <?php endif; ?>
                        </div>
                        <div class="newsbox__contents">
                            <div class="newsbox__date"><?= get_post_time("Y.m.d"); ?></div>
                            <div>
                            <div class="newsbox__title"><?php the_title(); ?></div>
                            <div class="newsbox__text">
                                <?php the_content(); ?>
                            </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </section>
    </main>
<?php get_footer(); ?>