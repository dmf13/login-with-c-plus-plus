<?php
/*
  Single: Vídeos Grid Template
*/

?>
<?php get_header(); ?>



<div class="container">   

    <div class="page-header">
      
      <div class="row">

        <div class="col-xs-12">
          <h1>Vídeo</h1>
        </div>
      </div>      

    </div>

    <div class="row">
    	<div class="col-xs-12 prev-next">
          <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
          <a href="<?php bloginfo('url'); ?>/?p=68"><span class="glyphicon glyphicon-th"></span></a>
          <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
        </div>
       <?php 
            $taxonomy = 'tagvideo';
              $tax_terms = get_terms($taxonomy);
                ?>
                <ul>
                <?php
                foreach ($tax_terms as $tax_term) {
                echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
                }
                               ?>




      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			

	
        <div class="col-sm-12 portfolio-image">
      

         
          <iframe width="420" height="315" src="<?php the_field('link'); ?>" frameborder="0" allowfullscreen></iframe>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>

       
            

      <?php endwhile; else: ?>
        
        <div class="page-header">
          <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>

      <?php endif; ?>

      

    </div>





<?php get_footer(); ?>