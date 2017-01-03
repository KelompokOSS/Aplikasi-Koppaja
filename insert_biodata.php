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
            <li><a href="beasiswa.php">PROGRAM BEASISWA</a></li>
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
	<form action="insert_biodata.php" method="post" enctype="multipart/form-data">
    <table align="center" width="600" border="2" bgcolor="#339900">
    <tr>
    	<td colspan="8" align="center"><h2>Input Biodata anggota KOPPAJA</h2></td>
    </tr> 
    
    <tr>
    	<td width="201" align="right"><b>ID :</b></td>
        <td><input type="text" name="id_anak" size="40" required="required"/></td>
    </tr>
    
    <tr>
    	<td width="201" align="right"><b>Nama :</b></td>
        <td><input type="text" name="nama_anak" size="40" required="required"/></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Tempat lahir :</b></td>
        <td><input type="text" name="tempat_lahir" size="40"/></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Tanggal lahir :</b></td>
        <td><input type="text" name="tanggal_lahir" size="40"/></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Alamat :</b></td>
        <td><textarea name="alamat" cols="21" rows="2"></textarea></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Pendidikan :</b></td>
        <td><input type="text" name="pendidikan" size="40"/></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Status :</b></td>
        <td><input type="text" name="status" size="40"/></td>
    </tr>
    
    
    <tr>
    	<td align="right"><b>Pengalaman :</b></td>
        <td><textarea name="pengalaman" cols="21" rows="10"></textarea></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Prestasi :</b></td>
        <td><textarea name="prestasi" cols="21" rows="10"></textarea></td>
    </tr>
    
    <tr>
    	<td align="right"><b>Kata Kunci :</b></td>
        <td><input type="text" name="kata_kunci" size="40"/></td>
    </tr>
    
    
    <tr>
    	<td align="right"><b>Foto :</b></td>
        <td><input type="file" name="foto"/></td>
    </tr>
    
    <tr align="center">
        <td colspan="8"><input type="submit" name="insert_post" value="Submit"/></td>
    </tr>
    <tr align="center">
        <td colspan="8"><a href="kelolabiodata.php">Kembali</a></td>
    </tr>
    </table> 
    </form>
    </div>
    </div>
   
	<div class="main_footer">
    	<!--<img id="footer" src="images/footerkp.jpg"</div>-->
    </div>
   
</div>


<?php

 if(isset($_POST['insert_post'])){
	 $id_anak=$_POST['id_anak'];
	 $nama_anak=$_POST['nama_anak'];
	 $tempat_lahir=$_POST['tempat_lahir'];
	 $tanggal_lahir=$_POST['tanggal_lahir'];
	 $alamat=$_POST['alamat'];
	 $pendidikan=$_POST['pendidikan'];
	 $status=$_POST['status'];
	 $pengalaman=$_POST['pengalaman'];
	 $prestasi=$_POST['prestasi'];
	 $kata_kunci=$_POST['kata_kunci'];
	 
	 
	 $foto=$_FILES['foto']['name'];
	 $foto_tmp=$_FILES['foto']['tmp_name'];
	 
	 move_uploaded_file($foto_tmp, "foto_anak/$foto");
	 
	 $insert_biodata="insert into biodata (id_anak,nama_anak,tempat_lahir,tanggal_lahir,alamat,pendidikan,status,pengalaman,prestasi,kata_kunci,foto) values ('$id_anak','$nama_anak','$tempat_lahir','$tanggal_lahir','$alamat','$pendidikan','$status','$pengalaman','$prestasi','$kata_kunci','$foto')";
	 
	 $insert_bio= mysqli_query($con, $insert_biodata);
	 if ($insert_bio){
		 echo "<script>alert('Biodata berhasil dimasukan')</script>";
		 echo "<script>window.open('insert_biodata.php','_self')</script>";
		 
		 
		 }
	 }
?>





