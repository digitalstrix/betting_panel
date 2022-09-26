<?php 
include ("admin/connect.php");
include ("admin/session.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="UPDATE withdrawls SET is_completed=1 where id=$id";
if(mysqli_query($connect,$sql)){
    header('location: withdrawls.php');
}else{
    echo "Not Updated";
}
    
}

?>