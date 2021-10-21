<?php
include('../config/header.php');
?>
<div class="main">
    <div class="container">
        <h2 class="heading">Thông tin chi tiết</h2>
        <table class="table align-middle">
            <tr>
                <th class="col-md-0.5">STT</th>
                <th class="col-md-0.5">Name</th>
                <th class="col-md-2">Last name</th>
                <th class="col-md-1">Date</th>
                <th class="col-md-0.5">Gender</th>
                <th class="col-md-1">Mobile</th>
                <th class="col-md-1">Email</th>
                <th class="col-md-1">Height</th>
                <th class="col-md-1">Weight</th>
                <th class="col-md-1">Blood type</th>
                <th class="col-md-1">Created on</th>
                <th class="col-md-1">Modified on</th>
                <th class="col-md-1">Back</th>

            </tr>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM patient WHERE patiendtid = '$id'";
                $res = mysqli_query($con, $sql);
                if($res==TRUE)
                {
                    $count = mysqli_num_rows($res);
                    if($count>0)
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                           
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

            ?>

                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $first_name; ?></td>
                                <td><?php echo $last_name; ?></td>
                                <td><?php echo $birthday; ?></td>
                                <td>
                                    <?php 
                                        if($gender == 1)
                                        {
                                            echo "Nam";
                                        }
                                        else
                                        {
                                            echo "Nữ";
                                        }
                                    
                                    ?>
                                </td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $height; ?></td>
                                <td><?php echo $weight ?></td>
                                <td><?php echo $blood ?></td>
                                <td><?php echo $date1 ?></td>
                                <td><?php echo $date2 ?></td>
                                <td>
                                    <a href="index.php">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </td>
                            </tr>
            <?php
                
                        }
                        
                    }
                }

            ?>
            
        </table>
    </div>
</div>
<?php

    include('../config/footer.php');
?>