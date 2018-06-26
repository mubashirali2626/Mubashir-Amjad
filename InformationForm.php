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
<section class="content" style="margin:auto; width: 50%;   padding-top: 30px; padding-left: :0px; padding-right: 0px;">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <img src="Seeklogo.png" class="img-md" style="margin:auto;">

                    <div class="card-header">
                        <h3 class="card-title text-center">Student's Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student's Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Student's Name">
                                <label for="exampleInputEmail1">Father's/Guardian's Name:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="fathername" placeholder="Enter Father's/Guardian's Name">
                                <label for="exampleInputEmail1">Age:</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter Age">
                                <label for="exampleInputEmail1">Gender:</label>
                                <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
                                <label for="exampleInputEmail1">CNIC:</label>
                                <input type="text" class="form-control" name="cnicc" placeholder="Enter CNIC:">
                                <label for="exampleInputEmail1">Category:</label>
                                <input type="text" class="form-control" name="category" placeholder="Enter Category Orphan/Need Based">
                                <label for="exampleInputEmail1">School:</label>
                                <input type="text" class="form-control" name="school" placeholder="Enter School">
                                <label for="exampleInputEmail1">School's Contact:</label>
                                <input type="text" class="form-control" name="schoolcontact" placeholder="Enter Contact">
                                <label for="exampleInputEmail1">Parent's Contact:</label>
                                <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
                                <label for="exampleInputEmail1">Case Description:</label>
                                <textarea class="form-control" name="description" placeholder="Enter Case's Description"></textarea>
                                <label for="exampleInputEmail1">Area:</label>
                                <input type="text" class="form-control" name="area" placeholder="Enter Student's Area">
                                <div class="form-group">
                                    <label>Supporting From:</label>
                                    <input type="date" class="users-list-date" name="date">
                                </div>
                                <label>Fee Per Month:</label>
                                <input type="text" class="form-control" name="fee" placeholder="Enter Fee Per Month">


                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Image:</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="savee" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

</body>

<?php

$db = mysqli_connect('localhost','root','','seekstudents');
if ($db) {
    echo 'DB is conected SUCCESSFULLY!';
} else {
    echo 'not conected';
}
if(isset($_POST['savee']))
{
    $sname = $_POST['name'];
    $fname = $_POST['fathername'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $cnic = $_POST['cnicc'];
    $category = $_POST['category'];
    $school = $_POST['school'];
    $schoolcontact = $_POST['schoolcontact'];
    $parentcontact = $_POST['contact'];
    $Description = $_POST['description'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $fee = $_POST['fee'];
    //$image = $_POST['image'];

    $query = "INSERT INTO studentinfo (Name,FatherName,Age,Gender,CNIC,Category,School,SchoolContact,ParentContact,Description,Area,Fee) VALUES 
                                     ('$sname','$fname','$age','$gender','$cnic','$category','$school','$schoolcontact','$parentcontact','$Description','$area','$fee')";
    mysqli_query($db,$query);
    if (mysqli_query($db, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }

   // header('location: InformationForm.php');
}
