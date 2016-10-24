<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- Include the jQuery library -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include the jQuery Mobile library -->
<script src="js/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>

<div data-role="page" id="home">
  
  <!-- HEADER -->
  <div data-role="header" data-position="fixed">
    <a href="#" class="ui-btn ui-btn-left ui-corner-all ui-icon-user ui-btn-icon-notext"></a>
      <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name</h1>
    <a href="index.php" data-ajax="false" class="ui-btn ui-btn-right ui-corner-all ui-icon-action ui-btn-icon-notext"></a>
  </div>

  <!-- MEIN BODY -->
  <div data-role="main" class="ui-content">
    <div> <img id="img" class="centered" src="images/logo.png" alt="Logo"> </div>
  </div>

  <!-- FOOTER -->
  <div data-role="footer" data-position="fixed">
    <div data-role="navbar">
      <ul>
        <li><a href="home.php" class="ui-btn-active" data-icon="home" data-ajax="false">Home</a></li>
        <li><a href="profile.php" data-icon="user" data-ajax="true" data-prefetch>Profile</a></li>
        <li><a href="thalistatus.php" data-icon="power" data-ajax="false">Status</a></li>
        <li><a href="thalimenu.php" data-icon="bars" data-ajax="false">Menu</a></li>
        <li id="more"><a href="#" data-icon="plus" data-ajax="false">More</a></li>
      </ul>
    </div>

    <div data-role="navbar" id="footernav2" style="border-top: 1px solid #ddd;">
      <ul>
        <li><a href="events.php" data-icon="star" data-ajax="false">Events</a></li>
        <li><a href="dailyupdates.php" data-icon="clock" data-ajax="false">Updates</a></li>
        <li><a href="faizinfo.php" data-icon="info" data-ajax="false">Faiz Info</a></li>
      </ul>
    </div>
  </div>

  <script type="text/javascript">     
     $("#more").click(function(){
              $("#footernav2").slideToggle();
      });
  </script>

  <script type="text/javascript">
        $(document).on('pageinit', '#home', function(){      
          
        $.ajax({
            type: 'POST',
            url: 'userAction.php',
            data: 'action_type=view&',
            success:function(html){
                $('#userData').html(html);
            }
        });
    });

  </script>

</div>


</body>
</html>

