@extends('layouts.master');

@section('content');
<div id="profhero"></div>

<div id="profhead">
	<h1>Welcome Jon !</h1>
</div>


<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

<div class="profcont">
		<div id="profborder">
		<div id="proftitle">Class of 2017</div>
		<br>
		<br>
		<br>
		<br>
		<br>
			<div id="profhold">
			<div id="profimg"></div>
				<div id="profinfo">
					<div class="proftxt" id="profname">Name:</div>
					<div class="proftxt" id="profemail">Email:</div>
					<div class="proftxt" id="profjob">Current Jobs:</div>
					<div class="proftxt" id="profmajor">Majors:</div>
					<div class="proftxt" id="profminor">Minors:</div>
				</div>
			</div>
		</div>
	</div>


	<div class="profcont">
		<div id="profborder">
			<div id="proftitle">Education</div>
				<div id="profhold">
					<div id="profinfo">
						<div class="proftxt" id="profname">Name:</div>
						<div class="proftxt" id="profemail">Email:</div>
						<div class="proftxt" id="profjob">Current Jobs:</div>
						<div class="proftxt" id="profmajor">Majors:</div>
						<div class="proftxt" id="profminor">Minors:</div>
					</div>
				</div>
		</div>
	</div>

	<div class="profcont">
		<div id="profborder">
			<div id="proftitle">Experience</div>
				<div id="profhold">
					<div id="profinfo">
						<div class="proftxt" id="profname">Name:</div>
						<div class="proftxt" id="profemail">Email:</div>
						<div class="proftxt" id="profjob">Current Jobs:</div>
						<div class="proftxt" id="profmajor">Majors:</div>
						<div class="proftxt" id="profminor">Minors:</div>
					</div>
				</div>
		</div>
	</div>

</div>



<div id="sidebar" class="col-lg-1 col-md-1 col-sm-12 col-xs-12">


<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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


<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Upload Resume 
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

<div id="sidefavs">

<h1>View your Favorite Jobs</h1>
	
<input type="text" class="form-control" placeholder="Search">
    

</div>

</div>
</div>
</div>
@endsection;