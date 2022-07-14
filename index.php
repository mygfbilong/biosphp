<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BIOS | Home</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="style/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand pb-3" href="index.php">
        <img src="img/logonav.png" alt="Bios Logo" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="html/profil/visimisi.php">Visi dan Misi</a></li>
              <li><a class="dropdown-item text-white" href="html/profil/sejarah.php">Sejarah Singkat</a></li>
              <li><a class="dropdown-item text-white" href="html/profil/struktur.php">Struktur Organisasi</a></li>
              <li><a class="dropdown-item text-white" href="html/profil/prestasi.php">Prestasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"> Divisi </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item text-white" href="html/divisi/mulmed.php">Multimedia</a></li>
              <li><a class="dropdown-item text-white" href="html/divisi/pca.php">PCA</a></li>
              <li><a class="dropdown-item text-white" href="html/divisi/program.php">Program</a></li>
              <li><a class="dropdown-item text-white" href="html/divisi/wb.php">Web Design</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="html/galeri.php">Galeri</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Konten -->
  <section>
    <div class="container-md pt-3 pb-3">
      <div class="row justify-content-center" style="padding-top: 5rem;">
        <div class="col">
          <h2 class="text-dark" style="text-decoration: none; align-content: auto; padding-bottom: 1rem;"
            align="center">BRAINWARE OF
            SMANSA</h2>
          <center>
            <img src="img/bios.jpg" alt="BIOS" class="img-fluid" style="max-width: 200px;">
          </center>
        </div>
      </div>
    </div>
    <div class="container-md pb-5">
      <div class="row justify-content-center">
        <div class="col">
          <p class="text-dark" align=" justify">
            <b>Brainware of SMANSA</b> atau yang biasa disingkat BIOS adalah ekstrakulikuler yang berjalan di bidang
            teknologi. Mulai dari ilmu komputer seperti pemrograman, pengenalan hardware, mendesain dan membuat web,
            pembuatan animasi, poster digital sampai dengan fotografi. Dunia teknologi siswa dijembatani oleh
            ekstrakulikuler
            ini.
          </p>
          <p></p>
          <p class="text-dark" align="justify">
            Ekstrakulikuler ini diketuai oleh Daffa Firdaus (periode 2021-2022). Ekstrakulikuler ini bertempatkan di SMA
            Negeri 1 Subang tepatnya di gedung kelas 10 di sebelah kelas X MIPA 4. Ekstrakulikuler ini biasanya
            menjalani kegiatan setiap hari senin sepulang sekolah.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Konten -->

  <!-- Promosi -->
  <!-- Teks -->
  <div class="container-md pb-5">
    <div class="row justify-content-center">
      <div class="col">
        <h5 class="text-dark" align="center">CEK SOCIAL MEDIA KAMI YUK!!!</h5>
        <p class="text-dark" align="center">Kalian juga boleh nih nanya nanya seputar BIOS atau mau masuk BIOS via
          WhatsApp</p>
      </div>
    </div>
    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <div class="social">
      <div class="social__container">

        <div class="social__content">
          <a href="https://discord.gg/pxR3yYcj"><i class='bx-fw bx bxl-discord bx-md' social__icons></i></a>
        </div>
        <div class="social__content">
          <a href="https://youtu.be/Ovt0X3UysEk">
            <i class='bx-fw bx bxl-youtube bx-md' social__icons></i></a>
          </a>
        </div>
        <div class="social__content">
          <a href="https://instagram.com/bios.sman1sbg"><i class='bx-fw bx bxl-instagram bx-md' social__icons></i></a>
        </div>
      </div>
    </div>
    </section>
    <!-- Akhir Promosi -->

    <!-- Script Bootsrtap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <!-- Akhir Script Bootstrap -->
</body>

</html>