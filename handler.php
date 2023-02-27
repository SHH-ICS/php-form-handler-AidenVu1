<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="susicon" sizes="180x180" href="./favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./images/site.webmanifest">
    <title>Page Title</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>
    
  </body>
  
</html>
