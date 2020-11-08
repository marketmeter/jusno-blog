<?php
include_once '../../database.php';

$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$heading = $_POST['heading'];
$description = $_POST['description'];
$publish = $_POST['publish'];
$location=$_POST['location'];



echo  $sql = "INSERT into questions (category,subcategory,title,description,location,publish) VALUES ('$category','$subcategory','$heading','$description','$location','$publish')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "success";
    # code...
}
header('location:../showquestions.php');

?>
