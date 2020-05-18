<?php
    $image = geT_field('cat_image');
?>
<div class="card-body col-4">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><h1 class="text-center"><?php the_field('cat_name'); ?></h1></a>
    <img src="<?php echo $image['url']; ?>" alt="">
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
</div>
