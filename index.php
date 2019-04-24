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
		<div class="tv">
			<div class="screen mute" id="tv"></div>
		</div>

		<div class="slide"></div>
		<div id="txt">
			<h1 class="glitch top" data-text="GLITCH" id="mh">Mike Hendriks</h1>
			<h1 class="glitch bottom" data-text="GLITCH" id="mh">Mike Hendriks</h1>
			<h2 class="glitch top">Full stack web developer</h2>
			<h2 class="glitch bottom">Full stack web developer</h2>
		</div>
		<div class='icon-scroll'></div>
	</header>
	<main>
		<div class="background">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<!-- <div class="dashed-block right rellax" data-rellax-speed="1"></div> -->

		<div class="container-fluid" id="about_me">
				<div class="row">
					<div class="col s12">
						<h2 data-title="About me">About me</h2>
					</div>
				</div>
				<div class="container">
					<div class="row">

						<div class="col m4 offset-m2 text rellax" data-rellax-speed=".3">
							<h3 class="line_right">Hello</h3>
							<p class="align_right">
								I am freelance web developer based in Eindhoven, the Netherlands. I love creating digital experiences enjoyable for everyone.
								With 4 years of experience and a degree in Media Development, I've had the pleasure of working with a wide variety of businesses, startups and individuals to create beautiful and easy to use websites and applications.
								<br><br>
								Currently I am studying a bachelor course in ICT & Media at the Fontys University of Applied Sciences.
							</p>
						</div>
						<div class="col m4 image rellax hide-on-small-only" data-rellax-speed="-.5">
							<img src="inc/img/me2.jpg" alt="Mike Hendriks" class="img-responsive z-depth-5">
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="container-fluid" id="cases">

			<div class="container">
				<div class="row">

					<div class="col s12">
						<h2 data-title="Portfolio">Portfolio</h2>
					</div>
					<div class="col s12 case" id="case1">
						<div class="img_container">

							<div class="inner_container">
								<div class="on_load"></div>

								<img src="inc/img/mymovielist.jpg" class="hidden">

							</div>

						</div>
						<div class="content_container rellax" data-rellax-speed="-.6">
							<div class="on_load"></div>
							<div class="content hidden">
								<h3>MyMovieList</h3>
								<span>A project I started in my spare time. With this web application you can keep track of the movies and tv shows you want to watch.</span>
								<span>Simply create an account using your Google account and start tracking!</span>
								<br>
								<br>
								<span>Go to <a href="http://mymovielist.nl" target="_blank">MyMovielist.nl</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact -->
		<div class="container_fluid" id="contact">
			<div class="container">
				<div class="row no_margin_bottom">
					<div class="col s12">
						<h2>Contact</h2>
					</div>
					<div class="col m6">
						<h3>Let's get in touch</h3>
						<p>Feel free to contact me if you have any questions, or would like to chat about a project.</p>

						<div class="get_in_touch">
							<div>
								<i class="material-icons">mail_outline</i>
								<span><a href="mailto:info@mikehendriks.nl">info@mikehendriks.nl</a></span>
							</div>
							<div>
								<i class="material-icons">smartphone</i>
								<span><a href="tel:+31625398674">+31 6 25398674</a></span>
							<div>
							</div>
								<i class="material-icons">location_on</i>
								<span>Eindhoven, The Netherlands</span>
							</div>
						</div>


					</div>
					<div class="col m6">
						<div class="contact_form z-depth-4">
							<form id="contact-form" name="form" method="post" action="mailer.php/send_contact_form">
								<div class="row">
									<div class="col s12">
										<h3>Say something</h3>
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
