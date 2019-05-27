<?php get_header(); ?>

<!-- NAVBAR
================================================== -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbar-landing">
    <a href="index.html" class="navbar-brand">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cijarsa-logo-blanco.png" alt="cijarsa-logo" height="50px" width="auto" class="ml-2">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="tel:<?php the_field('telefono'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cijarsa-telefono-contacto.png" alt="cijarsa-telefono-contacto" height="50px" width="auto" class="mr-2"> <?php the_field('telefono'); ?>
                </a>
            </li>
        </ul>
    </div>
</nav>


<main>
<!-- LANDING INTRO
================================================== -->
<section class="hero d-flex align-items-center landing-intro" id="landing-intro">
    <div class="container">
        <div class="row justify-content-around d-flex align-items-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h1 class="d-none">Casas en venta Toluca, Metepec, Zinacantepec y Santiago Tianguistenco</h1>
                <h3 class="white-text mb-4"><?php the_field('titulo'); ?></h3>
                <p class="lead white-text"><?php the_field('texto_1'); ?></p>
                <div class="row justify-content-start">
                    <div class="col-10 col-md-9 col-lg-8">
                        <a href="#about-us" data-scroll>
                            <button class="btn btn-cijarsa-green btn-lg btn-block"><?php the_field('texto_boton_1'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-4">
                <div class="card px-3 py-3">
                <h6 class="card-title blue-text">Solicita Informes</h6>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Lo sentimos, el formulario de contacto se encuentra en mantenimiento.' ); ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- LANDING TEXT
================================================== -->
<section class="landing-text py-5" id="about-us">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h6 class="blue-text"><?php the_field('texto_2'); ?></h6>
            </div>
        </div>
    </div>
</section>


<!-- DESARROLLOS
================================================== -->
<section class="developments py-5 gray-section">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h3 class="blue-text">Desarrollos en Venta</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10">
                <div class="row justify-content-center">
                    <!-- Desarrollo 1 -->
                    <?php if( get_field('desarrollo_1') ): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card px-2 py-2">
                                <a href="#" data-toggle="modal" data-target="#desarrollo-1-modal">
                                    <img src="<?php the_field('imagen_principal_1'); ?>" class="card-img-top" alt="cijarsa-casas-en-venta">
                                </a>
                                <div class="card-body text-center">
                                    <div class="green-divider mb-2"></div>
                                    <a href="#" data-toggle="modal" data-target="#desarrollo-1-modal">
                                        <h6 class="card-title blue-text"><?php the_field('nombre_desarrollo_1'); ?></h6>
                                    </a>
                                    <p class="card-text blue-text"><small><?php the_field('ubicacion_desarrollo_1'); ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                    <!-- Desarrollo 2 -->
                    <?php if( get_field('desarrollo_2') ): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card px-2 py-2">
                                <a href="#" data-toggle="modal" data-target="#desarrollo-2-modal">
                                    <img src="<?php the_field('imagen_principal_2'); ?>" class="card-img-top" alt="cijarsa-casas-en-venta">
                                </a>
                                <div class="card-body text-center">
                                    <div class="green-divider mb-2"></div>
                                    <a href="#" data-toggle="modal" data-target="#desarrollo-2-modal">
                                        <h6 class="card-title blue-text"><?php the_field('nombre_desarrollo_2'); ?></h6>
                                    </a>
                                    <p class="card-text blue-text"><small><?php the_field('ubicacion_desarrollo_2'); ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    
                    <!-- Desarrollo 3 -->
                    <?php if( get_field('desarrollo_3') ): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4">
                            <div class="card px-2 py-2">
                                <a href="#" data-toggle="modal" data-target="#desarrollo-3-modal">
                                    <img src="<?php the_field('imagen_principal_3'); ?>" class="card-img-top" alt="cijarsa-casas-en-venta">
                                </a>
                                <div class="card-body text-center">
                                    <div class="green-divider mb-2"></div>
                                    <a href="#" data-toggle="modal" data-target="#desarrollo-3-modal">
                                        <h6 class="card-title blue-text"><?php the_field('nombre_desarrollo_3'); ?></h6>
                                    </a>
                                    <p class="card-text blue-text"><small><?php the_field('ubicacion_desarrollo_3'); ?></small></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA
================================================== -->
<section class="cta-landing py-5" style="background: url('<?php the_field('imagen_banner_final'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center;background-attachment:fixed;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h2 class="white-text mb-3"><?php the_field('texto_banner_final'); ?></h2>
                <a href="#landing-intro" data-scroll>
                    <button class="btn btn-cijarsa-green btn-lg px-5"><?php the_field('texto_boton_banner_final'); ?></button>
                </a>
            </div>
        </div>
    </div>
</section>
</main>


<!-- FOOTER
================================================== -->
<footer class="py-5">
    <div class="container">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-12 col-md-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/cijarsa-logo.png" alt="cijarsa-logo" height="65px">
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="<?php the_field('facebook'); ?>" target="_blank" rel="external" class="mr-3">
                    <i class="fab fa-facebook-f fa-3x blue-text"></i>
                </a>
                <a href="<?php the_field('instagram'); ?>" target="_blank" rel="external" class="mr-3">
                    <i class="fab fa-instagram fa-3x blue-text"></i>
                </a>
                <a href="<?php the_field('twitter'); ?>" target="_blank" rel="external">
                    <i class="fab fa-twitter fa-3x blue-text"></i>
                </a>
            </div>
            <div class="col-12 col-md-4 text-right">
                <a href="tel:<?php the_field('telefono'); ?>"><p class="blue-text mb-2"><?php the_field('telefono'); ?></p></a>
                <a href="mailto:<?php the_field('correo'); ?>"><p class="blue-text"><?php the_field('correo'); ?></p></a>
            </div>
        </div>
    </div>
</footer>

<?php get_footer(); ?>