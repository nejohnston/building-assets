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
      <?php echo CFS()->get('mission'); ?>

    </section>
    <div class='img-container'>
      <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/myanmar-women.jpg' />
    </div>
    <section>
      <h2 id='vision'>Vision</h2>
      <?php echo CFS()->get('vision'); ?>
    </section>
    <div class='img-container'>
      <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/blindwoman.jpg' />
    </div>
    <section>
      <h2 id='who-we-are'>Who We Are</h2>
      <?php echo CFS()->get('who_we_are'); ?>
    </section>
    <div class='img-container'>
      <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/children-playing.jpg' />
    </div>
    <section>
      <h2 id='what-we-do'>What We Do</h2>
      <?php echo CFS()->get('what_we_do'); ?>

    </section>
  </div>

  <?php wp_footer(); ?>