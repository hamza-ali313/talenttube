<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="croppie.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar Start -->
    <header data-aos="fade-down" data-aos-duration="3000">
        <nav class="navbar navbar-expand-lg navbar-light <?php if (isset($empHead) && is_string($empHead)) {echo $empHead;} else {echo 'desired tag';} ?>">
            <div class="container">
                <a class="navbar-brand" href="./index.php"><img src="images/logo-header.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#signInformModal">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#signInformModal">Remote only</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#signInformModal">Talents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#signInformModal">Companies</a>
                        </li>
                    </ul>
                    <div class="nav-btns">
                        <li class="nav-item spe">
                            <a class="nav-link" href="javascript:;" type="button" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#signInformModal">Login / Signup</a>
                        </li>
                        <li class="nav-item spe">
                            <a class="nav-link" href="#">Resume Builder</a>
                        </li>
                        <!-- <li class="nav-item spe">
                                <a class="nav-link" href="#" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#stepformModal">Register Now</a>
                            </li> -->
                        <li class="nav-item spe">
                            <a class="nav-link" href="employer.php">Employers</a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->