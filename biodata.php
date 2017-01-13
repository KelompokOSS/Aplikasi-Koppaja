<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("functions/functions.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data </title>
<link rel="stylesheet" href="styles/styles.css" media="all" />
<link rel="shortcut icon" href="codejunkicon.png" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen"/> 

<script type="text/javascript" src="http://static.tumblr.com/dxr7fsd/Wvmmpdd8c/jquery-1.2.6.min.js"></script>
<script type="text/javascript">

function slideSwitch() {
        var $active = $('#slideshow IMG.active');

        if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

        var $next =  $active.next().length ? $active.next()
            : $('#slideshow IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000 /* << Atur Kecepatan lebih menurun lebih cepat !*/, function() {
                $active.removeClass('active last-active');
            });
    }

    $(function() {
        setInterval( "slideSwitch()", 2000 );
    });

    </script>


</head>

<body>
<!--awal-->
<div class="main_wrapper">
	
    <!--awal header-->
	<div class="header_wrapper">
    	<img id="header" src="images/bannerkp5.jpg" />
    </div>
    <div class="menubar">
    	<ul id="menu"><nav id="0">
        
        <ul>
		<li><a href="homeadmin.php">HOME</a></li>
        		<!--<li><a href="#">KOPPAJA</a>
			<ul>
				<li><a href="user/kopbog.php">KOPPAJA BOGOR</a></li>
				<li><a href="user/kopjak.php">KOPPAJA JAKARTA</a></li>
                <li><a href="user/kopbek.php">KOPPAJA BEKASI</a></li>
			</ul>-->
            
            <li><a href="biodata.php">KELOLA BIODATA</a></li>
            <li><a href="beasiswa.php">KELOLA BEASISWA</a>
            	<!--<ul>
                	<li><a href="#"> Beasiswa </a></li>
                    <li><a href="#"> Beasiswa </a></li>
                 </ul></li>-->
            <li><a href="uu.php">KELOLA UU PERLINDUNGAN ANAK</a></li>
   
           
        </ul>
        </nav>
        
        <!--<div id="form">
        	<form method="get" action="result.php" enctype="multipart/form-data">
            <input type="text" name="user_query" placeholder="Search name ..."/>
            <input type="submit" name="search" value="Search"/>
            </form>
        </div>-->
        
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
    
    <a href="insert_biodata.php">kelola</a>
    
    <!--footer-->
	<div class="main_footer">
    	<img id="footer" src="images/footerkp.jpg"</div>
    </div>
   
</div>
<!--akhir-->

</body>
</html>
