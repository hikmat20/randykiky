<?php
require_once 'models/timesince.php';
require_once 'models/greetings.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Undangan</title>
    <link href="https://nikahan.megazainal.online/assets/favicon.png" rel="icon">
    <link href="https://nikahan.megazainal.online/assets/favicon.png" rel="apple-touch-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta property="og:title" content="The Wedding of Mega & Zainal" />
    <meta property="og:image" content="https://nikahan.megazainal.online/assets/thumbnail.jpg" />
    <meta property="og:url" content="https://nikahan.megazainal.online/" />
    <meta property=" og:site_name" content="Penrnikahan Mega & Zainal" />
    <meta property="og:description" content="06 November 2022 - The Wedding of Mega & Zainal" />
    <link rel="shortcut icon" href="https://nikahan.megazainal.online/assets/thumbnail.jpg" type="image/x-icon" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/themes/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/lib/bootstraps-5/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/lib/aos/aos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


</head>

<body class="position-relative overflow-hidden">
    <audio id="myAudio" loop="true" autoplay="true">
        <source src="assets/media/song-new.mp3" type="audio/ogg">
        <source src="assets/media/song-new.mp3" type="audio/mpeg">
    </audio>
    <div class="wrapper-container position-relative">
        <button onclick="topFunction()" id="myBtn" class="shadow" title="Go to top">
            <span class="material-icons">
                arrow_upward
            </span>
        </button>
        <button onclick="togglePlay()" id="btn-music" class="shadow" title="Play Song">
            <span class="material-icons">
                music_note
            </span>
        </button>
        <!-- COVER -->
        <div class="content">

            <section class="cover pb-5">
                <div class="text-content text-center absolute mt-5" style="z-index:9999 ;">
                    <h3 class="title-text-1 fw- text-white text-shadow-sm" data-aos="zoom-in">The Wedding</h3>
                    <h1 class="text-white font-size-36 text-shadow-md" data-aos="zoom-in" data-aos-delay="400">Mega &
                        Zainal</h1>
                    <p class="text-white text-shadow-sm py-3" data-aos="zoom-in-up" data-aos-delay="600">Minggu, 06
                        November 2022</p>
                </div>

                <div class="text-content text-center absolute bottom-text" style="z-index: 99999;">
                    <div class="guest-detail text-white" data-aos="fade-in" data-aos-delay="800">
                        <span class="text-shadow-sm">Kepada Yth,</span><br>
                        <span class="text-shadow-sm">Bapak/Ibu/Saudara/i :</span>
                        <h3 class="my-1 fw-bold h3 text-shadow-md">
                            <u>Tamu Undangan</u>
                        </h3>
                        <span class="text-shadow-sm">Di tempat</span>
                    </div>
                    <button type="button" onclick="playAudio()" class="btn btn-theme-primary mt-3" data-aos="fade-up" data-aos-delay="1000">
                        <i class='bx bxs-book-heart'></i> Buka Undangan
                    </button>
                </div>

                <div class="section-divider-3"></div>
            </section>


            <section class="first-slide pb-5">
                <div class="text-content text-center text-invitation absolute mt-5" style="z-index:1 ;">
                    <h3 class="title-text-1 text-white text-shadow-sm" data-aos="zoom-in">The Wedding</h3>
                    <h1 class="text-white font-size-36 text-shadow-md" data-aos="zoom-in" data-aos-delay="400">Mega &
                        Zainal</h1>
                    <p class="text-white text-shadow-sm" data-aos="zoom-in-up" data-aos-delay="600">Minggu, 06
                        November 2022</p>
                </div>

                <div class="slide-area">
                    <div class="slide-photo">
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/silde-cover/Photo-1.jpeg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/silde-cover/Photo-2.jpeg');">
                            </div>
                        </div>
                        <div class="single-photo">
                            <div class="photo" style="background-image:url('assets/images/silde-cover/Photo-3.jpeg');">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-divider-3"></div>
            </section>

            <!-- Couple -->
            <section class="bg-theme-primary overflow-hidden position-relative pt-5">
                <div id="couple" class="text-center pt-2 pb-4">
                    <!-- <h2 class="text-white text-shadow-md mb-4">The Beloved</h2> -->
                    <h2 class="text-white mb-3 font-size-32" data-aos="zoom-in" data-aos-delay="">Groom &
                        Bride
                    </h2>
                    <p class="text-white fw-light h6 text-shadow-md px-3" data-aos="fade-in">
                        بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم
                        <br>
                        <br>
                        <span class="fw-bold d-block mb-2"> Assalamu'alaikum Wr. Wb</span>
                        Dengan memohon Ridho dan Rahmat Allah SWT.
                        Kami bermaksud akan menyelenggarakan acara pernikahan.
                    </p>

                    <div class="photo-groom my-4" data-aos="fade-left">
                        <img src="assets/images/couple/bride.png" alt="" class="img-fluid">
                    </div>
                    <div class="text-content">
                        <h1 class="title-text-2 text-shadow-md text-white mb-3" data-aos="fade-right" data-aos-delay="800">
                            Mega Oktianingsih
                        </h1>
                        <hr class="w-75 text-center m-auto border border-3 border-start-0 border-end-0 border-white border-bottom-0">
                        <h5 class="mt-3 text-shadow-md text-white" data-aos="zoom-in">Putri Bungsu dari</h5>
                        <h6 class="text-shadow-md text-white" data-aos="zoom-in">Bpk. Suparno (Alm) & Ibu Irah</h6>
                    </div>

                </div>

                <div class="with text-center">
                    <h4 class="title-text-1 text-white font-size-48" data-aos="zoom-out">&</h4>
                </div>

                <div class="text-content text-center py-3" style="z-index:9999 ;">
                    <div class="photo-groom my-4" data-aos="fade-right">
                        <img src="assets/images/couple/groom.png" alt="" class="img-fluid">
                    </div>

                    <div class="text-content">
                        <h1 class="title-text-2 text-shadow-md text-white mb-3" data-aos="fade-left">
                            <span>Zainal Arifin</span>
                        </h1>
                        <hr class="w-75 text-center m-auto border border-3 border-start-0 border-end-0 border-white border-bottom-0">
                        <h5 class="mt-3 text-shadow-md text-white" data-aos="zoom-in">Putra Pertama</h5>
                        <h6 class="text-shadow-md text-white" data-aos="zoom-in">Bpk. Sugihardi (Alm) & Ibu Robiah</h6>
                    </div>
                </div>
            </section>
            <section id="countdown" style="background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: contain;">
                <div class="text-content text-center pt-5 position-relative" style="z-index:99 ;">
                    <!-- <div class="section-divider-1"></div> -->
                    <div class="section-divider-2"></div>
                    <h2 class="mb-3 pt-5 pb-3 text-theme-primary font-size-32" data-aos="zoom-in">Countdown</h3>
                        <div class="countdown d-flex justify-content-evenly gap-3 px-3 py-">
                            <div class="countdown-item shadow-lg py-1 px-3 bg-theme-primary text-white" data-aos="zoom-in" data-aos-delay="400">
                                <div class="d-flex justify-content-center flex-column">
                                    <span id="days" class="h1 m-0 slim_summer">00</span>
                                    <small>Days</small>
                                </div>
                            </div>
                            <div class="countdown-item shadow py-1 px-3 bg-theme-primary text-white" data-aos="zoom-in" data-aos-delay="800">
                                <div class="d-grid gap-0">
                                    <span id="hours" class="h1 m-0 slim_summer">00</span>
                                    <small>Hour</small>
                                </div>
                            </div>
                            <div class="countdown-item shadow py-1 px-3 bg-theme-primary text-white" data-aos="zoom-in" data-aos-delay="1200">
                                <div class="d-flex justify-content-center flex-column">
                                    <span id="minutes" class="h1 m-0 slim_summer">00</span>
                                    <small>Min</small>
                                </div>
                            </div>
                            <div class="countdown-item shadow py-1 px-3 bg-theme-primary text-white" data-aos="zoom-in" data-aos-delay="1400">
                                <div class="d-flex justify-content-center flex-column">
                                    <span id="seconds" class="h1 m-0 slim_summer">00</span>
                                    <small>Sec</small>
                                </div>
                            </div>
                        </div>

                        <div class="save-date py-5">
                            <button type="button" class="btn btn-sm btn-theme-primary fw-bold" data-aos="zoom-in" data-aos-delay="400">
                                <i class='bx bxs-calendar-heart'></i> Save the Date
                            </button>
                        </div>

                        <div class="text-content pb-4 px-2" data-aos="fade-in">
                            <p class="text-theme-primary fw-bold h6">
                                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan
                                untukmu
                                dari jenismu sendiri, agar
                                kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih
                                dan
                                sayang. Sungguh, pada yang
                                demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang
                                berpikir."<br>
                            </p>
                            <span class="mt-2 fw-bolder text-theme-primary">(QS. AR-Rum - 21)</>
                        </div>
                </div>
            </section>

            <!-- Event -->
            <section id="event" class="position-relative" style="background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: contain;">
                <div class="py-3 px-3 position-relative overflow-hidden">
                    <div class="card text-center shadow text-white bg-theme-primary py-3 border-0 mb-3" style="border-radius:1rem ;" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="">
                        <div class="card-body ">
                            <div class="text-center" data-aos="zoom-in" data-aos-delay="400">
                                <img src="assets/images/icon/genders.svg" alt="" width="50px" class="">
                            </div>
                            <h2 class="my-4 text-white mb-3 font-size-32" data-aos="fade-up">Akad</h4>
                                <h5 data-aos="fade-up">Minggu, 06 November
                                    2022</h5>
                                <h6 data-aos="fade-up">Pukul : 09:00 WIB s/d
                                    Selesai</h6>
                                <p class="text-divider my-2" data-aos="fade-up">
                                    <span class="material-icons md-24">
                                        room
                                    </span>
                                </p>

                                <h6 class="my-0" data-aos="fade-up">
                                    Kediaman Ibu Irah, Dusun 02 Kebon Dalem
                                    RT/RW. 003/004. Kel. Gumulung Lebak. Kec. Greged
                                </h6>
                                <!-- <a href="#" class="btn btn-sm fw-bold btn-light mt-4" data-aos="zoom-in">View Maps</a> -->
                        </div>
                    </div>

                    <div class="card text-center shadow text-white bg-theme-primary py-3 border-0" style="border-radius:1rem ;" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
                        <div class="card-body">
                            <div data-aos="zoom-in" data-aos-delay="800">
                                <img src="assets/images/icon/flowers.svg" alt="" width="50px" class="">
                            </div>
                            <h2 class="my-4 text-white mb-3 font-size-32" data-aos="fade-up">Resepsi</h4>
                                <h5 data-aos="fade-up">Minggu, 06 November
                                    2022</h5>
                                <h6 data-aos="fade-up">Pukul : 10:00 WIB s/d
                                    Selesai</h6>
                                <p class="text-divider my-2" data-aos="fade-up">
                                    <span class="material-icons md-24">
                                        room
                                    </span>
                                </p>
                                <h6 class="my-0" data-aos="fade-up">
                                    Kediaman Ibu Irah, Dusun 02 Kebon Dalem
                                    RT/RW. 003/004. Kel. Gumulung Lebak. Kec. Greged
                                </h6>
                                <!-- <a href="#" class="btn btn-sm btn-light fw-bold mt-4" data-aos="zoom-in">View Maps</a> -->
                        </div>
                    </div>
                </div>
            </section>

            <section id="mapss" class="pb-5" style="background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: cover;">
                <div class="px-3 pb-5">
                    <div class="card text-center shadow text-white bg-theme-primary border-0" style="border-radius:1rem ;" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800">
                        <div class="card-body">
                            <h2 class="my-4 text-white mb-3 font-size-32" data-aos="fade-up">Maps</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6037757248077!2d108.57280071477238!3d-6.817950695072401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa459ddc53f47c6cb!2zNsKwNDknMDQuNiJTIDEwOMKwMzQnMzAuMCJF!5e0!3m2!1sid!2sid!4v1661165779719!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
                            <a href="https://goo.gl/maps/rq7a6ftCuHS3tdk19" class="btn btn-sm fw-bold btn-light mt-4" data-aos="zoom-in">
                                <i class='bx bxs-map-alt mt-1'></i> Lihat Peta Lokasi
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="position-relative bg-theme-primary pt-3 pb-2">
                <div class="section-divider-1"></div>
                <h2 class="title-text-2 text-shadow-md text-center text-white mb-5 mt-5 font-size-32" data-aos="zoom-in">
                    Our Gallery
                </h2>
                <div class="slider  mt-4 px-3" data-aos="zoom-in">
                    <div class="slider-for overflow-hidden shadow-sm my-3 d-flex flex-row" style="border-radius: 1rem;">
                        <img src="assets/images/galleries/image1.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/image2.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/image3.jpg" alt="" class="img-fluid">
                        <img src="assets/images/galleries/image4.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="slider slider-nav d-flex justify-content-between overflow-hidden">
                    <img src="assets/images/galleries/image1.jpg" alt="" height="120px" class="img-fluid">
                    <img src="assets/images/galleries/image2.jpg" alt="" height="120px" class="img-fluid">
                    <img src="assets/images/galleries/image3.jpg" alt="" height="120px" class="img-fluid">
                    <img src="assets/images/galleries/image4.jpg" alt="" height="120px" class="img-fluid">
                </div>
            </section>


            <!-- Gift -->
            <section id="gift" class="position-relative pt-3" style="background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: cover;">
                <div class="section-divider-2"></div>
                <h2 class="text-theme-primary text-center mb-3 pt-5 font-size-32 my-5" data-aos="zoom-in" style="z-index: 999;">Online Gift
                </h2>
                <div class="text-center pb-5 border-0">
                    <h6 class="my-2 fw-bold text-theme-primary" data-aos="zoom-in">
                        Tanpa mengurangi rasa hormat, untuk melengkapi kebahagiaan pengantin, Anda dapat memberikan
                        tanda kasih dengan transfer
                        ke rekening berikut:
                    </h6>
                    <div class="gifts py-3 m-auto d-flex flex-column" data-aos="zoom-in">
                        <div class="card shadow-md m-auto border-0 shadow" style="min-width:200px;border-radius: 1rem;min-height: 100px;">
                            <div class="text-theme-primary text-center card-body">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png" width="80px" class="mb-3 img-fluid" alt="">
                                <!-- <h4 class="fw-bolder spacing-2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">BCA</h4> -->
                                <h5 class="fw-bold spacing-2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">3040929613</h5>
                                <p class="mb-0" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    MEGA OKTIANINGSIH
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gifts py-2 pb-5 m-auto d-flex flex-column" data-aos="zoom-in">
                        <div class="card shadow-md m-auto border-0 shadow" style="min-width:200px;border-radius: 1rem;min-height: 100px;">
                            <div class="text-theme-primary text-center card-body">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/2560px-Bank_Central_Asia.svg.png" width="80px" class="mb-3 img-fluid" alt="">
                                <h5 class="fw-bold spacing-2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">4140121873</h5>
                                <p class="mb-0" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                    ZAINAL ARIFIN
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gift -->
            <section id="whises" class="pt-4 pb-2 bg-theme-primary px-3 position-relative">
                <div class="section-divider-1"></div>
                <div class="text-white text-center">
                    <h2 class="text-white mb-3 mt-5 font-size-32" data-aos="zoom-in">Give A Wish</h2>
                    <p class="my-0" data-aos="fade-up">
                        Merupakan suatu kehormatan dan kebahagiaan bagi kami atas kehadiran Bapak/Ibu/Saudara/i untuk
                        memberikan doa restu
                        kepada kami.
                    </p>
                </div>

                <div class="card shadow-sm text-center border-0 my-4" style="border-radius: 1rem;background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: cover;" data-aos="zoom-in">
                    <div class="card-body fw-bold">
                        <form id="form-wish" class="text-start" data-aos="zoom-out" data-aos-delay="1000">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control fw-bold" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="greeting" class="form-label">Your wishes</label>
                                <textarea name="greeting" id="greeting" class="form-control fw-bold" placeholder="Best wishes"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="present" class="form-label">Present</label>
                                <select name="present" id="present" class="form-select fw-bold">
                                    <option value="1" class="fw-bold">Hadir</option>
                                    <option value="2" class="fw-bold">Tidak Hadir</option>
                                    <option value="3" class="fw-bold">Semoga Hadir</option>
                                </select>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button type="button" id="send" class="btn btn-theme-primary text-center">
                                    <i id="icon-send" class='bx bxs-paper-plane'></i>
                                    Kirim
                                    <i id="loading" class='spinner-border spinner-border-sm d-none'></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow-sm fw-bold text-theme-primary mb-3" style="border-radius: 1rem; background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: cover;" data-aos="zoom-in">
                    <div class="card-body px-0 position-relative">
                        <div class="text-center mb-3 fw-bold text-theme-primary">
                            <label for="" class="fw-bold">Comments : <span id="total_comments"><?= count($getGreeting); ?></span></label>
                        </div>
                        <div class="d-flex justify-content-center fw-bold text-theme-primary">
                            <small class="badge bg-success mx-1 d-flex flex-column">
                                <span>Hadir</span>
                                <span class="my-2"><span id="total_confirm"><?= array_sum($dt_confirm); ?></span></span>
                            </small>

                            <small class="badge bg-danger mx-1 d-flex flex-column">
                                <span>Tidak Bisa Hadir</span>
                                <span class="my-2"><span id="total_unconfirm"><?= array_sum($dt_unconfirm); ?></span></span>
                            </small>

                            <small class="badge bg-warning mx-1 d-flex flex-column">
                                <span>Semoga Hadir</span>
                                <span class="my-2"><span id="total_tentative"><?= array_sum($dt_tentative); ?></span></span>
                            </small>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pb-2 bg-theme-primary position-relative load-whises">
                <div class="new-greeting"></div>
                <div class="whises" data-aos="fade-right">
                    <?php foreach ($getGreeting as $greeting) : ?>
                        <div class="px-3">
                            <div class="card shadow-sm text-theme-primary" style="border-radius: 1rem; background-image:url('assets/images/background.jpg');background-position: top center;background-repeat: repeat-y;background-size: cover;">
                                <div class="card-body position-relative">
                                    <div class="mb-3 px-1">
                                        <div class="mb-2 d-flex justify-content-between align-items-center">
                                            <span class="comments_name fw-bold"><?= $greeting['name']; ?></span>
                                            <span class="badge badge-sm font-size-10 text-sm <?= ($greeting['present'] == '1') ? 'bg-success' : (($greeting['present'] == '2') ? 'bg-danger' : 'bg-warning'); ?> comments_confirmations"><?= $confirm[$greeting['present']]; ?></span>
                                        </div>
                                        <p class=" text-theme-primary font-size-14 rounded-3">
                                            <?= $greeting['greeting']; ?>
                                            <small class="text-muted font-size-10 d-block mt-2"><i><?= time_since(strtotime($greeting['created_at'])); ?></i></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="bg-theme-primary pb-5 pt-3">

                <p class="text-divider my-2 text-white">
                    <span class="material-icons">
                        favorite
                    </span>
                </p>

                <h1 class="text-center text-white">Mega & Zainal</h1>
            </section>
            <div id="alertMsg" class="text-white text-center">
                <small>
                    You should check in on some of those fields below.
                </small>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="assets/themes/js/jquery-3.6.0.min.js"></script>
<script src="assets/lib/bootstraps-5/bootstrap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/lib/slick/slick.js"></script>
<script src="assets/lib/aos/aos.js"></script>
<script src="assets/themes/js/invitation.js"></script>
<script>
    function myplay() {

    }
</script>

</html>