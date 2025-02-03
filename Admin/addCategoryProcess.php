<?php

require "../assets/db/connection.php";

$categoryName = $_POST['categoryName'];

if(empty($categoryName)){
    echo "Please Enter New Category Name";
} else if(ctype_space($categoryName)){
    echo "Category Name cannot be just space";
} else {
    
    $rs = Database::search("SELECT * FROM `category` WHERE `name` = '".$categoryName."'");

    $num = $rs->num_rows;

    if($num > 0){
        echo "Category Name already exists";
    } else {
        Database::iud("INSERT INTO `category` (`name`) VALUES ('".$categoryName."')");
        echo "Success";
    }
}

?>