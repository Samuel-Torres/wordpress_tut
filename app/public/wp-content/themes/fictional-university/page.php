<?php

  get_header();

  $theParent = wp_get_post_parent_id(get_the_ID());

  while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg") ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Fix this</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
    <?php 
      if($theParent) {
        ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php  echo get_permalink( $post->post_parent ); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title( $post->post_parent ); ?>
          </a> 
          <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>
      <?php
      }  
    ?>
    <?php 
      $isParent = get_pages(array(
        "child_of" => get_the_ID()
      ));
    
      if($theParent or $isParent){ ?>


      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent)?>"><?php echo get_the_title($theParent)?></a></h2>
        <ul class="min-list">
          <!-- <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li> -->
          <?php 

            // associative array = 
            // $animalSounds = array (
            //   "cat" => "meow",
            //   "dog" => "woof",
            //   "cow" => "moo"
            // );
            

            wp_list_pages(array(
              "title_li" => null,
              "child_of" => ($theParent) ?  $theParent : get_the_ID(),
              "sort_column" => "menu_order" // order by wordpress admin ordering 
            ));
          ?>
        </ul>
      </div>
      <?php } ?>

      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>
    
  <?php }

  get_footer();

?>