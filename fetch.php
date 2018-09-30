<?php
if(isset($_POST["limit"], $_POST["start"]))
{
	error_reporting(0);
	$connect = mysqli_connect("localhost", "root", "", "sample-database");
	if($connect)
	{
		$result = mysqli_query($connect,"SELECT * FROM country ORDER BY id ASC LIMIT ".$_POST["start"].", ".$_POST["limit"]."");
		foreach($result as $row)
		{
		  echo '
		  <h3>'.$row["name"].'</h3>
		  <p>Name - <b>'.$row["nicename"].'</b>, ISO - <b>'.$row["iso"].'</b>, ISO3 - <b>'.$row["iso3"].'</b>, Num Code - <b>'.$row["numcode"].'</b>, Phone Code - <b>+'.$row["phonecode"].'</b></p>
		  <hr>
		  ';
		}
	}
	else
	{
		echo '<p>Connection Problem...';
	}
}
?>