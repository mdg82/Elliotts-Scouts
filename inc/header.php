<!DOCTYPE html>
<html lang="en">
   
   <head>
	<title><?php echo $pageTitle; ?></title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Elliott's Scouts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">-->
    <link href="css/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
   </head>

   <body>
   <!--Start of Navbar and Header-->
     <nav class="navbar navbar-inverse navbar-fixed-top head-color">
    <header class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-muted" href="index.php">
        <img class="logo" alt="Brand" src="img/logo7c.png"/>
        </a>
    </div>
        <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
            <li class = "home <?php if ($section == "home") { echo "active"; } ?>"><a href="index.php">Home</a></li>
            <li class = "gallery <?php if ($section == "gallery") { echo "active"; } ?>"><a href="gallery.php">Gallery</a></li>
            <li class = "history <?php if ($section == "history") { echo "active"; } ?>"><a href="history.php">History</a></li>
            <li class = "about <?php if ($section == "about") { echo "active"; } ?>"><a href="about.php">About</a></li>
            <li class = "contact <?php if ($section == "contact") { echo "active"; } ?>"><a href="contact.php">Contact</a></li>
          </ul>
    </div>
      </header>
    </nav>
    <!--End of Navbar and Header-->