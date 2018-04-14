<!DOCTYPE html>
<html>
	<head>
		<title>Time - HNG Internship</title>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="content">
			
					<img src="images/clock.png">
			
				<div class="text">
					<blockquote>
						"All that really belongs to us is time; even he who has nothing else has that."
					</blockquote>
					<p>Baltasar Gracian</p>
					<div class="time">
						<?php
							date_default_timezone_set("Africa/Lagos");
							echo date_default_timezone_get();
							echo date('<p> h : i a </p>');
						?>
					</div>
					<div class="date">
						<?php
							echo date('l, F jS, Y');
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>