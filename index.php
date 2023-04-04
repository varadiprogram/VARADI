<!DOCTYPE html>
<html>
<head>
	<title>Varadi</title>
    <link rel="icon" href="https://www.pngarts.com/files/3/Logo-PNG-Transparent-Image.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<style>

body{
    margin: 0;
    background-image: url(https://images.pling.com/img/00/00/61/26/90/1563540/2cb62e43b48edd9ae7499f1fde94d6221e46a2346e0a38fd4519c280595fa95ebb8f.jpg);
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.border{
    text-align: center;
    border-style: solid;
    padding: 2%;
margin-left: 40%;
margin-right: 40%;
transform: translateX(-50%);
transform: translateY(85%);
background-color: white;
}

.border input{
    padding: 10px;
    margin-top:0.3%;
}



@media screen and (max-width: 1200px) {
    .border{
    text-align: center;
    border-style: solid;
    padding: 2%;
margin-left: 20%;
margin-right: 20%;
transform: translateX(-50%);
transform: translateY(100%);

}
}

@media screen and (max-width: 1200px) {
    .border{
    text-align: center;
    border-style: solid;
    padding: 2%;
margin-left: 10%;
margin-right: 10%;
transform: translateX(-50%);
transform: translateY(100%);

}



}



.error p{
border:solid red;
background-color: red;
color:white;
    border-radius: 100px;
margin-left: 5%;
margin-right:5%
}

    </style>
</head>
<body>
    <div class="border">
     <form action="login.php" method="post">
     	<h2>Bejelentkezés</h2>
        <div class="error">
         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
    </div>
     	<input type="text" style="margin-bottom: 5%;"  name="uname" placeholder="Felhasználó"><br>

     	<input type="password" name="password" placeholder="jelszó"><br>

     	<button type="submit" class="btn btn-primary"  style="margin-top: 5%;padding:10px;" >Bejelentkezés</button>
     </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>