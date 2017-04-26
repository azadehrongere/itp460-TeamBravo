<?php include_once (app_path().'/includes/analyticstracking.php');

require (app_path().'/includes/companyprofile.php');

if(empty($_GET['profileID'])) {
$profileID = '1';
} else {
$profileID = $_GET['profileID'];
$sql=$sql . " AND users.id =" . $profileID;
}

$results = mysqli_query($conn, $sql);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

$company = mysqli_fetch_array($results);

$sql_jobs = "SELECT *
    FROM job, users
    WHERE users.companyOrNot = 1
    AND job.foreign_companyID = users.id
    AND job.foreign_companyID =" . $profileID;

$results_jobs = mysqli_query($conn, $sql_jobs);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

?>

@extends('layouts.master')

@section('title', 'Company Profile')

@section('navigation')
    @parent

@endsection

@section('content')


<div id="profhero" style="display: flex;" class="parallax-window" data-parallax="scroll" data-image-src="../img/genericbanner.jpg">
  <div id="complogo"></div>
</div>

<div id="startchange"></div>

<div id="profhead">
	<h1>Welcome to <?=$company['name']?>!</h1>
</div>


<div class="container-fluid">
<div class="row">


<div class="prof-comp-cont col-xs-12 col-sm-8 col-sm-push-4">
<div class="margins">
		<div id="comp-profborder">
		<div id="comp-proftitle">About <?=$company['name']?></div>
			<div id="profhold">
				<div id="comp-profinfo">
				<p><?=$company['companyDescription']?></p>
        </div>
        <!-- <div id="profimg"></div>-->        
			</div>
		</div>
	</div>
  <div class="margins">
    <div id="comp-profborder">
    <div id="comp-proftitle">Positions</div>
      <div id="profhold">
        <div id="comp-profinfo"><br>

  <?php while ($row = mysqli_fetch_array($results_jobs)): ?>

  <div class="col-lg-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
  <div class="jobcont">
      <hr>
        <a  href="jobs?jobID=<?=$row['jobID']?>">
    <div id="jobinfo">
      <div id="infotitle"><?=$row['title']?></div>
      <div id="infolocation"><?=$row['location']?></div>
    </div>
    <div id="jobimg"></div>   </a>

    </div>
  </div>

  <?php endwhile; ?>

        </div> <div style="clear:both;"></div>
        <!-- <div id="profimg"></div>-->        
      </div>
    </div>
  </div>
</div>


<div id="comp-sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8">
<div class="margins">

<div id="sidefavs">

<h3 style="text-align:center; padding: 10px;">Meet USC Alumni from <?=$company['name']?></h3>

<hr>
  
<input type="text" class="form-control" placeholder="Search">
    

</div>

<div id="alumnisearch">

  <div class="newalumni">
    <div id="alumniimg"></div>
    <a href="">George Lucas</a>
    <p>Role: CEO</p>
    <p>Location: Los Angeles, CA</p>
    <p>Position Since: 2013</p>
  </div>
  

</div>

</div>

</div>

</div>
    
@endsection

