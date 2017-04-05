<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="scrolling-nav.css">
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div class="container">
			<header>
				<div  class="nav-bar" class="row">
					<div class="col-3">
						<div class="icon-bar-container" onclick="openNav()">
							<div class="icon-bar bar1"></div>
							<div class="icon-bar bar2"></div>
						</div>
					</div>

					<!-- <h2 id="logo">Style Mee Young</h2> -->
				</div>

				<div id="myNav" class="overlay">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<div class="overlay-content">
						<a href="#home" class="page-scroll" onclick="closeNav()">Home</a>
						<a href="#about" class="page-scroll" onclick="closeNav()">About</a>
						<div class="dropdown">
						<button onclick="dropdown()" class="dropbtn">Collections<i class="fa fa-caret-down" aria-hidden="true"></i></button>
							<div id="myDropdown" class="dropdown-content">
								<a href="#"  onclick="closeNav()">September 2016</a>
								<a href="#" onclick="closeNav()">October 2016</a>
								<a href="#" onclick="closeNav()">November 2016</a>
								<a href="#" onclick="closeNav()">December 2016</a>
							</div>
						</div>
						<a href="#" class="page-scroll" onclick="closeNav()">Contact</a>
						<a href="#" class="page-scroll" onclick="closeNav()">FAQ</a>
					</div>
				</div>
			</header>

			<main>
				<div class="main-container">
					<div class="hook"></div>
					<div class="instagram-container">
						<p class="instagram">style<span id="mee">me</span>young</p>
						<div class="row">
							<div class="col-6">
								<a href="https://www.instagram.com/stylemeeyoung/"><i class="fa fa-instagram"></i></a>
							</div>
							<div class="col-6">
								<a href="#"><i class="fa fa-facebook-square"></i></a>
							</div>
						</div>
					</div>
					<div class="about-container" id="about">
						<h2 class="about-me">About</h2>
						<p class="about-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>	
					</div>
					<div class="image"></div>
					<div class="image2"></div>
					<div class="image3"></div>
					<div class="image4"></div>
				</div>
			</main>

			<footer>
			</footer>
		</div>
	<script type="text/javascript" src="jquery.easing.min.js"></script>
	<script>
		function openNav() {
			document.getElementById("myNav").style.height = "100%";
		}

		function closeNav() {
			document.getElementById("myNav").style.height = "0%";
		}

		function dropdown() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		window.onclick = function(event) {
		  if (!event.target.matches(".dropbtn")) {

		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}
		$(function () {
			$(document).on('click', 'a.page-scroll', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});
		});

	
	</script>
	</body>
</html>