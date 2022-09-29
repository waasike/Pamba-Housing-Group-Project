<!DOCTYPE HTML>
<html>

<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <form action="insert.php" method="POST">
        <header>Sign Up</header> <br>
            <table>
            <h3 id="head">In order to register Succesfully,<br> Send ksh.1000 to till no.5555</h3> <br>
                <tr class="spaceUnder">
                    <td  id="row1">First Name :</td>
                    <td><input type="text" name="firstname" placeholder="First Name" required style="height: 30px"></td>
                </tr>
                <tr class="spaceUnder">
                    <td>Last Name :</td>
                    <td><input type="text" name="lastname" placeholder="Last Name" required style="height: 30px"></td>
                </tr>
                <tr class="spaceUnder">
                    <td>Mpesa Name :</td>
                    <td><input type="text" name="mpesaname" placeholder="Mpesa Full Names(transacted with)" required style="height: 30px"></td>
                </tr>
                <tr class="spaceUnder">
                    <td>Email Address :</td>
                    <td><input type="email" name="email" placeholder="Enter your email" required style="height: 30px"></td>
                </tr>
                <tr class="spaceUnder">
                    <td>Password :</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter a password" required style="height: 30px">
                    </td>
                </tr>
                
                <tr>
                    <td><div class="fieldbutton"><input type="submit" value="Submit" name="submit"></div></td>
                </tr>

                <tr>
                    <!-- <td><input type="submit" value="Submit" name="submit"></td> -->
                    <!-- <div id="linking"><td><a href="login.php">Login now</a></td></div> -->
                    
                </tr>
                
            </table><br>

            <a href="login.php" style="display: block;text-align: center;text-decoration: none;">
                    Already have an account? Login here
                    </a>
        </form>
    </div>
</body>

</html>