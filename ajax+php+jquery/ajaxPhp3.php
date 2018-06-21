<?php
$name = $_POST['name'];
$age = $_POST['age'];
$array = array("name"=>$name,"age"=>$age,);
echo json_encode($array);
?>