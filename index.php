<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nathanael Shermett | Web &amp; Software Guru</title>

	<meta name="author" content="Nathanael Shermett">
	<meta name="description" content="Nathanael Shermett is a professional web and software developer.">
	<meta name="keywords"
		  content="Nathanael Shermett, Shermett, Soldier, Web Developer, Software Developer, Pianist, PHP, C#, C++, .NET, Symfony, CodeIgniter, MySQL, HTML5, CSS3, JavaScript, jQuery, Christian">
	<meta name="revisit-after" content="3 days">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fontawesome.css">

	<!-- Schema.org Stuff -->
	<script type='application/ld+json'>
		{
			"@type" :         "Person",
			"givenName" :     "Nathanael",
			"familyName" :    "Shermett",
			"alumniOf" :      {
				"@type" :    "CollegeOrUniversity",
				"name" :     "Arizona State University"
			},
			"birthPlace" :    "Tucson, Arizona",
			"description" :   "Nathanael Shermett is a full-Stack web application and software developer, a pianist, and a veteran. He has 15+ years of experience in the software industry. He is passionate about technology (especially artificial intelligence), learning, and developing innovative ideas.",
			"hasCredential" : [
				{
					"@type" :              "EducationalOccupationalCredential",
					"name" :               "B.S. Criminology and Criminal Justice",
					"credentialCategory" : ["Degree", "Bachelor of Science"],
					"recognizedBy" :       {
						"@type" :    "CollegeOrUniversity",
						"name" :     "Arizona State University"
					}
				},
				{
					"@type" :              "EducationalOccupationalCredential",
					"name" :               "B.A. Psychology",
					"credentialCategory" : ["Degree", "Bachelor of Arts"],
					"recognizedBy" :       {
						"@type" :    "CollegeOrUniversity",
						"name" :     "Arizona State University"
					}
				},
				{
					"@type" :              "EducationalOccupationalCredential",
					"name" :               "B.A. Spanish (linguistics)",
					"credentialCategory" : ["Degree", "Bachelor of Arts"],
					"recognizedBy" :       {
						"@type" :    "CollegeOrUniversity",
						"name" :     "Arizona State University"
					}
				}
			],
			"gender" :        "http://schema.org/Male",
			"height" :        "71 inches",
			"knowsAbout" :    [
				"Software Development",
				"Web Development",
				"Mobile App Development",
				"Database Design",
				"Graphic Design",
				"PHP",
				"Symfony",
				"CodeIgniter",
				"C#",
				"C++",
				"JavaScript",
				"Perl",
				"Python",
				"MySQL",
				"T-SQL",
				"SQL",
				"HTML5",
				"SCSS",
				"CSS",
				"XAMPP",
				"Git",
				"Doctrine",
				"ASP.NET",
				".NET Framework",
				"Microsoft Azure",
				"Excel",
				"Object-Oriented Programming",
				"Criminology",
				"Psychology",
				"Spanish",
				"Military",
				"Writing",
				"Christianity"
			],
			"knowsLanguage" : ["en", "es"],
			"image" :         "http://nathanael.shermett.me/images/Nathanael.png",
			"jobTitle" :      ["Software Developer", "Web Developer", "Operations Manager"],
			"memberOf" :      ["United States Army", "New York University"],
			"url" :           "http://nathanael.shermett.me",
			"sameAs" :        [
				"https://www.linkedin.com/in/nathanaelshermett",
				"https://github.com/Nathanael-Shermett",
				"https://twitter.com/NathanaelTweets",
				"https://www.facebook.com/nathanael.shermett",
				"https://www.instagram.com/nathanael.shermett"
			]
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
	<span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><a target="_blank"
																			href="https://www.linkedin.com/in/NathanaelShermett"
																			title="LinkedIn"
																			class="fa fa-linkedin fa-stack-1x"></a></span>
	<span class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><a target="_blank"
																			href="https://github.com/Nathanael-Shermett"
																			title="GitHub"
																			class="fa fa-github fa-stack-1x"></a></span>
	<span style="display:none;" class="fa-stack fa-lg"><i class="fa fa-square fa-stack-2x"></i><a id="email_icon"
																								  target="_blank"
																								  href="" title="Email"
																								  class="fa fa-envelope fa-stack-1x"></a></span>
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