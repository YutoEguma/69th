<!DOCTYPE HTML>
<html lang="ja">
<head>
	<!-- 文字コード -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- タイトル -->
	<title><?php bloginfo( 'name' ); ?></title>
	
	<!-- CSSファイル -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"     type="text/css" media="screen">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
			<label for="menu_button">Menu</label>
			<input id="menu_button" type="checkbox">
			<div class="smp_menu_contents">
				<?php wp_nav_menu( array( 'theme_location'=>'header-navi' ) ) ?>
			</div>
		</nav>
		<div class="clearfix"></div>
		
	</header>
	