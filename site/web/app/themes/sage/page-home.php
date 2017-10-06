<?php
/**
 * Template Name: Home Template
 */
?>
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
    <section id="home"><?php (get_template_part("templates/components/banner-section"))?></section>
    <section id="aboutme"><?php (get_template_part("templates/components/about-me"))?></section>
    <section id="projects"><?php (get_template_part("templates/components/projects"))?></section>
    <section id="contact"><?php (get_template_part("templates/components/contact"))?></section>
<?php endwhile; ?>
<?php endif; ?>
 





    