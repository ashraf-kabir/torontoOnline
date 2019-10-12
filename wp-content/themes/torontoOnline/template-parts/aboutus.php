<div class="about-us">
    <?php $aboutUs = new WP_Query('page_id=15') ?>
    <?php while ($aboutUs->have_posts()): $aboutUs->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile;
    wp_reset_postdata(); ?>
</div>