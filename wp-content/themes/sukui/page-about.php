<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span> ></a></li>
            <li class="breadcrumb__item">About</li>
        </ul>
    </section>
    <!-- タイトルエリア -->
    <div class="container pagetop start">
        <div class="pagetop__logo"><img src="<?= get_template_directory_uri(); ?>/images/about-logo.png" alt=""></div>
    </div>
    <!-- メインエリア -->
    <main>
        <section class="container start">
            <div class="aboutbox">

                <h2 class="aboutbox__title">―Sukuiについて―</h2>
                <p class="aboutbox__contents">
                    <span>お肌トラブルに悩む女性たちを救いたい。</span><br>
                    <span>このコンセプトをもとに、sukuiブランドはスタートいたしました。</span><br>
                    <span> 肌トラブルの根本に働きかける自然派スキンケア。</span><br>
                    <span>ナチュラルながらも肌トラブルをカバーし、素肌を引き立たせるベースメイク。</span><br>
                    <span>日々に彩りを与えてくれるポイントメイク。</span><br>
                    <span>きっとあなたにぴったりのコスメが見つかりますように。</span><br>

                </p>
            </div>
        </section>
    </main>
<?php get_footer(); ?>