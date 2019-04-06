
<html>
<head>
  <meta charset="utf-8">

  <!-- <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!--
  <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min css"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>
    SPOOGLE
  </title>


   <style type="text/css">

  /*.bookmark{
    width: 50px;
    height: 50px;
    margin-right: 20px;
    background: url(navbar1.png);
    background-position: 0 0;
    display: inline-block;
  }

  .history{
    width: 50px;
    height: 50px;
    margin-right: 20px;
    background: url(navbar1.png);
    background-position: -50px 0;
    display: inline-block;
  }

  .register{
    width: 50px;
    height: 50px;
    margin-right: 20px;
    background: url(navbar1.png);
    background-position: -100px 0;
    display: inline-block;
  }
  /* #bookmark{
    background-position: 0 0;
  } */
  @media screen and (max-width: 800px) {
  .col-md-3 {
    flex: 50%;
    max-width: 50%;
  }
}
  @media screen and (max-width: 600px) {
    .col-md-3 {
      flex: 100%;
      max-width: 100%;
    }
  }



  </style>

</head>
<body>

<?php $menu=array("Google","Facebook","Drive","YouTube","Docs","Sheets","Slides","Login"); ?>

  <nav class="navbar navbar-expand-sm bg-light stick-top">

      <ul class="navbar-nav">
      	<li id="write" class="active" style="font-size:16pt;padding-right: 50px;" ><a href="start.php">Welcome!</a></li>

        <li class="nav-item"style="font-size:16pt;padding-right: 50px;"><a href="#">History</a></li>
        <li class="nav-item" id="flip" style="font-size:16pt;padding-right: 50px;"><a href="#">Register</a></li>
        <li class="nav-item" style="font-size:16pt;padding-right: 50px;"><a href="quickupdate.php">Want Some Quick Update?</a></li>
        <li class="nav-item dropdown"style="font-size:16pt;padding-right: 50px;"><a  class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" href="#"><span class="glyphicon">&#xe044;</span> Bookmarks</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
      </ul>
  </nav>
  <script>
  $(document).ready(function(){
    $("#flip").click(function(){
      (window.location.href="register.php").slideDown("slow");
    });
  });
  </script>

<h4 id="hide" style="background: red; color: white; padding:10px">Please <a href="login.php">Login</a>/<a href="register.php">Sign up</a> to avail all the services.</h4>
<marquee><h4>We also have services like <?php
foreach ($menu as $key => $value) {
    $key=$key+1;
    echo "{$value},   ";
}
?></h4></marquee>









  <center>
    <br>
    <br>
    <br>
    <br>



      <img src="home.png" width="425px" height="110px" style="margin-bottom: 30px;">
<div class="container-fluid">
  <form style="size:40px" align="center" width="200px">
    <input type="text" name="search" placeholder="Search" size="45"  style="font-size:18pt; padding:8px; padding-left: 23px; padding-bottom: 8px; border-color: #f1f1f1; border-radius:40px">
     <input type="image" src="search.png" alt="Submit" width="30px" height="30px"  style=" margin-left: -50px; ">
  </form>
</div>


 <br>
 <br>
 <br>
 <br>
   <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
      	  <a href="https://www.google.com/">
      <figure>
      <img src="google.png"  width="50px" height="50px">
      <figcaption style="align:center"><?php echo $menu[0]; ?></figcaption>
      </figure>
    </a>
      </div>
      <div class="col-md-3">
      	<a href="https://www.facebook.com/">
	      <figure>
	      <img src="facebook.png"  width="50px" height="50px">
	      <figcaption style="align:center"><?php echo $menu[1]; ?></figcaption>
	      </figure>
	    </a>
      </div>
      <div class="col-md-3">
      	<a href="https://www.google.com/drive/">
	      <figure>
	      <img src="drive.png"  width="50px" height="50px">
	      <figcaption style="align:center"><?php echo $menu[2]; ?></figcaption>
	      </figure>
		</a>
      </div>
      <div class="col-md-3">
      	<a href="https://www.youtube.com/?gl=IN">
	        <figure>
	        <img src="youtube.png"  width="50px" height="50px">
	        <figcaption style="align:center"><?php echo $menu[3]; ?></figcaption>
	        </figure>
        </a>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
      <div class="col-md-3">
      	<a href="https://www.google.com/docs/about/">
      <figure>
      <img src="docs.png"  width="50px" height="50px">
      <figcaption style="align:center"><?php echo $menu[4]; ?></figcaption>
      </figure>
      </a>
      </div>
      <div class="col-md-3">
      	<a href="https://www.google.com/sheets/about/">
      <figure>
      <img src="sheets.png"  width="50px" height="50px">
      <figcaption style="align:center"><?php echo $menu[5]; ?></figcaption>
      </figure>
      </a>
      </div>
      <div class="col-md-3">
      	<a href="https://www.google.com/slides/about/">
      <figure>
      <img src="slides.png"  width="50px" height="50px">
      <figcaption style="align:center"><?php echo $menu[6]; ?></figcaption>
      </figure>
      </a>
      </div>
      <div class="col-md-3">
      	<a href="login.php">
      <figure>
      <img src="login.png"  width="50px" height="50px">
      <figcaption style="align:center"><?php echo $menu[7]; ?></figcaption>
      </figure>
      </a>
      </div>
    </div>
  </div>



<br>
<div class="container-fluid">
  <footer>
    <p  style="padding-top: 20px; color:#7a7a7a;">Designed by: Shloka Shah & Abhishek Revadekar</p>
  </footer>
</div>


<script>
function show() {
    document.getElementById("write").innerHTML = window.location.search;
}
</script>


<br>




<?php
echo '<p style="font-size: 10px;">Working on Localhost. Session started at ';
date_default_timezone_set("Asia/Kolkata");
print date("d/m/y G.i:s A", time());
echo '</p>';

$loggedIn=true;
$no_of_users=0;

if($loggedIn){

    $no_of_users=$no_of_users+1;
    $text='<script type="text/javascript">
    var element = document.getElementById("hide");
  element.parentNode.removeChild(element);
    </script>';
  echo $text;
}

if($no_of_users==1){
print("$no_of_users user currently active");
}
else {
  print("$no_of_users users currently active");
}



 ?>

</center>
</body>
</html>
