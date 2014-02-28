<!DOCTYPE html>
<html>
	<head>
		<title>DIRECTOR : E-system </title>

		<link href="css/public.css" media="all" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

	</head>
	
	<body>
		<div id="header">
			<h1>ELECTRONIC - WORK  MANAGEMENT  SYSTEM</h1>
		</div>
		<div id="main">
			
				<div id="navigation">
				&nbsp;
				</div>
				<div id="page" align="center">
					<h2>  DIRECTOR Menu   </h2><br />
					<p id="adm">Welcome to the System.</p><br />
						
						<button>Request For Approval</button>
						<button id="change_p_dir">Change Password</button>
						<a href="homepage.php"><button>Logout</button>
						
				</div>
				<!-- code for password change -->
<div id="passwd_dir">
<h4>CHANGE PASSWORD</h4> 
<form id="change_pass" action=" " method="post">
  
<label for="cur_pass">Current Password*</label>  
<input type="text" name="cur_pass" id="cur_pass" />  
<label for="new_pass">Enter new Password*</label>  
<input type="text" name="new_pass" id="new_pass" /> 
<label for="conf_pass">Confirm Password*</label>  
<input type="text" name="conf_pass"  id="date" /><br>
<input type="submit" name="Submit" value="Change Password"  />  
      
  </form>
</div>

		</div>
		<div id="footer">Copyright 2013. Drdo INDIA</div>
	</body>
</html>

