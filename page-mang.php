<?php
    get_header();
?>

    <div class="jumbotron jumbo-mang">
        <h1>Compra</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?=get_theme_file_uri("inc/img/chainsaw-man-csm.gif")?>" class="card-img-top" alt="Chainsaw Man">
                    <div class="card-body">
                        <h5>Chainsaw Man</h5>
                        <a href="<?=site_url("manga")?>" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>    
        </div>
    </div>

<?php
    get_footer();
?>
