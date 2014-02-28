<?php

session_start();
// connection established!!
$connection = pg_connect("host=localhost port=5433 dbname=drdo user=user1 password=8090");
         if (!$connection) {
          die("Database connection failed: ");
          }

$search = $_GET['search'];

//echo $search . "<br>";

$query = "SELECT * FROM register";
$result = pg_query($connection,$query);

if(!$result) error('query failed: ' , pg_last_error());

$flag = 0;

while ($row = pg_fetch_assoc($result))
 {
	if($row['empid'] == $search)
	{
		echo "<p><strong>Employee found!!</strong></p>" . "<br>";
		$flag = 1;
$id = $row['id'];
$empid = $row['empid'];
$mail = $row['email'];
$name= $row['name'];
$address = $row['address'];
$city = $row['city'];
$state = $row['state'];
$zip = $row['zip'];
$sex = $row['sex'];
$grade = $row['pay'];
$role = $row['role'];
$design = $row['design'];
	
	$query = "DELETE FROM register WHERE id=' $id '";
	$result = pg_query($connection,$query);
	if(!$result) error('query failed: ' , pg_last_error());


	}

}




if($flag == 0){
	header("Refresh: 3; url=admin.php");
	echo "<pre>Employee not exist!!</pre>" . "<br>";
}

?>

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
					
				</div>
				<!-- code for search -->

				
			
<!--- form invisible activate after click -->

<div id="formdiv1">
<form id="form" action="register.php" method="post">
  <table cellspacing="0">
      <tr class="header">
            <th colspan="2">Account Information</th>
      </tr>
      <tr class="required">      
        <th scope="row">EmpID*</th>      
        <td><input name="empid" value=" <?php echo $empid; ?> " type="text" size="20" maxlength="20" /></td>    
      </tr>
      
      <tr class="required">      
      	<th scope="row">Email*</th>      
      	<td><input name="email" value="<?php echo $mail; ?>" type="text" /></td>    
      </tr>    
   
      <tr class="header">      
      	<th colspan="2">Contact Information</th>    
      </tr>    
      <tr class="required">      
      	<th scope="row">Full Name* </th>      
      	<td><input name="name" value="<?php echo $name; ?>" type="text" size="20" /></td>    
      </tr>    
        
      <tr class="required">      
      	<th scope="row">Address*</th>      
      	<td><input name="address" value="<?php echo $address; ?> " type="text" size="20" /></td>    
      </tr>    
         
      <tr class="required">      
      	<th scope="row">City* </th>      
      	<td><input type="text" value="<?php echo $city; ?> " name="city" /></td>    
      </tr>    
     	<tr class="required">      
	      	<th scope="row">State*</th>      
	      	 <td><input type="text" value="<?php echo $state; ?> " name="state" /></td>    
  		</tr>    
  		<tr class="required">      
  			<th scope="row">Zip*</th>      
  			<td>
  				<input name="zip" value="<?php echo $zip; ?>" type="text" id="zip" size="7" maxlength="7" />
  			</td>    
  		</tr>    
  		<br> 
  		<tr class="required">      
  			<th scope="row">Gender*</th>      
  			<td>
  			 <input type="radio" name="sex" value="<?php echo $sex; ?>" />Female 
  			 <input type="radio" name="sex" value="<?php echo $sex; ?>" /> Male 
  			</td>    
  		</tr>    <br><br>
  		<tr class="header">      
  			<th colspan="2">Employee Information</th>   
  		 </tr>
  		 <tr>      
  		 	<th scope="row">Grade pay </th>      
  		 	<td>       
  		 		<input type="text" value="<?php echo $grade; ?>" name="grade" />
  		 	</td>    
  		 </tr>
       <br>    
  		 <tr>      
  		 	<th scope="row">Role</th>      
  		 	<td>
  		  <input name="role" type="checkbox" value="<?php echo $role; ?>" />Admin
  		  <input name="role" type="checkbox" value="<?php echo $role; ?>" />Employee        
          <input name="role" type="checkbox" value="<?php echo $role; ?>" />Div-head
          <input name="role" type="checkbox" value="<?php echo $role; ?>" />Director
          <input name="role" type="checkbox" value="<?php echo $role; ?>" />Office
  		 	</td>    
  		 </tr>  

  		<tr class="required">      
        <th scope="row">Designation*</th>     
         <td>
          <input type="text" value="<?php echo $design; ?>" name="designation" />
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
	pg_close($connection);

?>