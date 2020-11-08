<?php
include_once '../../database.php';
$name = $_POST['name'];
$description = $_POST['description'];
$id = $_POST['id'];




    // echo $team1_player;
  echo   $sql1 = "UPDATE category set name='" . $name . "', description='".$description."' WHERE id='" . $id . "'";
    $result1 = mysqli_query($conn, $sql1);


if ($result1) {
    // header('Location: ../views/edit_price.php?market_id=' . $market_id . '&&user_id=' . $user_id . '');
} else {
}

header('location:../portal.php');

?>
