<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'enrollment_system';

$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('connection fail' . mysqli_error($link));
}

$sql = "SELECT * FROM add_student";
$result = mysqli_query($link, $sql);
if(isset($_POST['delete_all'])){
    $delete_all="TRUNCATE add_student";
    mysqli_query($link, $delete_all);
}
if (isset($_POST['search_engine'])) {
    $search=$_POST['search_engine_box'];
    echo $search;
    $search_engine = "SELECT * FROM add_student WHERE student_name='$search' or department='$search' or roll_number='$search'";
   $result= mysqli_query($link, $search_engine);
   
}
if(isset($_POST['delete'])){
$delete= $_POST['delete_box'];


$delete_item = "DELETE FROM add_student WHERE roll_number='$delete' or student_name='$delete' or department='$delete'";
mysqli_query($link, $delete_item);

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
                <div  class="col-4 footer_height" style="border: white; margin-left: 530px;">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td ><input style=" height: 30px;" type="text" name="search_engine_box" value="search"></td>
                                <td ><input style="width: 80px; height: 30px;" type="submit" name="search_engine" value="Search"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div style="height: 400px;">
                     <table  border="1px solid" style="align-content: center; width: 100%; ">
                    <tr style="border: 1px solid;">
                        <th colspan="7" style="text-align: center; height: 50px;">All Student Information</th>
                    </tr>
                    <tr>
                        <th >Roll Number</th>
                        <th >Student Name</th>
                        <th >Department</th>
                        <th >Father Name</th>
                        <th >Mother Name</th>
                        <th >Address</th>
                        <th >Phone Number</th>
                        

                    </tr>
<?php
$i = 0;

while ($rows = mysqli_fetch_assoc($result)) {
//                        $i++;
//                       if($i<=5){ 
    ?>
                        <tr>
                            <td ><?php echo $rows['roll_number']; ?></td>
                            <td ><?php echo $rows['student_name']; ?></td>
                            <td ><?php echo $rows['department']; ?></td>
                            <td ><?php echo $rows['father_name']; ?></td>
                            <td ><?php echo $rows['mother_name']; ?></td>
                            <td ><?php echo $rows['address']; ?></td>
                            <td ><?php echo $rows['phone_number']; ?></td>
                            

                        </tr>
    <?php
//                       }
}
?>
                </table> 
                </div>
                <div   style="margin: 100px 100px;">
                    <form action="" method="post">
                        <table >
                            <tr>
                                
                                <td><input style="height: 30px; width: 100px;" type="text" name="delete_box" value=""></td>
                                <td><input class="button" style="height: 30px; width: 100px;" type="submit" name="delete" value="DELETE"></td>
                                <td><input  class="button" style="height: 30px; width: 100px;" type="submit" name="delete_all" value="DELETE-ALL"></td>
                                
                                <td><a style="text-decoration: none;" href="update_student.php"><input class="button" style="margin-left: 50px; height: 30px; width: 100px;" type="button" name="update" value="UPDATE"></a></td>
                            </tr>
                           
                                
                            
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

