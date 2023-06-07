<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand warna" href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" width="100vw" alt=""
                srcset=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="button-top">
    <a href="{{ route('profile.user', ['user' => $user->id]) }}">Jawaban</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ route('question.user', ['user' => $user->id]) }}">Pertanyaan</a>
</div>