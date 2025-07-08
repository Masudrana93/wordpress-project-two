<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

     <!-- Bootstrap icons link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <!-- External CSS Link  -->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">
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



                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-ft-size">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="index.html">Home</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="category.html">My Projects</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link" href="about-me.html">About Myself</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="photo-gallery.html">Photo Gallery</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="video-gallery.html">Video Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>


                            </ul>


                        </div>


                    </div>
                </div>
            </div>
        </div>



    </nav>
    <!-- Navbar End  -->

     <!-- *******Welcome Section Start ****** -->
    <div class="container-fluid px-0">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/images/welcome-banner-1.jpg');?>" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/images/welcome-banner-2.jpg');?>" class="d-block w-100 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo esc_url(get_template_directory_uri(). '/images/welcome-banner-3.jpg');?>" class="d-block w-100 img-fluid" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <!-- *******Welcome Section End ****** -->

    <!--***** Our courses section start  ******-->

    <div class="container-fluid py-5 bg-body-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="text-center mb-3 fw-bold">My Projects</h2>
                    <p class="text-center">
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit amet consectetur adipisicing elit.
                        <br>
                        Facere, alias consequatur. Hic, ex dolor esse sequi ex
                        dolor esse sequi!
                    </p>

                </div>

                <!--** photo-card start ** -->

                <!-- item start  -->
                <div class="col-md-4">
                    <div class="card shadow rounded-0">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/images/project-1.jpg');?>" class="card-img-top rounded-0 img-fluid" alt="...">
                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3">Happiness Institute</h5>
                            <a href="https://masudrana93.github.io/happiness-institute/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                        </div>

                    </div>
                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-4 mt-md-0 mt-5">
                    <div class="card shadow rounded-0">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/images/project_2.jpg');?>" class="card-img-top rounded-0 img-fluid" alt="...">
                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3">Naem Nizam Blog</h5>
                            <a href="https://masudrana93.github.io/naem-nizam/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                        </div>

                    </div>
                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-4 mt-md-0 mt-5">
                    <div class="card shadow rounded-0">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/images/project-3.jpg');?>" class="card-img-top rounded-0 img-fluid" alt="...">
                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3">Saimon IELTS</h5>
                            <a href="https://masudrana93.github.io/saimons-ielts/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                        </div>

                    </div>
                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-4 mt-5">
                    <div class="card shadow rounded-0">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/images/project-4.jpg');?>" class="card-img-top rounded-0 img-fluid" alt="...">
                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3">Madrasha</h5>
                            <a href="https://masudrana93.github.io/madrasha-website/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                        </div>

                    </div>
                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-4 mt-5">
                    <div class="card shadow rounded-0">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/images/project-5.jpg');?>" class="card-img-top rounded-0 img-fluid" alt="...">
                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3">University</h5>
                            <a href="https://masudrana93.github.io/university-website/" target="_blank" class="btn rounded-pill brand-color">View More</a>
                        </div>

                    </div>
                </div>
                <!-- item end  -->

                <!-- item start  -->
                <div class="col-md-4 mt-5">
                    <div class="card shadow rounded-0">
                        <img src="<?php echo esc_url(get_template_directory_uri(). '/images/project-6.jpg');?>" class="card-img-top rounded-0 img-fluid" alt="...">
                        <div
                            class="card-body our-courses-view-btn-hover d-flex flex-column justify-content-center align-items-center position-relative pb-4">
                            <div
                                class="position-absolute top-0 start-50 translate-middle bg-white px-3 py-2 rounded-circle shadow-sm">
                                <i class="bi bi-filetype-html fs-2 icon-color"></i>
                            </div>
                            <h5 class="card-title mt-5 mb-3">Landview Group</h5>
                            <a href="https://masudrana93.github.io/landiview_group/" class="btn rounded-pill brand-color">View More</a>
                        </div>

                    </div>
                </div>
                <!-- item end  -->

                
                <!--** photo-card end ** -->
            </div>
        </div>
    </div>

    <!--***** Our courses section start  ******-->


        <!-- *****Footer Section Start *****-->

    <div class="container-fluid footer-bg-color">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12 footer-logo-size mb-3">
                            <a href="#"><img src="images/logo-1.jpg" alt="main logo" style="width: 80px;"></a>
                        </div>
                        
                        <div class="col-12 footer-address mt-3">
                            <a href="#" class="text-decoration-none">
                                <i class="bi bi-geo-alt"></i>
                                 New Circular Road, Mouchak Mor, Malibagh, Dhaka, Bangladesh
                            </a>
                            <a href="tel:+8801715-038031" class="text-decoration-none d-block">
                                <i class="bi bi-phone-vibrate"></i> +88001914449393
                            </a>
                            <a href="#" class="text-decoration-none d-block">
                                <i class="bi bi-envelope-at"></i> masudrana@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 footer-company mt-md-0 mt-4">
                    <h5 class="footer-headings-color mb-md-3 mb-2">Company</h5>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li><a href="about-us.html">My Projects</a></li>

                        <li><a href="faqs.html">About Myself</a></li>

                        <li><a href="contact-us.html">Contact</a></li>

                    </ul>
                </div>
                <div class="col-md-3 footer-courses mt-md-0 mt-4">
                    <h5 class="footer-headings-color mb-md-3 mb-2">Recent Projects</h5>
                    <ul>
                        <li>
                            <a href="https://masudrana93.github.io/saimons-ielts/" target="_blank">Saimon IELTS</a>
                        </li>
                        <li><a href="https://masudrana93.github.io/naem-nizam/" target="_blank">Naem Nizam</a></li>

                        <li><a href="https://masudrana93.github.io/happiness-institute/" target="_blank">Happiness Institute</a></li>

                        <li><a href="https://masudrana93.github.io/madrasha-website/" target="_blank">Madrasha</a></li>

                        <li><a href="https://masudrana93.github.io/university-website/" target="_blank">University</a></li>

                        



                    </ul>
                </div>
                <div class="col-md-3 footer-getin-touch mt-md-0 mt-4">
                    <h5 class="footer-headings-color mb-md-3 mb-2">Get In Touch</h5>
                    <ul>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
                        </li>
                        <li><a href="#"><i class="bi bi-youtube"></i> Youtube</a></li>

                        <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>

                        <li><a href="#"><i class="bi bi-linkedin"></i> Linkedin</a></li>

                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- *****Footer Section End *****-->

    <!-- ****Footer-Bottom section Start  ****-->

    <div class="container-fluid footer-bg-color border-top border-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3 d-flex justify-content-center ">

                    <p class="text-secondary mb-0">2025 <code class="text-white">Masud Rana</code> All Rights
                        Reserved.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- ****Footer-Bottom section End  ****-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

        <!-- Bootstrap.bundle.min.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper js -->
    <script src="swiper-slider.js"></script>
</body>

</html>