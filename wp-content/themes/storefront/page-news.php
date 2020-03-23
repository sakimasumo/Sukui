<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span> ></a></li>
            <li class="breadcrumb__item">News</li>
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
$paged = get_query_var('paged') ? get_query_var('paged') : 1 ; //ページの判定
$args =	array(
		'posts_per_page'   => 3, //表示件数
		'orderby'          => 'date', //ソートの基準
		'order'            => 'DESC', //DESC降順　ASC昇順
		'post_type'        => 'news', //投稿タイプ名postは通常の投稿
		'post_status'      => 'publish', //公開状態
		'caller_get_posts' => 1, //取得した記事の何番目から表示するか
		'paged'            =>  $paged //ページネーションに必要
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
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
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                
            </ul>
            <?php
  global $wp_rewrite;
  $paginate_base = get_pagenum_link(1);
  if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
  $paginate_format = '';
  $paginate_base = add_query_arg('paged','%#%');
  }
  else{
  $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
  user_trailingslashit('page/%#%/','paged');;
  $paginate_base .= '%_%';
  }
  echo paginate_links(array(
  'base' => $paginate_base,
  'format' => '?paged=%#%',
  'total' => $wp_query->max_num_pages,
  'type'  => 'list', //ul liで出力
  'mid_size' => 1, //カレントページの前後
  'end_size' => 0,
  'current' => ($paged ? $paged : 1),
  'prev_text' => '＜',
  'next_text' => '＞',
  ));
  ?>

        </section>
    </main>
<?php get_footer(); ?>