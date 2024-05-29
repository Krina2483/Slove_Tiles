<?php


$foldername = $_GET['foldername'];

// Replace hyphens with spaces
$foldername = str_replace('-', ' ', $foldername);

function customSort($array) {
    // Define a custom comparison function
    $compare = function($a, $b) {
        // Extract the numerical values from the strings
        preg_match('/(\d+)X(\d+)MM/', $a, $matchesA);
        preg_match('/(\d+)X(\d+)MM/', $b, $matchesB);

        // Extract width and height from the matches
        $widthA = intval($matchesA[1]);
        $heightA = intval($matchesA[2]);
        $widthB = intval($matchesB[1]);
        $heightB = intval($matchesB[2]);

        // Compare based on width first, then height
        if ($widthA != $widthB) {
            return $widthA - $widthB;
        } else {
            return $heightA - $heightB;
        }
    };

    // Use usort to sort the array using the custom comparison function
    usort($array, $compare);

    return $array;
}

function jay($dir) {
    $directory3 = $dir; // Replace this with the path to your directory/subfolder

    if (is_dir($directory3)) {
        $subfolders3 = scandir($directory3);
        $foundSubfolder = false; // Initialize a flag to track if at least one subfolder is found
        foreach ($subfolders3 as $subfolder3) {
            if (is_dir($directory3 . '/' . $subfolder3) && $subfolder3 != '.' && $subfolder3 != '..') {
                $foundSubfolder = true; // Set flag to true if at least one subfolder is found
            }
        }
        if (!$foundSubfolder) { // Check the flag to determine if any subfolder was found
            return false; // If no subfolder found, return false
        }
    } else {
        echo "Subfolder does not exist.";
        return false; // If the main folder doesn't exist, return false
    }
    return true; // Return true if at least one subfolder is found
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="http://localhost/slove/Slove/">
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Archo onepage themeforest">
    <meta name="description" content="Archo - Onepage Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Packing Details</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css">
    <link href="css/twentytwenty.css" rel="stylesheet" type="text/css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- ==================== Start Loading ==================== -->
    <div id="preloader">
        <div class="loading-text">Loading</div>
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

    <!-- ==================== Start Header ==================== -->
    <header class="pages-header bg-img valign parallaxie" data-background="Images/backgrounds/about-bg-2-1.png" style="background-color: black;" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Product Details</h1>
                        <div class="path">
                            <a href="#0">Home</a><span>/</span><a href="#0">Products</a><span>/</span><a href="#0" class="active">Product Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== End Header ==================== -->

    <section class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <!-- filter links -->
                <div class="filtering text-center col-12">
                    <div class="filter box">
                                                <?php
                        // Path to the directory containing folders
                        $folderPath = 'Images/Product_final/' . $foldername . '/';

                        // Get the list of folders
                        $subfolders = scandir($folderPath);

                        // Exclude "." and ".." from the list
                        $subfolders = array_diff($subfolders, array('.', '..'));
                        $subfolders = customSort($subfolders);

                        // Display the list of subfolders
                        $i = 0;
                        foreach ($subfolders as $subfolder) {
                            if (is_dir($folderPath . $subfolder)) {
                                // Encode the subfolder name for JavaScript use
                                $encodedSubfolder = htmlspecialchars(json_encode($subfolder), ENT_QUOTES, 'UTF-8');
                                if ($i == 0) {
                                    echo "<span data-filter='.". $subfolder ."' class='active'>". $subfolder ."</span>";
                                    // echo '<button class="tablinks" id="defaultOpen" onclick="openCity(event, ' .  . ')">' . $subfolder . '</button>';
                                } else {
                                    echo "<span data-filter='.". $subfolder ."'>". $subfolder ."</span>";

                                    // echo '<button class="tablinks" onclick="openCity(event, ' . $encodedSubfolder . ')">' . $subfolder . '</button>';
                                }
                                $i++;
                                // Create tab button with appropriate attributes
                            }
                        }
                        ?>
                       
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery twsty inf-lit full-width">
                    <!-- gallery item -->
                    
                    <hr><div class="col-12 d-flex justify-content-center">ABC</div><hr>

                    <div class="items theaters three-column mt-90">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Fantastic interior</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items theaters three-column mt-90">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Fantastic interior</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior three-column mt-90">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Choose Your Dream</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items residential three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Luxury Villa</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior theaters three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Creative Spaces</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Choose Your Dream</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Fantastic interior</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Choose Your Dream</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items residential three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Luxury Villa</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior theaters three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Creative Spaces</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items residential three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Luxury Villa</h5>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items interior theaters three-column mt-50">
                        <div class="item-img bg-img" data-background="Images/ImageCollection/PRODUCT/CERAMICTILES01.JPG">
                            <a href="project-details2.html">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Creative Spaces</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Start Footer ==================== -->
    <div id="footer"></div>
    <!-- ==================== End Footer ==================== -->

    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

    <!-- Map -->
    <script src="js/map.js"></script>
    <script>
        $(function(){
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
    <!-- google map api -->
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&callback=initMap">
    </script>
</body>

</html>
