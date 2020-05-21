<?php

defined('ABSPATH') || exit;

$aboutus = new WP_Query([
    'post_type' => 'about_us',
    'posts_per_page' => 1,
    'orderby' => 'post_title',
    'order' => 'ASC',
]);

?>

<div class="row">
    <?php while ($aboutus->have_posts()) : $aboutus->the_post(); ?>
        <?php get_template_part('loop-templates/content', 'about-us'); ?>
    <?php endwhile; ?>
</div>