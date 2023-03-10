<?php include("../config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .row.content {
            height: 100%;
        }

        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
        h4{
            font-size: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><b>ERP Model</b></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php
                if (isset($_GET["transport"]) && $_GET["transport"] == true) {
                    echo "
                            <ul class='nav nav-pills nav-stacked'>
                                <li><a href='./admin.php'>Dashboard</a></li>
                                <li><a href='./transport/drivers.php?query=add'>Add Driver</a></li>
                                <li><a href='./transport/drivers.php?query=manage'>Manage Driver</a></li>
                                <li><a href='./transport/vehicles.php?query=add'>Add Vehicle</a></li>
                                <li><a href='./transport/vehicles.php?query=manage'>Manage Vehicle</a></li>
                                <li><a href='./transport/routes.php?query=add'>Add Route</a></li>
                                <li><a href='./transport/routes.php?query=manage'>Manage Route</a></li>
                                <li><a href='./transport/schedules.php?query=add'>Add Schedule</a></li>
                                <li><a href='./transport/schedules.php?query=manage'>Manage Schedule</a></li>
                                <li><a href='../logout.php'>Logout</a></li>
                            </ul>
                        ";
                } else {
                    echo "
                        <ul class='nav nav-pills nav-stacked'>
                            <li><a href='./admin.php?transport=true'>Transport Management</a></li>
                            <li><a href='./students.php?query=add'>Add Student</a></li>
                            <li><a href='./students.php?query=manage'>Manage Student</a></li>
                            <li><a href='./teachers.php?query=add'>Add Teacher</a></li>
                            <li><a href='./teachers.php?query=manage'>Manage Teacher</a></li>
                            <li><a href='./announcements.php?query=add'>Add Announcements</a></li>
                            <li><a href='./announcements.php?query=manage'>Manage Announcements</a></li>
                            <li><a href='./subjects.php?query=add'>Add Subject</a></li>
                            <li><a href='./subjects.php?query=manage'>Manage Subject</a></li>
                            <li><a href='./classes.php?query=add'>Add Class</a></li>
                            <li><a href='./classes.php?query=manage'>Manage Class</a></li>
                            <li><a href='./timetables.php?query=add'>Add Timetable</a></li>
                            <li><a href='./timetables.php?query=manage'>Manage Timetable</a></li>
                            <li><a href='./syllabuses.php?query=add'>Add Syllabus</a></li>
                            <li><a href='./syllabuses.php?query=manage'>Manage Syllabus</a></li>
                            <li><a href='../logout.php'>Logout</a></li>
                        </ul>
                        ";
                }
                ?>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav hidden-xs">
                <h4><b>ERP Model.</b></h4>
                <?php
                if (isset($_GET["transport"]) && $_GET["transport"] == true) {
                    echo "
                            <ul class='nav nav-pills nav-stacked'>
                                <li><a href='./admin.php'>Dashboard</a></li>
                                <li><a href='./transport/drivers.php?query=add'>Add Driver</a></li>
                                <li><a href='./transport/drivers.php?query=manage'>Manage Driver</a></li>
                                <li><a href='./transport/vehicles.php?query=add'>Add Vehicle</a></li>
                                <li><a href='./transport/vehicles.php?query=manage'>Manage Vehicle</a></li>
                                <li><a href='./transport/routes.php?query=add'>Add Route</a></li>
                                <li><a href='./transport/routes.php?query=manage'>Manage Route</a></li>
                                <li><a href='./transport/schedules.php?query=add'>Add Schedule</a></li>
                                <li><a href='./transport/schedules.php?query=manage'>Manage Schedule</a></li>
                                <li><a href='../logout.php'>Logout</a></li>
                            </ul>
                        ";
                } else {
                    echo "
                            <ul class='nav nav-pills nav-stacked'>
                                <li><a href='./admin.php?transport=true'>Transport Management</a></li>
                                <li><a href='./students.php?query=add'>Add Student</a></li>
                                <li><a href='./students.php?query=manage'>Manage Student</a></li>
                                <li><a href='./teachers.php?query=add'>Add Teacher</a></li>
                                <li><a href='./teachers.php?query=manage'>Manage Teacher</a></li>
                                <li><a href='./announcements.php?query=add'>Add Announcements</a></li>
                                <li><a href='./announcements.php?query=manage'>Manage Announcements</a></li>
                                <li><a href='./subjects.php?query=add'>Add Subject</a></li>
                                <li><a href='./subjects.php?query=manage'>Manage Subject</a></li>
                                <li><a href='./classes.php?query=add'>Add Class</a></li>
                                <li><a href='./classes.php?query=manage'>Manage Class</a></li>
                                <li><a href='./timetables.php?query=add'>Add Timetable</a></li>
                                <li><a href='./timetables.php?query=manage'>Manage Timetable</a></li>
                                <li><a href='./syllabuses.php?query=add'>Add Syllabus</a></li>
                                <li><a href='./syllabuses.php?query=manage'>Manage Syllabus</a></li>
                                <li><a href='../logout.php'>Logout</a></li>
                            </ul>
                        ";
                }
                ?>
            </div>
            <br>

            <div class="col-sm-10">
                <div class="well">
                    <h4><b>Dashboard</b></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, laudantium. Hic suscipit modi, molestiae a veniam tenetur officiis nostrum. Doloribus praesentium dolorum culpa corporis qui quas magnam corrupti enim fugiat.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well">
                            <h4><b>Ongoing Academic Year</b></h4>
                            <p><em>01-06-22 to 01-06-23</em></p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, eaque!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well">
                            <h4><b>Ongoing Financial Year</b></h4>
                            <p><em>01-06-22 to 01-06-23</em></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sequi!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Registered Students</b></h4>
                            <?php
                            $count_students = "SELECT COUNT(*) AS NUM_STUDENTS FROM students";
                            $response = mysqli_query($conn, $count_students) or die(mysqli_error($conn));
                            $num_students = mysqli_fetch_array($response)["NUM_STUDENTS"];
                            echo "<p>$num_students</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Registered Teachers</b></h4>
                            <?php
                            $count_teachers = "SELECT COUNT(*) AS NUM_TEACHERS FROM teachers";
                            $response = mysqli_query($conn, $count_teachers) or die(mysqli_error($conn));
                            $num_teachers = mysqli_fetch_array($response)["NUM_TEACHERS"];
                            echo "<p>$num_teachers</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Active Announcements</b></h4>
                            <?php
                            $count_announcements = "SELECT COUNT(*) AS NUM_ANNOUNCEMENTS FROM announcements WHERE active = 1";
                            $response = mysqli_query($conn, $count_announcements) or die(mysqli_error($conn));
                            $num_active_announcements = mysqli_fetch_array($response)["NUM_ANNOUNCEMENTS"];
                            echo "<p>$num_active_announcements</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Active Subjects</b></h4>
                            <?php
                            $count_subjects = "SELECT COUNT(*) AS NUM_SUBJECTS FROM subjects WHERE active = 1";
                            $response = mysqli_query($conn, $count_subjects) or die(mysqli_error($conn));
                            $num_subjects = mysqli_fetch_array($response)["NUM_SUBJECTS"];
                            echo "<p>$num_subjects</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Active Classes</b></h4>
                            <?php
                            $count_classes = "SELECT COUNT(*) AS NUM_CLASSES FROM classes WHERE active = 1";
                            $response = mysqli_query($conn, $count_classes) or die(mysqli_error($conn));
                            $num_classes = mysqli_fetch_array($response)["NUM_CLASSES"];
                            echo "<p>$num_classes</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Active Drivers</b></h4>
                            <?php
                            $count_drivers = "SELECT COUNT(*) AS NUM_DRIVERS FROM miscellaneous WHERE category = 'driver' AND active = 1";
                            $response = mysqli_query($conn, $count_drivers) or die(mysqli_error($conn));
                            $num_drivers = mysqli_fetch_array($response)["NUM_DRIVERS"];
                            echo "<p>$num_drivers</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Active Vehicles</b></h4>
                            <?php
                            $count_vehicles = "SELECT COUNT(*) AS NUM_VEHICLES FROM vehicles WHERE active = 1";
                            $response = mysqli_query($conn, $count_vehicles) or die(mysqli_error($conn));
                            $num_vehicles = mysqli_fetch_array($response)["NUM_VEHICLES"];
                            echo "<p>$num_vehicles</p>"
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4><b>Active Transport Services</b></h4>
                            <?php
                            $count_schedules = "SELECT COUNT(*) AS NUM_SCHEDULES FROM vehicles_schedule WHERE active = 1";
                            $response = mysqli_query($conn, $count_schedules) or die(mysqli_error($conn));
                            $num_schedules = mysqli_fetch_array($response)["NUM_SCHEDULES"];
                            echo "<p>$num_schedules</p>"
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<footer id="footer resources" class="p-4" style="background-color: rgba(0, 0, 0, 0.7);color:#fff;text-align:center">
    <div class="container-fluid" id="inner-footer" >
        <div class="row">
            <div class="col-md-2 row-col">
                <ul type="none"> 
                    <h4 style="color:white"><b>Timetable</b></h4>
                    <li><a href="./timetable.php" style="color:#89CFF0">View by Standard</a></li>
                </ul>
            </div>
            <div class="col-md-2 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Syllabus</b></h4>
                    <li><a href="./syllabus.php" style="color:#89CFF0">View by Standard</a></li>
                </ul>
            </div>
            <div class="col-md-2 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Explore</b></h4>
                    <li><a href="../index.php" style="color:#89CFF0">Homepage</a></li>
                    <li><a href="#!" style="color:#89CFF0">TEQIP III</a></li>
                    <li><a href="#!" style="color:#89CFF0">Training & Placements</a></li>
                </ul>
            </div>
            <div class="col-md-3 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Social Media Links</b></h4>
                    <li><a href="https://www.facebook.com/swaraj4715" style="color:#89CFF0">Facebook</a></li>
                    <li><a href="https://www.facebook.com/swaraj4715" style="color:#89CFF0">Instagram</a></li>
                    <li><a href="https://twitter.com/swaraj1729" style="color:#89CFF0">Twitter</a></li>
                </ul>
            </div>
            <div class="col-md-3 row-col">
                <ul type="none">
                    <h4 style="color:white"><b>Contact Us</b></h4>
                    <li style="color:white"><span>School Enterprise Resource Planning Platform, Yantromitra Solutions Private Limited</span></li><br>
                    <li><a href="https://goo.gl/maps/y3ZwTV9u2sweudjA6" target="_blank" style="color:#89CFF0"><span>Sikkim, Ravangla, Sikkim, India - 737139</span></a></li>
                    <li><a href="tel:+91 8002046457" style="color:#89CFF0"><span>+91 8002046457</span></a></li>
                    <li><a href="mailto:swarajkumarchaudhary1729@gmail.com" style="color:#89CFF0"><span>swarajkumarchaudhary1729@gmail.com</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright mb-3">
        <b>&copy; Swaraj Kumar Chaudhary (2021)</b>
    </div>
</footer>
        <br>
</body>
</html>
