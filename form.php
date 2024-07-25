<?php include ("connection.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content ="width=device-width, initial-scale-1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP CRUD Operations</title>
</head>
<body>

<div class ="container">
    <form action="#" method="POST">
    <div class="title">
        Employee Management
</div>
<div class="form">
    <div class="input_field">
        <label>First Name</label>
        <input type="text" class="input" name="fname" required>
</div>
<div class="input_field">
        <label>Last Name</label>
        <input type="text" class="input" name="lname" required>
</div>
<div class="input_field">
        <label>Password</label>
        <input type="password" class="input" name="password" required>
</div>
<div class="input_field">
        <label>confirm password</label>
        <input type="password" class="input" name="conpassword" required>
</div>
<div class="input_field">
        <label>Gender</label>
        <div class="custom_select">
        <select name="gender" required>
            <option>select</option>
            <option>Male</option>
            <option>Female</option>
</select>
</div>
</div>
<div class="input_field">
        <label>Email</label>
        <input type="text" class="input" name="email" required>
</div>
<div class="input_field">
        <label>Phone</label>
        <input type="password" class="input" name="phone" required>
</div>
<div class="input_field">
        <label>position</label>
        <textarea class="textarea" name="position" required></textarea>
</div>
<div class="input_field terms">
        <label class="check">
        <input type="checkbox">
        <span class="checkmark"></span>
</label>
<p>Agree to terms and conditions</p>
</div>
<div class="input_field">
    <input type="submit" value="register" class="button" name="register">
</div>
</form>
</div>
</body>
</html>

<?php
 if($_POST['register'])
 {
    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $position  = $_POST['position'];
    

    $query = "INSERT INTO FORM (fname,lname,password,cpassword,gender,email,phone,position) VALUES('$fname' ,'$lname','$pwd','$cpwd','$gender','$email','$phone','$position')";
    $data = mysqli_query($conn,$query);

    /*if($data)
    {
        echo "Data Inserted";
    }
    else
    {
        echo "Failed";
    }*/
  }
 ?>