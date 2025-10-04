<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <!-- ===================================== NAV ========================================== -->
    <!-- ===================================== NAV ========================================== -->

    <nav>
        <!-- logo -->
        <div class="logo">
            <img src="" alt="" srcset="">
        </div>

<!-- navbar -->
    <div class="navbbar">
            <ul>
                <li class="li1"><a href=".php">Home</a></li>
                <li class="li2"><a href=".php">Tentang</a></li>
                <li class="li3"><a href=".php">Wisata</a></li>
            </ul>
    </div>

    <!-- icon link -->
        <div class="iconlink">
            <ul>
                <li><i class="fa-solid fa-bookmark"></i></li>
                <li><i class="fa-solid fa-user"></i></li>
            </ul>
        </div>
    </nav>

    <!-- ============================== SEARCH BAR ================================= -->
    <!-- ============================== SEARCH BAR ================================= -->

    <form action="search.php" method="post" class="search">
        <input type="text" name="search" id="search" placeholder="Cari Tujuan Anda">
        <button type="submit" class="btn_search"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    <!-- =============================== MAIN CONTENT ============================== -->
    <!-- =============================== MAIN CONTENT ============================== -->

    <div class="container">

        <!-- ======= Sebelah Kiri =========== -->

        <div class="left-main">
            <p class="txt-1">Selamat <br>Datang di <br> <span>Pulau Dewata</span> </p>

            <img src="image/download (5).jpeg" alt="" srcset="" class="img1">

            <p class="txt-2">Jelajahi pesona Pulau Dewata dengan pengalaman tak terlupakan.Dari pantai berpasir putih, budaya yang kaya, hingga panorama alam yang memukau, semua bisa kamu temukan di sini</p>

            <a href="wisata.php" target="_blank" rel="noopener noreferrer"><button class="btn-01">Lihat Semua</button></a>
        </div>

        <!-- ===== Sebelah Kanan ======= -->


        <div class="right-main">
            <img src="image/b3580b1961a4f7404a1e9a5a1b8ee123.jpg" alt="" srcset="">

            <div class="glass-fx">
                <p>Taman budaya</p>

            <div class="title-btn">
                <h2>GWK</h2>
                <a href="wisata.php?id"><button>Lihat Wisata</button></a>
            </div>

            <p>(Garuda Wisnu Kencana)</p>
        </div>
</div>


    </div>
</body>
</html>