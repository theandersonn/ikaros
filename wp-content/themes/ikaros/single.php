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
				<h3 class="title">Related Posts</h3>

				<ul class="related-ul">
					<li class="related-item"><a href="javascript:;"><img class="thumb" src="assets/images/general/thumb-related-posts-1.jpg"></a></li>
					<li class="related-item"><a href="javascript:;"><img class="thumb" src="assets/images/general/thumb-related-posts-1.jpg"></a></li>
					<li class="related-item"><a href="javascript:;"><img class="thumb" src="assets/images/general/thumb-related-posts-1.jpg"></a></li>
					<li class="related-item"><a href="javascript:;"><img class="thumb" src="assets/images/general/thumb-related-posts-1.jpg"></a></li>
				</ul>
			</div>
		</article>

		<aside class="sidebar-box">
			<div class="sidebar-content">
				<h2 class="title">Popular Posts</h2>

				<ul class="sidebar-posts">
					<li class="sidebar-item">
						<img class="thumb" src="assets/images/general/latest-staff-thumb-6.png">
						<div class="title-box">
							<h4 class="title"><a class="link" href="javascript:;">Vestibum Malesuada Etiam Magna Malesuada Vestibum</a></h4>
							<time class="time" datetime="2014-11-14">14 Nov, 2014</time>
						</div>
					</li>

					<li class="sidebar-item">
						<img class="thumb" src="assets/images/general/latest-staff-thumb-6.png">
						<div class="title-box">
							<h4 class="title"><a class="link" href="javascript:;">Vestibum Malesuada Etiam Magna Malesuada Vestibum</a></h4>
							<time class="time" datetime="2014-11-14">14 Nov, 2014</time>
						</div>
					</li>

					<li class="sidebar-item">
						<img class="thumb" src="assets/images/general/latest-staff-thumb-6.png">
						<div class="title-box">
							<h4 class="title"><a class="link" href="javascript:;">Vestibum Malesuada Etiam Magna Malesuada Vestibum</a></h4>
							<time class="time" datetime="2014-11-14">14 Nov, 2014</time>
						</div>
					</li>																					
				</ul>					
			</div>	

			<hr class="divider-section">

			<div class="sidebar-content">
				<h2 class="title">Search</h2>
				
				<form>
					<div class="form-group">
						<input type="search" class="form-page" placeholder="search">
					</div>
					
					<button type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>

			<hr class="divider-section">

			<div class="sidebar-content">
				<h2 class="title">Others infos</h2>

				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, consequuntur.</p>

				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eius doloribus, corrupti. Labore accusantium sapiente dignissimos nesciunt! Quam, nostrum, voluptates. Perferendis minus, ex. Debitis reprehenderit impedit nam, asperiores doloribus aspernatur.</p>
			</div>				
		</aside>	    
	</section>	
</main> 

<?php get_footer(); ?>