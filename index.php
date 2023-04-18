<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Product finder  </title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="assets/css/cards.css">
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  
</head>

<body id="home">
  <section class=" w3l-header-4 header-sticky">
    <!--header-->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
          <h1><a class="navbar-brand" href="  index.php">
              <span class="fa fa-map-signs"></span> Product finder  
            </a></h1>

          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>

          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-lg-5">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @@about__active">
                <a class="nav-link" href="about.html">About</a>
              </li>

              <li class="nav-item @@contact__active">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>

            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
              <label class="theme-selector">
                <input type="checkbox" id="themeToggle">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </label>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!--/header-->
  </section>
  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <!--bootstrap working-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--bootstrap working//-->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  <!--theme switcher dark and light mode script-->
  <script>
    const bodyElement = document.querySelector('body');
    const themeToggle = document.querySelector('#themeToggle');
    const darkModeMql = window.matchMedia('(prefers-color-scheme: dark)');

    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : userPreference(darkModeMql);

    if (currentTheme) {
      bodyElement.classList.add(currentTheme);

      if (currentTheme === 'dark') {
        themeToggle.checked = true;
      }
    }

    function userPreference(e) {
      if (e.matches) {
        bodyElement.classList.add("dark");
        return "dark"
      } else {
        bodyElement.classList.remove("dark");
        return ""
      }
    }

    darkModeMql.addListener(userPreference);

    function themeSwitcher(e) {
      if (e.target.checked) {
        bodyElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
      } else {
        bodyElement.classList.remove('dark');
        localStorage.setItem('theme', '');
      }
    }

    themeToggle.addEventListener('change', themeSwitcher);
  </script>
  <!--theme switcher dark and light mode script//-->


  <section class="w3l-main-slider" id="home">
    <!-- main-slider -->
    <div class="companies20-content">

      <div class="owl-one owl-carousel owl-theme">
        <div class="item text-center">
          <li>
            <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg mr-auto">
                    <h5>Welcome
                      To Product Finder</h5>
                    <p>Amazon.com is a vast Internet-based enterprise that sells books, music, movies, housewares,
                      electronics, toys, and many other goods, either directly or as the middleman between other
                      retailers and Amazon.com's millions of customers</p>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="https://www.amazon.com/">Go To Amazon Web</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item text-center">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg mr-auto">
                    <h5>Welcome
                      To Product Finder</h5>
                    <p> Snapdeal is a social commerce   that undertakes retail distribution, enabling small retail
                      merchants to connect and sell their products effectively via social media channels.  Snapdeal Inc.
                    </p>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="https://www.snapdeal.com/">Go To  Snapdeal Web</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item text-center">
          <li>
            <div class="slider-info  banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg mr-auto">
                    <h5>Welcome
                      To Product Finder</h5>
                    <p>Flipkart Online Services Private Limited owns and operates e-commerce website. The Company
                      provides books, movies, music, games, consoles, televisions, mobiles, digital cameras, computers,
                      network components, software, peripherals, apparel, shoes, and kitchen appliances.</p>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="https://www.flipkart.com/">Go To Flipkart Web</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item text-center">
          <li>
            <div class="slider-info  banner-view banner-top21 bg bg2" data-selector=".bg.bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg mr-auto">
                    <h5>Welcome
                      To Product Finder</h5>
                    <p>1mg is a digital healthcare platform based in India that offers a wide range of online services related to medicine, health and wellness. With a focus on making healthcare more accessible and affordable, 1mg allows users to consult with qualified doctors, order prescription and over-the-counter medications, and book lab tests and health check-ups.</p>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="https://www.1mg.com/">Go To 1mg Web</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for -->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: false,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: true
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
    </script>

    <!-- serch bar and button -->
  </section>

  <section class="w3l-content-with-photo-4" id="about">
    <div class="content-with-photo4-block editContent">
      <div class="container">

        <div class="my-bio">
          <!-- <img src="assets/images/1.jpg" alt="product" class="img-responsive about-me"> -->
          <h3 class="mt-lg-4 mt-3">Guidelines for use Product Finder  </h3>
          <p class="para mb-3"><b>Welcome to our product finder  !</b><br> step 1-      Navigate to the website: Enter
            the product name in your web browser or search for it on a search engine.<br><br>
            step 2- Enter your product search query: Use the search bar on the website to enter the name or description
            of the product you're looking for.<br><br>

            step 3- Refine your search: If you have too many search results, you can refine your search by using filters
            such as price range, brand, product features, etc.<br><br>

            step 4- Browse search results: Once you've entered your search query and applied any filters, you can browse
            the search results to find products that match your needs.<br><br>

            step 5- Click on a product: Click on a product and you will be redirected on this product website to view
            its details, such as price, description, features, customer reviews, and availability.<br><br>
            step 6- Make a purchase: Once you've found a product you want to buy, you can click on the "buy" or "add to
            cart" button to proceed with the purchase. Some websites may redirect you to the retailer's website to
            complete the purchase.</p>

        </div>

      </div>
    </div>
    </div>

  </section>
<form method="post" class="d-flex w-90" style="margin: 50px; margin-bottom: 20px;">
    <input class="form-control me-2" id="search-bar" name="search_term" type="search" placeholder="Find Your Product!! on our platform."
      aria-label="Search">
  <button type = "submit" value = "click" name = "read" class="btn btn-outline-success" id="search-button" style="margin-left: 40%;">Search Product.</button>
  </form>

  <?php
