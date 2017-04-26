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
    <a href="company-profile" class="navlinks">PROFILE</a>
    <a href="profile" class="navlinks">LOG OUT</a>
    <a id="navimg" href=""></a>
  </div>


</nav>

   <div id="mobilemenu">
     <div class="mobilelink">PROFILE</div>
     <div class="mobilelink">LOG OUT</div>
   </div>