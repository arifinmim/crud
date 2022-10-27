<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="index.php" class="text light" style='color: white;'>Add</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">quantity</th>
                        <th scope="col">price</th>
                        <th scope="col">expire_date</th>
                        <th scope="col">operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$sql = "SELECT * FROM `description`";
$result = mysqli_query($conn, $sql);
if($result){
  
while($row=mysqli_fetch_assoc($result))
{
  $id=$row['id'];
  $name=$row['NAME'];
  $description=$row['description'];
  $quantity=$row['quantity'];
  $price=$row['price'];
  $Expire_date=$row['Expire_date'];
  echo '<tr>
            <th scope="row">'. $id .'</th>
            <td>'. $name .'</td>
            <td>'. $description .'</td>
            <td>'. $quantity .'</td>
            <td>'. $price .'</td>
            <td>'. $Expire_date .'</td>
            <td>
                <button class= "btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class= "btn btn-danger"><a href="delet.php?deleteid='.$id.'"class="text-light">Delete</a></button>               
            </td>
        </tr>';
} 
}
                    ?>

                </tbody>
        </button>
        </table>
</body>

</html>