@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Vendor
  </title>
</head>
      <!-- Navbar -->

        <div class="container-fluid">
          <div class="navbar-wrapper">

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Tambah Vendor Baru</h4>
                <p class="card-category">Form Tambah Vendor Baru</p>
              </div>
              <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/addvendor/vendor" method="POST">
                    {{csrf_field()}}

                    <div class="form-group mb-3">
                        <label class="bmd-label-floating">Nama Mitra</label>
                        <input type="text" name="nama_mitra" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Email Mitra</label>
                        <input type="email" name="email_mitra" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Kontak</label>
                        <input type="text" name="kontak" class="form-control" >
                    </div>
                    <input type="submit" value="Tambah" class="btn btn-md btn-primary">
                </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Data Seluruh Vendor</h4>
                  <p class="card-category">Tabel Data Seluruh Vendor</p>
                </div>
                <div class="card-body">
                @if(session('sukses'))
                <div class="alert alert-success">
                  {{session('sukses')}}
                </div>
                @endif
                <div class="table-responsive">
                  <table class="table table-hover table-striped">
                      <thead class=" text-primary">
                        <th>Nama Mitra</th>
                        <th>Email Mitra</th>
                        <th>Kontak</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        @foreach($vendor as $a)
                          <tr>
                            <td>{{$a->nama_mitra}}</td>
                            <td>{{$a->email_mitra}}</td>
                            <td>{{$a->kontak}}</td>
                            <td><a href="/hapus/{{$a->id}}/vendor" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="/updateview/{{$a->id}}/vendor" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editModal{{$a->id}}" >Ubah</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
                @foreach($vendor as $b)
                    <div class="modal fade" id="editModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-body">
                                <form action="/update/{{$b->id}}/vendor" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Nama Mitra</label>
                                        <input type="text" value="{{$b->nama_mitra}}" name="nama_mitra" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label  class="bmd-label-floating">Email Mitra</label>
                                        <input type="email" value="{{$b->email_mitra}}" name="email_mitra" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label  class="bmd-label-floating">Kontak</label>
                                        <input type="text" value="{{$b->kontak}}" name="kontak" class="form-control" >
                                    </div>
                                    <input type="submit" value="Update" class="btn btn-md btn-primary">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </form>



                  </div>
                </div>
                    </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</html>
@endsection
