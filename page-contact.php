<?php get_header('second'); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

<section id="contact-page">
    <div class="con-inner">
    
      <?php the_content() ;?>

    </div>

</section>

  <?php endwhile; endif; ?>


<?php get_footer(); ?>