<h2 class="title">Nossos Serviços</h2>
<p class="description">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>

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
		<?php 					
			// pega título e descrição da seção
			$argsServicos = array("post_type"=>"servicos", "taxonomy" => "servicos_category", "term" => "web-design",  "posts_per_page"=>"1");
			$servicos_post_cat = get_posts( $argsServicos ); 
		?>

		<?php foreach( $servicos_post_cat as $post ) : setup_postdata( $post ); ?>
    		<div class="tab-thumb">
    			<?php echo odin_thumbnail( 400, 300, get_the_title(), true, 'thumb' ); ?>
    		</div>

			<div class="tab-description">
	    		<h2 class="title"><?php the_title(); ?></h2>
	    		<?php the_content(); ?> 						
			</div>
		<?php endforeach; ?> 
	</div>
    
    <!-- item 2 -->
    <div class="tab-box tab-pane fade" id="photography">
		<?php 					
			// pega título e descrição da seção
			$argsServicos = array("post_type"=>"servicos", "taxonomy" => "servicos_category", "term" => "fotografia",  "posts_per_page"=>"1");
			$servicos_post_cat = get_posts( $argsServicos ); 
		?>

		<?php foreach( $servicos_post_cat as $post ) : setup_postdata( $post ); ?>
    		<div class="tab-thumb">
    			<?php echo odin_thumbnail( 400, 300, get_the_title(), true, 'thumb' ); ?>
    		</div>

			<div class="tab-description">
	    		<h2 class="title"><?php the_title(); ?></h2>
	    		<?php the_content(); ?> 						
			</div>

		<?php endforeach; ?> 
    </div>
    
    <!-- item 3 -->
    <div class="tab-box tab-pane fade " id="graphics">
		<?php 					
			// pega título e descrição da seção
			$argsServicos = array("post_type"=>"servicos", "taxonomy" => "servicos_category", "term" => "grafico",  "posts_per_page"=>"1");
			$servicos_post_cat = get_posts( $argsServicos ); 
		?>

		<?php foreach( $servicos_post_cat as $post ) : setup_postdata( $post ); ?>
    		<div class="tab-thumb">
    			<?php echo odin_thumbnail( 400, 300, get_the_title(), true, 'thumb' ); ?>
    		</div>

			<div class="tab-description">
	    		<h2 class="title"><?php the_title(); ?></h2>
	    		<?php the_content(); ?> 						
			</div>
		<?php endforeach; ?> 
    </div>
</div>