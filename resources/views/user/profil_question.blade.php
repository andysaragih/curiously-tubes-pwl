<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - Curiously</title>

  <!-- Required meta tags -->

  <link rel="stylesheet" href="{{('fonts/icomoon/style.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{asset('img/logokecil.png')}}" />

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

  @include('user.navbarprofile')

  <div class="container-fluid" style="margin-top: 70px; margin-bottom: 15px;">
    <div class="row">

      <!-- PROFIL -->
      @include('user.profilsidebar')

      <!-- KONTEN -->

      <div class="col-md-6">
        @foreach ($questions as $question)
        <div class="container my-5 d-flex align-items-center justify-content-center" style="letter-spacing: 1.1px;">
          <div class="card" style="width: 700px; min-height: 250px; margin-top: -97px; margin-left: -280px;">
            <div class="card-body" style="border-radius: 20px; object-fit: cover;">

              <div class="" style="">
                <div class="row">
                  <div class="col-2">
                    <img src="{{asset('img/'.$user->photo_profil)}}"
                      style="border-radius: 100%; margin-left:50px; object-fit: cover; width: 30px; height: 30px;">
                  </div>
                  <div class="col-10" style="margin-left: -50px">
                    <h5><b>{{$question->user->username}}</b></h5>bertanya
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h6 class="text-start" style="margin-top: -20px">
                      {{$question->created_at->diffForHumans()}} .
                      <b>{{$question->subject->subject}}</b>
                      </span>
                      </h5>
                  </div>
                </div>
              </div>

              <div class="card-bg">
                <a href="{{route('show.answer', ['question' => $question->id])}}">
                  <p class="clamp-3-lines text-center">{!!$question->question!!}</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
  @include('user.footer')


</body>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>