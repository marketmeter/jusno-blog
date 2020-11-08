<?php
include_once '../../database.php';

$id = $_GET['id'];
$value=$_GET['value'];




    // echo $team1_player;
   echo  $sql1 = "UPDATE questions set publish='" . $value . "' WHERE id='" . $id . "'";
    $result1 = mysqli_query($conn, $sql1);


if ($result1) {
    // header('Location: ../views/edit_price.php?market_id=' . $market_id . '&&user_id=' . $user_id . '');
} else {
}

header('location:../portal.php');

?>
