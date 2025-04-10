<?php 

session_start();
require_once'config.php';

if(isset($_POST['register'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],algo: PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $con->query("SELECT * FROM users WHERE email = '$email'");
    if($checkEmail->num_rows > 0){
        $_SESSION['register_error'] = "Email already exists";
        $_SESSION['active_form'] = "register";
}else{
    $conn -> query("INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')");
}

header("Location: index.php");
exit();
}

if(isset($_POST[""])){
    $name = $_POST["username"];
    $password = $_POST["password"];
    
    $result = $conn->query("SELECT * FROM users WHERE name = '$name'");
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user["password"])){
            $_SESSION['username'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            if($user['role'] === 'admin'){
                header("Location: admin.php");
            }else{
                header("Location: user.php");
            }
            exit();
    }
    }
    $_SESSION['login_error'] = "Invalid username or password";
    $_SESSION['active_form'] = "login";
    header("Location: index.php");
    exit();
}

?>

