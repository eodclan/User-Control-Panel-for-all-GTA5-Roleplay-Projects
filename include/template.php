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

function site_secure() {
	if(!isset($_SESSION['secure'])) {
		site_header();
		site_navi_nologged();
		site_content_nologged();

		echo "
        <div class='content'>
         <div class='row'>
          <div class='col-md-12'>
            <div class='card'>
              <div class='card-header'>
                <h5 class='title'>Willkommen bei Destiny-Life!</h5>
                <p class='category'>User Control Panel | Secure System</p>
              </div>
              <div class='card-body'>			  
				<div class='row'>			
					<div class='col-sm-8'>
						<b>Sie sollten sich zuerst <a href='login.php'>einloggen</a>!</b>
					</div>				
				</div>										
              </div>
            </div>
			</form>
          </div>
        </div>
      </div>";
		site_footer();
		die();
	}  
}

function site_register_done() {
site_header();
site_navi_nologged();
site_content_nologged();

echo "
        <div class='content'>
         <div class='row'>
          <div class='col-md-12'>
            <div class='card'>
              <div class='card-header'>
                <h5 class='title'>Willkommen bei Destiny-Life!</h5>
                <p class='category'>User Control Panel | Secure System</p>
              </div>
              <div class='card-body'>			  
				<div class='row'>			
					<div class='col-sm-8'>
						<b>Deine Registrierung ist abgeschlossen!</b>
					</div>				
				</div>										
              </div>
            </div>
			</form>
          </div>
        </div>
      </div>";
site_footer();
die(); 
}

function site_logout() {
site_header();
setCookie("secure","",-3600);
session_start();
session_destroy();
site_navi_nologged();
site_content_nologged();

echo "
        <div class='content'>
         <div class='row'>
          <div class='col-md-12'>
            <div class='card'>
              <div class='card-header'>
                <h5 class='title'>Willkommen bei Destiny-Life!</h5>
                <p class='category'>User Control Panel | Secure System</p>
              </div>
              <div class='card-body'>			  
				<div class='row'>			
					<div class='col-sm-8'>
						<b>Dein Logout war erfolgreich!</b>
					</div>				
				</div>										
              </div>
            </div>
			</form>
          </div>
        </div>
      </div>";
site_footer();
header("Location: index.php");  
die();   
}

function site_header() {
echo "
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8' />
  <link rel='apple-touch-icon' sizes='76x76' href='themes/destiny-life/assets/img/apple-icon.png'>
  <link rel='icon' type='image/png' href='themes/destiny-life/assets/img/favicon.png'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
  <title>
    Destiny-Life | User Control Panel
  </title>";
	if(isset($_POST["username"]) && ! empty($_POST["username"]))
	{
		setCookie("secure",$_POST["username"],time()+2592000);
	} 
echo "  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700,200' rel='stylesheet' />
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css' integrity='sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr' crossorigin='anonymous'>
  <link href='themes/destiny-life/assets/css/bootstrap.min.css' rel='stylesheet' />
  <link href='themes/destiny-life/assets/css/now-ui-dashboard.php?v=1.5.0' rel='stylesheet' />
  <link href='themes/destiny-life/assets/site/site.php' rel='stylesheet' />
</head>

<body class=''>
  <div class='wrapper '>";   
}

function site_navi_logged() {
echo "
    <div class='sidebar' data-color='green'>
      <div class='logo'>
        <a href='dashboard.php' class='simple-text logo-normal'>
         <i class='now-ui-icons business_badge'></i> Destiny-Life | UCP
        </a>
      </div>
      <div class='sidebar-wrapper' id='sidebar-wrapper'>
        <ul class='nav'>
          <li>
            <a href='./dashboard.php'>
              <i class='now-ui-icons design_app'></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href='./user.php'>
              <i class='now-ui-icons users_single-02'></i>
              <p>User Profile</p>
            </a>
          </li>	  
        </ul>
      </div>
    </div>";   
}

