<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="body bg-gray-600">
	<div class="container">
    <h1 class="text-3xl"><?php bloginfo( 'name' ); ?></h1>

		<div class="main">
			<div class="post content">
				<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>