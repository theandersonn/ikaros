		<!-- ### footer ### -->
		<footer class="footer-box">
			<div class="container">
				<div class="footer-content">
					<h2 class="title">posts recentes</h2>

					<ul class="posts-box">
						<?php
							$argsBlog = array("post_type"=>"post", "posts_per_page"=>"3");
							$blog_post_cat = get_posts( $argsBlog );
						?>

						<?php foreach( $blog_post_cat as $post ) : setup_postdata( $post ); ?>	
							<li class="posts-list">
								<a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<time class="meta -gray" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>						
					</ul>
				</div>

				<div class="footer-content">
					<h2 class="title">twitter</h2>

					<ul class="posts-box">					
						<li class="posts-list -icontweet">
							<a class="link" href="javascript:;">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor, sagittis lacus vel augue</a>
							<span class="meta -blue"> - 21 hours ago</span>
						</li>

						<li class="posts-list -icontweet">
							<a class="link" href="javascript:;">Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor</a>
							<span class="meta -blue"> - 21 hours ago</span>
						</li>

						<li class="posts-list -icontweet">
							<a class="link" href="javascript:;">Vivamus sagittis sagittis lacus vel augue lacus vel augue laoreet rutrum dolor auctor</a>
							<span class="meta -blue"> - 21 hours ago</span>
						</li>															
					</ul>
				</div>	

				<div class="footer-content">
					<h2 class="title">a little about me</h2>

					<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>	

					<p class="description">Donec id elit non porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel.</p>
				</div>	

				<div class="footer-content">
					<h2 class="title">contact form</h2>

					<?php echo do_shortcode( '[contact-form-7 id="102" title="Formulário Rodapé"]' ); ?>				
				</div>							
			</div>
		</footer>

		<!-- ### subfooter ### -->
		<section class="subfooter-box">
			<article class="subfooter-container">
				<div class="subfooter-copyright">
					<span class="description">&copy; 2017 Ikarus. Design by <a class="link" href="javascript:;">elemis</a></span>
				</div>

				<div class="subfooter-social">
					<ul class="subfooter-ul">
						<li class="subfooter-list">
							<a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/icon-rss.png" alt="Feeds"></a>
						</li>
						<li class="subfooter-list">
							<a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/icon-facebook.png" alt="Facebook"></a>
						</li>
						<li class="subfooter-list">
							<a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/icon-twitter.png" alt="Twitter"></a>
						</li>
						<li class="subfooter-list">
							<a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/icon-dribbble.png" alt="Dribbble"></a>
						</li>
						<li class="subfooter-list">
							<a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/icon-pinterest.png" alt="Pinterest"></a>
						</li>
						<li class="subfooter-list">
							<a href="javascript:;"><img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/icon-linkedin.png" alt="Linkedin"></a>
						</li>															
					</ul>
				</div>
			</article>
		</section>        

        <?php wp_footer(); ?>
    </body>
</html>  