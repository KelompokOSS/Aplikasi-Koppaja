<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("functions/functions.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kelola Beasiswa</title>
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


<body>
<!--awal-->
<div class="main_wrapper">
	
    <!--awal header-->
	<div class="header_wrapper">
   	  <img id="header" src="images/bannerkp3.jpg" />
</div>
    <div class="menubar">
    	<ul id="menu"><nav id="0">
        
        <ul>
		<li><a href="index.php">HOME</a></li>
        		<!--<li><a href="#">KOPPAJA</a>
			<ul>
				<li><a href="user/kopbog.php">KOPPAJA BOGOR</a></li>
				<li><a href="user/kopjak.php">KOPPAJA JAKARTA</a></li>
                <li><a href="user/kopbek.php">KOPPAJA BEKASI</a></li>
			</ul>-->
            
            <li><a href="biodata.php">BIODATA</a></li>
            <li><a href="beasiswa.php">PROGRAM BEASISWA</a>
            	<!--<ul>
                	<li><a href="#"> Beasiswa Al Azhar</a></li>
                    <li><a href="#"> Beasiswa </a></li>
                 </ul></li>-->
            <li><a href="uu.php">UU PERLINDUNGAN ANAK</a></li>
           
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
        
        	<form action="insert_beasiswa.php" method="post" enctype="multipart/form-data">
    <table align="center" width="600" border="2" bgcolor="#339900">
    <tr>
    	<td colspan="8" align="center"><h2>Input Beasiswa YPMP</h2></td>
    </tr> 
    
    <tr>
    	<td width="201" align="right"><b>ID Beasiswa:</b></td>
        <td><input type="text" name="id_beasiswa" size="40" required="required"/></td>
    </tr>
    
    <tr>
    	<td width="201" align="right"><b>Nama Beasiswa :</b></td>
        <td><input type="text" name="nama_beasiswa" size="40" required="required"/></td>
    </tr>
    
  <tr>
    	<td align="right"><b>Logo Beasiswa:</b></td>
        <td><input type="file" name="logo_beasiswa"/></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Keterangan :</b></td>
        <td><input type="text" name="ket_beasiswa" size="40"/></td>
    </tr>
    

    
    <tr align="center">
        <td colspan="8"><input type="submit" name="insert_post" value="Submit"/></td>
    </tr>
    <tr><td colspan="8"><center><a href="kelolabeasiswa.php">Kembali</a></center></td></tr>
    </table> 
    </form>
    </div>

        
    </div>
    <!--isi berakhir disini-->
    
    
    <!--footer-->
	<div class="main_footer">
    	<img id="footer" src="images/footerkp.jpg"</div>
    </div>
   
</div>
<!--akhir-->


<?php

 if(isset($_POST['insert_post'])){
	 $id_beasiswa=$_POST['id_beasiswa'];
	 $nama_beasiswa=$_POST['nama_beasiswa'];
	 $ket_beasiswa=$_POST['ket_beasiswa'];
	 
	 $logo_beasiswa=$_FILES['logo_beasiswa']['name'];
	 $logo_beasiswa_tmp=$_FILES['logo_beasiswa']['tmp_name'];
	 
	 move_uploaded_file($logo_beasiswa_tmp, "logo_beasiswa/$foto");
	 
	 $insert_beasiswa="insert into beasiswa (id_beasiswa,nama_beasiswa,logo_beasiswa,ket_beasiswa) values ('$id_beasiswa','$nama_beasiswa','$logo_beasiswa','$ket_beasiswa')";
	 
	 $insert_bea= mysqli_query($con, $insert_beasiswa);
	 if ($insert_bea){
		 echo "<script>alert('Beasiswa berhasil dimasukan')</script>";
		 echo "<script>window.open('insert_beasiswa.php','_self')</script>";
		 
		 
		 }
	 }
?>





