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

{{-- {{ Form::open(array('url' => 'confirmnewjob')) }} --}}
<form id="jobForm" method="post" action="test3">

   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      
  <label for="jobTitle">Job Title</label>
    <input type="jobTitle" class="form-control" id="jobTitle">
    <br>

    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Add a picture of the posted job here! This can be an office space photo or team picture.</small>

    <br>
  </div>

  <div id="right" class="col-md-5 col-xs-10">
       <label for="exampleTextarea">Job Description</label>
    <textarea class="form-control" id="exampleTextarea" rows="7" placeholder="Write the job summary, preferred majors, required experience, salary, etc. here"></textarea>
    <br>
  <br><br>
  </div>


   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      <label for="locationSelect">Location</label>
    <select class="form-control" id="locationSelect">
      <option>Los Angeles</option>
      <option>Santa Monica</option>
      <option>Culver City</option>
      <option>Hollywood</option>
      <option>Beverly Hills</option>
    </select>
    <br>
      <label for="jobLevel">Job Level</label>
    <select class="form-control" id="jobLevel">
      <option>Entry Level</option>
      <option>Mid-Level</option>
      <option>Senior Level</option>
      <option>Internship</option>
      <option>Part-time</option>
    </select>
  </div>
 <br>
<div id="right" class="col-md-5 col-xs-10">
       <label for="companySize">Company Size</label>
    <select class="form-control" id="companySize">
      <option>1-100 employees</option>
      <option>100-1,000 employees</option>
      <option>1,0000-5,0000 employees</option>
      <option>5,000-10,000 employees</option>
      <option>10,000+ employees</option>
    </select>
    <br>
    <label for="field">Field</label>
    <select class="form-control" id="field">
      <option>Engineering</option>
      <option>Marketing</option>
      <option>Finance</option>
      <option>Business</option>
      <option>Technology</option>
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