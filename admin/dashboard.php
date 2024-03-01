<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url(https://img.freepik.com/free-vector/house-moving-concept-with-men_23-2148639608.jpg?t=st=1709266795~exp=1709270395~hmac=98118c4117dc3955504dc2f1e0cf9f57becb9943bd7cf08ee35093048e97120b&w=1480);
        background-size: cover;
        }
</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:aliceblue;">LoginAsUser</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Welcome To Admin Dashbord</h1>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: center;color:lightblue;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->

    <a href="deletedata.php">Delete Data</a><br><br>

    <a href="deleteusers.php">Delete Users</a><br><br>
</form>

</div>
</body>
</html>