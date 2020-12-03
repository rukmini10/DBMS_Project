<?php 

    require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " select * from record where Lab_ID='".$ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['Lab_ID'];
        $Category = $row['Lab_Category'];
        $QuantityHaving = $row['Lab_Quantity_Having'];
        $QuantityWant = $row['Lab_Quantity_Want'];
    }

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
        background-image: url('https://thumbs.dreamstime.com/b/laboratory-glassware-beakers-cold-vintage-tone-stack-shelf-science-research-science-concept-laboratory-glassware-93264155.jpg') ;
           background-size: 1500px 800px;
           background-repeat: no-repeat;
  background-attachment: fixed;


    }
</style>
<body>

        <div class="container"><br><br><br><br><br><br>
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-black text-center py-3"> Update Equipment Data</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $ID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Category " name="category" value="<?php echo $Category ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Quantity Having " name="qhaving" value="<?php echo $QuantityHaving ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Quantity Want " name="qwant" value="<?php echo $QuantityWant ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>