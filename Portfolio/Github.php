<!DOCTYPE>
<html>
<head>
<title>GitHub</title>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body
	class="post-template-default single single-post postid-821 single-format-standard custom-font-enabled single-author">
	<div id="page" class="site">
	<?php include 'header.php';?>
		<div class="wrapper">
			<div class="site-content article">
				<div role="main">
					<header class="entry-header">
						<h1 class="entry-title">GitHub</h1>
					</header>
					<div class="entry-content">
						<p>An overview of the projects that i have worked on!</p>
						<h2>Geographical Information Systems (GIS) Tool for mapping
							unhealthiest cities in India</h2>
						<img src="images/gis_main.png" width=auto height=auto />
						<h5 align="justify">For the Geographical Information Systems
							course, I decided to study the sources of air pollution in India.
							Using data from The World Health Organization (WHO), I was able
							to develop a Java based pollution model to map the cities with
							the highest annual average concentrations of particulate matter
							(PM).</h5>
						<details>
							<summary style="color: blue">Learn More...</summary>
						<?php include 'gis.php';?>
						</details>
						<table>
							<tr>
								<th>Technologies used :</th>
								<td>Java Swings, HTML 5, CSS, ESRI Map Objects Java Object
									libararies</td>
							</tr>
						</table>
						<span>Download the source code here :<a
							href="https://github.com/smdeepaksharma/Geographical-Information-Systems.git"
							target="_blank">https://github.com/GIS Tool.git</a>
						</span>

						<hr>
						<h2 align="justify">Double Timer</h2>
						<p>A dual clock timer that counts up from 0 to a specified target
							and counts down from target to zero</p>
						<img src="images/dualcounter.png" />
						<table>
							<tr>
								<th>Technologies used :</th>
								<td>Javascript, HTML 5, CSS3, Bootstrap</td>
							</tr>
						</table>
						<a
							href="https://github.com/smdeepaksharma/ClickTime_Challenge.git"
							target="_blank">https://github.com/DoubleTimer.git</a>

						<hr>
						<h2 align="justify">Android Mobile Applications</h2>
						<ul>
							<li>Currently enrolled in Android App development course</li>
							<li>Check out some samples in the below link</li>
						</ul>
						<a href="https://github.com/smdeepaksharma/Android.git"
							target="_blank">https://github.com/Android.git</a>
					</div>
				</div>
			</div>
			<div id="profiles" class="widget-area">
			<?php include 'profiles.php'?>
			</div>
		</div>
		<?php include 'footer.php'?>
	</div>
</body>
</html>