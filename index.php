<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css -->

    <link rel="stylesheet" href="styles.CSS">
</head>
<body>

    <div class="container-fluid" >
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>;"method="POST" class="row g-3" id="form">
            <div class="col-md-6 left">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="col-md-6 right">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="col-md-6 left">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Valid Email" name="email">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="col-md-6 right">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Your Password" name ="password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
              </div>
            <div class="col-12 address">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="col-md-6 left">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="Current City" name="city">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <div class="col-md-4 state">
                <label for="inputstate" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="Current State" name="state">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <div class="col-md-2 zip">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="Zip" name="zip">
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error Message</small>
            </div>
            <br><br>
            <div class="col-md-2 zip">
                
            
           <!-- <button type="button" class="btn btn-warning check">Check Data</button> -->
           <button type="submit" name="submit" value="Register" class="btn btn-primary">Submit</button>
            
        </form>

    </div>
    <script src="main.js"></script>

    
</body>
</html>
<?php
if(isset($_POST['submit'])){
  $f_name = $_POST['firstname'];
  $l_name = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  $insertquery = "insert into registration(f_name, l_name, email, password, city, state, zip) values('$f_name', '$l_name', '$email', '$password', '$address', '$city', '$state', '$zip')";
  $query = mysqli_query($con, $insertquery);
}
?>