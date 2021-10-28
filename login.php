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
    <form action="/login_controller.php" method="POST" name="signin-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" require/>
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" require/>
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>
</body>
</html>