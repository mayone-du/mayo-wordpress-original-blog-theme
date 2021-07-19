<!-- 公開、更新日の表示 -->
<time datetime="<?php the_time('Y-m-d') ?>" class="d-block text-center">
  <?php the_time(get_option('date_format')); ?>
  <?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
    （更新日：<?php the_modified_date('Y/m/d'); ?>）
  <?php endif;?>
</time>