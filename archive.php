<?php get_header(); ?>

<div id="b-contents" class="archi">
 <?php if(is_post_type_archive()):?>
  <h2>新着一覧</h2>
 <?php elseif(is_category()):?>
  <h2><?php wp_title(''); ?>一覧</h2>
<?php elseif(is_tag()):?>
  <h2>タグ一覧</h2>
<?php endif ;?>


  <?php if(have_posts()): while(have_posts()):the_post(); ?>

      <div class="b-item">
        
        <div class="b-image">
          <span class="c-name">
          <?php 
              $category = get_the_category(); 
              if ( $category[0] ) {
                echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
              }
            ?>
          </span>
          
  
          
          <div class="thumbnail">
          <a href="<?php the_permalink(); ?>">
          <?php
            if(has_post_thumbnail()):
              the_post_thumbnail('midium');
            else:
          ?>
          <img src="<?php echo get_template_directory_uri(); ?>/image/no-image.png" alt="" />
          <?php endif; ?>
          </a>
          </div>
        
        </div>

        <div class="b-title">
          <h3>
            <a href="<?php  the_permalink()?>">
            <?php
            if(mb_strlen($post->post_title, 'UTF-8')>50){
              $title= mb_substr($post->post_title, 0, 50, 'UTF-8');
              echo $title.'……';
            }else{
              echo $post->post_title;
            }
            ?>
            </a>
          </h3>
          <p class="date"><?php echo get_the_date('Y-m-d') ;?></p>
          <p><?php echo CFS()->get('p2'); ?></p>
          <!-- <p>the_excerpt(); ?></p> -->
        </div>

      </div>
      <?php endwhile; endif; ?>
      
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