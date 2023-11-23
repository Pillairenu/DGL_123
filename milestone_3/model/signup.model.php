<?php

require_once('../Database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') 

{
    
    
            
            $name = $_POST['name'];
            $username = $_POST['username'];
            $userType = $_POST['user-type'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm-password'];
        
            // Perform basic form validation
        
            if (empty($name) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {

                echo "Please fill in all fields.";
            }
             elseif ($password !== $confirmPassword) {

                echo "Passwords do not match.";
            } 
            
            else {
               
                        // Hash the password before storing it
                        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                        // Define the SQL query with placeholders
                        $sql = "INSERT INTO users (full_name , username, user_type, email, pass) VALUES (:name, :username, :userType, :email, :password)";

                        // Prepare the SQL statement
                        $stmt = $pdo->prepare($sql);

                        // Bind the form input values to the prepared statement
                        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                        $stmt->bindParam(':userType', $userType, PDO::PARAM_STR);
                        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

                        // Execute the query to insert the data
                        $stmt->execute();


                        // Redirect to the sign-in page or perform any other action
                        header('Location: /DGL_123/milestone_3/signin');
                        exit;
            }
        }


?>