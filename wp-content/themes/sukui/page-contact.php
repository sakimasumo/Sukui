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
    $tel     = $_POST["tel"];
    $mail    = $_POST["mail"];
    $content = $_POST["content"];
    $details = $_POST["details"];
    //名前のバリデーション
    if ($name01 === "" or $name02 === "") {
        $nameError = "※お名前を入力してください";
        $isValidated = false;
    }
    //フリガナのバリデーション
    if ($kana01 === "" or $kana02 === "") {
        $kanaError = "※フリガナを入力してください";
        $isValidated = false;
    }
    elseif (!preg_match("/^[ァ-ヶー 　]+$/u", $kana01) or !preg_match("/^[ァ-ヶー 　]+$/u", $kana02)) {
        $kanaError = "※全角カタカナで入力してください";
        $isValidated = false;
    }
    //電話番号のバリデーション
    if ($tel === "") {
        $telError = "※フリガナを入力してください";
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
    //問合せ内容のバリデーション
    if ($content === "選択してください") {
        $contentError = "※お問い合わせ内容を選択してください";
        $isValidated = false;
    }
    //問合せ詳細のバリデーション
    if ($details === "") {
        $detailsError = "※お問い合わせ詳細を入力してください";
        $isValidated = false;
    }

    //エラーがなければ確認画面へ移動
    if ($isValidated == true) {
        $contact = array(
            "name01"  => $name01,
            "name02"  => $name02,
            "kana01"  => $kana01,
            "kana02"  => $kana02,
            "tel"     => $tel,
            "mail"    => $mail,
            "content" => $content,
            "details" => $details
        );
        $_SESSION["contact"] = $contact;
        header("Location: contact/contact_conf");
        exit;

        
    }
}
?>
<?php get_header(); ?>
    <!-- パンくずリスト -->
    <section class="breadcrumb container">
        <ul class="breadcrumb__list">
            <li class="breadcrumb__item"><a href="<?php echo home_url(); ?>"><span>Top</span> ></a></li>
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
                <?php if (isset($telError)): ?>
                    <div class="contactbox__warning"><?= $telError ?></div>
                <?php endif; ?>
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
                        <select name="content">
                            <option value="選択してください">選択してください</option>
                            <option value="商品について" <?php if($content === "商品について") echo 'selected'; ?>>商品について</option>
                            <option value="ご注文について" <?php if($content === "ご注文について") echo 'selected'; ?>>ご注文について</option>
                            <option value="サイトのご利用方法" <?php if($content === "サイトのご利用方法") echo 'selected'; ?>>サイトのご利用方法</option>
                            <option value="その他" <?php if($content === "その他") echo 'selected'; ?>>その他</option>
                        </select>
                    </dd>
                </dl>
                <?php if (isset($contentError)): ?>
                    <div class="contactbox__warning"><?= $contentError ?></div>
                <?php endif; ?>
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