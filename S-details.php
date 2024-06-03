<?php
session_start();
error_reporting(0);
// Set up database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edu-tracker";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fullname="";
$RollId="";
$StudentEmail="";
$Gender="";
$Class="";
$DOB="";
$Status="";
// $rollid=$_GET['RollId'];

// $sql = mysqli_query($conn, "SELECT StudentName,RollId,StudentEmail,Gender,ClassId,DOB,Status FROM tblstudents WHERE RollId = 76");
// $sql = mysqli_query($conn, "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.StudentEmail,tblstudents.Gender,tblstudents.DOB,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId = 73");
$sql = mysqli_query($conn, "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.StudentEmail,tblstudents.Gender,tblstudents.DOB,tblstudents.Status,tblclasses.ClassName,tblclasses.Section FROM tblstudents INNER JOIN tblclasses ON tblclasses.id=tblstudents.ClassId WHERE tblstudents.RollId =73");
// $query=  "SELECT * FROM tblstudents WHERE RollId = $rollid"

// $sql = "SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.StudentEmail,tblstudents.Gender,tblstudents.DOB,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId = 76";

while ($row = mysqli_fetch_array($sql,$query)) {
$fullname = $row["StudentName"];
$RollId=$row["RollId"];
$StudentEmail=$row["StudentEmail"];
$Gender=$row["Gender"];
$Class=$row["ClassName"];
$DOB=$row["DOB"];
$Status=$row["Status"];
}

// $sql = "SELECT StudentName,RollId,StudentEmail,Gender,ClassId,DOB,Status FROM tblstudents WHERE RollId = 73";
// $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDU TRACKER | View Student Details< </title>
            <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
            <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
            <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
            <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
            <link rel="stylesheet" href="css/prism/prism.css" media="screen">
            <link rel="stylesheet" href="css/select2/select2.min.css">
            <link rel="stylesheet" href="css/main.css" media="screen">
            <script src="js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <!-- ========== TOP NAVBAR ========== -->
        <?php include('includes/topbar.php'); ?>
        <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
        <div class="content-wrapper">
            <div class="content-container">

                <!-- ========== LEFT SIDEBAR ========== -->
                <?php include('includes/S-leftbar.php'); ?>
                <!-- /.left-sidebar -->

                <div class="main-page">

                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title">Student Details</h2>

                            </div>

                            <!-- /.col-md-6 text-right -->
                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>

                                    <li class="active">View Student Details</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Students information</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <?php if ($msg) { ?>
                                            <div class="alert alert-success left-icon-alert" role="alert">
                                                <strong>Well done!</strong><?php echo htmlentities($msg); ?>
                                            </div><?php } else if ($error) { ?>
                                            <div class="alert alert-danger left-icon-alert" role="alert">
                                                <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                            </div>
                                        <?php } ?>


                                        <?php
                                        // Check if any rows were returned

                                        // if (mysqli_num_rows($result) > 0) {
                                            // Output data of each row
                                            
                                            // while ($row = mysqli_fetch_assoc($result)) { ?>
                                                <!-- // Display data in text box
        // echo "<input type='text' value='" . $row["StudentName"] . "'>";
        // echo "<input type='text' value='" . $row["RollId"] . "'>";
        // echo "<input type='text' value='" . $row["StudentEmail"] . "'>";
        // echo "<input type='text' value='" . $row["Gender"] . "'>";
        // echo "<input type='text' value='" . $row["ClassId"] . "'>";
        // echo "<input type='text' value='" . $row["DOB"] . "'>";
        // echo "<input type='text' value='" . $row["Status"] . "'>"; -->


                                                <form class="form-horizontal">

                                                    <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Full Name</label>
                                                        <div class="col-sm-10">
                                                            <input type='text' name="fullanme" class="form-control" id="fullanme" required="required" autocomplete="off" readonly value="<?php echo $fullname ?>">
                                                         </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="default" class="col-sm-2 control-label">Roll Id</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="rollid" class="form-control" id="rollid" maxlength="5" required="required" autocomplete="off" readonly value="<?php echo $RollId ?>"> 
                                                            </div>
                                                            </div>

                                                        <div class="form-group">
                                                                    <label for="default" class="col-sm-2 control-label">Class</label>
                                                                    <div class="col-sm-10">
                                                                    <input type="text" name="classname" class="form-control" id="classname" value="<?php echo $Class?>" readonly>

                                                                        
                                                                    </div>
                                                            </div>

                                                            

                                                            <div class="form-group">
                                                                <label for="default" class="col-sm-2 control-label">Email id</label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" name="emailid" class="form-control" id="email" required="required" autocomplete="off" readonly value="<?php echo $StudentEmail ?>"> 
                                                                </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="default" class="col-sm-2 control-label">Gender</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="gender" class="form-control" required="required" autocomplete="off" readonly value="<?php echo $Gender ?>">

                                                                        <!-- <input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender" value="Female" required="required">Female <input type="radio" name="gender" value="Other" required="required">Other -->
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="date" class="col-sm-2 control-label">DOB</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" name="dob" class="form-control" id="date" value="<?php echo $DOB ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <br>

                                                                

                                                                    
                                                                
                                                </form>

                                        <?php  
                                        // } else {
                                            // echo "0 results";
                                        // } ?>








                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
</body>

</html>
<?PHP  ?>