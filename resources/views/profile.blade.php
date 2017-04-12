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

<h2 style="text-align:center;">Hey, NAME! Search your favorite jobs</h2>


<br>
  
<input type="text" class="form-control" style="width: 400px; margin:auto;"placeholder="Search">
    <br><hr>  
    <br><br>

</div>
</div>



</div>


<div id="comp-sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8" style:"background: white;">
    <div class="margins">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 400px;">
    Edit Profile
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

<div class="proftxt" id="profname">Name:</div>
      <div class="proftxt" id="profmajor">Major(s):</div>
      <div class="proftxt" id="profminor">Minor(s):</div>
</div>

</div>

@endsection
