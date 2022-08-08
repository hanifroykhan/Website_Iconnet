@extends('template')
@section('content')
<br>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">


                                <div class="card-header card-header-primary mb-4">
                                    <h4 class="card-title ">Detail Item</h4>
                                    <p class="card-category">Rangkuman Detail Dari Item</p>
                                </div>


                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">

                                            <tbody>

                                                <tr>
                                                    <td>Project Activation Node ID</td>
                                                    <td>{{$data[0]->p_aktivasi_node_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Activation Request ID</td>
                                                    <td>{{$data[0]->a_request_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Customer Name</td>
                                                    <td>{{$data[0]->c_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Bandwidth (Project Activation) (Project Activation)</td>
                                                    <td>{{$data[0]->bandwidth}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>{{$data[0]->status}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Service ID</td>
                                                    <td>{{$data[0]-> service_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>IO Number </td>
                                                    <td>{{$data[0]->io_number}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>{{$data[0]->address}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Created On</td>
                                                    <td>
                                                        {{date('d F Y',strtotime($data[0]->create_on))}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BAI Date</td>
                                                    <td>{{$data[0]->bai_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Duration</td>
                                                    <td>{{$data[0]->total_duration}}</td>
                                                </tr>
                                                <tr>
                                                    <td>WEEK PA DITERIMA</td>
                                                    <td>{{$data[0]-> week_pa_diterima}}</td>
                                                </tr>
                                                <tr>
                                                    <td>WEEK PA CLOSE</td>
                                                    <td>{{$data[0]->week_pa_close}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TAHUN PA DITERIMA</td>
                                                    <td>{{$data[0]-> tahun_pa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TAHUN PA CLOSE</td>
                                                    <td>{{$data[0]->tahun_pa_close}}</td>
                                                </tr>
                                                <tr>
                                                    <td>LOKASI</td>
                                                    <td>{{$data[0]->lokasi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KELURAHAN</td>
                                                    <td>{{$data[0]->kelurahan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KECAMATAN</td>
                                                    <td>{{$data[0]->kecamatan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KLASIFIKASI PA</td>
                                                    <td>{{$data[0]->klasifikasi_pa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>MITRA FEEDER</td>
                                                    <td>{{$data[0]->mitra_feeder}}</td>
                                                </tr>
                                                <tr>
                                                    <td>MITRA</td>
                                                    <td>{{$data[0]->mitra}}</td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS PA</td>
                                                    <td>{{$data[0]->status_pa}}</td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS PA OPEN</td>
                                                    <td>{{$data[0]->status_pa_opend}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KETERANGAN</td>
                                                    <td>{{$data[0]->keterangan}}</td>
                                                </tr>
                                                <tr>
                                                    <td>FAT/ODP</td>
                                                    <td>{{$data[0]->fat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PORT FAT</td>
                                                    <td>{{$data[0]->port_fat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>KOORDINAT FAT/ODP</td>
                                                    <td>{{$data[0]->koordinat}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SN ONT</td>
                                                    <td>{{$data[0]->sn_ont}}</td>
                                                </tr>
                                                <tr>
                                                    <td>OLT</td>
                                                    <td>{{$data[0]->olt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PORT OLT</td>
                                                    <td>{{$data[0]->port_olt}}</td>
                                                </tr>
                                                <tr>
                                                    <td>RESERVASI ONT</td>
                                                    <td>{{$data[0]->reservasi_ont}}</td>
                                                </tr>
                                                <tr>
                                                    <td>TYPE ONT</td>
                                                    <td>{{$data[0]->type_ont}}</td>
                                                </tr>
                                                <tr>
                                                    <td>ADD ON TV</td>
                                                    <td>{{$data[0]->add_on_tv}}</td>
                                                </tr>
                                                <tr>
                                                    <td>STATUS</td>
                                                    <td>{{$data[0]->status1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SN STB</td>
                                                    <td>{{$data[0]->sn_stb}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Aging</td>
                                                    <td>{{$data[0]->aging}}</td>
                                                </tr>
                                                <tr>
                                                    <td>RAB</td>
                                                    <td>{{$data[0]->rab}}</td>
                                                </tr>
                                                <tr>
                                                    <td>ALOKASI KABEL</td>
                                                    <td>{{$data[0]->alokasi_kabel}}</td>
                                                </tr>
                                                <tr>
                                                    <td>PANJANG FEEDER</td>
                                                    <td>{{$data[0]-> panjang_feeder}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SC PROJECT BASED</td>
                                                    <td>{{$data[0]->sc_project}}</td>
                                                </tr>
                                                <tr>
                                                    <td>REASON</td>
                                                    <td>{{$data[0]->reason}}</td>
                                                </tr>
                                                <tr>
                                                    <td>START DATE</td>
                                                    <td>{{$data[0]->start_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>END DATE</td>
                                                    <td>{{$data[0]->end_date}}</td>
                                                </tr>
                                                <tr>
                                                    <td>DURASI</td>
                                                    <td>{{$data[0]->durasi}}</td>
                                                </tr>
                                                <tr>
                                                    <td>AGING - SC</td>
                                                    <td>{{$data[0]->aging_sc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>NEED SC</td>
                                                    <td>{{$data[0]->need_sc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Reason</td>
                                                    <td>{{$data[0]->reason1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Aging After SC</td>
                                                    <td>{{$data[0]->aging_after_sc}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Start Date</td>
                                                    <td>{{$data[0]->start_date1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Endate</td>
                                                    <td>{{$data[0]-> end_date1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>SC SPKK</td>
                                                    <td>{{$data[0]->sc_spkk}}</td>
                                                </tr>
                                                <tr>
                                                    <td>FINAL AGING SPKK</td>
                                                    <td>{{$data[0]->final_aging}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Create</td>
                                                    <td>{{$data[0]->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Update</td>
                                                    <td>{{$data[0]->updated_at}}</td>
                                                </tr>




                                            </tbody>
                                        </table>
                                    </div>
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
