<?php
/**
 * The template for displaying the front-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section>
    <div>
	    <img class='hero' src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpeg" alt="Image of Oppressed Burmese Women" />
    </div>
    <div class="hero-opacity">
    </div>
</section>

		<?php wp_footer(); ?>
