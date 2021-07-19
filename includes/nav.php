<?php wp_body_open(); ?>

<!-- nav start -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark nav">
  <div class="container">
    <a class="navbar-brand text-white home-link sp-ml-3" href="<?php echo home_url(); ?>"><i class="fas fa-home"></i></a>
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        $defaults = array(
          'menu_class'      => 'navbar-nav',
          'container'       => false,
          'link_before'     => '<span class="text-white nav-item p-1">',
          'link_after'      => '</span>',
          'theme_location'  => 'global-navgation',
        );
        wp_nav_menu( $defaults );
      ?>
    </div>
  </div>
</nav>
<!-- nav end -->