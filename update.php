<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css -->

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container-fluid" >
        <form action=""method="POST" class="row g-3" id="form">
            <div class="col-md-6">

            <?php
include 'dbcon.php';
$id = $_GET['id'];
$selectquery = "select * from registration where ID = $id;";
$query = mysqli_query($con, $selectquery);
$result = mysqli_fetch_assoc($query);
if(isset($_POST['submit'])){
   
  $f_name = ($_POST['firstname']);
  $l_name = ($_POST['lastname']);
  $email = ($_POST['email']);
  $password = ($_POST['password']);
  $address = ($_POST['address']);
  $city = ($_POST['city']);
  $state = ($_POST['state']);
  $zip = ($_POST['zip']);
 


$updatequery = "update registration set f_name = '$f_name', l_name = '$l_name', email = '$email', password = '$password', address = '$address', city = '$city', state = '$state', zip = '$zip' where ID = $id;"; 
  $query = mysqli_query($con, $updatequery);
  header("Location: check.php"); 
  exit();
}
?>
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" value = "<?php echo $result['f_name'] ?>">
              
              <small>Error Message</small>
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value = "<?php echo $result['l_name'] ?>">
             
              <small>Error Message</small>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Valid Email" name="email" value = "<?php echo $result['email'] ?>">
              
              <small>Error Message</small>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Your Password" name ="password" value = "<?php echo $result['password'] ?>">
             
                <small>Error Message</small>
              </div>
            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address" value = "<?php echo $result['address'] ?>">
            
              <small>Error Message</small>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="Current City" name="city" value = "<?php echo $result['city'] ?>">
             
              <small>Error Message</small>
            </div>
            <div class="col-md-6">
                <label for="inputstate" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="Current State" name="state" value = "<?php echo $result['state'] ?>">
                
                <small>Error Message</small>
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="Zip" name="zip" value = "<?php echo $result['zip'] ?>">
             
              <small>Error Message</small>
            </div>
           
            <div class = "bottom">           

              <button type="submit" name="submit" value="" class="btn btn-dark">Update</button>
              
              <a href="check.php" class="btn btn-warning check">Check Data</a>
           
                
            </div>
        </form>

    </div>
    </body>
</html>