if (array_key_exists('read', $_POST)) {

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_field_value = $_POST['search_term'];

$curl = curl_init();

// Set the API endpoint URL
$url = "http://127.0.0.1:5000/{$input_field_value}";

// Set the cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPGET => true,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  )
));

// Execute the cURL request and get the response
$response = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
  $error_msg = curl_error($curl);
  // Handle the error
}

// Close the cURL session
curl_close($curl);

  myFunction();
  }

}
function myFunction() {
  echo '
  <section id="for_margin" class="w3l-bottom-grids-6 py-5" id="services">
    <h6>Results</h6>
    <div class="row">';
    
  require 'services/database.php';
  $query = "SELECT * FROM searched ORDER BY RAND();";
  $query_run = mysqli_query($con, $query);
  $check_faculty = mysqli_num_rows($query_run) > 0;
  
  if ($check_faculty) {
    while ($row = mysqli_fetch_array($query_run)) {
      $url = $row['product_url'];
      $parts = explode('.', $url);
      $domain = implode('.', array_slice($parts, -2, 1));
      if(!in_array($domain, array("amazon", "flipkart", "snapdeal", "1mg", "nykaa", "etsy"))) {
        $domain = "-";
        continue; 
      }
      echo '
      <div class="column">
        <div class="card-equipment" style="cursor:pointer; height:18em;margin:8px;background-color:white" onclick="window.open(\''.$row['product_url'].'\', \'_blank\');">
        <h6 style="color:orange;">'.$domain.'</h6>
          <img style="height:10em;" id="blockImage" src="'.$row['img_url'].'" alt="">
          <h5>Price: &#x20b9;<a style="color:black" href="#feature" class="title-head">'.$row['price'].'</a></h5>
          <p>'.$row['title'].'</p>
          
        </div>
      </div>';
    }
  } else {
    echo "No Equipment Delivered";
  }
  
  echo '</div>
  </section>';
}
?>

  <section id="for_margin" class="w3l-bottom-grids-6 py-5" id="services">
<h6>Suggestions</h6>
    <div class="row">
      <?php
                require 'services/database.php';

                    $qurey = "SELECT * FROM products ORDER BY RAND();";
                    $qurey_run = mysqli_query($con, $qurey);
                    $check_faculty = mysqli_num_rows($qurey_run) > 0;
                    if ($check_faculty) {
                        while ($row = mysqli_fetch_array($qurey_run)) {
                          $url = $row['product_url'];
                          $parts = explode('.', $url);
                          $domain = implode('.', array_slice($parts, -2, 1));

                          if(!in_array($domain, array("amazon", "flipkart", "snapdeal", "1mg", "nykaa", "etsy"))) {
                            $domain = "-";
                            continue; 
                          }
                            ?>

      <div class="column">


        <div class="card-equipment" style="cursor:pointer; height:18em;margin:8px;background-color:white" onclick="window.open('<?php echo $row['product_url'];?>', '_blank');">
        <h6 style="color:orange;"><?php echo $domain;?></h6>
        <img style="height:10em;" id="blockImage" src="<?php echo $row['img_url'];?>" alt="">
          <h5>Price: &#x20b9;<a style="color:black" href="#feature" class="title-head">
              <?php echo $row['price'];?>
            </a></h5>
          <p>
            <?php echo $row['title'];?>
          </p>

          
        </div>
      </div>

      

      <?php
                        }
                    }
                    else{
                        echo "No Equipment Delivered";
                    }
            ?>

    </div>
  </section>

  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5 ">
      <div class="container">
        <div class="grid-col-4 footer-top-29">
          <div class="footer-list-29 footer-1">
            <h2 class="footer-title-29">Quick Contact with Us</h2>
            <ul>
              <li>
                <p><span class="fa fa-map-marker"></span>Dhule,Maharashtra India
                  ,near bus stand dahiwel-424304
                  <br> pandy Appartment, India
                </p>
              </li>
              <li><a class="nav-link phone" href="tel:+(91)-961-163-1530"><span class="fa fa-phone"></span> (+91) 96116
                  31530</li>
              <li><a href="mailto:ashishranjanpandey2003@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                  Exterior-ashishranjanpandey2003@gmail.com</a></li>
            </ul>

          </div>
          <div class="footer-list-29 footer-2">
            <ul>
              <h6 class="footer-title-29">Finding on popurlar webs</h6>
              <li><a href="https://www.Amazon.com/">Amazon</a></li>
              <li><a href="https://www.Flipkart.com/">Flipkart</a></li>
              <li><a href="https://www.snapdeal.com/"> Snapdeal</a></li>
              <li><a href="https://www.1mg.com/">1mg</a></li>

            </ul>
          </div>
     
          <div class="footer-list-29 footer-4">
            <ul>
              <h6 class="footer-title-29">Connect with Us</h6>
              <li><a href="">Linkdin </a></li>
              <li><a href="https://m.facebook.com/profile.php?id=100010682207675">Facebook</a></li>
              <li><a href="https://www.instagram.com/ashishranjanpandey2003/">Instagram</a></li>
              <li><a href="##url">Twitter</a></li>

            </ul>
          </div>
        </div>
        <div class=" bottom-copies text-center">
          <p class="copy-footer-29">© 2023 Product finder  . All rights reserved | Designed by <a
              href="https://instagram.com/96k_vedant_pandy?igshid=ZDdkNTZiNTM=">Vedant</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-chevron-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

</body>

</html>