<?php

?>
<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
      <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a href="<?php echo home_url('/') ?>"><span>Top</span> ></a></li>
          <li class="breadcrumb__item">Contact</li>
      </ul>
  </section>
    <!-- メインエリア -->
    <main>
        <section class="container">
          <div class="contactconf">
          <p class="contactconf__text">お問い合わせありがとうございました。<br>後日担当者よりご連絡させていただきます。</p>
          <p class="contactconf__toplink"><a href="<?php echo home_url('/') ?>">トップへ戻る</a></p>
        </div>
        </section>
      </main>
<?php get_footer(); ?>