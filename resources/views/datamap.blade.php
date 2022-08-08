@extends('template')
@section('content')
<div class="container-fluid">

    <div class="row align-items-center py-4">
      <div class="col-lg-6 col-7">

      </div>

    </div>
  </div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
                
              <!-- Card header -->
              <div class="card-header border-0">
                <h3 class="mb-0">Data</h3>
              </div>
              
                  @error('maps')
                    <div class="alert alert-danger m-3">
                      {{$message}}
                    </div>
                  @enderror
                  @if (session('sukses'))
                      <div class="alert alert-success m-3">
                        {{session('sukses')}}
                      </div>
                  @endif
                    <table>
                        <form action="/importmap" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <tr>
                                <td class="col-3">
                                    <div class="mb-3 ml-3 ">

                                        <input class="form-control" name="file" type="file" id="formFile">
                                    </div>
                                </td>
                                <td>
                                    <div class="mr-3">
                                        <input type="submit" value="Import" class="btn btn-md btn-primary">
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </table>
                    <div class="card-body">     
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class=" text-primary">
                                    <th>
                                    Base
                                    </th>
                                    <th>
                                    Zona
                                    </th>
                                    <th>
                                    Cek
                                    </th>
                                    <th>
                                    Area
                                    </th>
                                    <th>
                                    Nama ODP
                                    </th>
                                    <th>
                                    New Label
                                    </th>
                                    <th>
                                    Type ODP
                                    </th>
                                    <th>
                                    Tikor ODP
                                    </th>
                                    <th>
                                    Nama OLT
                                    </th>
                                    <th>
                                    Type OLT
                                    </th>
                                    <th>
                                    Port
                                    </th>
                                    <th>
                                    Tanggal Instal
                                    </th>
                                    <th>
                                    Year
                                    </th>
                                    <th>
                                    Month
                                    </th>
                                    <th>
                                    Week
                                    </th>
                                    <th>
                                    Nama Cluster
                                    </th>
                                    <th>
                                    Idle
                                    </th>
                                    <th>
                                    Home Connected
                                    </th>
                                    <th>
                                    Capacity
                                    </th>
                                    <th>
                                    Utilisasi
                                    </th>
                                    <th>
                                    Utilisasi FAT
                                    </th>
                                    <th>
                                    Status FAT
                                    </th>
                                    <th>
                                    Keterangan
                                    </th>
                                    <th>
                                    Asal OLT
                                    </th>
                                    <th>
                                    Pic Sales
                                    </th>
                                    <th>
                                    Aging Cluster
                                    </th>
                                  
                                </thead>
                                <tbody>
                                    @foreach($datamaps as $a)
                                    <tr>
                                        <td>{{$a->BASE}}</td>
                                        <td>{{$a->ZONA}}</td>
                                        <td>{{$a->CEK}}</td>
                                        <td>{{$a->Area}}</td>
                                        <td>{{$a->NAMA_ODP}}</td>
                                        <td>{{$a->New_LabelODP}}</td>
                                        <td>{{$a->Type_ODP}}</td>
                                        <td>{{$a->Tikor_ODP}}</td>
                                        <td>{{$a->Nama_OLT}}</td>
                                        <td>{{$a->Type_OLT}}</td>
                                        <td>{{$a->Port}}</td>
                                        <td>{{$a->Tanggal_Instal}}</td>
                                        <td>{{$a->Year}}</td>
                                        <td>{{$a->Month}}</td>
                                        <td>{{$a->Week}}</td>
                                        <td>{{$a->Nama_Cluster}}</td>
                                        <td>{{$a->Idle}}</td>
                                        <td>{{$a->Home_Connected}}</td>
                                        <td>{{$a->Capacity}}</td>
                                        <td>{{$a->Utilisasi}}</td>
                                        <td>{{$a->Utilisasi_Fat}}</td>
                                        <td>{{$a->Status_Fat}}</td>
                                        <td>{{$a->Keterangan}}</td>
                                        <td>{{$a->Asal_OLT}}</td>
                                        <td>{{$a->Pic_Sales}}</td>
                                        <td>{{$a->Aging_Cluster}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $datamaps->links() }}
                        </div>
                    </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection