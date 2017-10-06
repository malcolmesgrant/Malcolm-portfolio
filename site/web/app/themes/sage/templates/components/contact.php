<?php
//instantiate WordPress Query Object for projects
$arguments = array('post_type' => 'project');
$projects_query = new WP_Query($arguments);
?>
<?php $projects_query->the_post(); ?>

<section class="last">
    <span class="contact">Contact Me</span>
    <h3 class="talk">Let's Talk</h3>
    <?php the_field('contactme'); ?>
    <div class="social">
         <a href="http://www.twitter.com/malcolmesgrant" target='popup'>Twitter</a>
         <a href="http://www.github.com/malcolmesgrant" target='popup'>Github</a>
         <a href="http://www.linkedin.com/malcolmesgrant" target='popup'>LinkedIN</a>
    </div>
        

   
</section>
            
