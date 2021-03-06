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
<?php
include 'dbcon.php';
$fnameerr = "";
$lnameerr = ""; 
$emailerr = "";
$passworderr = "";
$addresserr = "";
$cityerr = "";
$stateerr = "";
$ziperr = "";



if(!empty($_POST)){
   
  $f_name = ($_POST['firstname']);
  $l_name = ($_POST['lastname']);
  $email = ($_POST['email']);
  $password = ($_POST['password']);
  $address = ($_POST['address']);
  $city = ($_POST['city']);
  $state = ($_POST['state']);
  $zip = ($_POST['zip']);
  
  if(empty($_POST['firstname'])){
    $fnameerr = "firstname can not be empty" ;
  }
   if(empty($_POST['lastname'])){
    $lnameerr = "lastname can not be empty" ;
  }
   if(empty($_POST['email'])){
    $emailerr = "email can not be empty" ;
  }
   if(empty($_POST['password'])){
    $passworderr = "password can not be empty" ;
  }
   if(empty($_POST['address'])){
    $addresserr = "address can not be empty" ;
  }
   if(empty($_POST['city'])){
    $cityerr = "city can not be empty" ;
  }
   if(empty($_POST['state'])){
    $stateerr = "state can not be empty" ;
  }
   if(empty($_POST['zip'])){
    $ziperr = "zip can not be empty" ;
  }  
  
  if (!empty($_POST['firstname'])  && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])) {   
        $insertquery = "insert into registration(f_name, l_name, email, password, address, city, state, zip) values('$f_name', '$l_name', '$email', '$password', '$address', '$city', '$state', '$zip')"; 
        $query = mysqli_query($con, $insertquery);

    header("Location: check.php"); 
    exit();
  
  }

  
 
}

 
?>

    <div class="container-fluid">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>"method="POST" class="row g-3" id="form">
            <div class="col-md-6">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
              <small>Error Message</small>
              <span><?php echo $fnameerr; ?></span>
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
             
              <small>Error Message</small>
              <span><?php echo $lnameerr; ?></span>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Valid Email" name="email">
              <small>Error Message</small>
              <span><?php echo $emailerr; ?></span>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Your Password" name ="password">
             
                <small>Error Message</small>
                <span><?php echo $passworderr; ?></span>
              </div>
            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address">
            
              <small>Error Message</small>
              <span><?php echo $addresserr; ?></span>
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="Current City" name="city">
             
              <small>Error Message</small>
              <span><?php echo $cityerr; ?></span>
            </div>
            <div class="col-md-6">
                <label for="inputstate" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="Current State" name="state">
                
                <small>Error Message</small>
                <span><?php echo $stateerr; ?></span>
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" placeholder="Zip" name="zip">
             
              <small>Error Message</small>
              <span><?php echo $ziperr; ?></span>
            </div>
            <br><br>
            
                
            <div class = "bottom">
                <button type="submit" value="Register" class="btn btn-primary">Submit</button>
          
                <a href="check.php" class="btn btn-warning check">Check Data</a>
            </div>
           
           
            
        </form>

    </div>
    <script src="main.js"></script>

    
</body>
</html>
