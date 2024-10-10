<?php

    //db connection
    require('../../config/db_connection.php');
    //get data from register_form
    $email = $_POST['email'];
    $pass = $_POST['passwd'];
    $enc_pass = md5($pass);
    //validate if email already exists
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = pg_query($conn, $query);
    $row = pg_fetch_assoc($result);
    if($row) {
        echo "<script>alert('Email already exists')</script>";
        header('refresh:0; url=http://127.0.0.1/beta/api/src/register_form.html');
        exit();
    
    }
     
    //query to insert data into users table
    $query = "INSERT INTO users (email, password) VALUES ('$email', '$enc_pass')";
    $result = pg_query($conn, $query);
    if($result) {
        echo "<script>alert('registration successfully')</script>";
        header('refresh:0; url=http://127.0.0.1/beta/api/src/login_form.html');
    } else {
        echo 'Registration failed';
    }
    pg_close($conn);



?>