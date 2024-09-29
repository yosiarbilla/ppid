<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Navbar with Dropdown</title>
   
<body>

<section class="navbar">
   <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
         <img class="logo" src="home/images/logo ppid.png" alt="logo">
         <a class="navbar-brand me-auto" href="#">PPID PROVINSI JAWA BARAT</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
               <img src="home/images/logo ppid.png" class="a-img" alt="logo ppid">
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <ul class="navbar-nav justify-content-center flex-grow-1 pe-5">
                  <li class="nav-item">
                     <a class="nav-link mx-lg-3" aria-current="page" href="#">Beranda</a>
                  </li>
                  <!-- Profil with Submenu -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mx-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                     </a>
                        <ul class="dropdown-menu dropdown-menu-profil" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">PPID Jabar</a></li>
                           <li><a class="dropdown-item" href="#">Pemprov Jabar</a></li>
                        </ul>
                  </li>
                  <!-- Informasi publik with Submenu -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mx-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informasi Publik
                     </a>
                        <ul class="dropdown-menu dropdown-menu-informasi" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Informasi Berkala</a></li>
                           <li><a class="dropdown-item" href="#">Informasi Serta Merta</a></li>
                           <li><a class="dropdown-item" href="#">Informasi Yang Wajib Tersedia Setiap Saat</a></li>
                           <li><a class="dropdown-item" href="#">Daftar Informasi Publik</a></li>
                           <li><a class="dropdown-item" href="#">Daftar Informasi Dikecualikan</a></li>
                        </ul>
                  </li>
                  <!-- Informasi Publik with Submenu -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mx-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Standar Layanan
                     </a>
                        <ul class="dropdown-menu dropdown-menu-standarlayanan" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Alur Layanan Informasi Publik</a></li>
                           <li><a class="dropdown-item" href="#">Tata Cara Permohonan Informasi</a></li>
                           <li><a class="dropdown-item" href="#">Form Permohonan Informasi Publik</a></li>
                           <li><a class="dropdown-item" href="#">Tata Cara Pengajuan Keberatan</a></li>
                           <li><a class="dropdown-item" href="#">Tata Cara Penyelesaian Sengketa Informasi</a></li>
                           <li><a class="dropdown-item" href="#">Tata Cara Pengaduan Penyalahgunaan Wewenang<br>atau Pelaporan Yang Dilakukan <br> oleh Pejabat Badan Publik</a></li>
                           <li><a class="dropdown-item" href="#">SOP PPID</a></li>
                           <li><a class="dropdown-item" href="#">Pedoman Umum Pelayanan Informasi Publik</a></li>
                           <li><a class="dropdown-item" href="#">Maklumat Pelayanan</a></li>
                           <li><a class="dropdown-item" href="#">Waktu dan Biaya Pelayanan</a></li>

                        </ul>
                  </li>
                  <!-- Laporan with Submenu -->
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mx-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laporan
                     </a>
                        <ul class="dropdown-menu dropdown-menu-laporan" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Laporan Pemprov Jabar</a></li>
                           <li><a class="dropdown-item" href="#">Laporan PPID Pemprov Jabar</a></li>
                        </ul>
                  </li>
                   <!-- Info with Submenu -->
                   <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mx-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Info
                     </a>
                        <ul class="dropdown-menu dropdown-menu-laporan" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Open Data Jabar</a></li>
                           <li><a class="dropdown-item" href="#">Galeri</a></li>
                           <li><a class="dropdown-item" href="#">Calendar Event</a></li>
                           <li><a class="dropdown-item" href="#">Kontak</a></li>
                        </ul>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle mx-lg-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Berita
                     </a>
                        <ul class="dropdown-menu dropdown-menu-laporan" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Berita Pemprov Jabar</a></li>
                           <li><a class="dropdown-item" href="#">Berita PPID</a></li>
                        </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link mx-lg-3" href="#">FAQ</a>
                  </li>
               </ul>
            </div>
         </div>
         @if (Route::has('login'))
         @auth
         <form method="POST" action="{{ route('logout') }}" class="inline">
                   @csrf
                  
             </form>
         @else
         
         @endauth
         @endif
      </div>
   </nav>
</section>

<!-- Add Bootstrap JS -->



</body>
</html>
