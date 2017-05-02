<?php include_once (app_path().'/includes/analyticstracking.php');

require (app_path().'/includes/studentsearch.php');

if(Session::get('company') == true && (empty($_GET['profileID']))) {
  header('Location: home');
  exit;
} elseif (Session::get('company') == true && (!empty($_GET['profileID']))) {

} elseif(empty($_GET['profileID']) || $_GET['profileID'] != Session::get('id')) {
    header('Location: profile?profileID=' . Session::get('id'));
    exit; 
}

$profileID = $_GET['profileID'];
$sql=$sql . " AND users.id =" . $profileID;

$results = mysqli_query($conn, $sql);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

$profile = mysqli_fetch_array($results);

  $sql_major = "SELECT *
    FROM major
    WHERE foreign_usersID=" . $profileID;

  $results_major = mysqli_query($conn, $sql_major);
  if(!$results){
      exit("SQL Error: " . mysqli_error($conn));
  }

  $sql_minor = "SELECT *
  FROM minor
  WHERE foreign_usersID=" . $profileID;

  $results_minor = mysqli_query($conn, $sql_minor);
  if(!$results){
      exit("SQL Error: " . mysqli_error($conn));
  }

  $sql_experience = "SELECT *
  FROM experience
  WHERE foreign_usersID=" . $profileID;

  $results_experience = mysqli_query($conn, $sql_experience);
  if(!$results){
      exit("SQL Error: " . mysqli_error($conn));
  }

  $sql_projects = "SELECT *
  FROM projects
  WHERE foreign_usersID=" . $profileID;

  $results_projects = mysqli_query($conn, $sql_projects);
  if(!$results){
      exit("SQL Error: " . mysqli_error($conn));
  }

  $sql_favorites = "SELECT *
  FROM users, job, favorites
  WHERE favorites.foreign_jobID = job.jobID
  AND favorites.foreign_jobID = job.jobID
  AND job.foreign_companyID = users.id
  AND foreign_usersID=" . $profileID;

  $results_favorites = mysqli_query($conn, $sql_favorites);
  if(!$results){
      exit("SQL Error: " . mysqli_error($conn));
  }

?>

@extends('layouts.master')

@section('title', 'Profile')

@section('navigation')
    @parent

@endsection

@section('content')


<div id="profhero" class="parallax-window" data-parallax="scroll" data-image-src="../img/profileheader.jpg">
	
  <div id="complogo-prof"></div>

</div>


<div id="startchange"></div>

<div id="startchange" class="container-fluid">
  <div class="row" style="font-size:16px">
    <div id="test" class="prof-comp-cont col-xs-12 col-sm-8 col-sm-push-4" style="margin-top: 20px">
      
      <a href="editprofile?profileID=<?=$profile['id']?>">

<?php 

if($_GET['profileID'] == Session::get('id')){
echo "<button class='btn btn-primary' type='submit' style='width: 200px; float: right; margin-top: 12px; margin-bottom: 14px'> Edit Profile </button>";
} 

