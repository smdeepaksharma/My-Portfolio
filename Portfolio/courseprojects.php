<!DOCTYPE>
<html>
<head>
<title>Project Profile</title>
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
	<?php include 'header.php'; include 'Content.php';?>
		<div class="wrapper">
			<div class="site-content article">
				<div role="main">
					<header class="entry-header">
						<h1 class="entry-title"><?php echo $project_profile; ?></h1>
					</header>
					<div class="entry-content">
						<h2><?php echo $onlinemarket; ?> </h2>
						<p><?php echo $onlinemarket_description; ?></p>
						<hr>
						<?php include 'techprep.php';?>
						<hr>
						<h2><?php echo $optimized_title?></h2>
						<p><?php echo $optimized_description?></p>
						<img src="images/optimized_main.png" /> <br> <br>
						<details>
							<summary style="color: blue; font-size: 18px">Click here to learn more..</summary>
							<h4>Following are the features of the application</h4>
							<ul>
								<li>Node Deployment : Two varients are possible, Linear and
									Random topology</li>
								<li>Routing table formation of the deployed nodes. Each routing
									table contians information about :
									<ul>
										<li>Energy Level of the node</li>
										<li>Distance to its neighbouring nodes</li>
										<li>Co-ordinates</li>
									</ul>
								
								<li>Graphical analysis of results</li>
							</ul>
							<img alt="Optimized Energy Consumtion"
								src="images/optimized_graph.png">
						</details>
					</div>
				</div>
			</div>
			<div id="profiles" class="widget-area">
			<?php include 'profiles.php'?></div>
		</div>
		<?php include 'footer.php'?>
	</div>
</body>
</html>