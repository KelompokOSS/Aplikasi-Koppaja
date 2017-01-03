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
		<br>
            <li><a href="biodata.php">Biodata</a></li>
		<li><a href="beasiswa.php">Program Beasiswa</a></br>
            	<!--<ul>
                	<li><a href="#"> Beasiswa </a></li>
                    <li><a href="#"> Beasiswa </a></li>
                 </ul></li>-->
            <li><a href="uu.php">UU Anak Jalanan</a></li>
           
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
    <?php
	if(isset($_GET['bio_id'])){
		
	$id_anak = $_GET['bio_id'];
    $get_bio = "select * from biodata where id_anak = '$id_anak'";
	$run_bio = mysqli_query($con, $get_bio);
	while ($row_bio = mysqli_fetch_array($run_bio)){
		$bio_id = $row_bio['id_anak'];
		$bio_nama = $row_bio['nama_anak'];
		$bio_tempat = $row_bio['tempat_lahir'];
		$bio_tanggal = $row_bio['tanggal_lahir'];
		$bio_alamat = $row_bio['alamat'];
		$bio_pendidikan = $row_bio['pendidikan'];
		$bio_status = $row_bio['status'];
		$bio_pengalaman = $row_bio['pengalaman'];
		$bio_prestasi = $row_bio['prestasi'];
		$bio_katakunci = $row_bio['kata_kunci'];
		$bio_foto = $row_bio['foto'];
		
		
		echo "
			<div id='single_biodata'>
				<h3>$bio_nama</h3>
				<img src='foto_anak/$bio_foto' width='300' height='400' />
				<br>Tempat, tanggal lahir :$bio_tempat , $bio_tanggal
				<br>Alamat				  :$bio_alamat
				<br>Pendidikan			  :$bio_pendidikan
				<br>Status			      :$bio_status
				<br>Pengalaman			  :$bio_pengalaman
				<br>Prestasi			  :$bio_prestasi
				
				<br><br><p'><a href='biodata.php'><button style='float:right;'>Kembali</button></a></p>
				
				
			</div>
		";
		}
		}
		?>

        	</div>
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
