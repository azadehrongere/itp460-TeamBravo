<?php require (app_path().'/includes/studentsearch.php');

include_once (app_path().'/includes/analyticstracking.php');

// $sql=$sql . " AND users.companyOrNot = 1";

// $sql_field = "SELECT * FROM field"; 
// $results_field = mysqli_query($conn, $sql_field);
// if(!$results_field){
//     exit("SQL Error: " . mysqli_error($conn));
// }

// $sql_size = "SELECT * FROM size"; 
// $results_size = mysqli_query($conn, $sql_size);
// if(!$results_size){
//     exit("SQL Error: " . mysqli_error($conn));
// }

// $sql_level = "SELECT * FROM level"; 
// $results_level = mysqli_query($conn, $sql_level);
// if(!$results_level){
//     exit("SQL Error: " . mysqli_error($conn));
// }

// if(empty($_GET['search'])) {
// $search="";
// } else {

// $search = $_GET['search'];
// $sql=$sql . " AND (title LIKE '%" . $search . "%' OR name LIKE '%" . $search . "%' OR location LIKE '%" . $search . "%')" ;
// }

// if(empty($_GET['levelID'])) {
// $levelID="";
// } else {
// $levelID = $_GET['levelID'];
// $sql=$sql . " AND job.foreign_levelID = " . $levelID;
// }

// if(empty($_GET['sizeID'])) {
// $sizeID="";
// } else {
// $sizeID = $_GET['sizeID'];
// $sql=$sql . " AND job.foreign_sizeID = " . $sizeID;
// }

// if(empty($_GET['fieldID'])) {
// $fieldID="";
// } else {
// $fieldID = $_GET['fieldID'];
// $sql=$sql . " AND job.foreign_fieldID = " . $fieldID;
// }

// $results = mysqli_query($conn, $sql);
// if(!$results){
//     exit("SQL Error: " . mysqli_error($conn));
// }

// $results_per_page = 12;
// if(!empty($_GET['page'])) {
//   $page_num = $_GET['page'];
// }

// $num_results = mysqli_num_rows($results);
// $first_page = 1;
// $last_page = ceil($num_results / $results_per_page);
// # of pages = Ceiling of: Total # of results / # of results per page

// if(empty($page_num)){
//     $page_num = $first_page;
// } else {
//     if($page_num < $first_page){
//         $page_num = $first_page;
//     } elseif($page_num > $last_page){
//         $page_num = $last_page;
//     }
// }

// $start_index = ($page_num - 1) * $results_per_page;
// $sql = $sql . " LIMIT $start_index, $results_per_page";

// $results = mysqli_query($conn, $sql);
// if(!$results){
//     exit("SQL Error: " . mysqli_error($conn));
// }


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

@section('title', 'Home')

@section('navigation')
    @parent

@endsection

@section('content')


<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/uscschool_2.jpg">

<div id="startchange"></div>
</div>


<div  style="text-align: center; color: #A21010; font-size: 350%; padding-top:10px;">
  <strong>Search for Your Early Stage Employer</strong>
</div>

<div id="searchcont" class="row">




<form method="get" action="home">
  <br>
  <div class="form-group col-sm-offset-3 col-sm-6">
    <input type="text" class="form-control" placeholder="Search" id="search" name="search" value="<?=$search?>">
  </div>
</form>
</div>


<div class="container">
<div class="row row-centered">

<div class="dropdown col-md-offset-3 col-md-2 col-xs-4">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownLevel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

    Major
  
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
{{--     <?php while ($row_level = mysqli_fetch_array($results_level)): ?>

      <li><a onclick="level(<?=$row_level['levelID']?>)" class="pointer"><?=$row_level['level']?></a></li>

    <?php endwhile; ?> --}}
  </ul>
</div>

<div class="dropdown col-md-2 col-xs-4">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownSize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Graduating Semester
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
{{--     <?php while ($row_size = mysqli_fetch_array($results_size)): ?>

      <li><a onclick='size(<?=$row_size['sizeID']?>)' class="pointer"><?=$row_size['size']?></a></li>

    <?php endwhile; ?> --}}
  </ul>
</div>

{{-- <div class="dropdown col-md-2 col-xs-4">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownField" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Field of interest
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1"> --}}
{{--     <?php while ($row_field = mysqli_fetch_array($results_field)): ?>

      <li><a onclick='field(<?=$row_field['fieldID']?>)' class="pointer"><?=$row_field['field']?></a></li>

    <?php endwhile; ?> --}}
{{--   </ul>

</div> --}}

  </div>
  </div>

</div>

<hr>

<div class="container-fluid" id="homemain">

<div class="col-sm-12 col-md-10 col-md-offset-1">
  <div class="row">

 {{--  <?php while ($row = mysqli_fetch_array($results)): ?> --}}

  <div class="col-lg-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
  <div class="jobcont">
      <div id="jobtitle">{{-- <?=$row['name']?> --}}</div>
      <hr>
        <a  href="{{-- jobs?jobID=<?=$row['jobID']?> --}}">
    <div id="jobinfo">
      <div id="infotitle">{{-- <?=$row['title']?> --}}</div>
      <div id="infolocation">{{-- <?=$row['location']?> --}}</div>
    </div>
    <div id="jobimg"></div>    </a>

    </div>
  </div>

 {{--  <?php endwhile; ?> --}}

  </div>

  <div class="row">

{{-- <?php

if($num_results > 12) {

  echo '<ul class="pagination">';

    if ($page_num > $first_page) {
        ?>
        <li><a onclick='page(<?=$first_page?>)' class="pointer">
            First</a></li>
        <li><a onclick='page(<?=$page_num - 1?>)' class="pointer">
            Previous</a></li>
        <?php
    }
    ?>

    <?php

    echo '<li><a>';
    echo $page_num;
    echo '</a></li>';

    ?>

    <?php
    if ($page_num < $last_page) {
        ?>
        <li><a onclick='page(<?=$page_num + 1?>)' class="pointer">Next
            </a></li>
        <li><a onclick='page(<?=$last_page?>)' class="pointer">Last
            </a></li>
        <?php
    }

echo '</ul>';

}
?> --}}

  </div>


  </div>

</div>

<br>
<br>


@endsection