<?php 
$lifetime=600;
session_start();
setcookie(session_name(),session_id(),time()+$lifetime);require_once "util.inc.php";
require_once "vendor/autoload.php";
require_once "settings.php";

if (isset($_SESSION["contact"])) {
  $contact = $_SESSION["contact"];
  $name01  = $contact["name01"];
  $name02  = $contact["name02"];
  $kana01  = $contact["kana01"];
  $kana02  = $contact["kana02"];
  $tel     = $contact["tel"];
  $mail    = $contact["mail"];
  $content = $contact["content"];
  $details = $contact["details"];
}
else {
  //不正なアクセス
  //入力ページに戻る
  header("Location: ../contact");
  exit;
}
//--------------------
// 「送信」ボタン
//--------------------


try {
  if (isset($_POST["send"])){
    $body = <<<EOT
    ・お名前
    {$name01} {$name02}
    ・フリガナ
    {$kana01} {$kana02}
    ・電話番号
    {$tel}
    ・メールアドレス
    {$mail}
    ・お問い合わせ内容
    {$content}
    ・お問い合わせ詳細
    {$details}
    EOT;
  $transport = new Swift_SmtpTransport(
    SMTP_HOST, SMTP_PORT, SMTP_PROTOCOL
  );
  $transport->setUsername(GMAIL_ADMIN);
  $transport->setPassword(GMAIL_APPPASS);
  $mailer = new Swift_Mailer($transport);

  $message = new Swift_Message(MAIL_TITLE);
  $message->setFrom(MAIL_FROM);
  $message->setTo(MAIL_TO);
  // メール本文にHTMLタグを使用
  $message->setBody($body);

  $result = $mailer->send($message);
  if ($result == true) {
    //送信成功
    //セッション変数を破棄
    unset($_SESSION["contact"]);
    //完了画面へ移動
    header("Location: ../contact/contact_done");
    exit;
  }else{
  //送信失敗
  //エラー画面へ移動
  //セッション変数は破棄しない
  header("Location: ../contact/contact_error");
  exit;
  }
  //修正ボタンF
}
} catch (Exception $e) {
  echo $e -> getMessage();
  exit;
}
if (isset($_POST["back"])) {
  //入力ページに戻る
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
        <p class="contactconf__text">お問い合わせ内容をご確認いただき、よろしければ「送信」を押してください。
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
          <input class="contactconf__return" type="submit" value="修正" name="back">
        </div>
        </form>
      </div>
      </section>
    </main>
<?php get_footer(); ?>