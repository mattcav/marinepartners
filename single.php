<?php get_header(); ?>
<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
<section class="splash splash--article">
    <header class="home-header home-header--article">
    <section class="home-header__left">
       <h1>
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/images/marinepartners.svg" alt="marinepartners">
        </a>
      </h1>
    </section>
    <section class="home-header__right hide-for-large-up">
      <a class="right-off-canvas-toggle menu-icon" href="#" >☰</a> 
    </section>
    <nav class="home-nav show-for-large-up">
      <ul class="side-nav home-nav__list">
        <li class="home-nav__item">
          <a href="#" class="home-nav__link with-hovercover">
            <span class="hovercover"></span>
            About
          </a>
        </li>
        <li class="home-nav__item">
          <a href="#" class="home-nav__link with-hovercover">
            <span class="hovercover"></span>
            What we do
          </a>
        </li>
        <li class="home-nav__item">
          <a href="#" class="home-nav__link with-hovercover">
            <span class="hovercover"></span>
            Projects
          </a>
        </li>
        <li class="home-nav__item">
          <a href="#" class="home-nav__link with-hovercover">
            <span class="hovercover"></span>
            Network
          </a>
        </li>
        <li class="home-nav__item home-nav--search">
          <a href="#" class="home-nav__link with-hovercover">
            <span class="hovercover"></span>
            <span class="fontawesome-search"></span>
          </a>
        </li>
      </ul>
    </nav>
  </header>
</section>  
<div class="row">
    <div class="entry">
        <header class="entry__header">
            <time class="entry__date"><?php the_date('d j Y'); ?></time>
            <h1 class="entry__title"><?php the_title(); ?></h1>
            <h2 class="subheader entry__subheader"><?php echo the_excerpt_rss(); ?></h2>
        </header>
    </div>
    <figure class="entry__figure">
        <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'entry__img')); ?>
    </figure>
    <div class="entry">
        <?php the_content(); ?>
    </div>    
    </article>   
</div>    
<?php endwhile; ?>       
<?php get_footer(); ?>
