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
    <div class="container text-center">
        <?php if (the_field('hero_title', 'hero_subtitle')) : ?>
            <h1><?php the_field('hero_title') ?></h1>
            <p><?php the_field('hero_subtitle') ?></p>
        <?php endif; ?>
        <?php if ($link) : ?>
            <a href="<?php echo $link['url']; ?>">
            <?php endif; ?>
            <img id="hero-img" src="<?php echo $image['url']; ?>" alt="">
            </a>
    </div>
</section>