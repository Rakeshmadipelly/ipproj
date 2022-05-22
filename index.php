<?php
    include_once 'AdminSession.php';
    $uname = $_SESSION['email'];
    $password = $_SESSION['password'];
    $chekUser = mysqli_query($con,"Select * from user where email= '$uname' AND password = '$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($chekUser);
    $fname = $row['fname'];
    $lname = $row['lname'];
    
    $username = $fname ;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DCS | Home Page</title>
        <link rel="stylesheet" href="./index.css">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/Registration.js"></script>
        <script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }
        </script>
    </head>
    <body>
        <div id="wrap">

            <div id="header">
                    <h1>Document Collection System</h1>  
            </div>

            <div id="menu">
                <ul>
                <li><a href="#" onclick="getPage('User/Registration.php')">Registration</a></li>
                <!-- <li><a href="#">File Management</a> -->
                <!-- <ul>
                <li><a href="#" onclick="getPage('Upload/Upload.php')">Add New file</a></li>
                <li><a href="#" onclick="getPage('View/View.php')">View All files</a></li>
                
                </ul> -->
                </li> 
                <li><a href="logout.php">Logout</a></li>
                
                <li style="margin-left: 21em; 
                padding: 5px 12px;">You logged in as : <?php echo $username?></li>
                
                </ul>
            </div>

            <div id="main">

            <div id="content">
            <h1>Welcome to Document collection system </h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Upload files to the system</li>
                <li>Download your files </li>
                <li>Deregister Users</li>
                <li>Register new user</li>
            </ul>
            </div>
            <div id="side">
            <h3>Dashboard</h3>
            <table >
                <tr>
                    <td><li><a href="#" onclick="getPage('Upload/Upload.php')">Add New file</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('View/View.php')">View files</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('User/Registration.php')">Add user</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('User/ViewUser.php')">View Users</a></li></td>
                </tr>

            </table>
            </div>
            <div class= "clear"></div>

            </div>
            

        </div>

        <div id="footer">

            <P>IP Project</P>
        
        </div>
        
    </body>
</html>
