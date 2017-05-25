<h2 class="title">Portfolio</h2>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus repudiandae ea, nam eum ad soluta, laudantium veritatis totam ratione quidem alias aut labore ex eos iure voluptate aliquid fugiat perspiciatis!</p>

<!-- Nav tabs -->
<ul class="tab-service">
	<li class="active"><a href="#webdesign" data-toggle="tab">Web Design</a></li>
	<li><a href="#photography" data-toggle="tab">Fotografia</a></li>
	<li><a href="#graphics" data-toggle="tab">Gráfico</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<!-- item 1 -->
	<div class="tab-box tab-pane active" id="webdesign">
		<ul class="projects-ul">
			<?php 					
				// pega título e descrição da seção
				$argsServicos = array("post_type"=>"portfolio", "taxonomy" => "portfolio_category", "term" => "web-design",  "posts_per_page"=>"6");
				$servicos_post_cat = get_posts( $argsServicos ); 
			?>

			<?php foreach( $servicos_post_cat as $post ) : setup_postdata( $post ); ?>	
				<li class="projects-item">
					<a href="javascript:;">	
						<?php echo odin_thumbnail( 312, 250, get_the_title(), true ); ?>
					</a>
				</li>	
			<?php endforeach; ?> 	
		</ul> 
	</div>
    
    <!-- item 2 -->
    <div class="tab-box tab-pane fade" id="photography">
		<ul class="projects-ul">
			<?php 					
				// pega título e descrição da seção
				$argsServicos = array("post_type"=>"portfolio", "taxonomy" => "portfolio_category", "term" => "fotografia",  "posts_per_page"=>"6");
				$servicos_post_cat = get_posts( $argsServicos ); 
			?>

			<?php foreach( $servicos_post_cat as $post ) : setup_postdata( $post ); ?>	
				<li class="projects-item">
					<a href="javascript:;">	
						<?php echo odin_thumbnail( 312, 250, get_the_title(), true ); ?>
					</a>
				</li>	
			<?php endforeach; ?> 	
		</ul>
    </div>
    
    <!-- item 3 -->
    <div class="tab-box tab-pane fade " id="graphics">
		<ul class="projects-ul">
			<?php 					
				// pega título e descrição da seção
				$argsServicos = array("post_type"=>"portfolio", "taxonomy" => "portfolio_category", "term" => "grafico",  "posts_per_page"=>"6");
				$servicos_post_cat = get_posts( $argsServicos ); 
			?>

			<?php foreach( $servicos_post_cat as $post ) : setup_postdata( $post ); ?>	
				<li class="projects-item">
					<a href="javascript:;">	
						<?php echo odin_thumbnail( 312, 250, get_the_title(), true ); ?>
					</a>
				</li>	
			<?php endforeach; ?> 	
		</ul>
    </div>
</div>	