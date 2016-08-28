<?php
/*csvファイルを連想配列に変化するphpのスクリプト*/

/*csvファイルのパスを渡すと、連想配列になって返ってくる関数*/
function csv2array( $file ){

	$csv  = array();            //csvファイルの初期化
	$fp   = fopen($file, "r");  //ファイルを読み込みのみで開く

	/*csvファイルの1行目は連想配列のキーになる*/
	$domain = fgetcsv( $fp, 0, "," );

	/*1行ずつの読み込み*/
	while ( ( $data = fgetcsv($fp, 0, ",") ) !== FALSE) {
		$line = array();
		for( $i = 0 ; $i < count( $domain ) ; $i++ ){
			$line[ $domain[$i] ] = $data[$i];
		}
		$csv[] = $line;
	}

	fclose( $fp );    //ファイルを閉じる
	
	return $csv;
}

/*関数：企画ID→画像の場所*/
function idimage( $id ){
	if( file_exists("img/event_image/".$id.".png") ){
		$img = "img/event_image/$id.png" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".PNG") ){
		$img = "img/event_image/$id.PNG" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".jpg") ){
		$img = "img/event_image/$id.jpg" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".JPG") ){
		$img = "img/event_image/$id.JPG" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".jpeg") ){
		$img = "img/event_image/$id.jpeg" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".pdf") ){
		$img = "img/event_image/$id.pdf" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".bmp") ){
		$img = "img/event_image/$id.bmp" ;
		return $img;
	}elseif( file_exists("img/event_image/".$id.".gif") ){
		$img = "img/event_image/$id.gif" ;
		return $img;
	}else{
		$img = "img/event_image/none.png" ;
		return $img;
	}
}
?>