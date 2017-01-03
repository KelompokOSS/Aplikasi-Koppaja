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
				header("Location: indexadmin.php");
				} else {
					echo ("<center><font color=red>Username atau Password salah!</font></center>");
					}
			}
		}
	}
	?>
	
    <center>
    <form method="post">
    <table bgcolor="orange" width="400" height="300">
    	<tr>
        	<td colspan="3"><center><h2>Manajemen Data</h2></center></td>
        </tr>
        
    	<tr>
        	<td colspan="3"><center><h3>Silahkan Login</h3></center></td>
        </tr>
        
    	<tr>
        	<td>Username</td><td>:</td>
            <td><input type="text" name="username" /></td>
        </tr>
        
        <tr>
        	<td>Password</td><td>:</td>
            <td><input type="password" name="password" /></td>
        </tr>
        
        <tr>
        	<td>&nbsp;</td><td>&nbsp;</td>
            <td><input type="submit" value="Login"/></td>
        </tr>
    </table>
    </form>
    </center>
