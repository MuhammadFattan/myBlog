<!doctype html>
<html lang="id">
    <head>
        <title>myBlog</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link
            rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />

<<<<<<< HEAD:index.html
        <link rel="stylesheet" href="style.css">
=======
        <style>
            section {
                padding: 60px 0;
            
            }
        </style>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #181818;
                color: #fff;
                margin: 0;
                padding: 0;
            }

            .comment-section {
                width: 60%;
                margin: 20px auto;
                background-color: #242424;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .comment-form {
                margin-bottom: 20px;
            }

            .comment-form h2 {
                margin-bottom: 10px;
            }

            .comment-form input,
            .comment-form textarea {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border-radius: 5px;
                border: 1px solid #ccc;
                background-color: #333;
                color: #fff;
            }

            .comment-form button {
                padding: 10px 20px;
                border: none;
                background-color: #ff4500;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
            }

            .comment-form button:hover {
                background-color: #ff6347;
            }

            .comments h2 {
                margin-bottom: 10px;
            }

            .comment {
                border-bottom: 1px solid #444;
                margin-bottom: 15px;
                padding-bottom: 10px;
            }

            .comment h3 {
                margin: 0;
                font-size: 1.2em;
                color: #ff8c00;
            }

            .comment p {
                margin: 5px 0;
            }

            .comment small {
                color: #aaa;
                font-size: 0.9em;
            }

        </style>

>>>>>>> a2061e6c3db663fb52bb2f708878773a2e24f672:index.php
    </head>

    <body class="bg-dark">
        <!--header start-->
        <header>
            <nav class="navbar navbar-expand-md navbar-dark m-3 p-3 shadow">
                <div class="container-xxl">
                    <a href="#intro" class="navbar-brand">
                        <span class="fw-bold text-secondary">
                            myBlog<i class="bi bi-person-fill"></i>
                        </span>
                    </a>

                    <!-- toggle button for mobile nav -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigaton">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#intro">Main Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#biodata">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallery.html">May U Need</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--header end-->

        <!--content start-->
        <main>
            <!-- intro start -->
            <section id="intro">
                <div class="container-lg bg-dark">
                    <div class="row justify-content-center align-items-center bg-dark">
                        <div class="col-md-5 text-center text-md-start bg-dark">
                            <h1>
                                <div class="display-2 text-white">Welcome To</div>
                                <div class="display-5 text-white">myBlog</div>
                            </h1>
                            <p class="lead my-4 text-white">"Memang aku tidak terlahir dari lingkungan Programmer, <br>tapi aku yakin bahwa aku adalah Programmer pertama dilingkunganku "</p>
                            <p class="lead my-4 text-white">Halo man-teman. Berhubung gua lagi belajar bikin web,<br>jadinya gua iseng-iseng bikin blog pribadi.
                                <br>Di web ini tempat gua iseng-iseng belajar, jadinya gak ada yang menarik</p>
                        </div>
                        <div class="col-md-5 text-center d-md-block bg-dark">
                            <img class="img-fluid" src="myPhoto/myPhoto01.jpg" alt="myPhoto01" width="400" height="400">
                        </div>
                    </div>
                </div>
            </section>
            <!-- intro end -->

            <!--  about me start-->
            <section id="biodata">
                <div class="container-md">
                    <div class="text-center text-white mt-5">
                        <h2><i class="bi bi-stars"></i>About Me</h2>
                        <p class="lead">Everythings about me is here</p>
                        <img src="myPhoto/Shiroko-peace.jpg" class="rounded" alt="shiroko_peace" width="150" height="150">
                    </div>
                    <div class="introduction">
                        <div class="container-lg bg-dark display-6">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Nama Asli</h4>
                                    <i class="lead my-4">G: Loh bang, bukannya nama asli lu Muhammad Fattan doang?</i>
                                    <p class="lead my-4">Kalo di Facebook mungkin nama gua cuma Muhammad Fattan, tapi nama asli gua lebih panjang dari itu. Nama asli gua Muhammad Fattan Attaur Rahman. Kalo di tanya "gak capek apa pas ujian?" Pake nanya....</p>
                                </div>
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Tempat Tinggal</h4>
                                    <p class="lead my-4">Gua warga plat nomor BG, cari sendiri dimana itu</p>
                                </div>
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Tanggal Lahir</h4>
                                    <p class="lead my-4">Hari ulang tahun gua 22 September. Jangan lupa hadiahnya</p>
                                </div>
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Skills</h4>
                                    <p class="lead my-4">Saat ini, gua lagi ngasah kemampuan ngodingku. Sejauh ini gua udah mulai bisa di bahasa HTML makanya gua bisa bikin web ini, untuk CSS gua masih pemula dan JS gua gak ngerti sama sekali. Terus gua juga ada niatan buat ngebikin game, jadinya gua belajar make Unity</p>
                                </div>
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Hobi</h4>
                                    <p class="lead my-4">Woo jelas ngegame. Tapi terkadang juga belajar, belajar tentang game ama ngoding palingan</p>
                                </div>
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Cita-cita</h4>
                                    <p class="lead my-4">Gweh pingin jadi Game Dev, tapi sayangnya gua gak masuk Teknik Informatika, malah masuk Sistem informasi. Tapi gak apa, yang penting masih bisa belajar ngoding</p>
                                </div>
                                <div class="col-lg-8 col-md-5 text-center text-white mt-3 rounded border">
                                    <h4 class="fw-bold">Harapan kedepan</h4>
                                    <p class="lead my-4">Semoga gua bisa jadi Game Dev, jadinya bisa ngebanggain orang tua. Amiin....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about me end -->
            <p class="text-white text-center mb-5">Oke sekian dulu untuk Blog kegabutan gua. Jujur gua gak tau mau bikin apa lagi, terimakasih dah mau mampir<i class="bi bi-stars"></i></p>
        </main>
        <!--Content end-->

        <!-- comment section start -->
