<?php

	function GetStory($con, $curpage)
	{
		$query = 'SELECT * FROM `location` WHERE `page` = '. $curpage;
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

		$result = "<h1>Page " . $story['id'] . "</h1>";
		$result .= "<p>" . $story['text'] . "</p>";
		return $result;
	}

	function CreateStartPage()
	{
		return '<h3>The Startpage!!</h3>';
	}
?>