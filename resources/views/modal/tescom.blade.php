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