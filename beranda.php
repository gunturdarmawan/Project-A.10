<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/beranda.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <title>Beranda | Ideasia</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="toggle-mobile nav__logo" onclick="openNav()">
                <i class='bx bx-menu' id="opn"></i>
            </div>
            <div class="toggle-mobile nav__logo" onclick="closeNav()">
                <i class='bx bx-x' id="cls"></i>
            </div>          
            <h3>Ideasia</h3>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
            <div class="gotop">
                <i class="bx bx-arrow-to-top" onclick="topFunction()" id="go-top"></i>             
            </div>
            <div class="progress-bar" id="myBar"></div>
        </header>
        <div class="gotop">
            <i class="bx bx-arrow-to-top" onclick="topFunction()" id="go-top"></i>             
        </div>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div class="navbar-list">
                    <div class="header__toggle nav__logo">
                        <i class='bx bx-chevron-right' id="header-toggle"></i>
                    </div>
                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                        <i class='bx bx-home-smile nav__icon' ></i>
                            <span class="nav__name">Beranda</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Profile</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bx-trophy nav__icon' ></i>
                            <span class="nav__name">Trophy</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-map-pin nav__icon' ></i>
                            <span class="nav__name">Lodadi</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__name">Notifications</span>
                        </a>
                    </div>
                </div>

                <a href="loginRegister.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <div id="mySidebar" class="sidebar">
            <nav class="nav">
                <div class="navbar-list">               
                    <div class="nav__list">
                        <div class="bottom-home">
                            <a href="#" class="nav__link active">
                                <i class='bx bx-home-alt nav__icon' ></i>
                                <span class="nav__name">Beranda</span>
                            </a>
                        </div>
                        <div class="bottom berita">
                            <a href="#" class="nav__link">
                                <i class='bx bx-detail nav__icon' ></i>
                                <span class="nav__name">Berita</span>
                            </a>
                        </div>
                        <div class="bottom-profile">
                            <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon' ></i>
                                <span class="nav__name">Profile</span>
                            </a>
                        </div>                     
                        <a href="#" class="nav__link">
                            <i class='bx bx-trophy nav__icon' ></i>
                            <span class="nav__name">Trophy</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Favorites</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-map-pin nav__icon' ></i>
                            <span class="nav__name">Lodadi</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__name">Notifikasi</span>
                        </a>
                    </div>
                </div>

                <a href="index.html" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Keluar</span>
                </a>
            </nav>
        </div>
            
        <div class="r-sidebar" id="sidebar" onmouseover="stopImg(this)"  onmouseout="continueImg(this)" >
            <h1></h1>
            <div class="container-berita fade">
                <div class="berita">
                    <img src="asset/riwayat-satu-kasus-baru-pasien-covid-19-di-yogyakarta.jpg" alt="berita" class="img-berita">
                </div>
                <h2>Kasus korona</h2>
                <p>Pada 10 Desemeber 2020, kasus korona di kota yogyakarta terus meningkat, tempat-tempat berlibur dan kafe-kafe banyak yang sudah mulai menutup sementara, demi menekan kasus covid-19 ini, semoga corona ini cepat berlalu.</p>
                <span><button class="tbl-slide" id="like">1.2K Like</button></span>
                <span><button class="tbl-slide" id="comment">120 Comment</button></span>
            </div>
            <div class="container-berita fade">
                <div class="berita">
                    <img src="asset/sky-view-jogja.png" alt="berita" class="img-berita">
                </div>
                <h2>Liburan aman saat Pandemi</h2>
                <p>Seputar Tips dan trik liburan aman di masa pandemi saat ini, pertama Menggunakan Masker dan membawa sanitizer, kedua Jaga jarak minimal 1 meter dan yang terakhir hindari tempat keramaian atau kerumunan orang.</p>
                <span><button class="tbl-slide" id="like">1.2K Like</button></span>
                <span><button class="tbl-slide" id="comment">120 Comment</button></span>
            </div>
            <div class="container-berita fade">
                <div class="berita">
                    <img src="asset/Kebakaran di bantul.jpg" alt="berita" class="img-berita">
                </div>
                <h2>Kebakaran di bantul</h2>
                <p>
                    Pada Sabtu 2020 telah terjadi kebakaran hebat di bantul tepatnya desa warungin, kobaran api cepat merambat dikarenakan angin kencang dan dan material sekitar rumah mudah terbakar, saat ini perkiraan kebakaraan terjadi karena konseleting listrik atau arus pendek listrik, untungnya tidak ada korban jiwa.
                </p>
                <span><button class="tbl-slide" id="like">1.2K Like</button></span>
                <span><button class="tbl-slide" id="comment">120 Comment</button></span>
            </div>
        </div>  

        <div class="slide-content">
            <h1>Berikan solusi terbaikmu!</h1>
            <h3>Di masa pandemi saat ini, banyak sektor pariwisata dan kuliner di daerah kita sepi peminat, yang berdampak menurunnya pendapatan masyarakat sekitar, bagaimana solusi terbaik terkait permasalahan ini?</h3>
            <div class="container-element">
                <div class="l-element">
                    <div class="satu">
                        <div class="center-icon">
                            <i class='bx bx-heart nav__icon' ></i>
                            <span class="nav__namer">1K</span>
                        </div>
                    </div>
                    <div class="dua">
                        <div class="center-icon">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__namer">302</span>
                        </div>
                    </div>
                </div>
                <div class="r-element">
                    <div class="dibuka"><h4>Sampai: </h4></div>
                    <div class="cntdown"><h3 id="countdown"></h3></div>
                </div>
            </div>
        </div>

        <!-- <div class="comm">
            <form action="" method="POST">
                <h3>Ikut Berpartisipasi pendapat:</h3>
                <textarea name="pendapat" placeholder="Berikan solusi Terbaikmu!" required></textarea>
                <button class="btn btn-done" name="submit">Launch</button>
            </form>
        </div> -->

        <div class="line-content">
            <h2 id="line-content">Solusi Terkait</h2>         
        </div>

        <div class="tag-ide">
            Solusi terbaik saat ini
        </div>
        <div class="ide-content">
            <div class="ide-container">
                <h3>Ridwan agung<span style="color: gold"> #1</span></h3>
                <p>Dengan membantu mempromosikan atau mengenalkan pariwisata, kuliner sekitar yang aman serta tetap memperhatikan protokol kesehatan dan arahan dari Pemerintah.
                </p>
                <div class="btn-ide-content">
                    <div class="btn-ide-l">Balasan 125</div>
                    <div class="btn-ide-r">
                        <div class="btn-ide ide-icon-up" onclick="increment()">
                            <i class='bx bx-chevron-up'></i>
                            <span class="btn-name-up" id="upvote" type="number">451</span>
                        </div>
                        <div class="btn-ide ide-icon-down">
                            <i class='bx bx-chevron-down' ></i>
                            <span class="btn-name">25</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ide-container">
                <h3>Ara jane <span style="color: silver;"> #2</span></h3>
                <p>Memberi bantuan berupa edukasi masyarakat dalam berbisnis dengan media sosial atau internet agar dapat menambah pemasukan pendapatan masyarakat.
                </p>
                <div class="btn-ide-content">
                    <div class="btn-ide-l">Balasan 72</div>
                    <div class="btn-ide-r">
                        <div class="btn-ide ide-icon-up">
                            <i class='bx bx-chevron-up' ></i>
                            <span class="btn-name-up">451</span>
                        </div>
                        <div class="btn-ide ide-icon-down">
                            <i class='bx bx-chevron-down' ></i>
                            <span class="btn-name">25</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ide-container">
                <h3>Putri rara<span style="color: sienna;"> #3</span></h3>
                <p>Menurut saya sabar dan tetap berusaha adalah jalan terbaik untuk di masa pandemi saat ini dengan terus mengikuti arahan Pemerintah dan jangan mudah putus asa.
                </p>
                <div class="btn-ide-content">
                    <div class="btn-ide-l">Balasan 41</div>
                    <div class="btn-ide-r">
                        <div class="btn-ide ide-icon-up">
                            <i class='bx bx-chevron-up' ></i>
                            <span class="btn-name-up">451</span>
                        </div>
                        <div class="btn-ide ide-icon-down">
                            <i class='bx bx-chevron-down' ></i>
                            <span class="btn-name">25</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="tag-ide-all">
                Semua solusi menarik
            </div>
            <div class="ide-content-all">
                <div class="ide-container-biasa">
                    <h3>Jhon doe</h3>
                    <p>Kita bisa membantu dengan berdoa agar korona ini cepat berlalu
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 41</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ide-container-biasa">
                    <h3>Ara jane</h3>
                    <p>Sabar dan tetap semangattt!
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 74</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ide-container-biasa">
                    <h3>Jane doe</h3>
                    <p>Coba berjualan atau promosikan  ke internet atau media sosial.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 6</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="ide-container-biasa">
                    <h3>Jhon doe</h3>
                    <p>PEmerintah butuh memberikan bantuan khusus terkait penjual dan pemilik sektor pariwisata.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 48</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ide-container-biasa">
                    <h3>Ara jane</h3>
                    <p>Berikan kemudahan berjual dan izin buka usaha di masa ini, dengan tetap memperhatikan protokol kesehatan.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 264</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="ide-container-biasa">
                    <h3>Ara jane</h3>
                    <p>Indonesia Pasti bisa, bangkit dan hebat.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 64</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ide-container-biasa">
                    <h3>Jhon doe</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Ut accusamus laudantium itaque delectus, tenetur possimus at quod fuga suscipit aut.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 51</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ide-container-biasa">
                    <h3>Ara jane</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Ut accusamus laudantium itaque delectus, tenetur possimus at quod fuga suscipit aut.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 541</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ide-container-biasa">
                    <h3>Jane doe</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Ut accusamus laudantium itaque delectus, tenetur possimus at quod fuga suscipit aut.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 51</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="ide-container-biasa">
                    <h3>Jhon doe</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Ut accusamus laudantium itaque delectus, tenetur possimus at quod fuga suscipit aut.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 841</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ide-container-biasa">
                    <h3>Ara jane</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Ut accusamus laudantium itaque delectus, tenetur possimus at quod fuga suscipit aut.
                       <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan 12</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="ide-container-biasa">
                    <h3>Ara jane</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                       Ut accusamus laudantium itaque delectus, tenetur possimus at quod fuga suscipit aut.
                    </p>
                    <div class="btn-ide-content">
                        <div class="btn-ide-l">Balasan</div>
                        <div class="btn-ide-r">
                            <div class="btn-ide ide-icon-up">
                                <i class='bx bx-chevron-up' ></i>
                                <span class="btn-name-up">451</span>
                            </div>
                            <div class="btn-ide ide-icon-down">
                                <i class='bx bx-chevron-down' ></i>
                                <span class="btn-name">25</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                gsap.from('.ide-container', {
                stagger: .5,
                opacity: 0, 
                duration: 1,
                y: -0, delay: 0
            });
            </script>

        <!--===== MAIN JS =====-->
        <script src="js/behavior.js"></script>
    </body>
</html>