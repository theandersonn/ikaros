<?php get_header(); /* Template Name: Blog */ ?>

<main class="container">
	<section class="page-section">
		<?php while( have_posts() ) : the_post(); ?>
			<article class="card-box">
				<a href="<?php the_permalink(); ?>">
					<div class="card-blog">
						<?php echo odin_thumbnail( 303, 147, get_the_title(), true, 'thumb' ); ?>
						<div class="card-main">
							<h2 class="title"><?php the_title(); ?></h2>
							<?php $textResume = get_the_excerpt(); ?>
							<p class="description"><?php echo changeTextSize( $textResume, 150 ); ?></p>			

							<footer class="card-footer">
								<time class="time" datetime="2014-11-14">
									<i class="icon-calendar"></i>
									<?php echo get_the_date(); ?>
								</time>
								<span class="comment">
									<i class="icon-comment-empty"></i>
									<?php comments_number('0', '1', '%'); ?>
								</span>
							</footer>
						</div>					
					</div>
				</a>
			</article>
		<?php endwhile; wp_reset_postdata();?>			    
	</section>	
</main> 

<?php get_footer(); ?>