<?php


//require("includes/connection.php");
$connection = pg_connect("host=localhost port=5433 dbname=drdo user=user1 password=8090");
         if (!$connection) {
          die("Database connection failed: ");
          } 
// getting info from login page

$user = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];



//echo $user . "<br />";
//echo $pass . "<br />";
//echo $role . "<br />";

$query = "SELECT * FROM logindata";
$result = pg_query($connection, $query);
if(!$result) error('query failed: ' , pg_last_error());

$check=0;
	
// look through query
while($row = pg_fetch_assoc($result))
{
  // passrd username matching
  if($row['username']==$user)
	{
		
		if($row['password']==$pass)
		{			
			if($row['role'] == $role)
			{
				if($role == 'admin')
				{
					Header("Location: admin.php");
					$check=1;	
				}
				elseif($role == 'employee')
				{
					Header("Location: employee.php");
					$check=1;	
				}
				elseif($role == 'divhead')
				{
					Header("Location: divhead.php");
					$check=1;	
				}
				elseif($role == 'director')
				{
					Header("Location: director.php");
					$check=1;	
				}
				else
				{
					Header("Location: office.php");
					$check=1;	
				}

				
			}
			
		}
	}
}

if($check==0)
{
	header("Refresh: 2; url=homepage.php");
	echo "<p><strong>login failed!!try again!!</strong></p>";
}

?>
<?php

//connection close
	 pg_close($connection); 
?>