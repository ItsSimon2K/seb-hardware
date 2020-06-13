<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Emily" />
		<meta name="description" content="hardware_website" />
		<meta name="keywords" content="equipments,hardware" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<title>SEB Hardware - Enhancements</title>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://fonts.googleapis.com/css?family=Open+Sans:400,700"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://fonts.googleapis.com/css?family=Roboto+Slab:700"
		/>
		<script src="scripts/script.js"></script>
		<script src="scripts/enhancement.js"></script>
	</head>

	<body>
		<?php include "include/nav.php"; ?>
		<article class="enhancements container">
			<h1>Enhancements</h1>
			<section>
				<h2>Responsive Design</h2>
				<p>Implemented in all pages</p>
				<p>
					Responsive design means being able to display a web page across all
					screen sizes without sacrificing user experience (UX). Our team has
					taken care to make sure the website displays correctly from mobile
					phones to desktops. This is done by performing a mobile-first approach
					when coding our styles (<var>style.css</var>).
				</p>
				<p>
					In brief, the <var>style.css</var> file has 4 media queries for
					different screen widths: >580px, >770px, >990px and >1200px. According
					to our mobile-first approach, as the screen width becomes larger, the
					different media queries take precedence of a property's previous
					declaration and essentially overrides it for that specific screen
					size. The larger the screen size, the larger media query takes
					precedence.
				</p>
				<p>
					One component of this design is the <var>container</var> class. This
					class controls the width of the applied element according to different
					screen sizes. For example, in mobile screens, this will stretch near
					the edge of the screen to fit more content, while in large screens,
					this container will limit the width so it doesn't stretch the entire
					screen. This is especially helpful for long articles so that the eye
					doesn't have to scan large widths of text, hence reduce eyestrains.
				</p>
			</section>
			<section>
				<h2>CSS Slideshow</h2>
				<p>Implemented in <a href="index.php">home page</a></p>
				<p>
					The slideshow (also known as carousel) only uses CSS to transition
					between images. The images uses CSS <var>animation</var> to play a
					looping animation of it fading in and out. However, to control which
					image fades in first, the <var>animation-delay</var> property is used
					along with the <var>:nth-child</var> selector to set different delays
					for different images, which depends on its children index.
				</p>
				<p>
					Since this doesn't implement buttons to control its play and pause,
					it's a helpful trade-off to preserve accessibility. For example, the
					absence of slideshow controls alleviates unnecessary focus for tab
					navigation users or screen readers which does not need the controls at
					all.
				</p>
			</section>
			<section>
				<h2>Navbar List Animation</h2>
				<p>Implemented in all pages</p>
				<p>
					The website's navbar has a mini animation on hover to that users know
					it's a clickable link. It uses the <var>::after</var> pseudo-element
					to position at the top of the links and expand on hover using the
					<var>transition</var> property so it smoothly animates.
				</p>
				<p>
					The pseudo-element animates the <var>transform</var> property instead
					of the <var>width</var> property for performance optimization. This is
					true according to
					<a href="https://csstriggers.com/" target="_blank">
						https://csstriggers.com
					</a>
					where <var>transform</var> doesn't trigger layout recalculations nor
					repaints in most browser engines, while <var>width</var> does.
				</p>
			</section>
			<section>
				<h2>Google Map Embed iframe</h2>
				<p>Implemented in <a href="index.php">home page</a></p>
				<p>
					The embeded Google Map iframe is used to conveniently show the
					office's location so customers can easily locate it. With this, we
					leverage a powerful map service to accurately pinpoint a location. The
					iframe link is acquired from
					<a href="https://www.google.com/maps" target="_blank"
						>https://www.google.com/maps</a
					>
					which is required to present the image on our web page.
				</p>
			</section>
		</article>
		<?php include "include/footer.php" ?>
	</body>
</html>
