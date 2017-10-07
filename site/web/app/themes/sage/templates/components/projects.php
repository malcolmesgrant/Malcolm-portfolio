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
           
                        <a href="https://github.com/malcolmesgrant/RockPaperScissorLizardSpock" target='popup'><img class="pic" src="<?php the_field('proj_image_one'); ?>" /></a>
                        <a href="https://github.com/malcolmesgrant/Tetris" target='popup'><img class="pic" src="<?php the_field('proj_image_two'); ?>" /></a>
                        <a href="https://github.com/malcolmesgrant/level-ground" target='popup'><img class="pic" src="<?php the_field('proj_image_three'); ?>" /></a>
                        <a href="https://github.com/malcolmesgrant/RapperCarousel" target='popup'><img class="pic" src="<?php the_field('proj_image_four'); ?>" /></a>
                        <a href="https://github.com/malcolmesgrant/flappyHomer" target='popup'><img class="pic" src="<?php the_field('proj_image_five'); ?>" /></a>
                        <a href="https://github.com/malcolmesgrant/jwliWebsite" target='popup'><img class="pic" src="<?php the_field('proj_image_six'); ?>"/></a>
                    
                    </div>
                 </div>
            </section>
    <?php endwhile; ?>
<?php endif; ?>

