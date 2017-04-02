<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div class="container">
			<header>
				<div  class="nav-bar" class="row">
					<div class="col-3">
						<div class="icon-bar-container" onclick="openNav()">
							<div class="icon-bar"></div>
							<div class="icon-bar"></div>
							<div class="icon-bar"></div>
						</div>
					</div>

					<h2 id="logo">Style Mee Young</h2>
				</div>

				<div id="myNav" class="overlay">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<div class="overlay-content">
						<a href="#">Home</a>
						<a href="#">About</a>
						<div class="dropdown">
						<button onclick="dropdown()" class="dropbtn">Collections<i class="fa fa-caret-down" aria-hidden="true"></i></button>
							<div id="myDropdown" class="dropdown-content">
								<a href="#">September 2016</a>
								<a href="#">October 2016</a>
								<a href="#">November 2016</a>
								<a href="#">December 2016</a>
							</div>
						</div>
						<a href="#">Contact</a>
						<a href="#">FAQ</a>
					</div>
				</div>
			</header>

			<main>
				<div class="main-container">
					<div class="hook"></div>
					<div class="instagram-container">
						<p class="instagram">Follow me on Instagram</p>
						<a href="https://www.instagram.com/stylemeeyoung/"><i class="fa fa-instagram"></i></a>
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
	</script>
	</body>
</html>