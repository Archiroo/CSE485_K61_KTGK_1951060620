<?php
include('../config/header.php');
?>
<div class="main">
    <div class="container">
        <h2 class="heading">Update patient</h2>
        <form action="" method="POST" class="register">
            <div class="form-group">
                <span>First name</span>
                <input type="text" class="form-control" name="name1">
            </div>
            <div class="form-group">
                <span>Last name</span>
                <input type="text" class="form-control" name="name2">
            </div>
            <div class="form-group">
                <span>Date of birth</span>
                <input type="date" class="form-control" name="date1">
            </div>
            <div class="form-group">
                <span>Gender</span>
                <br>
                <div class="gender">
                    <input type="radio" name = "gender" value="1"><span>Nam</span>
                    <input type="radio" name = "gender" value="0"><span>Nữ</span>
                </div>
            </div>
            <div class="form-group">
                <span>Phone</span>
                <input type="tel" class="form-control" name="phone1">
            </div>
            <div class="form-group">
                <span>Email</span>
                <input type="email" class="form-control" name="mail">
            </div>
            <div class="form-group">
                <span>Height</span>
                <input type="text" class="form-control" name="height">
            </div>
            <div class="form-group">
                <span>Weight</span>
                <input type="text" class="form-control" name="weight">
            </div>
            <div class="form-group">
                <span>Blood type</span>
                <input type="text" class="form-control" name="blood">
            </div>
            <div class="form-group">
                <span>Created on</span>
                <input type="date" class="form-control" name="date2">
            </div>
            <div class="form-group">
                <span>Modifiled on</span>
                <input type="date" class="form-control" name="date3">
            </div>
            
            <input type="submit" name="submit" value="Add patient" class="btn">
        </form>
    </div>
</div>

<?php

    if(isset($_POST['submit']))
    {
        $first_name = $_POST['name1'];
        $last_name = $_POST['name2'];
        $birthday = $_POST['date1'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone1'];
        $email = $_POST['mail'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood = $_POST['blood'];
        $date2 = $_POST['date2'];
        $date3 = $_POST['date3'];
        $sql = "INSERT INTO patient(firstname, lastname, dateofbirth, gender, mobile, email, height, weight, blood_type, created_on, modified_on) 
        VALUES ('$first_name','$last_name','$birthday','$gender', '$phone',' $email','$height','$weight','$blood',' $date2','$date3')";
        $res = mysqli_query($con, $sql);
        if($res==TRUE)
        {
            header("Location:index.php");
        }
        else
        {
            header("Location:update_patient.php");
        }
    }
?>
<?php
    include('../config/footer.php');
?>