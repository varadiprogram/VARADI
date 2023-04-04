
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Varadi</title>
    <link rel="icon" href="https://www.pngarts.com/files/3/Logo-PNG-Transparent-Image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>

body{
    background-color: white;
    margin: 0;
    background-color: white;
}

.navbar20{
    overflow: hidden;
    border-style: solid;
  padding:15px ;
    background-color: #1c1c1c;
    color: #1c1c1c;
}

.navbar20 a{
   padding: 10px 10px;
    color: white;
    text-decoration: none;
    font-size: 17px;
}

.navbar20 a:hover{
    color: #b1b1b1;
}


@media screen and (max-width: 600px) {
    .navbar20 a{
        text-align: center;
      font-size: 14.5px;
}
.navbar20{
    text-align: center;
}

}



.logout a:hover{
color: #b1b1b1;
}
.dolgok{
    background-color: #1c1c1c;
    color: white;
 
}

.margin{
    margin-left: 10%;
    margin-right: 10%;
}

@media screen and (min-width: 601px) {

    .dolgok p{
        
        margin-bottom: 12%;
    }


}

.col-sm h2{
 margin-top: 2.5%;
}


.col-sm{
    
    margin-top: 3%;
    border-style: solid;
    background-color: #1c1c1c;
    border-color: transparent;
    padding: 2%;
    margin-bottom: 5%;
}


.code{
    border-style: solid;
    background-color: #1c1c1c;
    border-color: #1c1c1c;
}



.responsive-iframe {
	max-width: 100%;
	padding-top: 40.25%;
	position: relative;
	width: 100%;
}

.responsive-iframe iframe {
	position: absolute;
	top: 3%;
	left: 20%;
	width: 60%;
	height: 91%;
}


.vege{
    border-style: solid;
    border-color: #0A0A0A;
    background-color: #0A0A0A;
    color: white;
    padding: 1%;
}

</style>

</head>
<body>
     
    <div class="navbar20">
        <a href="">XAMPP</a>
        <a href="">MYSQL</a>
        <a href="">PHPMYADMIN</a>
        <a  href="">PHP</a>
    </div>

<div class="" style="background-image:url(https://images6.alphacoders.com/127/thumb-1920-1273703.png);" >
    <div class="container">
        <div class="row" style="text-align: center;color: white;" >
          <div class="col-sm">
            <img src="https://play-lh.googleusercontent.com/AQ0IXIN3mb4_QD98hfPbmtQ1miJa7E47cpa1ZzRguShCkSmN-UfLvxZSoO_ZrmM2K6I" width="45%" >
            <h2>Mi az a PHP?</h2>
            <p>A PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére. Az első szkriptnyelvek egyike, amely külső fájl használata helyett HTML oldalba ágyazható. A kódot a webszerver PHP feldolgozómodulja értelmezi.</p>

            <a href="https://windows.php.net/downloads/releases/php-8.2.4-Win32-vs16-x64.zip"><button type="button" onclick = "php();"  class="btn btn-primary">Letötlés</button></a>
          </div>
          <div class="col-sm">
            <img src="https://assets.stickpng.com/images/58482973cef1014c0b5e49fd.png" width="45%" >
            <h2>Mi az a XAMPP?</h2>
            <p>A XAMPP teljesen ingyenes, könnyen telepíthető Apache disztribúció MariaDB, PHP és Perl komponenseket tartalmazva. A XAMPP nyílt forrású csomag úgy lett beállítva, hogy hihetetlenül egyszerű legyen a telepítése és használata.</p>
            <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.0/xampp-windows-x64-8.2.0-0-VS16-installer.exe/download"><button type="button" onclick = "xampp();" class="btn btn-primary">Letötlés</button></a>
          </div>
          <div class="col-sm">
            <img src="https://www.freepnglogos.com/uploads/logo-mysql-png/logo-mysql-mysql-logo-png-images-are-download-crazypng-21.png" width="45%" >
            <h2>Mi az a mySQL?</h2>
            <p>A MySQL, ahogy a neve is mutatja, egy SQL-alapú adatbázis-kezelő rendszer vagy DBMS. A nyílt forráskódú szoftvert jelenleg az Oracle, a Java programozási nyelvet is kifejlesztő vállalat tartja karban.</p>
            <a href="https://dev.mysql.com/get/Downloads/MySQLInstaller/mysql-installer-web-community-8.0.32.0.msi"><button type="button" onclick = "mysql();" class="btn btn-primary">Letötlés</button></a>
          </div>
        </div>
      </div>
    </div>
  
</div>

    <div class="code">
     <br>
        <center><a href="https://github.com/Rijushree123/Youtube-V/tree/main/phptut" style="font-size: 30px;" ><button type="button" class="btn btn-primary btn-lg btn-block">Source Code</button>
        </a></center>
  <br>
    </div>
<div style="background-image: url(https://images6.alphacoders.com/127/thumb-1920-1273703.png);" >



<div class="responsive-iframe">
	<iframe src="https://www.youtube.com/embed/hQPBeS4xlxg" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>


<br>
<br>
<br>

</div>
<div class="vege">
    Váradi Zsolt | 06202462052
</div>
</div>



<script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>