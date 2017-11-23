<?php
<<<<<<< HEAD
	$act = $_GET['act'];
	$id = $_GET['id'];
=======
    $act = $_GET["act"];
    $id = $_GET["id"];
>>>>>>> c92775a65473a039af9dafbdceba74c0a4197c98
    if($act=="titikKoma")
    {
        $row = number_format($id,0,',','.');
        echo $row;
    }
?>