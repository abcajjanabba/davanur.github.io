<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Review Film</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  </head>
  <body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FlminAja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="login" tabindex="-1" aria-buttactive="true">Login</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<slides>
<style>
  #carouselExampleSlidesOnly {
    width: 100vw; /* Lebar penuh */
    max-width: 100%;
    aspect-ratio: 16/9; /* Menjaga rasio 16:9 */
    overflow: hidden;
  }

  .carousel-inner {
    width: 100%;
    height: 100%;
  }

  .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Agar gambar tidak terdistorsi */
  }

  /* Styling teks agar lebih besar dan di kiri */
  .carousel-caption {
    position: absolute;
    top: 50%; /* Posisikan teks di tengah secara vertikal */
    left: 5%; /* Geser teks ke kiri */
    transform: translateY(-50%);
    text-align: left; /* Rata kiri */
    color: white;
    text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.8); /* Bayangan agar teks terbaca */
    width: 40%; /* Batasi lebar teks agar tidak melebar ke tengah */
  }

  .carousel-caption h1 {
    font-size: 3rem; /* Ukuran besar */
    font-weight: bold;
  }

  .carousel-caption h3 {
    font-size: 1.8rem; /* Perbesar subjudul */
    font-weight: 300; /* Font lebih tipis */
  }
</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://media.themoviedb.org/t/p/w533_and_h300_bestv2/lgkPzcOSnTvjeMnuFzozRO5HHw1.jpg" class="d-block w-100" alt="poster1">
      <div class="carousel-caption">
        <h1>Despicable Me 4 (2024)</h1>
        <h3>Gru and Lucy and their girls—Margo, Edith and Agnes—welcome a new member to the Gru family, Gru Jr., who is intent on tormenting his dad. Gru also faces a new nemesis in Maxime Le Mal and his femme fatale girlfriend Valentina, forcing the family to go on the run.</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.themoviedb.org/t/p/w533_and_h300_bestv2/6U6FZkIXSNxZATQzjbwYpS3jDgI.jpg" class="d-block w-100" alt="poster2">
      <div class="carousel-caption">
        <h1>The Witcher: Sirens of the Deep (2025)</h1>
        <h3>Geralt of Rivia, a mutated monster hunter, is hired to investigate a series of attacks in a seaside village and finds himself drawn into a centuries-old conflict between humans and merpeople. He must count on friends — old and new — to solve the mystery before the hostilities between the two kingdoms escalate into an all-out war.</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.themoviedb.org/t/p/w533_and_h300_bestv2/AeK2MPOpYrOOgZNfFnfwp0L8tNn.jpg" class="d-block w-100" alt="poster3">
      <div class="carousel-caption">
        <h1>Spider-Man: No Way Home (2021)</h1>
        <h3>Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.</h3>
      </div>
    </div>
  </div>
</div>


</slides>
<card>
<style>
        .movie-card {
            background: #1c1c1c;
            color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            width: 100%;
            margin: 10px;
        }

        .movie-card:hover {
            transform: scale(1.05);
        }

        .movie-card img {
            width: 100%;
            border-radius: 12px 12px 0 0;
        }

        .movie-card-body {
            padding: 15px;
        }

        .movie-title {
            font-size: 18px;
            font-weight: bold;
        }

        .movie-rating {
            background: black;
            color: white;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 14px;
        }

        .movie-description {
            font-size: 14px;
            color: #b3b3b3;
        }

        .swiper-container {
            width: 100%;
        }

        .swiper-slide {
            flex-shrink: 0;
            width: calc(100% / 5);
        }

        @media (max-width: 992px) {
            .swiper-slide {
                width: calc(100% / 3);
            }
        }

        @media (max-width: 768px) {
            .swiper-slide {
                width: calc(100% / 2);
            }
        }

        @media (max-width: 576px) {
            .swiper-slide {
                width: 100%;
            }
        }
    </style>
<body class="bg-dark text-light">

<div class="container-fluid mt-5 px-0">
    <h2 class="text-light mb-4 text-center">Top Movies</h2>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Movie Cards -->
            <script>
                const movies = [
                    { title: "Interstellar (2014)", rating: "8.6", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg" },
                    { title: "The Dark Knight (2008)", rating: "9.0", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/qJ2tW6WMUDux911r6m7haRef0WH.jpg" },
                    { title: "Inception (2010)", rating: "8.8", img: "https://m.media-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg" },
                    { title: "Tenet (2020)", rating: "7.4", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/8UlWHLMpgZm9bx6QYh0NFoq67TZ.jpg" },
                    { title: "Oppenheimer (2023)", rating: "8.5", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg" },
                    { title: "Avengers: Endgame (2019)", rating: "8.4", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/or06FN3Dka5tukK1e9sl16pB3iy.jpg" },
                    { title: "Parasite (2019)", rating: "8.6", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/7IiTTgloJzvGI1TAYymCfbfl3vT.jpg" },
                    { title: "The Matrix (1999)", rating: "8.7", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/f89U3ADr1oiB1s9GkdPOEpXUk5H.jpg" },
                    { title: "Joker (2019)", rating: "8.5", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg" },
                    { title: "Dune: Part One (2021)", rating: "8.0", img: "https://media.themoviedb.org/t/p/w220_and_h330_face/d5NXSklXo0qyIYkgV94XAgMIckC.jpg" }
                ];

                document.write(movies.map(movie => `
                    <div class="swiper-slide">
                        <div class="movie-card">
                            <img src="${movie.img}" alt="${movie.title}">
                            <div class="movie-card-body">
                                <h5 class="movie-title">${movie.title}</h5>
                                <span class="movie-rating">⭐ ${movie.rating}</span>
                                <p class="movie-description mt-2">Amazing movie worth watching.</p>
                            </div>
                        </div>
                    </div>
                `).join(''));
            </script>
        </div>
    </div>
</div>

<!-- Bootstrap & Swiper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 15,
        loop: true,
        grabCursor: true,
        freeMode: true,
        centeredSlides: false,
    });
</script>
</card>
<daftar>
   <style>
    .card {
            margin: 10px;
            width: 18rem;
        }
        .card-img-top {
            width: 100%;
            height: auto;
        }
   </style>
   <div class="container">
        <h1 class="text-center my-4">Daftar Film</h1>
        <div class="row">
            <?php foreach ($films as $film): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $film['url_poster']; ?>" class="card-img-top" alt="<?php echo $film['judul']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $film['judul']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</daftar>







    <!-- Optional JavaScript; choose one of the two! -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>