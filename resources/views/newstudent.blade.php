<?php include_once (app_path().'/includes/analyticstracking.php');

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

<div id="formContainer">

<form id="newstudent" action="confirmnewstudent" method="get">
  <div class="row">
       <div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-xs-10">

          
      <label for="jobTitle">Name</label>
        <input type="jobTitle" class="form-control" id="jobTitle" required>
        <br>

        <label for="exampleInputFile">Headshot</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Attach your professional photo here!</small>


        <br><br>

          <div class="newMajor">  
            <label for="major">Major</label>
            <input type="major" class="form-control" id="major">
            <br>

          </div>


          <div class="btn-group">
            <button id="myButton" type="button" class="btn-default btn" aria-label="Left Align" onclick="addMajor()">
              <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </button>
           </div> 

      </div>  
    <div class="col-md-5 col-md-offset-0 col-xs-offset-1 col-xs-10">

      
      <label for="locationSelect">Graduating Semester</label>
        <select class="form-control" id="locationSelect">
          <option>Fall 2017</option>
          <option>Spring 2018</option>
          <option>Fall 2018</option>
          <option>Spring 2019</option>
          <option>Fall 2019</option>
          <option>Spring 2020</option>
          <option>Fall 2020</option>
          <option>Spring 2021</option>
          <option>Fall 2021</option>
        </select>

        <br>

         <label for="locationSelect">Degree Level</label>
        <select class="form-control" id="locationSelect">
          <option>Undergraduate</option>
          <option>Graduate</option>
        </select>

        <br>


      <div class="newMinor">  
         <label for="minor">Minor</label>
        <input type="minor" class="form-control" id="minor">
        <br>

      </div>


      <div class="btn-group">
        <button id="myButton" type="button" class="btn-default btn" aria-label="Left Align" onclick="addMinor()">
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
        </button>
       </div> 

  </div>

  
  </div> <!-- end row -->

</div>

<br><br>



  <div style="text-align:center">
<h1><strong>Add Experiences</strong></h1>
</div>

<br>

<div id="formContainer">
        <div class="newExperience"> 
  <div class="row">
    <div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-xs-10">   
      <label for="jobName">Title</label>
        <input type="jobName" class="form-control" id="jobName">
        <br>

        <label for="companyName">Company</label>
        <input type="companyName" class="form-control" id="companyName">
        <br>

        <label for="locationName">Location</label>
        <input type="locationName" class="form-control" id="locationName">
        <br>


        <br><br>

      </div>

    <div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-xs-10">
      <br><br>
      <label for="startDate"> Start Date: </label>
        <input type="date" name="startDate">
      <br><br><br><br><br>

      <label for="endDate">End Date:</label>
        <input type="date" name="endDate">
      <br>

      </div>
    </div>
  <div class="row">
    <div class="col-md-10 col-xs-offset-1 col-md-offset-1 col-xs-10 col-lg-offset-1 col-lg-10">

        <label for="experienceDescription">Describe your Experience</label>
        <textarea class="form-control" id="companyDescription" rows="7" placeholder="Write about your experiences, responsibilities, projects, etc."></textarea>

         

    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-xs-10"> 
<div class="btn-group">
        <button id="myButton" type="button" class="btn-default btn" aria-label="Left Align" onclick="addExperience()">
          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
        </button>
       </div>
       </div>
       </div> 
</div>
</div>

</div>
<script type="text/javascript">

  function addMajor(argument) {
     var NumberOfMajors = 2;
     var html = '<div class="brandNewMajor" style="display:none;"" >';
     html += '<label for="major">Major</label>';
     html += '<input type="text" name="major[major'+NumberOfMajors+'][major]" class="form-control" id="major"><br>';
     html+= "</div>";
     console.log(html);
     
    NumberOfMajors += 1;
      $("div.newMajor").append(html);
      $("div.brandNewMajor:last-child").toggle('slow', function() {
    });;
    
  };
</script>

<script type="text/javascript">

  function addMinor(argument) {
     var NumberOfMinors = 2;
     var html = '<div class="brandNewMinor" style="display:none;"" >';
     html += '<label for="minor">Minor</label>';
     html += '<input type="text" name="minor[minor'+NumberOfMinors+'][minor]" class="form-control" id="minor"><br>';
     html+= "</div>";
     console.log(html);
     
    NumberOfMinors += 1;
      $("div.newMinor").append(html);
      $("div.brandNewMinor:last-child").toggle('slow', function() {
    });;
    
  };
</script>

<script type="text/javascript">

  function addExperience(argument) {
     var NumberOfExperiences= 2;
     var html = '<div class="brandNewExperience" style="display:none;">';
     html += '<div class="row">';
      html += '<div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-xs-10">';
      html += '<br><br> <label for="jobName">Title</label>';
      html += '<input name="jobName[jobName'+NumberOfExperiences+'][jobName]" type="jobName" class="form-control" id="jobName">';
      html += '<br>';
      html += '<label for="companyName">Company</label>';
      html += '<input name="companyName[companyName'+NumberOfExperiences+'][companyName]" type="companyName" class="form-control" id="companyName">';
      html += '<br>';
      html += '<label for="locationName">Location</label>';
      html += '<input name="locationName[locationName'+NumberOfExperiences+'][locationName]" type="locationName" class="form-control" id="locationName">';
      html += '<br>';
      html += '<br><br>';
      html += '</div>';
      html += '<div class="col-md-5 col-md-offset-1 col-xs-offset-1 col-xs-10">';
      html += '<br><br>';
      html += '<label for="startDate"> Start Date: </label>';
      html += '<input name="startDate[startDate'+NumberOfExperiences+'][startDate]" type="date" name="startDate">';
      html += '<br><br><br><br><br>';
      html += '<label for="endDate">End Date:</label>';
      html += '<input name="endDate[endDate'+NumberOfExperiences+'][endDate]" type="date" name="endDate">';
      html += '<br>';
      html += '</div>';
      html += '</div>';
      html += '<div class="row">';
      html += '<div class="col-md-10 col-xs-offset-1 col-md-offset-1 col-xs-10 col-lg-offset-1 col-lg-10">';
      html += '<label name="experienceDescription[experienceDescription'+NumberOfExperiences+'][experienceDescription]" for="experienceDescription">Describe your Experience</label>';
      html += '<textarea class="form-control" id="companyDescription" rows="7" placeholder="Write about your experiences, responsibilities, projects, etc."></textarea>';
      html+= '</div> </div>';
     console.log(html);
     
    NumberOfExperiences += 1;
      $("div.newExperience").append(html);
      $("div.brandNewExperience:last-child").toggle('slow', function() {
    });;
    
  };
</script>



 
 <div style="width:30%; margin: auto">
  <button type="submit" form="jobForm" class="btn btn-primary" value="Submit">Submit</button>
</form>

</div>


  <br><br>


@endsection

@section('content')

@endsection