<?php

$host="localhost";
$user="root";
$password="";
$db="demo";
$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select * from loginform where username='".$username."'AND password='".$password."'";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["UserName"]=="user1234" and $row["Password"]=="123456"){
        echo "<h1><b><i>Welcome User</i></b></h1>";
    }
    else{
        echo "<h1>wrong credentials</h1>";
    }
}

?>


<html>
    <head>
    <title>
        Login
    </title>
    <link rel="stylesheet" a href="css3\style.css"/>
    <link rel="stylesheet" a href="css3\font-awesome.min.css"/>
</head>
<body>
    <div class="container"><br><br><br><br><br><br>
        <center>
        <form method="POST" action="#">
            <div class="form_input">
                <label style="text-align:left">UserName</label><br><br>
                <input type="text" name="username" minlength="6" maxlength="12" placeholder="enter Username" required/><br><br>
            </div>
            <div class="form_input">
                <label style="text-align:left">Password</label><br><br>
                <input type="password"  name="password" minlength="6" placeholder="Enter Password" required/><br><br>
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
        </form>
</center>
    </div>
</body>
</html>