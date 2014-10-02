<?php $pages = array( 
        'Home' => 'index.php', 
        'Program' => 'program.php', 
        'Register' => 'https://docs.google.com/forms/d/1eo8K_7ulkLjoCcKfkoCz-Xw1mj80lZISIBYISVoEHns/viewform?c=0&amp;w=1',
        'Directions' => 'directions.php', 
        'Contact' => 'contact.php' ); 
        $script_name = explode( '/', $_SERVER['SCRIPT_NAME'] );
        $script_name = end( $script_name );
        ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OpenML Workshop (III): Eindhoven 2014</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/workshop.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Eindhoven 2014</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php foreach( $pages as $page => $url ): ?>
            <li <?php if( $script_name == $url ) echo 'class="active"'; ?>><a href="<?php echo $url; ?>" <?php if(substr($url, 0, 4) == 'http' ) echo 'target="_blank"';?>><?php echo $page; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
