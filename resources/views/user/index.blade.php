@extends('layouts.template')

@section('content')
<!-- <div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">1,504</div>
            <div class="cardName">Customers</div>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">80</div>
            <div class="cardName">Packages</div>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">284</div>
            <div class="cardName">On Progress</div>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">142</div>
            <div class="cardName">Ready</div>
        </div>
    </div>
</div>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Recent Orders</h2>
            <a href="#" class="btn">View All</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Package</td>
                    <td>Status</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Abdi Rabbani</td>
                    <td>IDR 25.000</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Ready</span></td>
                </tr>

                <tr>
                    <td>Naufal Aulia</td>
                    <td>IDR 50.000</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Fawaz Al Fajr</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                    <td>Abdi Rabbani</td>
                    <td>IDR 25.000</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Ready</span></td>
                </tr>

                <tr>
                    <td>Naufal Aulia</td>
                    <td>IDR 50.000</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Fawaz Al Fajr</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>
                <tr>
                    <td>Abdi Rabbani</td>
                    <td>IDR 25.000</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Ready</span></td>
                </tr>

                <tr>
                    <td>Naufal Aulia</td>
                    <td>IDR 50.000</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>Fawaz Al Fajr</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>

                
            </tbody>
        </table>
    </div>

    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Recent Customers</h2>
        </div>

        <table>
            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                </td>
                <td>
                    <h4>David <br> <span>Italy</span></h4>
                </td>
            </tr>

            <tr>
                <td width="60px">
                    <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                </td>
                <td>
                    <h4>Amit <br> <span>India</span></h4>
                </td>
            </tr>
        </table>
    </div>
</div> -->


@section('title')
<h3>Halaman Petugas</h3>
@endsection

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Data Petugas
                    </div>
                    <div class="col-md-6 text-end"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createData">
                            Tambah Data
                        </button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hove">
                    <thead>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Pilihan</th>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        @if($row->role === 'petugas')
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
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<!-- Modal Creare-->
<div class="modal fade" id="createData" tabindex="-1" aria-labelledby="createDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createDataLabel">Tambah Data Petugas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('user.store')}}" method="post">
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
</div>


<script>
    document.getElementById('editForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Ambil nilai dari form
    var nim = document.getElementById('editNim').value;
    var nama = document.getElementById('editNama').value;
    var jurusan = document.getElementById('editJurusan').value;

    // Proses penyimpanan data ke database atau backend
    // Implementasikan sesuai dengan kebutuhan Anda
    // Tutup modal setelah penyimpanan data
    
    var editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.hide();
});

</script>









@endsection
