<?php require (app_path().'/includes/connect.php');

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

echo $sql;
echo "<br> I'm not sure why the results are getting duplicated.. there should only be 2 :( :( -matt";

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
@extends('layouts.master')

@section('title', 'Page Title')

@section('navigation')
    @parent

@endsection

@section('content')


<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/uscschool_2.jpg">

<div id="startchange"></div>

<div id="profhead startchange">
</div>
<br><br>

<div class="container-fluid row" style="text-align: center; color: #990000; font-size: 400%;">
  <strong>Welcome to Incubate USC</strong>
</div>

<div id="searchcont" class="row">
<form method="get" action="home">
  <br><br><br>
  <div class="form-group col-sm-offset-3 col-sm-6">
    <input type="text" class="form-control" placeholder="Search" id="search" name="search" value="<?=$search?>">
  </div>
</form>
</div>

<br><br>
<div class="container">
<div class="row row-centered">

<div class="dropdown col-md-offset-3 col-md-2 col-xs-4">
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

<div class="dropdown col-md-2 col-xs-4">
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

<div class="dropdown col-md-2 col-xs-4">
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

</div>


<hr>

<div class="container-fluid" id="homemain">

<div class="row">

<div class="col-sm-12 col-md-10 col-md-offset-1">
  <div class="row">

  <?php while ($row = mysqli_fetch_array($results)): ?>

  <div class="jobcont col-lg-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
  <a  href="jobs?jobID=<?=$row['jobID']?>">
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


@endsection