<?php get_header(); ?>
      <?php get_template_part('home', 'splash'); ?>
      <div class="bottom-img">
        <?php get_template_part('home', 'news'); ?>
        <?php get_template_part('home', 'services'); ?>   
        <img src="<?php bloginfo('template_directory'); ?>/images/services.jpg" alt="services" class="bottom-img__img">    
      </div>   
<?php get_footer(); ?>