?>

        </a>

      <div >
        <div id="studentProfile" style="clear: both; background-color: white;">

      <!--div class="proftxt" id="profname">Name:</div>-->
        <div  class="row" style="text: 150%">
          <div class="col-md-2 col-sm-offset-1 col-xs-10"><br>
            <img src="#"> <!-- insert image -->
          </div>  
          <div id="right" class="col-md-4 col-xs-10"><br>
            <div for="profname" id="profname"><strong>Name: </strong><?=$profile['name']?></div>
            <div for="profmajor" id="profmajor"><strong>Major(s):</strong> 

            <?php while ($major = mysqli_fetch_array($results_major)): ?>
            <?=$major['major']?><br>
            <?php endwhile; ?>

            </div>

            <div for="profminor" id="profminor"><strong>Minor(s):</strong> 

            <?php while ($minor = mysqli_fetch_array($results_minor)): ?>
            <?=$minor['minor']?><br>
            <?php endwhile; ?>

            </div>
            <br>
          </div>
           <div id="right" class="col-md-4 col-xs-10"><br>
            <div for="profsemester" id="profsemester"><strong>Graduating Semester:</strong> <?=$profile['graduatingSemester']?></div>
            <div for="profdegree" id="profdegree"><strong>Degree Level: </strong><?=$profile['studentDegree']?></div><br>
            <div for="profdegree" id="profLinkedIn"><a href="<?=$profile['linkedinURL']?>" target="_blank"><strong style="color: #990000"><u>LinkedIn Profile</u></strong></a></div>
            <br>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-sm-offset-1 "><br>
        <h3 style="color: #990000"><strong>Experiences</strong></h3><br>
      </div>
    </div>

    <?php while ($experience = mysqli_fetch_array($results_experience)): ?>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-1">
            <div id="jobName"><strong>Title:</strong> <?=$experience['title']?></div>
            <div id="companyName"><strong>Company:</strong> <?=$experience['company']?></div> 
            <div id="locationName"><strong>Location:</strong> <?=$experience['location']?></div>
         </div>
          <div class="col-sm-5">
              <div id="startDate"><strong>Start Date:</strong> <?=$experience['startDate']?></div>
              <div id="endDate"><strong>End Date:</strong> <?=$experience['endDate']?></div>
          </div> 
        </div> <br>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-1">
            <div id="companyDescription"><strong>Description:</strong> <?=$experience['description']?></div><br><hr>
          </div>
        </div> <br>

    <?php endwhile; ?>

        <div class="row">
          <div class="col-md-12 col-sm-offset-1 "><br>
           <h3 style="color: #990000"><strong>Projects</strong></h3><br>
          </div>
        </div>

    <?php while ($projects = mysqli_fetch_array($results_projects)): ?>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-1">
            <div id="projectName"><strong>Title:</strong> <?=$projects['title']?></div>
         </div>
          <div class="col-sm-5">
              <div id="projectLink"><a href="<?=$projects['link']?>" target="_blank"><strong style="color: #990000"><u>Project Link</u></strong> </a></div>
          </div> 
        </div> <br>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-1">
            <div id="project Description"><strong>Description:</strong> <?=$projects['description']?></div><br><hr>
          </div>
        </div> <br>

    <?php endwhile; ?>

        <br>

            
    
          

        <div>
          <label></label>
        </div>

<!--<h2 style="text-align:center;">Hey, NAME! Search your favorite jobs</h2>

<br>
  
<input type="text" class="form-control" style="width: 400px; margin:auto;"placeholder="Search">
    <br><hr>  
    <br><br>-->

        </div>
      </div>
    </div>




<div class="row">
<div id="comp-sidebar" class="col-xs-12 col-sm-4 col-sm-pull-8">

      <label for="favorites" style=" color: #990000; margin-bottom: 14px"> <h2><strong>Your Favorited Jobs</strong></h2></label>

    <div class="col-lg-10" id= "favorites" style="padding-top: 20px; background-color: white; overflow: scroll;">

    <?php while ($favorites = mysqli_fetch_array($results_favorites)): ?>

      <div style="height: 300px; border-style: solid; border-color: #990000; border-width: 1px; margin-bottom: 10px; padding: 10px; font-size: 20px"> 
        <div id="companyName"><strong><a href="company-profile?profileID=<?=$favorites['id']?>"><?=$favorites['name']?></a></strong></div>
        <hr><a href="jobs?jobID=<?=$favorites['jobID']?>">
       <div id="job" style="text-align: center;">
        <?=$favorites['title']?>
        </div>
        <div id="location" style="text-align: center; font-size: 13px; padding-bottom: 5px;">
        <?=$favorites['location']?>
        </div>
        <div id="jobimg"></div> </a>
      </div>

    <?php endwhile; ?>

    </div>
  </div>
</div>
<br>

<script type="text/javascript">
  
  $(document).ready(function(){
    var height = $("div#test").css('height');
    console.log(height);
    console.log($("#favorites"));
    $("#comp-sidebar").height(height);
  });

</script>

@endsection
