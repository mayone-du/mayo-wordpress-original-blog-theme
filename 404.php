<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <?php get_header(); ?>
  </head>
  <body <?php body_class(); ?>>

    <?php get_template_part('includes/page-header'); ?>

    <?php get_template_part('includes/nav'); ?>


    <!-- main start -->
    <main class="bg-light text-secondary pb-30" id="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
      <div class="container">

        <div class="row">
          <!-- contents start -->
          <div class="col-md-8 mt-30">

            <div class="bg-white text-dark py-5 px-40">
              <h2 class="text-center pb-5">
                お探しのページが見つかりませんでした。
              </h2>
              <p>
                当サイトをご覧いただきありがとうございます。
                <br>申し訳ございませんが、お探しのページが見つかりませんでした。(´・ω・｀)
              </p>
              <p>原因としては、</p>
              <ul class="pl-3 mb-3">
                <li class="py-1">URLが間違っている</li>
                <li class="py-1">記事が削除された</li>
                <li class="py-1">非公開の記事</li>
              </ul>
              <p>などの可能性があります。</p>
              <p>お手数ですが、下記の方法でもう一度お探しください。</p>
              <h3 class="mt-5">検索して探す</h3>
              <div class="bg-white">
                <form class="d-flex search-form my-4" method="get" action="<?php echo home_url(); ?>">
                  <input class="form-control text-box" type="search" name="s" id="s" placeholder="Search for..." required>
                  <button type="submit" class="submit submit-404"><i class="fas fa-search"></i></button>
                </form>
              </div>
              <p>検索にはタイトル、本文、抜粋が含まれます。</p>
              <h3 class="mt-5 mb-3">カテゴリーから探す</h3>
              <?php
                // 親カテゴリーのものだけを一覧で取得
                $args = array(
                  'parent' => 0,
                  'orderby' => 'term_order',
                  'order' => 'ASC'
                );
                $categories = get_categories( $args );
              ?>

              <?php foreach( $categories as $category ) : ?>
                <li class="py-1 list-unstyled">
                  <i class="far fa-folder-open mx-1"></i><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
                </li>
              <?php endforeach; ?>
            </div>

          </div>
          <!-- contents end -->

          <?php get_sidebar(); ?>
            

        </div>

      </main>
      <!-- main end -->

    


      <?php get_template_part('includes/footer-menu'); ?>

      <?php get_footer(); ?>

    </div>
  </body>
</html>