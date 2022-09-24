<?php
if(isset($_POST[`submit`])){
    $server="localhost";
    $username="root";
    $password="";
    //connection with database
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to db failed due to:". mysqli_connect_error());
    }
    echo "succeessful connection to db";
    //variables
    $name=$_POST[`name`];
    $age=$_POST[`age`];
    $gender=$_POST[`gender`];
    $email=$_POST[`email`];
    $phone=$_POST[`phone`];
    $desc=$_POST[`desc`];
    $sql="INSERT INTO `form`.`form` ( `name`, `age`, `gender`, `email`, `phone`, `otherinfo` , `date`)
     VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc',current_timestamp());";
     if($con->query($sql)==true){
        echo "successful insertion";
     }
     else{
        echo "error: $sql <br> $con->error";
     }
     $con->close();
}
?>

