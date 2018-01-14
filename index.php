<html>
<head>
<title>Jelajah Bali</title>
</head>
<style type="text/css">
#topmenu 
{
	background-color:#EB5700; 
	width:100%;
	height:50px; 
	
	line-height:50px; 
	position:relative;
	margin:auto;
 }

#topmenu ul 
 {
	list-style:none;
 }

#topmenu ul li a 
{
	float:left; 
	width:150px; 
	display:block; 
	text-align:center; 
	color:#000000; 
	text-decoration:none; 
	text-transform:uppercase;
 }


#topmenu ul li a:hover 
{
	background-color:#666; 
	display:block;
}

#topmenu ul li:hover ul 
{
	display:block;
}

#topmenu ul ul 
{
	display:none; 
	list-style:none; 
	position:absolute; 
	background-color:#FF8D4B;
	left:300px; 
	top:50px; 
	width:190px;
}

#topmenu ul ul li a 
{
	float:none; 
	display:block; 
	padding-left:30px; 
	text-align:left; 
	width:160px;
 }

#topmenu ul ul li a:hover 
{
	color: #000000;	
}

body
{
	background-color:#8B8B84;
	margin: auto;
}
#header
{
	height: 170px;
	width: 1000px;
	background-image:url(../../../Untitled-7.png);
	border: 3px solid #FF8821;
}

#konten
{
	height: 550px;
	width: 1000px;		
	background-image: url(../../../../konten.png);
	border: 3px solid #FF9E00;
}

</style>
<script type="text/javascript">
	var imgSkr = 1;
			
	function imgNext()
	{
		imgSkr++;
			
		if (imgSkr > 5)
		{
			imgSkr = 1;
		}
		document.getElementById("gambar").src = "../Gambar/" + imgSkr + ".jpg";
	}
	
	var waktu;
			
	function imgAuto()
	{
		imgNext();
		waktu = setTimeout(imgAuto, 2000);
		//window.alert("Err");
	}
</script>
<body onLoad="imgAuto()">
	<div id="topmenu">
	
		<ul>
			<li><a href="Dw Wisata Bali/Dream weaver/home.php">Home</a></li>
			<li><a href="Dw Wisata Bali/Dream weaver/jelajah.php">Tempat Wisata</a></li>	
		  <li><a href="#">Register</a>	
			<ul>
					<li><a href="Dw Wisata Bali/Dream weaver/pendaftaran.php">Daftar</a></li>
					<li><a href="Dw Wisata Bali/Dream weaver/login.php">Login</a></li>
				</ul>
			</li>
			<li><a href="#">Kontak Kami</a></li>
			<li><a href="#">Buku Tamu</a></li>
		</ul>
		
	</div>
	<div id="kotak"><p align="center"><marquee scrolldelay="90"></marquee>  
      <img src="Dw Wisata Bali/Dream weaver//Foto/ashbdhjksabd.png" width="429" height="296">    	</div>
	
<div id="footer"><b>
  <p align="center"><img id="gambar" src="Dw Wisata Bali/Dream weaver//Gambar/1.jpg" p >
<p align="center">OM SWASTIASTU</b><br/></div>
<b><p align="center">Selamat Selamat Selamat Datang!!!</b><br/>
	
		
	
	
</body>
</html>
