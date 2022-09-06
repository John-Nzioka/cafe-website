<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafedb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['number-guests']) && !empty($_POST['date']) && !empty($_POST['message']) && !empty($_POST['time']) ) {

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone'];
        $guests = $_POST['number-guests'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        $time = $_POST['time'];
        //var_dump($fullname,$email,$phonenumber,$guests,$date,$message,$time);

        //Insert Data to database 
        $query = "insert into users(fullname,email,phonenumber,guests,date,message,time) values('$fullname' , '$email', '$phonenumber' , '$guests', '$date' , '$message' , '$time')";

       //run query
       $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));;

       //check if our query runs
       if ($run) {
        echo 'Reservation made successfully';
       }
       else {
        echo 'Data not  submitted';
       }


    }

    else {
        echo 'All fields are required';


    }

}






















