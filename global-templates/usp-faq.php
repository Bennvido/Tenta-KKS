<?php

defined('ABSPATH') || exit;

$faqs = new WP_Query([
    'post_type' => 'usp_faq',
    'posts_per_page' => 3,
    'orderby' => 'post_title',
    'order' => 'ASC',
]);

?>

<div class="row">
    <?php while ($faqs->have_posts()) : $faqs->the_post(); ?>
        <?php get_template_part('loop-templates/content', 'usp-faq'); ?>
    <?php endwhile; ?>
</div>