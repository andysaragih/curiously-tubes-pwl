@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Subject</h1>
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

                    <a class="btn btn-primary" href="{{route('subject.create')}}" type="submit""><i class=" fa-solid
                        fa-plus"></i>&nbsp;Tambah
                        Subject</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" width="50%">
                            <col width="10%">
                            <col width="60%">
                            <col width="30%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @foreach ($subjects as $subject)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <th scope="row">{{$subject->subject}}</th>
                                    <td>
                                        <div class=" row">
                                            <div class="col">
                                                <a href="{{route('subject.edit', ['id' => $subject->id])}}"
                                                    class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                            <div class="col">
                                                <form action="{{route('subject.delete', ['id' => $subject->id])}}"
                                                    method="POST">
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