<?php get_header(); ?>

<main class="container">
	<section class="page-section">
		<?php while( have_posts() ) : the_post(); ?>
			<h2 class="title"><?php the_title(); ?></h2>
			<p class="description">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

			<div class="page-content">
				<?php the_content(); ?>				
			</div>
		<?php endwhile; wp_reset_postdata();?> 

		<aside class="sidebar-box">
			<div class="sidebar-content">
				<h2 class="title">address</h2>
				
				<address class="description">
					lorem Ipsum Dolor Sit Moon Avenue No: 11/2 Planet City, Earth<br>
					<span class="meta">Fax:</span> +55 797 534 01<br>	
					<span class="meta">Tel:</span> +55 636 646 62<br>
					<span class="meta">Email:</span> name@domain.com
				</address>
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