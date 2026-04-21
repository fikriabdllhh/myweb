<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>H2H</title>
</head>
<body>
    <!-- HEADER UNTUK LOGO -->
    <header class="sticky-header">
        <nav class="navbar">
            <div class="logo">
                <img src="image/h2h.png" alt="h2h">
            </div>
            <ul class="nav-menu">
                <li><a href="index.php?page=home">Beranda</a></li>
                <li class="dropdown">
                    <a href="#">Tentang <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?page=tentang&sub=visi">visi misi</a></li>
                        <li><a href="index.php?page=tentang&sub=sejarah">sejarah</a></li>
                        <li><a href="index.php?page=tentang&sub=team">team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Galeri <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?page=galeri">Galeri Foto</a></li>
                        <li><a href="index.php?page=galeri">Galeri Video</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=kontak">Kontak</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <main>
        <!-- HALAMAN HOME / BErANDA -->
         <?php
        if (isset($_GET['page'])) {
            $halaman = $_GET['page'];
        } else {
            $halaman = "home";
        }

        // Halaman Home
        if ($halaman == "home") {
        ?>
        <section class="hero">
            <div class="hero-overlay"></div>
            <video class="hero-video" autoplay muted loop playsinline>
                <source src="video/mvedit.mov" type="video/mp4">
            </video>
            <div class="hero-content">
                <h1>Heart2Heart</h1>
                <p>Heart2Heart adalah girl group K-pop yang mengusung konsep
                ceria dengan fokus pada kehangatan dan koneksi emosional yang 
                tulus bersama para penggemarnya.</p>
                <a href="index.php?page=galeri" class="btn-primary">Lihat Galeri</a>
            </div>
            <div class="video-controls">
                <button id="pauseBtn" class="btn-control"><i class="fas fa-pause"></i></button>
                <button id="muteBtn" class="btn-control"><i class="fas fa-volume-mute"></i></button>
            </div>
        </section>

        <section class="about-freview">
            <div class="container">
                <h2>Tentang H2H</h2>
                <p>Heart2Heart (H2H) adalah komunitas fan K-Pop terbesar di Indonesia yang berdedikasi 
                untuk menyebarkan kecintaan terhadap budaya Korea. Kami menyambut semua fans dengan tangan terbuka!
                Bergabunglah dengan ribuan member kami dan rasakan kebersamaan yang hangat dalam komunitas yang kami 
                bangun dengan penuh cinta.</p>
                <a href="index.php?page=tentang&sub=visi" class="btn-primary">Selengkapnya</a>
            </div>
        </section>

        <section class="gallery-preview">
            <div class="container">
                <h2>Galeri H2H</h2>
                <div class="gallery-grid">
                    <div class="galerry-item">
                        <img src="image/jiwoo.jpg" alt="Jiwoo">
                    </div>
                    <div class="galerry-item">
                        <img src="image/carmen.jpg" alt="Carmen">
                    </div>
                    <div class="galerry-item">
                        <img src="image/ian.jpg" alt="Ian">
                    </div>
                    <div class="galerry-item">
                        <img src="image/stella.jpg" alt="Stella">
                    </div>
                    <div class="galerry-item">
                        <img src="image/yuha.jpg" alt="Yuha">
                    </div>
                    <div class="galerry-item">
                        <img src="image/yeon.jpg" alt="Yeon">
                    </div>
                    <div class="galerry-item">
                        <img src="image/ana.jpg" alt="Ana">
                    </div>
                    <div class="galerry-item">
                        <img src="image/juun.jpg" alt="Juun">
                    </div>
                </div>
                <a href="index.php?page=galeri" class="btn-secondary">Lihat semua galeri</a>
            </div>
        </section>

        <section class="video-gallery">
            <div class="container">
                <h2>Galeri Video Youtube</h2>
                <div class="video-grid">
                    <div class="video-item">
                        <iframe 
                        width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/Ur7aK4FvK-U?si=FAf6VdT4sjlJ5W2U" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe width="560" 
                            height="315" 
                            src="https://www.youtube.com/embed/F7sGJVUrkjQ?si=SFEUyy1pYc4yVpt0" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; 
                            autoplay; 
                            clipboard-write; 
                            encrypted-media; 
                            gyroscope; 
                            picture-in-picture; 
                            web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/n7kFRxFIPrI?si=URy-lBiuJ1vPy9Ae" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share" 
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    // END HALAMAN HOME

    // HALAMAN GALERI
    if ($halaman == "galeri") {
    ?>
        <section class="page-header">
            <div class="container">
                <h1>Galeri foto</h1>
            </div>
        </section>

        <section class="gallery-page">
            <div class="container">
                <div class="gallery-gid">
                    <div class="gallery-item">
                        <img src="image/h2h1.jpg" alt="h2h1">
                    </div>
                    <div class="gallery-item">
                       <img src="image/h2h2.jpg" alt="h2h2">
                    </div>
                    <div class="gallery-item">
                        <img src="image/h2h3.jpg" alt="h2h3">
                    </div>
                    <div class="gallery-item">
                        <img src="image/h2h4.jpg" alt="h2h4">
                    </div>
                    <div class="gallery-item">
                        <img src="image/h2h5.jpg" alt="h2h5">
                    </div>
                    <div class="gallery-item">
                        <img src="image/h2h6.jpg" alt="h2h6">
                    </div>
                </div>
                <div class="pagination">
                        <a href="index.php?page=galeri&hal=1">1</a>
                        <a href="index.php?page=galeri&hal=2">2</a>
                        <a href="index.php?page=galeri&hal=3">3</a>
                </div>
            </div>
        </section>
        <?php
        }
        // END HALAMAN GALERI

        // HALAMAN VIDEO
        if ($halaman == "video") {
        ?>
        <section class="page-header">
            <div class="container">
                <h1>Galeri Video</h1>
                <p>Video dengan jumlah penayangan terbanyak di youtube</p>
            </div>
        </section>

        <section class="video-page">
            <div class="container">
                <div class="video-grid">
                    <div class="video-item">
                        <iframe 
                        width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/Ur7aK4FvK-U?si=FAf6VdT4sjlJ5W2U" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe width="560" 
                            height="315" 
                            src="https://www.youtube.com/embed/F7sGJVUrkjQ?si=SFEUyy1pYc4yVpt0" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; 
                            autoplay; 
                            clipboard-write; 
                            encrypted-media; 
                            gyroscope; 
                            picture-in-picture; 
                            web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-item">
                        <iframe width="560" 
                        height="315" 
                        src="https://www.youtube.com/embed/n7kFRxFIPrI?si=URy-lBiuJ1vPy9Ae" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share" 
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <?php
        }
        // END HALAMAN VIDEO

        // HALAMAN TENTANG
        if ($halaman == "tentang") {
        ?>
        <section class="page-header">
            <div class="container">
                <h1>Tentang Kami</h1>
                <p>SM Entertainment, salah satu agensi terbesar di Korea Selatan, 
                    baru-baru ini memperkenalkan girl group baru bernama Hearts2Hearts. 
                    Grup ini dijadwalkan untuk debut pada Februari 2025, dan telah menarik perhatian banyak penggemar K-pop.
                    Grup ini terdiri dari delapan anggota yang masing-masing memiliki bakat dan pesona yang berbeda. 
                    Berikut adalah sedikit informasi mengenai setiap member Hearts2Hearts yang telah bocor ke publik.</p>
            </div>
        </section>

        <section class="button-priview">
            <div class="container">
                <h2>Jiwoo</h2>
                <p>Lahir pada 2006 di Korea Selatan, Jiwoo merupakan salah satu anggota utama dari Hearts2Hearts. 
                    Dilansir dari AllKpop, Jiwoo memiliki keunggulan fisik dengan tinggi sekitar 170 sentimeter 
                    dan tubuh yang fleksibel berkat latar belakangnya sebagai penari balet. Bergabung dengan SM Entertainment 
                    sejak kelas 6, Jiwoo telah berlatih selama enam tahun. Visualnya yang mencolok serta kemampuan menari 
                    yang memukau membuatnya menjadi sorotan utama dalam grup ini. Banyak yang membandingkannya dengan Isa dari STAYC 
                    karena kesamaan visual mereka yang menawan.</p>
                    <br>
                <h2>Carmen</h2>
                <p>Bernama lengkap Nyoman Ayu Carmenita, ia lahir pada 28 Maret 2006 di Bali, Indonesia dan menjadi anggota yang sangat 
                    dinantikan karena akan menjadi idol pertama asal Indonesia di bawah SM Entertainment.
                Dengan latar belakang seni yang kuat, termasuk kemampuan bernyanyi, rap, dan bermain piano, Carmen memiliki potensi besar 
                untuk bersinar. Meskipun baru melatih diri di SM Entertainment sekitar dua tahun, ia sudah menarik perhatian banyak 
                penggemar karena bakat dan pesonanya yang luar biasa.</p>
                <br>
                <h2>Jooeun</h2>
                <p>Jooeun, juga lahir pada 2006 di Korea Selatan, dikenal karena kemampuannya yang serba bisa. Ia tidak hanya mampu menyanyi, 
                    tetapi juga berbakat dalam rap dan tari. Jooeun mencuri perhatian banyak orang ketika menunjukkan kemampuannya dalam sebuah 
                    showcase grup.Sebagai anggota yang dianggap sebagai "ace" dari Hearts2Hearts, Jooeun diharapkan menjadi salah satu vokalis 
                    utama grup ini dengan suara yang kuat dan teknik vokal yang mumpuni.</p>
                    <br>
                <h2>Yu-Ha</h2>
                <p>Haram adalah member Korea Selatan lain yang lahir pada 2006. Dikenal dengan visualnya yang cantik, Haram diperkirakan akan menjadi 
                    salah satu vokalis utama grup. Dengan tampilan yang memesona dan kemampuan vokal yang solid, ia mendapat tempat di hati banyak 
                    penggemar. Haram diprediksi akan menjadi face of the group berkat pesona yang dimilikinya.</p>
                    <br>
                <h2>Yian</h2>
                <p>Yian merupakan anggota asal Tiongkok yang lahir pada 2007. Ia disebut akan menjadi anggota yang menjanjikan dalam Hearts2Hearts.
                    Meskipun masih muda, Yian sudah menunjukkan potensi luar biasa dalam hal performa dan penampilan panggung. Bahkan, dikutip dari Koreaboo, 
                    ada yang menyebut bahwa ia menempati juara pertama dalam suatu kompetisi bernyanyi di Tiongkok. Banyak penggemar yang menantikan penampilan 
                    Yian yang penuh karisma. Sebagai member asal Tiongkok, ia membawa nuansa internasional dalam grup yang semakin memperkaya keragaman Hearts2Hearts.
                </p>
                <br>
                <h2>Stella</h2>
                <p>Stella dikenal dengan nama Dahyun dan lahir pada 2007. Diketahui, ia memiliki kewarganegaraan Korea-Kanada. Setelah tinggal di Kanada selama sepuluh 
                    tahun, ia menguasai dua bahasa, yang menjadikannya anggota yang sangat berharga dalam grup yang memiliki penggemar internasional. Kepribadiannya yang 
                    ceria dan kemampuan berbahasa Inggris yang fasih membuatnya semakin menonjol, dan penggemar semakin tidak sabar melihat penampilannya di panggung.</p>
                    <br>
                <h2>Yuna</h2>
                <p>Yuna yang lahir pada 2008 di Jepang menjadi salah satu anggota yang paling dinanti. Terkenal dengan visualnya yang cantik, Yuna juga menunjukkan kemampuan 
                    bernyanyi dan rap yang mengesankan. Yuna bergabung dengan SM Entertainment pada 2022, dan sejak itu terus berlatih keras untuk debut. Keahliannya dalam 
                    bernyanyi dan kemampuan rap yang solid telah menarik perhatian banyak penggemar.</p>
                    <br>
                <h2>Nayeon</h2>
                <p>Lahir pada 2010 di Korea Selatan, Nayeon merupakan member termuda atau maknae dalam grup ini. Meskipun masih muda, Nayeon sudah menunjukkan bakat luar biasa 
                    dengan kemampuan bernyanyi dan pesona yang memikat. Banyak yang terkesan dengan penampilannya yang matang meskipun usianya masih muda, dan fans sangat antusias 
                    menantikan penampilan debutnya yang pertama.</p>
            </div>
        </section>
    <?php
        }
        // END HALAMAN TENTANG

        // HALAMAN KONTAK
        if ($halaman == "kontak") {
        ?>

        <section class="page-header">
            <div class="container">
                <h1>Hubungi kami</h1>
            </div>
        </section>

        <section class="contact-page">
            <div class="container">
                <div class="contact-info">
                    <h2>Informasi Kontak</h2>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Sudirman No. 123, Jakarta</p>
                    <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                    <p><i class="fas fa-envelope"></i> info@habihub.id</p>
                </div>
            </div>
        </section>
    <?php
    }
    // END HALAMAN KONTAK
    ?>
    </main>

    <!-- TOMBOL WHATSAPP-->
     <a href="https://wa.me/6285952914202" target="_blank" class="whatsapp-btn">
        <i class="fab fa-whatsapp"></i>
    </a>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h2>Heart2Heart</h2>
                    <p>Platform komunitas Heart2Heart di Indonesia</p>
                </div>
                <div class="footer-section">
                    <h3>Link Referensi</h3>
                    <ul class="footer-links">
                        <li><a href="https://www.instagram.com/heart2heart.id/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.facebook.com/Heart2HeartID/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.twitter.com/Heart2HeartID" target="_blank">Twitter</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Ikuti Kami</h3>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/heart2heart.id/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/Heart2HeartID/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/Heart2HeartID" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Heart2Heart. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Script for hamburger menu
        var hamburger = document.querySelector('.hamburger');
        var navMenu = document.querySelector('.nav-menu');

        if (hamburger && navMenu) {
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            });
        }

        // Script for closing menu when a link is clicked
        var semuaLink = document.querySelectorAll('.nav-menu li a');
        semuaLink.forEach(function(link) {
            link.addEventListener('click', function() {
                if (hamburger) hamburger.classList.remove('active');
                if (navMenu) navMenu.classList.remove('active');
            });
        });

        // Script for video control (Home Page)
        document.addEventListener('DOMContentLoaded', function() {
            var heroVideo = document.querySelector('.hero-video');
            var pauseBtn = document.getElementById('pauseBtn');
            var muteBtn = document.getElementById('muteBtn');

            if (heroVideo && pauseBtn) {
                pauseBtn.addEventListener('click', function() {
                    if (heroVideo.paused) {
                        heroVideo.play();
                        pauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                    } else {
                        heroVideo.pause();
                        pauseBtn.innerHTML = '<i class="fas fa-play"></i>';
                    }
                });
            }

            if (heroVideo && muteBtn) {
                muteBtn.addEventListener('click', function() {
                    if (heroVideo.muted) {
                        heroVideo.muted = false;
                        muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
                    } else {
                        heroVideo.muted = true;
                        muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
                    }
                });
            }
        });
    </script>
</body>
</html>