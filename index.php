<?php
	$names = Array("Promise", "Tochukwu", "Ifeanyi", "Ikenna", "Chinonso", "Ebuka", "Amarachi", "Chidalu", "Onyinye", "Ijeoma");
	$subjects = Array("English", "Maths", "Physics", "Chemistry", "Biology");	
	
	$scores = Array("Promise" => Array( "English" => 65, "Maths" => 70, "Physics" => 63, "Chemistry" => 97, "Biology" => 70),
					"Tochukwu" => Array( "English" => 45, "Maths" => 76, "Physics" => 87, "Chemistry" => 46, "Biology" => 76),
					"Ifeanyi" => Array( "English" => 76, "Maths" => 64, "Physics" => 98, "Chemistry" => 58, "Biology" => 56),
					"Ikenna" => Array( "English" => 75, "Maths" => 97, "Physics" => 46, "Chemistry" => 77, "Biology" => 90),
					"Chinonso" => Array( "English" => 47, "Maths" => 87, "Physics" => 76, "Chemistry" => 80, "Biology" => 45),
					"Ebuka" => Array( "English" => 65, "Maths" => 64, "Physics" => 86, "Chemistry" => 71, "Biology" => 59),
					"Amarachi" => Array( "English" => 70, "Maths" => 80, "Physics" => 97, "Chemistry" => 99, "Biology" => 87),
					"Chidalu" => Array( "English" => 75, "Maths" => 90, "Physics" => 75, "Chemistry" => 86, "Biology" => 70),
					"Onyinye" => Array( "English" => 50, "Maths" => 86, "Physics" => 56, "Chemistry" => 90, "Biology" => 66),
					"Ijeoma" => Array( "English" => 85, "Maths" => 66, "Physics" => 58, "Chemistry" => 75, "Biology" => 65)
					);
	
	
	/*echo $scores[$names[0]]["Maths"];
	echo Array_sum($scores["Promise"]);*/

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table width="80%" align="center" border="1">
  <tr>
    <th scope="col">Name</th>
    <th scope="col">English</th>
    <th scope="col">Maths</th>
    <th scope="col">Physics</th>
    <th scope="col">Chemistry</th>
    <th scope="col">Biology</th>
    <th scope="col">Total</th>
    <th scope="col">Average</th>
    <th scope="col">Grade</th>
  </tr>
  <?php
  	for($row = 0; $row < count($names); $row++){
		echo "<tr>";
		for($col = 0; $col < (count($subjects)+1); $col++){
			if($col == 0){echo "<th>".$names[$row]."</th>";}
			
			if($col < count($subjects)){
				echo "<td>".$scores[$names[$row]][$subjects[$col]]."</td>";
			}else{
				$total = Array_sum($scores[$names[$row]]);
				$avg = $total/count($subjects);
				echo "<td>".$total."</td>";
				echo "<td>".$avg."</td>";
				if($avg >= 70){$grade = "A";}
				elseif($avg >= 60){$grade = "B";}
				elseif($avg >= 50){$grade = "C";}
				elseif($avg >= 45){$grade = "D";}
				elseif($avg >= 40){$grade = "E";}
				else{$grade = "F";}
				echo "<td>".$grade."</td>";
			}
			
		}
		echo "</tr>";
	}
  ?>

  </table>

</body>
</html>