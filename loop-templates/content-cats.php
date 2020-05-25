<?php
$image = get_field('cat_image');

defined('ABSPATH') || exit;
?>
<div class="card-body col-12 col-md-4 col-lg-4 text-center">
    <div class="card">
        <a class="cat-name-link" id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
            <h3><?php the_field('cat_name'); ?></h3>
        </a>
        <div>
            <a class="cat-name-link" id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
                <img id="small-cats-img" src="<?php echo $image['url']; ?>" alt="">
            </a>
        </div>
        <div class="d-inline-block text-left font-italic">
            <p class="card-text"><strong><?php _e('Located at:', 'kks') ?></strong> <?php echo get_the_term_list($post->ID, 'city') ?></p>
            <p class="card-text"><strong><?php _e('Gender:', 'kks') ?></strong> <?php echo get_the_term_list($post->ID, 'gender') ?></p>
            <p class="card-text"><strong><?php _e('Adopted:', 'kks') ?></strong> <?php the_field('cat_adopted') ?>
        </div>
    </div>
</div>