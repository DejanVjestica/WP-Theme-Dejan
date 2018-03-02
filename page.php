<?php get_header(); ?>

<section id="page" class="wrapper">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <!-- <figure>
        <?php  the_post_thumbnail(); ?>
      </figure> -->

      <p><?php the_content(); ?></p>

    <?php endwhile; else: ?>
    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
</section>

<?php get_footer(); ?>
