<?php

	function GetStory($con, $curpage = null)
	{
		$query = 'SELECT * FROM `location` WHERE `page` = '.$curpage;
		$result = $con->query($query);

		$row = mysqli_fetch_object($result);

		$options = [
			$row->option1,
			$row->option2,
			$row->option3,
			$row->option4,
			$row->option5,
			$row->option6	
		];

		$story['text'] = $row->text;
		$story['id'] = $curpage;
		$story['options'] = $options;

		return $story;
	}

	function CreateStoryPage($story)
	{

		echo "<h1>Page " . $story['id'] . "</h1>";
		echo "<p>" . $story['text'] . "</p>";
		echo "<ul>";

		foreach ($story['options'] as $option) {
			echo $option != null ? 
				"<li><a href='?id=$option'>$option</a></li>" 
				: "";
		}
		echo "</ul>";
	}

	function CreateStartPage()
	{
		return include 'homepage.html';
	}
?>