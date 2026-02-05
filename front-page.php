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
        <div class="col-md-12">
            <h2>Últimas Entradas</h2>
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="<?=site_url("blog")?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>      
        </div>
    </div>


<?php get_footer(); ?>