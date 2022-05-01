<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($username) || !empty($email) || !empty($password))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "book4u";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT email FROM customerdata WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO customerdata (username, email, password) values(?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $username, $email, $password);
            $stmt->execute();
            echo "New record has been inserted";
            header('Location: login.php');
        }else {
            echo "Email already Registered!";
        }
        $stmt->close();
        $conn->close();
    }
}
else{
    echo "All fields are required";
    die();
}

?>