<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Product finder  </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
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
				<!-- if logo is image enable this   
			<a class="navbar-brand" href="#  index.php">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					
				</button>
	  
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-lg-5">
						<li class="nav-item @@home__active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item @@about__active">
							<a class="nav-link" href="about.html">About</a>
						</li>
						
						<li class="nav-item active">
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



<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
    <div class="about-inner contact">
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side propClone"><a href="  index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active editContent">
                    Contact</li>
            </ul>
            </div>
</div>
</div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">
    <div class="map-content-9 mb-5 ">
        <form  method="post">
            <div class="twice-two">
                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name" required="">
                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email" required="">
                <input type="text" class="form-control" name="subject1" id="w3lSubject" placeholder="Subject" required="">
            </div>
            <textarea name="message" class="form-control" id="message" placeholder="Message" required=""></textarea>

            <div class="text-right">
                <button type="submit" name="btn_submit" class="btn btn-contact" >Send Message</button>
            </div>
        </form>
    </div>
</section>
	<section class="w3l-footer-29-main">
	<div class="footer-29 py-5 ">
	  <div class="container">
		<div class="grid-col-4 footer-top-29">
			<div class="footer-list-29 footer-1">
				<h2 class="footer-title-29">Quick Contact with Us</h2>
				<ul>
					<li><p><span class="fa fa-map-marker"></span>Dhule,Maharashtra India
                                <br> near bus stand dahiwel-424304
                                <br> pandy Appartment, India</p></li>
					<li><a class="nav-link phone" href="tel:+(91)-961-163-1530"><span class="fa fa-phone"></span> (+91) 96116 31530</li>
					<li><a href="mailto: ashishranjanpandey2003@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span> Exterior-ashishranjanpandey2003@gmail.com</a></li>
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
					<li><a href="">Linkdin	</a></li>
					<li><a href="https://m.facebook.com/profile.php?id=100010682207675">Facebook</a></li>
					<li><a href="https://www.instagram.com/ashishranjanpandey2003/">Instagram</a></li>
					<li><a href="##url">Twitter</a></li>
					
				</ul>
			</div>
		</div>
		<div class=" bottom-copies text-center">
			<p class="copy-footer-29">© 2023 Product finder  . All rights reserved | Designed by <a href="https://instagram.com/96k_vedant_pandy?igshid=ZDdkNTZiNTM=">Vedant</a></p>
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


</body>

</html>

<!-- //<
// include "config.php";

// if(isset($_POST["btn_submit"]))
// {
//     extract($_POST);


//     $insert = mysqli_query($con, "INSERT INTO tbl_contact(name,email,subject,message) VALUES('$name','$email','$subject1','$message')") or die(mysqli_error($con));


//     if($insert){
//         echo "window.alert('Data inserted successfully')";
//     }
//     else{
//         echo "window.alert('Data error')";
//     }

// }
// -->
