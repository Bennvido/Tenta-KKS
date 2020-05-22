<?php
    $image = geT_field('cat_image');
    
    defined('ABSPATH') || exit;
?>

<div class="card mb-3 col-lg-12 mt-5">
  <div class="row no-gutters">
    <div class="col-lg-8 align-self-center">
      <img src="<?php echo $image['url']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-lg-4">
      <div class="card-body">
        <h5 class="card-title"><?php the_field('cat_name') ?></h5>
        <p class="card-text"><strong><?php _e('Birth date:')?></strong> <?php the_field('cat_age') ?></p>
        <p class="card-text"><strong>Color:</strong> <?php the_field('cat_color') ?></p>
        <p class="card-text"><strong>Weight:</strong> <?php the_field('cat_weight') ?>kg</p>
        <p class="card-text"><strong>Gender:</strong> <?php echo get_the_term_list( $post->ID, 'gender') ?></p>
        <p class="card-text"><strong>Located at:</strong> <?php echo get_the_term_list( $post->ID, 'city') ?></p>
        <p class="card-text"><strong>Adopted:</strong> <?php the_field('cat_adopted') ?> <?php if(get_field('cat_date_adopted')):?> at <?php endif; ?> <?php the_field('cat_date_adopted') ?> </p>
        <p class="card-text"><strong>Description:</strong> <?php the_field('cat_description') ?></p>
        <p class="card-text"><small class="text-muted"> <?php printf( __( 'Updated at: %1$s at  %2$s', 'textdomain' ),
    get_the_modified_date( 'F j, Y' ),
    get_the_modified_date( 'G:i' )
); ?></small></p>
      </div>
    </div>
  </div>
</div>
