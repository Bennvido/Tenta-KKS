<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>

<?php
$args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'posts_per_page' => '4',
	'paged' => 1,
	'orderby' => 'modified',
	'order' => 'DSC',
);
$blog_posts = new WP_Query($args);
?>

<div class="wrapper" id="index-wrapper">
	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main my-posts" id="main">

				<?php
				if (have_posts()) {
					// Start the Loop.
					while ($blog_posts->have_posts()) {
						$blog_posts->the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part('loop-templates/content', 'blog-posts');
					}
				} else {
					get_template_part('loop-templates/content', 'none');
				}
				?>
			</main><!-- #main -->
			<div class="loadmore" type="submit"><?php _e('Load More...', 'kks') ?></div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->
<!-- script för load more knappen -->
<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	var page = 3;
	jQuery(function($) {
		$('body').on('click', '.loadmore', function() {
			var data = {
				'action': 'load_posts_by_ajax',
				'page': page,
				'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
			};

			$.post(blog.ajaxurl, data, function(response) {
				if ($.trim(response) != '') {
					$('.my-posts').append(response);
					page++;
				} else {
					$('.loadmore').hide();
				}
			});
		});
	});
</script>
<?php
get_footer();
