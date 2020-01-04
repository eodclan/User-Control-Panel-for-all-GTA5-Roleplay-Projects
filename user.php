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
require_once("include/features.php");

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$socialClub = trim($_POST['socialClub']);
	
$sql = "select * from accounts where (username, email, socialClub) value('".$username."', '".$email."', '".$socialClub."')";
$rs = mysqli_query($conn,$sql);
	
$cookie = $_COOKIE["username"]; 

site_secure();

site_header();
site_navi_logged();
site_content_logged();

echo "
      <div class='content'>
                <div class='row'>
          <div class='col-md-12'>
            <div class='card'>
              <div class='card-header'>
                <h5 class='title'>Willkommen bei Destiny-Life!</h5>
                <p class='category'>User Control Panel | User Profile</p>
              </div>
              <div class='card-body'>
			<div class='row'>
		  <div class='col-md-4'>
            <div class='card card-user'>
              <div class='image'>
                <img src='themes/destiny-life/assets/img/bg5.jpg' alt='...'>
              </div>
              <div class='card-body'>
                <div class='author'>
                  <a href='#'>
                    <img class='avatar border-gray' src='themes/destiny-life/assets/img/mike.jpg' alt='...'>
                    <h5 class='title'>";
						if(isset($_COOKIE["secure"]))
						{
							echo "".htmlspecialchars($_COOKIE["secure"])."";
						}
echo "						
					</h5>
                  </a>
                </div>
                <p class='description text-center'>
                  Username: ".$username." <br>
                  E-Mail: ".$email." <br>
                  Social Club: ".$socialClub."
                </p>
              </div>
              <hr>
              <div class='button-container'>
                <button href='#' class='btn btn-neutral btn-icon btn-round btn-lg'>
                  <i class='fab fa-facebook-f'></i>
                </button>
                <button href='#' class='btn btn-neutral btn-icon btn-round btn-lg'>
                  <i class='fab fa-twitter'></i>
                </button>
                <button href='#' class='btn btn-neutral btn-icon btn-round btn-lg'>
                  <i class='fab fa-google-plus-g'></i>
                </button>
              </div>
            </div>
          </div>				
			</div>										
              </div>
            </div>
          </div>
        </div>
      </div>";
site_footer();	
?>