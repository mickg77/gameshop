<?php
    require('php/connect.php');
    
    
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- local links-->
<script src="js/myjs.js"></script>
<link rel="stylesheet" href="css/styles.css">
<!--end of local links-->
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="panel" id="myAmazingPanel" data-position="left">
     <h2>Panel Header </h2>
         <ul data-role="listview">
           <li><a href="index.php">Home</a></li>
           <li><a href="display.php">Display</a></li>
           <li><a href="add.php">Add</a></li>
           <li><a href="logout.php">Logout</a></li>
         </ul>
  </div>

     <div data-role="header">
        <h1>Games Shop</h1>
        <a href="#myAmazingPanel"  id="barbutton" data-icon="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-bars">Menu </a>

     </div>

     <div data-role="main" class="ui-content">
     <!-- All other content goes in here -->