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
<style>
    body{
        background-image: url('https://invitrointl.com/wp-content/uploads/2019/03/GettyImages-523393310-2-1200x800.jpg') ;
           background-size: 1600px 800px;
           background-repeat: no-repeat;
  background-attachment: fixed;


    }
</style>
<body class="bg-dark" ><br><br><br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-black text-center py-3"> ADD EQUIPMENT DATA</h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Category " name="category">
                                <input type="text" class="form-control mb-2" placeholder=" Quantity Having " name="qhaving">
                                <input type="text" class="form-control mb-2" placeholder=" Quantity Want " name="qwant">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>