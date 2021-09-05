<?php get_header(); ?>

<?php
/*
 Template Name: フロントページ
 */
?>

<section id="top">

<div class="top-image"><img src="<?php bloginfo('template_url') ; ?>/image/fv.png" alt=""></div>

<div class="inner-contents">
  <h2>TOEFL対策はEngress</h2>
  <p>日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>

  <div class="btn-first"><a href="<?php bloginfo('url'); ?>">資料請求</a></div>
  <div class="btn-second"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></div>
</div>

</section>

<section id="info">
<h2>TOEFL学習でこんな悩みありませんか？</h2>

<div class="info-item">
  <p>勉強の習慣が<br>身についていない</p>
  <p>勉強しているはず<br>なのに点数が伸びない</p>
  <p>正しい勉強方法が<br>わからない</p>
</div>


<div class="info_container">

  <div class="container_inner">
    
    <h3>Engressは<br><span>TOEFLに特化したスクール</span>です</h3>
    <p>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>

  </div>

</div>
</section>

<section id="strong">
<h2>TOEFL対策に特化したEngress3つの強み</h2>

<div class="s-container">


  <div class="s-item">
    <div class="s-text">
      <span>特長 １</span>
      <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
      <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
    </div>
    <div class="s-image">
      <img src="<?php bloginfo('template_url'); ?>/image/feature01.png" alt="">
    </div>
  </div>
  <div class="s-item">
    <div class="s-text second">
      <span>特長 2</span>
      <h3>日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
      <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
    </div>
    <div class="s-image">
      <img src="<?php bloginfo('template_url'); ?>/image/feature02.png" alt="">
    </div>
  </div>
  <div class="s-item">
    <div class="s-text">
      <span>特長 3</span>
      <h3>平均3ヶ月でTOEFL<br>iBT20点アップ</h3>
      <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
    </div>
    <div class="s-image">
      <img src="<?php bloginfo('template_url'); ?>/image/feature03.png" alt="">
    </div>
  </div>
</div>
</section>
<section id="plan">
<div class="p-image"><img src="<?php bloginfo('template_url'); ?>/image/price.png" alt=""></div>

<div class="p-container">
  <h2>Engressの料金プランはこちら</h2>
  <div class="p-btn"><a href="<?php bloginfo('url');?>/price">料金を見てみる</a></div>
</div>

</section>
<section id="work">
<h2>TOEFL成功事例</h2>

<div class="w-container">

  <div class="w-item">
      <h3> <?php echo get_post_meta(2235,'comment' ,true); ?></h3>
      <div class="w-image"><img src="<?php echo $cfs->get('image',2235); ?>" alt=""></div>
      

      <div class="w-discription">
        <p><?php echo get_post_meta(2235,'work' ,true); ?></p>
        <p><?php echo get_post_meta(2235,'name' ,true); ?></p>
        <p><?php echo get_post_meta(2235,'score' ,true); ?></p>
      </div>
  </div>

  <div class="w-item">
      <h3><?php echo get_post_meta(2235,'comment2' ,true); ?></h3>
      <div class="w-image"><img src="<?php echo $cfs->get('image2',2235); ?>" alt=""></div>

      <div class="w-discription">
        <p><?php echo get_post_meta(2235,'work2' ,true); ?></p>
        <p><?php echo get_post_meta(2235,'name2' ,true); ?></p>
        <p><?php echo get_post_meta(2235,'score2' ,true); ?></p>
      </div>
  </div>

  <div class="w-item">
      <h3><?php echo get_post_meta(2235,'comment3' ,true); ?></h3>
      <div class="w-image"><img src="<?php echo $cfs->get('image3',2235);?>" alt=""></div>
      <div class="w-discription">
        <p><?php echo get_post_meta(2235,'work3' ,true); ?></p>
        <p><?php echo get_post_meta(2235,'name3' ,true); ?></p>
        <p><?php echo get_post_meta(2235,'score3' ,true); ?></p>
      </div>
  </div>



</div>
</section>
<section id="flow">

<h2>ご利用の流れ</h2>
<dl class ="f-container">

  <div class="f-item">
    <span>01</span>
    <dt>お問い合わせ</dt>
    <dd>まずはフォームまたはお電話からお申し込みください。</dd>
  </div>

  <div class="f-item">
    <span>02</span>
    <dt>ヒアリング</dt>
    <!-- <span class="tai></span> -->
    <dd>現在の学習の状況やTOEFLスコア、目標のスコアをお聞きします。</dd>
  </div>
  <div class="f-item">
    <span>03</span>
    <dt>学習プランのご提供</dt>
    <dd>目標達成のために最適な学習プランをご提案致します。</dd>
  </div>
  <div class="f-item">
    <span>04</span>
    <dt>ご入会</dt>
    <dd>お申込み完了後、レッスンがスタートします。</dd>
  </div>
</dl>

</section>

<section id="faq">
<h2>よくある質問</h2>

<dl>

  <div class="f-item">
    <dd class="js-accordion" >Engressはサラリーマンでも学習を続けられるでしょうか？<span></span><span class="active"></span></dd>
    <dt class="active">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dt>
  </div>
  <div class="f-item">
    <dd class="js-accordion">教材はオリジナルのものを使用しているのでしょうか？<span></span><span></span></dd>
    <dt>はい。</dt>
  </div>
  <div class="f-item">
    <dd class="js-accordion">講師に日本人はいますか？<span></span><span></span></dd>
    <dt>はい。</dt>
  </div>
  <div class="f-item">
    <dd class="js-accordion">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？<span></span><span></span></dd>
    <dt>はい。</dt>
  </div>

</dl>

</section>

<section id="blog-info">

<div id="b-contents">
  <h2>ブログ</h2>
   
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
  <div class="b-item">
    <div class="b-image">
      <?php if(has_post_thumbnail()){ ?>
      <?php the_post_thumbnail("midium"); ?>
      <?php } else{ ?>
      <img src="<?php bloginfo("template_url");?>/image/nophoto.jpg">
      <?php } ?>
    </div>
    <div class="b-title">
      <h3><a href="<?php the_permalink()?>"><?php the_title() ;?></a></h3>
      <p><?php echo get_the_date('Y.m.d') ;?></p>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>


<div id="inform">
  <h2>お知らせ</h2>

  <div class="i-contents">
    <?php 
    $args =array(
      'post_type'=>'news',
      'posts_per_page'=> 3,
      'paged' =>$paged
    );
    $the_query =new WP_Query($args);if($the_query->have_posts()):
    ?>
    <?php while($the_query->have_posts()):$the_query->the_post(); ?>

      <div class="i-item">
          <p><?php echo get_the_date('Y.m.d') ;?></p>
          <p><a href="<?php the_permalink();?>"><?php the_title() ;?></a></p>
      </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <?php endif; ?>
  </div>
</div>
</section>

<section id="call">

  <div class="c-image">
    <img src="<?php bloginfo('template_url'); ?>/image/cta.png" alt="">
  </div>

  <div class="c-contents">
    <h2>まずは無料で資料請求から</h2>
    <div class="c-btn"><a href="<?php bloginfo('url'); ?>/contact">資料請求</a></div>
    <div class="c-btn-sub"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></div>
  </div>
</section>



<section id="inquery">
<h2>お電話番号の問い合わせはこちら</h2>
<p>0123-456-789</p>
<p>平日 08:00~20:00</p>
</section>
<?php get_footer(); ?>