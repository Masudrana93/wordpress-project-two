<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- for CSS Links  -->
    <?php wp_head();?>

</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md sticky-top bg-info">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand  " href="index.html">
                            <img src="<?php echo esc_url(get_template_directory_uri(). '/images/logo-1.jpg');?>" alt="Main-logo" class="img-fluid" style="width: 80px;">
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary-menu',
                                    'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0 menu-ft-size',
                                    'container'      => false,
                                ));
                            ?>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End  -->