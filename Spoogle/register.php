<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="register.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<ul class="breadcrumb">
		<li><a href="start.php">Home</a></li>
		<li>Register</li>
	</ul>
	<div class="hidden" style=" display:none;">
		<form class="regform" name="RegForm" action="start.php">
			<div class="box">
				<p id='regiName'>Register</p>
	      <p id='first' style="padding-top: 10px; color: #045175;"><strong>FIRST NAME</strong></p>
				<p><input  id='entry' type="text" name="First Name" placeholder="Enter your First Name" required></p>
				<p id='last' style="padding-top: 10px; color: #045175;"><strong>LAST NAME</strong></p>
				<p><input  id='entry' type="text" name="Last Name" placeholder="Enter your Last Name" required></p>
				<p id='email' style="padding-top: 10px; color: #045175;"><strong>EMAIL ID</strong></p>
				<p><input  id='entry' type="email" name="Email Id" placeholder="Enter your Email Id" required></p>
				<p id='password' style="padding-top: 10px; color: #045175;"><strong>PASSWORD</strong></p>
				<p><input  id='entry' type="password" name="Password" placeholder="Enter your password" minlength="8" required></p>
				<p id='gender' style="padding-top: 10px; color: #045175;"><strong>GENDER</strong></p>
				<p><input type="radio" name="Gender" required>Female</p>
				<p><input type="radio" name="Gender" required>Male</p>
				<p><input id='clear' class='btn' type="button" name="Clear" value="Clear All" style="margin-right: 100px">
					<input id='register' class='btn' type="submit" name="Submit" value="Register"></p>
			</div>
		</form>
 	</div>



	<script type = "text/javascript">
         function validate()
				 {
         	// var fname=document.getElementsByName("First Name");
         	var fname=document.forms["RegForm"]["First Name"];
					var lname=document.forms["RegForm"]["Last Name"];
         	var email=document.forms["RegForm"]["Email Id"];

					var flag=true;

         	// alert(fname.value);
         	for(var i=0;i<fname.value.length;i++){
         		// alert(fname.value.charCodeAt(i));
         		if( (fname.value.charCodeAt(i)<65 || fname.value.charCodeAt(i)>90 ))
						{
							if(fname.value.charCodeAt(i)>90){
								if( (fname.value.charCodeAt(i)<97 || fname.value.charCodeAt(i)>122)){
									// alert(fname.value.charCodeAt(i));
									alert("Please enter a valid First Name");
		         			fname.focus();
									$(fname).val("");
		         			return false;
								}
							}
							else{
								// alert(fname.value.charCodeAt(i));
	         			alert("Please enter a valid First Name");
	         			fname.focus();
								$(fname).val("");
	         			return false;
							}
         		}

         	}

					for(var i=0;i<lname.value.length;i++){
         		// alert(fname.value.charCodeAt(i));
         		if( (lname.value.charCodeAt(i)<65 || lname.value.charCodeAt(i)>90 ))
						{
							if(lname.value.charCodeAt(i)>90){
								if( (lname.value.charCodeAt(i)<97 || lname.value.charCodeAt(i)>122)){
									// alert(fname.value.charCodeAt(i));
									alert("Please enter a valid Last Name");
		         			lname.focus();
									$(lname).val("");
		         			return false;
							}
						}
						else{
							// alert(lname.value.charCodeAt(i));
         			alert("Please enter a valid Last Name");
         			lname.focus();
							$(lname).val("");
         			return false;
						}

					}
				}

				<?php
				function checkEmail($email){
					$bool=true;
					$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
					if (!preg_match($regex, $email)) {
	 				 $bool=false;
					}
					return $bool;
				}
				?>

				$(flag).val(<?php checkEmail(email.value) ?>);

				return $(flag).val();
			}



				 $(document).ready(function(){
					 $("#register").click(function(e){
						 if(validate()){
							alert("Name: " + $(document.getElementsByName("First Name")).val() + " " + $(document.getElementsByName("Last Name")).val()+"\nUsername: "+$(document.getElementsByName("Email Id")).val() + "\n\nRegistration successful!!!");
						}
						else{
							e.preventDefault();
						}

					 });
				 });

     </script>

		 <script>
		 $(document).ready(function () {
			 	$('div.hidden').fadeIn(1500).removeClass('hidden');
			});
			</script>

			<script >
			function clearAll(){
				var inputs=["First Name","Last Name","Password","Email Id"];
				return inputs;
			}

			$(document).ready(function(){
				$("#clear").click(function(){
					$.each( clearAll(), function(i,val) {
						$(document.getElementsByName(val)).val("");
							// alert(val);
					});
				});
			});
			</script>



</body>
</html>
