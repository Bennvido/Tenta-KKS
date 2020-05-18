<?php
    $image = geT_field('cat_image');
?>

<div class="card mb-3 col-lg-12 mt-5">
  <div class="row no-gutters">
    <div class="col-lg-8 align-self-center">
      <img src="<?php echo $image['url']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-lg-4">
      <div class="card-body">
        <h5 class="card-title"><?php the_field('cat_name') ?></h5>
        <p class="card-text"><strong>Birth date:</strong> <?php the_field('cat_age') ?></p>
        <p class="card-text"><strong>Color:</strong> <?php the_field('cat_color') ?></p>
        <p class="card-text"><strong>Weight:</strong> <?php the_field('cat_weight') ?></p>
        <p class="card-text"><strong>Gender:</strong> <?php the_field('cat_gender') ?></p>
        <p class="card-text"><strong>Description:</strong> <?php the_field('cat_description') ?></p>
        <p class="card-text"><small class="text-muted">Updated at: <?php the_modified_date() ?></small></p>
      </div>
    </div>
  </div>
</div>
