<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hotel Anupam | Best hotel in Mahabaleshwar</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- scroll animation -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
<link rel="stylesheet" href="assets/loader.css" />

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="assets/style.css">

</head>
<style>
  .navbar-header h1 a{
    font-size: xx-large !important;
    padding-top: 35px;
  }
  #FoodCarousel img{
    height: 270px !important;

  }
  .row .rooms img {
    height: 500px !important;
  }
  .wowload img{
    width: 550px !important;
    height: 250px;
  }
  .embed-responsive img{
    height: 600px !important;
    width: 700px !important;
  }
  .spinn{
    z-index: 999 !important;
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  background-color: black;
  position: fixed;
  }
  .tourr{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
    margin-bottom: 50px;

  }
  .spinner{
    /* height: 100px !important;
    width: 70px !important; */
  }
  .embed-responsive img{
    background-size: cover !important;
    width: 100% !important;
    height: auto !important;
  }
  </style>
<body onload="show()" id="home">

<!-- loader -->
<div id="spiin" class="spinn">
<div class="spinner">
    <div class="spinnerin"></div>
</div>
</div>

<!-- top  -->
  <!-- <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form> -->
 <!-- top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h1><a class="navbar-brand" href="index.php">Hotel Anupam</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="index.php">Home </a></li>
        <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>        
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
  offset: 400
});
</script>
<script>

function show(){
    var i = document.getElementById("spiin");
    i.style.display = "none";
}

</script>
</html>
