<?php


$pageTitle="Territoires";
include 'header.php';
include_once 'dbconnect.php';

//check assignments
$assignments_sql ="selct territoireId, assignedStatus * from assignments";


//count the number of territoires in table
	
	$territoire_count_sql="select count(*) as count from territoire";
	
	
	$territoire_count_result= $conn->query($territoire_count_sql);
	
	///loop through territoir count to show count
	while($count = $territoire_count_result->fetch(PDO::FETCH_ASSOC)){
		print $count['count'];
	}

//end counting number of territoires


echo '<table class="table table-bordered table-striped">';

	

		try{
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$sql="select * from territoire";
				
				
				//retreive with prepared PDO statement
				//$stmt= $conn->prepare("select * from territoire");
				//$result = $stmt->execute();

				$result= $conn->query($sql);
				
				
				//var_dump($result);
				//set resulting array to associative

			while ($row = $result->fetch(PDO::FETCH_ASSOC))
				{
				echo "<tr>";
				echo "<td>"; 			print $row['territoireId'];				echo "</td>";
				echo "<td>"; 			print $row['city']."<br/>";				echo "</td>";
				echo "<td>"; 			print $row['city']."<br/>";				echo "</td>";
				echo "</tr>";
				}
			}

				//foreach($row as $key)
			//	{
				
		//		var_dump($key);
				
					//echo $key['id']." ";
				//}
			//}
			
		catch (PDOException $e)
			{
				echo "Error: ".$e->getMessage();
			}
			
echo '</table>';

//calculate number of territoires

function numTerritoire(){


	return $numterritoire;
}

?>