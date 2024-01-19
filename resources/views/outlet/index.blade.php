@extends('layouts.template')
@section('title')
Halaman Outlet
@endsection

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    Data Outlet
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#createData">
                        <i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive p-3">
            <table class="table table-hover" id="dataTable">
                <thead>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Pilihan</th>
                </thead>
                <tbody>
                    @foreach($outlet as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->username}}</td>
                        <td>
                            <form action="#" method="post">
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editModal">Ubah</a>
                                <a href="#" class="btn btn-info">Detail</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>




<!-- Modal Create-->
<div class="modal fade" id="createData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-close"></i></span>
                </button>
            </div>

            <form action="{{route('outlet.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group p-1">
                        <label>Nama Lengkap</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group p-1">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <input type="hidden" name="role" value="petugas">
                    <div class="form-group p-1">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- end create -->

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form edit data -->
                <form action="" method="post">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="form-group p-1">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group p-1">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <input type="hidden" name="role" value="petugas">
                        <div class="form-group p-1">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection
