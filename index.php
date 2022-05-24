<?php get_header (); ?>
<div class="row"> 
    <div class="col-md-12"> 
        <div class="jumbotron"> 

            
<h2> Seja bem vindo ao meu novo tema <h2>  
    
    <?php
	}

	<?php
	if ( have_posts()) {
        while ( have_posts()) {
            the_post();
    ?>
    <h2><?php the_title(); ?></h2> 
    <div class="img">
     <?php the_post_thumbnail();?>

     </div>
     <div class="texto">
     <?php the_excerpt(); ?>
     </div>
     <a href="<?php the_permalink(); ?>">
        leia mais
        </a>
    <?php
        
        } // end while
     } // end if
?>

                <figcaption>
			Jabotinha
		</figcaption>

    
    
<?php get_footer (); ?>
