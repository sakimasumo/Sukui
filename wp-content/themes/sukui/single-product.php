<?php get_header(); ?>
    <!-- メインエリア -->
    <main>
      <section class="storesinglebox container">
        <?php if(have_posts()):?>
        <?php while(have_posts()): the_post(); ?>
        <div class="slider">
        <?php echo do_shortcode(post_custom('slider_code')); ?>
        </div>
        <!-- 商品詳細 -->
        <div class="detail">
          <div class="detail__box">
            <h2 class="detail__name"><?php the_title(); ?></h2>
            <p class="detail__price">¥<?= number_format(post_custom('price')) ?>(税込)</p>
            <div class="detail__desc"><?php the_content(); ?></div>
            <form action="#" class="variable" method="post">
              <div class="form-group selectpicker-wrapper">
                <label for="select1"></label>
                <select
                  class="detail__select"
                  class="selectpicker input-price form-control"
                  data-live-search="true"
                  data-width="50%"
                  data-toggle="tooltip"
                  title="Select"
                >
                  <option>選択してください</option>
                  <option value="">01</option>
                  <option value="">02</option>
                  <option value="">03</option>
                  <option value="">04</option>
                  <option value="">05</option>
                </select>
              </div>
              <div class="quantity form-group">
                <input
                  class="detail__num"
                  type="number"
                  step="1"
                  min="1"
                  name="quantity"
                  value="1"
                  title="Qty"
                />
                <p>
                  <button class="detail__cart" type="submit">
                    <i class="fa fa-shopping-cart"></i> カートに入れる
                  </button>
                </p>
              </div>
            </form>
          </div>
        </div>
      </section>
<?php endwhile; ?>
<?php endif; ?>
    </main>
<?php get_footer(); ?>