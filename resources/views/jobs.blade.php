<?php require (app_path().'/includes/connect.php');

include_once (app_path().'/includes/analyticstracking.php');

if(empty($_GET['jobID'])) {
    header('Location: home');
    exit;
}
$jobID = $_GET['jobID'];

$sql=$sql . " AND job.jobID =" . $jobID;

$results = mysqli_query($conn, $sql);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

$job = mysqli_fetch_array($results);

?>

@extends('layouts.master')

@section('title', 'Jobs')

@section('navigation')
    @parent

@endsection

@section('content')

<div id="prof-comp-hero">
  <div id="complogo"></div>
</div>

<div id="profhead">
	<h1><?=$job['title']?></h1>
</div>

<div id="startchange" ></div>
<div class="container-fluid">
<div class="row">


<div class="prof-comp-cont col-xs-12 col-sm-8 col-sm-push-4">
<div class="margins">
		<div id="comp-profborder">
		<div id="comp-proftitle"><?=$job['title']?></div>
			<div id="profhold">
				<div id="comp-profinfo">
        <h4>Description</h4>
				<p><?=$job['description']?></p>
        <p><a href="">Connect with XX from <?=$job['name']?></a> <!--link to email--></p>

        <p>It’s customary to send resume and CV to hiring manager.</p>
        <h4>Requirements</h4>
        <p>This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. </p>
        </div>
        <!-- <div id="profimg"></div>-->        
			</div>
		</div>
	</div>
  <div class="margins">
    <div id="comp-profborder">
    <div id="comp-proftitle">Positions</div>
      <div id="profhold">
        <div id="comp-profinfo">
        </div>
        <!-- <div id="profimg"></div>-->        
      </div>
    </div>
  </div>
</div>


<div id="comp-sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8">
<div class="margins">

  <div id="sidefavs">

    <!--<div id="complogo"></div> --> 
    

  </div>



  
    <p><?=$job['name']?><br><?=$job['companyDescription']?></p>
    




</div>

</div>





@endsection

</body>
</html>