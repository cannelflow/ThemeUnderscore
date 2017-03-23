<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyProperScore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php if ( is_single() ) :
		
		if ( has_post_thumbnail() ) { 
			echo '<figure class="featured-image">';
				the_post_thumbnail();
				// the_post_thumbnail('mypopperscores-small-thumb');
			echo '</figure>';
			}
		?>	
		
        <?php else: 
            	
            if ( has_post_thumbnail() ) { 
			echo '<figure class="featured-image">';
			echo '<a href="<?php esc_url(get_permalink()) ; ?>" rel="bookmark">';
				the_post_thumbnail();
				// the_post_thumbnail('mypopperscores-small-thumb');
			echo '</a>';	
			echo '</figure>';
			}
        ?>
            	
        <?php endif ;	?>
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title index-excerpt"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		
		if ( has_excerpt( $post->ID ) ) {
                 
                 echo '<div class="deck">';
                 echo '<p>' . get_the_excerpt() . '</p>';
                 echo '</div>';
                 
              } 
		
		if ( 'post' === get_post_type() ) : ?>
		<div class="index-entry-meta">
			<?php mypopperscores_index_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		
		   	if ( is_single() ) :
            
                the_content();
            
            else :
            	
            	the_excerpt();
            	
            endif ;	
                
			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'myproperscore' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div><!-- .entry-content -->
	
	<div class="continue-reading">
		
		<?php if ( is_single() ) : ?>
        <?php else: ?>
            	
            <a href="<?php esc_url(get_permalink()) ; ?>" rel="bookmark">
			
			 <?php
			   printf(
				  /* translators: %s: Name of current post. */
				  wp_kses( __( 'Continue reading %s', 'myproperscore' ), array( 'span' => array( 'class' => array() ) ) ),
				  the_title( '<span class="screen-reader-text">"', '"</span>', false )
			   )
			 ?>
		    </a>
            	
        <?php endif ;	?>
	
	</div>

	<!--<footer class="entry-footer">-->
	<!--	<?php myproperscore_entry_footer(); ?>-->
	<!--</footer><!-- .entry-footer -->
</article><!-- #post-## -->
