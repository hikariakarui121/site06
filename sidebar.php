

<div class="side-inner">

      <div class="side-top">
        関連記事
      </div> 

      <?php 

      $categories = get_the_category(); 

      $the_query =new WP_Query('$categories');
      if($the_query->have_posts()):
      while($the_query->have_posts()):
      $the_query->the_post(); 
      
      ?>

      <div class="b-item">

        <div class="b-image">
          <?php if(has_post_thumbnail()){ ?>
          <?php the_post_thumbnail(); ?>
          <?php } else{ ?>
          <img src="<?php bloginfo("template_url");?>/image/nophoto.jpg">
          <?php } ?>
        </div>

        <div class="b-title">
          <h3><a href="<?php the_permalink()?>"><?php the_title() ;?></a></h3>
        </div>
        
      </div>
      
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <?php endif; ?>

      <div class="category-items">

        <div class="items-title">カテゴリー</div>

        <?php if(have_posts()): while(have_posts()):the_post();?>
        <?php echo the_category();?>
  
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <?php endif; ?>
        
      </div>

  
</div>