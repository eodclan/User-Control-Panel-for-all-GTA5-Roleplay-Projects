<?php 
// ************************************************************************************//
// * User Control Panel ( UCP )
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.0
// * 
// * Copyright (c) 2020 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
require_once("config/config.php");
require_once("include/bcrypt_class.php");
require_once("include/template.php");

$username = trim($_POST['username']);
$sql = "select * from accounts where username = '".$username."'";
$rs = mysqli_query($conn,$sql);

$expires = time()+2592000;
$cookie = $_COOKIE["username"]; 
$securecode = hash($username,PASSWORD_BCRYPT);
setcookie("PHPSESSID", sitehash($securecode), $expires,  "/");	
//Abfrage der Nutzer ID vom Login
$securecode = $_SESSION['secure'];

function sitehash($var,$addtext="",$addsecure="02fb9ff482dfb6d9baf1a56b6d1f1703f643eeb1204b3012391f8ee63bfe4f4e")
{
    return hash('sha512','Destiny-Life ".$addtext.$var.$addtext."".$addsecure." is the new roleplay project!');
}

if(isset($_POST['logout'])){
	site_logout();
}
?>