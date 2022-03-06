<?php include ('12c.php'); ?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body><center>
        <h1>User details</h1>
        <table border="2" cellpadding="5" cellspacing="5" width="90%">
            <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            </tr>
<?php
    
    $sql = "SELECT name,email,contact FROM user";
    $retval = mysqli_query( $conn, $sql);
    $rows = mysqli_fetch_all($retval, MYSQLI_ASSOC );
    $count=1;
    foreach((array)$rows as $row){
        $name=$row['name'];
        $contact=$row['contact'];
        $email=$row['email'];

        echo '
        
        <tr>
        <td>'.$count.'</td>
        <td>'.$name.'</td>
        <td>'.$contact.'</td>
        <td>'.$email.'</td>
        </tr>

        ';
        $count++;
    }
?>
</table></center>
    </body>
</html>