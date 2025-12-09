<?php get_header(); ?>

    <div class="row">
        <!--Posts block-->
        <div class="col-xs-12 col-sm-8 dima" id="dima-student">
            <?php if (have_posts()):
                while (have_posts()):the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile;
            endif;
            ?>

        </div>

        <!--Sidebar block-->
        <div class="col-xs-12 col-sm-4">
            <?php
            $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'data',
                    'order' => 'DESC',
                    'posts_per_page' => 3,
                    'category_name' => 'parrots'
            );

            $query = new WP_Query($args);

            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    the_title();
                    the_post_thumbnail();

                }
            }
            wp_reset_postdata();
            ?>
            <?php get_sidebar(); ?></div>
    </div>


<?php get_footer();
