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
	background-color:#8B8B84;
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
					<li><a href="login.php">Login</a></li>
				</ul>
			</li>
			<li><a href="*">Kontak Kami</a></li>
			<li><a href="*">Buku Tamu</a></li>
		</ul>
		
	</div>
	<div id="kotak">	
		<div id="header"></div>
		<div id="konten">
			<br><br><br><br>
			<form name="formdaftar"> 
<table align="center">
 
 <tr> 
     <td align="right">Nama Lengkap :</td> 
        <td> 
        <input type="text" name="NamaLengkap" size="40"/> 
        </td> 
    </tr> 
    
   
    <tr> 
     <td align="right">Tempat/Tanggal Lahir/Bulan/Tahun :</strong></td> 
        <td> 
        <input type="text" name="Tempat/TanggalLahir/Bulan/Tahun" size="20"/> 
        <td><select name="Tanggal" size="1"> 
         <option>Tanggal</option> 
            <option>1</option> 
            <option>2</option> 
            <option>3</option> 
            <option>4</option> 
            <option>5</option> 
            <option>6</option> 
            <option>7</option> 
            <option>8</option> 
            <option>9</option> 
            <option>10</option> 
            <option>11</option> 
            <option>12</option> 
            <option>13</option> 
            <option>14</option> 
            <option>15</option> 
            <option>16</option> 
            <option>17</option> 
            <option>18</option> 
            <option>19</option> 
            <option>20</option> 
            <option>21</option> 
            <option>22</option> 
            <option>23</option> 
            <option>24</option> 
            <option>25</option> 
            <option>26</option> 
            <option>27</option> 
            <option>28</option> 
            <option>29</option> 
            <option>30</option> 
            <option>31</option> 
            </select></td> 
         <td><select name="Bulan" size="1"> 
          <option>Bulan</option> 
            <option>Januari</option> 
            <option>Februari</option> 
            <option>Maret</option> 
            <option>April</option> 
            <option>Mei</option> 
            <option>Juni</option> 
            <option>Juli</option> 
            <option>Agustus</option> 
            <option>September</option> 
            <option>Oktober</option> 
            <option>November</option> 
            <option>Desember</option> 
            </select></td> 
            <td><select name="Tahun" size="1"> 
          <option>Tahun</option> 
             
            <option>2000</option> 
            <option>2001</option> 
            <option>2002</option> 
            <option>2003</option> 
            <option>2004</option> 
            <option>2005</option> 
            <option>2006</option> 
            <option>2007</option> 
            <option>2008</option> 
            <option>2009</option> 
            <option>2010</option> 
            <option>2011</option> 
            <option>2012</option> 
            <option>2013</option> 
            <option>2014</option> 
            <option>2015</option> 
            <option>2016</option> 
            <option>2017</option> 
            <option>2018</option> 
            <option>2019</option> 
            </select></td> 
          
    </tr>

    <tr> 
     
     <td valign="top" align="right">Alamat</td> 
        <td> 
         <textarea name="Alamat" rows="2" cols="31"></textarea> 
        </td> 
    </tr>
    <tr> 
     <td></td> 
        <td> 
         <input type="submit" value="Simpan"/> 
            <input type="reset" value="Batal"/> 
        </td> 
    </tr> 
</table> 
</form>
					
		</div>
	
	</div>
<div id="footer">
</div>
	
		
	
	
</body>
</html>