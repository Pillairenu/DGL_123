<?php

require_once('../Database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the provided password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query the database to find a user with the provided username
    $query = "SELECT id, username, pass, user_type FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);

    // Execute the statement
    $stmt->execute();

    // Fetch the results
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $storedPassword = $result['pass'];

        // Compare the provided password's hash with the stored password hash
        if (password_verify($password, $storedPassword)) {
            // User is authenticated, perform necessary actions (e.g., set up a session)
            session_start();
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['user_type'] = $result['user_type']; // Store user_type in the session
            // var_dump($_SESSION);
            // Redirect to the user's dashboard or display a success message
            header("Location: /DGL_123/milestone_3/");
            exit();
        } 
        
        else {
            echo "Invalid password.";
        }
    } 
    
    else {
        echo "User not found.";
    }
}
?>
