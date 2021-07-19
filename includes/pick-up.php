<!-- pick-up start -->
<div class="row text-center pick-up">

<?php $top_query = new WP_Query('tag=pickup'); ?>
<?php if ( $top_query->have_posts() ) : ?>
  <?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
    
    <div class="col-md-4 mt-30">
      <div class="bg-white py-30">
        <?php $img = get_eyecatch_with_default(); ?>    <!-- サムネイルのurl取得 -->
        <div class="" style="background: url('<?php echo $img[0]; ?>') center center no-repeat; background-size: cover; height: 200px;"></div>
        <h2 class="my-4 px-3">
          <a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php get_template_part('includes/read-btn'); ?>
      </div>
    </div>
  
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>
<!-- pick-up end -->