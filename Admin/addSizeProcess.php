<?php

require "../assets/db/connection.php";

$sizeName = $_POST['sizeName'];

if(empty($sizeName)){
    echo "Please Enter New Size Name";
} else if(ctype_space($sizeName)){
    echo "Category Name cannot be just space";
} else {
    $rs = Database::search("SELECT * FROM `product_size` WHERE `name` = '".$sizeName."'");

    $num = $rs->num_rows;

    if($num > 0){
        echo "Size Name already exixt";
    } else {
        Database::iud("INSERT INTO `product_size` (`name`) VALUES ('".$sizeName."')");
        echo "Success";
    }
}

?>