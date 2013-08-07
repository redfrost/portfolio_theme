<div id="portfolio_custom">

	<div id="portfolio_page_title">
	
		<ul id="myTab" class="portfolio_menu">
			<li id="mainpage_li" class="active"><a href="#mainpage" data-toggle="tab">&lt;</a></li>
			<li id="profile_li"><a href="#profile" data-toggle="tab">ALEX</a></li>
			<li id="works_li"><a href="#portfolio0" data-toggle="tab">WORKS</a></li>	
					<li class="portfolio_submenu portfolio1"><a href="#portfolio1" data-toggle="tab">WEB</a></li>
					<li class="portfolio_submenu portfolio2"><a href="#portfolio2" data-toggle="tab">GRAPHICS</a></li>
					<li class="portfolio_submenu portfolio3"><a href="#portfolio3" data-toggle="tab">PHOTOGRAPHY</a></li>		
		</ul>
	</div><!-- /#portfolio_page_title -->


<div id="myTabContent" class="tab-content">

	<section id="mainpage" class="tab-pane fade active in">
   		<div class="row"> 
		<div class="featured-image-box span12">
							      
           <? echo get_new_royalslider(1); ?><!-- Install Royal slider. If the slider is not visible try save setting again -->
							  
		</div><!-- #featured-image-box-->
		</div>
	</section><!-- /#mainpage -->
	

	<section id="profile" class="tab-pane fade"><hr class="hr_strong">
		<?php
		$about_page = get_page_by_title('profile');
		echo "<p>$about_page->post_content</p>";
		?>
	</section><!-- /#profile -->

	
	<section id="portfolio0" class="tab-pane fade"><hr class="hr_strong">
		<div class="row">    
			<?php	// Get All Custom Post type 
			global $post;
			$args = array( 'post_type' => 'portfolio', 'offset'=> 0, 'posts_per_page' => 24 );  //Offset = Exclude post)
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
		
			<div class="span3">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>					    	
				<header>
				<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
				<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
				</header>
							
				<div class="entry-content listbox">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								
				<p><?php the_excerpt(); ?></p>
				<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
				</div><!-- /.entry-content listbox -->
			</article>	
			</div><!-- /.span3 -->
			
			<?php endforeach; ?> 
		</div><!-- /row -->


	</section><!-- /section0 -->
	
	
	
	<section id="portfolio1" class="tab-pane fade"><hr class="hr_strong">	
		<div class="row">    
			<?php	// Get Posts from Custom Category (taxonomy)
				$args = array(
		        'posts_per_page' => 24,
		        'post_type' => 'portfolio',
		        'tax_query' => array(
		            array(
		                'taxonomy' => 'portfolio_category',
		                'field' => 'slug',
		                'terms' => array( 
		                    'website' 
		                )
		            )
		        )       
		    );			
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
			?>
		
			<div class="span3">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				    	
				<header>
				<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
				<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
				</header>
							
				<div class="entry-content listbox">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								
				<p><?php the_excerpt(); ?></p>
				<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
				</div><!-- /.entry-content listbox -->
			</article>	
			</div><!-- /.span3 -->
			
			<?php endforeach; ?> 
		</div><!-- /row -->
    
	</section><!-- /section1 -->
	
	
	
	<section id="portfolio2" class="tab-pane fade"><hr class="hr_strong">
		<div class="row">    
					<?php	// Get Posts from Custom Category (taxonomy)
						$args = array(
				        'posts_per_page' => 24,
				        'post_type' => 'portfolio',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'portfolio_category',
				                'field' => 'slug',
				                'terms' => array( 
				                    'design' 
				                )
				            )
				        )       
				    );			
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
					?>
				
			<div class="span3">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				    	
				<header>
				<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
				<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
				</header>
							
				<div class="entry-content listbox">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								
				<p><?php the_excerpt(); ?></p>
				<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
				</div><!-- /.entry-content listbox -->
			</article>	
			</div><!-- /.span3 -->
					
					<?php endforeach; ?> 
				</div><!-- /row -->

	</section><!-- /section2 -->
	
	
	
	<section id="portfolio3" class="tab-pane fade"><hr class="hr_strong">
		<div class="row">    
					<?php	// Get Posts from Custom Category (taxonomy)
						$args = array(
				        'posts_per_page' => 24,
				        'post_type' => 'portfolio',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'portfolio_category',
				                'field' => 'slug',
				                'terms' => array( 
				                    'photography' 
				                )
				            )
				        )       
				    );			
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
					?>
				
			<div class="span3">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				    	
				<header>
				<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
				<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
				</header>
							
				<div class="entry-content listbox">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								
				<p><?php the_excerpt(); ?></p>
				<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
				</div><!-- /.entry-content listbox -->
			</article>	
			</div><!-- /.span3 -->
					
					<?php endforeach; ?> 
			</div><!-- /row -->

	</section><!-- /section3 -->



</div><!-- /#myTabContent -->




</div>
