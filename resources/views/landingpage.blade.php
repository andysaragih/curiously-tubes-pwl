<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curiously - If you're curious then ask</title>

  <!-- Required meta tags -->

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{asset('img/logokecil.png')}}" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/landingpage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand warna"><img src="{{asset('img/logo.png')}}" width="100vw" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @if(Route::has('login'))
          <li class="nav-item">
            @auth
            <a class="nav-link login" href="{{ url('/home')}}" style="color: #F59A35">{{auth()->user()->name}}</a>
            @else
            <a class="nav-link login" href="{{ route('login')}}" style="color: #F59A35">Login</a>
            @endauth
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <div class="clearfix">
    <div class="row mx-auto">
      <div class="col-md-6 offset-md-3">
        <img src="image/2.png" class="col-md-6 float-md-end mb-3 ms-md-3" style="width: 400px;">
        <h1 class="clearfix_top">
          Curiously will answer questions you want to ask
          </span>
        </h1>
      </div>
    </div>
  </div>

  <div class="container d-flex align-items-center justify-content-center">
    <div class="card" style="max-width: 1450; width: 100%; border-radius: 50px; margin-top: 40px;">
      <div class="d-flex align-items-center justify-content-center text-center">
        <div class="card" style="border: transparent; margin-top: 35px;">
          <h1 class="mt-4"><i class="bi bi-globe2" style="color: #059DA2;"></i></h1>
          <div class="card-body" style="margin-bottom: 50px;">
            <h1 class="card-title" style="margin-top: -15px; font-size: 50px; font-family: 'font';"> <span
                style="color: #059DA2">How We </span> Are Works</h1>
            <h5>Ask many question with the people around the world</h5>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <img src="image/virtual.jpeg" class="img-fluid rounded-start rounded-end" alt="..." width="800px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3>ONE CLICK</h3>
              <p style="margin-bottom: 55px; letter-spacing: 1.1px; font-size: 16px !important;">Berikan pertanyaan yang
                Anda miliki, tidak peduli seberapa sederhana atau rumitnya pertanyaan-pertanyaan tersebut. Setelah Anda
                mengetikkan semua pertanyaan yang ingin Anda tanyakan, silakan tekan tombol 'Kirim. Kemudian, Curiously
                akan memberikan jawaban yang relevan untuk setiap pertanyaan Anda hanya dengan sekali klik. Jadi, tunggu
                apa lagi? Silakan ajukan semua pertanyaan Anda!</p>
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <img src="image/cal21.png" class="img-fluid rounded-start rounded-end" alt="..." width="800px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3>Ask anytime</h3>
              <p style="margin-bottom: 55px; letter-spacing: 1.1px; font-size: 16px !important;">Tak perlu khawatir,
                Curiously selalu siap untuk menjawab setiap pertanyaan yang Anda ajukan, tak peduli kapan dan di mana
                Anda
                berada. Curiously memiliki pengguna yang tersebar di seluruh penjuru dunia. Tak peduli apakah Anda
                berada
                di waktu pagi, siang, malam, atau bahkan di tengah malam, akan selalu ada pengguna yang akan menjawab
                pertanyaan Anda</p>
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <img src="image/tutor.gif" class="img-fluid rounded-start rounded-end" alt="..." width="800px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3>Answer The Question</h3>
              <p style="margin-bottom: 55px; letter-spacing: 1.1px; font-size: 16px !important;">Sebagai pengguna
                Curiously, Anda memiliki peran penting sebagai penjawab pertanyaan pengguna lain. Anda dapat
                memanfaatkan
                pengetahuan Anda dalam bidang tertentu untuk memberikan jawaban yang informatif dan membantu. Dengan
                berbagi pengetahuan Anda, Anda turut berkontribusi dalam memperkaya komunitas Curiously dan membantu
                pengguna lain untuk memperoleh pemahaman yang lebih baik.

                Jadi, mari berperan aktif dalam komunitas Curiously dengan menjawab pertanyaan dari pengguna lain sesuai
                dengan keahlian dan pengetahuan yang Anda miliki. Bersama-sama, kita dapat membangun lingkungan saling
                membantu di mana pengguna dapat saling memberikan bantuan dan dukungan dalam pencarian informasi.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container d-flex align-items-center justify-content-center">
    <div class="card"
      style="max-width: 1450px; width: 100%; border-radius: 50px; margin-top: 80px; margin-bottom: 80px;">
      <div class="row g-0">
        <div class="col-md-6 d-flex align-items-center">
          <div class="card-body text-center">
            <h1>Upgrade Your Level Experience</h1>
            <p style="font-size: 18px !important; letter-spacing: 1.1px;">Berkomunikasi dalam komunitas Curiously
              membuka
              pintu untuk belajar dari pengalaman dan perspektif beragam. Anda dapat memperoleh pemahaman yang lebih
              luas tentang berbagai topik dengan bertanya kepada pengguna lain yang ahli dalam bidang tertentu. Selain
              itu, Anda juga dapat membantu orang lain dengan menjawab pertanyaan mereka berdasarkan pengetahuan yang
              Anda miliki. Melalui interaksi ini, Anda bisa merasakan kepuasan dalam berbagi pengetahuan dan memperluas
              jaringan sosial Anda.</p>
          </div>
        </div>
        <div class="col-md-6">
          <img src="image/joinus.gif" class="img-fluid" alt="..."
            style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
        </div>
      </div>
    </div>
  </div>

  @include('user.footer')

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>