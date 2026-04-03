<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);
session_start();

// Database connection function
function getDbConnection(): mysqli {
    $config = require __DIR__ . '/../config/config.php';
    try {
        $link = mysqli_connect(
            $config['db_host'] ?? 'localhost',
            $config['db_user'] ?? 'user',
            $config['db_pass'] ?? 'password',
            $config['db_name'] ?? 'database'
        );

        if (!$link) {
            throw new Exception(mysqli_connect_error());
        }

        mysqli_set_charset($link, 'utf8mb4');
        return $link;
    } catch (Exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        die("We're experiencing technical difficulties. Please try again later.");
    }
}

// Connect to database
$link = getDbConnection();
	
// Array to store validation errors
$errmsg_arr = [];
	
// Validation error flag
$errflag = false;
	
// Validate and sanitize input
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = $_POST['password'] ?? ''; // Don't sanitize password before verification
	
// Input Validations
if(!$login) {
    $errmsg_arr[] = 'Login ID missing';
    $errflag = true;
}
if($password === '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}
	
// If there are input validations, redirect back to the login form
if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: index.php");
    exit();
}
	
// Create query with prepared statement
$stmt = $link->prepare("SELECT * FROM members WHERE login = ?");
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();
	 
// Check whether the query was successful or not
if($result) {
    if($result->num_rows == 1) {
        $member = $result->fetch_assoc();
        
        // Here you should verify the password with password_verify()
        // Assuming you'll update your database to store hashed passwords
        // if(password_verify($password, $member['password'])) {
        
        // For now, using direct comparison (update this ASAP)
        if($password === $member['password']) {
            // Login Successful
            session_regenerate_id(true);
            $_SESSION['SESS_MEMBER_ID'] = $member['members_id'];
            $_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
            $_SESSION['SESS_LAST_NAME'] = $member['lastname'];
            $_SESSION['SESS_ADMIN'] = $member['admin'];
            
            // Check if admin and redirect accordingly
            if($member['admin'] == 1) {
                header("location: admin.php");
            } else {
                header("location: member.php"); // Adjust this based on your needs
            }
            exit();
        } else {
            // Password doesn't match
            header("location: login-failed.php");
            exit();
        }
    } else {
        // Login not found
        header("location: login-failed.php");
        exit();
    }
} else {
    die("Query failed: " . $link->error);
}

$stmt->close();
$link->close();
?>