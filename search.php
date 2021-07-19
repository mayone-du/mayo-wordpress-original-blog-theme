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
          <article class="col-md-8 mt-30" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
            <section>
              
              <?php
                global $wp_query;
                $total_results = $wp_query->found_posts;
                $search_query = get_search_query();
              ?>
 
              <h1 class="h3 text-dark font-weight-bold pt-3 pr-3">検索キーワード：<?php echo $search_query; ?><span>（<?php echo $total_results; ?>件）</span></h1>
              
              <?php
                if( $total_results >0 ):
                if(have_posts()):
                while(have_posts()): the_post();
              ?>
              <?php endwhile; ?>
                <hr class="d-inline-block mb-5">
              <?php endif; else: ?>
                <hr class="d-inline-block mb-4">
                <div class="">
                  <?php echo $search_query; ?> に一致する情報は見つかりませんでした。
                </div>
              <?php endif; ?>

              <?php while(have_posts()): the_post(); ?>
                <div class="bg-white text-center py-5 mb-30">
                  <?php get_template_part('includes/time'); ?>
                  <h2 class="h3 my-4 px-40">
                    <a class="text-secondary" href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  <div class="my-4 category">
                    <i class="far fa-folder-open mx-1"></i><?php the_category(' , '); ?>
                  </div>
                  <a class="d-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php $img = get_eyecatch_with_default(); ?>
                    <div class="main-thumbnails mb-4" style="background: url('<?php echo $img[0]; ?>') center center no-repeat; background-size: cover; width: 100%; height: 300px;">
                    </div>
                  </a>
                  <div class="px-40">
                    <?php the_excerpt(); ?>
                  </div>
					    <?php get_template_part('includes/read-btn'); ?>
                </div>
              <?php endwhile; ?>
                
            </section>

            
            <!-- ページネーション -->
            <?php if (function_exists('mytheme_pagination')): ?>
              <?php mytheme_pagination(); ?>
            <?php endif; ?>

          </article>
          <!-- contents end -->

          <?php get_sidebar(); ?>
         
        </div>

        <?php get_template_part('includes/breadcrumb'); ?>

        
      </div>
    </main>
    <!-- main end -->

  


    <?php get_template_part('includes/footer-menu'); ?>

    <?php get_footer(); ?>

  </body>
</html>