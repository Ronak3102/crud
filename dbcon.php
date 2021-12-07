<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "cruddb";
$con = mysqli_connect($server,$user,$password,$db);


if($con){
?>
    <script>
        alert("connect")
    </script>
<?php
}else{
?>
    <script>
    alert("not connect")
    </script>
<?php
}
?>