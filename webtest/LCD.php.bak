<?php 
	//Connect to the database...
	$conn = mysqli_connect('108.163.243.218', 'noddarca_noddarca', '!Council!Business!Only!', 'noddarca_statistics');
	
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}
	
	$type = $_POST['type']; //We need to know if it was cum, love, or death
	$location = $_POST['loc']; //We need to know where it's coming from
	$userID = $_POST['user']; //We need to know who it is so we can add/remove appropriately.
	$addRem = $_POST['addRem']; //And we need to know whether we're deleting or adding!
	
	if ($addRem == 'rem') {
		if ($type == "cum") {
			//Update cum count
			$addCount = "DELETE FROM count_cum WHERE (location = '$location' AND userID = '$userID')";
		} else if ($type == "death") {
			$addCount = "DELETE FROM count_death WHERE (location = '$location' AND userID = '$userID')";
		} else {
			$addCount = "DELETE FROM count_love WHERE (location = '$location' AND userID = '$userID')";
		}
	} else {
		if ($type == "cum") {
			//Update cum count
			$addCount = "INSERT INTO count_cum(location,userID) VALUES('$location', '$userID')";
		} else if ($type == "death") {
			$addCount = "INSERT INTO count_death(location,userID) VALUES('$location', '$userID')";
		} else {
			$addCount = "INSERT INTO count_love(location,userID) VALUES('$location', '$userID')";
		}
	}
	
	if(mysqli_query($conn, $addCount)) {
		//Success!
	} else {
		//error! Print what it is (it should be hidden by the map but will still appear in the console)
		echo 'Query error: ' . mysqli_error($conn);
	}
?>