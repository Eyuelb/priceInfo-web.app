<?php 

function getBrand()
{
    include_once('././admin/config/config.php');
    $row	=	$db->getAllRecords('product_details','*','');
    return $row;
}
