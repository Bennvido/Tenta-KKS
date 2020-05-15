
<div class="card-body col-4">
    <a id="cats-link-<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><h1 class="text-center"><?php the_title(); ?></a>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
</div>
