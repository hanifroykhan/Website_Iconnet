     @extends('template')
      @section('content')
      <!-- Header -->
      <div class="content">

      <div class="container-fluid">

          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">


            </div>
          </div>
        </div>


    <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h1 class="card-title">Aktivasi Iconnet</h1>
            </div>
            <div class="card-body">

                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <br/>
                <form action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group mb-3">
                        <label for="example-datetime-local-input" class="bmd-label-floating">Date</label>
                        <input type="date" name="date" class="form-control" value="{{old('date')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">No PA </label>
                        <input type="text" name="nopa" class="form-control" value="{{old('nopa')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">SID</label>
                        <input type="text" name="sid" class="form-control" value="{{old('sid')}}">
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating">Layanan</label>
                        <select class="form-control"  name="layanan" value="{{old('layanan')}}">
                          <option>Iconnet 10mbps</option>
                          <option>Iconnet 20mbps</option>
                          <option>Iconnet 50mbps</option>
                          <option>Iconnet 100mbps</option>
                        </select>
                      </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating" >Alamat</label>
                        <textarea name="alamat" class="form-control" rows="1" value="{{old('alamat')}}" ></textarea>
                      </div>
                    <div class="form-group mb-3">
                        <label class="bmd-label-floating">Panjang Kabel</label>
                        <input type="text" name="panjangKabel" class="form-control" value="{{old('panjangKabel')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Koordinat</label>
                        <input type="text" name="koordinat" class="form-control" value="{{old('koordinat')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Fat Kode</label>
                        <input type="text" name="fat" class="form-control" value="{{old('fat')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="bmd-label-floating">Port Fat</label>
                        <input type="text" name="port" class="form-control" value="{{old('port')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">SN ONT</label>
                        <input type="text" name="snont" class="form-control" value="{{old('snont')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label  class="bmd-label-floating">Mac ONT</label>
                        <input type="text" name="macont" class="form-control" value="{{old('macont')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="bmd-label-floating">OLT</label>
                        <input type="text" name="olt" class="form-control" value="{{old('olt')}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="bmd-label-floating">Photo</label>
                    </div>
                    <div class="mb-3 ">
                        <input class="form-control" name="file" type="file">
                    </div>
                    <button class="btn btn-icon btn-primary" type="submit" name="submit">
                        <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                        <span class="btn-inner--text">KIRIM</span>
                    </button>
                </form>
                </div>
              </div>
            </div>

            </div>





</body>

</html>
@endsection
