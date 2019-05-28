<!DOCTYPE html>
<html lang="nl">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-59300751-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-59300751-1');
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="public/css/style.min.css">
	<title>Mike Hendriks</title>
</head>
<body>
	<div class="burger_menu">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<nav>
		<ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#about_me">About me</a></li>
			<li><a href="#cases">Portfolio</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
	<header id="home">
		<!-- <div class="background light">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div> -->

		<div class="tv">
			<div class="screen mute" id="tv"></div>
		</div>

		<div class="slide"></div>
		<div id="txt">
			<h1 class="glitch top" data-text="GLITCH" id="mh">Mike Hendriks</h1>
			<h1 class="glitch bottom" data-text="GLITCH" id="mh">Mike Hendriks</h1>
			<h2 class="glitch top">Web developer</h2>
			<h2 class="glitch bottom">Web developer</h2>
		</div>
		<div class='icon-scroll'></div>
	</header>
	<main>
		<!-- <div class="background dark">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div> -->
		<!-- <div class="dotted-block right rellax" data-rellax-speed="1"></div> -->

		<div class="container-fluid" id="about_me">
				<div class="row">
					<div class="col s12">
						<h2 data-title="About me">About me</h2>
					</div>
				</div>
				<div class="container">
					<div class="row">

						<div class="col m4 offset-m2 text rellax" data-rellax-speed=".3">
							<h3 class="line_right hide-on-small-only">Hello</h3>
							<p class="align_right">
								I'm Mike, a freelance web developer from The Netherlands. Over the last few years I've had the pleasure of working for a wide variety of businesses, startups and individuals to create beautiful and easy to use websites and applications.
								<br><br>
								Currently I am studying ICT & MEDIA DESIGN at the Fontys University of Applied Sciences.
							</p>
						</div>
						<div class="col m4 image rellax" data-rellax-speed="-.5">
							<img src="inc/img/profile_picture.jpg" alt="Mike Hendriks" class="img-responsive z-depth-5">
							<!-- <div class="dotted-block"></div> -->
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="container-fluid" id="cases">

			
				<div class="row">

					<div class="col s12">
						<h2 data-title="Portfolio">Portfolio</h2>
					</div>
					<div class="col s12 case" id="case1">
						<div class="img_container">

							<div class="inner_container">
								<div class="on_load"></div>

								<img src="inc/img/mymovielist.jpg" class="hide_content">

							</div>

						</div>
						<div class="content_container rellax" data-rellax-speed="-.6">
							<div class="on_load"></div>
							<div class="content hide_content">
								<h3>MyMovieList</h3>
								<span>A project I started in my spare time. With this web application you can keep track of the movies and tv shows you want to watch.</span>
								<br><br>
								<span>Simply create an account using your Google account and start tracking what movies and tv-shows you want to see!</span>
								<br><br>
								<span>Go to <a href="http://mymovielist.nl" target="_blank">MyMovielist.nl</a></span>
							</div>
						</div>
					</div>

					<div class="col s12 case right" id="case2">
						<div class="img_container">

							<div class="inner_container">
								<div class="on_load"></div>

								<img src="inc/img/lameco_dashboard.jpg" class="hide_content">

							</div>

						</div>
						<div class="content_container rellax" data-rellax-speed="-.6">
							<div class="on_load"></div>
							<div class="content hide_content">
								<h3>Lam&#233;co Dashboard</h3>
								<span>With a project group called "De Sigaar", we had the pleasure of working on a project for Lam&#233;co, a web-development company located in Eindhoven.</span>
								<br>
								<br>
								<span> They requested us to create a online platform to manage dashboards for their customers.</span>
								<br>
								<br>
								Username: demo
								<br>
								Password: demo
								<br>
								<span>Take a look yourself <a href="https://lameco-dashboard.herokuapp.com/" target="_blank">Lam&#233;co Dashboard</a></span>
								<br>
								<br>
								<span>* Initial load time could vary because the server has to boot up on first load</span>
							</div>
						</div>
					</div>


				</div>
		
		</div>

		<!-- Contact -->
		<div class="container_fluid" id="contact">
			<div class="container">
				<div class="row no_margin_bottom">
					<!-- <div class="col s12">
						<h2>Contact</h2>
					</div> -->
					<div class="col m5 get_in_touch">
						<h3>Contact</h3>
						<p>Please feel free to contact me if you have any questions, or would like to chat about a project or collaboration.</p>

						<div class="content">
							<div>
								<i class="material-icons">mail_outline</i>
								<span><a href="mailto:info@mikehendriks.nl">info@mikehendriks.nl</a></span>
							</div>
							<div>
								<i class="material-icons">smartphone</i>
								<span><a href="tel:+31625398674">+31 6 25398674</a></span>
							</div>
							<div>
								<i class="material-icons">location_on</i>
								<span>Venlo, The Netherlands</span>
							</div>
							<div class="spacer"></div>
							<div class="socials">
								<a  href="https://github.com/mike-hendriks" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg></a>
								<a href="https://www.instagram.com/mike.hendriks_/" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
								<a href="https://www.linkedin.com/in/mike-hendriks-4aa47010b/" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg></a>
							</div>

							<!-- <h4>Email</h4>
							<span><a href="mailto:info@mikehendriks.nl">info@mikehendriks.nl</a></span>
							<h4>Phone</h4>
							<span><a href="tel:+31625398674">+31 6 25398674</a></span>
							<h4>Location</h4>
							<span>Venlo, The Netherlands</span> -->
						</div>


					</div>
					<div class="col m6 offset-m1">
						<div class="contact_form z-depth-4">
							<form id="contact-form" name="form" method="post" action="mailer.php/send_contact_form">
								<div class="row">
									<div class="col s12">
										<h3>LET'S GET IN TOUCH</h3>
									</div>
									<div class="input-field col s12">
										<input id="name" type="text" name="name" class="validate" autocomplete="given-name" required>
										<label for="name">Name</label>
									</div>
									<div class="input-field col s12">
										<input id="email" type="email" name="email" class="validate" autocomplete="email" required>
										<label for="email">Email</label>
									</div>
									<div class="input-field col s12">
										<input id="subject" name="subject" type="text" class="validate" required>
										<label for="subject">Subject</label>
									</div>
									<div class="input-field col s12">
										<textarea name="message" rows="8" cols="80" class="materialize-textarea" required></textarea>
										<label for="message">Message</label>
									</div>
									<div class="input-field col s12 center">
										<button type="submit" name="submit" class="btn btn-main-color waves-effect waves-light">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="container footer-content">
			<div class="row">
				<div class="col s6">
					&copy; <?php date_default_timezone_set('Europe/Paris');
echo date('Y');?> <span class="bold">Mike Hendriks</span>
				</div>
			</div>
		</div>


		<!-- JQuery and tweenmax -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
		<!-- MaterializeCSS -->
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<!-- Custom JS -->
		<script type="text/javascript" src="inc/js/main.js"></script>
		<script type="text/javascript" src="inc/js/video_background.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.3.0/rellax.min.js"></script>

	</footer>
</body>
</html>
