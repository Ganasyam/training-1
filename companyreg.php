<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: white;" >
<!-- Grey with black text -->
<!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="companyreg.php">Company Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="companysearch.php">Search Company</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="companydel.php">Delete Company</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="compupdate.php">Update Company</a>
    </li>
  </ul>
</nav> -->
    
    <div class="container">

    <br>
    <br>
    <br>
    
        <div class="row">
            <div class="col col-12 col-sm-3">

        </div>
        <div class="col col-12 col-sm-6">
              <form action="" method="post">
                <table class="table table-borderless table-striped">
                    <h1><center><strong>COMPANY REGISTRATION</strong></center></h1>
                    <tr>
                        <td><b>Name</b></td>
                        <td><input type="text" class="form-control" name="name" required></td>
                    </tr>
                    <tr>
                        <td><b>Manager</b></td>
                        <td><input type="text" class="form-control" name="manager" required></td>
                    </tr>
                    <tr>
                        <td><b>Contact Number</b></td>
                        <td><input type="text" class="form-control" name="contactno"pattern="[6789]{1}[0-9]{9}" required ></td>
                    </tr>

                    <tr>
                        <td><b>Email Id</b></td>
                        <td><input type="email" class="form-control" name="email" required ></td>
                    </tr>
                    <tr>
                        <td><b>Username</b></td>
                        <td><input type="text" class="form-control" name="username" required></td>
                    </tr>
                    <tr>
                        <td><b>Password</b></td>
                        <td><input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="SUBMIT" class="btn btn-success" name="submit"></td>
                    </tr>


                    <tr>
                        <td></td>
                        <td><a href="companylogin.php">Company LogIn</a> </td>
                    </tr>
                    <tr>
                    <td></td>
                    <td> <a href="admin.php">Admin LogIn</a>  </td>
                    </tr>
                    
                </table>
                </form>
            </div>

            <div class="col col-12 col-sm-3">
            </div>    
    </body>
</html>
<?php
if(isset($_POST["submit"]))
{
  $email=$_POST["email"];
$name=$_POST["name"];
$manager=$_POST["manager"];
$contactno=$_POST["contactno"];
$username=$_POST["username"];
$password=$_POST["password"];
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="training";

$connection=new mysqli($server_name,$db_username,$db_password,$db_name);
$sql="INSERT INTO `company`(`name`, `manager`, `contactno`, `username`,`password`,email) VALUES ('$name','$manager','$contactno','$username','$password','$email')";
$result= $connection->query($sql);
if($result===TRUE)
{

  echo "<script>alert('Registered Succesfully')  </script>";

  echo "<script> window.location.href='companylogin.php'  </script>";
}
else
{
echo "Error in insertion" . $connection->error;
}
}
?>


