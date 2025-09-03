<?php
/**
 * Plugin Name: wp-login-branding
 * Description: ログイン画面のWordPressロゴを非表示にする
 * Author: Computer Lib
 */

add_action( 'login_enqueue_scripts', function () { echo '<style>body.login #login h1{display:none !important;}</style>'; } );
add_filter( 'login_headerurl', function () { return home_url( '/' ); } );
add_filter( 'login_headertext', '__return_empty_string' );

// ログイン画面の「○○○へ移動」リンクを非表示
add_action( 'login_enqueue_scripts', function () { echo '<style>body.login #backtoblog{display:none !important;}</style>'; } );
