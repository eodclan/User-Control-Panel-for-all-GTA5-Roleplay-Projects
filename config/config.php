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
session_start();
// Site Title Name
$sitetitle = "Destiny-Life | User Control Panel"; 
  
$conn = mysqli_connect("localhost","user","pass","dbname");

if(!$conn){
	die("Connection error: " . mysqli_connect_error());	
}
?>