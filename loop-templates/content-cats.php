<?php
$image = get_field('cat_image');

?>
<div class="card-body col-12 col-md-4 col-lg-4 text-center">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
        <h1><?php the_field('cat_name'); ?></h1>
    </a>
    <div>
        <img style="max-height: 200px; width:auto;" src="<?php echo $image['url']; ?>" alt="">
    </div>
    <div class="d-inline-block text-left">
        <p class="card-text"><strong>Located at:</strong> <?php echo get_the_term_list($post->ID, 'city') ?></p>
        <p class="card-text"><strong>Gender:</strong> <?php echo get_the_term_list($post->ID, 'gender') ?></p>
        <p class="card-text"><strong>Adopted:</strong> <?php the_field('cat_adopted') ?>
    </div>
</div>