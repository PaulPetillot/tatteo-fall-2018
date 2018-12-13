<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
					<h1 class="page-title">Guestspots</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<section>
<?php
    $loop = new WP_Query( array( 'post_type' => 'guestspot', 'order' => 'ASC', 'posts_per_page' => '-1') );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="guestspots">
                    <div class="link-guestspot">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo CFS()->get('image'); ?>" /></a>
                    </div>
                <ul class="">
                   <li><?php echo get_the_title(); ?></li>
                   <li> <?php echo CFS()->get('location'); ?></li>
                </ul>
            </div>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>
</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>