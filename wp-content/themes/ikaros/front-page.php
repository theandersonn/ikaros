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
		<h2 class="title">Latest Blog</h2>
		<p class="description">ulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

		<div class="container">
			<article class="latest-box">
				<div class="date-blog">
					<div class="date-circle">
						<span class="day">23</span>
						<span class="month">jan</span>
					</div>
				</div>
				
				<div class="latest-content">
					<h2 class="title">Aenean Adipiscing Etiam Vestibulum</h2>
					<p class="description"><a class="link" href="javascript:;">Etiam porta sem malesuada magna lorem etor mollis euismod. Cras mattis consectetur purus.</a></p>
					
					<ul class="tag-blog">
						<li class="tag-item"><a class="link" href="javascript:;">Journal</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Photography</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Web Design</a></li>
					</ul>
					<span class="comments-blog">9 Comments</span>						
				</div>
			</article>	

			<article class="latest-box">
				<div class="date-blog">
					<div class="date-circle">
						<span class="day">23</span>
						<span class="month">jan</span>
					</div>
				</div>
				
				<div class="latest-content">
					<h2 class="title">Aenean Adipiscing Etiam Vestibulum</h2>
					<p class="description"><a class="link" href="javascript:;">Etiam porta sem malesuada magna lorem etor mollis euismod. Cras mattis consectetur purus.</a></p>
					
					<ul class="tag-blog">
						<li class="tag-item"><a class="link" href="javascript:;">Journal</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Photography</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Web Design</a></li>
					</ul>
					<span class="comments-blog">9 Comments</span>						
				</div>
			</article>	

			<article class="latest-box">
				<div class="date-blog">
					<div class="date-circle">
						<span class="day">23</span>
						<span class="month">jan</span>
					</div>
				</div>
				
				<div class="latest-content">
					<h2 class="title">Aenean Adipiscing Etiam Vestibulum</h2>
					<p class="description"><a class="link" href="javascript:;">Etiam porta sem malesuada magna lorem etor mollis euismod. Cras mattis consectetur purus.</a></p>
					
					<ul class="tag-blog">
						<li class="tag-item"><a class="link" href="javascript:;">Journal</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Photography</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Web Design</a></li>
					</ul>
					<span class="comments-blog">9 Comments</span>						
				</div>
			</article>	

			<article class="latest-box">
				<div class="date-blog">
					<div class="date-circle">
						<span class="day">23</span>
						<span class="month">jan</span>
					</div>
				</div>
				
				<div class="latest-content">
					<h2 class="title">Aenean Adipiscing Etiam Vestibulum</h2>
					<p class="description"><a class="link" href="javascript:;">Etiam porta sem malesuada magna lorem etor mollis euismod. Cras mattis consectetur purus.</a></p>
					
					<ul class="tag-blog">
						<li class="tag-item"><a class="link" href="javascript:;">Journal</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Photography</a></li>
						<li class="tag-item"><a class="link" href="javascript:;">Web Design</a></li>
					</ul>
					<span class="comments-blog">9 Comments</span>						
				</div>
			</article>						
		</div>	
	</section>			

	<!-- ### our customers ### -->
	<hr class="divider-section">
	<section class="page-section">
		<h2 class="title">Our Customers</h2>
		<p class="description">Aenean lacinia bibendum nulla sed consectetur. Vivamus augue laoreet rutrum faucibus dolor auctor.</p>

		<ul class="customers-box">
			<li class="customers-item"><a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/customers-vimeo.png" alt="Vimeo"></a></li>
			<li class="customers-item"><a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/customers-apple.png" alt="Apple"></a></li>
			<li class="customers-item"><a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/customers-mercedez.png" alt="Mercedez"></a></li>
			<li class="customers-item"><a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/customers-wb.png" alt="Warner"></a></li>
			<li class="customers-item"><a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/customers-mt.png" alt="MT"></a></li>
			<li class="customers-item"><a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logotypes/customers-bmw.png" alt="BMW"></a></li>
		</ul>
	</section>		
</main> 

<?php get_footer(); ?>