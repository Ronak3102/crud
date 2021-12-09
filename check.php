<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- fontawesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

      <!-- bootstrap -->

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">sno</th>
            <th scope="col">f_name</th>
            <th scope="col">l_name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">address</th>
            <th scope="col">city</th>
            <th scope="col">state</th>
            <th colspan = 2 scope="col">zip</th>
            <th scope="col">operations</th>
            </tr>
        </thead>
        <tbody>

        

        <?php 
            include 'dbcon.php';  
            $selectquery = "select * from registration;";
            $query = mysqli_query($con, $selectquery);
            $sn = 1;
            while ($result = mysqli_fetch_assoc($query)){
        ?>
        
            <tr>
                <td><?php echo $sn++ ?></td>
                <td><?php echo $result['f_name'] ?></td>
                <td><?php echo $result['l_name'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo $result['password'] ?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['city'] ?></td>
                <td><?php echo $result['state'] ?></td>
                <td><?php echo $result['zip'] ?></td>
                <td><a href = "update.php?id=<?php echo $result['ID'] ?>"><i class="fas fa-edit"></i></a></td>
                <td><a href = "delete.php?id=<?php echo $result['ID'] ?>"><i class="fas fa-trash"></i></a></td>

                
                

                
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-warning">Register</a>
    </div>
</body>
</html>