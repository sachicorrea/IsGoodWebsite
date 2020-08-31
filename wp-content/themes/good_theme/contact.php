<?php
/*
Template name: Contact page
 */

get_header();
?>
   <div class="title">
        <h1>Contacto</h1>
    </div>

	<div class="container">    
        <div class="contact-form">
		    <!--Shortcode in form for Contact Page Template -->
            <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact form 1"]' ); ?>
		</div> 
    </div>

    <div class="continuar-button">
	    <button>Continuar</button>
	</div
<?php
/*get_sidebar();
get_footer();*/
?>

