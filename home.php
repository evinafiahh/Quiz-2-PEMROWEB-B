<?php
session_start();
//cek cookie
if( isset($_COOKIE['login'])) {
    if( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}


if ( !isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <style>
        @font-face {
        font-family: Alatsi;
        src : url(Alatsi-Regular.ttf)
        }
        body{
            font-family: Alatsi;
        }
        html,body{
            margin: 0;
            padding: 0;
        }
        a{
            text-decoration: none;
        }
        #sosmed{
            display: flex;
            margin-top: 70px;
            margin-left: 10px;
            width: 100%;
            height: 35px;
        }
        #follow{
            margin-top: 3px;
            z-index: 2;
        }
        #sosmed1{
            display: flex;
            margin-left: 5px;
            z-index: 2;
        }
        .sosmed2{
            width: 22px;
            height: 22px;
            margin-left: 5px;
            margin-top: 2px;
        }
        #relog{
            display: flex;
            margin-left: 68%;
            margin-top: 0px;
            z-index: 2;
        }
        .relog1{
            margin-left: 40px;
            margin-top: 1px;
            font-size: 18px;
            color: black;
        }
        .navbar{
            display: flex;
            margin-left: -1px;
            top: 0px;
            width: 100%;
            height: 9%;
            position: fixed;
            background-color: #ffffff;
            box-shadow: 1px 5px 7px #B9B3B3;
            z-index: 3;
        }
        #navbarr{
            margin-left: 35%;
            padding-top: 1%;
        }
        .navbar1{
            margin-left: 50px;
            font-size: 18px;
            color: #595959;
        }
        #navbarr a:hover{
            color: black;
        }
        #javaguide{
            width: 20%;
        }
        #java{
            margin-left: 15px;
            margin-top: -5px;
            font-size: 35px;
        }
        #guide{
            margin-left: 35px;
            margin-top: -52px;
            font-size: 25px;
        }
        #judulsub {
            position: relative;
            font-style: normal;
            font-weight: normal;
            font-size: 48px;
            color: #595959;
            text-shadow: 2px 2px 2px #bbbbbb;
            margin-bottom: 40px;
            margin-left: 485px;
        }
        .city {
            position: relative;
            margin-left: 160px;
        }
        #isi {
            position: absolute;
            display: flex;
            z-index: 2;
            font-style: normal;
            font-weight: normal;
            font-size: 32px;
            line-height: 0px;
            text-shadow: 0px 3px 3px #000000;
        }
        #kolom1 {
            position: relative;
            width: 350px;
            height: 500px;
            margin-right: 60px;
        }
        #kolom2  {
            position: relative;
            margin-right: 60px;  
        }
        #kolom3 {
            position: relative;
        }
        #img {
            margin-bottom: 50px;
            box-shadow: 0px 7px 8px #161616;
        }
        #kota {
            position: relative;
            color: #ffffff;
            top: -110px;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="sosmed">
        <p id="follow">FOLLOW US:</p>
        <div id="sosmed1">
            <a href="https://www.instagram.com/"><img class="sosmed2" src="instagram.png"></a>
            <a href="https://www.facebook.com/"><img class="sosmed2" src="facebook.png"></a>
            <a href="https://www.twitter.com/"><img class="sosmed2" src="twitter.png"></a>
        </div>
        <div id="relog">
            <a href="../register/register.html" class="relog1">Registrasi</a>
            <a href="logout.php" class="relog1" onclick="return confirm('Logout Sekarang?')">Logout</a>
        </div>
    </div>
    <div class="navbar">
        <div id="javaguide">
            <p id="java">JAVA</p>
            <p id="guide">g u i d e</p>
        </div>
        <div id="navbarr">
            <a href="../index.html" class="navbar1">HOME</a>
            <a href="../destinations/destinations.html" class="navbar1">DESTINATIONS</a>
            <a href="../guide/guide.html" class="navbar1">GUIDE</a>
            <a href="../blog/blog.html" class="navbar1">BLOG</a>
            <a href="../Profil My Account/Profil My Account.html" class="navbar1">ACCOUNT</a>
        </div>
    </div>
    <div class="city">
        <h1 id="judulsub"> City Tour </h1>
        <div id="isi">
            <div id="kolom1">
            <a href="#"><img id="img" src="bandung.jpg" width="350px" height="250px"><p id="kota"> Bandung </p></a>
            <a href="#"><img id="img" src="jogja.jpg" width="350px" height="250px"> <p id="kota"> Jogja</p></a>
            </div>
            <div id="kolom2">
            <a href="#"><p><img id="img" src="surabaya.jpg" width="350px" height="500px"> <p id="kota">Surabaya</p></a>
            </div>
            <div id="kolom3">
            <a href="#"><img id="img" src="banyuwangi.jpg" width="350px" height="250px"><p id="kota"> Banyuwangi</p></a>
            <a href="#"><img id="img" src="Bromo.jpg" width="350px" height="250px"><p id="kota">Malang</p></a>
            </div>
        </div>
    </div>
</body>
</html>