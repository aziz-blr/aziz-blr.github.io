<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<!-- REQUIRED LINKS -->
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- REQUIRED SCRIPTS -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>


<div data-role="page" id="profile">
  
  <!-- HEADER -->
  <div data-role="header" data-position="fixed">
      <h1>My Profile</h1>
    <a href="index.php" data-ajax="false" class="ui-btn ui-btn-right ui-corner-all ui-icon-action ui-btn-icon-notext"></a>
  </div>

  <!-- MEIN BODY -->
  <div data-role="main" class="ui-content">
    <table data-role="table" data-mode="" class="ui-responsive ui-shadow">
      <tbody>
        <tr>
          <td>ITS No. :</td>
          <td>40479503</td>
        </tr>
        <tr>
          <td>Thali No. :</td>
          <td>JPB-2415</td>
        </tr>
        <tr>
          <td>Name :</td>
          <td>Aziz Pratapgarh Wala</td>
        </tr>
        <tr>
          <td>Mobile No. :</td>
          <td><a href="tel:+919620985298">+91-9620985298</a></td>
        </tr>
        <tr>
          <td>E-mail Id :</td>
          <td><a href="mailto:aziz.blore@gmail.com">aziz.blore@gmail.com</a></td>
        </tr>
        <tr>
          <td>Takhmeen :</td>
          <td>Rs. 5000</td>
        </tr>
        <tr>
          <td>Due :</td>
          <td>Rs. 2000</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- FOOTER -->
  <div data-role="footer" data-position="fixed" class="profile">
    <div data-role="navbar">
      <ul>
        <li><a href="home.php" data-icon="home" data-ajax="true" data-prefetch>Home</a></li>
        <li><a href="profile.php" class="ui-btn-active" data-icon="user" data-ajax="false">Profile</a></li>
        <li><a href="thalistatus.php" data-icon="power" data-ajax="false">Status</a></li>
        <li><a href="thalimenu.php" data-icon="bars" data-ajax="false">Menu</a></li>
        <li id="more1"><a href="#" data-icon="plus" data-ajax="false">More</a></li>
      </ul>
    </div>

    <div data-role="navbar" id="footernav3" style="border-top: 1px solid #ddd;">
      <ul>
        <li><a href="events.php" data-icon="star" data-ajax="false">Events</a></li>
        <li><a href="dailyupdates.php" data-icon="clock" data-ajax="false">Updates</a></li>
        <li><a href="faizinfo.php" data-icon="info" data-ajax="false">Faiz Info</a></li>
      </ul>
    </div>
  </div>

  <script type="text/javascript">
     $("#more1").click(function(){
              $("#footernav3").slideToggle();
      });
  </script>
</div>

</body>
</html>

