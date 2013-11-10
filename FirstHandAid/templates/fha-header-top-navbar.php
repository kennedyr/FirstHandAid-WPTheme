<!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="headDrop"></div>
<header role="banner">
    <div class="header-content">
        <div class="col-md-4">
            <h4 class="site-title">
                <?php if ( shoestrap_getVariable( 'navbar_brand' ) != 0 ) :
                  echo '<a class="' . shoestrap_branding_class( false ) . '" href="' . home_url() . '/">';
                  if ( shoestrap_getVariable( 'navbar_logo' ) == 1 )
                    shoestrap_logo();
                  else
                    bloginfo( 'name' );
                  echo '</a>';
                endif; ?>
            </h4>
        </div>
        <div class="col-md-4 center-text">
<!--    <a class="color-white" href='#'>VOLUNTEER</a>
    <a class="color-white" href='#'>SHARE</a>-->
           <?php
            if ( has_nav_menu( 'primary_navigation' ) ) :
              wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) );
            endif;
           ?>
        </div>
        <div class="col-md-4">
            <div class="pull-right">	
                <a class="btn btn-default bold-text" href="#">DONATE</a>
                <a href="#"><img class="rolllink" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/facebook.png'?>" alt="Follow First Hand Aid on Facebook"/>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/facebook-rollover.png'?>" alt="Follow First Hand Aid on Facebook"/></a>
                <a href="#"><img class="rolllink" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/blog.png'?>" alt="Follow First Hand Aid on Facebook"/>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/blog-rollover.png'?>" alt="Follow First Hand Aid on Facebook"/></a>
            </div>
        </div>
    </div>
</header>