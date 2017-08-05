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