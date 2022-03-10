<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'signup';

$con = mysqli_connect($server, $username, $password, $db);

if($con){
    ?>

    <script>
        alert('Connect Successfully');
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Connection Failed')
    </script>
    <?php
}

?>