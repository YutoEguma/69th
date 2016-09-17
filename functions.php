<?php
/*-- ファイル読み込み --*/
require("php/event.php");

/*-- カスタムメニュー対応 --*/
add_theme_support( 'menus' );
register_nav_menu( 'header-navi','ヘッダーナビ' );

/*-- HTML5対応 --*/
add_theme_support( 'html5',array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
) );

/*-- フィルターフック([…]を…に変更) --*/
function new_excerpt_more( $more ){
	return ' …';
}
add_filter( 'excerpt_more','new_excerpt_more' );

/*--アイキャッチ画像に対応 --*/
add_theme_support('post-thumbnails');

/*-- 企画紹介のためのショートコード --*/
add_shortcode('csv2array' , 'csv2array');
add_shortcode('idimage' , 'idimage');

/*-- jsファイル読み込み --*/
function add_files(){
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',  "", "20160608", false );
	}
}
add_action( 'wp_enqueue_scripts', 'add_files' );
/*-- マップ読み込み --*/
function add_map(){
	if(is_page('access')){
		wp_enqueue_script( 'GoogleMapAPI', '//maps.googleapis.com/maps/api/js?key=AIzaSyDk-Ww0ELsc6gHMZjrgyYhl2LTKH8kKDsU&callback=initMap', array( 'map' ), '', true);
		wp_enqueue_script( 'map', get_template_directory_uri() . '/js/map.js', array(), '', true);
	}
}
add_action( 'wp_enqueue_scripts', 'add_map' );
/*-- スペシャル読み込み --*/
function add_special(){
	if(is_page('special')){
		// countupの読み込み
		wp_enqueue_script( 'countUp', get_template_directory_uri() . '/js/countup.js', array('jquery'), '', true);
	}
}
add_action( 'wp_enqueue_scripts', 'add_special' );
?>