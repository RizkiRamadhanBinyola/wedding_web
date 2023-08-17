<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="assets/img/couple/favicon.ico" rel="icon">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Symbols+2&family=Poppins:wght@800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        

        <title>Responsive bottom navigation</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo text-decoration-none">M.Ridwan & N.Fitriyani</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link text-decoration-none">
                                <i class="bx bx-home-alt"></i>
                                <span class="nav__name active__link ">Home</span>
                            </a>
                        </li>
    
                        <li class="nav__item">
                            <a href="#about" class="nav__link text-decoration-none">
                                <i class="bx bx-user"></i>
                                <span class="nav__name">About</span>
                            </a>
                        </li>
    
                        <li class="nav__item">
                            <a href="#undangan" class="nav__link text-decoration-none">
                                <i class='bx bx-envelope'></i>
                                <span class="nav__name">Undangan</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#alamat" class="nav__link text-decoration-none">
                                <i class='bx bx-location-plus'></i>
                                <span class="nav__name">Alamat</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#amploponline" class="nav__link text-decoration-none">
                                <i class='bx bx-gift' ></i>
                                <span class="nav__name">Amplop Online</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="#ucapan" class="nav__link text-decoration-none">
                                <i class='bx bx-message-alt-detail'></i>
                                <span class="nav__name">Ucapan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!--=============== MAIN CONTENT ===============-->
        <section class="container section mt-5 d-flex alignt-items-center flip" id="home" style="margin-top: 70px; margin-bottom: 70px;">
            <div class="hero">
                <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up" style="font-family: 'Great Vibes', cursive;">M.Ridwan & N.Fitri</h1>
                    <p data-aos="fade-up" data-aos-delay="400" class="mt-2 mb-2" style="font-family: 'Poppins', sans-serif;">Akan segera melangsungkan pernikahan pada <br> Sabtu, 4 Maret 2023</p>
                    <div id="sound" class="nav-link sticked">
                        <audio id="myAudio">
                            <source src="assets/audio/casablanca.mp3">
                        </audio>
                        <div class="on-off sound-cloud mt-2" >
                            <a href="#about" onclick="myFunction()"><span id="off" class="btn btn-primary" data-aos="fade-up" data-aos-delay="800">Buka Undangan <i class="bx bx-envelope" style="margin: 0 auto;"></i></span></a>
                            <a href="#about" onclick="myFunction()"><span id="on" class="btn btn-primary" data-aos="fade-up" data-aos-delay="600">Buka Undangan<i class="bx bx-envelope" style="margin: 0 auto;"></i></span></a>
                        </div>
                    </div>
                    <div class="d-inline-flex p-2">
                        <h1 id="headline"></h1>
                        <div id="countdown" data-aos="fade-up" data-aos-delay="650">
                            <p class="mt-2 mb-2" style="font-family: 'Poppins', sans-serif;">Hitung mundur acara</p>
                            <small class="li-count border rounded p-2"><span class="span-count" id="days"></span></small></li>
                            :
                            <small class="li-count border rounded p-2"><span class="span-count" id="hours"></span></small></li>
                            :
                            <small class="li-count border rounded p-2"><span class="span-count" id="minutes"></span></small></li>
                            :
                            <small class="li-count border rounded p-2"><span class="span-count" id="seconds"></span></small></li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/img/couple/rf.jpg" class="img-fluid animated float-xl-end" alt="" width="70%">
                </div>
                </div>
            </div>
        </section> 

        <main id="panel">
            <!--=============== HOME ===============-->
            <!-- <section class="container section mt-5 d-flex alignt-items-center" id="home">
                <div class="hero">
                    <div class="row">
                      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up" style="font-family: 'Great Vibes', cursive;">M.Ridwan & N.Fitri</h1>
                        <p data-aos="fade-up" data-aos-delay="400" class="mt-2 mb-2" style="font-family: 'Poppins', sans-serif;">Akan segera melangsungkan pernikahan pada <br> Sabtu, 4 Maret 2023</p>
                        <div id="sound" class="nav-link sticked">
                          <audio id="myAudio">
                              <source src="assets/audio/casablanca.mp3">
                          </audio>
                          <div class="on-off sound-cloud mt-2" >
                              <a href="#about"><span id="off" class="btn btn-primary" data-aos="fade-up" data-aos-delay="800">Buka Undangan <i class="bx bx-envelope" style="margin: 0 auto;"></i></span></a>
                              <a href="#about"><span id="on" class="btn btn-primary" data-aos="fade-up" data-aos-delay="600">Buka Undangan <i class="bx bx-envelope" style="margin: 0 auto;"></i></span></a>
                          </div>
                        </div>

                      </div>
                      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                        <img src="assets/img/couple/rf.jpg" class="img-fluid animated float-xl-end" alt="" width="70%">
                      </div>
                    </div>
                </div>
              
            </section> -->

            <!--=============== ABOUT ===============-->
            <section class="container section mt-5" id="about" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="section__title">About</h2>
                <div class="px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                            <img src="assets/img/couple/rf-about.png" class="rounded-circle" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h2" style="font-family: 'Great Vibes', cursive;">M.Ridwan</h2>
                                    <p class="mb-0">Putra bungsu dari Bpk Edy Satori (ALM) & Ibu Darmi</p>
                                </div>
                                <div class="col mb-5 h-100" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0"> 
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h2" style="font-family: 'Great Vibes', cursive;">N.Fitriyani</h2>
                                    <p class="mb-0">Putri Bungsu dari Bpk. Bambang Sugeng (Alm) dan Ibu Khasidah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=============== UNDANGAN ===============-->
            <section class="container section mt-5 rounded event-section" id="undangan" data-aos="fade-up" data-aos-duration="1500" style="margin-top: 70px;">
                <div class="event" id="undangan">
                    <h1 class="section__title text-white">Undangan</h1>
                    <div class="container">
                      <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                          <div class="card undangan text-dark" style="background: #ccc;">
                            <div class="card-body isi-undangan">
                              <h5 class="card-title text-center">Resepsi Nikah</h5>
                              <hr style="width:50%; margin-left:25% !important; margin-right:25% !important;">
                              <p class="card-text text-center">Assalamualaikum Wr. Wb <br> Dengan memohon rahmat serta ridho Allah Swt, <br> Kami bermaksud menyelneggarakan <br> Resepsi Pernikahan putra-putri kami.</p>
                              <p class="card-text text-center">Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/I <br>berkenan hadir untuk memberikan do'a restu <br>kepada putra putri kami. <br>Wassalamu'alaikum Wr. Wb</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card undangan text-dark" style="background: #ccc;">
                            <div class="card-body isi-undangan">
                              <h5 class="card-title text-center">Tanggal dan hari</h5>
                              <hr style="width:50%; margin-left:25% !important; margin-right:25% !important;">
                              <p class="card-text text-center">Hari/Tanggal : Sabtu, 04 Maret 2023 <br>Pukul: 10.00 s/d selesai <br> Bertempat: <br> JL. Masjid Hidayatullah Kp. Poncol <br> RT. 003 Rw. 001 Kel. Jakasetia Kec. Bekasi Selatan - 17147 <br>(Samping Sekolah MTs Hidayatullah)</p>
                              <center>
                                <a href="https://calendar.google.com/calendar/u/0/r/eventedit/M2N0cjYwaDJnZWR2dTNuMmp1NmtxdGhjNGIgcml6a2liaW55b2xhMjVAbQ" class="btn rounded mt-2" style="margin-bottom: 15px; background-color: #fb839e; color: white;"><i class="fa-solid fa-calendar"></i> Add to calendar</a>
                              </center>
                              <p class="card-texxt text-center">Atas kehadiran dan do'a Bapak/Ibu/Saudara/I Kami ucapkan terimakasih</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </section>

            <!--=============== PORTFOLIO ===============-->
            <section class="container section mt-5 align-items-center" id="alamat" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="section__title">Alamat</h2>
                    <p class="text-center">Anda dapat menuju lokasi acara kami dengan bantuan peta dibawah ini. Atau anda bisa buka di <a class="text-decoration-none" href="https://www.google.com/maps/place/Yayasan+Perguruan+Islam+Hidayatullah+(DTA,MI,MTs,SMA)/@-6.2743808,106.9804275,17z/data=!3m1!4b1!4m5!3m4!1s0x2e698d9575aeeecb:0xc416e75648f1abd6!8m2!3d-6.2743775!4d106.9804285">Google Maps</a></p>
                    <!-- Map -->
                    <div id="contact" class="map rounded">
                        <iframe width="100%" height="345" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.918999886297!2d106.9804275!3d-6.2743808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d9575aeeecb%3A0xc416e75648f1abd6!2sYayasan%20Perguruan%20Islam%20Hidayatullah%20(DTA%2CMI%2CMTs%2CSMA)!5e0!3m2!1sid!2sid!4v1675508096157!5m2!1sid!2sid" data-aos="fade-up" data-aos-duration="1500"></iframe>
                        <br />
                        </iframe>
                    </div>
                    <!-- /Map -->
            </section>

            <!-- ============== AMPLOP ================== -->
            <div class="container section mt-5" id="amploponline">
                <div class="card mb-3">
                    <img src="https://www.simpleimageresizer.com/_uploads/photos/b90652a8/bca_1_450x250.png" class="card-img-top" alt="BCA">
                    <div class="card-body text-center">
                        <div class="rekening1">
                            <input type="text" value="6631176809" id="myInput2" hidden>
                                
                            <div class="text-center">
                                <h3 class="font-monospace">Nomor Rekening (Muhammad Ridwan): 6631176809</h3>
                                <button  class="btn btn-info" onclick="myFunction2()"><i class="fal fa-copy"></i> Copy Rekening</button>
                            </div>
                                    
                            <script type="text/javascript">
                                function myFunction2() {  
                                // Get the text field
                                var copyText2 = document.getElementById("myInput2");
                        
                                // Select the text field
                                copyText2.select();
                                copyText2.setSelectionRange(0, 99999); // For mobile devices
                        
                                // Copy the text inside the text field
                                navigator.clipboard.writeText(copyText2.value);
                        
                                // Alert the copied text
                                alert("Nomor Rekening Berhasil Tersalin :" + copyText2.value);
                                }
                            </script>
                        </div>

                        <div class="p-5"></div>

                        <!-- Rekening 2 -->
                        <div class="rekening2">
                            <input type="text" value="5771081631" id="myInput1" hidden class>
                        
                            <div class="text-center">
                                <h3 class="font-monospace">Nomor Rekening (Nur Fitri Yani nasuha): 5771081631</h3>
                                <button  class="btn btn-info" onclick="myFunction1()"><i class="fal fa-copy"></i> Copy Rekening</button>
                            </div>
                        </div>
                        <script type="text/javascript">
                            function myFunction1() {  
                            // Get the text field
                            var copyText1 = document.getElementById("myInput1");
                    
                            // Select the text field
                            copyText1.select();
                            copyText1.setSelectionRange(0, 99999); // For mobile devices
                    
                            // Copy the text inside the text field
                            navigator.clipboard.writeText(copyText1.value);
                    
                            // Alert the copied text
                            alert("Nomor Rekening Berhasil Tersalin :" + copyText1.value);
                            }
                        </script>
                                       
                        <br>
                        <a href="https://api.whatsapp.com/send?phone=6289506292618&text=Hai saya [nama] mau konfirmasi pengiriman amplop online sebesar [00.000] mohon di cek di mobile banking semoga berkah ya acaranya" class="btn btn-success">
                            <i class='bx bx-gift' ></i> Konfirmasi Amplop
                        </a>
                    </div>
                </div>
            </div>
            <!-- ============= Ucapan Dan Doa =============  -->
            <div class="container mt-5" style="margin-top: 100px;" id="ucapan">
                <div class="wrapper card" style="width: 100%;">
                  <div class="card-body">
                      
                    <div class="section-title text-center">
                      <h1 style="font-family: 'Arizonia', Sans-serif;">Kirim Doa dan Ucapan</h1>
                      <p>Tuliskan sesuatu ucapan berupa harapan ataupun doa untuk kedua mempelai.</p>
                    </div>
                    <hr>
                    <form id="form">
                        <div class="dbl-field">
                            <div class="field">
                                <input type="text" id="name" placeholder="Enter your name" required>
                                <i class='bx bxs-user'></i>
                            </div>
                            <div class="field">
                                <input type="text" id="asal" placeholder="Asal anda" autocomplete="on" required>
                                <i class='bx bx-location-plus'></i>
                            </div>
                        </div>
                        <div class="dbl-field">
                            <div class="field">
                            <select id="present" class="konfirmasi" required>
                                <option value="">-- Kehadiran --</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                            <i class='bx bx-walk'></i>
                            </div>
                        </div>
                    
                        <div class="message">
                            <textarea id="msg" placeholder="Enter your message" required></textarea>
                            <i class='bx bx-message-alt-detail'></i>
                        </div>
                        <center>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success mt-1" id="btn" required> Send </button>

                                    </div>
                                </div>

                                <div class="col">
                                    <div class="d-grid gap-2">
                                    <button type="reset" class="btn btn-danger m-1">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </form>

                    <hr>
                    <h3 class="mb-3" style="font-family: 'Arizonia', Sans-serif;">Doa dan Ucapan :</h3>
                    <div class="content" id="content">
                        
                    </div>
                  </div>
                </div>
            </div>
              
              <!-- Footer 1 -->
            <footer class="footer mt-5" id="end" data-aos="fade-up">
                <div class="container">
                <div class="row">
                    <div class="footer-content">
                    <p>M.Ridwan & N.Fitri <br><span style="font-size: 28px;">Thank You</span></p>
                    </div>
                </div>
                </div>
            </footer>
        </main>
        



        <div id="preload"></div>
          
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="assets/js/countdown.js"></script>
          <!-- Audio -->
        <script>
            const soundCloud = document.querySelector('.sound-cloud');
            const off = document.querySelector('#off');
            const on = document.querySelector('#on');
            const myAudio = document.querySelector('#myAudio');

            off.addEventListener('click', () => soundTrack('off'));
            on.addEventListener('click', () => soundTrack('on'));

            const soundTrack = (soundState) => {
                if(soundState === 'off'){
                    on.style.display = 'block';
                    off.style.display = 'none';
                    soundCloud.style.color = "#08fdd8";
                    myAudio.play();
                }
                else if(soundState === 'on'){
                    on.style.display = 'none';
                    off.style.display = 'block';
                    soundCloud.style.color = "#f50057";
                    myAudio.pause();
                }
            }

            // Play music functionality

            const btnBars = document.querySelector('.bars');
            const btnTimes = document.querySelector('.times');
            const SideNav = document.querySelector('.aside');


            btnBars.addEventListener('click', () => myFunc('open'));
            btnTimes.addEventListener('click', () => myFunc('close'));

            const myFunc = (navCondition) => {
                if(navCondition === 'open'){
                    SideNav.classList.add('show-nav');
                    btnTimes.style.display = "block";
                    btnBars.style.display = "none";
                }
                else if(navCondition === 'close'){
                        SideNav.classList.remove('show-nav');
                        btnTimes.style.display = "none";
                        btnBars.style.display = "block";
                }
            }


        </script>

        <script>
        function myFunction() {
            document.getElementById("panel").style.display = "block";
        }
        </script>        

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
                $(document).ready(function(){
                    function loadData(){
                        $.ajax({
                            url: 'select-data.php',
                            type: 'POST',
                            success: function(data){
                                $("#content").html(data);
                        }
                    });
                }

                loadData();

                    $("#btn").on("click", function(e){
                        e.preventDefault();
                        var name = $("#name").val();
                        var msg = $("#msg").val();
                        var asal = $("#asal").val();
                        var present = $("#present").val();

                        // Validasi form sebelum mengirim data ke server
                        if (name == "" || msg == "" || asal == "" || present == "") {
                            alert("Mohon lengkapi semua kolom");
                            return false;
                        }

                        $.ajax({
                            url: 'insert-data.php',
                            type: 'POST',
                            data: {name: name, msg: msg, asal: asal, present: present},
                            success: function(data){
                                if (data == 1) {
                                    loadData();
                                    alert('Doa dan Ucapan anda berhasil dikirim 🙏');
                                    $("#form").trigger("reset");
                                }
                                else {
                                    alert("Gagal Terkirim");
                                }
                            }
                        });
                    });
                });

                $(document).ready(function(){
                        load_data();
                        function load_data(page){
                            $.ajax({
                                url:"select-data.php",
                                method:"POST",
                                data:{page:page},
                                success:function(data){
                                    $('#content').html(data);
                                }
                            })
                        }
                        $(document).on('click', '.halaman', function(){
                            var page = $(this).attr("id");
                            load_data(page);
                        });
                });
        </script>
    </body>
</html>