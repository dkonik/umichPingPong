<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BBB Ping Pong</title>

    <!-- Add to homescreen for Chrome on Android 
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">
    

     Add to homescreen for Safari on iOS
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

     Tile icon for Win8 (144x144 + tile color)
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">
  -->

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
  -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.teal-red.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="mdl-jquery-modal-dialog.css">
	<script src="mdl-jquery-modal-dialog.js"></script>
  <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
  </style>
</head>
<body>
  <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
    <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">BBB Ping Pong</span>
        <div class="mdl-layout-spacer"></div>
<!-- 
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
        -->
      </div>
    </header>
    <div class="demo-ribbon"></div>
    <main class="demo-main mdl-layout__content">
      <div class="demo-container mdl-grid">
        <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
        <div class="demo-content centerText mdl-color--grey mdl-shadow--8dp content mdl-cell mdl-cell--8-col">
       		<?php
       			$stored = apc_fetch("currRequest");
       			if(!$stored || $stored == 0){
       				echo '<h1>No one is currently looking for a partner.</h1>
       				<button onclick="makeRequest()" class="center mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Request Partner</button>';
       			}
       			else{
       				echo "<h1> Hi</h1>";
       			}
       		?>
        </div>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  </body>
  </html>
  
<script>
  function makeRequest() {
  	/*$.post("makeRequest.php", {
  			email: "John"
  		})
  		.done(function(data) {
  			alert("Data Loaded: " + data);
  		}); */
		showDialog({
			title: 'Enter email (must be a umich.edu)',
			text: 'You will receive an email if someone accepts your request in the next 10 minutes. After 10 minutes, your request will become inactive.',
      type: "prompt"
		});
  } 
</script>
