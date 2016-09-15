<!DOCTYPE HTML>
<html lang="ja">
<head>
	<!-- 文字コード -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- タイトル -->
	<title><?php bloginfo( 'name' ); ?></title>
	
	<!-- アイコン -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/mo-mo.ico">

	<!-- CSSファイル -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"     type="text/css" media="screen">

	<!-- Facebookのシェアのための設定 -->
	<meta property="og:type"  content="website">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/top_img_smp.jpg"/>
	<meta property="og:url"   content="http://www.kyudaisai.jp/">
	<meta property="og:title" content="第68回九大祭公式Webサイト" />
	
	<!-- 情報 -->
	<meta name="description" content="第69回九大祭　期日：2016年11月19(土)20(日)　場所：九州大学伊都キャンパス">
	<meta name="keywords" content="69,2016,九大祭,kyudaisai,2016年,学祭,九州大学,ミスコン,伊都,糸島,伊都キャンパス,ミスキャンパス,百花">
	<meta property="og:title" content="第69回九大祭公式webサイト">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/top_img_smp.jpg">
	<meta property="og:type" content="website" />
	<meta property="og:url" contetnt="[http://www.kyudaisai.jp]">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- facebookシェア -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!-- ヘッダー -->
	<header>
		<a href="<?php echo esc_url( home_url('/') ); ?>"><img class="header_logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_color.jpg" alt="九大祭ロゴ"></a>
		
		<!-- メインメニュー -->
		<nav class="pc_menu">
			<div class="pc_menu_contents">
				<?php wp_nav_menu( array( 'theme_location'=>'header-navi' ) ) ?>
			</div>
		</nav>
		
		<!-- スマホメニュー -->
		<nav class="smp_menu">
			<label for="menu_button">MENU</label>
			<input id="menu_button" type="checkbox">
			<div class="smp_menu_contents">
				<?php wp_nav_menu( array( 'theme_location'=>'header-navi' ) ) ?>
			</div>
		</nav>
		<div class="clearfix"></div>
		
	</header>
	