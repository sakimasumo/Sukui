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
 * 画像サイズの登録
 */
add_image_size('ranking_img',360,280,true);

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

// カスタム投稿タイプ（トップページランキング）
register_post_type(
    'ranking',
    array(
        'labels' => array(
        'name' => 'ランキング',
        'add_new_item' => 'ランキングの追加',
        'edit_item' => 'ランキングの編集'
    ),
    'public' => true,
    'supports' => array('title','editor','thumbnail')
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
 
add_action('init', 'create_list');

function create_list(){
/**
 * カスタム投稿タイプ（ショップリスト）の登録
 */
register_post_type(
    'shoplist',
    array(
        'labels' => array(
        'name' => '店舗',
        'add_new_item' => '店舗の追加',
        'edit_item' => '店舗の編集'
    ),
    'public' => true,
    'supports' => array('title')
)
);


register_taxonomy(
    "shoplist",
    'shoplist',
    array(
        'hierarchical' => true, //カテゴリータイプの指定
        'update_count_callback' => '_update_post_term_count',
        //ダッシュボードに表示させる名前
        'label' => 'shoplistのカテゴリー',
        'public' => true,
        'show_ui' => true
    )
    );


}
 

add_filter('redirect_canonical','my_disable_redirect_canonical');

function my_disable_redirect_canonical( $redirect_url) {
    if(is_archive()) {
        $subject = $redirect_url;
        $pattern = '/¥/page¥//';
        preg_match($pattern,$subject,$matches);
        if($matches) {
            $redirect_url =false;
            return $redirect_url;
        }
    }
}





    