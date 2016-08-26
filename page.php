<?php get_header(); ?>
	<main>
		<article>
			<?php
				while( have_posts() ){
					the_post();
			?>
			<h1><?php the_title(); ?></h1>
			<?php
				the_content();
				}
			?>
		</article>
	</main>
<?php get_footer(); ?>