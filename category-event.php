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
					<div class="clearfix"></div>
					<div class="post-thumbnail">
						<?php the_post_thumbnail('thumbnail'); ?>
					</div>
					<p class="event-post-meta">
						<?php the_excerpt(); ?>
					</p>
				</a>
				<div class="clearfix"></div>
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