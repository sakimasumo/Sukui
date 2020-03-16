<?php
session_start();
require_once "util.inc.php";
require_once "libs/qd/qdsmtp.php";
require_once "libs/qd/qdmail.php";

//セッションが登録されている場合は読み出す
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
  //CFR対策
  if ($token !== getToken()) {
    header("Location: ../contact");
    exit;
  }
}
else {
  //不正なアクセス
  //入力ページに戻る
  header("Location: ../contact");
  exit;
}

//送信ボタン
if (isset($_POST["send"])) {
  // 管理者へメール送信
  $body = <<<EOT
■お名前
{$name01}{$name02}

■フリガナ
{$kana01}{$kana02}

■メールアドレス
{$mail}

■電話番号
{$tel}

■お問い合わせ内容
{$content}

■お問い合わせ内容
{$details}

EOT;
  $mail = new Qdmail();
  $mail->errorDisplay(false);
  $mail->smtpObject()->error_display = false;
  // 基本設定
  $mail->from("zd3h10@sim.zdrv.com", "Sukui Web");
  $mail->to("zd3h10@sim.zdrv.com", "Sukui 管理者");
  $mail->subject("Crescent Shoes 問い合わせ");
  $mail->text($body);
  // SMTP用設定
  $param = array(
    "host"     => "w1.sim.zdrv.com",
    "port"     => 25,
    "from"     => "zd3h10@sim.zdrv.com",
    "protocol" => "SMTP",
  );
  $mail->smtp(TRUE);
  $mail->smtpServer($param);
  // 送信
  $flag = $mail->send();
  if ($flag == TRUE) {
    // 送信成功
    // セッション変数を破棄
    unset($_SESSION["contact"]);
    // 完了画面へ移動
    header("Location: ../contact-done");
    exit;
  }
  else {
    // 送信失敗
    // エラー画面へ移動
    // セッション変数は破棄しない
    header("Location: ../contact-error");
    exit;
  }
}
//修正ボタン
if (isset($_POST["back"])) {
  //入力ページに戻る
  $_SESSION["contact"]["contactOnly"] = true;
  header("Location: ../contact");
  exit;
}

?>

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
        <p class="contactconf__text">お問い合わせ内容をご確認いただき、よろしければ「送信」を押してください
          <br>後日担当者より返信させていただきます。
        </p>
        <table class="contactconf__table">
            <tr class="contactconf__item">
              <th class="contactconf__topic">お名前</th>
              <td class="contactconf__content"><?= h($name01) ?>　<?= h($name02) ?></td>
            </tr>
            <tr>
              <th class="contactconf__topic">フリガナ</th>
              <td class="contactconf__content"><?= h($kana01) ?>　<?= h($kana02) ?></td>
            </tr>
            <tr>
              <th class="contactconf__topic">電話番号</th>
              <td class="contactconf__content"><?= h($tel) ?></td>
            </tr>
            <tr>
              <th class="contactconf__topic">メールアドレス</th>
              <td class="contactconf__content"><?= h($mail) ?></td>
            </tr>
            <tr>
              <th class="contactconf__topic">お問い合わせ内藤</th>
              <td class="contactconf__content"><?= h($content) ?></td>
            </tr>
            <tr>
              <th class="contactconf__topic">お問い合わせ詳細</th>
              <td class="contactconf__content"><?= h($details) ?></td>
            </tr>
        </table>
        <form action="" method="post">
          <div class="contactconf__btn">
          <input class="contactconf__done" type="submit" value="送信" name="send">
          <input class="contactconf__return" type="submit" value="戻る" name="back">
        </div>
        </form>
      </div>
      </section>
    </main>
<?php get_footer(); ?>