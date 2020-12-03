<?php 

    require_once("connection.php");
    $query = " select * from record ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>EQUIPMENT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<style type="text/css">
     body{
        background-image: url(' https://www.gannett-cdn.com/-mm-/aeb556c41fab641715ac2ed9a0fd8275f7c44560/c=0-197-3867-2382/local/-/media/2017/08/18/CarolinaGroup/Greenville/636386682881962613-testubes.jpg') ;
           background-size: 1600px 800px;
           background-repeat: no-repeat;
  background-attachment: fixed;


    }
   
</style>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td>  ID </td>
                                <td> Category </td>
                                <td> Quantity Having </td>
                                <td> Quantity Want </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['Lab_ID'];
                                        $Category = $row['Lab_Category'];
                                        $QuantityHaving = $row['Lab_Quantity_Having'];
                                        $QuantityWant = $row['Lab_Quantity_Want'];
                            ?>
                                    <tr>
                                        <td><?php echo $ID ?></td>
                                        <td><?php echo $Category ?></td>
                                        <td><?php echo $QuantityHaving ?></td>
                                        <td><?php echo $QuantityWant ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $ID ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $ID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>