function site_navi_nologged() {
echo "
    <div class='sidebar' data-color='blue'>
      <div class='logo'>
        <a href='index.php' class='simple-text logo-normal'>
          <i class='now-ui-icons business_badge'></i> Destiny-Life | UCP
        </a>
      </div>
      <div class='sidebar-wrapper' id='sidebar-wrapper'>
        <ul class='nav'>
          <li>
            <a href='./login.php'>
              <i class='now-ui-icons design_app'></i>
              <p>Login</p>
            </a>
          </li>
          <li>
            <a href='./register.php'>
              <i class='now-ui-icons education_atom'></i>
              <p>Register</p>
            </a>
          </li>
        </ul>
      </div>
    </div>";   
}

function site_content_nologged() {
echo "
    <div class='main-panel' id='main-panel'>
      <!-- Navbar -->
      <nav class='navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute'>
        <div class='container-fluid'>
          <div class='navbar-wrapper'>
            <div class='navbar-toggle'>
              <button type='button' class='navbar-toggler'>
                <span class='navbar-toggler-bar bar1'></span>
                <span class='navbar-toggler-bar bar2'></span>
                <span class='navbar-toggler-bar bar3'></span>
              </button>
            </div>
            <a class='navbar-brand' href='index.php'>Home</a>
          </div>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navigation' aria-controls='navigation-index' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-bar navbar-kebab'></span>
            <span class='navbar-toggler-bar navbar-kebab'></span>
            <span class='navbar-toggler-bar navbar-kebab'></span>
          </button>
          <div class='collapse navbar-collapse justify-content-end' id='navigation'>

          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class='panel-header panel-header-sm'>

      </div>";   
}

function site_content_logged() {
echo "
    <div class='main-panel' id='main-panel'>
      <!-- Navbar -->
      <nav class='navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute'>
        <div class='container-fluid'>
          <div class='navbar-wrapper'>
            <div class='navbar-toggle'>
              <button type='button' class='navbar-toggler'>
                <span class='navbar-toggler-bar bar1'></span>
                <span class='navbar-toggler-bar bar2'></span>
                <span class='navbar-toggler-bar bar3'></span>
              </button>
            </div>
            <a class='navbar-brand' href='dashboard.php'>Dashboard</a>
          </div>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navigation' aria-controls='navigation-index' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-bar navbar-kebab'></span>
            <span class='navbar-toggler-bar navbar-kebab'></span>
            <span class='navbar-toggler-bar navbar-kebab'></span>
          </button>
          <div class='collapse navbar-collapse justify-content-end' id='navigation'>
		  <form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
            <button class='btn btn-primary' type='logout' name='logout'>
              <i class='now-ui-icons ui-1_simple-remove'></i>
              <p>Logout</p>
            </submit>		  	
		  </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class='panel-header panel-header-sm'>

      </div>";     
}

function site_footer() {
echo "
      <footer class='footer'>
        <div class=' container-fluid '>
          <nav>
            <ul>
              <li>
                <a href='https://discord.gg/cGf73tD'>
                  Join to Discord
                </a>
              </li>
              <li>
                <a href='ts3server://ts3.destiny-life.ml?port=9987'>
                  Join to Teamspeak
                </a>
              </li>
              <li>
                <a href='https://destiny-life.ml/impressum.html'>
                  Impressum
                </a>
              </li>
            </ul>
          </nav>
          <div class='copyright' id='copyright'>
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> Destiny-Life. All rights reserved. Destiny-Life is not associated in any way with Rockstar North.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src='themes/destiny-life/assets/js/core/jquery.min.js'></script>
  <script src='themes/destiny-life/assets/js/core/popper.min.js'></script>
  <script src='themes/destiny-life/assets/js/core/bootstrap.min.js'></script>
  <script src='themes/destiny-life/assets/js/plugins/perfect-scrollbar.jquery.min.js'></script>
  <script src='themes/destiny-life/assets/js/plugins/chartjs.min.js'></script>
  <script src='themes/destiny-life/assets/js/plugins/bootstrap-notify.js'></script>
  <script src='themes/destiny-life/assets/js/now-ui-dashboard.min.js?v=1.5.0' type='text/javascript'></script>
  <script src='themes/destiny-life/assets/site/site.js'></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/sites.js
      site.initDashboardPageCharts();

    });
  </script>
</body>
</html>";   
}
?>