@extends('template')
@section('content')



<br>
            <div class="content">
                <div class="container">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Find PPI</h4>
                                    <p class="card-category">Form untuk Mencari PPI</p>
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
                                @if(session('gagal'))
                                <div class="alert alert-danger">
                                {{session('gagal')}}
                                </div>
                                @elseif(session('sukses'))
                                <div class="alert alert-success">
                                {{session('sukses')}}
                                </div>
                                @endif



                                        <!-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Pilih Vendor</label>
                                                    <select class="custom-select" name="" id="">
                                                        @foreach($vendor as $ven)
                                                        <option value="{{$ven->nama_mitra}}">{{$ven->nama_mitra}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div> -->
                                        <form action="/cari" method="post">
                                            {{csrf_field()}}
                                            <div class="row d-flex-justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Masukan No SPA</label>
                                                        <input type="text" name="spa" class="form-control">
                                                        <br>
                                                        <button class="btn btn-icon btn-primary" type="submit" name="submit">
                                                            <span class="btn-inner--icon"><i class="fas fa-search"></i></span>
                                                            <span class="btn-inner--text">FIND</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>

                                    <div class="clearfix"></div>

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
