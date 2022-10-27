<?php
include 'connect.php';

if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $Name = $_POST['Name'];
  $Description = $_POST['description'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $expire_date = $_POST['expire_date'];
  $sql ="UPDATE `description` SET `NAME`='$Name',`description`='$Description',`quantity`=$quantity,`price`='$price',`Expire_date`='$expire_date' WHERE id = $id";

  echo $sql;
  
  if(mysqli_query($conn, $sql)){
    header("Location: display.php");
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


            <input type="text" name='id' value='<?php echo $_GET['updateid']; ?>' hidden>


            <div class="form-group">
                <label>Name </label>
                <input type="text" class="form-control" placeholder="Enter the Name" name="Name" />
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
                <input type="text" class="form-control" placeholder="Enter the price" Name="price" />
            </div>


            <div class="form-group">
                <label>Expire_date</label>
                <input type="text" class="form-control" placeholder="Enter the date" name="expire_date" />
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</buttun>

        </form>

    </div>

</body>

</html>