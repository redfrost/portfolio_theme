<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  
<div id="master_wrap">
  <div id="wrap" class="container" role="document">
  
  
<!-- Content -->  
    <div id="content" class="row">

	  <!-- Main  -->
      <div id="main" class="span12" role="main">
        
      		<ul class="portfolio_menu"><li id="mainpage_li"><a href="http://simonalex.com/portfolio/works/"><</a></li></ul>
      		<!-- <hr class="hr_strong">	-->  
			 <?php while (have_posts()) : the_post(); ?>
			  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			        

			  <div class="row">    
			  
			    
			    
                <div class="span9">
				    <div class="entry-content row-fluid">
				      <?php the_content(); ?>
				    </div>
				</div><!-- /.span9 END -->
                
                <div class="subnav">
			      <div class="span3 portfolio-info">
				    <div class="listbox">
				    
					    <header><h1 class="entry-title"><?php the_title(); ?></h1></header>
					    <div class="meta-data">
					    	<span class="entry-date">Year:     <?php the_date('Y'); ?></span><br>
					    	<span class="entry-date">Author:     <?php the_author(); ?></span><br>
					    	<span class="entry-date"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>
					    </div>
				    				    
						<div>
						<p><?php the_excerpt(); ?></p>
						</div>

						<div class="tags">
						<p>Keywords:</p>
						<?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>

						</div>
									
						<!-- Navigation -->
						<nav id="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&lt;</span>', 'twentytwelve' ) . '' ); ?></span>
						
						<span class="nav-next"><?php next_post_link( '%link', '' . __( '<span class="meta-nav">&gt;</span>', 'twentytwelve' ) ); ?></span>
						</nav><!-- #nav-single -->
						
					</div>
				</div><!-- /.span3 END -->
			  </div>
			    	   
			  </div><!-- /.row -->
			    
			    <p id="back-top"><a href="#top"><span>&uarr;</span> Back to Top</a></p>
			 
		<hr class="hr_strong">    
			    
    	<div id="portfolio_custom" class="worklist-bottom">


			

			<h3>LATEST WORKS</h3>

    	    <div class="row">    
			<?php	// Get All Custom Post type 
			global $post;
			$args = array( 'post_type' => 'portfolio', 'offset'=> 0, 'posts_per_page' => 8 );  //Offset = Exclude post)
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
				  	<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
				</div><!-- /.entry-content listbox -->
				</article>	
			</div><!-- /.span3 -->
			
			<?php endforeach; ?> 
       
    		</div><!-- /.row-->
    	    
    	    <p><a href="http://simonalex.com/portfolio/works/">> LOAD MORE</a></p><br>
    	    
    	</div>
			  

			    

			  </article>
			<?php endwhile; ?>
			
			

        
      </div>
      
    
    </div><!-- /#content -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>
</div><!-- /#master_wrap -->


</body>


</html>
