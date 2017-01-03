<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("functions/functions.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kelola Data Anak</title>
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
            <li><a href="kelolabeasiswa.php">KELOLA PROGRAM BEASISWA</a>
            	<!--<ul>
                	<li><a href="#"> Beasiswa Al Azhar</a></li>
                    <li><a href="#"> Beasiswa </a></li>
                 </ul></li>-->
            <li><a href="kelolauu.php">KELOLA UU PERLINDUNGAN ANAK</a></li>

           
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
    
  
     
      <!--<div id="form">
        	<form method="get" action="result.php" enctype="multipart/form-data">
            <input type="text" name="user_query" placeholder="Search name ..."/>
            <input type="submit" name="search" value="Search"/>
            </form>
        </div>-->
        
    
    <!--akhir header-->
    
    <!--isi berawal dari sini-->
    <div class="content_wrapper">
		<!--<div id="sidebar">sidebar</div>-->
        
		<div id="content_area">
		  <?php
			
			session_start();
			if(!isset($_SESSION["username"]))
			die("<center><font color=red>Illegal function call</font></center>");
			if($link=mysql_connect("localhost", "root", "")){
				
				mysql_select_db("koppaja");
				$sql="SELECT username FROM admin WHERE username='$_SESSION[username]'";
				if($rs=mysql_query($sql, $link)){
					if(is_array($row=mysql_fetch_array($rs))){
						echo("<marquee><h2>Selamat datang $row[username]!</h2></marquee>");
						halaman_utama();
						}
					} 
				}
				
				
				function halaman_utama()
                {
                	$sql = "SELECT*FROM biodata";
					if($rs=mysql_query($sql)){
						echo("<center><table><table border=1><tr>
							<td><b>ID Anak</b></td>
							<td><b>Nama Anak</b></td>
							<td><b>Tempat Lahir</b></td>
							<td><b>Tanggal Lahir</b></td>
							<td><b>Alamat</b></td>
							<td><b>Pendidikan</b></td>
							<td><b>Status</b></td>
							<td><b>Pengalaman</b></td>
							<td><b>Prestasi</b></td>
							<td><b>Kata Kunci</b></td>
							<td><b>Foto</b></td>
							</tr>");
						
						while (is_array($row=mysql_fetch_assoc($rs))){
							echo("<tr>
							<td>$row[id_anak]</td>
							<td>$row[nama_anak]</td>
							<td>$row[tempat_lahir]</td>
							<td>$row[tanggal_lahir]</td>
							<td>$row[alamat]</td>
							<td>$row[pendidikan]</td>
							<td>$row[status]</td>
							<td>$row[pengalaman]</td>
							<td>$row[prestasi]</td>
							<td>$row[kata_kunci]</td>
							<td>$row[foto]</td>
							<td>
								<a href=edit.php?id_anak=$row[id_anak]>Edit</a>&nbsp;
								<a href=hapus.php?id_anak=$row[id_anak]>Hapus</a>
							</td>
							</tr>");					
						}
							echo("</table>
								  <br/><a href=insert_biodata.php>Tambah Data</a>&nbsp;
								  </center>");
						}
						
						}
              		  ?>
		
			<center><a href="indexadmin.php">Kembali</a></center>
       
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
