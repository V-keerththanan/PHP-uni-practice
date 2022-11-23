<?php
include "../connection.php";
$sql_query="SELECT * FROM province ";
$stat=$conn->query($sql_query);

$result=$stat->fetchAll();

$age=10;
echo "<br>";


echo "<br><br><br>";
echo "<table border='2'>";
echo "<tr>";
 echo  "<th>ProvinceCode</th>";
 echo "<th>Province</th>";
echo "</tr>";
foreach ($result as $row) {
  
  echo  "<tr><td>".$row['ProvinceCode']."</td><td>".$row['Province']."</td></tr>";

  
}
echo "</table>";




?>

