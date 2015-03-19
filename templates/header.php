 <nav>
        <ul class="list-unstyled main-menu">
          
          <!--Include your navigation here-->
          <li class="text-right"><a href="#" id="nav-close">X</a></li>
      <div class="top_nav_offcanvas">
        <?php
        if (has_nav_menu('top-menu')) :
        wp_nav_menu(array('theme_location' => 'top-menu', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
        ?>
      </div>
      <!--./Top Nav Off-Canvas-->

      <?php
      if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav primary-navigation-list'));
      endif;
      ?>
      <div class="search header-search-bar"> <?php get_template_part('templates/searchform'); ?></div>
                
      </nav>
          
    <div class="navbar navbar-inverse navbar-fixed-top">      
        
        <!--Include your brand here-->
        <a class="navbar-brand" href="#">Off Canvas Menu</a>
        <div class="navbar-header">
          <a id="nav-expander" class="nav-expander fixed">
            MENU &nbsp;<i class="fa fa-bars fa-lg white"></i>
          </a>
        </div>
    </div>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
<!--Top Nav Full Screen -->
  <nav class="top_nav_full" role="navigation">
    <?php
    if (has_nav_menu('top-menu')) :
    wp_nav_menu(array('theme_location' => 'top-menu', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
    endif;
    ?>
      <div class="search header-search-bar"> <?php get_template_part('templates/searchform'); ?></div>
  </nav>
<!-- ./Top Nav Full Screen -->
  </div>
</header>

<!-- Toggle Button -->

<!-- ./Toggle Button -->

<div class="container branding_header">

  <div class="logo">
    <a href="<?php echo site_url();?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sophie_logo.svg" alt="" />
    </a>
  </div>

<div class="top_ad">
<!--Top 728x90 Ad -->
  <div id='div-gpt-ad-1379698607570-3' style='width:728px; height:90px;'>
    <script type='text/javascript'>
      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1379698607570-3'); });
    </script>
  </div>
<!--/Top 728x90 Ad -->
</div>

<header class="banner navbar navbar-default navbar-fixed-top-sm primary-navigation" role="banner" >
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" role="navigation" data-target="#navigation">MENU</button>
  </div>
  
      <nav class="navbar-offcanvas collapse navbar-collapse" id="navigation">
    <!--Top Nav Off-Canvas-->
  
      <div class="top_nav_offcanvas navbar-offcanvas">
        <div class="search "> <?php get_template_part('templates/searchform'); ?> </div>
      </div>
  
      <div class="top_nav_offcanvas">
        <?php
        if (has_nav_menu('top-menu')) :
        wp_nav_menu(array('theme_location' => 'top-menu', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
        endif;
        ?>
      </div>
      <!--./Top Nav Off-Canvas-->

      <?php
      if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav primary-navigation-list'));
      endif;
      ?>
      </nav>

</header>
</div>


