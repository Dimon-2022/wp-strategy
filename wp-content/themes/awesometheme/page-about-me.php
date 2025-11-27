<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <span><?php the_date();?></span>
        <p><?php the_category();?></p>
        <p><?php the_content(); ?></p>
        <hr>


    <?php endwhile;
endif;
?>


<?php get_footer();

