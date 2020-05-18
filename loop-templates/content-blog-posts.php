<div class="card-body col-8 m-auto">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><h1 class="text-center"><?php the_field('cat_name'); ?></h1></a>
    <h1 class="text-center"><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <p class="card-text"><small class="text-muted"> <?php printf( __( 'Updated at: %1$s at  %2$s', 'textdomain' ),
    get_the_modified_date( 'F j, Y' ),
    get_the_modified_date( 'G:i' )
); ?></small></p>
</div>
<hr>