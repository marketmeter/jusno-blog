<?php
include_once '../../database.php';

$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$title = $_POST['title'];
$description = $_POST['description'];
$publish = $_POST['publish'];
$location=$_POST['location'];
$id=$_POST['id'];


 $sql = "UPDATE questions set category='" . $category . "', subcategory='".$subcategory."', title='".$title."', description='".$description."', location='".$location."', publish='".$publish."'  WHERE id='" . $id . "'";


$result = mysqli_query($conn, $sql);

if ($result) {
    echo "success";
    # code...
}
header('location:../showquestions.php');

?>
