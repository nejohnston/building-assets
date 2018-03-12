<?php
/**
* The template for displaying the front-page.
*
* @package Building_Assets_Theme
*/

get_header(); ?>
  <div class='content-wrapper'>
    <section class='my-container'>
      <div>
        <img class='hero' src="<?php echo get_template_directory_uri(); ?>/assets/images/myanmar-kids.jpg" alt="Image of Oppressed Burmese Women" />
      </div>
    </section>
    <section>
      <h2 id='mission'><?php echo CFS()->get('mission_title'); ?></h2>
      <?php echo CFS()->get('mission_description'); ?>

    </section>
    <div class='img-container'>
      <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/myanmar-women.jpg' />
    </div>
    <section>
      <h2 id='vision'><?php echo CFS()->get('vision_title'); ?></h2>
      <?php echo CFS()->get('vision_description'); ?>
    </section>
    <div class='img-container'>
      <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/blindwoman.jpg' />
    </div>
    <section>
      <h2 id='who-we-are'><?php echo CFS()->get('who_we_are_title'); ?></h2>
      <?php echo CFS()->get('who_we_are_description'); ?>
    </section>
    <div class='img-container'>
      <img class='parallax-img' src='<?php echo get_template_directory_uri(); ?>/assets/images/children-playing.jpg' />
    </div>
    <section>
      <h2 id='what-we-do'><?php echo CFS()->get('what_we_do_title'); ?>
</h2>
      <?php echo CFS()->get('what_we_do_description'); ?>

    </section>
  </div>

  <?php wp_footer(); ?>