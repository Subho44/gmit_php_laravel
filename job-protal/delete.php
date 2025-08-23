<?php include 'config.php';?>
<?php
//VIEW SINGEL
$id = $_GET['id'];
$sql = "DELETE FROM jobs WHERE id=$id";

if(mysqli_query($conn,$sql)) {
        header("Location:index.php");
    } else {
        echo "error";
    }


?>