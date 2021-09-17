<?php
$connection=mysqli_connect("localhost","root","","cms2");
if(isset($_POST['submit']))
{  //$connection=mysqli_connect("localhost","root","","cms2");
	$title=$_POST['title'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$occurence=$_POST['occurence'];
	$day_month_year=$_POST['day_month_year'];

	$query="INSERT INTO event_page(title,start_date,end_date,occurence,day_month_year) VALUES('{$title}','{$start_date}','{$end_date}','{$occurence}','{$day_month_year}')";
	$add_event_page=mysqli_query($connection,$query);
	if(!$add_event_page)
	{
		die("Query Failed".mysqli_error($connection));
	}
}




?>
<form method="post" action="view_all_events.php">
<div class="form-group">
		<label for="title">Event Title</label>
		<input type="text" class="form-control" name="title">
	</div>
	<div class="form-group">
		<label for="start_date">Start Date</label>
		<input type="date" name="start_date" id="start_date">
	</div>

	<div class="form-group">
		<label for="end_date">End Date</label>
		<input type="date" name="end_date" id="end_date">
	</div>
	


	<div class="form-group">
		<select name="occurence" id="">
		<option value="every">Every</option>
		<option value="every_other">Every Other</option>
		<option value="every_third">Every Third</option>
		<option value="every_fourth">Every fourth</option>

			


		</select>
	</div>

	<div class="form-group">
		<select name="day_month_year" id="">
			<option value="day">Day</option>
			<option value="month">Month</option>
			<option value="year">Year</option>
		</select>
	</div>




<div class="form-group">
		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</div>

</form>