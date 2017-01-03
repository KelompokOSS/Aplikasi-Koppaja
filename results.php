<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("functions/functions.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data diri</title>
<link rel="stylesheet" href="styles/styles.css" media="all" />
</head>

<body>
<!--awal-->
<div class="main_wrapper">
	
    <!--awal header-->
	<div class="header_wrapper">
    	<img id="header" src="images/header.jpg" />
    </div>
    <div class="menubar">
    	<ul id="menu">
            <li><a href="biodata.php">Biodata</a></li>
            <li><a href="#">Program Beasiswa</a></li>
            <li><a href="#">UU Anak Jalanan</a></li>
           
        </ul>
        
        <div id="form">
        	<form method="get" action="result.php" enctype="multipart/form-data">
            <input type="text" name="user_query" placeholder="Search name ..."/>
            <input type="submit" name="search" value="Search"/>
            </form>
        </div>
        
     </div>
    <!--akhir header-->
    
    <!--isi berawal dari sini-->
    <div class="content_wrapper">
		<!--<div id="sidebar">sidebar</div>-->
        
		<div id="content_area">
        	<div id="biodata_box">
     			<?php getBio (); ?>
        	</div>
        </div>
        
    </div>
    <!--isi berakhir disini-->
    
    
    <!--footer-->
	<div class="main_footer">
    	<img id="footer" src="images/footer.jpg"</div>
    </div>
   
</div>
<!--akhir-->

</body>
</html>
