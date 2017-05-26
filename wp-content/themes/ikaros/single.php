<?php get_header(); ?>

<main class="container">
	<section class="page-section">
		<article class="single-box">
			<?php while( have_posts() ) : the_post(); ?>				
				<header class="single-header">
					<div class="date-single">
						<div class="single-circle">
							<span class="day"><?php echo( get_the_date( 'd' ) ); ?></span>
							<span class="month"><?php echo( get_the_date( 'M' ) ); ?></span>
						</div>
					</div>

					<div class="single-title">
						<h2 class="title"><?php the_title(); ?></h2>
						<hr class="divider-header">
					 	
					 	<ul class="tag-blog">
							<li class="tag-item">Posted by</li>
							<li class="tag-item"><a class="link" href="javascript:;"><?php the_author(); ?></a></li>
							<li class="tag-item">in</li>
						</ul>

						<ul class="tag-blog">
							<li class="tag-item"><a class="link" href="javascript:;"><?php the_tags(''); ?></a></li>
						</ul>
						<span class="comments-blog"><a href="<?php comments_link(); ?>"><?php comments_number('0 comentário', 'Um comentário', '% comentários'); ?></a></span>							
					</div>
				</header>

				<?php echo odin_thumbnail( 610, 272, get_the_title(), true, 'thumb' ); ?>

				<?php the_content(); ?>
			<?php endwhile; wp_reset_postdata();?> 				
		
			<hr class="divider-section">
	
			<div class="related-posts">
				<h3 class="title">Posts Recentes</h3>

				<ul class="related-ul">
					<?php 
    					$args = new WP_Query(
    						array(	
								'post_in'  			=> get_the_tag_list(),
								'posts_per_page' 	=> 4
    						)
    					);
						
						while ( $args->have_posts() ) : $args->the_post();
					?>
						<li class="related-item"><a href="<?php the_permalink(); ?>"><?php echo odin_thumbnail( 150, 110, get_the_title(), true, 'thumb' ); ?></a></li>
					<?php endwhile; wp_reset_postdata(); ?>	
				</ul>
			</div>
		</article>


		<aside class="sidebar-box">
			<div class="sidebar-content">
				<h2 class="title">Posts Populares</h2>

				<ul class="sidebar-posts">
		            <?php
		                $args = new WP_Query(
		                  array(
		                  	'post__not_in' => array( $post->ID ),
		                    'posts_per_page' => 3                             
		                  )
		                );
		            ?>					
					<?php if( $args->have_posts() ) : while( $args->have_posts() ) : $args->the_post(); ?>					
						<li class="sidebar-item">
							<?php echo odin_thumbnail( 70, 70, get_the_title(), true, 'thumb' ); ?>
							<div class="title-box">
								<h4 class="title"><a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<time class="time" datetime="2014-11-14"><?php echo get_the_date(); ?></time>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>																							
				</ul>					
			</div>	

			<hr class="divider-section">

			<div class="sidebar-content">
				<h2 class="title">Search</h2>
				<?php get_search_form(); ?>
			</div>

			<hr class="divider-section">

			<div class="sidebar-content">
				<?php dynamic_sidebar( 'barra-contatos' ); ?>
			</div>				
		</aside>	    
	</section>	
</main> 

<?php get_footer(); ?>