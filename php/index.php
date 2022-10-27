<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $Id = $_POST['id'];
  $Name = $_POST['name'];
  $Description = $_POST['description'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $expire_date = $_POST['expire_date'];
  $sql = "insert into description(id, NAME, description, quantity, price, Expire_date) values ('$Id', '$Name', '$Description', '$quantity', '$price', '$expire_date')";
  if(mysqli_query($conn, $sql)){
    header("Location:display.php");
  }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
    <title>CRUD Operation</title>
</head>

<body>
    <div class="Container my-5" style='width: 70%; margin: 0 auto;'>
        <form method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>

            <div class="form-group">
                <label>Id</label>
                <input type="text" class="form-control" placeholder="Enter the id" name="id" />
            </div>


            <div class="form-group">
                <label>Name </label>
                <input type="text" class="form-control" placeholder="Enter the Name" name="name" />
            </div>


            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter the Description" name="description" />
            </div>


            <div class="form-group">
                <label>Quantity </label>
                <input type="text" class="form-control" placeholder="Enter the quantity" name="quantity" />
            </div>


            <div class="form-group">
                <label>peice</label>
                <input type="text" class="form-control" placeholder="Enter the price" name="price" />
            </div>


            <div class="form-group">
                <label>Expire Date</label>
                <input type="text" class="form-control" placeholder="Enter the date" name="expire_date" />
            </div>

            <input type="submit" class="btn btn-primary" name="submit" />

        </form>

    </div>

</body>

</html>