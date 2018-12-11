s<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<section class="studio-users">		
<?php
$args1 = array(
 'role' => 'artist',
 'orderby' => 'registered',
 'order' => 'ASC', 
 'number' => '6'
);
 $studios = get_users($args1);
 foreach ($studios as $user) {
 echo '<li>'
 . get_avatar($user->ID, 120) .
 '<br />'
 . $user->display_name .
 '<br />'
 . $user->user_email .
 '<br />'
 . $user->user_description .
 '</li>';
 }
?>

</section>
	
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
