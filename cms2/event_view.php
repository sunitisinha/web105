<?php
$connection=mysqli_connect("localhost","root","","cms2");

if(isset($_GET['id']))
{
	$id=$_GET['id'];
}

$query="SELECT * FROM event_page WHERE id=$id";
$event_view=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($event_view))
{
	$title=$row['title'];
	$start_date=$row['start_date'];
	$end_date=$row['end_date'];
	echo "Event Name:$title";
?>
<table>
	<tr>
<?php
	echo "<br>Event Occurences:$start_date";
	$startDay=strtotime('$start_date');
	$endDay=strtotime('$end_date');
	$interval=$endDay-$startDay;
	$days=floor($interval/(60*60*24));
	echo $days;


}

?>
</tr>
</table>