<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css/plugins.css">

    <link href="css/twentytwenty.css" rel="stylesheet" type="text/css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .carddiv {
            display: flex;
            flex-direction: column;
            font-family: "Roboto Condensed", sans-serif;
            font-weight: normal;
        }

        .maindiv {

            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            padding: 50px;
            font-family: "Roboto", sans-serif;
        }

        .card {
            width: 350px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
            color: #000;
            box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);
        }

        .card img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 1;
            transition: opacity 0.2s ease-out;
        }

        .card h3 {
            position: absolute;
            inset: auto auto 30px 30px;
            margin: 0;
            transition: inset 0.3s 0.3s ease-out;

        }

        .carddiv .card h3 {
            font-family: "Roboto Condensed", sans-serif;
            font-weight: normal;
            text-transform: uppercase;
        }

        .card a {
            position: absolute;
            opacity: 0;
            max-width: 80%;
            transition: opacity 0.3s ease-out;
        }

        .card a {
            inset: auto auto 40px 30px;
            color: inherit;
            text-decoration: none;
        }

        .card:hover h3 {
            inset: auto auto 180px 30px;
            transition: inset 0.3s ease-out;
            color: #ef7f1a;
        }

        .card:hover a {
            opacity: 1;
            transition: opacity 0.5s 0.1s ease-in;
        }

        .card:hover img {
            transition: opacity 0.3s ease-in;
            opacity: 0.7;

        }

        @media (max-width: 768px) {
            .maindiv {
                display: flex;
                flex-direction: column;
            }
        }

        @media (max-width: 991px) {
            .navbar .navbar-nav .nav-link {
                color: white !important;
            }
        }

        .navbar .navbar-nav .nav-link {
            color: #000;
        }
    </style>
</head>

<body>
    <!-- ==================== Start Loading ==================== -->

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(Images/logo/1716190129302.JPEG);"></div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->
    <!-- ==================== Start Navbar ==================== -->

    <div id="header"></div>

    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Works ==================== -->
    <div class="row" style="margin-top: 55px;">
  
    <?php
			// Path to the directory containing folders
			$folderPath = 'Images/Product_final/';

			// Get the list of folders
			$subfolders = scandir($folderPath);

			// Exclude "." and ".." from the list
			$subfolders = array_diff($subfolders, array('.', '..'));

			// Display the list of subfolders
			$i = 0;
			foreach ($subfolders as $subfolder) {
				if (is_dir($folderPath . $subfolder)) {
					// Encode the subfolder name for JavaScript use
					
					// Create tab button with appropriate attributes
                    ?>

       
        <div class="carddiv col-md-6 col-lg-4 align-items-center  mt-4">
            <div class="card">
                <img src="Images/Prieview_Product/<?php echo $subfolder.".webp";?>" alt="">
                <div class="card-content">
                    <a href="Design/jay-sanghani" class="button">
                        Explore
                    </a>    
                </div>
            </div>
            <h4>
                <a href="productdetails.html"><?php echo $subfolder;?></a>
            </h4>
        </div>
        <?php
			
		}
	}
	?>

       
    </div>
    <!-- ==================== End Works ==================== -->
     <!-- ==================== Start Works ==================== -->

     <section class="work-carousel metro section-padding ">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Works</h6>
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">Some Highlights From Our Luxurious Collection</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/PORCELAIN01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/PORCELAIN02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/SLAB01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/SLAB02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/WOODENPLANK01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/WOODENPLANK02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/ELEVATION01.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/OUTDOOR02.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/OUTDOOR1.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="Images/ImageCollection/PRODUCT/ELEVATION02.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider setting -->
                        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Works ==================== -->

    <!-- ==================== Start Footer ==================== -->
    <div id="footer"></div>
    <!-- ==================== End Footer ==================== -->


    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

    <!-- Map -->
    <script src="js/map.js"></script>
    <script>
        $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
    <!-- google map api -->
    <script async="" defer=""
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&callback=initMap">
        </script>
</body>

</html>