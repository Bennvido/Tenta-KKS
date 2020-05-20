<?php
    $image = get_field('cat_image');
 
?>
<div class="card-body col-4">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><h1 class="text-center"><?php the_field('cat_name'); ?></h1></a>
    <img  src="<?php echo $image['url']; ?>" alt="">
    
    
    
    <p class="card-text"><strong>Located at:</strong> <?php echo get_the_term_list( $post->ID, 'city') ?></p>
    <p class="card-text"><strong>Gender:</strong> <?php echo get_the_term_list( $post->ID, 'gender') ?></p>
</div>
