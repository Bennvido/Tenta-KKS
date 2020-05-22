<?php
/*
* Hero for the front page
*/
defined('ABSPATH') || exit;
?>

<?php
$image = get_field('hero_image');
$bg_color = get_field('hero_background_color');
$link = get_field('hero_link');
?>
<section id="front-page-hero" style="background-color: <?php echo $bg_color; ?> ">
    <div class="container">
        <?php if (get_field('hero_link')) : ?>
            <a href="<?php echo $link['url']; ?>">
        <?php endif; ?>
                <img src="<?php echo $image['url']; ?>" alt="">
            </a>
    </div>
</section>