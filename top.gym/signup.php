<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylelogin-signup.css">

</head>

<body>
    <div class="container">
        <h1>Sign up</h1>
        <div class="register">
            <p>Creat your account </p>

        </div>

        <form action="connect.php" method="post">
            <input type="text" placeholder="Username" name="username" required class="form-control"><br>
            <input type="email" placeholder="Email" name="email" required class="form-control "><br>
            <input type="password" placeholder="Password" name="password" required class="form-control"><br>
            <input type="password" placeholder="Confirm Password" name="cpassword" required class="form-control"><br>

            <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
        </form>
        
        <div class="register">
            <p>Already have an account? <a href="index.php">Login</a></p>
        </div>

    </div>
</body>

</html>