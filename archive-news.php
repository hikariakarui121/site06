<?php get_header('second'); ?>

<div id="inform" class="active">
  <h2>お知らせ一覧</h2>

  <div class="i-contents">

    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="i-item">
      <p><?php echo get_the_date('Y.m.d') ;?></p>
      <p><a href="<?php the_permalink();?>"><?php the_title() ;?></a></p>
    </div>
    <?php endwhile; endif; ?>

  </div>
</div>

<nav class="pagination">
    <?php
        global $wp_query;
        echo paginate_links(array(
            'format' => '/page/%#%' ,
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'prev_next' => false,
            'type' => 'list',
        ));
    ?>
</nav>




<?php get_footer(); ?>