<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper2">

        <div id="header">
            <div>Login</div>
        </div>
        <!-- <div id="error">some text</div> -->
        <form action="insert.php" method="POST" id="myform">
            <p id="text1">Email : <p> <input type="text" name="email" placeholder="Email" style="height: 30px"><br><br>
            <p id="text1">Password : </p><input type="password" name="password" placeholder="Password" style="height: 30px"><br>
            <input type="submit" value="Login" id="login_button"><br>

            <br>
            <a href="form.php" style="display: block;text-align: center;text-decoration: none">
                Dont have an Account? Signup here
            </a>
        </form>
    </div>
</body>

</html>