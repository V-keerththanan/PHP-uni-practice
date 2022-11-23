<html>  
<head>  
<title> Pagination </title>  
</head>  
<body>  
  
<?php  
    require "../connection.php";

    // other need 
    /*
    $cars = array("Volvo", "BMW", "Toyota");
    $age=10;
    $ag = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "<h1>".$ag['Peter']."</h1>";
    */
    $per_page = 5;  
  
    
    $query1 = "SELECT *FROM district"; 
    $stat=$conn->query($query1);
    $count=$stat->rowCount();
    
    $number_of_page = ceil ($count / $per_page);  
  
    $page=1;
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
        
    } else {  
        $page = $_GET['page'];  
    }  
    if (!isset ($_GET['page'])){

    }else{
        
    }
  
     
    $page_start = ($page-1) * $per_page;  
  
    
    $query2 = "SELECT *FROM district LIMIT $page_start,$per_page";  

    $stat2=$conn->query($query2);

    $result2=$stat2->fetchAll();

    echo "<table border='2' align='center'>";
    echo "<tr>";
    echo  "<th>ProvinceCode</th>";
    echo "<th>Province</th>";
    echo "</tr>";
    $age=10;
    foreach ($result2 as $row) {
    
    echo  "<tr><td>".$row['DistrictCode']."</td><td>".$row['District']."</td></tr>";

    
    }
    echo "</table>";
  
    
    echo '<center>';
    $dummy=$page;
    if($page>1){
        ?>
        <a href ="pagination.php?page=<?php echo$page-1 ;?>"> Prev </a>
        <?php
    }
  
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo "<a href ='pagination.php?page=$page'> $page </a>";
    
    } 
    if($dummy<$number_of_page){
        ?>
        <a href = "pagination.php?page=<?php echo$page-1; ?>"> Next </a>
        <?php
    }
    
    echo '</center>';
  
?>  
</body>  
</html>  