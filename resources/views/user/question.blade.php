<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curiously - If you're curious then ask</title>

  <!-- Required meta tags -->

  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{asset('img/logokecil.png')}}" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/mainpage.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css" />
  <script src="{{asset('js/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: "#myTextarea",
      plugins: "advlist autolink lists link image charmap preview",
    });
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand warna" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" width="100vw" alt=""
          srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex align-items-center" action="{{route('search')}}" method="GET">
        <div class="input-group">
          <input class="form-control searchh me-2" name="search" placeholder="Search" aria-label="Search"
            style="height: 42px; width: 500px; font-family: 'font2'; border-radius: 20px;">
          <button class="btn btn-outline-success bismillah" type="submit" style="border-radius: 20px; height: 42px;"
            onclick="resetButtonState(this)"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item me-3">
            <a href="fav.html"><i class="fa-solid fa-heart fa-bounce login" style="color: white;"></i></a>
            </li> -->
          <li class="nav-item">
            <button><a href="{{route('profile.user', ['user' => auth()->user()->id])}}"
                class="login">profile</a></button>
          </li>
          <li class="nav-item mx-3">
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button type="submit"><a class="login">Logout</a></button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="clearfix d-flex align-items-center justify-content-center" style="margin-top: 100px;">
    <h1 class="clearfix_top">
      Have <br> a question? <br>
      <button type="button" class="btn btn-primary mt-2 mb-3 link" style="color: #F59A35 !important;"
        data-bs-toggle="modal" data-bs-target="#exampleModal">TANYA SEKARANG</button>
    </h1>
  </div>

  <!-- ASKING QUESTION -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Do you wanna ask?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/home/store_question" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="mb-3">
              <textarea name="question" id="myTextarea"
                class="text-area form-control @error('question') is-invalid @enderror" cols="60" rows="10"
                placeholder="Asking whatever...">{{old('question')}}</textarea>
              @error('question')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <select class="form-select" name="subject">
                <option selected>-->>Choose subject</option>
                @foreach ($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->subject}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <input type="file" id="gambar" name="gambar" class="form-control @error('image') is-invalid @enderror">
              @error('gambar')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center">
              <button type="button" class="btn text-center btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn text-center btn-dark">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="margin-top: 20px">
    <div class="row">
      <!-- CARD KIRI -->
      <div class="col-3">
        <div class="card ml-5" style="width: 230px; border: transparent;">
          <div class="container d-flex align-items-start justify-content-start mt-1">
            <div class="text">

              <div class="jdl">
                <b> &nbsp; Subject</b>
              </div>

              <div>
                <a href="{{route('home')}}"><button type="submit" name="subject" value="{{ $subject->subject }}"
                    class="btn btn-outline-primary" onclick="resetButtonState(this)">
                    <span class="icon-container">
                      <i class="bi bi-grid-3x3-gap" style="font-size: 18px;"></i>
                    </span>
                    Semua
                  </button></a>
              </div>
              <form action="{{ route('filter') }}" method="GET">
                @foreach ($subjects as $subject)
                <div>
                  <button type="submit" name="subject" value="{{ $subject->subject }}" class="btn btn-outline-primary"
                    onclick="resetButtonState(this)">
                    <span class="icon-container">
                      <i class="bi bi-grid-3x3-gap" style="font-size: 18px;"></i>
                    </span>
                    {{ $subject->subject }}
                  </button>
                </div>
                @endforeach
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD TENGAH -->
      <!-- CARD TENGAH -->
      <!-- CARD TENGAH -->
      <div class=" col-6">
        @php ($no = 1)
        @foreach ($questions as $question)
        <div class="card mb-5">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-start"
              style="padding-left: 10px; padding-right: 10px;">
              <img src="{{asset('img/'.$question->user->photo_profil)}}"
                style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
              <span class="text ms-1 me-1" style="margin-left: 10px !important;"> <a
                  href="{{route('profile.user', ['user' => $question->user->id])}}"
                  class="mapel">{{$question->user->username}}</a>&nbsp;&#46;&nbsp;
                {{ $question->created_at->diffForHumans() }}
              </span>
              <span class="text ms-auto">{{$question->subject->subject}}</span>
            </div>
            <div class="card-bg">
              <a href="{{route('show.answer', ['question' => $question->id])}}">
                <p class="clamp-3-lines">{!!$question->question!!}</p>
              </a>
            </div>
            <div class="d-flex align-items-start justify-content-end" style="padding-right: 10px;">
              <a href="{{route('show.answer', ['question' => $question->id])}}" class="btn btn-primary mt-2 mb-3 link"
                style="margin-top: -15px !important;">JAWAB</a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="d-flex align-items-center justify-content-center">
          {{$questions->links()}}
        </div>
      </div>

      <!-- CARD KANAN -->
      <!-- CARD KANAN -->
      <!-- CARD KANAN -->
      @include('user.sidebarkanan')

    </div>

    @include('user.footer')
  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  @if (session('status'))
  <script>
    swal({
           title: 'Status',
           text: '{{ session('status') }}',
           icon: 'success',
           timer: 3000,
           button: false
       });
  </script>
  @endif
  <script>
    function resetButtonState(button) {
                  setTimeout(function() {
                    button.blur();
                  }, 200);
                }
  </script>
</body>

</html>