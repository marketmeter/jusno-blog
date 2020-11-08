<?php
include_once '../../database.php';

$name = $_POST['name'];
$description = $_POST['description'];


echo  $sql = "INSERT into category (name,description,publish) VALUES ('$name','$description','0')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "success";
    # code...
}
header('location:../addcategory.php');

?>
