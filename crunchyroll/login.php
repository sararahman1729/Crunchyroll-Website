<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // Add your database connection code here
    // Assuming you have a MySQL database, modify the following variables accordingly
    $servername = "localhost";
    $username = "sara";
    $password = "1729";
    $dbname = "crunchyroll";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL statement to insert the data into the database
    $sql = "INSERT INTO users (username, firstName, lastName, email, phoneNumber, dateOfBirth, password)
            VALUES ('$username', '$firstName', '$lastName', '$email', '$phoneNumber', '$dateOfBirth', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>