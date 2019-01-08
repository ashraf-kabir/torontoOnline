<?php get_header(); ?>

<div id="primary" class="primary post-<?php the_ID(); ?>">
    <?php while (have_posts()): the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
