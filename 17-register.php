
<?php 
    include ('17-c.php');
    if(isset($_POST['submit'])){
        $acc_no=$_POST['isbn'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $edition=$_POST['edition'];
        $pub=$_POST['publication'];

        $query="INSERT INTO book(acc_no,title,author,edition,pub) VALUES('$acc_no','$title','$author','$edition','$pub')";
        $result=mysqli_query($conn,$query);
        if($result){
            echo "Book added successfully";
        }
        else{
            echo "Error: ".$query."<br>".mysqli_error($conn);
        }

    }


?>

<html>
<body bgcolor="cyan">
<center><h2>Simple Library Management System</h2></center>
<form action="#" method="post">
<table border="2" align="center" cellpadding="5"
cellspacing="5">
<tr>
<td> Enter Acc_No :</td>
<td> <input type="text" name="isbn" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>

<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>