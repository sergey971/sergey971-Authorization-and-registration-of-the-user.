<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="/registration.php" method="POST" name="sign-form">
        <font></font>
        <div class="form-element"><font></font>
        <label>Username</label><font></font>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" require/><font></font>
        </div><font></font>
        <div class="form-element">
            <label>Email</label>
            <input type="email" name="email" require/>
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" require/>
        </div>
        <button type="submit" name="register" value="register">Register</button>
    </form>
</body>

</html>