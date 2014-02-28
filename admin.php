<!DOCTYPE HTML>

<html>
	<head>
		<title>ADMIN : E-work </title>
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
					<h2>    Admin Menu   </h2><br />
					<p id="adm">Welcome to the System.</p><br />
					
					<button id="edit" >Edit Employee Data</button>
					<button id="add" >Add Employee</button>
					<a href="homepage.php"><button>Logout</button></a>
				</div>
				<!-- code for search -->

				<div id="search">
				<form method="get" action="search.php"> 
					<div> <label>Search:&nbsp</label>
				 		<input type="search" name="search" placeholder="search Empid..." autosave="com.domain.search" results="5" name="search" />
				 	</div> 
				</form>
			</div>
<!--- form invisible activate after click -->

<div id="formdiv">
<form id="form" action="register.php" method="post">
  <table cellspacing="0">
      <tr class="header">
            <th colspan="2">Account Information</th>
      </tr>
      <tr class="required">      
        <th scope="row">EmpID*</th>      
        <td><input name="empid" type="text" size="20" maxlength="20" /></td>    
      </tr>
      <tr class="required">      
      	<th scope="row">Login ID*</th>      
      	<td><input name="login" type="text" size="20" maxlength="20" /></td>    
      </tr>    
      <tr class="required">      
      	<th scope="row">Password*</th>      
      	<td><input name="pass1" type="text" size="20" maxlength="20" /></td>    
      </tr>    
      <tr class="required">      
      	<th scope="row">Confirm Password* </th>      
      	<td><input name="pass2" type="text" size="20" maxlength="20" /></td>    
      </tr>    
      <tr class="required">      
      	<th scope="row">Email*</th>      
      	<td><input name="email" type="text" /></td>    
      </tr>    
   
      <tr class="header">      
      	<th colspan="2">Contact Information</th>    
      </tr>    
      <tr class="required">      
      	<th scope="row">Full Name* </th>      
      	<td><input name="name" type="text" size="20" /></td>    
      </tr>    
        
      <tr class="required">      
      	<th scope="row">Address*</th>      
      	<td><input name="address" type="text" size="20" /></td>    
      </tr>    
         
      <tr class="required">      
      	<th scope="row">City* </th>      
      	<td><input type="text" name="city" /></td>    
      </tr>    
     	<tr class="required">      
	      	<th scope="row">State*</th>      
	      	 <td><input type="text" name="state" /></td>    
  		</tr>    
  		<tr class="required">      
  			<th scope="row">Zip*</th>      
  			<td>
  				<input name="zip" type="text" id="zip" size="7" maxlength="7" />
  			</td>    
  		</tr>    
  		<br> 
  		<tr class="required">      
  			<th scope="row">Gender*</th>      
  			<td>
  			 <input type="radio" name="sex" value="female" />Female 
  			 <input type="radio" name="sex" value="male" /> Male 
  			</td>    
  		</tr>    <br><br>
  		<tr class="header">      
  			<th colspan="2">Employee Information</th>   
  		 </tr>
  		 <tr>      
  		 	<th scope="row">Grade pay </th>      
  		 	<td>       
  		 		<input type="text" name="grade" />
  		 	</td>    
  		 </tr>
       <br>    
  		 <tr>      
  		 	<th scope="row">Role</th>      
  		 	<td>
  		 		<input name="role" type="checkbox" value="admin" />Admin
  		 		<input name="role" type="checkbox" value="employee" />Employee        
          <input name="role" type="checkbox" value="divhead" />Div-head
          <input name="role" type="checkbox" value="director" />Director
          <input name="role" type="checkbox" value="office" />Office
  		 	</td>    
  		 </tr>  

  		<tr class="required">      
        <th scope="row">Designation*</th>     
         <td>
          <input type="text" name="designation" />
         </td>
      </tr>   
     	</table>  
     	<input type="submit" name="Submit" value="Submit" id="buttonSubmit" />  
     	<input type="reset" name="Submit2" value="Reset" id="buttonReset" /> 
    </form>
  </div>

		
		</div>
		
		<div id="footer">Copyright 2013. Drdo INDIA</div>
	</body>
</html>
<?php
	// 5. Close connection
	
?>
