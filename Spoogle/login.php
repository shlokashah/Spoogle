<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <form class="box" action="start.php">
      <h1>Login</h1>
      <input type="email" name="" placeholder="Email">
      <input type="password" name="" placeholder="Password">
      <input type="submit" name="" value="Login">
    </form>
  </body>
</html> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Email</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <style media="screen">
    </style>
  </head>
  <body>
      <!-- <ul class="breadcrumb">
        <li><a href="start.php">Home</a></li>
        <li>Email</li>
      </ul> -->
    <div class="container-fluid">
      <div id="card" style=" display:none;">
        <div class="front" style="padding-top: 40px; ">
          <ul class="breadcrumb">
            <li><a href="start.php">Home</a></li>
            <li>Email</li>
          </ul>
          <form class="form" method="post" action="loggedIn.php">
              <p style=" font-size: 26px; color:#045175;">Enter the Email ID</p>
                <div class="styled-input">
                  <input id="email" type="email" name="emailid" required >
                  <label>Email ID</label>
                </div>
                <input id="next" class="flip" type="submit" name="Next"  value="Next">
          </form>
        </div>
        <div class="back" style="padding-top: 40px;">
          <ul class="breadcrumb">
            <li><a href="start.php">Home</a></li>
            <li>Password</li>
          </ul>
          <form class="form" method="post" action="loggedIn.php">
            <p style="font-size: 26px; color:#045175;">Enter the Password</p>
            <div class="styled-input">
              <input type="password" name="password" required>
              <label>Password</label>
            </div>
            <input id="next" type="submit" name="Next" value="Log In">

          </form>
        </div>
      </div>




      <script src="jquery.js"></script>
      <script src="jquery.flip.js"></script>
      <script>
      $(".flip").click(function(e) {
        e.preventDefault();
        });
      </script>
      <script>
        $(function ($){
          $("#card").flip({
            trigger: 'manual'
          });
          $(".flip").click(function(){
            if(document.getElementById("email").value.length!=0 && document.getElementById("email").value.search("@")>0 && document.getElementById("email").value.search("@")<document.getElementById("email").value.length-1)
              $("#card").flip(true);
              else {
                alert("Enter a valid Email ID");
                document.getElementById("email").focus();
                $(document.getElementById("email")).val("");
              }
          });
        });
      </script>

      <script>
 		 $(document).ready(function () {
 			 	$('#card').fadeIn(1200).removeClass('hidden');
 			});
 			</script>
    </div>




</body>
</html>
