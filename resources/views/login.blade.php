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

    <img id="logo" src="img/logo.png" height="40px;">
    
<div id="loginbg">

<div id="loginsmall">

	<div id="logintxt">
		<h1>Welcome!</h1>
	</div>
    <br>

<div id="loginLinkedIn" style="padding-left:130px;" >
<script type="in/Login"></script>
</div>
    <div style="text-align:center;  text-decoration: underline">
        <a href="/newcompany">Or Register Your Company</a>
</div>

</div>

</body>
</html>