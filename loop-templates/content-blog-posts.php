<?php
    defined('ABSPATH') || exit;
?>
<div class="card-body col-8 m-auto" style="box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><h1 class="text-center"><?php the_field('cat_name'); ?></h1></a>
    <h2 class="text-center"><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    <p class="card-text"><small class="text-muted"> <?php printf( __( 'Updated at: %1$s at  %2$s', 'kks' ),
    get_the_modified_date( 'F j, Y' ),
    get_the_modified_date( 'G:i' )
); ?></small></p>
</div>
<hr>