<?php
include_once '../../database.php';

$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$id = $_POST['id'];
$heading = $_POST['heading'];
$type = $_POST['type']; 
$content = $_POST['long_desc'];
$publish = $_POST['publish'];
 


 
 $sql = "UPDATE answers set category='".$category."',subcategory='".$subcategory."',heading='".$heading."',type='".$type."',content='".$content."',publish='".$publish."' WHERE id='" . $id . "'" ;


$result = mysqli_query($conn, $sql);

if ($result) {
    echo "success";
    # code...
}
header('location:../../home/method.php?id=1&&cid=6');

?>
