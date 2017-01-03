<?php

$con = mysqli_connect("localhost","root","","koppaja");

function getBio (){
	
	global $con;
	
	$get_bio = "select * from biodata";
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
				<h4>$bio_nama</h4>
				<img src='foto_anak/$bio_foto' width='160' height='160' />
				
				<p><a href='details.php?bio_id=$bio_id'><button style='float:left;'>Data Lengkap</button></a></p>
				
				
			</div>
		";
		}
}



function getBea (){
	
	global $con;
	
	$get_bea = "select * from beasiswa";
	$run_bea = mysqli_query($con, $get_bea);
	while ($row_bea = mysqli_fetch_array($run_bea)){
		$bea_id = $row_bea['id_beasiswa'];
		$bea_nama = $row_bea['nama_beasiswa'];
		$bea_logo = $row_bea['logo_beasiswa'];
		$bea_ket = $row_bea['ket_beasiswa'];
		$bea_link = $row_bea['link_beasiswa'];
	
		
		
		echo "
			<div id='single_beasiswa'>
				<h4>$bea_nama</h4>
				<img src='kp/$bea_logo' width='250' height='100' /><br>
				<a href='$bea_link' target='new'><button style='float:center;'>$bea_ket</button></a></p>
				
				
			</div>
		";
		}
}
?>