<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EDU TRACKER</title> -->
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/style.css" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home</title>
    </head>
    <body>


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
                <li><a href=""><font color="blue"><b>Home</b></font></a></li>
                <li><a href=""><font color="blue"><b>Guest</b></font></a></li>
             </ul>
            </div>
        </div>

    </nav>    
    </header>

    <div class="bgimage">   
     <img src="Graduation.png" alt="Degree" style="width:100%" style="height: 1300px">
    </div>

    <table class="center" width="100%">
        <tbody>
            <tr>
                <td class="description">
                    <div>
                        <section class="col">

                        </section>
                        <section class="col">
                            <button class="button button1" onclick="location.href = 'Adminlogin.html'">
                                <b>Admin</b>
                            </button>

                        </section>
                        <section class="col">
                            <button class="button button2" onclick="location.href = 'find-result.php'"><b>Student</b></button>
                        </section>
                    </div>
                </td>
             </tr>
        </tbody>
    </table>




        
    </body>
</html>
