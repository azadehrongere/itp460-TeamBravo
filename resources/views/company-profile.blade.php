
@extends('layouts.master')

@section('title', 'Company Profile')

@section('navigation')
    @parent

@endsection

@section('content')


<div id="prof-comp-hero" class="parallax-window" data-parallax="scroll" data-image-src="../img/campcenter.jpg">
  <div id="complogo"></div>
</div>

<div id="startchange"></div>

<div id="profhead">
	<h1>Welcome to Facebook!</h1>
</div>


<div class="container-fluid">
<div class="row">


<div class="prof-comp-cont col-xs-12 col-sm-8 col-sm-push-4">
<div class="margins">
		<div id="comp-profborder">
		<div id="comp-proftitle">About Facebook</div>
			<div id="profhold">
				<div id="comp-profinfo">
				<p>Facebook is a social networking service and website started in February 2004. It is owned by Facebook, Inc.As of September 2012, Facebook has over one billion active users. Users may make a personal profile, add other users as friends, and send messages. Facebook users must register before using the site. Users may join user groups. These groups can be for a workplace, school or college, or other interest. The name of the service comes from the name for the book given to students at the start of the school year by some universities in the United States. These books help students get to know each other better. Facebook allows any users who say they are at least 13 years old to become users of the website.</p>
        </div>
        <!-- <div id="profimg"></div>-->        
			</div>
		</div>
	</div>
  <div class="margins">
    <div id="comp-profborder">
    <div id="comp-proftitle">Positions</div>
      <div id="profhold">
        <div id="comp-profinfo">
        </div>
        <!-- <div id="profimg"></div>-->        
      </div>
    </div>
  </div>
</div>


<div id="comp-sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8">
<div class="margins">

<div id="sidefavs">

<h3 style="text-align:center; padding: 10px;">Meet USC Alumni from Facebook</h3>

<hr>
  
<input type="text" class="form-control" placeholder="Search">
    

</div>

<div id="alumnisearch">

  <div class="newalumni">
    <div id="alumniimg"></div>
    <a href="">George Lucas</a>
    <p>Role: CEO</p>
    <p>Location: Los Angeles, CA</p>
    <p>Position Since: 2013</p>
  </div>
  

</div>

</div>

</div>

</div>


    
@endsection

