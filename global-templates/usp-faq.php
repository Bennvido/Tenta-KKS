<?php

defined('ABSPATH') || exit;

$faqs = new WP_Query([
    'post_type' => 'usp_faq',
    'posts_per_page' => 3,
    'orderby' => 'publish_date',
    'order' => 'ASC',
]);

?>
<?php if ($faqs->have_posts()) : ?>
    <hr>
    <h3 class="text-center"><?php _e('How do adopt a cat', 'kks') ?></h3>
<?php endif; ?>
<div class="row">
    <?php while ($faqs->have_posts()) : $faqs->the_post(); ?>
        <?php get_template_part('loop-templates/content', 'usp-faq'); ?>
    <?php endwhile; ?>
</div>