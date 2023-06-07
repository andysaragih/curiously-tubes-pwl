@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col">
                    <a href="/admin/akun" class="btn btn-primary">Kembali</a><br>

                    <form action="{{route('akun.update', ['id' => $user->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control w-50 @error('name') is-invalid @enderror" id="name"
                                required name="name" value="{{$user->name}}">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control w-50 @error('username') is-invalid @enderror"
                                id="username" required name="username" value="{{$user->username}}">
                            @error('username')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control w-50 @error('email') is-invalid @enderror"
                                id="email" required name="email" value="{{$user->email}}">
                            @error('email')
                            <div class=" text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control w-50 @error('password') is-invalid @enderror"
                                id="password" required name="password" value="{{$user->password}}">
                            @error('password')
                            <div class=" text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select form-control w-50" name="gender"
                                aria-label="Default select example">
                                <option @if ($user->gender == "Pria") selected @endif>Pria</option>
                                <option @if ($user->gender == "Wanita") selected @endif>Wanita</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jenjang" class="form-label">Jenjang</label>
                            <select class="form-select form-control w-50" name="jenjang"
                                aria-label="Default select example">
                                <option value="Sekolah Menengah Atas" @if ($user->jenjang == "Sekolah Menengah Atas")
                                    selected
                                    @endif>Sekolah
                                    Menengah Atas
                                </option>
                                <option value="Sekolah Menengah Pertama" @if ($user->jenjang == "Sekolah Menengah
                                    Pertama")
                                    selected
                                    @endif>Sekolah
                                    Menengah Pertama</option>
                                <option value="Sekolah Dasar" @if ($user->jenjang == "Sekolah Dasar") selected
                                    @endif>Sekolah
                                    Dasar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="aboutme" class="form-label">About</label>
                            <textarea class="form-control w-50" name="aboutme" id="" cols="30"
                                rows="10">{{$user->aboutme}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="photo_profil" class="form-label">About</label>
                            <input type="file" class="form-control w-50 @error('name') is-invalid @enderror"
                                id="photo_profil" name="photo_profil" value="{{$user->photo_profil}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection