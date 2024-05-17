<?php

include '../components/includes.php';

// Check if a POST request has been sent
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the variable $_POST['email'] exists
    if (isset($_POST['email'])) {
        // Check for password match and its repeat entry
        if ($_POST['password'] === $_POST['repeat_password']) {
            // Database connection
            // $dbh = new PDO('mysql:host=localhost;dbname=database_name', 'username', 'password');
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Check if the email exists in the users table
            $check_stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email");
            $check_stmt->bindParam(':email', $_POST['email']);
            $check_stmt->execute();
            
            if ($check_stmt->rowCount() > 0) {

                // Получаем результат запроса в ассоциативном массиве
                $user_data = $check_stmt->fetch(PDO::FETCH_ASSOC);

                if($user_data['access']=='admin' && password_verify($_POST['password'], $user_data['password'])){
                    $_SESSION['access'] = $user_data['access'];
                }
                echo json_encode("Message could not be sent. Users Error: This email is already registered.");
            } else {
                // Generating password hash (uncomment the line below)
                $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // $hashed_password = $_POST['password'];
                // Prepare query to insert data into users table
                $stmt = $dbh->prepare("INSERT INTO users (nickname, email, password) VALUES (:nickname, :email, :password)");
                // Bind variable values to query parameters
                $stmt->bindParam(':nickname', explode('@', $_POST['email'])[0]);
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->bindParam(':password', $hashed_password);
                // Execute the query
                $stmt->execute();
                // Check if the insertion was successful
                if ($stmt->rowCount() > 0) {
                    // echo "Data successfully added to the users table.";
                } else {
                    echo json_encode("Message could not be sent. Users Error: An error occurred while adding data to the users table.");
                }
            }
        } else {
            echo json_encode("Message could not be sent. Users Error: Passwords do not match.");
        }
    } else {
        echo json_encode("Message could not be sent. Users Error: Email was not provided.");
    }
} else {
    echo json_encode("Message could not be sent. Users Error: You simply entered the path.");
}