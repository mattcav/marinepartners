<article class="newscover">
    <a href="<?php the_permalink(); ?>" class="newscover__figure zoom-in">
        <?php echo get_the_post_thumbnail($post->ID, 'medium', array('class' => 'newscover__img')); ?>
    </a>
    <section class="newscover__blurb">
        <div class="newscover__inner">
            <h1 class="newscover__title"><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="newscover__link">Leggi tutto&nbsp;→</a>
        </div>
    </section>
</article>