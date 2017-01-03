<?php
error_reporting(0);
?>
<?php
session_start();
if(!isset($_SESSION["id_anak"]))
die("<center><font color=red>Illegal function call</font></center>");
$id_anak = isset($_REQUEST["id_anak"]) ? $_REQUEST["id_anak"] : "";
if ($link=mysql_connect("localhost","root","") && id_anak!=""){

mysql_select_db("koppaja");
$sql = "DELETE FROM biodata WHERE id_anak='$id_anak'";
if (mysql_query($sql)) {
echo("<script language=javascript>
	alert('Data telah berhasil di hapus.');
 location.href='kelolabiodata.php';
 </script>");
 } else {
 die(mysql_error());
 
 }
 }












?>