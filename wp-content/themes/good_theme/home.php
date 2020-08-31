<?php
/*
Template name: Home page
 */

get_header();
?>
	<img src="/TestGood/wp-content/themes/good_theme/images/img.jpg">
	
	<div class="container">
		<div class="second-container">

			<?php
				while(have_posts()) {
					the_post(); ?>

				<div class="title-home">
					<p><?php the_title(); ?></p>
				</div>

				<div class="subtitle-home">
					<p><?php the_field('subtitulo'); ?></p>
				</div>
				
				<div class="phrase">
					<p><?php the_field('frase'); ?></p>
				</div>

				<div class="author-phrase">
					<p><?php the_field('autor'); ?></p>
				</div>

				<div class="intro-content">
					<p><?php the_field('intro'); ?></p>
				</div>

				<div class="content">
					<div class="image-home">
						<img src="/TestGood/wp-content/themes/good_theme/images/img1.png" script="width:458 px;height:300px;">
					</div>

					<div class="main-content">
						<p><?php the_content(); ?></p>
					</div>
				</div>

			<?php }
				echo paginate_links();
			?>

			<div class="continuar-button">
				<button>Continuar</button>
			</div>
		</div>
	</div>	

<?php
/*get_sidebar();
get_footer();*/
?>