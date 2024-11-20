<?php

$errors = [];
session_start();
$success_message = "";
$info = "";
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["SignUp"])) {
    $FirstName = htmlspecialchars($_POST["fname"]);
    $LastName = htmlspecialchars($_POST["lname"]);
    $Email = htmlspecialchars($_POST["email"]);
    $Password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$Email]);

    if ($stmt->rowCount() > 0) {
        $errors[] = "Email already exists";
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$FirstName, $LastName, $Email, $Password])) {
            // Include a link to the sign-in page in the success message
            $success_message = "Registration successful. You can now sign in. <a href='c:\xampp\htdocs\LoginApp'>Sign In</a>";
    
            $_SESSION["user"] = [
                "fname" => $FirstName,
                "lname" => $LastName,
                "email" => $Email
            ];
        } else {
            $errors[] = "Something went wrong during registration.";
        }
    }
     
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["SignIn"])) {
    $SigninEmail = htmlspecialchars($_POST["email"]);
    $SigninPassword = $_POST["password"]; 

    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$SigninEmail]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch();

    
        if (password_verify($SigninPassword, $user['password'])) {
            
            $_SESSION["user"] = [
                "fname" => $user["fname"],
                "lname" => $user["lname"],
                "email" => $user["email"]
            ];

            
            $success_message = "Welcome " . $_SESSION["user"]["fname"] ;
            $info = " this is your fname " . $_SESSION["user"]["fname"]."<br>";
            $info .= " this is your lname " . $_SESSION["user"]["lname"] ."<br>";
            $info .= " this is your email " . $_SESSION["user"]["email"];
            
            
            
        } else {
            $errors[] = "Email or password is wrong.";
        } 

    } else {
        $errors[] = "Email or password is wrong.";
    }
    
}

include "form.php";
?>