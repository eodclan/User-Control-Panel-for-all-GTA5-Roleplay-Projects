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
$sql = "select * from accounts where username = '".$username."'";
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
                <p class='category'>User Control Panel | Dashboard</p>
              </div>
              <div class='card-body'>
				<div class='alert alert-info alert-with-icon' data-notify='container'>
					<button type='button' aria-hidden='true' class='close'>
						<i class='now-ui-icons ui-1_simple-remove'></i>
					</button>
					<span data-notify='icon' class='now-ui-icons ui-1_bell-53'></span>
					<span data-notify='message'>Du bist momentan nicht auf der Whitelist!</span>
				</div>			  
			<div class='row'>			
				<div class='col-sm-8'>
					<b>Willkommen ";
						if(isset($_COOKIE["secure"]))
						{
							echo "".htmlspecialchars($_COOKIE["secure"])."";
						}
echo "						
					 im Dashboard!
				</div>				
			</div>										
              </div>
            </div>
			</form>
          </div>
        </div>
      </div>";
site_footer();	
?>