@extends('template')
@section('content')
<head>
    <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

</style>



</head>

<!-- Header -->

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
                        <form action="/import" method="post" enctype="multipart/form-data">
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

                    <!-- <a href="/export" class="btn btn-success my-3" target="_blank">Export Excel</a> -->
                    <div class="topnav">
                  <div class="search-container">
              <form  action="/caridatatable" method="get" class="navbar-search form-inline mr-sm-3" >
                    <div class="form-group mb-0">
                    <div class="input-group input-group-alternative input-group-merge">
                    <input class="form-control" name="caridata" placeholder="Cari Data" type="text">
                    <button type="submit" class="input-group-text"><i class="fas fa-search"></i></span>
                
                    </div>
                    </div>
                    
                   
                </form>
              </div>
              </div>

                   
	                <!-- <form action="/caridatatable" method="get">
		                    <input type="text" class="input-group input-group-alternative input-group-merge" name="caridata" placeholder="Cari Data" value="{{ old('caridata') }}">
		                    <input type="submit" value="CARI">
	                </form> -->

                

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class=" text-primary">
                                    <th>
                                    SPA
                                    </th>
                                    <th>
                                    Nama
                                    </th>
                                    <th>
                                        Alamat
                                    </th>
                                    <th>
                                        Bandwidth
                                    </th>
                                    <th>
                                        Service Id
                                    </th>
                                    <th>Status</th>
                                    <th>PPI</th>
                                    <th>Vendor</th>
                                    <th>Aksi</th>
                                    <!-- <th>Documentation</th> -->
                                </thead>
                                <tbody>
                                    @foreach($data as $a)
                                    <tr>
                                        <td>{{$a->p_aktivasi_node_id}}</td>
                                        <td>{{$a->c_name}}</td>
                                        <td>{{$a->address}}</td>
                                        <td>{{$a->bandwidth}}</td>
                                        <td>{{$a->service_id}}</td>
                                        <td>{{$a->status}}</td>
                                        <td><?php  if ($a->ppi==null){
                                            $date=null;
                                        }
                                        else{
                                            $date=date('d F Y',strtotime($a->ppi));
                                            echo $date;
                                        }
                                        ?></td>
                                       <td>{{$a->nama_mitra}}</td>
                                        <td>
                                            <a href="/detaildata/{{$a->c_name}}" class="fa fa-eye fa-lg" style="color:darkgreen"></a>
                                            &nbsp;
                                            &nbsp;
                                            <a href="/hapus/{{$a->c_name}}" onclick="confirm('Apakah Anda Ingin Menghapus Item Ini?')" class="fa fa-trash fa-lg" style="color:red"></a>
                                            <!-- <a href="/updateView/{{$a->id}}/data" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#editModal{{$a->id}}">View</a> -->
                                           

                                        </td>
                                        
                                        <!-- <td>
                                            
                                            <a href="/surveyView/{{$a->id}}/survey" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#surveyModal{{$a->id}}" >Survey</a>
                                            <a href="/tescomView/{{$a->id}}/tescom" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#tescomModal{{$a->id}}" >Tescom</a>
                                            <a href="/docView/{{$a->id}}/doc" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#docsModal{{$a->id}}" >Document</a>
                                        </td> -->
                                       
                                        </tr>
                                        
                                        @endforeach
                                </tbody>
                                
                            </table>

                    
                      {{ $data->links() }}
                    </div>
                  </div>
                </div>
          </div>
        </div>
    </div>
</div>

                     <!-- FORM UPDATE -->
                     @foreach ($data as $b )


                    <div class="modal fade" id="editModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-body">
                                <form action="/update/{{$b->id}}/data" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">SPA</label>
                                        <input type="text" value="{{$b->p_aktivasi_node_id}}" name="nama_mitra" class="form-control" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label  class="bmd-label-floating">Customer Name</label>
                                        <input type="text" value="{{$b->c_name}}" name="email_mitra" class="form-control" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label  class="bmd-label-floating">Alamat</label>
                                        <input type="text" value="{{$b->address}}" name="kontak" class="form-control" readonly >
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="bmd-label-floating">Bandwidth</label>
                                        <input type="text" value="{{$b->bandwidth}}" name="nama_mitra" class="form-control" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label  class="bmd-label-floating">Layanan</label>
                                        <input type="text" value="{{$b->service_id}}" name="email_mitra" class="form-control" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label  class="bmd-label-floating">Status</label>
                                        <input type="text" value="{{$b->status}}" name="status" class="form-control" readonly >
                                    </div>

                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                            {{-- Survey Modal --}}
                            @foreach ($data as $b)


                            <div class="modal fade" id="surveyModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <div class="modal-body">
                                            <form action="/updateSurvey/{{$b->id}}" method="post" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">SPA</label>
                                                    <input type="text" name="p_aktivasi_node_id" id="p_aktivasi_node_id" value="{{$b->p_aktivasi_node_id}}"  class="form-control" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">RAB</label>
                                                    <input type="text" name="rab"  class="form-control" id="rab"  value="{{$b->rab}}" >
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" for="chooseFile">Uploads</label>
                                                    <input type="file" name="file"  class="form-control" id="chooseFile">
                                                </div> 


                                                 <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Update"></input>
                                                 </div>
                                            </form>
                                </div>
                              </div>
                            </div>
                                </div>
                            </div>
                            @endforeach


                             {{-- Tescom Modal --}}
                             @foreach ($data as $b )


                             <div class="modal fade" id="tescomModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                     <div class="modal-body">
                                         <form action="/updateTescom/{{$b->id}}/tescom" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                             <div class=" mb-3">
                                                 <label  for="exampleFormControlInput1" class="form-label">SPA</label>
                                                 <input type="text" value="{{$b->p_aktivasi_node_id}}" name="p_aktivasi_node_id" id="p_aktivasi_node_id" class="form-control" readonly>
                                             </div>
                                             <div class="form-group mb-3">
                                                 <label  class="form-label">Testcom</label>
                                                 <input type="file"  name="file" id="file" class="form-control">
                                             </div>
                                            <div class="form-group mb-3">
                                            <label  class="bmd-label-floating">BAI</label>
                                            <input type="file"  name="bai_path" id="file" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="bmd-label-floating">BAKL</label>
                                            <input type="file"  name="bakl_path" id="file" class="form-control">
                                        </div> 


                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
                                         </form>
                                     </div>
                                     </div>
                                 </div>
                             </div>
                             @endforeach

                             {{-- Docs Modal --}}
                              @foreach ($data as $b )


                              <div class="modal fade" id="docsModal{{$b->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                     <div class="modal-body">
                                         <form action="/updateDoc/{{$b->id}}/doc" method="post" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                             <div class=" mb-3">
                                                 <label  for="exampleFormControlInput1" class="form-label">SPA</label>
                                                 <input type="text" value="{{$b->p_aktivasi_node_id}}" name="p_aktivasi_node_id" id="p_aktivasi_node_id" class="form-control" readonly>
                                             </div>
                                             <div class="form-group mb-3">
                                                 <label  class="form-label">OSP</label>
                                                 <input type="file"  name="file" id="file" class="form-control">
                                             </div>
                                            <div class="form-group mb-3">
                                            <label  class="bmd-label-floating">ISP</label>
                                            <input type="file"  name="isp_path" id="file" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="bmd-label-floating">Lain-lain</label>
                                            <input type="file"  name="lain_path" id="file" class="form-control">
                                        </div> 

                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
                                         </form>
                                     </div>
                                     </div>
                                 </div>
                             </div>
                             @endforeach 

                             


</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" defer></script>
  <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" defer></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




</html>


@endsection
