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
          <article class="col-12 mt-30" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

            <?php while(have_posts()): the_post(); ?>
              <div class="bg-white py-5 contents">
                <?php get_template_part('includes/time'); ?>
                <h1 class="h3 text-center my-4 px-40 entry-title" itemprop="name headline">
                    <?php the_title(); ?>
                </h1>
                <a class="d-block" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <div class="post-thumbnail text-center mb-5"><?php the_post_thumbnail(); ?></div>
                </a>
                <section>
                  <?php the_content(); ?>
                </section>
          
              </div>
            <?php endwhile; ?>

          </article>
          <!-- contents end -->
        </div>


        <?php get_template_part('includes/breadcrumb'); ?>
            
      </div>
    </main>
    <!-- main end -->



    <?php get_template_part('includes/footer-menu'); ?>

    <?php get_footer(); ?>

  </body>
</html>