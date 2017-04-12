<?php require (app_path().'/includes/connect.php');

$sql_location = "SELECT * FROM location"; 
$results_location = mysqli_query($conn, $sql_location);
if(!$results_location){
    exit("SQL Error: " . mysqli_error($conn));
}

$sql_field = "SELECT * FROM field"; 
$results_field = mysqli_query($conn, $sql_field);
if(!$results_field){
    exit("SQL Error: " . mysqli_error($conn));
}

$sql_size = "SELECT * FROM size"; 
$results_size = mysqli_query($conn, $sql_size);
if(!$results_size){
    exit("SQL Error: " . mysqli_error($conn));
}

$sql_level = "SELECT * FROM level"; 
$results_level = mysqli_query($conn, $sql_level);
if(!$results_level){
    exit("SQL Error: " . mysqli_error($conn));
}

if(empty($_GET['search'])) {
$search="";
} else {

$search = $_GET['search'];
$sql=$sql . " AND (title LIKE '%" . $search . "%' OR company LIKE '%" . $search . "%' OR location LIKE '%" . $search . "%')" ;

$results = mysqli_query($conn, $sql);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

}
/*
@$location = $_GET['location'];
$sql_location="SELECT location,idlocation FROM location order by location";


$results_location = mysqli_query($conn, $sql_location);
if(!$results_location){
    exit("SQL Error: " . mysqli_error($conn));
}

  //if location is selected, field options will change accordingly
    if(isset($location) and strlen($location) > 0){
    $sql_field="SELECT field FROM field where idfield=$location order by field";
    }else{$sql_field="SELECT field FROM field order by field"; }

    $results_field = mysqli_query($conn, $sql_field);
    if(!$results_field){
    exit("SQL Error: " . mysqli_error($conn));
    }*/

?>

<!DOCTYPE html>
<html>
<head>
  <title>Incubate USC | Home</title>
</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="js/main.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">


  <title> Incubate USC </title>


  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="shortcut icon" type="image/png" href="img/fav.png"/>



    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.js-1.4.2/parallax.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar').css('background-color', 'black');
       } else {
          $('.navbar').css('background-color', 'transparent');
       }
   });
});
  </script>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">
        <img alt="Brand" src="img/logo.png" height="40px;" id="brand">
      </a>
    </div>
  




<ul class="nav navbar-nav navbar-right">

<li><a href="company-jobs">JOBS</a></li>
<li><a href="company-profile">COMPANIES</a></li>
<li><a id="navimg" href=""></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jon Rivera<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>

      </div>


</nav>

<div id="hero"></div>

<div id="startchange" ></div>

<div class="container-fluid" id="homehead ">

<h1>Welcome to Incubate USC</h1>
<div id="searchcont">
<form method="get" action="home">
  <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="search" name="search" value="<?=$search?>">

  </div>
</div>

<div class="row">

  
  <div class="dropdown col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Job Location
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    
    <?php while ($row_location = mysqli_fetch_array($results_location)): ?>

      <li><a><?=$row_location['location']?></a></li>

    <?php endwhile; ?>
  
  </ul>
</div>

<div class="dropdown col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Job Level
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php while ($row_level = mysqli_fetch_array($results_level)): ?>

      <li><a><?=$row_level['level']?></a></li>

    <?php endwhile; ?>
  </ul>
</div>

<div class="dropdown col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Company Size
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php while ($row_size = mysqli_fetch_array($results_size)): ?>

      <li><a><?=$row_size['size']?></a></li>

    <?php endwhile; ?>
  </ul>
</div>

<div class="dropdown col-lg-3 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Field of interest
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php while ($row_field = mysqli_fetch_array($results_field)): ?>

      <li><a><?=$row_field['field']?></a></li>

    <?php endwhile; ?>
  </ul>
</div>
  

  </div>

</div>

<hr>

<div class="container-fluid" id="homemain">

<div class="row">

<div class="col-sm-12 col-md-10 col-md-offset-1">
  <div class="row">

  <?php while ($row = mysqli_fetch_array($results)): ?>

  <div class="jobcont col-lg-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
  <a  href="profile">
      <div id="jobtitle"><?=$row['company']?></div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle"><?=$row['title']?></div>
      <div id="infolocation"><?=$row['location']?></div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

  <?php endwhile; ?>

  </div>


  </div>

</div>
</div>

<br>
<br>

<div class="container-fluid" id="footer">
  <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <p class="foottitle">ABOUT INCUBATE USC</p>
    <hr>
      <p>We are a passionate group of students, faculty, staff, and partners dedicated to assisting Trojan startup teams be successful.</p>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <p class="foottitle">INCUBATE USC OFFICE</p>
    <hr>
      <p href="">3670 Trousdale Pkwy, Bridge Hall B3D Los Angeles, CA 90089</p>
      <p href="">(424) 888-0872</p>
      <p href="">incubate@usc.edu</p>
      <p href=""> 213.821.3046</p>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <p class="foottitle">BUSINESS HOURS</p>
    <hr>

      <p>We're here on campus weekdays and for big events on the weekend.</p>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <P class="foottitle">INCUBATE USC NEWSLETTER</P>
    <hr>

      <p>Never Miss Another Event on Campus:</p>
    </div>

  </div>


</div>


</body>
</html>