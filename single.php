<?php get_header(); ?>


<div class="pan">
    
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
          </div>
</div>




<section id="blog">
  <div class="blog-inner">

      
    
      <span class="c-name">
          <?php 
              $category = get_the_category(); 
              if ( $category[0] ) {
                echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
              }
            ?>
      </span>
   

      <h1>
        <?php the_title(); ?>
      </h1>

      <div class="icons">
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fmitsu-site.conohawing.com%2F&width=150&layout=button&action=like&size=small&share=true&height=65&appId" width="150" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
             
          <!-- <div class="twitter">
              <a href="//twitter.com/share" class="twitter-share-button" data-lang="ja">
              </a>
          </div> -->
         
        <p>
          <?php echo get_the_date('Y.m.d') ;?>
        </p>
  
          
      </div>

  

      <div class="blog-image">
        <img src="<?php echo CFS()->get('image1'); ?>" alt="">
      </div>


      <div class="item-2">
        <h2><?php echo CFS()->get('h2'); ?></h2>
        <p><?php echo CFS()->get('p2'); ?></p>
      </div>
        
      <div class="item-3">
        <h3><?php echo CFS()->get('h3'); ?></h3>
        <p><?php echo CFS()->get('p3'); ?></p>
      </div>
        
      <blockquote>
          <p><?php echo CFS()->get('blockquote'); ?></p>
      </blockquote>

      <div class="blog-image sub">
        <img src="<?php echo CFS()->get('image'); ?>" alt="">
      </div>
  
  
      <ul class="color-list">
        <li><?php echo CFS()->get('li1'); ?>リスト</li>
        <li><?php echo CFS()->get('li2'); ?>リスト</li>
        <li><?php echo CFS()->get('li3'); ?>リスト</li>
      </ul>
  
      <div class="n-link">
        <a href="<?php echo CFS()->get('link'); ?>" >テキストリンクテキストリンク</a>
      </div>


      <div class="recommend-blog">

        <h2>おすすめの記事</h2>

        <?php
          $the_query =new WP_Query('tag_id=152');
          if($the_query->have_posts()):
          while($the_query->have_posts()):
          $the_query->the_post(); ?>

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

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else: ?>
          <?php endif; ?>


      </div>
  </div>

  <?php get_sidebar(); ?>
  </section>
  <?php get_footer('second'); ?>
