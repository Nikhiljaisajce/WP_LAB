<?php 
include ('12c.php'); 

if (isset($_POST['submit'])){
    $uname=$_POST['username'];
    $pwd=$_POST['password'];
    $email=$_POST['email'];
    $ph=$_POST['contact'];

    $sql="INSERT INTO user(name,password,email,contact) VALUES('$uname','$pwd','$email','$ph')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        die(header("Location: 12h.php"));
        echo "Successfully registered";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}
?>


<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h1>Registration</h1>
    <form action="12r.php" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" size="20" maxlength="20" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" size="20" maxlength="20" /></td>
            </tr>
            <tr>
                <td>contact:</td>
                <td><input type="contact" name="contact" size="20" maxlength="20" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" size="20" maxlength="20" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Register" /></td>
            </tr>
    </form>
</body>

</html>