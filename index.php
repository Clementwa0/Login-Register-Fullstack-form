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
        <div class="form-box active" id="login-form">
         <form>
            <h1>Log in</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Log in</button>
         </form>
        </div>
        <div class="link">
            <p>Don't have an account ? <a href="#register-form"  onclick="showForm('register-form')" id="register-link">Register here</a></p>
        </div>

    <div class="form-box" id="register-form">
        <form>
            <h1>Register</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <button type="submit">Register</button>
        </form>
        <div class="link">
            <p>Already have an account ?
                <a href="#login-form" onclick="showForm('login-form')" id="login-link">Log in here</a></span>
            </p>
        </div>
    </div> 
        
    </div>

    <script src="script.js"></script>
</body>

</html>