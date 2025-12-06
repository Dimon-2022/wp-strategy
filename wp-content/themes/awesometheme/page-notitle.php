/*
Template name: My first template for page
*/

<?php get_header(); ?>
<div class="wrapper">
    <div class="post-content">
        <?php if (have_posts()):
            while (have_posts()):the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <span><?php the_date(); ?></span>
                <p><?php the_category(); ?></p>
                <p><?php the_content(); ?></p>
                <hr>


            <?php endwhile;
        endif;
        ?>
    </div>


    <div class="sidebar">
        <?php get_sidebar('contact'); ?>
    </div>

</div>

<?php get_footer();
