<!-- aside start -->
<aside class="col-md-4 mt-30" id="sidebar"  role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">

  <!-- プロフィール＆検索窓 サイドバー -->
  <?php dynamic_sidebar('sidebar_widget01') ?>

  <!-- よく読まれている記事 -->
  <div class="bg-white text-center px-3 pt-5 pb-4">
    <h4 class="mb-4 text-dark">よく読まれている記事</h4>
    <hr class="mb-5">

    <?php $side_query = new WP_Query('tag=popular'); ?>
    <?php if ( $side_query->have_posts() ) : ?>
      <?php while ( $side_query->have_posts() ) : $side_query->the_post(); ?>
        
        <a class="d-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php $img = get_eyecatch_with_default(); ?>    <!-- サムネイルのurl取得 -->
          <div class="border" style="background: url('<?php echo $img[0]; ?>') center center no-repeat; background-size: cover; height: 150px;"></div>
        </a>
        <h5 class="h6 mt-4 mb-5">
          <a class="text-secondary" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h5>
          
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

  </div>
  <!-- 月別アーカイブ
  <div class="bg-white pt-5 px-3">
    <ul class="">
      <h4 class="text-center mb-4">Archive</h4>
      <hr class="mb-40">
      <li class="list-unstyled border-top">
        <a class="d-block text-secondary p-3" href="#">20201122</a>
      </li>
      <li class="list-unstyled border-top">
        <a class="d-block text-secondary p-3" href="#">20201122</a>
      </li>
      <li class="list-unstyled border-top">
        <a class="d-block text-secondary p-3" href="#">20201122</a>
      </li>
    </ul>
  </div> -->

</aside>
<!-- aside end -->