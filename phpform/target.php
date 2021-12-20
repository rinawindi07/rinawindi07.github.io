<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCIT ACADEMY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<header>
    <div class="user">
        <img src="st,small,507x507-pad,600x600,f8f8f8.jpg" alt="">
        <h3 class="name">NCIT ACADEMY</h3>
        <p class="post">MEGA DANCE CREW</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">About Us</a></li>
            <li><a href="#crew">Our Crew</a></li>
            <li><a href="#join">Join</a></li>
        </ul>
    </nav>
</header>

<div id="about" class="fas fa-bars"></div>
<section class="home" id="home">
    <h3>TO THE WORLD!</h3>
    <h1>IT'S NCIT ACADEMY</h1>
    <p>NCIT ACADEMY is a dance school in Seoul, South Korea founded by CEO Joel Lee and Jerry Lee in 2016. Our members have choreographed for K-Pop artists and won some dance competitions either nationally or internationally. NCIT ACADEMY is the house of the best dancers in the world.  
    </p>
</section>

<section class="crew" id="crew">
<h1 class="heading"><span>Our Crew</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="joel.jpg" alt="Joel Lee">
    </div>

    <div class="box">
        <img src="lea.jpeg" alt="Lea Kim">
    </div>

    <div class="box">
        <img src="mihawk.jpg" alt="Gu Yeong Baek">
    </div>

    <div class="box">
        <img src="ncity dream.jpg" alt="NCITY Dream">
    </div>

    <div class="box">
        <img src="wayvi.jpg" alt="WayVi">
    </div>

    <div class="box">
        <img src="card.png" alt="Card">
    </div>

    <div class="box">
        <img src="eastpa.png" alt="eastpa">
    </div>

    <div class="box">
        <img src="ygx.jpg" alt="YGeX">
    </div>

    <div class="box">
        <img src="proudmon.jpg" alt="PROUDMON">
    </div>

</div>
</section>

<section class="join" id="join">
<h1 class="heading"> <span>Join</span></h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>
        <p>wanna be part of the best performance? as long as you have an interest and enjoy dancing <br> Let's Join Us! </p>
        <div class="info">
            <h3> <i class="fas fa-envelope"></i> ncit-dance@gmail.com </h3>
            <h3> <i class="fas fa-phone"></i> 081271124126 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Seoul, South Korea. </h3>
        </div>

    </div>

    <form action="" method="post">

        <input type="text" placeholder="name" name="nama" class="box">
        <input type="text" placeholder="address" name="alamat" class="box">
        <input type="email" placeholder="email" name="email" class="box">
        <input type="text" placeholder="project" class="box">
        <input type="text" placeholder="phone number" name="phone" class="box">
        <input name="message" id="" cols="30" rows="10" class="box message" placeholder="message"></input>
        <input type="submit" class="btn" value="Send" name="proses"></input>

    </form>

</div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>

<?php
    include("koneksi.php");

    if(isset($_POST['proses'])){
        mysqli_query($conn, "insert into registrasi set
        nama = '$_POST[nama]',
        alamat = '$_POST[alamat]',
        email = '$_POST[email]',
        phone = '$_POST[phone]',
        message = '$_POST[message]'");

        alert('YOUR REGISTRATION SUCCESS. We will send the next information to your email. See you in our dorm!');
    }
?>