<?php
/**
*Template Name: Example of Template
*/
?>
 <?php /** we do this every time to create html
    *and colons are the replacement of brackets like javascript conditionals 
*/ ?>
<?php if (have_posts() ): ?> 
<?php /** we do this every time to create html
    *and colons are the replacement of brackets like javascript conditionals 
*/ ?>
    <?php while ( have_posts() ): ?>
        <section class="banner-example">
            <?php the_title(); ?>
            <?php // shows the content in the WYSIWYG Editor ?>
            <?php the_content(); ?>
            <?php // shows the featured image of this page ?>
            <?php if have_post_thumbnail(); ?>
            <?php the_post_thumbnail(); ?>
        </section>
    <?php endwhile ?>
<?php endif ?>
