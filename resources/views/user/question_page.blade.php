<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curiously - Question</title>

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
            <a class="navbar-brand warna" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" width="100vw"
                    alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item me-3">
                <a href="fav.html"><i class="fa-solid fa-heart fa-bounce login" style="color: white;"></i></a>
                </li> -->
                    <li class="nav-item">
                        <a href="{{route('profile.user', ['user' => auth()->user()->id])}}" class="login">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="margin-top: 220px">
        <div class="row">
            <!-- CARD KIRI-->
            <!-- CARD KIRI-->
            <!-- CARD KIRI-->
            <div class="col-9">
                <div class="container my-5 d-flex align-items-center justify-content-center"
                    style="letter-spacing: 1.1px;">
                    <div class="card"
                        style="width: 750px; min-height: 200px; margin-top: -97px; margin-right: -70px; border-radius: 20px;">
                        <div class="card-body" style="object-fit: cover;">

                            <div class="d-flex align-items-center justify-content-start"
                                style="padding-left: 10px; padding-right: 10px;">
                                <img src="{{asset('img/'.$question->user->photo_profil)}}"
                                    style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
                                <span class="text ms-1 me-1" style="margin-left: 10px !important;"> <a
                                        href="{{route('profile.user', ['user' => auth()->user()->id])}}"
                                        class="mapel"><b>{{$question->user->username}}</b></a>
                                    . {{$question->created_at->diffForHumans()}} .
                                    {{$question->subject->subject}}</span>
                            </div>

                            <div class="card-bg">
                                <p style="text-decoration: none;">{!!$question->question!!}</p>
                            </div>

                            <div class="d-flex align-items-center justify-content-center mb-3">
                                @if ($question->gambar != NULL)
                                <img src="{{asset('img/'.$question->gambar)}}" width="50%">
                                @endif
                            </div>

                            @if ($question->user->id == auth()->user()->id)
                            <div class="d-flex align-items-start justify-content-start" style="padding-right: 10px;">
                                <div class="background-text pindah1 text"
                                    style="background-color: blue; margin-left: 20px; padding: 5px; width: 270px; border-radius: 50px; text-align: center; color: white !important;">
                                    Ini adalah pertanyaan Anda
                                </div>
                            </div>
                            @else
                            <div class="d-flex align-items-start justify-content-start" style="padding-right: 10px;">
                                <a href="{{ route('answer.create', $question) }}">
                                    <div class="background-text pindah1 text"
                                        style="background-color: #333; margin-left: 20px; padding: 5px; width: 270px; border-radius: 50px; text-align: center; color: white !important;">
                                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambahkan Jawaban Anda
                                    </div>
                                </a>
                            </div>
                            @endif


                            <div class=" d-flex align-items-start justify-content-start"
                                style="padding-right: 10px; padding-top: 20px;">
                                {{-- input komentar --}}
                                <form action="{{route('comment.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                                    <div class=""
                                        style="margin-left: 20px; margin-bottom: 20px; width: 630px; border: 1px solid #e0f1ff;">
                                    </div>
                                    @foreach ($question->comment as $comment)
                                    <div class="d-flex align-items-start justify-content-start"
                                        style="padding-right: 10px; padding-top: 10px; padding-bottom: 10px">
                                        <a href="{{route('profile.user', ['user' => $comment->user->id])}}"
                                            style=" padding-right: 10px; margin-left: 15px;">
                                            <img src="{{asset('img/'.$comment->user->photo_profil)}}"
                                                style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
                                        </a>
                                        <p class="comment-text text-left pl-4">{{$comment->comment}}</p>
                                    </div>
                                    @endforeach
                                    <div class=""
                                        style="margin-left: 20px; margin-bottom: 20px; width: 630px; border: 1px solid #e0f1ff;">
                                    </div>
                                    <a href="{{route('profile.user', ['user' => auth()->user()->id])}}"
                                        style=" padding-right: 10px; margin-left: 15px;">
                                        <img src="{{asset('img/'.auth()->user()->photo_profil)}}"
                                            style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
                                    </a>
                                    <input class="komen"
                                        placeholder="Tanyakan {{$question->user->username}} mengenai soal ini"
                                        type="text" name="comment"
                                        style="background-color: #e0f1ff; padding: 5px; width: 500px; border-radius: 50px; text-align: center; border: none; margin-bottom: 8px;"
                                        autocomplete="off">
                                    <button class="btn btn-dark rounded-5" style="width: 7%" type="submit"><i
                                            class="fa-solid fa-paper-plane"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=" container my-5 d-flex align-items-center justify-content-center"
                    style="letter-spacing: 1.1px;">
                    <div class="card"
                        style="width: 750px; min-height: 200px; margin-top: -0px; margin-right: -70px; border-radius: 20px; border: #e0f1ff; background-color: #e0f1ff !important; padding-top: 10px;">
                        <div class="card-body" style=" object-fit: cover;">
                            <img src="{{asset('image/gojo.png')}}" alt="" height="250px" style="margin-top: -25px;">
                            <div style="font-family: 'font'; letter-spacing: 1.5px !important;">
                                <h1> {{$question->user->username}} menunggu <br>bantuanmu</h1>
                            </div>
                            <div style="margin-bottom: 15px;">Beri jawaban Anda</div>
                            @if ($question->user->id == auth()->user()->id)
                            @else
                            <div class="d-flex align-items-center justify-content-center" style="padding-right: 10px;">
                                <a href="{{ route('answer.create', $question) }}">
                                    <div class="background-text pindah1 text"
                                        style="background-color: #333; margin-left: 20px; padding: 5px; width: 270px; border-radius: 50px; text-align: center; color: white !important;">
                                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i> Tambahkan Jawaban Anda
                                    </div>
                                </a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- CARD KANAN -->
            <!-- CARD KANAN -->
            <!-- CARD KANAN -->

            <div class="col-3">
                <div class="card rounded-4" style="width: 290px; min-height: 265px; margin-left: -115px">
                    <div class="d-flex align-items-center" style="padding: 20px;">
                        <img src="{{asset('img/'.auth()->user()->photo_profil)}}"
                            style="border-radius: 100%; object-fit: cover; width: 80px; height: 80px;">
                        <a href="{{route('profile.user', ['user' => auth()->user()->id])}}">
                            <p class=" text ms-3" style="color: #333333;">
                                {{auth()->user()->username}}
                            </p>
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="background-text pinda1 text"
                            style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding-left: 10px; padding-right: 10px;">
                            <i class="fa-solid fa-question"
                                style="color: #F59A35;"></i>&nbsp;{{count(auth()->user()->user)}}
                            Pertanyaan
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="background-text pindah1 text"
                            style="background-color: #e0f1ff; margin-top: 10px; margin-left: 20px; padding-left: 10px; padding-right: 10px;">
                            <i class="fa-solid fa-comment"
                                style="color: #F59A35;"></i>&nbsp;{{count(auth()->user()->answer)}}
                            Jawaban
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            {{-- @dd($answers) --}}
            @foreach ($question->answer as $answer)
            <div class="col-9 d-flex align-items-center justify-content-center">
                <div class="card rounded-3 my-3"
                    style="width: 750px; min-height: 200px; margin-top: 0px; margin-right: -70px;">
                    <div class="card-body" style="border-radius: 20px; object-fit: cover;">

                        <div class="d-flex align-items-center justify-content-start"
                            style="padding-left: 10px; padding-right: 10px; padding-bottom: 8px; border-bottom: 2px solid #e0f1ff; margin-bottom: 20px;">
                            <span class="ms-1 me-1"
                                style="margin-left: 10px !important; font-family: 'font'; padding-bottom: 8px;">
                                <h5>Jawaban </h5>
                            </span>
                        </div>

                        <div class="d-flex align-items-center justify-content-start"
                            style="padding-left: 10px; padding-right: 10px;">
                            <img src="{{asset('img/'.$answer->user->photo_profil)}}"
                                style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
                            <span class="text ms-1 me-1" style="margin-left: 10px !important;"> <a
                                    href="{{route('profile.user', ['user' => $answer->user->id])}}"
                                    class="mapel"><b>{{$answer->user->username}}</b></a><b>
                        </div>

                        <div class="card-bg">
                            <p style="text-decoration: none;">{!!$answer->answer!!}</p>
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                @if ($answer->gambar != NULL)
                                <img src="{{asset('img/'.$answer->gambar)}}" width="50%">
                                @endif
                            </div>
                        </div>
                        @php

                        $like = $answer->like;
                        $status = [];

                        foreach ($like as $isiLike) {
                        $status[] = $isiLike['user_id'];
                        }
                        $user_id = auth()->user()->id;
                        $jumlahLike=count($status);
                        @endphp

                        @if (in_array($user_id, $status))
                        <div class="d-flex align-items-start justify-content-start" style="padding-right: 10px;">

                            <form action="{{route('delete.like', ['answer' => $answer->id])}}" method="POST"
                                class="pb-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button">TERIMA KASIH &nbsp;<i
                                        class="fa-regular fa-heart"></i>&nbsp;
                                    {{$jumlahLike}}</button>
                            </form>
                        </div>
                        @else
                        <div class="d-flex align-items-start justify-content-start" style="padding-right: 10px;">

                            <form action="{{route('answer.like')}}" method="POST" class="pb-1">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="answer_id" value="{{ $answer->id }}">
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                <button type="submit" class="button">TERIMA KASIH &nbsp;<i
                                        class="fa-regular fa-heart"></i>&nbsp;
                                    {{$jumlahLike}}</button>
                            </form>

                        </div>
                        @endif


                        <div class="d-flex align-items-start justify-content-start"
                            style="padding-right: 10px; padding-top: 20px;">
                            <form action="{{route('reply.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="answer_id" value="{{ $answer->id }}">
                                <input type="hidden" name="question_id" value="{{ $question->id }}">
                                <div class=""
                                    style=" margin-left: 20px; margin-bottom: 20px; width: 630px; border: 1px solid#e0f1ff;">
                                </div>
                                @foreach ($answer->reply as $item)
                                <div class="d-flex align-items-start justify-content-start"
                                    style="padding-right: 10px; padding-top: 10px; padding-bottom: 10px">
                                    <a href="{{route('profile.user', ['user' => $item->user->id])}}"
                                        style=" padding-right: 10px; margin-left: 15px;">
                                        <img src="{{asset('img/'.$item->user->photo_profil)}}"
                                            style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
                                    </a>
                                    <p class="comment-text text-left pl-4">{{$item->reply}}</p>
                                </div>
                                @endforeach
                                <div class=""
                                    style="margin-left: 20px; margin-bottom: 20px; width: 630px; border: 1px solid #e0f1ff;">
                                </div>
                                <a href="{{route('profile.user', ['user' => auth()->user()->id])}}"
                                    style=" padding-right: 10px; margin-left: 15px;">
                                    <img src="{{asset('img/'.auth()->user()->photo_profil)}}"
                                        style="border-radius: 100%; object-fit: cover; width: 40px; height: 40px;">
                                </a>
                                <input class="komen" name="reply" placeholder="Tambahkan Komentar" type="text"
                                    style="background-color: #e0f1ff; padding: 5px; width: 500px; border-radius: 50px; text-align: center; border: none; margin-bottom: 8px;">
                                <button class="btn btn-dark rounded-5" type="submit" style="width: 7%"><i
                                        class="fa-solid fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @include('user.footer')
    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}">
    </script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{('js/bootstrap.min.js')}}"></script>
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
    @elseif(session('status_comment'))
    <script>
        swal({
            title: 'Berhasil',
            text: '{{ session('status_comment') }}',
            icon: 'success',
            timer: 3000,
            button: false
        });
    </script>
    @elseif(session('status_reply'))
    <script>
        swal({
            title: 'Berhasil',
            text: '{{ session('status_reply') }}',
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