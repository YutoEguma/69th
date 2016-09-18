<!-- TODO cabos form を 横並びにしてあげよう -->
<!-- TODO 検索にはアイコンフォントを用いるとなお良い(虫眼鏡) -->
<form method="get" class="search" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" placeholder=" キーワード検索" name="s" class="search_field" value=""/>
    <input type="submit" class="search_button" value="検索"/>
</form>