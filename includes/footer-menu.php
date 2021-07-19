<!-- footer start -->
<footer class="bg-white footer" id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
  <div class="container">
    <div class="row pt-5">

      <div class="col-md-4 mb-5">
        <?php dynamic_sidebar('footer_widget01'); ?>
      </div>

      <div class="col-md-4 mb-5">
        <div class="footer-item">
          <h3 class="text-center mb-4">Portfolio</h3>
          <hr class="mb-40">
            <?php
              $defaults = array(
                'menu_class'      => 'footer-nav-menu',
                'container'       => false,
                'theme_location'  => 'footer-navgation',
              );
              wp_nav_menu( $defaults );
            ?>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <?php dynamic_sidebar('footer_widget02'); ?>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-12 bg-dark text-center">
      <p class="text-white mb-0 copyright-text">
        Copyright&copy; - <?php the_author(); ?>, 2020 All Rights Reserved.
      </p>
    </div>
  </div>

</footer>
<!-- footer end -->