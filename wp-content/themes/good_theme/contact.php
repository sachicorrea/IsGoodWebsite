<?php
/*
Template name: Contact page
 */

get_header();
?>
   <div class="title">
		<p>Contacto</p>
	</div>

	<div class="container">    
        <div class="contact-form">
		    <!--Shortcode in form for Contact Page Template -->
            <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form 1"]' ); ?>
		</div> 
        
        <div class="buttons-container">
			<button id="button1">Regresar</button>
		</div>
  
<?php
/*get_sidebar();
get_footer();*/
?>

