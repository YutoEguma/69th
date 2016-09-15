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
				<h1 class="post-title"><?php the_title(); ?></h1>
					<p class="post-meta">
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
					'screen_reader_text' => '',
				);
				the_posts_pagination( $args );
			?>
		</article>
	</main>
<?php get_footer(); ?>