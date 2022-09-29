<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['firstname']) && isset($_POST['lastname']) &&
        isset($_POST['mpesaname']) && isset($_POST['email']) && isset($_POST['password'])) {
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mpesaname = $_POST['mpesaname'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "pamba_db";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(firstname, lastname, mpesaname, email, password) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss",$firstname, $lastname, $mpesaname, $email, $password);
                if ($stmt->execute()) {
                    // echo "New record inserted sucessfully.";
                    include("login.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    // echo "Submit button is not set";
    include("find.php");
}
?>