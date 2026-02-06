<?php
?>
<?php get_header(); ?>
<div class="jumbotron jumbo-tienda">
    <main class="site-main">
        <section class="hero">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>
            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-primary">Ir al Blog</a>
        </section>
    </main>
</div>

<div class="container">
    <div class="row">

        <div class="col-md-4">
            <h2>Últimas Entradas</h2>
                <div class="card" style="width: 18rem;">
                    <img src="<?=get_theme_file_uri("inc/img/Chain1.jpg")?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Visita nuestro Blog</h5>
                    <p class="card-text">Revisa las últimas entradas de nuestro blog.</p>
                    <a href="<?=site_url("blog")?>" class="btn btn-primary">Go somewhere</a>
                </div>

                  </div>      
        </div>

        <div class="col-md-4">
                    <h2>Venta fisica</h2>
                    <div class="card" style="width: 18rem;">
        <img src="<?=get_theme_file_uri("inc/img/chainsaw-man-csm.gif")?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Visita nuestra tienda física</h5>
            <p class="card-text">Revisa los productos disponibles en nuestra tienda física.</p>
            <a href="<?=site_url("comprar-manga")?>" class="btn btn-primary">Go somewhere</a>
        </div>
        
            </div>
        </div>

            <div class="col-md-4">
                    <h2>Venta digital</h2>
                    <div class="card" style="width: 18rem;">
        <img src="<?=get_theme_file_uri("inc/img/233260.webp")?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Visita nuestra tienda digital</h5>
            <p class="card-text">Revisa los productos disponibles en nuestra tienda digital.</p>
            <a href="<?=site_url("comprar-producto-digital")?>" class="btn btn-primary">Go somewhere</a>
        </div>
        
            </div>
    </div>

</div>

<?php get_footer(); ?>  