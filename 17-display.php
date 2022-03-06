<html>
<body bgcolor="pink">
<center><h2>Simple Library Management System</h2></center>
<br>
<?php
include("17-c.php");
$search = $_REQUEST["search"];
$query = "select acc_no,title,author,edition,pub from
book where Title like '%$search%'"; 
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
    ?>
    <table border="2" align="center" cellpadding="5"
    cellspacing="5">
    <tr>
    <th> ISBN </th>
    <th> Title </th>
    <th> Author </th>
    <th> Edition </th>
    <th> Publication </th>
    </tr>
    <?php 
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
        <tr>
        <td><?php echo $row["acc_no"];?> </td>
        <td><?php echo $row["title"];?> </td>
        <td><?php echo $row["author"];?> </td>
        <td><?php echo $row["edition"];?> </td>
        <td><?php echo $row["pub"];?> </td>
        </tr>
        <?php
    }
}
else
echo "<center>No books found in the library by the name $search
</center>" ;
?>
</table>
</body>
</html>
<br>