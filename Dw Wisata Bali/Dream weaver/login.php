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
#kotak
{
	height: 700px;
	width: 1000px;
	margin: 30px auto 30px auto;
	background-color: #FFFFFF;
}
body
{
	background-color: #8B8B84;
	margin: auto;
}
#header
{
	height: 170px;
	width: 1000px;
	background-image:url(../Foto/bali-1674192_1280.jpg);
	border: 3px solid #FF8821;
}

#konten
{
	height: 550px;
	width: 1000px;		
	background-image: url(../Foto/konten.png);
	border: 3px solid #FF9E00;
}

</style>
<body>
	<div id="topmenu">
	
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="jelajah.php">Tempat Wisata</a></li>
			<li><a href="*">Register</a>	
				<ul>
					<li><a href="pendaftaran.php">Daftar</a></li>
					<li><a href="*">Login</a></li>
				</ul>
			</li>
			<li><a href="*">Kontak Kami</a></li>
			<li><a href="*">Buku Tamu</a></li>
		</ul>
		
	</div>
	<div id="kotak">	
		<div id="header"></div>
		<div id="konten">
			<form name="formdaftar"> 
<table align="center"> 
 <tr> 
     <td align="right">User :</td> 
        <td> 
        <input type="text" name="NamaLengkap" size="40"/> 
        </td> 
    </tr> 
    <tr> 
     <td align="right">Passwor:</td> 
        <td> 
        <input type="text" name="NamaLengkap" size="40"/> 
        </td> 
    </tr> 
    <tr> 
     <td></td> 
        <td> 
         <input type="submit" value="Simpan"/> 
            <input type="reset" value="Batal"/> 
        </td> 
    </tr> 
    
   
   </tr> 
</table> 
</form>
					
		</div>
	
	</div>
<div id="footer">
	
</div>
	
		
	
	
</body>
</html>