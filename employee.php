<!DOCTYPE html>
<html>
	<head>
		<title>Employee : E-system </title>
		
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
					<h2>    Employee Menu   </h2><br />
					
					<p id="adm">Welcome to the System.</p><br />
					
					<button id="travel">Travel Request</button>
					<button>Request history</button>
					<button id="change_p">Change Password</button>
					<a href="homepage.php"><button>Logout</button></a>
							
				</div>
<!-- code for password change -->
<div id="passwd">
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



<!-- code for travel from -->
			

<div id="register">
	<h3>TRAVEL REQUEST </h3>  

<form id="regform" name="regform" method="post" action=""> 
<div id="basic">
  <label for="empid">Emp-id</label>  
  <input type="text" name="empid" id="empid" />  
  <label for="fullname">Fullname</label>  
  <input type="text" name="fullname" id="fullname" />  
  <label for="purpose">Purpose</label>  
  <input type="text" name="purpose" id="purpose" />  
  
  <div id="contact">
  <h4>CONTACT (while Travelling)</h4>
  <label for="mobile">Mobile 1:</label>  
  <input type="text" placeholder="+91-142524646" name="mobile" id="mobile" />  
  <label for="mobile2">Mobile 2:</label>  
  <input type="text" placeholder="+91-142454536" name="mobile1" id="mobile1" />  
  </div>
</div> 
 
<div id="info">
  <h4>Travel Information</h4> 
<label for="from">From</label>  
<input type="text" name="from" id="from" />  
<label for="to">To</label>  
<input type="text" name="to" id="to" /> 
<label for="date">Journey Date</label>  
<input type="text" name="date" placeholder="dd/mm/yyyy" id="date" />  
<label for="duration">Duration of work</label>  
<input type="text" name="duration"  id="duration" />  
<label for="return">Return Date</label>  
<input type="text" placeholder="dd/mm/yyyy" name="return" id="return" />  
<label for="mode">Mode of Journey</label>  
<td><select  name="mode">
     <option name="air" value="director">Air</option> 
     <option name="rail" value="office"> Rail</option> 
     <option name="road" value="employee" >Road </option>
    </select>
</td> <br> 
</div>
<br><br>

<input type="submit" name="submit" value="Submit Request" class="submit" /> 
</form> 

</div>

</div>
<!-- footer -->		
		<div id="footer">Copyright 2013. Drdo INDIA</div>
	</body>
</html>

<?php
	// 5. Close connection
	
?>
