<?php
/*csvファイルを連想配列に変換するphpのスクリプト*/

/*csvファイルのパスを渡すと、連想配列になって返ってくる関数*/
function csv2array($file)
{

    $csv = array();            //csvファイルの初期化
    $fp = fopen($file, "r");  //ファイルを読み込みのみで開く

    /*csvファイルの1行目は連想配列のキーになる*/
    $domain = fgetcsv($fp, 0, ",");

    /*1行ずつの読み込み*/
    while (($data = fgetcsv($fp, 0, ",")) !== FALSE) {
        $line = array();
        for ($i = 0; $i < count($domain); $i++) {
            $line[$domain[$i]] = $data[$i];
        }
        $csv[] = $line;
    }

    fclose($fp);    //ファイルを閉じる

    return $csv;
}

/*関数：企画ID→画像の場所*/
function idimage($id)
{
    if (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".png")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.png";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".PNG")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.PNG";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".jpg")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.jpg";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".JPG")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.JPG";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".jpeg")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.jpeg";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".pdf")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.pdf";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".bmp")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.bmp";
        return $img;
    } elseif (file_exists("<?php echo get_template_directory_uri(); ?>/img/event_image/" . $id . ".gif")) {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/$id.gif";
        return $img;
    } else {
        $img = "<?php echo get_template_directory_uri(); ?>/img/event_image/none.png";
        return $img;
    }
}

?>