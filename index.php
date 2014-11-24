<?php
	$con = mysqli_connect('localhost','root','usbw','fighting_fantasy') or die("Error connecting to db");
	include 'function.php';

	if(isset($_GET['id']) && !empty($_GET['id']) && !is_int($_GET['id'])){
		$story = GetStory($con, $_GET['id']);
		$content = CreateStoryPage($story);
	}
	else{
		$content = CreateStartPage();
	}

	$title = isset($_GET['id']) ? "Page " . $_GET['id'] : "Startpage";
	$isHomePage = !isset($story);

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/autosave.jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<script>
			$(function(){
				$('form.autosave').Autosave();
			});
		</script>
		
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="big-spacer"></div>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $title; ?>
				</div>
				<div class="panel-body">
					<?php echo $content; ?>
				</div>
				<div class="panel-footer">
					<div class="btn-group btn-group-lg btn-group-justified btn-group-fill-height">
						<?php
							if (!$isHomePage) {
								foreach ($story['options'] as $option) {
									if ($option == null) break;
									echo '<a href="?id=' . $option . '" class="btn btn-default" role="button">' . $option . '</a>';
								}
							}
							else{
								echo '<a href="index.php?id=1" class="btn btn-success" role="button">Begin game!</a>';
							}
						?>					
					</div>	
				</div>		
			</div>
		</div>
		<button type="button" class="btn btn-primary fixed-bottom" data-toggle="modal" data-target="#PlayerOverview">
		  Player Overview
		</button>
		<?php include 'inventory.html'; ?>
	</body>
</html>