<?php get_header(); ?>


<div class="pan">
    
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }?>
          </div>
</div>

<section id="news">
  <div class="new-inner">
    
      <h1>
       <?php the_title(); ?>
      </h1>

      <p><?php echo get_the_date('Y.m.d') ;?></p>

      <div class="item-2">
        <h2><?php echo CFS()->get('h1'); ?></h2>
        <p><?php echo CFS()->get('contents1'); ?></p>
      </div>
        
      <div class="item-3">
        <h3><?php echo CFS()->get('h2'); ?></h3>
        <p><?php echo CFS()->get('contents2'); ?></p>
      </div>
        
      <blockquote>
          <p><?php echo CFS()->get('blockquote'); ?></p>
      </blockquote>
  
      <div class="image-5">
        <img src="<?php echo CFS()->get('image'); ?>" alt="">
      </div>
  
      <ul>
        <li><?php echo CFS()->get('li1'); ?></li>
        <li><?php echo CFS()->get('li2'); ?></li>
        <li><?php echo CFS()->get('li3'); ?></li>
      </ul>
  
      <div class="n-link">
        <a href="<?php echo CFS()->get('a'); ?>" >テキストリンクテキストリンク</a>
      </div>

  </div>
  </section>

<?php get_footer('second'); ?>
