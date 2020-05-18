<?php
/*
* Hero for the front page
*/
?>

<?php
    $image = geT_field('hero_image');
    $bg_color = geT_field('hero_background_color');
?>
<section id="front-page-hero" style="background-color: <?php echo $bg_color; ?> ">
    <div class="container">
        <img src="<?php echo $image['url']; ?>" alt="">
    </div>
</section>
