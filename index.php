<?php get_header(); ?>
	<main>
		<article>
			<?php
				if( have_posts() ){
					while( have_posts() ){
						the_post();
			?>
			
			<div id="post-<?php the_ID(); ?>" class="post">
				<a href="<?php echo esc_url( the_permalink() ); ?>">
				<h2 class="post-title"><?php the_title(); ?></h2>
					<p class="post-meta">
						<span><?php the_date('Y-n-j','更新日: '); ?></span>
					<?php the_excerpt(); ?>
					</p>
				</a>
			</div>
			
			<?php
					}
				}else{
			?>
			
			<?php
				}
			?>
			<div class="clearfix"></div>
			
			<?php
				$args = array(
					'prev_text' => 'PREV',
					'next_text' => 'NEXT',
					'show_all' => 'true',
					'mid_size' => 1,
				);
				the_posts_pagination( $args );
			?>
		</article>
	</main>
<?php get_footer(); ?>