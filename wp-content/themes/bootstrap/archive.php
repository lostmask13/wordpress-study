<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <h2><?php the_archive_title(); ?></h2>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
