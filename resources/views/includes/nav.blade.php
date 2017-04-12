<script type="text/javascript">
  $(document).ready(function(){ 
    $('.ham').click(function(){
      $('#mobilemenu').css('display','block');
    });

    $(document).ready(function(){       
       var scroll_start = 0;
       var startchange = $('#startchange');
       var offset = startchange.offset();
        if (startchange.length){
       $(document).scroll(function() { 
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top) {
              $(".navbar-default").css('background-color', 'black');
           } else {
              $('.navbar-default').css('background-color', 'transparent');
           }
       });
        }
    });
  }); 
</script>

<nav class="navbar">
  <a href="home"><div id="logocont"></div></a>

  <div id="rightnav">

  <a href="company-profile" class="navlinks">Profile</a>
  <a href="profile" class="navlinks">Log Out</a>
  <a id="navimg" href=""></a>
  </div>

   <div class="ham"></div>

</nav>


   <div id="mobilemenu">
     <div class="mobilelink">PROFILE</div>
     <div class="mobilelink">LOG OUT</div>
   </div>