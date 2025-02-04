<?php

require "../assets/db/connection.php";

date_default_timezone_set("Asia/Colombo");

if (!isset($_POST['pname'], $_POST['desc'], $_POST['brand'], $_POST['category'], $_POST['color'], $_POST['size'])) {
    echo "Missing required fields.";
    exit();
}

$productName = $_POST['pname'];
$description = $_POST['desc'];
$brand = $_POST['brand'];
$category = $_POST['category'];
$color = $_POST['color'];
$size = $_POST['size'];
$product_status = "1";

if (!isset($_FILES["img1"], $_FILES["img2"], $_FILES["img3"])) {
    echo "Please upload all images.";
    exit();
}

$targetDir = "../assets/img/product_images/";
$imagePaths = [];

for ($i = 1; $i <= 3; $i++) {
    $file = $_FILES["img$i"];
    $fileName = uniqid() . ".png";
    $targetPath = $targetDir . $fileName;

    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        $imagePaths["img$i"] = $fileName;
    } else {
        echo "Error uploading image $i.";
        exit();
    }
}

$imgId = uniqid();

Database::iud("INSERT INTO `image` (`img_id`, `img1`, `img2`, `img3`) VALUES 
    ('$imgId', '{$imagePaths['img1']}', '{$imagePaths['img2']}', '{$imagePaths['img3']}')");

$current_time = date("Y-m-d H:i:s");

Database::iud("INSERT INTO `product` 
    (`product_name`, `description`, `update_date`, `brand_id`, `category_id`, `product_size_id`, `img_id`, `color_id`, `pstatus_id`) 
    VALUES 
    ('$productName', '$description', '$current_time', '$brand', '$category', '$size', '$imgId', '$color', '$product_status')");

echo "Success";
?>
