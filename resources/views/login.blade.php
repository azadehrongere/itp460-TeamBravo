<?php include_once (app_path().'/includes/analyticstracking.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Incubate USC - Login</title>
</head>

<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="js/main.js"></script>

<!--<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key:   [86qh6bezmujuu5]
    onLoad:    [ONLOAD]
    authorize: [AUTHORIZE]
    lang:      [LANG_LOCALE]
</script>

-->

<script type="text/javascript" src="https://platform.linkedin.com/in.js">
    api_key: 86qh6bezmujuu5
    authorize: true 
    onLoad: onLinkedInLoad
</script>

<script type="text/javascript">
    
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        console.log(data);
        personalURL = data['siteStandardProfileRequest']['url'];
        personalURL = personalURL.split('?');
        personalURL = personalURL[1];
        personalURL = personalURL.split('&');
        personalURL = personalURL[0].split('=');
        personalURL =encodeURIComponent(personalURL[1]);
        console.log("personal URL = ", personalURL);
        url = "linkedinAuth/" + data['firstName'] +"/"+ data['lastName'] +"/"+ data['headline'] +"/" + 
        personalURL;
        window.location.replace(url);
    // method = "post"; // Set method to post by default if not specified.

    // // The rest of this code assumes you are not using a library.
    // // It can be made less wordy if you use one.
    // var form = document.createElement("form");
    // form.setAttribute("method", method);
    // form.setAttribute("action", "linkedinAuth");

    // var hiddenField = document.createElement("input");
    // hiddenField.setAttribute("type", "hidden");
    // hiddenField.setAttribute("object", data);

    // form.appendChild(hiddenField);

    // document.body.appendChild(form);
    // form.submit();

    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Raw("/people/~").result(onSuccess).error(onError);
    }

</script>

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


<body>

    <div style="position: absolute; padding-top: 150px; padding-left: 150px; font-size: 100px; color: #ffffff; text-shadow: 2px 2px #000000;">Welcome!</div>

    <img id="logo" src="img/logo.png" height="40px;">
    
<div id="loginbg">

<div id="loginsmall">

    <br>

    <div style="text-align: center; padding-top: 50px; font-size: 25px; color: #ffffff; "><strong>For Students</strong></div><br>

<div id="loginLinkedIn" style="padding-left:230px;" >


<script type="in/Login"></script>
</div> <br>
<button type="submit" style="width: 200px; display: block; margin: 0 auto;"onclick="location.href='/jobs'" class="btn btn-primary" value="Submit">Browse Our Jobs</button>
<br>
<hr>
<br><br>

    <div style="text-align: center; font-size: 25px; color: #ffffff"><strong>For Employers</strong></div><br>

<form style="padding-left: 60px;" id="companyLogin" method="post" action="">

    <label style="color: #ffffff;" for="username">Username</label>
    <input style="width: 500px;"type="text" class="form-control" id="username" placeholder="Enter Username" required>
    <br>

    <label style="color: #ffffff;" for="password">Password</label>
    <input style="width: 500px;" type="text" class="form-control" id="password" placeholder="Enter Password" required>
    <br>

 <div style="width:30%;">
  <button type="submit" form="companyLogin" class="btn btn-primary" value="Submit">Submit</button>
</div>

</form>

<br><br>

<button type="submit" style="width: 200px; display: block; margin: 0 auto;"onclick="location.href='/newcompany'" class="btn btn-primary" value="Submit">Or Register Your Company</button>
<br>


</div>

</div>

</body>
</html>