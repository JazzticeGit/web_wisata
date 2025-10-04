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
    </div><br><br>

    <!-- =================================== Card Swipe bar ===================================== -->
    <!-- =================================== Card Swipe bar ===================================== -->

<div class="top-wisata-section">
        <!-- Header Section -->
        <div class="section-header">
            <h2>Top Wisata</h2>
            <p>Daftar destinasi wisata terpopuler sepanjang tahun 2024</p><br><hr>
        </div>

        <!-- Cards Container -->
        <div class="cards-container">
            <div class="cards-wrapper" id="cardsWrapper">
                
                <!-- Card 1 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=600&h=400&fit=crop" alt="GWK">
                    <div class="card-content">
                        <p class="nama">Taman Budaya Garuda Wisnu Kencana</p>
                        <div class="alamat">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Jl. Raya Uluwatu, Ungasan, Kuta Selatan, Kabupaten Badung</p>
                        </div>
                        <div class="rating">★★★★★</div>
                        <div class="tombol">
                            <a href="detail.php"><button><i class="fa-solid fa-calendar-days"></i> Penawaran</button></a>
                            <a href="#"><button><i class="fa-solid fa-bookmark"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=600&h=400&fit=crop" alt="Pura Ulun Danu">
                    <div class="card-content">
                        <p class="nama">Taman Budaya Garuda Wisnu Kencana</p>
                        <div class="alamat">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Jl. Raya Uluwatu, Ungasan, Kuta Selatan, Kabupaten Badung</p>
                        </div>
                        <div class="rating">★★★★★</div>
                        <div class="tombol">
                            <a href="detail.php"><button><i class="fa-solid fa-calendar-days"></i> Penawaran</button></a>
                            <a href="#"><button><i class="fa-solid fa-bookmark"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?w=600&h=400&fit=crop" alt="Pantai">
                    <div class="card-content">
                        <p class="nama">Taman Budaya Garuda Wisnu Kencana</p>
                        <div class="alamat">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Jl. Raya Uluwatu, Ungasan, Kuta Selatan, Kabupaten Badung</p>
                        </div>
                        <div class="rating">★★★★★</div>
                        <div class="tombol">
                            <a href="detail.php"><button><i class="fa-solid fa-calendar-days"></i> Penawaran</button></a>
                            <a href="#"><button><i class="fa-solid fa-bookmark"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600&h=400&fit=crop" alt="Pantai Kuta">
                    <div class="card-content">
                        <p class="nama">Taman Budaya Garuda Wisnu Kencana</p>
                        <div class="alamat">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Jl. Raya Uluwatu, Ungasan, Kuta Selatan, Kabupaten Badung</p>
                        </div>
                        <div class="rating">★★★★★</div>
                        <div class="tombol">
                            <a href="detail.php"><button><i class="fa-solid fa-calendar-days"></i> Penawaran</button></a>
                            <a href="#"><button><i class="fa-solid fa-bookmark"></i></button></a>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?w=600&h=400&fit=crop" alt="Tegalalang">
                    <div class="card-content">
                        <p class="nama">Taman Budaya Garuda Wisnu Kencana</p>
                        <div class="alamat">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Jl. Raya Uluwatu, Ungasan, Kuta Selatan, Kabupaten Badung</p>
                        </div>
                        <div class="rating">★★★★★</div>
                        <div class="tombol">
                            <a href="detail.php"><button><i class="fa-solid fa-calendar-days"></i> Penawaran</button></a>
                            <a href="#"><button><i class="fa-solid fa-bookmark"></i></button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="scroll-nav">
            <button class="scroll-btn" id="scrollLeft">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="scroll-btn" id="scrollRight">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <!-- Lihat Semua Button -->
        <div class="lihat-semua">
            <button onclick="location.href='wisata.php'">Lihat Top Wisata</button>
        </div>
    </div>

    <script>
        const wrapper = document.getElementById('cardsWrapper');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');
        
        // Scroll amount (card width + gap)
        const scrollAmount = 340;

        scrollLeft.addEventListener('click', () => {
            wrapper.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });

        scrollRight.addEventListener('click', () => {
            wrapper.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        // Optional: Auto-hide buttons at boundaries
        function updateButtons() {
            const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;
            scrollLeft.style.opacity = wrapper.scrollLeft <= 0 ? '0.5' : '1';
            scrollRight.style.opacity = wrapper.scrollLeft >= maxScroll ? '0.5' : '1';
        }

        wrapper.addEventListener('scroll', updateButtons);
        updateButtons();
    </script>
</body>
</html>