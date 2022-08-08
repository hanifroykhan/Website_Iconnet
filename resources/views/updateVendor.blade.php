@extends('template')
@section('content')


        <div class="container-fluid">

            <div class="col-md-4">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Update Vendor</h4>

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
                @if(session('sukses'))
                <div class="alert alert-success">
                  {{session('sukses')}}
                </div>
                @endif
                <form action="/update/{{$datavendor[0]->id}}/vendor" method="post">
                    {{csrf_field()}}
                    <div class="form-group mb-3">
                        <label class="bmd-label-floating">Nama Mitra</label>
                        <input type="text" value="{{$datavendor[0]->nama_mitra}}" name="nama_mitra" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Email Mitra</label>
                        <input type="email" value="{{$datavendor[0]->email_mitra}}" name="email_mitra" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Kontak</label>
                        <input type="text" value="{{$datavendor[0]->kontak}}" name="kontak" class="form-control" >
                    </div>
                    <input type="submit" value="Update" class="btn btn-md btn-warning">
                </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>
@endsection
