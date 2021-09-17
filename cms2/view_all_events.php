<?php
$connection=mysqli_connect("localhost","root","","cms2");
?>

<form action="" method="post">
	<table class="table table-bordered table-hover">
		<thead>
		<tr>
			<th>Sl.No.</th>
			<th>Title</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Occurence</th>
			<th>Day/Month/year</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php

		//$connection=mysqli_connect("localhost","root","","cms2");
		$query="SELECT * FROM event_page";

		$view_all_events=mysqli_query($connection,$query);

		if(!$view_all_events)
		{
			die("Query Failed".mysqli_error($connection));
		}
		while($row=mysqli_fetch_assoc($view_all_events))
		{   $id=$row['id'];
			$title=$row['title'];
			$start_date=$row['start_date'];
			$end_date=$row['end_date'];
			$occurence=$row['occurence'];
			$day_month_year=$row['day_month_year'];


			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$title</td>";
			echo "<td>$start_date</td>";
			echo "<td>$end_date</td>";
			echo "<td>$occurence</td>";
			echo "<td>$day_month_year</td>";
			echo "<td><a href='event_view.php?id=$id'>View</a></td>";
			echo "</tr>";
		}
		?>
		</tbody>
	</table>
</form>
