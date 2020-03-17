<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
      <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a href="top.html"><span>Top</span> ></a></li>
          <li class="breadcrumb__item">Contact</li>
      </ul>
  </section>
    <!-- メインエリア -->
    <main>
        <section class="container">
          <div class="contactconf">
          <p class="contactconf__text">大変申し訳ございませんが、内部エラーが発生いたしました。<br>
            お手数ですが時間をおいて再度お試しくださいませ。</p>
          <p class="contactconf__toplink"><a href="<?php echo home_url('/') ?>">トップへ戻る</a></p>
        </div>
        </section>
      </main>
<?php get_footer(); ?>