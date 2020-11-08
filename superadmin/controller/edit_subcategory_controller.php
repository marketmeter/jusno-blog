<?php
include_once '../../database.php';

$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$publish = $_POST['publish'];
$id = $_POST['id'];



if ($_SERVER['REQUEST_METHOD'] == "POST")
{	
    $file  = $_FILES["image_file"]["name"];
    $file_name = $_FILES["image_file"]["name"];
    $file_type = $_FILES["image_file"]["type"];
    $temp_name = $_FILES["image_file"]["tmp_name"];
    $file_size = $_FILES["image_file"]["size"];
    $error = $_FILES["image_file"]["error"];
    if (!$temp_name)
    {
        echo "ERROR: Please browse for file before uploading";
        exit();
    }
    function compress_image($source_url, $destination_url, $quality)
    {
        $info = getimagesize($source_url);
        if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
        elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
        elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
        imagejpeg($image, $destination_url, $quality);
        echo "Image uploaded successfully.";
    }
    if ($error > 0)
    {
        echo $error;
    }
    else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg"))
    {
        $filename = compress_image($temp_name, "../../uploads/" . $file_name, 80);
    }
    else
    {
        echo "Uploaded image should be jpg or gif or png.";
    }
}


		$sql1 = "UPDATE subcategory set name='" . $name . "', description='".$description."', category='".$category."', publish='".$publish."', image='".$file."'  WHERE id='" . $id . "'";
    $result = mysqli_query($conn, $sql1);


if ($result) {
    echo "success";
    # code...
}
header('location:../subcategory.php');


?>
