<?php
/**
 ** Template Name: Character Profiles Layout
 ** Template Post Type: characters
 **/
get_header();
?>
<main class="character-profile-template row">
    <div>
        <!-- Show featured image -->
        <?php
            if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="featured image">
        <?php endif; ?>
    </div>
    <div>
        <!-- This wil show the rest of the content -->
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>