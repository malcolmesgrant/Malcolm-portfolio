<?php
//instantiate WordPress Query Object for projects
$arguments = array('post_type' => 'project');
$projects_query = new WP_Query($arguments);
?>


<?php if ( $projects_query->have_posts() ): ?>
    <?php while ( $projects_query->have_posts() ): ?>
        <?php $projects_query->the_post(); ?>
            <section class="secprojects">
                <div class="projects container">
                    <div class="overlay">
           
                        <a href="" target='popup'><img class="pic" src="<?php the_field('proj_image_one'); ?>" /></a>
                        <a href="" target='popup'><img class="pic" src="<?php the_field('proj_image_two'); ?>" /></a>
                        <a href="" target='popup'><img class="pic" src="<?php the_field('proj_image_three'); ?>" /></a>
                        <a href="" target='popup'><img class="pic" src="<?php the_field('proj_image_four'); ?>" /></a>
                        <a href="" target='popup'><img class="pic" src="<?php the_field('proj_image_five'); ?>" /></a>
                        <a href="" target='popup'><img class="pic" src="<?php the_field('proj_image_six'); ?>"/></a>
                    
                    </div>
                 </div>
            </section>
    <?php endwhile; ?>
<?php endif; ?>

