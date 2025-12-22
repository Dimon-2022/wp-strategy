<?php get_header(); ?>

    <div class="row">
        <!--Posts block-->
        <div class="col-xs-12 col-sm-8 dima" id="dima-student">
            <?php if (have_posts()): ?>
                <h1>Found posts by keyword <span style="color:green;"><?php echo $_GET['s'];?></span></h1>
                <?php while (have_posts()):the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile;
            else:?>
                <h1>Not Found posts by keyword <span style="color:red;"><?php echo $_GET['s'];?></span></h1>
            <?php endif; ?>

        </div>

        <!--Sidebar block-->
        <div class="col-xs-12 col-sm-4">
            <?php
            $args_cat = array(
                    'include' => '10,5,11',
            );

            $categories = get_categories($args_cat);

            $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'data',
                    'order' => 'DESC',
                    'posts_per_page' => 3,
                    'category__in' => array(10,5,11),
                    'category__not_in' => array(5),
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
