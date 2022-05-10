
<?php
if(!isset($page_title)) { $page_title='Staff Area'; } 
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MB-<?php echo $page_title; ?></title>
    <link rel="stylesheet" media="all" href="<?php echo 
    url_for('/stylesheets/staff.css');?>" />
  </head>

  <body>
    <header>
        <h1>MB Staff Area</h1> 
    </header>
    
  <navigation>
    <ul>
        <li><a href="<?php echo url_for('staff/index.php');?>">Menu</a></li>
    </ul>  
  </navigation>

 