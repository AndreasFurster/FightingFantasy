<?php
	$con = mysqli_connect('localhost','root','usbw','fighting_fantasy') or die("Error connecting to db");
	include 'function.php';

	if(isset($_GET['id'])){
		$story = GetStory($con, $_GET['id']);
		$content = CreateStoryPage($story);
	}
	else{
		$content = CreateStartPage();
	}

?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo isset($_GET['id']) ? "Page " . $_GET['id'] : "Startpage" ?></title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="big-spacer"></div>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">Game page #</div>
				<div class="panel-body">
					<?php echo $content; ?>
				</div>
				<div class="panel-footer">
					<div class="btn-group btn-group-lg btn-group-justified btn-group-fill-height">
						 <a href="#" class="btn btn-default" role="button">
						 	123
					 	</a>
						<a href="#" class="btn btn-default" role="button">
							456
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>