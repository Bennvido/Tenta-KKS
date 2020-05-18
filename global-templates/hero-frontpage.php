<?php
/*
* Hero for the front page
*/
?>

<?php
    $image = geT_field('hero_image');
?>
<section id="front-page-hero">
    <div class="container">
        <h1><?php the_field('hero_title'); ?></h1>
    </div>
</section>
