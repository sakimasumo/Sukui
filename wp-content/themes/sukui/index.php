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
            <dt class="news__date">2020.4.20</dt>
            <dd class="news__contents">リップ新色決定です！</dd>
            <dt class="news__date">2020.3.1</dt>
            <dd class="news__contents">ホワイトデーギフトキャンペーン♪</dd>
            <dt class="news__date">2020.2.1</dt>
            <dd class="news__contents">バレンタインは自分へのごほうびを…</dd>
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
          <li class="rank__item">
            <img src="<?= get_template_directory_uri(); ?>/images/primer.jpg" alt="" />
            <div class="rank__num"><span>1</span></div>
            <p class="rank__caption">aaaaaa</p>
            <p class="rank__price">￥0000（taxin）</p>
          </li>
          <li class="rank__item">
            <img src="<?= get_template_directory_uri(); ?>/images/cleansing.jpg" alt="" />
            <div class="rank__num"><span>2</span></div>
            <p class="rank__caption">bbbbbb</p>
            <p class="rank__price">￥0000（taxin）</p>
          </li>
          <li class="rank__item">
            <img src="<?= get_template_directory_uri(); ?>/images/foundation.jpg" alt="" />
            <div class="rank__num"><span>3</span></div>
            <p class="rank__caption">aaaaaa</p>
            <p class="rank__price">￥0000（taxin）</p>
          </li>
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
