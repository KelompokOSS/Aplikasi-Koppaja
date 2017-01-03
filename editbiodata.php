<?php

//mulai sesi web 
session_start();

//periksa sesi login
if (!isset($_SESSION["username"]))
	die("<center>font color=red>Ilegal funtion call</font></center>");
	
	$username = isset($_REQUEST["username"])? $_REQUEST["username"] : "";
	
if($link=mysql_connect("localhost","root","") && username!="") {
	
	//gunakan database "koppaja"
	mysql_select_db("koppaja");
	
	if (!iseet($_REQUEST["save"])){
		//tampilkan form edit
		$sql ="SELECT * from biodata WHERE id_anak='$id_anak'";
		if ($rs=mysql_query($sql)){
			if (is_array($row=mysql_fetch_assoc($rs))) {
				echo("<center><br><h3> Edit Biodata Anak </h3><form method=post>
				<input type=hidden name=id_anak value=$row[id_anak]>
				<table>
					<tr><td>Nama<td><td>:</td>
						<td><input type=text name=nama value='$row[nama_anak]'></td>
					</tr>
					<tr><td>Tempat Lahir<td><td>:</td>
						<td><input type=text name=tempat_lahir value='$row[tempat_lahr]'></td>
					</tr>
					<tr><td>Tanggal Lahir<td><td>:</td>
						<td><input type=text name=tanggal_lahir value='$row[tanggal_lahir]'></td>
					</tr>
					<tr><td>Alamat<td><td>:</td>
						<td><input type=text name=alamat value='$row[alamat]'></td>
					</tr>
					<tr><td>Pendidikan<td><td>:</td>
						<td><input type=text name=pendidikan value='$row[pendidikan]'></td>
					</tr>
					<tr><td>Status<td><td>:</td>
						<td><input type=text name=status value='$row[status]'></td>
					</tr>
					<tr><td>Pengalaman<td><td>:</td>
						<td><input type=text name=pengalaman value='$row[pengalaman]'></td>
					</tr>
					<tr><td>Prestasi<td><td>:</td>
						<td><input type=text name=prestasi value='$row[prestasi]'></td>
					</tr>
					<tr><td>Foto<td><td>:</td>
						<td><input type=text name=foto value='$row[foto]'></td>
					</tr>
					<tr><td>&nbsp;<td><td>&nbsp;</td>
						<td><input type=submit name=save value='Simpan'>&nbsp;
						<input type=button value='Batal' onclick='javascript:history.back()'>
						</td>
						</tr>
						</table>
						</form></center>");
						
			} else {
				echo("<center><font color=red>Ilegal function call</font></center>");
			}
		}
		
	}else {
		//simpan data
		$sql = "UPDATE biodata SET 
		nama='$_POST [nama]',
		tempat_lahir='$_POST [tempat lahir]',
		tanggal_lahir='$_POST [tanggal lahir]',
		alamat='$_POST [alamt]',
		pendidikan='$_POST [pendidikan]',
		status='$_POST [status]',
		pengalaman='$_POST [pengalaman]',
		prestasi='$_POST [prestasi]',
		foto='$_POST [foto]',
		WHERE id_anak=$'id_anak'";
	if (mysql_query($sql)) {
		echo("<scrpt language=javascript>
			alert('Data telah berhasil diubah.');
			</script>");
	}else{
		die(mysql_error());
		}
	}
	}
		
			
?>