<!doctype html>
<html>
	<head>
		<title>Adventure sheet</title>
		<link href='css/style.css' rel='stylesheet'>
	</head>
	<body>
		<div class="wrapper">
			<div class="leftWrapper">
				<div class="itemWrapper">
					<div class="itemS">
						<h2>Skill</h2>
						<input type="text" name="skill">
					</div>
					<div class="itemS">
						<h2>Stamina</h2>
						<input type="text" name="stamina">
					</div>
					<div class="itemS">
						<h2>Luck</h2>
						<input type="text" name="luck">
					</div>
				</div>
				<div class="itemWrapper">
					<div style="padding: 5px;" class="leftWrapper">
						<div class="box inventory">
							<h2>Items of equipment carried</h2>
							<textarea cols="50" rows="10">
							</textarea>
						</div>
					</div>
					<div style="padding: 5px;" class="rightWrapper">
						<div class="box gold">
							<h2>Gold</h2>
							<input type="text" name="gold">
						</div>
						
						<div class="box jewels">
							<h2>Jewels</h2>
							<input type="text" name="jewels">
						</div>

						<div class="box potions">
							<h2>Potions</h2>
							<input type="text" name="potions">
						</div>

						<div class="box provisions">
							<h2>Provisions remaining</h2>
							<input type="text" name="provisions">
						</div>

					</div>
				</div>
			</div>
			<div class="rightWrapper">
			</div>
			<div style="clear: both;"></div>
		</div>

	</body>
</html>