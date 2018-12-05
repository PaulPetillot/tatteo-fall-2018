<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">

  <?php wp_head();?>
</head>

<body <?php body_class();?>>

  <div class="overlay"></div>
  <div class="dilog-container">
    <div class="modal-dilog-roles">
      <a class="cancel-modal-dilog-roles"><i class="fas fa-times"></i><a>
          <div class="flex-container">
            <p>Sign up here to have full access to Buzz!</p>
            <div>
              <a class="studio-role role">Studio</a>
              <a class="artist-role role">Artist</a>
            </div>
            <p>Already have an account? Login <a>here</a>.</p>
          </div>
    </div>

    <!-- <div class="modal-dilog">
    <form class="register-form">
      <label>User name</label>
      <input type="text" class="new-user-name" />
      <label>Password</label>
      <input type="password" class="new-user-password" />
      <input class="add-user-btn" type="submit" value="Submit">
    </form>
  </div> -->
  </div>

  <div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">
      <div class="site-branding">
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/logo/buzz-writing.png"></a>
      </div><!-- .site-branding -->
      <a class="login-link">Login</a>
      <nav id="site-navigation" class="main-navigation" role="navigation">
        
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">