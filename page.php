<?php

require_once('header.php');
?>

<main class="pagina-main">
    
    <article class="pagina">

        <div id="eventos" class="eventos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2> <?php the_title(); ?></h2>
                        
                    </div>
                </div>

            </div>
        </div>

        <br><br>

        <?php if( have_posts() ) {
            while( have_posts() ) {
                the_post(); ?>

            <div class="container">
             <?php the_content(); ?>
            </div>

        <?php   }
        } 

        if( is_page('home') ) {

        ?>

       

    <?php } ?>

     <br><br>

    </article>
</main>

<?php get_footer(); ?>