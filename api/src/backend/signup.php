<?php

    //db connection
    require('../../config/db_connection.php');
    //get data from register_form
    $email = $_POST['email'];
    $pass = $_POST['passwd'];
    $enc_pass = md5($pass);
    //query to insert data into users table
    $query = "INSERT INTO users (email, password) VALUES ('$email', '$enc_pass')";
    $result = pg_query($conn, $query);
    if($result) {
        echo 'registration successful';
    } else {
        echo 'Registration failed';
    }
    pg_close($conn);



?>