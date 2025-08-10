<?php
/*
 * Template Name: Canvas
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area" style="width:100%;max-width:1400px;margin:0 auto;">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>