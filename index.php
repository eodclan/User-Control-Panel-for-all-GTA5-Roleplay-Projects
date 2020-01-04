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
                <p class='category'>User Control Panel</p>
              </div>
              <div class='card-body'>
				<div class='category'>
					Wir bringen das Roleplay auf ein neues Level, mit unserer Realistischen Handhabung, sind uns keine Grenzen gesetzt!
				</div>	
              </div>
            </div>
          </div>
        </div>
      </div>";
site_footer();
?>