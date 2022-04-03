<?php
/**
* Template Name: Home Template
*Template Post Type: page
**/
get_header();
?>

<!--doctype content here-->
<main>

<?php

 ?>

    <section class="homepage">
        <div class="wp-block-columns alignwide">
            <div class="wp-block-column">
                <img class="wide roundedge" src="<?php the_field('main_image'); ?>" />
            </div>
        </div>
        <div class="wp-block-columns alignwide">
            <div class="wp-block-column">
                <?php the_field('main_content'); ?>
            </div>
        </div>

        
        <div class="wp-block-columns alignwide">
            <div class="wp-block-column">
            <?php the_field('sub_content'); ?>
            </div>
            <div class="wp-block-column">
            <img class="roundedge" src="<?php the_field('sub_image'); ?>" />
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
