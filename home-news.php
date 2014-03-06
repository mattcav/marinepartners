<?php
    $args = array(
            'cat'=> '8',
            'posts_per_page'=>'3'
        ); 
    $homenews_query = new WP_Query( $args );

        if ( $homenews_query->have_posts() ) {
                echo '<section class="home-section home--news row">'; ?>
                <header class="homenews__header">
                    <h1 class="hometitle hometitle--news">
                        NEWS
                    </h1>
                </header>  
        <?php while ( $homenews_query->have_posts() ) {
                $homenews_query->the_post();
                get_template_part('component', 'newscover'); 
            }
                echo '</section>';
        } else {
            // no posts found
        }
    wp_reset_postdata(); 
?>


