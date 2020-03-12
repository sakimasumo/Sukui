<?php
/**
 * カスタムメニューの登録
 */
register_nav_menus();





/**
* アイキャッチ画像の有効化
*/
add_theme_support('post-thumbnails');
/**

* カスタム投稿タイプ（新着情報）の登録
*/
register_post_type(
 'news',
 array(
 'labels' => array(
 'name' => 'お知らせ',
 'add_new_item' => 'お知らせの追加',
 'edit_item' => 'お知らせの編集'
 ),
 'public' => true,
 'supports' => array('title', 'editor', 'thumbnail')
 )
);




add_action('init', 'create_post_type');

function create_post_type(){
/**
 * カスタム投稿タイプ（商品）の登録
 */
register_post_type(
    'product',
    array(
        'labels' => array(
        'name' => '商品',
        'add_new_item' => '商品の追加',
        'edit_item' => '商品の編集'
    ),
    'public' => true,
    'supports' => array('title','editor','thumbnail')
)
);


register_taxonomy(
    "product",
    'product',
    array(
        'hierarchical' => true, //カテゴリータイプの指定
        'update_count_callback' => '_update_post_term_count',
        //ダッシュボードに表示させる名前
        'label' => 'productのカテゴリー',
        'public' => true,
        'show_ui' => true
    )
    );


}
 







    