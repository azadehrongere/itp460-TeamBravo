<!DOCTYPE html>
<html>
<head>
  <title>Incubate USC | Facebook Jobs</title>
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


  <title> Incubate USC </title>


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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">
        <img alt="Brand" src="img/logo.png" height="40px;">
      </a>
    </div>

<ul class="nav navbar-nav navbar-right">
<li><a href="company-jobs">JOBS</a></li>
<li><a href="company-profile">COMPANIES</a></li>
<li><a id="navimg" href=""></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jon Rivera<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>

      </div>
</nav>

<div id="prof-comp-hero">
  <div id="complogo"></div>
</div>

<div id="startchange"></div>

<div class="container-fluid" id="homehead">

<h1>Facebook Jobs</h1>
<div id="searchcont">
  <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
  </div>
</div>

<div class="row">

  
  <div class="dropdown col-lg-offset-3 col-lg-2 col-md-offset-2 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Job Location
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

<div class="dropdown col-lg-2 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Job Level
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

<div class="dropdown col-lg-2 col-md-3 col-sm-12 col-xs-12">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Field of Interest 
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


  </div>

</div>

<hr>

<div class="container-fluid" id="homemain">

<div class="row">

<div class="col-sm-12 col-md-10 col-md-offset-1">
  <div class="row">

  <div class="jobcont col-lg-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
  <a  href="profile">
      <div id="jobtitle">Facebook</div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle">Web Developer</div>
      <div id="infolocation">Los Angeles</div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

    <div  class="jobcont col-lg-offset-0 col-md-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
    <a href="profile">
      <div id="jobtitle">Facebook</div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle">Media Analyst</div>
      <div id="infolocation"> Palo Alto</div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

    <div  class="jobcont col-lg-offset-0 col-md-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
    <a href="profile">
      <div id="jobtitle">Facebook</div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle">Sales Lead</div>
      <div id="infolocation">Los Angeles</div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

    <div  class="jobcont col-lg-offset-0 col-md-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
    <a href="profile">
      <div id="jobtitle">Facebook</div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle">Engineer</div>
      <div id="infolocation">Los Angeles</div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

    <div  class="jobcont col-md-offset-0 col-lg-offset-0 col-lg-4 col-md-5 col-sm-12 col-xs-12">
    <a href="profile">
      <div id="jobtitle">Facebook</div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle">Web Developer</div>
      <div id="infolocation">Los Angeles</div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

    <div class="jobcont col-lg-offset-0 col-md-offset-0 col-lg-4 col-lg-offset-0 col-md-5 col-sm-12 col-xs-12">
    <a href="profile">
      <div id="jobtitle">Facebook</div>
      <hr>
    <div id="jobinfo">
      <div id="infotitle">Web Developer</div>
      <div id="infolocation">Los Angeles</div>
    </div>
    <div id="jobimg"></div>
    </a>
  </div>

  </div>


  </div>

</div>
</div>

<br>
<br>

<div class="container-fluid" id="footer">
  <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <p class="foottitle">ABOUT INCUBATE USC</p>
    <hr>
      <p>We are a passionate group of students, faculty, staff, and partners dedicated to assisting Trojan startup teams be successful.</p>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <p class="foottitle">INCUBATE USC OFFICE</p>
    <hr>
      <p href="">3670 Trousdale Pkwy, Bridge Hall B3D Los Angeles, CA 90089</p>
      <p href="">(424) 888-0872</p>
      <p href="">incubate@usc.edu</p>
      <p href=""> 213.821.3046</p>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <p class="foottitle">BUSINESS HOURS</p>
    <hr>

      <p>We're here on campus weekdays and for big events on the weekend.</p>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12" id="footercont">
      <P class="foottitle">INCUBATE USC NEWSLETTER</P>
    <hr>

      <p>Never Miss Another Event on Campus:</p>
    </div>

  </div>


</div>


</body>
</html>