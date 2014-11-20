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
		<link href='css/style.css' rel='stylesheet'>
	</head>
	<body>
		<?php echo $content; ?>
	</body>
</html>