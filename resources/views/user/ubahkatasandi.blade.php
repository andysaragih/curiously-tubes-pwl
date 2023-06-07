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
                        style="width: 700px; min-height: 200px; margin-top: -97px; margin-right: -350px; border-radius: 20px;">
                        <div class="card-body" style="border-radius: 20px; object-fit: cover;">

                            <!-- form ubah kata sandi -->
                            <div class="d-flex align-items-center justify-content-start"
                                style="padding-left: 10px; padding-right: 10px; margin-bottom: 21px;">
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')
                                    <table style="text-align: left; width: 650px; margin: 0 auto;">
                                        <tr>
                                            <td>
                                                <h6
                                                    style="margin-bottom: 10px; padding: 5px; background-color: #e0f1ff;">
                                                    Kata Sandi
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <label for="current_password" style="margin-bottom: 10px;">Kata Sandi
                                                    Saat Ini</label><br>
                                                <input type="password" id="current_password" name="current_password"
                                                    class="mt-1 block w-full">
                                                <x-input-error
                                                    :messages="$errors->updatePassword->get('current_password')"
                                                    class="mt-2" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <label for="password" style="margin-bottom: 10px;">Kata Sandi
                                                    Baru</label><br>
                                                <input type="password" id="password" name="password"
                                                    class="mt-1 block w-full">
                                                <x-input-error :messages="$errors->updatePassword->get('password')"
                                                    class="mt-2" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <label for="password_confirmation" style="margin-bottom: 10px;">Ulangi
                                                    Kata Sandi</label><br>
                                                <input type="password" id="password_confirmation"
                                                    name="password_confirmation" class="mt-1 block w-full">
                                                <x-input-error
                                                    :messages="$errors->updatePassword->get('password_confirmation')"
                                                    class="mt-2" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 10px;">
                                                <button type="submit" class="tambah2" style="">Ubah!</button>
                                                @if (session('status') === 'password-updated')
                                                <p x-data="{ show: true }" x-show="show" x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </form>

                            </div>

                            <!-- form perubahan email -->
                            <div class="d-flex align-items-center justify-content-start"
                                style="padding-left: 10px; padding-right: 10px; margin-bottom: 21px;">
                                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                    @csrf
                                </form>
                                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                    @csrf
                                    @method('patch')
                                    <table style="text-align: left;">
                                        <tr>
                                            <td style="text-align: left;">
                                                <h6 class="d-flex align-items-center justify-content-start"
                                                    style="margin-bottom: 10px; padding: 5px; width: 650px; background-color: #e0f1ff;">
                                                    <span>Email dan Nama</span>
                                                </h6>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Perubahan alamat email
                                                <div class="d-flex align-items-center justify-content-start"
                                                    style="padding-left: 10px; padding-right: 10px; padding-bottom: 8px; border-bottom: 2px solid #e0f1ff; margin-bottom: 10px; width: 650px;">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr style="margin-bottom: 10px;">
                                            <td>
                                                <label for="pwrn2" style="margin-bottom: 10px;">Nama Lengkap</label>
                                                <input id="name" name="name" type="text" class="mt-1 block w-full"
                                                    value="{{$user->name}}" required autofocus>
                                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                            </td>
                                        </tr>

                                        <tr style="margin-bottom: 10px;">
                                            <td>
                                                <label for="email" style="margin-bottom: 10px;">Email Saat Ini</label>
                                                <input type="email" id="email" name="email" type="email"
                                                    class="mt-1 block w-full" value="{{$user->email}}" required
                                                    autocomplete="username">
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !
                                                $user->hasVerifiedEmail())
                                                <div>
                                                    <p class="text-sm mt-2 text-gray-800">
                                                        {{ __('Your email address is unverified.') }}

                                                        <button form="send-verification"
                                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                            {{ __('Click here to re-send the verification email.') }}
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 font-medium text-sm text-green-600">
                                                        {{ __('A new verification link has been sent to your email
                                                        address.') }}
                                                    </p>
                                                    @endif
                                                </div>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flex items-center gap-4">
                                                    <button type="submit" value="Ubah!" class="tambah2"
                                                        style="margin-left: 161px; margin-top: 21px;">Ubah!
                                                    </button>
                                                    @if (session('status') === 'profile-updated')
                                                    <p x-data="{ show: true }" x-show="show" x-transition
                                                        x-init="setTimeout(() => show = false, 2000)"
                                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                                    @endif
                                                </div>
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
        </div>
        @include('user.footer')
    </div>


    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>