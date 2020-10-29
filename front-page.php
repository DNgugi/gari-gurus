<?php get_header(); ?>

<main>
    <section class="hero">
       <div class="container">
        <h1><?php echo get_theme_mod( 'hero_text_setting'); ?></h1>
        <a href="<?php echo get_permalink(get_theme_mod( 'hero_button_url_setting')); ?>" class="btn"><?php echo get_theme_mod( 'hero_button_setting'); ?></a>
       </div>
    </section>
    <section class="sidekick container grid">
      <!--<h1 class="sidekick__title">Why Us</h1>-->
      <div class="card sidekick__card">
        <h1><i class="fa <?php echo get_theme_mod('card_icon_text'); ?>"></i></h1>
        <h3><?php echo get_theme_mod('card_header_text'); ?></h3>
        <?php echo wpautop(get_theme_mod('card_body_text')); ?>
      </div>

      <div class="card sidekick__card">
        <h1><i class="fa <?php echo get_theme_mod('card_icon_text_2'); ?>"></i></h1>
          <h3><?php echo get_theme_mod('card_header_text_2'); ?></h3>
          <?php echo wpautop(get_theme_mod('card_body_text_2')); ?>
      </div>
      <div class="card sidekick__card">
        <h1><i class="fa <?php echo get_theme_mod('card_icon_text_3'); ?>"></i></h1>
          <h3><?php echo get_theme_mod('card_header_text_3'); ?></h3>
          <?php echo wpautop(get_theme_mod('card_body_text_3')); ?>
      </div>
      <div class="card sidekick__card">
        <h1><i class="fa <?php echo get_theme_mod('card_icon_text_4'); ?>"></i></h1>
          <h3><?php echo get_theme_mod('card_header_text_4'); ?></h3>
          <?php echo wpautop(get_theme_mod('card_body_text_4')); ?>
      </div>

    </section>
    <section class="cta container">
      <h1><?php echo get_theme_mod( 'cta_text_setting'); ?></h1>
      <a href="<?php echo get_permalink(get_theme_mod( 'cta_button_url_setting')); ?>" class="btn"><?php echo get_theme_mod( 'cta_button_setting'); ?></a>
    </section>
  </main>

<?php get_footer(); ?>