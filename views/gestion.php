<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style css link  -->
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/animation.css?v=<?php echo time(); ?>">
    <title>PlayTech - Home</title>

    <!-- google font  link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;1,300;1,400;1,800;1,900&display=swap" rel="stylesheet">

    <!-- font awesome link "icone" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boxicon link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- bootstrap link -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- meta data include -->

</head>

<body>
    <!-- header (nav bar) -->
    <?php 
      include_once './views/includes/navbar.php';
    ?>
     

    <section class="banner" id="intro">
        <main class="home">
            <div class="home-text">
                <h1>GAMING <br>STORE</h1>
                <h5>votre meilleure endroit gaming</h5>
                <a href="#" class="home-btn">Shop Now</a>
            </div>
            <div class="home-img">
                <img src="./image/home-img/4.png" alt="">
            </div>
        </main>
    </section>


    <section id="feature">
        <div class="fe-box">
            <img src="image/image/back-img/im.jpg" alt="image">
            
        </div>
        <div class="fe-box">
            <img src="image/feature/24-7.png" alt="image">
            <h6>24/7 support</h6>
        </div>
        <div class="fe-box">
            <img src="image/feature/save-money.png" alt="image">
            <h6>Save money</h6>
        </div>
        <div class="fe-box">
            <img src="image/feature/mobile-order.png" alt="image">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="image/feature/promotions.png" alt="image">
            <h6>promotions</h6>
        </div>
        <div class="fe-box">
            <img src="image/feature/happy.png" alt="image">
            <h6>Happy Sell</h6>
        </div>
    </section>

    <!-- <div class="sideR">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./image/back-img/call-of-duty-warzone-update-2-keyart-en-01-03nov22.webp" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./image/back-img/sonic-frontiers-keyart-01-ps4-ps5-25aug22$en.webp" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./image/back-img/spider-man-miles-morales-PC-keyart-26oct22.webp" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div> -->



    <div class="mainToContact">
        <div class="manadger">
            <img src="./image/back-img/manadger.png" alt="">
        </div>
        <div class="blabla">
            <h2>Nous pouvons toujours endendez votre voie</h2>
            <a href="./html/contact.html"><button>contact</button></a>
        </div>
    </div>


    <a href="#intro" class="sctrooL">
        <i class='bx bxs-up-arrow-circle bx-md'></i>
    </a>
    
</body>

</html>