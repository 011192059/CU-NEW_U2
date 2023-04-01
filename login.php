
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form class="formbox" action="loginprocess.php" method="POST">

    <div style="font-size: 20px;margin: 10px;"><b>Log In</b></div>

        <label for="username">Username</label>:
        <input class="text" type="text" id="username" name="username">
        <br>
        <label for="mypass">Password</label>:
        <input class="text" type="text" id="mypass" name="mypass">
        <br>

        <br>
        <input id="button" type="submit" value="Click to Login">
        <!-- <input id="button" type="button" value="Log In As Admin" onclick="a_login()"> -->
    </form>




    <!-- <form id="box" action="b_register.php" method="POST">   -->
    <!-- <div style="font-size: 20px;margin: 10px;">Don't have an account? Register!</div>

            <button id="button" type="submit">Register</button>  -->


    <!-- </form> -->
    <!-- <script>
                    function a_login(){
                        location.assign('a_login.php');   ///default GET method
                    }
     </script>                -->
</body>

</html>
