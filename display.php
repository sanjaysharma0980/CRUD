<html>
    <head>
        <title>Display</title>
        <style>
        body
        {
background: lightblue;
        }
        table
        {
            background:white;
        }
        </style>
</head>
</html>
<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $total;
if($total !=0)
{
    ?>
<h2 align="center"><mark>Display All Records</mark></h2>
    <table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="5%">ID</th>  
        <th width="10%">First Name</th>
        <th width="10%">Last Name</th>
        <th width="10%">Gender</th>
        <th width="10%">Email</th>
        <th width="10%">Phone</th>
        <th width="10%">Position</th>
</tr>

<?php
 while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
       <td>". $result["id"]."</td>
        <td>". $result["fname"]."</td>
        <td>".$result["lname"]." </td>
        <td> ".$result["gender"]." </td>
        <td> ".$result["email"]."</td>
        <td>".$result["phone"]." </td>
        <td>".$result["Position"]."</td>
</tr>";

    }
}
else
{
    echo"no records found";
}
?>
</table>