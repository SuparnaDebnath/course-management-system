<?php
if (isset($_POST['btn'])) {
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $department = $_POST['department'];
    $roll_number = $_POST['roll_number'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'enrollment_system';

    $link = mysqli_connect($host, $user, $password, $database);
    if (!$link) {
        die('connection fail' . mysqli_error($link));
    }

    $sql = "INSERT INTO add_student (student_name,father_name,mother_name,address,phone_number,department,roll_number) VALUES ('$student_name','$father_name','$mother_name','$address','$phone_number','$department','$roll_number')";
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
                <h1 class="h1">Add New Student</h1>
                <form action="" method="post" >
                    <div class="form">
                        <table>
                            <tr>
                                <td class="form1">Student_Name</td>
                                <td><input class="form2 input " type="text" name="student_name"></td>
                            </tr>
                            <tr>
                                <td class="form1">Father name</td>
                                <td><input class="form2 input" type="text" name="father_name"></td>
                            </tr>
                            <tr>
                                <td class="form1">Mother name</td>
                                <td><input class="form2 input" type="text" name="mother_name"></td>
                            </tr>
                            <tr>
                                <td class="form1">Address</td>
                                <td><textarea class="form2" rows="3" cols="5" name="address"></textarea></td>
                            </tr>
                            <tr>
                                <td class="form1">Phone_Number</td>
                                <td><input class="form2 input" type="text" name="phone_number"></td>
                            </tr>
                            <tr>
                                <td class="form1">Department</td>
                                <td>
                                    <input class="radio" type="radio" name="department" value="CSE">CSE
                                    <input class="radio" type="radio" name="department" value="BBA">BBA
                                    <input class="radio" type="radio" name="department" value="ECE">ECE

                                </td>
                            </tr>
                            <tr>
                                <td class="form1">Roll_number</td>
                                <td><input class="form2 input" type="text" name="roll_number"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="submit" type="submit" name="btn" value="Submit"></td>
                            </tr>
                        </table>

                    </div>
                </form> 
            </div>
            <div class="col-1 content_height background-1" ></div>
        </div>

        <div class="row">
            <div class="col-12 footer_height background-1"></div>
        </div>
    </div>

</body>
</html>
