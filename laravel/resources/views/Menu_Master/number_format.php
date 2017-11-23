<?php
	$act = $_GET['act'];
	$id = $_GET['id'];
    if($act=="titikKoma")
    {
        $row = number_format($id,2,',','.');
        echo $row;
    }
?>