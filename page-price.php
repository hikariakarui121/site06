<?php get_header(); ?>

<?php
/*
 Template Name: 価格ページ
 */
?>
    <section id="course-top">
      <div class="t-image">
        <img src="<?php bloginfo('template_url'); ?>/image/plan.png" alt="">
        <h1>コース・料金</h1>
      </div>

      <div class="pan">
        <!-- <ul> 
          <li><a href="">ホーム</a></li>
          <li><a href="">料金体系</a></li>
        </ul> -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
          </div>
      </div>

    </section>

    <section id ="price">
      <div class="p-inner">
        <h2>料金体系</h2>

        <div class="p-contents">
          <p>入会金 39,800円</p>
          <span>&plus;</span>
          <p>月額費用</p>
        </div>

        <div class="p-discriprion">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </div>
      </div>
    </section>


    <section id="plan-detail">
      <div class="plan-detail-inner">

      <h2>料金表</h2>

      <div class="p-contents js-scrollable">
        
        <div class="p-item">

          <div class="p-title">
            <h3>基礎プラン</h3>
          </div>

          <div class="p-text">
            <p><?php echo get_post_meta($post->ID, 'price01', true); ?></p>
            <p>*月額（税抜価格）</p>

            <ul>
              <li>カリキュラム作成</li>
              <li>TOEFL学習サポート</li>
              <li>週一回のビデオMTG</li>
            </ul>
          </div>

        </div>

        <div class="p-item">

          <div class="p-title">
            <h3>演習プラン</h3>
          </div>
          <div class="p-text">
            <p><?php echo get_post_meta($post->ID, 'price02', true); ?></p>
            <p>*月額（税抜価格）</p>

            <ul>
              <li>カリキュラム作成</li>
              <li>TOEFL学習サポート</li>
              <li>週一回のビデオMTG</li>
              <li>TOEFL学習サポート</li>
            </ul>
          </div>

        </div>

        <div class="p-item">

          <span>おすすめ</span>
          <div class="p-title recommend">
            <h3>演習プラン</h3>
          </div>
          <div class="p-text">
            <p><?php echo get_post_meta($post->ID, 'price03', true); ?></p>
            <p>*月額（税抜価格）</p>

            <ul>
              <li>カリキュラム作成</li>
              <li>TOEFL学習サポート</li>
              <li>週一回のビデオMTG</li>
              <li>TOEFL学習サポート</li>
              <li>週一の英語面接対策</li>
            </ul>
          </div>

        </div>

        <div class="p-item">

          <div class="p-title">
            <h3>演習プラン</h3>
          </div>
          <div class="p-text">
            <p><?php echo get_post_meta($post->ID, 'price04', true); ?></p>
            <p>*月額（税抜価格）</p>


            <div class="text-list">
              <p>＊別途ご相談ください</p>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>
<section id="call">

<div class="c-image">
  <img src="<?php bloginfo('template_url'); ?>/image/cta.png" alt="">
</div>

<div class="c-contents">
  <h2>まずは無料で資料請求から</h2>
  <div class="c-btn"><a href="<?php bloginfo('url'); ?>">資料請求</a></div>
  <div class="c-btn-sub"><a href="<?php bloginfo('url'); ?>">お問い合わせ</a></div>
</div>
</section>



<section id="inquery">
<h2>お電話番号の問い合わせはこちら</h2>
<p>0123-456-789</p>
<p>平日 08:00~20:00</p>
</section>

  <?php get_footer(); ?>

  <!-- 資料請求部分 -->
  <!-- footer -->