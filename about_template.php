<?php
/**
* Template Name: About Template
*Template Post Type: page
**/
get_header();
?>

<!--doctype content here-->
<main>

<?php

 ?>

    <section class="about">
        <h1 class="page-title"> <?php the_title(); ?> </h1>
        <div class="wp-block-columns alignwide">
            <div class="wp-block-column">
                <img class="wide roundedge" src="<?php the_field('main_image'); ?>" />
            </div>
        </div>
        <div class="wp-block-columns alignwide">
            <div class="wp-block-column">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
