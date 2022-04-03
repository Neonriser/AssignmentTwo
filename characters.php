<?php
/**
 ** Template Name: Characters Template
 ** Template Post Type: page
 **/
get_header();
?>

<section class="characters">
<h1 class="page-title"> <?php the_title(); ?> </h1>
<article class="wp-block-columns alignwide">
       <?php
       $args2 = array('post_type' => 'characters', 'posts_per_page' => 12);
       $the_query = new WP_QUERY($args2);
       if($the_query -> have_posts()) :
          while($the_query->have_posts()) : $the_query->the_post();
       ?>
       <div class="wp-block-column">
         <div class="row">
           <?php if(has_post_thumbnail()): ?>
            <img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="featured image">
            <?php endif; ?>
            <div class="char-info">
            <h3><?php the_title(); ?></h3>
            <?php
            the_content();
            ?>
            </div>
         </div>
         <?php
          endwhile;
          wp_reset_postdata();
        else:
        endif;
         ?>
       </div>
  </article>
</section>
<?php get_footer(); ?>