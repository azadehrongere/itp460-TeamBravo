@extends('layouts.master')

@section('title', 'Confirm New Company')

@section('navigation')
    @parent

@endsection

@section('content')

<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/fighton_2.jpg">
  
<div id="complogo-prof"></div>

</div>

<div id="startchange"></div>

<div class="container-fluid row" style="text-align: center; color: #A21010; font-size: 250%; padding-top: 20px;">
  <strong>Your job has been successfully submitted!</strong>
</div>

<div style="width:30%; margin: auto">
	<a href="jobs?jobID={{$jobID}}" type="submit" class="btn btn-primary"> View your posted job!</a>
</div>

<br><br>
<div id="confirmParams" class="row">
	<div class="col-sm-3 col-sm-offset-2">
		<p class="subject"><strong>Job Title: </strong>{{ $title }}</p>
		<p class="subject"><strong>Size: </strong>{{ $size }}</p> 
		<p class="subject"><strong>Level: </strong>{{ $level }}</p>
		<p class="subject"><strong>Category: </strong>{{ $category }}</p>
		<p class="subject"><strong>Compensation: </strong>{{ $compensation }}</p>
		<p class="subject"><strong>Picture: </strong>{{ $picture }}</p>
		<p class="subject"><strong>Location: </strong>{{ $location }}</p>
	</div>

	<div class="col-sm-3">
		<p class="subject"><strong>Description: </strong>{{ $description }}</p>

	</div>

	<div class="col-sm-3">
		<p class="subject"><strong>Requirement: </strong>{{ $requirement }}</p>

	</div>

</div>

<br>
<br><br>



@endsection