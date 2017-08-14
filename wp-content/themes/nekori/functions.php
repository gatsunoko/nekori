<?php

function the_slug() {
  $slug = '';
  //カテゴリーアーカイブページが表示されている場合
  if(is_category()){
    $category = get_the_category();           //カテゴリーの情報を取得
    $slug = $category[0]->category_nicename;  //カテゴリーのスラッグを取得
  }
  //それ以外のページが表示されている場合
  else {
    $id = get_the_ID();                       //ページのIDを取得
    $page = get_post($id);                    //IDに該当するページの情報を取得
    $slug = $page->post_name;                 //ページのスラッグを取得
  }
  //スラッグを出力する
  echo $slug;
}

add_theme_support('post-thumbnails');

//---------------人気記事一覧を表示-----------------------
function most_viewed_posts() {
  ob_start(); // Buffer output
?>
<ul class="ranking_articles">
  <?php
    // 以下のWP_Queryで表示回数上位５件の記事を取得
    $query = new WP_Query(array(
      'meta_key' => 'views',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'date_query' => array(
        array(
          'year' => date( 'Y' ),
          'month' => date( 'M' ),
        ),
      'posts_per_page' => 5
    ));
    
    // 以下のwhileループで上記で取得した人気上位５件の記事をhtml含めて出力
    while ($query->have_posts()) : $query->the_post();
  ?>
  <li class="article">
    <a href="<?php the_permalink(); ?>">
      <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>')">
      </div>
      <div class="text_area">
          <p class="title"><?php the_title(); ?></p>
          <p class="contributor"><?php the_author(); ?></p>
      </div>
    </a>
  </li>
  <?php
    endwhile;
  ?>
</ul>
<?php
$output = ob_get_clean(); // clear buffer
return $output;
}
 
// most_viewd_posts()のショートコードを作成
add_shortcode('most_viewed', 'most_viewed_posts');
 
// ショートコードをテキストウィジェットで使用できるようにするためのフィルタ
add_filter('widget_text', 'do_shortcode');
//---------------人気記事一覧を表示　ここまで-----------------------
