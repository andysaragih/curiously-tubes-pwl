<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curiously - Answer</title>
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

  <!-- wysiwyg -->
  <script src="{{asset('js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: "#myTextarea",
      plugins: "advlist autolink lists link image charmap preview",
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand warna" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" width="100vw" alt=""
          srcset=""></a>
      <!-- <button class="btn btn-outline-success bismillah" type="submit" style="border-radius: 20px; height: 42px;" onclick="resetButtonState(this)"><i class="fa-solid fa-magnifying-glass"></i></button> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{route('profile.user', ['user' => auth()->user()->id])}}" class="login">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid p-5 mt-5">
    <div class="row">
      <div class="col-4" style="font-family: 'font2'; letter-spacing: 1.1px;">
        <p>
        <h4><b>Pertanyaan</b></h4>
        {!! $question->question !!}</p>
      </div>
      <div class="col-8" style="background-color: #e0f1ff;">
        <form action="{{route('answer.store')}}" method="POST" style="margin-top: 12px;" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <input type="hidden" name="question_id" value="{{ $question->id }}">
          <div class="form-group">
            <textarea name="answer" id="myTextarea" class="text-area form-control" cols="60" rows="10"
              placeholder="Answer..">{{old('answer')}}</textarea>
            <input type="file" id="gambar" name="gambar" class="form-control">
            <button type="submit" class="tambah" style="margin-top: 15px;">Tambahkan Jawaban Anda</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @include('user.footer')

  <script>
    function resetButtonState(button) {
          setTimeout(function() {
            button.blur();
          }, 200);
        }
  </script>
</body>

</html>