<!DOCTYPE html>
<html lang="en">
<head>
  <title>Garbage collector</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/a.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Mzunguko Garbage Collectors</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">List of Garbage Collectors</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>
  <h1 style="text-align:center;">Garbage Collector Admin Panel</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/b.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/a.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/d.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/a.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br />
  <p style="font-size:27px">Please notify one of our garbage collector by clicking the button below.</p>
  <div class="col_3">
          <a href="http://localhost/portal/gateway.php"><button> Notify Garbage Collector</button></a>

        </div>
</div>
</body>
<html>
