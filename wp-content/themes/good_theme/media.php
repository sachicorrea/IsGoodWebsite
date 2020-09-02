<?php
/*
Template name: Media page
 */

get_header();
?>
   <div class="title">
        <p>Video & audio</p>
    </div>

	<div class="container">    
        <div class="video">
            <?php
                // Load value.
                $iframe = get_field('oEmbed');

                // Use preg_match to find iframe src.
                preg_match('/src="(.+?)"/', $iframe, $matches);
                $src = $matches[1];

                // Add extra parameters to src and replcae HTML.
                $params = array(
                    'controls'  => 0,
                    'hd'        => 1,
                    'autohide'  => 1
                );
                $new_src = add_query_arg($params, $src);
                $iframe = str_replace($src, $new_src, $iframe);

                // Add extra attributes to iframe HTML.
                $attributes = 'frameborder="0"';
                $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                // Display customized HTML.
                echo $iframe;
            ?>
		</div>

        <audio class="audio">
            <!--<source src="" type="audio/mpeg">-->

            <?php $attr = array(
                'loop'     => '',
                'autoplay' => '',
                'preload' => 'none'
            );
            echo wp_audio_shortcode( $attr ); ?>
        </audio>

        <div class="buttons-container">
            <button id="button1">Regresar</button>
            <button id="button2">Continuar</button>
        </div>  
    </div>

<?php
/*get_sidebar();
get_footer();*/
?>
