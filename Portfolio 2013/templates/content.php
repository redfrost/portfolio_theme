<div id="portfolio_custom" class="row">

<?php if (!have_posts()) : ?>
  <div class="alert alert-block fade in">
    <a class="close" data-dismiss="alert">&times;</a>
    <p><?php _e('Sorry, no results were found.', 'roots'); ?></p>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>


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
    
 <!--   <footer>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer> -->
  </article>
</div>


<?php endwhile; ?>
</div><!-- /#portfolio_custom -->

<!-- Simple Pagination -->

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <?php wp_simple_pagination(); ?>
  </nav>
<?php endif; ?>


