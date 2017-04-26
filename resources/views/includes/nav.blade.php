<script type="text/javascript">
      $(function(){
    $('#mobilemenu').hide();
    $('#icon').on('click', function(){
     // $('#icon').css("background","url('../img/x.png'","background-size","cover","background-position","center");
      $('#mobilemenu').fadeToggle();
    });
  });
</script>

<nav class="navbar">

  <a href="home">
    <div id="logocont"></div>
  </a>

  <div id="icon"></div>

  <div id="rightnav">
  <a href="home" class="navlinks">JOB SEARCH</a>
  @if(Session::get('company') == true)
    <a href="studentsearch" class="navlinks">STUDENT SEARCH</a>
  @endif
  @if(Session::get('signedIn') == true)
        <a href="profile?profileID={{Session::get('id')}}" class="navlinks">PROFILE</a>
  @endif
    @if(Session::get('signedIn') == true)
        <a href="#" class="navlinks">LOG OUT</a>
    @else
      <a href="login" class="navlinks">LOG IN</a>
    @endif
    
    <a id="navimg"></a>
  </div>


</nav>

   <div id="mobilemenu">
      <div class="mobilelink"><a href="home">JOB SEARCH</a></div>
      @if(Session::get('company') == true)
        <div class="mobilelink"><a href="studentsearch">STUDENT SEARCH</a></div>
      @endif
     <div class="mobilelink"><a href="profile">PROFILE</a></div>
     @if(Session::get('signedIn') == true)
      <div class="mobilelink"><a href="#">LOG OUT</a></div>
    @else
      <div class="mobilelink"><a href="login">LOG IN</a></div>
    @endif
   </div>