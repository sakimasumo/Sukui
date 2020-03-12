<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sukui</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <!-- ヘッダー -->
    <header>
      <div class="header">
        <div class="container glheader">
          <h1 class="glheader__title">
            <a href="top.html">Sukui</a>
          </h1>
          <div class="glheader__sub">
            <ul>
              <li><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
              <li><a href="">LogIn</a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="container hnav">
          <ul class="hnav__list">
              <li class="hnav__item">
                <a href="about.html"><img src="images/about.png" alt=""/></a>
              </li>
              <li class="hnav__item">
                <a href="news.html"><img src="images/news.png" alt=""/></a>
              </li>
              <li class="hnav__item">
                <a href="store.html"><img src="images/onlinestore.png" alt=""/></a>
              </li>
              <li class="hnav__item">
                <a href="shoplist.html"><img src="images/shoplist.png" alt=""/></a>
              </li>
              <li class="hnav__item">
                <a href="contact.html"><img src="images/contact.png" alt=""/></a>
              </li>
            </ul>
      </nav>
  </header>
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
              <td class="contactconf__content">山田　太郎</td>
            </tr>
            <tr>
              <th class="contactconf__topic">フリガナ</th>
              <td class="contactconf__content">ヤマダ　タロウ</td>
            </tr>
            <tr>
              <th class="contactconf__topic">電話番号</th>
              <td class="contactconf__content">090-****-****</td>
            </tr>
            <tr>
              <th class="contactconf__topic">メールアドレス</th>
              <td class="contactconf__content">sample@sample.com</td>
            </tr>
            <tr>
              <th class="contactconf__topic">お問い合わせ内藤</th>
              <td class="contactconf__content">商品について</td>
            </tr>
            <tr>
              <th class="contactconf__topic">お問い合わせ詳細</th>
              <td class="contactconf__content">ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</td>
            </tr>
        </table>
        <form action="">
          <div class="contactconf__btn">
          <input class="contactconf__done" type="submit" value="送信"><input class="contactconf__return" type="submit" value="戻る">
        </div>
        </form>
      </div>
      </section>
    </main>
        <!-- フッター -->
        <footer>
            <div class="container glfooter">
                <ul class="glfooter__list">
                    <li class="glfooter__item">プライバシーポリシー</li>
                    <li class="glfooter__item">会員規約</li>
                    <li class="glfooter__item">特定商取引法に基づく表記</li>
                    <li class="glfooter__item">会社概要</li>
                    <li class="glfooter__item">お問い合わせ</li>
                </ul>
            </div>
            <div class=" container glfooter__copy"><small>©Sukui</small></div>
        </footer>
</body>
</html>