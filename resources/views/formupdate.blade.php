





                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                            </div>
                                            <div class="modal-body">
                                        @csrf
                                        <div class="mb-3 col-md-5">
                                            <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                                            <input type="hidden" name="c_name"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            <span class="text-danger error-text c_name_error"></span>
                                        </div>
                                        <div class="mb-3 col-md-5">
                                            <label for="exampleFormControlInput1" class="form-label">Bandwidth</label>
                                            <input type="hidden" name="bandwidth"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            <span class="text-danger error-text bandwidth_error"></span>
                                        </div>
                                        <div class="mb-3 col-md-5">
                                            <label for="exampleFormControlInput1" class="form-label">Status</label>
                                            <input type="hidden" name="status" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            <span class="text-danger error-text status_error"></span>
                                        </div>
                                        <div class="mb-3 col-md-5">
                                            <label for="exampleFormControlInput1" class="form-label">Service Id</label>
                                            <input type="hidden" name="service_id"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        <span class="text-danger error-text service_id_error"></span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" id="simpan" class="btn btn_primary">Simpan</button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<script>

    $(document).on('click','.edit',function(){
        let id = $(this).attr('id')
        $('#')
    })



    </script>

</body>

</html>
