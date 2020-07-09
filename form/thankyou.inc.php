<!DOCTYPE html>
<html lang="en">
<!-- START HEAD -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sungrown Bakery</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<!-- STYLESHEET -->
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<!-- FONTS -->
		<link rel="stylesheet" href="https://use.typekit.net/uhd6akk.css">
		<link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
		 <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
		 <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<!-- END HEAD -->
	<body class="site">
		<!-- START HEADER -->
		<header class ="header">
			<a href="index.html"><img class="logo_title" src="images/sungrown_text_logo.png" alt="logo"></a>
			<div class="burger">
				<span></span>
			</div>
			<!-- SOCIAL MEDIA LINKS DESKTOP -->
			<div class="social-media-desktop">
				<ul class="social-media-desktop-links">
					<li><a href="https://www.instagram.com/sungrownbakery" target="_blank"><img src="images/instagram_icon.png" alt="instagram_icon"></a></li>
					<li><a href="https://twitter.com/sungrownbakery" target="_blank"><img src="images/twitter_icon.png" alt="twitter_icon"></a></li>
					<li><a href="https://www.facebook.com/SungrownBakery" target="_blank"><img src="images/facebook_icon.png" alt="facebook_icon"></a></li>
				</ul>
			</div>
			<!-- NAVIGATION FOR MOBILE -->
			<nav class="mobile-menu">
        <!-- Links -->
        <ul>
					<li class="mobile-links"><span class="accordion"><a href="index.html">Home</a></span>
          <li class="mobile-links page-link"><span class="accordion"><a href="#">About</a></span>
						<ul class="panel">
							<li><a href="mission-statement.html">Mission Statement</a></li>
							<li><a href="clean-ingredients.html">Clean Ingredients</a></li>
							<li><a href="faq.html">FAQ</a></li>
						</ul>
					</li>
					<li class="mobile-links page-link"><span class="accordion"><a href="#">Our Goods</a></span>
						<ul class="panel">
							<li><a href="menu.html">Menu</a></li>
							<li><a href="events.html">Events</a></li>
						</ul>
					</li>
					<li class="mobile-links"><span class="accordion"><a href="cbd.html">CBD</a></span>
					</li>
					<li class="mobile-links"><span class="accordion"><a href="contact.html">Contact</a></span>
					</li>
        </ul>
      </nav>
			<!-- NAVIGATION FOR DESKTOP-->
			<nav class="nav">
			 <ul class="navigation">
				<li><a href="/">Home</a></li>
			 <li><a href="javascript:void(0);">About <i class="fa fa-angle-down" aria-hidden="true"></i></a>
				   <ul>
						<li><a href="mission-statement.html">Mission Statement</a></li>
						<li><a href="clean-ingredients.html">Clean Ingredients</a></li>
						<li><a href="faq.html">FAQ</a></li>
				   </ul>
				  </li>
				  <li><a href="javascript:void(0);">Our Goods <i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="events.html">Events</a></li>
						</ul>
					</li>
				<li><a href="cbd.html">CBD</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
        <div class="overlay"></div>
		</header>
		<!-- END HEADER -->
		<!-- START MAIN -->
		<main class="site-content">
			<!-- START HERO-BANNER -->
			<div class="hero-container">
				<h1 class="page">Contact Us</h1>
				<div class="hero-img sunflower">
					<img src="images/sunflower.png" alt="brownies">
				</div>
			</div>
			<!-- END HERO-BANNER -->
				<!-- START ARTICLE -->
				<article class="page-content">
          <h2>Larger Flexbox Form</h2>
          <section class="section--contact">
            <div class="contact_wrapper--text">
              <h3>Can’t find what you’re looking for on our website? Send us a message!</h3>
	              <p>We’re here to answer all the questions we can about our bakery, CBD, veganism, and more. </p>
	              <p>If you just want to chat, that’s cool too. We love talking to people. Courtney never stops talking in fact (but don’t tell her I said that). </p>
	              <p>This is also a rad place to leave comments, good or bad, and if you have any concerns please reach out.</p>
	              <p>We’ll answer messages as soon as humanly possible. Have a sunny day!</p>
            </div>
						<div class="contact_wrapper--form">
							<h4>Thank you for your message! </h4>
							<form id="test_form" class="form" name="form" method="" action="form.php" onsubmit="return validateForm(this)">
									<label for="first-name">First Name: </label>
									<input type="text" class="field field1" placeholder="First Name" name="first-name" id="first-name">

									<label for="last-name">Last Name: </label>
									<input type="text" class="field field2" placeholder="Last Name" name="last-name" id="last-name">

									<label for="e-mail">E-Mail Address: </label>
									<input type="text" class="field field3" placeholder="E-mail" name="e-mail" id="e-mail">

									<label for="e-mail">Subject: </label>
									<input type="text" class="field field4" placeholder="Subject" name="subject" id="subject">

									<label for="lottery">Message:</label>
									<textarea class="textarea" rows="5" cols="20" placeholder="Type your message here!" name="lottery" id="lottery"></textarea>

									<button class="button" type="submit">
											Send Message
									</button>
							</form>
						</div>
</section>
				</article>
				<!-- END ARTICLE -->
		</main>
		<!-- END MAIN -->
		<!-- START FOOTER -->
		<footer class="footer">
			<ul class="footer-links">
				<li><a href="https://www.instagram.com/sungrownbakery" target="_blank"><img src="images/instagram_icon.png" alt="instagram_icon"></a></li>
				<li><a href="https://twitter.com/sungrownbakery" target="_blank"><img src="images/twitter_icon.png" alt="twitter_icon"></a></li>
				<li><a href="https://www.facebook.com/SungrownBakery" target="_blank"><img src="images/facebook_icon.png" alt="facebook_icon"></a></li>
			</ul>
		</footer>
		<!-- END FOOTER -->
		<!--SCRIPTS -->
		<script src="js/mixitup.min.js"></script>
		<script src="js/smooth_scroll.js"></script>
		<script src="js/navigation.js"></script>
		<script src="js/mixitup.js"></script>
		<script src="js/faq_accordion.js"></script>
	</body>
</html>
