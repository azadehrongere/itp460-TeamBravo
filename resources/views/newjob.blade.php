<?php include_once (app_path().'/includes/analyticstracking.php');

?>

@extends('layouts.master')

@section('title', 'New Job')

@section('navigation')
    @parent

<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/addajob.jpg">
	
<div id="complogo-prof"></div>

</div>

<div class="container-fluid row" style="text-align: center; color: #A21010; font-size: 250%; padding-top: 20px;">
  <strong>Add a job</strong>
</div>

<div id="startchange"></div>


<br><br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="formContainer" style="padding-left:50px; padding-right:50px;">

{{-- {{ Form::open(array('url' => 'confirmnewjob')) }} --}}
<form id="jobForm" method="post" action="confirmnewjob">

   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      
  <label for="jobTitle">Job Title</label>
    <input type="text" class="form-control" name="jobTitle" id="jobTitle" required>
    <br>

    <label for="exampleInputFile">Cover Photo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" name="jobPicture" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Add a picture of the posted job here! This can be an office space photo or team picture.</small>

    <br>

    <label for="locationSelect">Location</label>
    <input type="text" class="form-control" name="location" id="location" required>
    
  </div>

  <div id="right" class="col-md-5 col-xs-10">
       <label for="exampleTextarea">Role Description</label>
    <textarea class="form-control" name="Description" id="exampleTextarea" rows="4" placeholder="Write the job summary, salary, etc. here" required></textarea>
    <br>
      <label for="exampleTextarea">Role Requirements</label>
    <textarea class="form-control" name="Requirement" id="exampleTextarea" rows="4" placeholder="Write the job preferred majors, required experience, etc. here" required></textarea>
    <br>
  <br><br>
  </div>


   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      
    <label for="compensation">Compensation</label>
    <select class="form-control" name="compensation" id="compensation">
      <!--<option value="Entry Level">Entry Level</option>
      <option value="Mid-Level">Mid-Level</option>
      <option value="Senior Level">Senior Level</option>-->
      <option value="Unpaid">Unpaid</option>
      <option value="Paid">Paid</option>
      <option value="School-credit">School credit</option>
    </select>
    <br>
      <label for="jobLevel">Commitment Level</label>
    <select class="form-control" name="jobLevel" id="jobLevel">
      <!--<option value="Entry Level">Entry Level</option>
      <option value="Mid-Level">Mid-Level</option>
      <option value="Senior Level">Senior Level</option>-->
      <option value="Full-time">Full Time</option>
      <option value="Internship">Internship</option>
      <option value="Part-time">Part-time</option>
      <option>Any</option>
    </select>
  </div>
 <br>
<div id="right" class="col-md-5 col-xs-10">
       <label for="companySize">Company Size</label>
    <select class="form-control" name="size" id="companySize">
      <option value="100">1-100 employees</option>
      <option value="1000">100-1,000 employees</option>
      <option value="5000">1,0000-5,0000 employees</option>
      <option value="10000">>5,000 employees</option>
    </select>
    <br>
    <label for="field">Field</label>
    <select class="form-control" name="category" id="field">
      <option value="Engineering">Engineering</option>
      <option value="Marketing">Marketing</option>
      <option value="Finance">Finance</option>
      <option value="Business">Business</option>
      <option value="Technology">Technology</option>
    </select> 
  <br><br><br>
  </div>

  <div class="form-group">
    
  </div>
 
 <div style="width:30%; margin: auto">
  <button type="submit" form="jobForm" class="btn btn-primary" value="Submit">Submit</button>

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
</div>


  <br><br>


@endsection

@section('content')

@endsection