<html>
    <head>
    <title> Sistem Pakar  </title>  
    <link rel="icon" href="assets/images/logo.png">  
    <meta name="viewport"   content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Portofolio">
    <meta name="author" content="Ane">
    <meta name="keywords" content="web Portofolio">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</head>
    <body>
        <header>
            <nav>
            <a href="index.php"><img src="assets/images/logo.png" alt="Logo Puskesmas Talawi"><b> Puskesmas Talawi</b></a>
                <ul>
                    <li> <a href="index.php"> Beranda </a></li>
                    <li> <a href="#blog"> Blog</a></li>
                    <li> <a href="#kontak"> Kontak</a></li>
                </ul>
            </nav>
        </header>

        <main>

            <!-- Bagian Intro-->
            <section id="intro">
                <div id="intro-text">
                    <p class="text-putih"> Hallo selamat datang di sistem pakar diagonasa</p>
                    <h1> Penyakit Paru-Paru</h1>
                    <h2 class="text-putih"> Puskesmas Talawi</h2>
                    <a href="diagnosa.php" class="btn btn-putih">Mulai Diagnosa</a>
                </div>
                <div id="intro-image">
                    <img src="assets/images/paru.png" class="profil-image" alt="John Doe">
                </div>    
            </section>
            <!---bagian Intro-->

            <!---bagian blog-->
            <section id="blog">
                <h1 class="judul teks-tengah"> Macam Penyakit Paru</h1>
                <div class="container">
                    <!---artikel 1-->
                    <article class="card">
                        <img src="assets/images/ispa.png" class="blog-image" alt="Tuberkolosis (TBC)">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="blog/ispa.html">Infeksi Saluran Penafasan Atas (ISPA)</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 1-->

                    <!--Artikel 2-->
                    <article class="card">
                        <img src="assets/images/asma.jpeg" class="blog-image" alt="Judul Blog 1">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="detail-blog.html">Asma</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 2-->

                    <!--Artikel 3-->
                    <article class="card">
                        <img src="assets/images/bronkiolitis.png" class="blog-image" alt="Judul Blog 1">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="detail-blog.html">Bronkiolitis</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 3-->

                    <!--Artikel 4-->
                    <article class="card">
                        <img src="assets/images/bronkitisakut.jpg" class="blog-image" alt="Judul Blog 1">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="detail-blog.html">Bronkitis Akut</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 4-->
                   
                    <!--Artikel 5-->
                    <article class="card">
                        <img src="assets/images/tuberkulosis.png" class="blog-image" alt="Judul Blog 1">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="detail-blog.html">Tuberkulosis Paru (TB Paru)</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 5-->

                    <!--Artikel 6-->
                    <article class="card">
                        <img src="assets/images/ppok.png" class="blog-image" alt="Judul Blog 1">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="detail-blog.html">Penyakit Paru Obstruktif Kronik (PPOK)</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 6-->

                    <!--Artikel 7-->
                    <article class="card">
                        <img src="assets/images/pneumonia.GIF" class="blog-image" alt="Judul Blog 1">
                        <section class="blog-desc">
                            <span> 28 Maret 2023</span>
                            <h3 class="teks-kiri">
                                <a href="detail-blog.html">Pneumonia</a> 
                            </h3>
                            <p class="teks-kiri">Ini adalah deskripsi blog</p>
                        </section>
                    </article>
                    <!--Artikel 7-->
                </div>
            </section>
            <!---bagian blog-->
            <!--Bagian KOntak-->
            <section id="kontak">
                <h1 class="judul teks-tengah">Kontak Pendaftaran</h1>
                <div class="container">
                    <div style="width: 50%;text-align: left;">
                    <b> Telp :</b>
                    <p> (0754) 410444</p>

                    <b> Alamat :</b>
                    <p> Talawi Hilir, Talawi, Kota Sawahlunto
                    <p> Sumatera Barat </p>
                    
                    <b> Jam buka :</b>
                    <p> 24 Jam</p>
                    </div>
                    <form action="send.php" method="post" target="_blank">
                        <input type="text" name="name" placeholder="Nama"/>
                        <input type="text" name="usia" placeholder="Usia"/>
                        <input type="text" name="pesan" placeholder="Pesan Anda"/>
                    </textarea>
                    <br/>
                    <button type="submit" name="submit" class="btn btn-biru" > Kirim Pesan</button>
                    </form>
                </iv>
                </section>
                <!--Bagian Kontak-->
        </main>
        <footer>
            <p> Web Diagnosa Penyakit Paru - Puskesmas Talawi</p>
        </footer>
</body>
</html>