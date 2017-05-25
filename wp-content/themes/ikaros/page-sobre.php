<?php get_header(); ?>

<main class="container">
	<section class="page-section">
		<?php while( have_posts() ) : the_post(); ?>
			<h2 class="title"><?php the_title(); ?></h2>
			<p class="description"><?php the_field( 'page_description' ); ?></p>

			<div class="page-content">
				<?php the_content(); ?>				
			</div>
		<?php endwhile; wp_reset_postdata();?> 

		<aside class="sidebar-box">
			<?php dynamic_sidebar( 'barra-contatos' ); ?>
		</aside>			
	</section>
</main> 

<?php get_footer(); ?>