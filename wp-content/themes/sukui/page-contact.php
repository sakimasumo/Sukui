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
        <div class="pagetop__logo"><img src="<?= get_template_directory_uri(); ?>/images/contact-logo.png" alt=""></div>
    </div>
    <!-- メインエリア -->
    <main>
    <section class="container contactbox start">
            <div class="contactbox__area">
                <p class="contactbox__text">以下のフォームに入力の上、確認ボタンを押してください。<br>内容によっては回答にお時間をいただくことがございます。<br>ご連絡は原則翌営業日以降となりますのでご了承くださいませ。</p>
                <form action="" method="post">
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>お名前</label></dt>
                    <dd class="contactbox__name"><input type="text" name="name01" placeholder=" 姓" value="" required><input type="text" name="name01" placeholder=" 名" value="" required></ddcontact>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>フリガナ</label></dt>
                    <dd class="contactbox__kana"><input type="text" name="kana01" placeholder=" セイ" value="" required><input type="text" name="kana02" placeholder=" メイ" value="" required></ddcontact>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>電話番号</label></dt>
                    <dd class="contactbox__tel"><input type="tel" name="tel" value=""></dd>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>メールアドレス</label></dt>
                    <dd class="contactbox__mail"><input type="mail" name="mail" placeholder=" sample@sample.com" value="" required></dd>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>お問い合わせ内容</label></dt>
                    <dd class="contactbox__content">
                        <select name="content" id=""  required>
                            <option value="">選択してください</option>
                            <option value="">商品について</option>
                            <option value="">ご注文について</option>
                            <option value="">サイトのご利用方法</option>
                            <option value="">その他</option>
                        </select>
                    </dd>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>お問い合わせ詳細</label></dt>
                    <textarea class="contactbox__tarea" name="" id="" cols="20"></textarea>
                </dl>
                <p class="contactbox__confirm"><input type="submit" value="確認"></p>
            </div>
        </section>
    </main>
<?php get_footer(); ?>