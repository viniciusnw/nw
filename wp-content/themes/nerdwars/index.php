<?php get_header();?>
        
<!-- CAROUSEL DESTAQUES -->
<?php include(TEMPLATEPATH . '/includes/carousel.php'); ?>
<!-- / CAROUSEL DESTAQUES -->

<!-- CONTEUDO PRINCIPAL -->
<main id="content">
    <div id="content-wrapper">
        <?php 
            if ( is_home() ) {
                include(TEMPLATEPATH . '/front.php');
            }
        ?>
    </div>
</main><!-- / CONTEUDO PRINCIPAL -->

<div class="clearfix"></div>
<?php get_footer();