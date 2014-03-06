<?php get_header(); ?>
      <section class="splash">
          <header class="home-header">
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
                <li class="home-nav__item"><a href="#" class="home-nav__link">About</a></li>
                <li class="home-nav__item"><a href="#" class="home-nav__link">What we do</a></li>
                <li class="home-nav__item"><a href="#" class="home-nav__link">Projects</a></li>
                <li class="home-nav__item"><a href="#" class="home-nav__link">Network</a></li>
              </ul>
            </nav>
          </header>


        <img src="<?php bloginfo('template_directory'); ?>/images/home5.jpg" alt="marinepartners">

      </section>
<?php get_footer(); ?>