<<<<<<< HEAD:index.html
        <div class="comment-section">
            <!-- Form untuk komentar -->
            <form action="submit_comment.php" method="POST" class="comment-form">
                <h2>Tinggalkan komentar</h2>
                <p>Gak perlu login, ketik aja</p>
                <input type="text" name="username" placeholder="Tulis namamu" required>
                <textarea name="comment" placeholder="Tulis komentarmu disini..." required></textarea>
                <button type="submit">Kirim</button>
                tesklcslkdlaksj
            </form>

            <!-- Daftar komentar -->
            <div class="comments">
                <h2>Komentar</h2>
            <hr>
                <?php include 'fetch_comments.php'; ?>
            </div>
        </div>] 
=======
        <!-- Form untuk komentar -->
        <form action="submit_comment.php" method="post" class="comment-form">
            <h2>Tinggalkan komentar</h2>
            <p>Tak perlu login, cukup ketik aja</p>
            <input type="text" name="username" id="username" placeholder="Namamu" required><br><br>
            <textarea name="comment" id="comment" placeholder="Ketik komentarmu di sini..." required></textarea><br><br>
            <button type="submit">Kirim</button>
        </form>

        <!-- Daftar komentar -->
        <div class="comments">
            <h2>komentar</h2>
            <?php in?>
        </div>
>>>>>>> a2061e6c3db663fb52bb2f708878773a2e24f672:index.php

        <!--footer start-->
        <footer>
            <div class="container-fluid">   
                <div class="row justify-content-center align-items-center bg-black pt-4">
                    <div class="col-md-5 text-start text-md-start">
                        <h6 class="text-white mb-4">Be close with me</h6>
                        <button class="btn btn-lg btn-black">
                            <a href="https://www.facebook.com/search/top/?q=Muhammad%20Fattan" target="_blank" title="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </button>
                        <button class="btn btn-lg btn-black">
                            <a href="https://www.instagram.com/fxttanar2209_/" target="_blank" title="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </button>
                        <button class="btn btn-lg btn-black">
                            <a href="mailto:fattanar84@email.com" target="_blank" title="Email">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </button>
                        <div class="text-center mt-4">
                            <p class="text-muted">Created by Muhammad Fattan</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!-- back to top -->
        <div class="position-fixed bottom-0 end-0 p-3">
            <button class="btn btn-lg btn-dark rounded-circle border border-white">
                <a href="#" class="text-white">
                <i class="bi bi-arrow-up"></i>
                </a>
            </button>
        </div>

        <!-- JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <!-- Last word -->
        <!-- EN: You can use this web as a template with the condition that do not delete the footer section -->
        <!-- ID: Kamu dapat menggunakan web ini sebagai template dengan syarat jangan menghapus bagian footer -->

    </body>
</html>