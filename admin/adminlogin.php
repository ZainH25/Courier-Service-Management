<!-- admin logIn page and login logic -->
<?php

session_start();
if (isset($_SESSION['uid'])) {

    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<!--
<body bgcolor="#067d64">
    <h5><a href="../index.php" style="float: right; margin-right:50px; color:#00BCD4">BackToHome</a></h5><br>
    <h1 align='center' style="color: #00BCD4;font-size:60px">Admin Login</h1>
    <h6 align='center' style="color: #212121;font-weight: bold;font-size:15px">Swagat Nahi Karoge Hamara..</h6>
    <form action="adminlogin.php" method="POST" style="margin: auto;">
        <table align="center">
            <tr>
                <td>Email_ID:</td>
                <td><input type="email" name="uname" require></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" require></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="Login" style="cursor: pointer;"></td>
            </tr>
        </table>
    </form>
</body>

</html>


-->

<body style=" min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
background-image: url(https://img.freepik.com/free-photo/flat-lay-plane-boxes_23-2149853128.jpg?w=1480&t=st=1709275766~exp=1709276366~hmac=f4c0824db6d9095eaff87b7d55a65ea6f54f5a4db0a7e83cd5b871ddc296fdea);
background-size: cover;
background-position: center;">
    <h5><a href="../index.php" style="     position: fixed;
        top: 20px;
        right: 20px;
        color: #f0f8f9;
        text-decoration: none; color:#f0f8f9">BackToHome</a></h5><br>
    
    
    <form style="background: rgba(64, 64, 64, 0.15);
    border: 3px solid rgba(255, 255, 255, 0.3);
    padding: 30px;
    border-radius: 16px;
    backdrop-filter: blur(25px);
    text-align: center;
    color: white;
    width: 400px;
    box-shadow: 0px 0px 20px 10px rgba(0, 0, 0, 0.15);" action="adminlogin.php" class="login-form" method="POST" style="margin: auto;">
        <h1 style="nt-size: 40px; margin-bottom: 40px;" class="login-title">ADMIN LOGIN</h1>

        <div style="  margin: 20px 0;
        position: relative;"  class="input-box">
            <i class='bx bxs-user'></i>
            <input type="email" placeholder="Username" name="uname" require>
        </div>
        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" placeholder="Password" name="pass" require>
        </div>
<!--
        <div class="remember-forgot-box">
            <label for="remember">
                <input type="checkbox" id="remember">
                Remember me
            </label>
            <a href="#">Forgot Password?</a>
        </div>
-->

<!--
        <p class="register">
            Don't have an account?
            <a href="#">Register</a>
        </p>
        
-->
             <button class="login-btn" type="submit" name="login" value="Login">Login</button>
    </form>

</body>
</html>
<?php

include('../dbconnection.php');
if (isset($_POST['login'])) {
    $ademail = $_POST['uname'];
    $password = $_POST['pass'];
    $qry = "SELECT * FROM `adlogin` WHERE `email`='$ademail' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            alert("Only admin can login..");
            window.open('adminlogin.php', '_self');
        </script><?php
    }
    else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['a_id'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
    }
}
?>