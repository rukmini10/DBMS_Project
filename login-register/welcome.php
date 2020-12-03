<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif; text-align: center; 
            background-image: url('https://image.shutterstock.com/image-photo/microscope-lab-glassware-science-laboratory-260nw-530971462.jpg') ;
           background-size: 1500px 800px;
           background-repeat: no-repeat;
  background-attachment: fixed;
        }
        h1,h2{
            color: white;
        }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!!!!!</h1>
    </div><br><br><br><br><br>
    <p>
          <div class="row">
            
                <h2><b>MANAGE EQUIPMENT</b></h2></b><br><br><br><br>
        <a href="http://localhost/DBMS_PROJECT/manage_equipment/" class="btn btn-success btn-lg">ADD EQUIPMENT</a><br><br>
        </div>
        
           <div class="row">
                  
        <a href="logout.php" class="btn btn-danger btn-lg">Sign Out of Your Account</a>
    </div>
    </p>
</body>
</html>