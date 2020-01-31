<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nathanael Shermett | Web &amp; Software Guru</title>

		<meta name="author" content="Nathanael Shermett">
		<meta name="description" content="Nathanael Shermett is a professional web and software developer.">
		<meta name="keywords" content="Nathanael Shermett, Shermett, Soldier, Web Developer, Software Developer, Pianist, PHP, C#, C++, .NET, Symfony, CodeIgniter, MySQL, HTML5, CSS3, JavaScript, jQuery, Christian">
		<meta name="revisit-after" content="3 days">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/fontawesome.css">

		<!-- Schema.org Stuff -->
		<script type='application/ld+json'>
			{
				"@context": "http://www.schema.org",
				"@type": "person",
				"name": "Nathanael Shermett",
				"birthPlace": "Tucson, Arizona",
				"jobTitle": "Software Developer",
				"jobTitle": "Web Developer",
				"height": "5 feet 11 inches",
				"memberOf": "United States Army",
				"image": "images/Nathanael.png",
				"url": "http://nathanael.shermett.me"
			}
		</script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				// Hide the cover after 1000ms (gives the background a chance to load).
				setTimeout(function()
				{
					$('#cover').fadeOut(1000);
				}, 2000);

				// Transform the email links into hyperlinks.
				var reversed_user = $('.email').attr('data-user').split('').reverse().join('');
				var reversed_website = $('.email').attr('data-website').split('').reverse().join('');
				var email = reversed_user + '@' + reversed_website;
				$('#email_link').attr('href', 'mailto:' + email);
				$('#email_icon').attr('href', 'mailto:' + email).parent().show();
			});
		</script>
	</head>
	<body>

		<h1>Nathanael Shermett</h1>

		<!-- For SEO and other web crawlers. -->
		<div id="bio">
			<img src="images/Nathanael.png" alt="Nathanael Shermett Professional Portrait">
			<p>
				Nathanael Shermett is a professional web and software developer.
			</p>
		</div>

		<ul id="tagline">
			<li>
				Developer
			</li>
			<li>
				Pianist
			</li>
			<li>
				Veteran
			</li>
		</ul>

		<div id="social">
			<span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><a target="_blank" href="https://www.linkedin.com/in/nathanaelshermett" class="fa fa-linkedin fa-stack-1x"></a></span>
			<span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><a target="_blank" href="https://github.com/NathanaelGit" class="fa fa-github fa-stack-1x"></a></span>
			<span style="display:none;" class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><a id="email_icon" target="_blank" href="" class="fa fa-envelope fa-stack-1x"></a></span>
		</div>

		<div id="contact">
			<span class="text"></span>
			<a href="#" id="email_link" target="_blank" class="email" data-user="leanahtan" data-website="em.ttemrehs"></a>
		</div>

		<!-- Cool effects. -->
		<div id="cover">
			<img src="images/ajax.gif" alt="">
		</div>

	</body>
</html>