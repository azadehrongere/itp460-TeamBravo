<?php include_once (app_path().'/includes/analyticstracking.php');

?>

@extends('layouts.master')

@section('title', 'Confirm New Job')

@section('navigation')
    @parent


@endsection

@section('content')

<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/fighton.jpg"></div>
  
<div id="complogo-prof"></div>



<div id="startchange"></div>


<div class="container-fluid row" style="text-align: center; color: #A21010; font-size: 250%; padding-top: 20px;">
  <strong>Your company has been successfully submitted!</strong>
</div>

 <div style="width:30%; margin-left:500px">
<a href="http://54.218.101.226/company-profile" type="submit" class="btn btn-primary"> Check out your company profile!</a>
</div>
<br><br>
<div id="confirmParams" class="row">
	<div class="col-sm-5 col-sm-offset-2">
		<p class="subject"><strong>Company Name: </strong></p>
		<p class="subject"><strong>Contact Name: </strong></p> 
		<p class="subject"><strong>Contact Email: </strong></p>
		<p class="subject"><strong>Logo: </strong></p>

	</div>

	<div class="col-sm-5">
		<p class="subject"><strong>Company Description:</strong></p>

	</div>

</div>

<br>
 <div style="width:20%; margin:auto;">
<!-- <a href="login" type="submit" class="btn btn-primary"> Login!</a> -->
</div>

<br>


<br><br>


<hr>



<br>


@endsection
