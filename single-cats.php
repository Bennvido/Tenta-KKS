<?php

/**
 * The template for displaying archive cats
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<div class="container">
    <div class="row">
        <!-- Loop start	 -->
        <?php if (have_posts()) : ?>
            <!-- Yay, we have posts  -->
            <?php while (have_posts()) : the_post(); ?>

                <!-- Accordion of FAQ's -->
                <?php get_template_part('loop-templates/content', 'single-cat'); ?>
                <!-- End of Accordion -->

            <?php endwhile; ?>
        <?php else : ?>
            <?php get_template_part('loop-templates/content', 'none'); ?>
        <?php endif; ?>
        <!-- end of posts  -->
    </div>
</div>
<?php
get_footer();
