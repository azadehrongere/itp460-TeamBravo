<?php include_once (app_path().'/includes/analyticstracking.php');

?>

@extends('layouts.master')

@section('title', 'Profile')

@section('navigation')
    @parent

@endsection

@section('content')


<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/welcome.jpg">
	
  <div id="complogo-prof"></div>

</div>

<div id="startchange"></div>


<div id="startchange" class="container-fluid">
  <div class="row">


    <div class="prof-comp-cont col-xs-12 col-sm-8 col-sm-push-4">

      <div class="margins">
        <div id="sidefavs">

        <div>
        <button class="btn btn-primary" type="button" style="width: 400px;">
        Edit Profile
        </button>
        </div>

      <!--div class="proftxt" id="profname">Name:</div>-->
        <div>
          <div class="col-md-2 col-sm-offset-1 col-xs-10"><br>
            <img src="#"> <!-- insert image -->
          </div>  
          <div id="right" class="col-md-8 col-xs-10"><br>
            <label for="profname" id="profname">Name:</label><br>
            <label for="profmajor" id="profmajor">Major(s):</label><br>
            <label for="profminor" id="profminor">Minor(s):</label><br>
            <label for="profsemester" id="profsemester">Graduating Semester:</label><br>
            <label for="profdegree" id="profdegree">Degree Level:</label><br>
            <br>
          </div>
        </div>

        <div>
        <h1 style="text-align:left"><strong>Experiences</strong></h1>
        </div>

        <div>
          <label></label>
        </div>

<!--<h2 style="text-align:center;">Hey, NAME! Search your favorite jobs</h2>

<br>
  
<input type="text" class="form-control" style="width: 400px; margin:auto;"placeholder="Search">
    <br><hr>  
    <br><br>-->

        </div>
      </div>
    </div>


<div id="comp-sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8" style:"background: white;">
    <div class="margins">

      <label for="favorites">Favorites</label>
  
  </div>

</div>

@endsection
