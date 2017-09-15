<?php
/**
 * The template for displaying the front-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class='content-wrapper'>
    <section>
        <div>
            <img class='hero' src="<?php echo get_template_directory_uri(); ?>/assets/images/myanmar-kids.jpg" alt="Image of Oppressed Burmese Women" />
        </div>
            <h1 class='title'>Building Assets</h1>
        <div class="hero-opacity">
        </div>
    </section>
</div>

		<?php wp_footer(); ?>
