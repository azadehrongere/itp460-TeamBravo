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

<form id="jobForm" action="confirmnewjob" method="get">


   <div class="col-md-5 col-sm-offset-1 col-xs-10">
      
  <label for="jobTitle">Name</label>
    <input type="jobTitle" class="form-control" id="jobTitle">
    <br>

    <label for="exampleInputFile">Headshot</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Attach your professional photo here!</small>


    <br>
  </div>

    <div class="col-md-5 col-sm-offset-1 col-xs-10">
      
  <label for="locationSelect">Graduating Semester</label>
    <select class="form-control" id="locationSelect">
      <option>Winter 2017</option>
      <option>Spring 2018</option>
      <option>Winter 2018</option>
      <option>Spring 2019</option>
      <option>Winter 2019</option>
      <option>Spring 2020</option>
      <option>Winter 2020</option>
      <option>Spring 2021</option>
      <option>Winter 2021</option>
    </select>

    <br>

     <label for="locationSelect">Degree Level</label>
    <select class="form-control" id="locationSelect">
      <option>Undergraduate</option>
      <option>Graduate</option>
    </select>

    <br>
  </div>

<br><br><br>


   <div class="col-xs-3 col-sm-offset-1 col-xs-5">
    <div class="newMajor">  
     <label for="major">Major</label>
    <input type="major" class="form-control" id="major">
    <br>

  </div>

   </div>


  <div class="btn-group">
    <button id="myButton" type="button" class="btn-default btn" aria-label="Left Align" onclick="addMajor()">
      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
    </button>
   </div> 



</div>
<br><br>

<script type="text/javascript">

  function addMajor(argument) {
     var NumberOfMajors = 2;
     var html = '<div class="newMajor" style="display:none;">';
     html += '<label for="major">Major</label><input type="major" name="major[major'+NumberOfMajors+'][major]"class="form-control" id="major"><br>';
     html+= "</div>";
     
    NumberOfMajors += 1;
      $("div.newMajor").append(html);
      $("div.newMajor:last-child").toggle('slow', function() {
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