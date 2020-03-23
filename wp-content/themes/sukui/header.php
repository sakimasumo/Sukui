<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name"); ?><?php wp_title("|"); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script  type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_head(); ?>
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <div class="header">
            <div class="container glheader">
                <h1 class="glheader__title">
                    <a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a></h1>
                    <div class="glheader__sub">
                        <ul>
                          <li><a href="usces-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                          <li><a href="usces-member">LogIn</a></li>
                        </ul>
                      </div>
            </div>
        </div>
        <nav class="container hnav articles-scroll">
        <?php wp_nav_menu( array ( 
          "menu" => "mainnav",
          'container' => false,
          "menu_class" => "hnav__list"
          ) ); ?>
          </nav>
    </header>
    