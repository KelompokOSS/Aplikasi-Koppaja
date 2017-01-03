<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("functions/functions.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data diri</title>
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
            
            <li><a href="kelolabiodata.php">KELOLA BIODATA</a></li>
            <li><a href="beasiswa.php">KELOLA BEASISWA</a>
            	<!--<ul>
                	<li><a href="#"> Beasiswa Al Azhar</a></li>
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
       <?php

session_start();

$username = isset ($_REQUEST["username"]) ? $_REQUEST["username"] : "" ;
$password = isset ($_REQUEST["password"]) ? $_REQUEST["password"] : "" ;

if ($username!=""){
	//koneksi ke database
	if($link=mysql_connect("localhost", "root", "")){
		mysql_select_db("koppaja");
		$sql = "SELECT username FROM admin WHERE username='$username' AND password='$password'";
		
		if($rs=mysql_query($sql , $link)){
			if(is_array($row=mysql_fetch_array($rs))){
				$_SESSION["username"] = $row["username"];
				header("Location: homeadmin.php");
				} else {
					echo ("<center><font color=red>Username atau Password salah!</font></center>");
					}
			}
		}
	}
	?>
	
    <center>
    <form method="post">
    <table width="478" height="300">
    	<tr>
        	<td colspan="3"><center><h1>Manajemen Data</h1></center></td>
        </tr>
        
    	<tr>
        	<td colspan="3"><center><h2>Silahkan Login</h2></center></td>
        </tr>
        
    	<tr>
        	<td><h3>Username</h3></td><td>:</td>
            <td><input name="username" type="text" value="" /></td>
        </tr>
        
        <tr>
        	<td><h3>Password</h3></td><td>:</td>
            <td><input type="password" name="password" /></td>
        </tr>
        
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td>
            <td><H3><input type="submit" value="Login"/></H3></td>
        </tr>
    </table>
    </form>
    </center>

        </div>
        
    </div>
    <!--isi berakhir disini-->
    
    
    <!--footer-->
	<div class="main_footer">
    	<img id="footer" src="images/footerkp.jpg"</div>
    </div>
   
</div>
<!--akhir-->

</body>
</html>
