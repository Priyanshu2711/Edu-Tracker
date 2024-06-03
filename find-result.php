<?php
session_start();
//error_reporting(0);
include('includes/config.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EDU TRACKER | Student Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <style>
            .header
{
    height: 0px;
}
body
  {
    background-image: url("Graduation.png");
    background-repeat: no-repeat;
    background-size: 100%;
    height: 100vh;
    width: 100%;
  }
.navbar-style
{
    background-color: black;
    box-shadow: 0 5px 10px #220d0d;
    text-transform: uppercase;
    
}
.logo
{
    height: 100px;
    padding-left: 10px;
    float:left;
}
.icon-bar
{
    background: darkorange;
}
.bgimage
{
    /* background-image: url("Graduation.png"); */
    /* background-repeat: no-repeat; */
    /* background-size: cover; */
    height: 10px;
    width: 100%;
    /* padding-top: 0px; */
    /* background-size: 1600px 650px; */
}
.foot
{
    
    background-color: black;
    padding-bottom: 0px;
}
.description {
    background: black;

    padding-top: 825px;
}

.description .col {
    display: inline-block;
    width: 30%;
}
table.center {
    margin-left: auto; 
    margin-right: auto;
  }
.button {
    border: none;
    color: white;
    padding: 16px 60px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }
  
  .button1 {
    background-color: rgb(16, 236, 244); 
    color: black; 
    border: 2px solid #050505;
    
  }
  
  .button1:hover {
    background-color: #4CAF50;
    color: white;
  }
  .button1:active {
    transform: scale(0.98);
    box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
  }
  
  .button2 {
    background-color: rgb(16, 236, 244); 
    color: black; 
    border: 2px solid #000000;
  }
  
  .button2:hover {
    background-color: #4CAF50;
    color: white;
  }
  .button2:active {
    transform: scale(0.98);
    box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
  }
  
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  user-select: none;
}
.bg-img{
  background: url('bg.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
.bg-img:after{
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.7);
}
.content{
  position: relative;
  top: 50%;
  left: 50%;
  z-index: 999;
  text-align: center;
  padding: 60px 32px;
  width: 370px;
  transform: translate(-50%,-50%);
  background: rgba(255,255,255,0.04);
  box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
}
.content header{
  color: white;
  font-size: 33px;
  font-weight: 600;
  margin: 0 0 35px 0;
  font-family: 'Montserrat',sans-serif;
}
.field{
  position: relative;
  margin-top: 30px;
  height: 45px;
  width: 100%;
  display: flex;
  background: rgba(255,255,255,0.94);
}
.field:active {
  transform: scale(0.98);
  box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
}
.field span{
  color: #222;
  width: 40px;
  line-height: 45px;
}
.field input{
  height: 100%;
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  color: #222;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.space{
  margin-top: 16px;
}
.show{
  position: absolute;
  right: 13px;
  font-size: 13px;
  font-weight: 700;
  color: #222;
  display: none;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.pass-key:valid ~ .show{
  display: block;
}
.pass{
  text-align: left;
  margin: 10px 0;
  width: 120px;
}
.pass a{
  color: white;
  text-decoration: none;
  font-family: 'Poppins',sans-serif;
}
.pass:hover a{
  text-decoration: underline;
  color: lightskyblue;
}
.field input[type="button"]{
  background: #3498db;
  border: 1px solid #2691d9;
  color: white;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'Montserrat',sans-serif;
}
.field input[type="button"]:hover{
  background: #2691d9;
}
.login{
  color: white;
  margin: 20px 0;
  padding-top: 10;
  font-family: 'Poppins',sans-serif;
}
.links{
  display: flex;
  cursor: pointer;
  color: white;
  margin: 0 0 20px 0;
}
/* .facebook,.instagram{
  width: 100%;
  height: 45px;
  line-height: 45px;
  margin-left: 10px;
}
.facebook{
  margin-left: 0;
  background: #4267B2;
  border: 1px solid #3e61a8;
}
.instagram{
  background: #E1306C;
  border: 1px solid #df2060;
}
.facebook:hover{
  background: #3e61a8;
}
.instagram:hover{
  background: #df2060;
} */
.links i{
  font-size: 17px;
}
i span{
  margin-left: 8px;
  font-weight: 500;
  letter-spacing: 1px;
  font-size: 16px;
  font-family: 'Poppins',sans-serif;
}
.signup{
  font-size: 15px;
  margin-top: 10px;
  color: white;
  font-family: 'Poppins',sans-serif;
}
.signup a{
  color: #3498db;
  text-decoration: none;
}
.signup a:hover{
  text-decoration: underline;
  color: lightskyblue
}
.close-button
{
  margin: -40px 275px;
  margin-bottom: -40px;
  /* vertical-align: 100px; */
  height: 55px;
  width: 20px;
  padding-left: 10px;
  padding-right: 40px;
  font-size: 45px;
  color: white;
  background: rgba(0, 0, 0, 0);
  border: none;
  position: relative;

 
}
.close-button:active {
  transform: scale(0.98);
  box-shadow: 3px 2px 22px 1px rgba(0, 0, 0, 0.24);
}
/* .headerA
{
  font-size: 30px;
  color: white;
  margin: 0px 100px;
  text-align: left;
  position: relative;
  height: 10px;
  width: 200px;
  padding-bottom: 30px;
  padding-left: 50px;
  background-color: aliceblue;
} */
.label-1{
    color: white;
    font-size: 14px;
    margin-left: -85px;
}

.col-sm-2 {
    color: white;
    font-size: 14px;
    margin-left: -8px;
}

        </style>
    </head>
    <body class="">

    <header class="header">
    <nav class="navbar navbar-style">
        <div class="container1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img  class="logo" src="logo.png">
                


            </div>

            <div class="collapse navbar-collapse" id="micon">
             <ul class="nav navbar-nav navbar-right">
                <li><a href="Index.html"><font color="blue"><b>Home</b></font></a></li>
                <li><a href=""><font color="blue"><b>Guest</b></font></a></li>
             </ul>
            </div>
        </div>

    </nav>    
    </header>
                

    <div class="bg-img" data-closable >
        
        <div class="content">
            <button class="close-button" onclick="location.href = 'index.php'" type="button" data-close><span aria-hidden="true">&times;</span></button>
        <header>Student Login</header>
        
        <form action="S-details.php" method="post">
                                	<div class="form-group">
                                		<label for="rollid" class="label-1">Enter your Roll Id</label>
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter Your Roll Id" autocomplete="off" name="rollid">
                                	</div>
                               <div class="form-group">
                                                        <label for="default" class="col-sm-2 control-label">Class</label>
 <select name="class" class="form-control" id="default" required="required">
<option value="">Select Class</option>
<?php $sql = "SELECT * from tblclasses";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
<?php }} ?>
 </select>
</div>

    
                                    <div class="form-group mt-20">
                                        <div class="">
                                      
                                            <!-- <button type="submit" class="btn btn-success btn-labeled pull-right" onclick="location.href='S-dashboard.php'">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button> -->
                                            <button type="button" class="btn btn-success btn-labeled pull-right" onclick="location.href='S-dashboard.php'">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>

                                            <!-- <div class="clearfix"></div> -->
                                        </div>
                                    </div>

                                       <!-- <div class="col-sm-6">
                                                               <a href="index.php">Back to Home</a>
                                                            </div> -->
                                </form>
           
           
        
           
        </div>
     </div>
     
     
    



        
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>