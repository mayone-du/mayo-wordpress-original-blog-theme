
<?php

function init_func() {

  
  // パンくずリスト
  function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow"><i class="fas fa-map-marker-alt"></i> HOME</a>';
    if (is_single()) {
      if (has_category()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &nbsp;&sbquo;&nbsp; ');
      }
      echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
      the_title();
    } elseif (is_page()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      echo the_title();
    } elseif (is_search()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
      echo '"&nbsp;<em>';
      echo the_search_query();
      echo '</em>&nbsp;&nbsp;"';
    } elseif (is_archive()) {
      echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
      the_category(' &nbsp;&sbquo;&nbsp; ');
    }
  }

  

  // タイトルタグ、サムネイル設定追加
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus(
    array(
      'global-navgation' => 'グローバル',
      'footer-navgation' => 'フッター',
    )
  );

}
add_action('init', 'init_func');



// カスタム投稿タイプの設定
add_action('init', function(){
  register_post_type('item', [
    'label' => '1ブロックページ',
    'public' => true,
    'supports' => ['excerpt', 'thumbnail', 'title', 'editor'],
  ]);
});











// アイキャッチがない場合の表示
function get_eyecatch_with_default() {
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id);
  else:
    $img = array(get_template_directory_uri() . '/image/no-image.jpg');
  endif;

  return $img;
}


  // ウィジェットの登録
  function my_widgets_init() {
  
    register_sidebar( array(
      'name' => 'サイドバー',
      'id' => 'sidebar_widget01',
      'before_widget' => '<div class="bg-white p-4 mb-30 profile">',
      'after_widget' => '</div>',
    ) );

    register_sidebar( array(
      'name' => 'フッタープロフィール',
      'id' => 'footer_widget01',
      'before_widget' => '<div class="footer-item profile">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-center mb-4">',
      'after_title' => '</h3><hr class="mb-40">',
    ) );
    
    register_sidebar( array(
      'name' => 'フッターTwitter',
      'id' => 'footer_widget02',
      'before_widget' => '<div class="footer-item">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-center mb-4">',
      'after_title' => '</h3><hr class="mb-40">',
    ) );

  }
  add_action( 'widgets_init', 'my_widgets_init' );


  // ページネーション
  function mytheme_pagination() {
    global $wp_query;
    if ($wp_query->max_num_pages <=1)
    return;
    echo '<nav class="pagination mt-30">';
    echo paginate_links (array(
      'total' => $wp_query->max_num_pages,
      'prev_text' => ('<'),
      'next_text' => ('>'),
      'type' => 'list',
    ));
    echo '</nav>';
  }





?>
