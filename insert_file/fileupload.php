
<html>
    <head>
        <title>upload</title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile">
            <input type="submit" name="sub">
            
        </form>

        <?php
        require "../connection.php";
        if(isset($_POST['sub']) ){

                
                if(!empty($_FILES['myfile']['name'])){
                       $name=$_FILES['myfile']['name'];
                       $type=$_FILES['myfile']['type'];
                       $data=file_get_contents($_FILES['myfile']['tmp_name']);
                       $query_insert="INSERT INTO imagehub values(?,?)";
                       $stat=$conn->prepare($query_insert);
                       $stat->execute([1,$data]);
                }else{
                    echo "i am empty";
                }
        }else{
            echo " not selected";

        }
        ?>

    </body>
</html>