<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
<div class = "container py-5">
  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">

    <div class=" carousel-inner">
      <div class="carousel-item active c-item">
        <img src="home/images/ppid.jpg" class="d-block mx-auto c-img" alt="Slide 1">
      </div>
      <div class="carousel-item c-item">
        <img src="home/images/Gedung_Sate.png" class="d-block mx-auto c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-4">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="container mt-2 p-8">
    <!-- First Row with 2 Cards -->
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3 px-4 py-4">
        <a href="{{url('form_permohonan_informasi_publik')}} ">
            <div class="card text-center">
                <div  class="card-body rounded shadow-lg">
                    <img src="home/images/icon 3.png" alt="Form Icon" class="card-img-top mb-3">
                    <a  class="card-title">Form Permohonan Informasi Publik</a>
                </div>
            
            </div>
        </a>
        </div>
        </a>
        <div class="col-md-3 mb-3 px-4 py-4">
            <div class="card text-center">
                <div class="card-body rounded shadow-lg">
                    <img src="home/images/icon 2.png" alt="Form Icon" class="card-img-top mb-3">
                    <a class="card-title ">Form Pengajuan Keberatan</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Second Row with 4 Cards -->
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3 px-4">
            <div class="card text-center">
                <div class="card-body rounded shadow-lg">
                    <img src="home/images/icon 5.png" alt="Form Icon" class="card-img-top mb-3">
                    <a class="card-title">Tata Cara Memperoleh Informasi</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 px-4">
            <div class="card text-center">
                <div class="card-body rounded shadow-lg">
                    <img src="home/images/icon 4.png" alt="Form Icon" class="card-img-top mb-3">
                    <a class="card-title">Daftar Informasi Publik</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 px-4">
            <div class="card text-center">
                <div class="card-body rounded shadow-lg">
                    <img src="home/images/icon 6.png" alt="Form Icon" class="card-img-top mb-3">
                    <a class="card-title ">Cek Status Permohonan Informasi Publik</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 px-4">
            <div class="card text-center">
                <div class="card-body rounded shadow-lg">
                    <img src="home/images/icon 1.png" alt="Form Icon" class="card-img-top mb-3">
                    <a class="card-title">Cek Status Pengajuan Keberatan</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
