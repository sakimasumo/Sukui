<?php

/**
 * <meta content="charset=UTF-8">
 * @package Welcart
 * @subpackage Welcart Default Theme
 */
get_header();
global $usces;
?>
<!-- パンくずリスト -->
<section class="breadcrumb container">
	<ul class="breadcrumb__list">
		<li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span> ></a></li>
		<li class="breadcrumb__item">OnlineStore</li>
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


	<section class="container storebox start">
		<div id="content" class="three-column container">
			<h2 class="storebox__title" id="skincare"><img src="<?= get_template_directory_uri(); ?>/images/skincare.png" alt=""></h2>
			<div class="clearfix storebox__list">
				<?php query_posts(array('category_name' => 'skincare', 'posts_per_page' => 8, 'post_status' => 'publish')); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post();
						usces_the_item(); ?>
						<div class="thumbnail_box storebox__item">
							<div class="thumimg"><a href="<?php the_permalink() ?>"><?php usces_the_itemImage(0, 360, 280); ?></a></div>
							<div class="thumtitle storebox__item__name"><a href="<?php the_permalink() ?>" rel="bookmark"><?php usces_the_itemName(); ?></a></div>
							<div class="price storebox__item__price"><?php usces_crform(usces_the_firstPrice('return'), true, false); ?><?php usces_guid_tax(); ?></div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif;
				wp_reset_query(); ?>
			</div>
			<?php /******************************************************************/ ?>

		</div><!-- end of content -->
	</section>


	<section class="container storebox start">
		<div id="content" class="three-column container">
			<h2 class="storebox__title" id="basemake"><img src="<?= get_template_directory_uri(); ?>/images/basemake.png" alt=""></h2>
			<div class="clearfix storebox__list">
				<?php query_posts(array('category_name' => 'basemake', 'posts_per_page' => 8, 'post_status' => 'publish')); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post();
						usces_the_item(); ?>
						<div class="thumbnail_box storebox__item">
							<div class="thumimg"><a href="<?php the_permalink() ?>"><?php usces_the_itemImage(0, 360, 280); ?></a></div>
							<div class="thumtitle storebox__item__name"><a href="<?php the_permalink() ?>" rel="bookmark"><?php usces_the_itemName(); ?></a></div>
							<div class="price storebox__item__price"><?php usces_crform(usces_the_firstPrice('return'), true, false); ?><?php usces_guid_tax(); ?></div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif;
				wp_reset_query(); ?>
			</div>
			<?php /******************************************************************/ ?>

		</div><!-- end of content -->
	</section>
	<section class="container storebox start">
		<div id="content" class="three-column container">
			<h2 class="storebox__title" id="pointmake"><img src="<?= get_template_directory_uri(); ?>/images/pointmake.png" alt=""></h2>
			<div class="clearfix storebox__list">
				<?php query_posts(array('category_name' => 'pointmake', 'posts_per_page' => 8, 'post_status' => 'publish')); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post();
						usces_the_item(); ?>
						<div class="thumbnail_box storebox__item">
							<div class="thumimg"><a href="<?php the_permalink() ?>"><?php usces_the_itemImage(0, 360, 280); ?></a></div>
							<div class="thumtitle storebox__item__name"><a href="<?php the_permalink() ?>" rel="bookmark"><?php usces_the_itemName(); ?></a></div>
							<div class="price storebox__item__price"><?php usces_crform(usces_the_firstPrice('return'), true, false); ?><?php usces_guid_tax(); ?></div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif;
				wp_reset_query(); ?>
			</div>
			<?php /******************************************************************/ ?>

		</div><!-- end of content -->
	</section>
</main>

<?php get_footer(); ?>