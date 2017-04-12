@extends('layouts.master')

@section('title', 'New Company')

@section('navigation')
    @parent

@endsection

@section('content')

<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/fighton.jpg">
  
<div id="complogo-prof"></div>

</div>

<div id="startchange"></div>
<br><br>

<!-- <div class="vertical-line" style="height: 45px;"/>
 -->
<form id="companyForm" action="confirmnewcompany" method="get" class="row">

<!-- style="position:relative;"> -->
    <!-- <div id="left" style="margin-left:100px; width:570PX;"> -->
  <div class="col-md-5 col-sm-offset-1 col-xs-10">
      <label for="companyName">Company Name</label>
      <input type="companyName" class="form-control" id="companyName" style="width:100%">
    <br>
      <label for="contactName">Contact Name</label>
      <input type="contactName" class="form-control" id="contactName" style="width:100%">
    <br>
      <label for="contactEmail">Contact Email</label>
      <input type="contactEmail" class="form-control" id="contactEmail" style="width:100%">
    <br>
  </div>



   <!-- <div id="right" style="margin-right:100px; position:absolute;width:570px;right:0;top:0;"> -->
  <div id="right" class="col-md-5 col-xs-10">
      <label for="">Password</label>
      <input type="password" style="width:100%" class="form-control" id="password" placeholder="Enter your password.">
    <br>
      <label for="">Confirm Password</label>
      <input type="password" style="width:100%" class="form-control" id="confirmPassword" placeholder="Confirm your password.">
    <br>
  </div>

</form>

<div class="row">
  <div id="formContainer" class="col-sm-offset-1 col-xs-10">

    <div class="form-group">
      <label for="exampleInputFile">Logo</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Upload your company logo with a size of 80x80 pixels.</small>
    </div>
  <br>
    <div class="form-group">
      <label for="companyDescription">Company Description</label>
      <textarea class="form-control" id="companyDescription" rows="7" placeholder="Write about your business, company culture, headquarters, etc."></textarea>

    </div>

<br><br>
  <div id="profhead startchange">
    <h1>Add Trojans!</h1>
  </div>
<br><br>


  <div class="newTrojan">
    <div class="form-group">
      <label for="trojanName">Trojan's Name</label>
      <input type="trojanName" class="form-control" id="trojanName">
    </div>

   <div class="form-group">
      <label for="trojanTitle">Trojan's Title</label>
      <input type="trojanTitle" class="form-control" id="trojanTitle">
    </div>

    <div class="form-group">
      <label for="trojanHeadshot">Picture</label>
      <input type="file" class="form-control-file" id="trojanHeadshot" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">Upload the Trojan's headshot!</small>
    </div>
  </div>


  <div class="btn-group">
    <button id="myButton" type="button" class="btn-default btn" aria-label="Left Align" onclick="addTrojan()">
      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
    </button>
   </div> 



</div>
  <br><br>

 <div style="width:30%; margin: auto">
  <button type="submit" form="companyForm" class="btn btn-primary" value="Submit">Submit</button>

</div>

<br><br>

<script type="text/javascript">

  function addTrojan(argument) {
     var NumberOfTrojans = 2;
     var html = '<div class="brandNewTrojan" style="display:none;">';
     html += '<div class="form-group"><br><br><label for="trojanName">Trojan\'s Name</label><input type="trojanName" name="trojan[trojan'+NumberOfTrojans+'][name]" class="form-control" id="trojanName"></div><div class="form-group"><label for="trojanTitle">Trojan\'s Title</label><input type="trojanTitle" name="trojan[trojan'+NumberOfTrojans+'][title]" class="form-control" id="trojanTitle"></div><div class="form-group"><label for="trojanHeadshot">Picture</label><input type="file" name="trojan[trojan'+NumberOfTrojans+'][headshot]" class="form-control-file" id="trojanHeadshot" aria-describedby="fileHelp"><small id="fileHelp" class="form-text text-muted">Upload the Trojan\'s headshot!</small></div>';
     html+= "</div>";
     
    NumberOfTrojans += 1;
      $("div.newTrojan").append(html);
      $("div.brandNewTrojan:last-child").toggle('slow', function() {
    });;
    
  };
</script>
@endsection
