<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
 <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>



  <title>Engress</title>
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール">

  <?php wp_head(); ?>
</head>
<body>

  <header>

    <div class="h-inner">

      <div class="header-left">

        <h1 class="logo"><img src="<?php bloginfo('template_url'); ?>/image/logo (2).png" alt=""></h1>
    
        <nav id="navi">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/'));?>">ホーム</a></li>
            <li><a href="<?php bloginfo('url'); ?>/news">お知らせ</a></li>
            <li><a href="<?php bloginfo('url'); ?>/blog">ブログ</a></li>
            <li><a href="<?php bloginfo('url'); ?>/price">コース料金</a></li>
          </ul>
        </nav>
       
       </div>

      <div class="header-right">

        <div class="tell">
          <p >平日08:00〜20：00</p>
          <p>0123-456-7890</p>
        </div>

        <div class="button">
          <a href="<?php bloginfo('url') ;?>/contact">資料請求</a>
        </div>

        <div class="button second">
          <a href="<?php bloginfo('url') ;?>/contact">お問い合わせ</a>
        </div>

      </div>

      <button id="nav-btn">
        <div class="nav-inner">
          <span></span><span></span><span></span>
        </div>  
      </button>

      
    </div>
    
    
  </header>
  
  <div id="mask"></div>
  <main>