<?php
/*
Template name: Galeria page
 */

get_header();
?>
	<div class="title">
		<p>Galería</p>
	</div>
	
	<div class="container">
		
		<?php
            $photoGallery = new WP_Query(array(
				'post_type' => 'fotos',
				'post_status' => 'publish',
				'posts_per_page' => 6,
            ));

            while($photoGallery -> have_posts()) {
				$photoGallery -> the_post(); 
        ?>
          
			<div class="responsive">
				<div class="gallery">
					<img src="<?php the_post_thumbnail_url('gallery-photos') ?>">
				</div>
			</div>
			
        <?php } ?>

		<div class="buttons-container">
			<button id="button1">Regresar</button>
			<button id="button2">Continuar</button>
		</div>
	</div>
	
<?php
/*get_sidebar();
get_footer();*/
?>
