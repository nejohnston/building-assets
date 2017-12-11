<?php
/**
 * The template for displaying the front-page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class='content-wrapper'>
    <section class='my-container'>
        <!-- <div>
            <img class='hero' src="<?php echo get_template_directory_uri(); ?>/assets/images/myanmar-kids.jpg" alt="Image of Oppressed Burmese Women" />
        </div>
            <h1 class='title'>Building Assets</h1>
        <div class="hero-opacity">
        </div> -->

    </section>
    <section>
        <h2 id='mission'>Mission</h2>
        <p>Our mission is to develop viable solutions to reduce and mitigate conflict and
            the resulting dependencies by working with local partners to create self-reliant
            local economies.</p>
    </section>
    <div class='img-container'>
        <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/myanmar-women.jpg'/>
    </div>
    <section>
        <h2 id='vision'>Vision</h2>
        <p>A world in which the barriers and obstacles for all, particularly women are
            broken down and a more level playing field realized through enhanced gender
            equality, justice and peace.</p>
    </section>
    <div class='img-container'>
        <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/blindwoman.jpg'/>
    </div>
    <section>
        <h2 id='who-we-are'>Who We Are</h2>
        <p>BA is a global non-profit, volunteer organization that recognizes the importance
            of the local voice in our development effort to facilitate and build a coherent
            vision for change. We work with our local partners in developing countries around
            the Asia Pacific to assess the human rights, and environmental impacts of
            investment/trade, and the developmental solutions, particularly focusing on the
            integration of gender equality programming.</p>
    </section>
    <div class='img-container'>
        <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/children-playing.jpg'/>
    </div>
    <section>
        <h2 id='what-we-do'>What We Do</h2>
        <p>We empower local partners who work to remove the barriers to social and economic
            inclusion, justice and gender discrimination through connecting productive
            assets with the resource user ( eg customary land tenure system ).The model of
            BA, however, is not found in quick solutions to conflict in transitional
            economies, but rather to generate creative platforms that address both core
            issues and a change to the underlying social structures and relationship
            patterns.</p>
    </section>
</div>

		<?php wp_footer(); ?>
