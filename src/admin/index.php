<?php
    include('../config/header.php');
?>
<div class="main">
    <div class="container">
        <h2 class="heading">Thông tin</h2>

        <a href="<?php echo SITEURL; ?>src/admin/add_patient.php" class="btn btn-add">Add patient</a>
        <table class="table align-middle">
            <tr>
                <th class="col-md-1">STT</th>
                <th class="col-md-1.5">Họ đệm</th>
                <th class="col-md-1.5">Tên</th>
                <th class="col-md-1.5">Ngày sinh</th>
                <th class="col-md-1">Giới tính</th>
                <th class="col-md-2">Phone</th>
                <th class="col-md-1">Sửa</th>
                <th class="col-md-1">Xóa</th>
                <th class="col-md-1.5">Chi tiết</th>

            </tr>
            <?php
                $sql = "SELECT * FROM patient";
                $res = mysqli_query($con, $sql);
                if($res==TRUE)
                {
                    $count = mysqli_num_rows($res);
                    if($count>0)
                    {
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $id = $row['patiendtid'];
                            $first_name = $row['firstname'];
                            $last_name = $row['lastname'];
                            $birthday = $row['dateofbirth'];
                            $gender = $row['gender'];
                            $phone = $row['mobile'];

            ?>

                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $first_name ?></td>
                                <td><?php echo $last_name ?></td>
                                <td><?php echo $birthday ?></td>
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
                                <td>
                                    <a href="update_patient.php?id=<?php echo $id; ?>">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete_patient.php?id=<?php echo $id; ?>">
                                        <i class="fas fa-times delete"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="properties.php?id=<?php echo $id?>">Chi tiết</a>
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