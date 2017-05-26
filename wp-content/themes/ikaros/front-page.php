<?php get_header(); /* Template Name: Home */ ?>

<main class="container">
	<!-- ### carousel ### -->
	<section class="carousel-section">
		<ul class="owl-carousel">
			<?php while ( have_rows('home_slide') ) : the_row(); ?>
				<li class="item"><a href="javascript:;"><img src="<?php the_sub_field( 'banner' ); ?>" alt="Slider"></a></li>
			<?php endwhile; wp_reset_postdata();?> 
		</ul>
	</section>

	<!-- ### Our Services ### -->
	<section class="page-section">
		<?php get_template_part( 'template-parts/loop', 'servicos' ); ?>
	</section>

	<!-- ### Latest Projects ### -->
	<hr class="divider-section">
	<section class="page-section">
		<h2 class="title">Últimos projetos de nossa equipe</h2>
		<p class="description">ulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

		<ul class="projects-ul">
			<?php 					
				// pega título e descrição da seção
				$argsPortfolio = array("post_type"=>"portfolio", "posts_per_page"=>"6");
				$Portfolio_post_cat = get_posts( $argsPortfolio ); 
			?>

			<?php foreach( $Portfolio_post_cat as $post ) : setup_postdata( $post ); ?>			
				<li class="projects-item"><a href="javascript:;"><?php echo odin_thumbnail( 312, 250, get_the_title(), true ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</section>

	<!-- ### Latest Blog ### -->
	<hr class="divider-section">
	<section class="page-section">
		<h2 class="title">Últimas no Blog</h2>
		<p class="description">ulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

		<div class="container">
			<?php
				$argsBlog = array("post_type"=>"post", "posts_per_page"=>"4");
				$blog_post_cat = get_posts( $argsBlog );
			?>

			<?php foreach( $blog_post_cat as $post ) : setup_postdata( $post ); ?>
				<article class="latest-box">
					<div class="date-blog">
						<div class="date-circle">
							<span class="day"><?php echo( get_the_date( 'd' ) ); ?></span>
							<span class="month"><?php echo( get_the_date( 'M' ) ); ?></span>
						</div>
					</div>
					
					<div class="latest-content">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php $textResume = get_the_excerpt(); ?>
						<p class="description"><a class="link" href="<?php the_permalink(); ?>"><?php echo changeTextSize( $textResume, 90 ); ?></a></p>
						
						<ul class="tag-blog">
							<li class="tag-item"><a class="link" href="<?php the_permalink(); ?>"><?php the_tags(''); ?></a></li>
						</ul>
						<span class="comments-blog"><a href="<?php comments_link(); ?>"><?php comments_number('0 comentário', 'Um comentário', '% comentários'); ?></a></span>						
					</div>
				</article>	
			<?php endforeach; wp_reset_postdata(); ?>					
		</div>	
	</section>			

	<!-- ### our customers ### -->
	<hr class="divider-section">
	<section class="page-section">
		<h2 class="title">Nossos Clientes</h2>
		<p class="description">Aenean lacinia bibendum nulla sed consectetur. Vivamus augue laoreet rutrum faucibus dolor auctor.</p>

		<ul class="customers-box">
			<?php while ( have_rows('clientes_lista') ) : the_row(); ?>
				<li class="customers-item"><a href="javascript:;"><img src="<?php the_sub_field( 'cliente_logomarca' ); ?>"></a></li>
			<?php endwhile; wp_reset_postdata();?> 			 			
		</ul>		
	</section>		
</main> 

<?php get_footer(); ?>