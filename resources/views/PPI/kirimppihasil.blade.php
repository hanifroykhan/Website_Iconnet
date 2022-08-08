@extends('template')
@section('content')
<head>
    <style>
      form {
        width: 500px;
        margin: auto;
        margin-bottom: 30px;

      }
      input {
        padding: 4px 10px;
        border: 0px solid silver;
        font-size: 16px;

      }

      /* .btn {
        background-color: #00a6ff;
        border: none;
        color: white;
        padding: 8px;
        text-align: right;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: right;
      } */

      .divider{
        width:20px;
        height:auto;
        display:inline-block;
     }

     .divider2{
        width:auto;
        height:10px;
        display:inline-block;
     }

     .rcorner {
        border-radius: 10px;
        border: 2px solid silver;
        padding: 10px;
        width: 400px;
        margin: 2px;

     }
     .center{
         margin-left: auto;
         margin-right: right;
     }




      </style>
        <div class="content">
            <div class="container col-md-7 justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Hasil Cari</h4>
                                <p class="card-category">Hasil Dari Pencarian PPI</p>
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

                                    <table>
                                        <tr><td style="width:100px;">SPA</td><td><b>:</b></td><td>{{$data[0]->p_aktivasi_node_id}}</td></tr>
                                        <tr><td style="width:100px;">Service ID</td><td><b>:</b></td><td>{{$data[0]->service_id}}</td></tr>
                                        <tr><td style="width:100px;">Nama</td><td><b>:</b></td><td>{{$data[0]->c_name}}</td></tr>
                                        <tr><td style="width:100px;">Alamat</td><td><b>:</b></td><td>{{$data[0]->address}}</td></tr>
                                        <tr><td style="width:100px;">Layanan</td><td><b>:</b></td><td>Iconnet {{$data[0]->bandwidth}}</td></tr>
                                        <tr><td style="width:100px;">Koordinat</td><td><b>:</b></td><td>{{$data[0]->koordinat}}</td></tr>
                                    </table>
                                </div>
                                <hr>
                                
                                <form action="/mail" method="post">
                                    {{ csrf_field() }}
                                    
                                    <input type="text" name="spa" value="{{$data[0]->p_aktivasi_node_id}}" class="form-control" readonly>
                                   

                                       
                                                    <label class="bmd-label-floating">Pilih Vendor</label>
                                                    <select class="custom-select" name="nama_mitra">
                                                        @foreach($vendor as $ven)
                                                        <option value="{{$ven->nama_mitra}}">{{$ven->nama_mitra}}</option>
                                                        @endforeach
                                                    </select>
                                                
                                        
                                    <table width="500px">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Penanggung Jawab</label>
                                                        <input type="text" name="penang" class="form-control" placeholder="Masukkan Nama Penanggung jawab">
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Masukan Nama PLT</label>
                                                        <input type="text" name="plt" class="form-control" placeholder="Masukkan Nama PLT">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Target Tescomm</label>
                                                        <input type="date" name="target_tescom" class="form-control" placeholder="Masukkan Tanggal">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Target Submit Dokumen</label>
                                                        <input type="date" name="target_dok" class="form-control" placeholder="Masukkan Tanggal">
                                                    </div>

                                                </td>
                                            </tr>
                                    </table>
                                            <!-- <div class="table-responsive">
                                            <table style="width: 500px;margin:auto">
                                            <tr><td>WO</td> <td>Joint</td><td>LaporanDok</td></tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="wo" class="custom-select">
                                                            <option value="√">√</option>
                                                            <option value="-">--</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="join" class="custom-select">
                                                            <option value="√">√</option>
                                                            <option value="-">--</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="laporan" class="custom-select">
                                                            <option value="√">√</option>
                                                            <option value="-">--</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Ijin
                                                </td>
                                                <td>
                                                    Test
                                                </td>
                                                <td>
                                                    BAPS
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="ijin" class="custom-select">
                                                            <option value="√">√</option>
                                                            <option value="-">--</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="test" class="custom-select">
                                                            <option value="√">√</option>
                                                            <option value="-">--</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="baps" class="custom-select">
                                                            <option value="√">√</option>
                                                            <option value="-">--</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table> -->
                                        <!-- <button class="btn" style="width:85px;float:center;bottom:10px" type="button" data-toggle="modal" data-target="#sendBTN">
                                             <span class="btn-inner--icon"><i class="ni ni-email-83"></i></span>
                                             <span class="btn-inner--text">Next</span>
                                         </button> -->
                                         <br>
                                         <br>
                                         <br>
                                         
                                         <a href="/kirimppi" class="btn btn-secondary" >&laquo;Return</a>
                                         <a href="" class="btn btn-success"data-toggle="modal" data-target="#sendBTN" style="right:8px ;" >Next&raquo;</a>
                          
                                    </div>
                                
                           
                                    <div class="modal fade" id="sendBTN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="container">
                                                <div class="modal-header">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">To</label>
                                                        <input type="text"  name="mail1" id="f1" class="form-control"  placeholder="Masukkan Email Yang Akan Dikirim">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">CC</label>
                                                        <input type="text"  name="mail2" id="f2" class="form-control"  placeholder="Masukkan Email Yang Akan Dikirim">
                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="left:25px">CLOSE</button>
                                                        <button type="submit" class="btn btn-info" id="both" style="left:20px ;"><i class="ni ni-send" >&nbsp;SEND</i></button>
                                                       
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
<script>
$(document).ready(function(){
    $("#both").click(function(){
        document.getElementById("f1").submit();
        document.getElementById("f2").submit();
     
        
    });

});


// $('#myForm').submit(function(){
//     $('input[name="mail3"]').prop('disabled', true);
// });

</script>


</html>
@endsection
