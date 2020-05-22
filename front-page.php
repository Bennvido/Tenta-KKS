<?php

/**
 * The template for displaying front page
 *
 * This is the template that displays front page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<?php
$cats = new WP_Query([
	'post_type'     =>      'cats',
	'posts_per_page'    =>  3,
	'meta_query'     => array(
		array(
			'key'   => 'cat_adopted',
			'value' => 'No',
			'orderby' => 'date',
			'order' => 'DSC'
		)
	)
]);
?>
<?php
$catsadopted = new WP_Query([
	'post_type'     =>      'cats',
	'posts_per_page'    =>  3,
	'meta_query'     => array(
		array(
			'key'   => 'cat_adopted',
			'value' => 'Yes',
			'orderby' => 'date',
			'order' => 'DSC'
		)
	)
]);
?>
<?php get_template_part('global-templates/hero-frontpage'); ?>

<?php get_template_part('global-templates/hero'); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
		<?php get_template_part('global-templates/about-us'); ?>
		<hr>
		<h1 class="text-center">Three steps to adopt a cat</h1>
		<?php get_template_part('global-templates/usp-faq'); ?>
		<h1 class="text-center">Latest arrived cats</h1>
		<div class="row">


			<?php while ($cats->have_posts()) : $cats->the_post(); ?>

				<?php get_template_part('loop-templates/content', 'cats'); ?>

			<?php endwhile; ?>
		</div><!-- .row -->
			<hr>
		<h1 class="text-center">Latest adopted cats</h1>
		<div class="row">
			<?php while ($catsadopted->have_posts()) : $catsadopted->the_post(); ?>

				<?php get_template_part('loop-templates/content', 'cats'); ?>

			<?php endwhile; ?>
		</div>

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
