<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Al Amin Jamia Islamia High School</title>
		<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
		<div id="big_wrapper">

			<header id = "indhead">
				<h1>Al Amin Jamia Islamia High School</h1>
			</header>
		
			<div>
			<div style="height:40px; text-align:center; margin-top:20px; color:blue; "> <h2> Admin Side </h2></div>

				<div id="login_form">
					<?php
						include("include/connection.php");
						session_start();
						unset($_SESSION['SESS_MEMBER_ID']);
						unset($_SESSION['SESS_FIRST_NAME']);
						unset($_SESSION['SESS_LAST_NAME']);						
					?>
						
					<h3 style="text-align:center; margin:0px 0px 30px 0px;"> Log In </h3> 
					<?php
						if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) 
						{
							foreach($_SESSION['ERRMSG_ARR'] as $msg) 
							{
								echo $msg;
							}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
						}
					?>
					
					<form action="admin_exec.php" method="post" style="padding:0px;">
						<h4 style="margin: 10px 10px 10px 50px; "> Username: <input type="text" name="username" autocomplete="on"> </h4> 
						<h4 style="margin: 10px 10px 10px 50px; padding:04px;"> Password: <input type="password" name="password"> </h4> </br> 
						<input type="submit" value="LogIn" style=" height:30px; width:50px; margin:0px 0px 0px 235px;border-radius:5px;background:#404040;color:white;">
					</form>
				
				</div>
			</div>

			<footer id="the_footer">
				Copyright@NEUB-CSE 2015
			</footer>
		</div>
		
	</body>

</html>
