<?php
include_once '../../database.php';

$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$questions = $_POST['question'];
$heading = $_POST['heading'];
$type = $_POST['type'];
$content = $_POST['long_desc'];
$publish = $_POST['publish'];
 



echo $sql = "INSERT into answers (category,subcategory,questions,heading,type,content,publish) VALUES ('$category','$subcategory','$questions','$heading','$type','$content','$publish')";


$result = mysqli_query($conn, $sql);

if ($result) {
    echo "success";
    # code...
}
// header('location:../addcategory.php');

?>
