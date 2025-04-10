<?php
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register'=> $_SESSION['register'] ??'',
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error){
    return !empty($error) ? "<p class='error_message'>$error</p>" : '';
}
function isactive($formName, $activeForm){
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container" >
        <div class="form-box <?= isactive('login',$activeForm)?>" id="login-form">
         <form action="login_register.php" method="POST">
            <h1>Log in</h1>
            <?= showError($errors['login']); ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Log in</button>
            <div class="link">
            <p>Don't have an account ? <a href="#register-form"  onclick="showForm('register-form')" id="register-link">Register here</a></p>
        </div>
         </form>
        </div>
        
    

    <div class="form-box <?= $activeForm('register', $activeForm);?>" id="register-form">
        <form method="post" action="login_register.php">
            <h1>Register</h1>
            <?= showError($errors['register']); ?>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <!-- <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required> -->
                <select name="role" id="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <button type="submit" name="register">Register</button>
                <div class="link">
                    <p>Already have an account ? <a href="#login-form" onclick="showForm('login-form')" id="login-link">Log in here</a></p>
                </div>
            </form>
        
            
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>