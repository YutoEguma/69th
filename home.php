<?php get_header(); ?>
	<!-- トップイメージ -->
	<img class="top_img_smp" src="<?php echo get_template_directory_uri(); ?>/img/top_img_smp.jpg">
	<img class="top_img_pc" src="<?php echo get_template_directory_uri(); ?>/img/top_img_pc.jpg">
	
	<!-- スロット -->
	<div class="top_slots">
		<div id="top_slot1" class="top_slot">
			<a href="">
				<img class="push_img" src="<?php echo get_template_directory_uri(); ?>/img/slot_img1.png" alt="イメージ1">
			</a>
		</div>
		<div class="top_slot">
			<a href="">
				<img class="push_img" src="<?php echo get_template_directory_uri(); ?>/img/slot_img2.png" alt="イメージ2">
			</a>
		</div>
		<div class="top_slot">
			<a href="">
				<img class="push_img" src="<?php echo get_template_directory_uri(); ?>/img/slot_img3.png" alt="イメージ3">
			</a>
		</div>
		<div id="top_slot4" class="top_slot">
			<a href="">
				<img class="push_img" src="<?php echo get_template_directory_uri(); ?>/img/slot_img4.png" alt="イメージ4">
			</a>
		</div>
	</div>
	<div class="clearfix"></div>
	
	<main>
		<div class="newinfo">
			<h1>更新情報</h1>
			<div class="info_slot">
				<a href="">
					<P>
						2016.8.14(日)<br><br>
						更新しました<br>
					</p>
				</a>
			</div>
			<div class="info_slot">
				<a href="">
					<P>
						2016.8.14(日)<br><br>
						更新しました<br>
					</p>
				</a>
			</div>
			<div class="info_slot">
				<a href="">
					<P>
						2016.8.14(日)<br><br>
						更新しました<br>
					</p>
				</a>
			</div>
			<div class="info_slot">
				<a href="">
					<P>
						2016.8.14(日)<br><br>
						更新しました<br>
					</p>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="top_about">
			<h1>九大祭とは?</h1>
			<div id="top_more_button" class="more_button">
				<a href="">→ もっと詳しく</a>
			</div>
		</div>
		<div class="clearfix"></div>
		
		<div class="event_info">
			<h1>企画紹介</h1>
			<div class="event_slot">
				<a href="">
					<img clas="event_img" src="<?php echo get_template_directory_uri(); ?>/img/event_img1.jpg" alt="イメージ1">
				</a>
			</div>
			<div class="event_slot">
				<a href="">
					<img clas="event_img" src="<?php echo get_template_directory_uri(); ?>/img/event_img2.jpg" alt="イメージ2">
				</a>
			</div>
			<div class="event_slot">
				<a href="">
					<img clas="event_img" src="<?php echo get_template_directory_uri(); ?>/img/event_img3.jpg" alt="イメージ3">
				</a>
			</div>
			<div class="event_slot">
				<a href="">
					<img clas="event_img" src="<?php echo get_template_directory_uri(); ?>/img/event_img4.jpg" alt="イメージ4">
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div id="top_more_button" class="more_button">
			<a href="http://localhost/wordpress/category/event/">→ 他の企画はコチラ</a>
		</div>
		<div class="clearfix"></div>
		
		<div class="top_access">
			<h1>アクセス</h1>
			<div id="top_more_button" class="more_button">
				<a href="">→ もっと詳しく</a>
			</div>
		</div>
		<div class="clearfix"></div>
		
		
		<div class="top_twitter">
			<h1>九大祭公式Twitter</h1>
			<p class="top_twi_meta">
				九大祭に関する情報を発信しています。<br class="smpbr">フォローをお願いします!
			</p>
			<div class="twitter_timeline">
				<a class="twitter-timeline"  href="https://twitter.com/kyudaisai" data-widget-id="706765554799874048">@kyudaisaiさんのツイート</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		<div class="clearfix"></div>
		
	</main>
<?php get_footer(); ?>