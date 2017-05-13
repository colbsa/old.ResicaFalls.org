<?php

$day_array = array("M", "T", "W", "R", "F");
$time_array = array("9-12", "1-5", "5-7", "7-9");
$needs_array = array("Lifeguard(s)", "PFDs", "Canoes", "Food", "Transportation");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include '_inc/html_head.php'; ?>
		<meta name="description" content="Schedule a trip-plan with the team at Resica Falls Scout Reservation!" />
		<title>Trip-Plan Scheduler <?php include '_inc/var/site_name.php'; ?></title>
	</head>
	<body>
		<?php include '_inc/header.php'; ?>
		<?php include '_inc/nav.php'; ?>

		<div class="container content">
			<div class="row">
				<div class="col">
					<h1>Trip-Plan Scheduler</h1>
				</div>
			</div>
			<div class="row">
				<form id="tripplan-form">
					<div class="col">
						<table class="table">
							<thead>
								<tr>
									<th>Time</th>
<?php
	foreach($day_array as $day)
	{
		echo "<th>$day</th>";
	}
?>
								</tr>
							</thead>
							<tbody>
<?php
	foreach($time_array as $time)
	{
		echo "<tr>";
		foreach($day_array as $day)
		{
			echo "<td>$time</td>";
			echo "<td>";
			foreach($needs_array as $need)
			{
				echo "<input class=\"\" type=\"checkbox\" name=\"$day $need\" id=\"\"> $need<br>";
			}
			echo "<input class=\"\" type=\"text\" name=\"$day troop\" id=\"\">";
			echo "</td>";
		}
		echo "</tr>";
	}
?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
		<?php include '_inc/footer.php'; ?>	
		<?php include '_inc/html_foot.php'; ?>
	</body>
</html>

<!-- <button type="reset" class="btn btn-danger">Clear Form</button> -->