<?php require (app_path().'/includes/connect.php');

if(empty($_GET['jobID'])) {
    header('Location: home');
    exit;
}
$jobID = $_GET['jobID'];

$sql=$sql . " AND job.jobID =" . $jobID;

$results = mysqli_query($conn, $sql);
if(!$results){
    exit("SQL Error: " . mysqli_error($conn));
}

$job = mysqli_fetch_array($results);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook | Incubate USC</title>
</head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


<script
  src="http://code.jquery.com/jquery-3.2.1.js"  
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="js/main.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="">


	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">

    <link rel="shortcut icon" type="image/png" href="img/fav.png"/>
    


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/parallax.js-1.4.2/parallax.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar').css('background-color', 'black');
       } else {
          $('.navbar').css('background-color', 'transparent');
       }
   });
});
	</script>

<body>

<nav class="navbar">
  <div id="logocont"></div>

  <div id="rightnav">

  <a class="navlinks">COMPANIES</a>
  <a class="navlinks">JOBS</a>
  <a id="navimg" href=""></a>

  <li class="dropdown">
            <a href="#" class="dropdown-toggle navlinks" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jon Rivera<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Log Out</a></li>
            </ul>
  </li>
  </div>

   <div class="ham"></div>
</nav>

<div id="prof-comp-hero">
  <div id="complogo"></div>
</div>

<div id="profhead">
	<h1><?=$job['title']?></h1>
</div>

<div id="startchange" ></div>
<div class="container-fluid">
<div class="row">


<div class="prof-comp-cont col-xs-12 col-sm-8 col-sm-push-4">
<div class="margins">
		<div id="comp-profborder">
		<div id="comp-proftitle"><?=$job['title']?></div>
			<div id="profhold">
				<div id="comp-profinfo">
        <h4>Description</h4>
				<p><?=$job['description']?></p>

        <h4>Requirements</h4>
        <p>This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. This is placeholder text. </p>
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

<div id="complogo"></div>  
    

</div>



  
    <p><?=$job['company']?><br><?=$job['background']?></p>

  




</div>

</div>



<div class="container-fluid" id="footer">
  <div class="row">

    <div class="col-lg-3 col-md-5 col-sm-12" id="footercont">
      <p class="foottitle">ABOUT INCUBATE USC</p>
    <hr>
      <p>We are a passionate group of students, faculty, staff, and partners dedicated to assisting Trojan startup teams be successful.</p>
    </div>

    <div class="col-lg-3 col-md-5 col-sm-12" id="footercont">
      <p class="foottitle">INCUBATE USC OFFICE</p>
    <hr>
      <p href="">3670 Trousdale Pkwy, Bridge Hall B3D Los Angeles, CA 90089</p>
      <p href="">(424) 888-0872</p>
      <p href="">incubate@usc.edu</p>
      <p href=""> 213.821.3046</p>
    </div>

    <div class="col-lg-3 col-md-5 col-sm-12" id="footercont">
      <p class="foottitle">BUSINESS HOURS</p>
    <hr>

      <p>We're here on campus weekdays and for big events on the weekend.</p>
    </div>

    <div class="col-lg-3 col-md-5 col-sm-12" id="footercont">
      <P class="foottitle">INCUBATE USC NEWSLETTER</P>
    <hr>

      <p>Never Miss Another Event on Campus:</p>
    </div>

  </div>
</div>




</body>
</html>