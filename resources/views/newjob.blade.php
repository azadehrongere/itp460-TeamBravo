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

?>

@extends('layouts.master')

@section('title', 'Page Title')

@section('navigation')
    @parent

<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/addajob.jpg">
	
<div id="complogo-prof"></div>

</div>

<div id="startchange"></div>


<br><br>

<div id="formContainer" style="padding-left:50px; padding-right:50px;">

{{ Form::open(array('url' => 'confirmnewjob')) }}

   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      
  <label for="jobTitle">Job Title</label>
    <input type="jobTitle" class="form-control" id="jobTitle" name="title">
    <br>

    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Add a picture of the posted job here! This can be an office space photo or team picture.</small>

    <br>
  </div>

  <div id="right" class="col-md-5 col-xs-10">
       <label for="exampleTextarea">Job Description</label>
    <textarea class="form-control" id="exampleTextarea" rows="7" placeholder="Write the job summary, preferred majors, required experience, salary, etc. here" name="description"></textarea>
    <br>
  <br><br>
  </div>


   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      <label for="locationSelect">Location</label>
    <input type="jobLocation" class="form-control" id="jobLocation" name="location">

    <br>
      <label for="jobLevel">Job Level</label>
    <select class="form-control" id="jobLevel" name="jobID">
            <?php
            while ($row = mysqli_fetch_array ($results_level)){
                echo "<option value='" . $row['levelID'] . "'>" . $row['level'] . "</option>";}

            ?>
    </select>
  </div>
 <br>
<div id="right" class="col-md-5 col-xs-10">
       <label for="companySize">Company Size</label>
    <select class="form-control" id="companySize" name="sizeID">
            <?php
            while ($row = mysqli_fetch_array ($results_size)){
                echo "<option value='" . $row['sizeID'] . "'>" . $row['size'] . " employees</option>";}

            ?>
    </select>
    <br>
    <label for="field">Field</label>
    <select class="form-control" id="field" name="fieldID">
            <?php
            while ($row = mysqli_fetch_array ($results_field)){
                echo "<option value='" . $row['fieldID'] . "'>" . $row['field'] . "</option>";}

            ?>
    </select> 
  <br><br><br>
  </div>

  <div class="form-group">
    
  </div>
 
 <div style="width:30%; margin: auto">
  <button type="submit" form="jobForm" class="btn btn-primary" value="Submit">Submit</button>
{{ Form::close() }}
</div>


  <br><br>


@endsection

@section('content')

@endsection