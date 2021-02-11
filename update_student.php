<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'enrollment_system';

$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('connection fail' . mysqli_error($link));
}
$result = '';
if (isset($_POST['search'])) {
    $search = $_POST['search_box'];


    $sql = "SELECT * FROM add_student WHERE roll_number='$search' or student_name='$search'";
    $result = mysqli_query($link, $sql);
}
if (isset($_POST['update'])) {
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];
    $roll_number = $_POST['roll_number'];



    $sql = "UPDATE add_student SET student_name='$student_name',father_name='$father_name', mother_name='$mother_name', address='$address', phone_number='$phone_number', department='$department' WHERE roll_number='$roll_number'";
    if (mysqli_query($link, $sql)) {
        echo 'successful';
    } else {
        die('query problem' . mysqli_error($link));
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">

    </script>
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-3 header_height background-1">
                <a class="logo" href="dashboard.php"><img src="images/IST.png" width="90%" height="90%" alt="IST" /></a>

            </div>
            <div class="col-9 header_height background-1"></div>
        </div>
        <!--            <div class="row">
                        <div class="col-12 menu_height">
                                            </div>
                    </div>-->
        <div class="row">
            <div class="col-2 content_height background-2">
                <ul>
                    <li class="li"><a class="a" href="Dashboard.php">Dashboard</a></li>
                    <li class="li" ><a class="a" href="Add_Student.php" >Add Student</a></li>
                    <li class="li" ><a class="a" href="student_info.php">Student Information</a></li>
                    <li class="li" ><a class="a" href="#">Faculty Member<span class="sub_arrow"></span> </a>
                        <ul>
                            <li class="li1"><a class="a1" href="add_member.php">Add Member</a></li>
                            <li class="li1"><a class="a1" href="faculty_members.php">Faculty Members</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
            <div class="col-9 content_height ">
                <div style="height: 450px;">
                    <form action="" method="post">
                        <table   style="align-content: center; width: 100%; margin-left: 20px; ">
                            <tr style="border: 1px solid;">
                                <th colspan="7" style="text-align: center; height: 50px; ">Update Student Information</th>
                            </tr>

                            <?php
                            $i = 0;
                            if ($result != '') {
                                while ($rows = mysqli_fetch_assoc($result)) {
//                        $i++;
//                       if($i<=5){ 
                                    ?>
                                    <tr>
                                        <td class="form1 ">Roll_number</td>
                                        <td><input class="form2 input" type="text" name="roll_number" value="<?php echo $rows['roll_number']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="form1">Student_Name</td>
                                        <td><input  class="form2 input " type="text" name="student_name" value="<?php echo $rows['student_name']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="form1">Father name</td>
                                        <td><input class="form2 input" type="text" name="father_name" value="<?php echo $rows['father_name']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="form1">Mother name</td>
                                        <td><input class="form2 input" type="text" name="mother_name" value="<?php echo $rows['mother_name']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="form1">Address</td>
                                        <td><input class="form2 input" type="text" name="address" value="<?php echo $rows['address']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="form1">Phone_Number</td>
                                        <td><input class="form2 input" type="text" name="phone_number" value="<?php echo $rows['phone_number']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td class="form1">Department</td>
                                        <td><input class="form2 input" type="text" name="department"  value="<?php echo $rows['department']; ?>"></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><input class="button" style=" height: 30px; width: 100px; margin-left: 260px; margin-top: 10px;" type="submit" name="update" value="UPDATE"></td>
                                    </tr>
                                    



                                    <?php
//                       }
                                }
                            }
                            ?>
                            <tr>

                                <td><input style="height: 30px; width: 100px; margin-left:200px;" type="text" name="search_box" placeholder="search"></td>
                                <td><input class="button" style="height: 30px; width: 100px; margin-right: 400px;" type="submit" name="search" value="SEARCH"></td>

                            </tr>
                        </table> 
                    </form>
                </div>
                <div   style="margin: 100px 100px;">
                    <form action="" method="post">
                        <table >



                        </table>
                    </form>
                </div>
            </div>
            <div class="col-1 content_height background-1" ></div>
        </div>

        <div class="row">
            <div class="col-12 footer_height background-1"></div>
        </div>
    </div>

</body>
</html>

