<?php 
include "db.php";

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function show_all_data(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query failed ' . mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function create_rows(){
    if(isset($_POST['submit'])){
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $hash_format = "$2y$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hash_format . $salt;
        $password = crypt($password, $hashF_and_salt);

        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query failed ' . mysqli_error());
        }else{
            echo "Record created";
        }

    }
}

function read_rows(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query failed ' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}

function update_table(){
    if(isset($_POST['submit'])){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        $hash_format = "$2y$10$";
        $salt = generateRandomString(22);
        $hashF_and_salt = $hash_format . $salt;
        $password = crypt($password, $hashF_and_salt);

        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id ";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed!" . mysqli_error($connection)) ;
        }else{
            echo "Record updated";
        }
    }
}

function delete_rows(){
    if(isset($_POST['submit'])){
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id ";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query Failed!" . mysqli_error($connection)) ;
        }else{
            echo "Record deleted";
        }
    }
}
    
?>