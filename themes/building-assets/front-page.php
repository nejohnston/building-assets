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
    <div class='img'></div>
    <section>
        <h2 id='mission'>Mission</h1>
        <p>Our mission is to develop viable solutions to reduce and mitigate conflict and
            the resulting dependencies by working with local partners to create self-reliant
            local economies.</p>
    </section>
    <div class='img'></div>
    <section>
        <h2 id='vision'>Vision</h1>
        <p>A world in which the barriers and obstacles for all, particularly women are
            broken down and a more level playing field realized through enhanced gender
            equality, justice and peace.</p>
    </section>
    <div class='img'></div>
    <section>
        <h2 class='img'></h2>
    </section>
</div>

		<?php wp_footer(); ?>
