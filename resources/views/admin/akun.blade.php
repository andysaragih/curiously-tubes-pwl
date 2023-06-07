@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Akun</h1>
                </div><!-- /.col -->
                <!-- /.col -->
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
                    <br><br>
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong>{{session('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @elseif(session('update_status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil! </strong>{{session('update_status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @elseif(session('delete_status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil! </strong>{{session('delete_status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif

                    <br><br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Usename</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">About</th>
                                <th scope="col">Photo Profile</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">
                                    {{$user->email}}</td>
                                <td style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;">
                                    {{$user->password}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->jenjang}}</td>
                                <td>{{$user->aboutme}}</td>
                                <td><img src="{{asset('img/'.$user->photo_profil)}}" width="100px" height="100px"></td>
                                <td>
                                    <div class=" row">
                                        <div class="col-6">
                                            <a href="{{route('akun.edit', ['id' => $user->id])}}"
                                                class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></a>
                                        </div>
                                        <div class="col-6">
                                            <form action="{{route('akun.delete', ['id' => $user->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('Yakin ingin menghapus?')"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php
                            $i++
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
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