<!DOCTYPE html>
<html>
<head>
<title>DCS | ERROR</title>
<link rel="stylesheet" href="./error.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
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




<div id="main">

    <div id="header">
        <h1>DCS | <span>Login</span></h1>  
    </div>

    <div id="content">
        
        <h1 > ERROR</h1>
        <h2 >Wrong Username or Password</h2>

    </div>

</div>


<div id="footer">

    <P>IP Project</P>

</div>


</body>
</html>
<?php
    $loc = ".//Login/login.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>