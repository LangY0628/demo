<?php
$name2 = $_POST['name2'];
$age2 = $_POST['age2'];
$array = array("name"=>$name2,"age"=>$age2);
echo json_encode($array);
?>