<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
    'httponly' => true,
    'samesite' => 'Lax'
]);
session_start();

// Include database connection details
require_once(__DIR__ . '/../config/config.php');

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

// Function to sanitize input
function clean($link, $str) {
    return mysqli_real_escape_string($link, trim($str));
}

// Sanitize inputs
$login = clean($link, $_POST['login']);
$password = clean($link, $_POST['password']); // Keeping as plain text (not hashed)

// Input validation
$errmsg_arr = [];
if (empty($login)) {
    $errmsg_arr[] = 'Login ID missing';
}
if (empty($password)) {
    $errmsg_arr[] = 'Password missing';
}

if (!empty($errmsg_arr)) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: index.php");
    exit();
}

// Query using prepared statements (No password hashing)
$qry = "SELECT * FROM members WHERE login = ? AND password = ?";
$stmt = mysqli_prepare($link, $qry);
mysqli_stmt_bind_param($stmt, "ss", $login, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    // Successful login - store session data
    session_regenerate_id();
    $_SESSION['SESS_MEMBER_ID'] = $row['members_id'];
    $_SESSION['SESS_FIRST_NAME'] = $row['firstname'];
    $_SESSION['SESS_LAST_NAME'] = $row['lastname'];
    session_write_close();
    header("location: Entry_Form_2.php");
    exit();
}

// Login failed
header("location: login-failed.php");
exit();
?>
