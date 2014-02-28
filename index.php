<!--
  DEVELOPER: sunnyLA4

To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>

        <title>Login Page : E-system </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="stylesheet" href="css/main1.css" type="text/css" >


    </head>
    
    <body>
     

    <div id="head">
        <pre>ELECTRONIC - WORK  MANAGEMENT  SYSTEM</pre>
    </div>

     <?php
         
         $connection = pg_connect("host=localhost port=5433 dbname=drdo user=user1 password=8090");
         if (!$connection) {
          die("Database connection failed: ");
          } 

      ?>
    <div class="container">
          <div id="sidebar">
              <pre>About System</pre>
              <p><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                This app is for E-WORK</strong></p>

              <pre>CONTACT</pre>
                <P>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp  Admin:9800880</P>             
            </div>
          <div class="content">

           

          <br /><br /><center><img src="images/login.jpg" alt="login"></center><br />
                 <div align="center"> 
                  <form name="form1" method="POST" action=" login.php ">
                   <tr>
                      <td><label>LogIN ID: <input type="text" name="username" /></label><br /></td>
                   </tr>   
                   <tr>
                      <td><label>Password: <input type="password" name="password" /></label><br /></td>
                    </tr>
                    
                      <!-- radio button -->
                   <tr>
                      <th scope="row"><strong>Role*</strong></th>
                        <td><select  name="role">
                        <option name="direc" value="director"> Director</option>  
                        <option name="divhead" value="divhead"> Div-head</option> 
                        <option name="admin" value="admin"> Admin</option>
                        <option name="office" value="office"> Office</option> 
                        <option name="emp" value="employee" selected="selected"> Employee </option>
                      </select></td>
                    </tr>      
                      <br>
                      <label><input type="submit" value="LOGIN" /></label>
                      
                  </form>
                </div> 
          
          </div>
        </div>
        
       <?php 
            // close database connection 
           pg_close($connection);
       ?>

    </body>
</html>
