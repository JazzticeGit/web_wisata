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
                        <div class="rating">★★★★★ <span>5/5</span> </div>
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
                        <div class="rating">★★★★★ <span>5/5</span></div>
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
                        <div class="rating">★★★★★ <span>5/5</span></div>
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
                        <div class="rating">★★★★★ <span>5/5</span></div>
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
                        <div class="rating">★★★★★ <span>5/5</span></div>
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

    <!-- ==================================== Prestasi tahun 2024 ========================================== -->
    <!-- ==================================== Prestasi tahun 2024 ========================================== -->

    <div class="data-wisata-section">
        <div class="data-container">
            <!-- Left Section -->
            <div class="left-section">
                <h2>Data Wisata Bali Pada Tahun 2024</h2>
                <p>Wisata Bali menawarkan kombinasi keindahan alam yang menawan, seperti pantai berpasir putih, sawah terasering, air terjun eksotis dan gunung berapi, serta kekayaan budaya yang kuat melalui pura-pura sakral, desa tradisional, dan seni pertunjukan.</p>
                
                <div class="image-container">
                    <img src="image/Pantai Kelingking, Bali.jpeg" alt="Kelingking Beach Nusa Penida">
                </div>
            </div>

            <!-- Divider -->
            <div class="divider"></div>

            <!-- Right Section - Statistics -->
            <div class="right-section">
                
                <!-- Stat 1 -->
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Total Pengunjung Asing</h3>
                        <p>± 2.64 juta orang (naik 9 % dibanding periode sama tahun sebelumnya) Menurut</p>
                        <a href="https://roadgenius.com" target="_blank">roadgenius.com</a>
                    </div>
                </div><br>

                <!-- Stat 2 -->
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Total Pengunjung Asing</h3>
                        <p>± 2.64 juta orang (naik 9 % dibanding periode sama tahun sebelumnya) Menurut</p>
                        <a href="https://roadgenius.com" target="_blank">roadgenius.com</a>
                    </div>
                </div><br>

                <!-- Stat 3 -->
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fa-solid fa-plane-arrival"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Total Pengunjung Asing</h3>
                        <p>± 2.64 juta orang (naik 9 % dibanding periode sama tahun sebelumnya) Menurut</p>
                        <a href="https://roadgenius.com" target="_blank">roadgenius.com</a>
                    </div>
                </div><br>

                <!-- Stat 4 -->
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fa-solid fa-plane-arrival"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Total Pengunjung Asing</h3>
                        <p>± 2.64 juta orang (naik 9 % dibanding periode sama tahun sebelumnya) Menurut</p>
                        <a href="https://roadgenius.com" target="_blank">roadgenius.com</a>
                    </div>
                </div><br>

            </div>
        </div>
    </div><br>

    <!-- <div class="main-3">
        <div class="main3-left">
            <img src="image/Guide to Explore Ubud, Bali 🌴🌾 (@ubudhood) • Instagram photos and videos.jpg" alt="" srcset="">

            <div class="glass1">
                <p>Top 1</p>
                <p>Wisata Populer</p>
            </div>

            <div class="glass2">
                <p>Pura Gunung Lebah</p>
                <h3>Ubud Bali</h3>
                <p>Rp50.000/Person</p>
            </div>
        </div>

        <div class="main3-right">
            <h2>Kenapa Harus Bali?</h2>

            <p>Karena Bali menawarkan keindahan alam yang menakjubkan, budaya yang unik dan penuh makna, keramahan masyarakatnya, serta berbagai destinasi wisata yang lengkap mulai dari pantai, pegunungan, hingga seni dan kuliner. Semua itu menjadikan Bali sebagai pilihan terbaik untuk dikunjungi.</p>

            <a href="wisata.php"><button>Semua Wisata</button></a>
        </div>
    </div> -->

    <div class="about-section">
    <div class="about-left">
        <div class="image-grid">
            <img src="image/Guide to Explore Ubud, Bali 🌴🌾 (@ubudhood) • Instagram photos and videos.jpg" alt="Venice" class="img-large">
            <img src="image/Tamblingan Lake.jpeg" alt="Beach" class="img-top-right">
            <img src="image/Ulun Danu Temple - Bali.jpg" alt="Hot Air Balloon" class="img-bottom-right">
        </div>
    </div>

    <div class="about-right">
        <p class="about-label">Baliguide Sangat Terpercaya</p>
        <h2>Apapun Keadaanya Bali Sangat Cocok Untuk Anda</h2>
        <p class="about-description">
            Karena Bali menawarkan keindahan alam yang menakjubkan, budaya yang unik dan penuh makna, keramahan masyarakatnya, serta berbagai destinasi wisata yang lengkap mulai dari pantai, pegunungan, hingga seni dan kuliner. Semua itu menjadikan Bali sebagai pilihan terbaik untuk dikunjungi.
        </p>

        <div class="stats-container">
            <div class="stat-items">
                <h3>2000+</h3>
                <p>Our Explorers</p>
            </div>
            <div class="stat-items">
                <h3>100+</h3>
                <p>Destinations</p>
            </div>
            <div class="stat-items">
                <h3>20+</h3>
                <p>Years Experience</p>
            </div>
        </div>
    </div>
</div>



<button id="scrollToTop" class="scroll-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script>
        // ============ Card Scroll Functionality ============
        const wrapper = document.getElementById('cardsWrapper');
        const scrollLeft = document.getElementById('scrollLeft');
        const scrollRight = document.getElementById('scrollRight');
        
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

        function updateButtons() {
            const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;
            scrollLeft.style.opacity = wrapper.scrollLeft <= 0 ? '0.5' : '1';
            scrollRight.style.opacity = wrapper.scrollLeft >= maxScroll ? '0.5' : '1';
        }

        wrapper.addEventListener('scroll', updateButtons);
        updateButtons();

        // ============ Scroll to Top Button ============
        const scrollToTopBtn = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // ============ Smooth Scroll for Links ============
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // ============ Scroll Animations ============
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.card, .stat-item, .stat-items, .about-section, .data-wisata-section').forEach(el => {
            observer.observe(el);
        });

        // ============ Parallax Effect ============
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            
            
            parallaxElements.forEach(element => {
                const speed = 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // ============ Counter Animation ============
        const counters = document.querySelectorAll('.stat-items h3');
        const speed = 200;

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                    const target = entry.target;
                    const text = target.textContent;
                    const number = parseInt(text.replace(/\D/g, ''));
                    const suffix = text.replace(/[0-9]/g, '');
                    
                    let current = 0;
                    const increment = number / speed;
                    
                    const updateCounter = () => {
                        current += increment;
                        if (current < number) {
                            target.textContent = Math.ceil(current) + suffix;
                            requestAnimationFrame(updateCounter);
                        } else {
                            target.textContent = number + suffix;
                        }
                    };
                    
                    updateCounter();
                    target.classList.add('counted');
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });

        // ============ Navbar Scroll Effect ============
        let lastScroll = 0;
        const nav = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                nav.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
                nav.style.background = 'rgba(234, 234, 234, 0.95)';
                nav.style.backdropFilter = 'blur(10px)';
            } else {
                nav.style.boxShadow = 'none';
                nav.style.background = 'transparent';
                nav.style.backdropFilter = 'none';
            }
            
            lastScroll = currentScroll;
        });
    </script>
</body>
</html>