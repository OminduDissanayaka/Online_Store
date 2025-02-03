<?php

require "../assets/db/connection.php";

$colorName = $_POST['colorName'];

if(empty($colorName)){
    echo "Please Enter New Color Name";
} else if (ctype_space($colorName)){
    echo "Color Name cannot be just";
} else {
    $rs = Database::search("SELECT * FROM `color` WHERE `name` = '".$colorName."'");
    $num = $rs->num_rows;

    if($num > 0){
        echo "Color name already exists";
    } else {
        Database::iud("INSERT INTO `color` (`name`) VALUES ('".$colorName."')");
        echo "Success";
    }
}
?>