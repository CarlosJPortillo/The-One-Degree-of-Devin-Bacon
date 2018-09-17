<?php


error_reporting(E_ALL);
ini_set('display_errors',1);


DEFINE	('DB_HOST', '150.135.53.5');
DEFINE  ('DB_USER', 'student');
DEFINE	('DB_PSWD', 'B3@rD0wn!');
DEFINE ('DB_DATABASE', 'imdb');


if(isset($_GET['first_Name']) && isset($_GET['last_Name']))
{
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_DATABASE);
	if($conn)
	{
		$sql = "";
		$first_name = strtolower($_GET['first_Name']); 
		$last_name = strtolower($_GET['last_Name']);
		if(!isset($_GET['second_query']))
		{		
			$sql = "SELECT  `movies`.`name`, `movies`.`year`
	      	        FROM `actors` AS `act`  JOIN `roles` ON `act`.`id`= `roles`.`actor_id`
					AND `act`.`first_name` = '$first_name'
               	    AND `act`.`last_name` = '$last_name'
				    JOIN `movies`ON `roles`.`movie_id`=`movies`.`id`
					ORDER BY `movies`.`year` DESC ";
		}
		else
		{
			$sql = "SELECT `mov`.`name`, `mov`.`year`
			       FROM `movies` AS `mov`
			       JOIN `roles` AS `rol` ON `mov`.`id` = `rol`.`movie_id`
			       JOIN `actors` AS `act` ON `rol`.`actor_id` = `act`.`id`
			       JOIN `roles` AS  `rol2` ON `mov`.`id` = `rol2`.`movie_id`
			       JOIN `actors` AS `act2` ON `rol2`.`actor_id` = `act2`.`id`
			       WHERE `act`.`first_name` = '$first_name' AND `act`.`last_name` = '$last_name'
			       AND `act2`.`first_name` = 'Kevin' AND `act2`.`last_name` = 'Bacon'
			       ORDER BY `mov`.`year` DESC";
		}
		$result = mysqli_query($conn, $sql);
		$json_array = array(); 
		while($row = mysqli_fetch_assoc($result))
		{
			$json_array[] = $row;
		}
		echo json_encode($json_array);
	}
	
	else
	{
      		 echo 'not able to connect to server';
	}	

}




?>
