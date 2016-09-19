<!-- TODO form を 横並びにしてあげよう -->
<!-- TODO 検索にはアイコンフォントを用いるとなお良い(虫眼鏡) -->
<form method="get" class="search" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search_text_box">
        <input type="text" placeholder="フリーワード" name="s" class="search_field" value=""/>
        <button type="submit" class="search_button" value="検索"><i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </div>
</form>