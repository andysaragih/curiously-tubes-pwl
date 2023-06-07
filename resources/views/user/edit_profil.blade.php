<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curiously - Edit Profile</title>

  <!-- Required meta tags -->

  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{asset('img/logokecil.png')}}" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style2.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand warna" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" width="80vw" alt=""
          srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container-fluid" style="margin-top: 220px">
    <div class="row">
      <!-- CARD KIRI-->
      <!-- CARD KIRI-->
      <!-- CARD KIRI-->
      <div class="col-9">

        <div class="container my-5 d-flex align-items-center justify-content-center" style="letter-spacing: 1.1px;">
          <div class="card"
            style="width: 700px; min-height: 200px; margin-top: -97px; margin-right: -97px; border-right: transparent; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
            <div class="card-body" style="border-radius: 20px; object-fit: cover;">

              <!-- form preferensi -->
              <div class="d-flex align-items-center justify-content-start"
                style="padding-left: 10px; padding-right: 10px; margin-bottom: 21px;">
                <form action="{{route('update.profile', ['user' => $user->id])}}" method="POST"
                  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <table style="text-align: left;">
                    <tr>
                      <h5 style="text-align: left;">Edit profil | <a href="{{route('profile.edit')}}">Ingin mengubah
                          password dan
                          email?</a>
                      </h5>
                      <div class="d-flex align-items-center justify-content-start"
                        style="border-bottom: 2px solid #e0f1ff; margin-bottom: 15px; width: 650px;"></div>
                    </tr>

                    <tr>
                      <td>
                        <h6 class="d-flex align-items-center justify-content-start"
                          style="margin-bottom: 10px; padding: 5px; width: 650px; background-color: #e0f1ff;">
                          <span>Preferensi</span>
                        </h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        Perubahan data dasar
                        <div class="d-flex align-items-center justify-content-start"
                          style="padding-left: 10px; padding-right: 10px; padding-bottom: 8px; border-bottom: 2px solid #e0f1ff; margin-bottom: 10px; width: 650px;">
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <label for="username" style="margin-bottom: 10px;">Username</label><br>
                        <input type="text" name="username" id="username" value="{{$user->username}}">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <select name="gender" id="pilih" style="width: 175px;">
                          <option>Pilih gender</option>
                          <option value="Pria" @if ($user->gender == "Pria") selected @endif>Pria
                          </option>
                          <option value="Wanita" @if ($user->gender == "Wanita") selected @endif>Wanita</option>
                        </select>
                    </tr>

                    <tr>
                      <td>
                        <select name="jenjang" id="pilih" style="width: 175px;">
                          <option>Pilih tingkat pendidikan</option>
                          <option value="Sekolah Menengah Atas" @if ($user->jenjang == "Sekolah Menengah Atas") selected
                            @endif>Sekolah
                            Menengah Atas
                          </option>
                          <option value="Sekolah Menengah Pertama" @if ($user->jenjang == "Sekolah Menengah Pertama")
                            selected
                            @endif>Sekolah
                            Menengah Pertama</option>
                          <option value="Sekolah Dasar" @if ($user->jenjang == "Sekolah Dasar") selected
                            @endif>Sekolah
                            Dasar</option>
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <label for="aboutme" style="margin-bottom: 21px;">About me</label><br>
                        <textarea name="aboutme" id="" cols="30" rows="10">{{$user->aboutme}}</textarea>
                    </tr>

                  </table>
              </div>

              <!-- form perubahan gambar profil -->
              <div class="d-flex align-items-center justify-content-start"
                style="padding-left: 10px; padding-right: 10px;">
                <table style="text-align: left;">
                  <tr>
                    <td style="text-align: left;">
                      <h6 class="d-flex align-items-center justify-content-start"
                        style="margin-bottom: 10px; padding: 5px; width: 650px; background-color: #e0f1ff;">
                        <span>Gambar profil</span>
                      </h6>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      Perubahan gambar profil
                      <div class="d-flex align-items-center justify-content-start"
                        style="padding-left: 10px; padding-right: 10px; padding-bottom: 8px; border-bottom: 2px solid #e0f1ff; margin-bottom: 10px; width: 650px;">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div
                        style="margin-bottom: 10px; background-color: #FCF8E3; padding: 20px; display: inline-block;">
                        <i class="fa-solid fa-circle-exclamation" style="color: #000000;"></i> Gambar profil bisa
                        berupa file jpeg/gif/png <br>Gambar profil harus lebih kecil dari 5 megabyte
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label for="gambar" style="max-width: 185px;">Pilih profil gambar untuk diunggah</label>
                      <div style="margin-top: -55px; margin-left: 190px; margin-bottom: 21px;">
                        <input type="file" id="gambar" name="photo_profil" value="{{$user->photo_profil}}"">
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                    <button type=" submit" style="margin-left: 295px;" class="tambah2">Ubah</button>
                    </td>
                  </tr>
                </table>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- CARD KANAN -->
      <!-- CARD KANAN -->
      <!-- CARD KANAN -->
      <div class="col-3">
        <div class="card"
          style="width: 290px; min-height: 887px; margin-left: -188px; border-left: transparent; border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
          <div class="d-flex align-items-center" style="padding: 20px; background-color: #FCF8E3;;">
            <a href="profil.html">
              <img src="{{asset('img/'.$user->photo_profil)}}" style=" object-fit: cover; width: 80px; height: 80px;">
            </a>
            <div class="text ms-3" style="color: #333333;">
              Haloo <b> {{$user->username}} </b><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('user.footer')


  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  @if (session('status'))
  <script>
    swal({
          title: 'Berhasil',
          text: '{{ session('status') }}',
          icon: 'success',
          timer: 3000,
          button: false
      });
  </script>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>