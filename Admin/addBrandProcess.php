<?php

require "../assets/db/connection.php";

$brandName = $_POST['brandName'];

if(empty($brandName)){
    echo "Please Enter New Brand Name";
} else if (ctype_space($brandName)){
    echo "Brand Name cannot be just space";
} else {
    $rs = Database::search("SELECT * FROM `brand` WHERE `name` = '".$brandName."'");

   $num = $rs->num_rows;

   if($num > 0) {
    echo "Brand Name already exists";
   } else {
    Database::iud("INSERT INTO `brand` (`name`) VALUES ('".$brandName."')");
    echo "Success";
   }
}
?>