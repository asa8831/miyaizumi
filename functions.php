<?php

// 外観＞メニューを使用できるようにする
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// アイキャッチを設定
add_theme_support('post-thumbnails');

//jQueryを読み込むようにする（ログアウトの際にjQueryをよみこまなくなるのを防止）
function theme_style(){
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_style');
