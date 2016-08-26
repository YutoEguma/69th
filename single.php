<?php get_header(); ?>
	<main>
		<article>
			<?php
				while( have_posts() ){
					the_post();
			?>
			<div id="single-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
			<?php
				the_content();
				}
			?>
			</div>
		</article>
	</main>
<?php get_footer(); ?>