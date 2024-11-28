<?php
include("common.php");
$connection = mysqli_connect("localhost", "root", "", "pakfixers");

// For Signup
if (isset($_POST["signupbtn"])) {
    $admin_email = mysqli_real_escape_string($connection, $_POST["email"]);
    $admin_name = mysqli_real_escape_string($connection, $_POST["username"]);
    $emailchecksql = "SELECT * FROM admins WHERE admin_email = '{$admin_email}'";
    $row = mysqli_query($connection, $emailchecksql);

    if (mysqli_num_rows($row) > 0) {
        header("Location: http://localhost/PakFixers/admin/signup.php?alert=duplicate");
    } else {
        $admin_password = password_hash($_POST["password"], PASSWORD_DEFAULT);  
        $sql = "INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_status`, `admin_date`) 
                VALUES (NULL, '{$admin_name}', '{$admin_email}', '{$admin_password}', '0', current_timestamp())";
        if (mysqli_query($connection, $sql)) {
            header("Location: http://localhost/PakFixers/admin/signup.php?alert=success");
        } else {
            header("Location: http://localhost/PakFixers/admin/signup.php?alert=error");
        }
    }
} 
// For Login
else if (isset($_POST["loginbtn"])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM admins WHERE admin_email = '{$email}'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify the password
        if (password_verify($password, $user['admin_password'])) {
            // Start a session and store admin details in session variables
            session_start();
            $_SESSION["id"] = $user["admin_id"];
            $_SESSION["name"] = $user["admin_name"];
            $_SESSION["email"] = $user["admin_email"];
            $_SESSION["status"] = $user["admin_status"];
            
            header("Location: http://localhost/PakFixers/admin/dashboard.php");
        } else {
            header("Location: http://localhost/PakFixers/admin/index.php?alert=error");
        }
    } else {
        header("Location: http://localhost/PakFixers/admin/index.php?alert=error");
    }
}

// Close the database connection
mysqli_close($connection);
?>
