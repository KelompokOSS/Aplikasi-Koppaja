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
<style type="text/css">
.content_wrapper #content_area h1 {
	text-align: center;
}
.content_wrapper #content_area {
	text-align: left;
}
</style>
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
        <align="center">
    <br /><h1><align="center"> Undang-undang Perlindungan Anak</h1><br />
        </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bentuk: UNDANG-UNDANG (UU)<br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh:  PRESIDEN REPUBLIK INDONESIA<br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor: 23 TAHUN 2002 (23/2002) <br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal: 22 OKTOBER 2002 (JAKARTA) <br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sumber: LN 2002/109; TLN NO 4235<br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tentang: PERLINDUNGAN ANAK<br />
 
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DENGAN RAHMAT TUHAN YANG MAHA ESA<br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRESIDEN REPUBLIK INDONESIA,<br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menimbang:<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. bahwa Negara Kesatuan Republik Indonesia menjamin kesejahteraan tiap-tiap warga negaranya, termasuk perlindungan terhadap hak anak yang merupakan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp; hak asasi manusia;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. bahwa anak adalah amanah dan karunia Tuhan Yang Maha Esa, yang dalam dirinya melekat harkat dan martabat sebagai manusia seutuhnya;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. bahwa anak adalah tunas, potensi, dan generasi muda penerus cita-cita perjuangan bangsa, memiliki peran strategis dan mempunyai ciri dan sifat khusus yang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp; menjamin kelangsungan eksistensi bangsa dan negara pada masa depan;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. bahwa agar setiap anak kelak mampu memikul tanggung jawab tersebut, maka ia perlu mendapat kesempatan yang seluas-luasnya untuk tumbuh dan 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;berkembang secara optimal, baik fisik, mental maupun sosial, dan berakhlak mulia, perlu dilakukan upaya perlindungan serta untuk mewujudkan kesejahteraan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp; anak dengan memberikan jaminan terhadap pemenuhan hak-haknya serta adanya perlakuan tanpa diskriminasi;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e. bahwa untuk mewujudkan perlindungan dan kesejahteraan anak diperlukan dukungan kelembagaan dan peraturan perundang-undangan yang dapat menjamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;pelaksanaannya;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f. bahwa berbagai undang-undang hanya mengatur hal-hal tertentu mengenai anak dan secara khusus belum mengatur keseluruhan aspek yang berkaitan dengan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perlindungan anak;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g. bahwa berdasarkan pertimbangan tersebut pada huruf a, b, c, d, e, dan f perlu ditetapkan Undang-undang tentang Perlindungan Anak;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mengingat:<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Pasal 20, Pasal 20A ayat (1), Pasal 21, Pasal 28B ayat (2), dan Pasal 34 Undang-Undang Dasar 1945;<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Undang-undang Nomor 4 Tahun 1979 tentang Kesejahteraan Anak (Lembaran Negara Tahun 1979 Nomor 32, Tambahan Lembaran Negara Nomor 3143);<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Undang-undang Nomor 7 Tahun 1984 tentang Penghapusan Segala Bentuk Diskriminasi terhadap Perempuan (Convention on The Elimination of all Forms of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discrimination Against Women) (Lembaran Negara Tahun 1984 Nomor 29, Tambahan Lembaran Negara Nomor 3277);<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Undang-undang Nomor 3 Tahun 1997 tentang Pengadilan Anak (Lembaran Negara Tahun 1997 Nomor 3, Tambahan Lembaran Negara Nomor 3668);<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. Undang-undang Nomor 4 Tahun 1997 tentang Penyandang Cacat (Lembaran Negara Tahun 1997 Nomor 9, Tambahan Lembaran Negara Nomor 3670);<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. Undang-undang Nomor 20 Tahun 1999 tentang Pengesahan ILO Convention No. 138 Concerning Minimum Age for Admission to Employment (Konvensi ILO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mengenai Usia Minimum untuk Diperbolehkan Bekerja) (Lembaran Negara Tahun 1999 Nomor 56, Tambahan Lembaran Negara Nomor 3835);<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. Undang-undang Nomor 39 Tahun 1999 tentang Hak Asasi Manusia (Lembaran Negara Tahun 1999 Nomor 165, Tambahan Lembaran Negara Nomor 3886);<br /><br />
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. Undang-undang Nomor 1 Tahun 2000 tentang Pengesahan ILO Convention No. 182 Concerning The Prohibition and Immediate Action for The Elimination of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Worst Forms of Child Labour (Konvensi ILO No. 182 mengenai Pelarangan dan Tindakan Segera Penghapusan Bentuk-bentuk Pekerjaan Terburuk untuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anak) (Lembaran Negara Tahun 2000 Nomor 30, Tambahan Lembaran Negara Nomor 3941); <br /><br />
 
 


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
