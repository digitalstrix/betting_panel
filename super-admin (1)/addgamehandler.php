<?php
include ("admin/connect.php");
include ("admin/session.php");


$data_array =  array(
    "token" => $_SESSION["usertoken"],
    "game_id" => $_POST['game_id']
);
    $make_call = callAPI1('POST', 'addgame', $data_array,$_SESSION['token']);
    $response = json_decode($make_call, true);
    if($response['message']){
        echo "<script>alert('".$response['message']."')
        window.location.href='addgame.php';
        </script>
        ";
        
    }  

?>