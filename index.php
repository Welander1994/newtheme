<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="body bg-gray-600">
	<div class="container">


		<div class="main">
			<div class="post content">
<!-- 				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1> -->

				<div class="content">
<!-- 					<?php the_content(); ?> -->

					<h1 class="text-4xl"><?php the_title(); ?></h1>

					<?php 
					$phrase = get_the_content();
					// This is where wordpress filters the content text and adds paragraphs
					$phrase = apply_filters('the_content', $phrase);
					$replace = '<p class="bg-white">';
					
					echo str_replace('<p>', $replace, $phrase);

				?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>