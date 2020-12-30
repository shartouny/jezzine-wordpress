<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets\pictures\logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/myJquery.js"></script>
    <title>Jezzine | Home</title>
</head>

<body>
    <!-- header section start  -->
    <div class="container">
        <!-- container start -->
        <header>
            <!-- upper bar start  -->
            <div class="row h-100 justify-content-md-between justify-content-center" id="upper-bar">
                <div class="col-auto p-3">
                    <a class="" href="index.php"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/pictures/logo.png" class="img-fluid logo" alt="not found"></a>
                </div>
                <div class="col-sm-4">


                    <div class="container position-md-absolute b-0 l-0">

                        <ul class="list-unstyled d-flex justify-content-md-end justify-content-center align-items-center">
                            <li class="nav-item d-none d-sm-block">
                                <a href="contact.php" class="nav-link">
                                    إتصل بنا
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link social-icon">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- upper bar end  -->
            <!-- navbar start  -->
            <nav>
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'main_menu',
                                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'bs-example-navbar-collapse-1',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                             get_search_form();
                            ?>
                            <!-- <form class="form-row px-3 pb-3">
                                    <div class="col">
                                        <input class="form-control mr-sm-2" type="search" placeholder="البحث" aria-label="Search">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form> -->
                            <!-- <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
                                    </li>
                                    

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="drop-button">الإتحاد</span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a class="px-3 px-md-2 nav-link active" href="about.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li>
                                                <a class="px-3 px-md-2 nav-link " href="about.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li>
                                                <a class="px-3 px-md-2 nav-link " href="about.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
                                            </li>
                                                
                                        </ul>

                                        <ul class="dropdown-menu  w-100" aria-labelledby="navbarDropdown">
                                               <div class="navbar-nav">
                                                <a class="px-3 px-md-2 nav-link active" href="about.php">الصفحة الرئيسيّة <span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">رسالة الرئيس<span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">تاريخ الإتحاد <span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">الرؤية والرسالة <span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">هيكلية الإتحاد <span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="members.php">أعضاء المجلس <span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">المجالس البلدية<span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">اللجان<span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#">شرعة المواطن الجزيني<span class="sr-only">(current)</span></a>
                                                <a class="px-3 px-md-2 nav-link" href="#"> قرارات وعقود النفقة<span class="sr-only">(current)</span></a>
                                            </div>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="projects.php">المشاريع</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="news.php">النشاطات والأخبار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="services.php">خدمة المواطنين</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <span>
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="drop-button">إكتشف المنطقة</span>
                                            </a>
                                            <div class="dropdown-menu  w-100" aria-labelledby="navbarDropdown">
                                                <div class="navbar-nav">
                                                    <a class="px-3 px-md-2 nav-link active" href="general-overview.php">نظرة عامة عن المنطقة <span class="sr-only">(current)</span></a>
                                                    <a class="px-3 px-md-2 nav-link" href="towns.php"> البلدات<span class="sr-only">(current)</span></a>
                                                    <a class="px-3 px-md-2 nav-link" href="tourism.php">سياحة <span class="sr-only">(current)</span></a>
                                                    <a class="px-3 px-md-2 nav-link" href="#">سياحة بيئية <span class="sr-only">(current)</span></a>
                                                    <a class="px-3 px-md-2 nav-link" href="#"> الصناعة الحرفية الجزينية <span class="sr-only">(current)</span></a>
                                                </div>
                                            </div>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">الدليل</a>
                                    </li>
                                </ul>
                                <form class="form-row px-3 pb-3">
                                    <div class="col">
                                        <input class="form-control mr-sm-2" type="search" placeholder="البحث" aria-label="Search">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div> -->
                        </nav>
                    </div>
                </div>
            </nav>
            <!-- navbar end  -->
        </header>
    </div>
    <!-- header section end  -->