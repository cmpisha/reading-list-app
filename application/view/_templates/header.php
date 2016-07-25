<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reading List</title>
    <meta name="description" content="">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <!-- logo -->
        <div class="bookmark ">
          <div class="logo">
              <h3>Reading</h3>
              <h1>List</h1>
          </div>
          <img src="<?php echo URL; ?>img/bookmark_end.png" alt="Bookmark Graphic">
        </div>

        <!-- navigation -->
        <div class="navigation">
            <a href="<?php echo URL; ?>">home</a>
            <a href="<?php echo URL; ?>home/exampleone">About</a>
            <a href="<?php echo URL; ?>home/exampletwo">+Add a Song</a>
            <a href="<?php echo URL; ?>songs">Songs</a>
        </div>

      </div>
