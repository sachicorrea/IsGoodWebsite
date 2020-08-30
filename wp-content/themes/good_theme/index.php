<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package good_theme
 */

get_header();
?>
	<div class="container">
		
		<img src="/TestGood/wp-content/themes/good_theme/images/img.jpg" script="width:1918 px;height:234 px;">

		<div class="title">
            <h1>Inicio</h1>
		</div>

		<div class="subtitle">
			<h2>Lorem ipsum</h2>
		</div>
		
		<div class="phrase">
			<p>"Break it down mofo dolizzle ma nizzle amizzle"</p>
		</div>

		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, deleniti mollitia laboriosam debitis molestiae vitae rem perferendis facere ad, unde doloribus tenetur, minus officiis assumenda exercitationem! Fugiat, quibusdam facere! Corrupti.
		</div>

		<div class="image-home">
			<img src="/TestGood/wp-content/themes/good_theme/images/img1.png" script="width:700 px;height:700px;">
		</div>

		<div class="second-content">
			<p>Ma nizzle interdizzle fo brizzle. Ut my shizz adipiscing lorem. Donec bling bling est. Fizzle sapizzle massa, that's the shizzle nizzle, accumsizzle shizzle my nizzle crocodizzle, fermentum quis, pede. Dizzle the bizzle gizzle. Gizzle crazy funky fresh ante. Black fo shizzle. Go to hizzle ut pede varius nibh crackalackin commodo. Check out this things dolizzle sizzle nizzle, things adipiscing elit. Sed izzle mi. Quisque pot sizzle, that's the shizzle bow wow wow, boofron a, daahng dawg a, elit.</p>
		</div>

		<button type="button">Continuar</button>
	</div>

<?php
/*get_sidebar();
get_footer();*/
?>
