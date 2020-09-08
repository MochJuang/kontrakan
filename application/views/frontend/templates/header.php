<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 02 || Ortiz - Real Estate Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/front/images/favicon.ico">
    
    <!-- CSS
	============================================ -->
   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/plugins.css">
    <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css"/>

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css">
    
</head>

<body>


<!-- Header Section Start --> 
<input type="hidden" value="<?php echo base_url() ?>" name="base_url">
<header class="header-wrapper section">
    <div class="header-top bg-theme-white section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="header-top-info">
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="header-buttons">
                        <a class="header-btn btn-border"  href="<?php echo base_url() ?>/panel/panel" >Login & Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-section section bg-theme-two">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-2 col-6">
                    <div class="header-logo">
                        <a href="index.html"><img src="<?php echo base_url() ?>assets/front/images/logo-2.png" alt=""></a>
                    </div>
                </div>

                <div class="col-lg-10 col-6">
                    <div class="header-mid_right-bar">
                        <nav class="main-menu text-white d-lg-block d-none">
                            <ul>
                                <li class="has-dropdown"><a href="<?php echo base_url() ?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>booking">Booking Kost</a></li>
                            </ul>
                        </nav>
                        <div id="search-overlay-trigger" class="search-icon">
                            <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu white-m-bar order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Section End -->
</header>

<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form" style="position : absolute !important; top : 10px;left: 200px;width:500px !important;font-size : 30px !important;padding-bottom: 0px !important">
                <form action="#">
                    <input name="search_kontrakan" style="font-size : 30px !important; padding-bottom: 0px !important" type="text" placeholder="Cari Kontrakan, Kota, Alamat">
                </form>
            </div>

            <div class="ml-md-5 containerr">
                <div id="reload_search" class="container row">
                </div>
            </div>
        </div>
    </div>
</div>

