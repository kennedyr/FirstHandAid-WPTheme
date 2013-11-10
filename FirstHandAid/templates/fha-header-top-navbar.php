<!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="headDrop"></div>
<header role="banner">
    <div class="header-content">
        <div class="connect-col">
            <h4 class="site-title pull-left">
                <?php if ( shoestrap_getVariable( 'navbar_brand' ) != 0 ) :
                  echo '<a class="' . shoestrap_branding_class( false ) . '" href="' . home_url() . '" style="color:white;" >';
                  if ( shoestrap_getVariable( 'navbar_logo' ) == 1 )
                    shoestrap_logo();
                  else
                    bloginfo( 'name' );
                  echo '</a>';
                endif; ?>
            </h4>
        </div>
        <div class="connect-col center-text">
           <?php
            if ( has_nav_menu( 'primary_navigation' ) ) :
              wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) );
            endif;
           ?>
        </div>
        <div class="connect-col">
            <div class="pull-right">	
                <a class="btn btn-default bold-text" href="/donate">DONATE</a>
                <a href="https://www.facebook.com/pages/First-Hand-Aid/167852101320"><img class="rolllink" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/facebook.png'?>" alt="Follow First Hand Aid on Facebook"/>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/facebook-rollover.png'?>" alt="Follow First Hand Aid on Facebook"/></a>
                <!--<a href="#"><img class="rolllink" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/blog.png'?>" alt="Follow First Hand Aid on Facebook"/>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/blog-rollover.png'?>" alt="Follow First Hand Aid on Facebook"/></a>-->
            </div>
        </div>
    </div>
</header>