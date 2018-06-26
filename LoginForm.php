<!DOCTYPE html>
<head>
    <title>
        Student Information
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

<section class="content" style="margin:auto; width: 50%;   padding: 50px;">

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <img src="Seeklogo.png" class="img-md" style="margin:auto;">

                    <div class="card-header">
                        <h3 class="card-title text-center">Login</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form role="form" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>User Name:</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter User Name">
                                <label>Password:</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="save" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
</body>
</html>

<?php
$db = mysqli_connect('localhost','root','','seekstudents');
if(isset($_POST['save']))
{
    $Uname = $_POST['username'];
    $Pass = $_POST['password'];
    if($Uname!=''&& $Pass!='')
    {
        $query="select * from adminlogin where UserName='".$Uname."' and Password='".$Pass."'";
        $result=mysqli_query($db,$query);
        if(!$result)
            die("Query Failed: " .  mysqli_error($db));
        else{
            if(mysqli_num_rows($result)>0)
            {
                header("location:InformationForm.php");
            }
            else
            {
                echo 'Your Entered Username or Password is Incorrect';
            }
        }
    }
}

?>





















