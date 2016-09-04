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

?>