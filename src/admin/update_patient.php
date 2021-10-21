<?php
include('../config/header.php');
?>
<div class="main">
    <div class="container">
        <h2 class="heading">Update patient</h2>
        <form action="" method="POST" class="register">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM patient Where patiendtid = '$id'";
            $res = mysqli_query($con, $sql);
            if ($res == true) {
                $count = mysqli_num_rows($res);
                if ($count == 1) {
                    $row = mysqli_fetch_assoc($res);

                    $first_name = $row['firstname'];
                    $last_name = $row['lastname'];
                    $birthday = $row['dateofbirth'];
                    $gender = $row['gender'];
                    $phone = $row['mobile'];
                    $email = $row['email'];
                    $height = $row['height'];
                    $weight = $row['weight'];
                    $blood = $row['blood_type'];
                    $date1 = $row['created_on'];
                    $date2 = $row['modified_on'];
                }
            }
            ?>
            <form action="" method="POST" class="register">
                <div class="form-group">
                    <span>First name</span>
                    <input type="text" class="form-control" name="name1" value="<?php echo $first_name ?>">
                </div>
                <div class="form-group">
                    <span>Last name</span>
                    <input type="text" class="form-control" name="name2" value="<?php echo $last_name ?>">
                </div>
                <div class="form-group">
                    <span>Date of birth</span>
                    <input type="date" class="form-control" name="date1" value="<?php echo $birthday ?>">
                </div>
                <div class="form-group">
                    <span>Gender</span>
                    <br>
                    <div class="gender">
                        <input type="radio" <?php if($gender==1) {echo "checked"; }?> name="gender" value="1"> <span>Nam</span>
                        <input type="radio" <?php if($gender==0) {echo "checked"; }?> name="gender" value="0"> <span>Nữ</span>
                    </div>
                </div>
                <div class="form-group">
                    <span>Phone</span>
                    <input type="tel" class="form-control" name="phone1" value="<?php echo $phone ?>">
                </div>
                <div class="form-group">
                    <span>Email</span>
                    <input type="email" class="form-control" name="mail" value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                    <span>Height</span>
                    <input type="text" class="form-control" name="height" value="<?php echo $height ?>">
                </div>
                <div class="form-group">
                    <span>Weight</span>
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight ?>">
                </div>
                <div class="form-group">
                    <span>Blood type</span>
                    <input type="text" class="form-control" name="blood" value="<?php echo $blood ?>">
                </div>
                <div class="form-group">
                    <span>Created on</span>
                    <input type="date" class="form-control" name="date2" value="<?php echo $date2 ?>">
                </div>
                <div class="form-group">
                    <span>Modifiled on</span>
                    <input type="date" class="form-control" name="date3" value="<?php echo $date2 ?>">
                </div>

                <input type="submit" name="submit" value="Update patient" class="btn">
            </form>
    </div>
</div>

<?php
    if(isset($_POST['submit']))
    {
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $date1 = $_POST['date1'];
        $gender1 = $_POST['gender'];
        $phone1 = $_POST['phone1'];
        $email1 = $_POST['mail'];
        $height1 = $_POST['height'];
        $weight1 = $_POST['weight'];
        $blood1 = $_POST['blood'];
        $date2 = $_POST['date2'];
        $date3 = $_POST['date3'];
        $sql2 = "UPDATE patient SET firstname='$name1',lastname= '$name2',dateofbirth='$date1',gender=' $gender1',
        mobile='$phone1', email='$email1',height='$height1', weight ='$weight1',blood_type='$blood1',created_on='$date2',modified_on='$date3' 
        WHERE patientid = '$id'";
        $res2 = mysqli_query($con, $sql);
        if($res2==true)
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