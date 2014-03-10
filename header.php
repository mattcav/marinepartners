<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>marinepartners - prototipo</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css" />
    <script type="text/javascript" src="//use.typekit.net/ipv1hyx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php //wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <div class="off-canvas-wrap">
    <div class="inner-wrap">

    <aside class="right-off-canvas-menu offcanvas">
        <ul class="offcanvas__list">
            <li class="offcanvas__item"><a href="#" class="offcanvas__link">About</a></li>
            <li class="offcanvas__item"><a href="#" class="offcanvas__link">What we do</a></li>
            <li class="offcanvas__item"><a href="#" class="offcanvas__link">Projects</a></li>
            <li class="offcanvas__item"><a href="#" class="offcanvas__link">Network</a></li>
        </ul>

        <form action="#" class="offcanvas__search" id="oc-search">
            <div class="search__inner">
            <h2 class="search__title">Cerca nel sito:</h2>
              <div class="search__input">
                <input type="search" placeholder="scrivi qui per cercare">
              </div>
              <div class="search__button">
                <button class="postfix"><span class="fontawesome-search"></span></button>
              </div>
            </div>
          </form>
    </aside>
