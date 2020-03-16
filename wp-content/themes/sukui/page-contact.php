<?php 
session_start();
require_once "util.inc.php";

// 変数初期化
    $name01  = "";
    $name02  = "";
    $kana01  = "";
    $kana02  = "";
    $tel     = "";
    $mail    = "";
    $content = "";
    $details = "";

//セッション変数が登録されている場合は読み出す

if (isset($_SESSION["contact"])) {
    $contact = $_SESSION["contact"];
    $name01 = $contact["name01"];
    $name02 = $contact["name02"];
    $kana01 = $contact["kana01"];
    $kana02 = $contact["kana02"];
    $tel = $contact["tel"];
    $mail = $contact["mail"];
    $content = $contact["content"];
    $details = $contact["details"];
}

//「確認する」ボタン
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $isValidated = TRUE;
    //入力データの取得
    $name01  = $_POST["name01"];
    $name02  = $_POST["name02"];
    $kana01  = $_POST["kana01"];
    $kana02  = $_POST["kana02"];
    $mail    = $_POST["mail"];
    $details = $_POST["details"];
    //名前のバリデーション
    if ($name01 === "" or $name02 === "") {
        $nameError = "※お名前を入力してください";
        $isValidated = false;
    }
    //振り仮名のバリデーション
    if ($kana01 === "" or $kana02 === "") {
        $kanaError = "※フリガナを入力してください";
        $isValidated = false;
    }
    elseif (!preg_match("/^[ァ-ヶー 　]+$/u", $kana01) or !preg_match("/^[ァ-ヶー 　]+$/u", $kana02)) {
        $kanaError = "※全角カタカナで入力してください";
        $isValidated = false;
    }
    //メールアドレスのバリデーション
    if ($mail === "") {
        $mailError = "※メールアドレスを入力してください";
        $isValidated = false;
    }
    elseif (!preg_match("/^[^@]+@[^@]+\.[^@]+$/", $mail)) {
        $mailError = "※メールアドレスの形式が正しくありません";
        $isValidated = false;
    }
    //問合せ詳細のバリデーション
    if ($details === "") {
        $detailsError = "※お問い合わせ内容を入力してください";
        $isValidated = false;
    }

    //エラーがなければ確認画面へ移動
    if ($isValidated == true) {
        $contact = array(
            "name01" => $name01,
            "name02" => $name02,
            "kana01" => $kana01,
            "kana02" => $kana02,
            "mail"   => $mail,
            "details" => $details
        );
        $_SESSION["contact"] = $contact;
        header("Location :contact_conf");
        exit;
    }
}

?>
<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span></a></li>
            <li class="breadcrumb__item">Contact</li>
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
                <input type="hidden" name="token" value="<?= getToken(); ?>">
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>お名前</label></dt>
                    <dd class="contactbox__name"><input type="text" name="name01" placeholder=" 姓" value="<?= h($name01)?>"><input type="text" name="name02" placeholder=" 名" value="<?= h($name02)?>"></ddcontact>
                </dl>
                <?php if (isset($nameError)): ?>
                    <div class="contactbox__warning"><?= $nameError ?></div>
                <?php endif; ?>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>フリガナ</label></dt>
                    <dd class="contactbox__kana"><input type="text" name="kana01" placeholder=" セイ" value="<?= h($kana01)?>"><input type="text" name="kana02" placeholder=" メイ" value="<?= h($kana02)?>"></ddcontact>
                </dl>
                <?php if (isset($kanaError)): ?>
                    <div class="contactbox__warning"><?= $kanaError ?></div>
                <?php endif; ?>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>電話番号</label></dt>
                    <dd class="contactbox__tel"><input type="tel" name="tel" value="<?= h($tel)?>"></dd>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>メールアドレス</label></dt>
                    <dd class="contactbox__mail"><input type="mail" name="mail" placeholder=" sample@sample.com" value="<?= h($mail)?>"></dd>
                </dl>
                <?php if (isset($mailError)): ?>
                    <div class="contactbox__warning"><?= $mailError ?></div>
                <?php endif; ?>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>お問い合わせ内容</label></dt>
                    <dd class="contactbox__content">
                        <select name="content" id="" value="<?= h($content)?>">
                            <option >選択してください</option>
                            <option>商品について</option>
                            <option>ご注文について</option>
                            <option>サイトのご利用方法</option>
                            <option>その他</option>
                        </select>
                    </dd>
                </dl>
                <dl class="contactbox__list">
                    <dt class="contactbox__label"><label>お問い合わせ詳細</label></dt>
                    <textarea class="contactbox__tarea" name="details" id="" cols="20"><?= h($details); ?></textarea>
                </dl>
                <?php if (isset($detailsError)): ?>
                    <div class="contactbox__warning"><?= $detailsError ?></div>
                <?php endif; ?>
                <p class="contactbox__confirm"><input type="submit" value="確認"></p>
            </div>
        </section>
    </main>
<?php get_footer(); ?>