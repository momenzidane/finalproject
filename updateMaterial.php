<?php
 require_once 'connectionDB.php';

 $id = $_GET['id'];
 $sql = "select * from material where id=".$id;
 $result = mysqli_query($connection,$sql);
 if(mysqli_num_rows($result)>0){
     $row = mysqli_fetch_assoc($result);

     $name = $row["name"];
     $teacher= $row["teacher"];
     $numOfHours= $row["numOfHours"];
 }

 if(isset($_POST['std_update'])){
    // $id = $_POST["id"];
    $name= $_POST["name"];
    $teacher= $_POST["teacher"];
    $numOfHours = $_POST["numOfHours"];
    
    // $sql = "UPDATE student SET id = $id , FirstName='$FirstName', LastName = '$LastName', gpa= $gpa where id=".$id;
    $sql = "UPDATE `material` SET `name`='$name',`teacher`='$teacher',`numOfHours`='$numOfHours' WHERE id=".$id;
     if(mysqli_query($connection,$sql)){
        header('Location:material.php');
        exit();
     }else
     echo "Error";
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update</title>

     <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>

<!--  -->
<div class="main">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Update</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <!-- <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id"  placeholder="Your id" value=""/>
                            </div> -->
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="name"  placeholder="Your FirstName" value="<?php echo $name;?>"/>
                            </div>
                            <div class="form-group">
                                <label for="teacher"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="teacher"  placeholder="LastName" value="<?php echo $teacher;?>"/>
                            </div>
                            <div class="form-group">
                                <label for="numOfHours"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="numOfHours"  placeholder="Your gpa" value="<?php echo $numOfHours;?>"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="std_update" class="form-submit" value="Update"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.png" style="margin-top: -45px;" alt="sing up image"></figure>
                        <!-- <a href="#u" class="signup-image-link">I am already member</a> -->
                    </div>
                </div>
            </div>
        </section>
</div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
 </body>
 </html>