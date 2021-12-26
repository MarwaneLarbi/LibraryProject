<div>
    <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>

        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <span class="svg-icon svg-icon-2x"></span>
        </div>
        <!--end::Close-->
    </div>

    <div class="modal-body">
        <video width="100%" height="100%" id="preview"></video>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>

</div>

@push('custom-scripts')
    <script>

        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        var statusQR=false
        var idQr = 0;
        $('#qrCodeAbonne').on('shown.bs.modal', function(e) {
            console.log('enter')
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
            scanner.addListener('scan', function (content) {
                statusQR=true
                idQr=content
                $('#qrCodeAbonne').modal('hide');
                scanner.stop()
                $.ajax({
                    type: "post",
                    url:"{{ route('qrCode.check') }}",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'id':idQr,
                    },
                    success: function (response) {
                    if(response.success==true){
                        window.location.reload();
                    }
                    else {
                        Swal.fire({
                            text:"this user has not been Deleted!.",
                            icon:"error",
                            buttonsStyling:!1,
                            confirmButtonText:"Ok, got it!"
                            ,customClass:{
                                    confirmButton:"btn btn-primary"}
                            }
                        )}
                    }

                });
                scanner.stop()
            });
            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);

                } else {
                    console.error('No cameras found.');
                }
            }).catch(function (e) {
                console.error(e);
            });
        })
        $('#qrCodeAbonne').on('hidden.bs.modal', function(e) {
            console.log('close')
        })
        const abonneQrcode = document.getElementById('abonneQrcode');

        abonneQrcode.addEventListener('click', function (e) {
            $('#qrCodeAbonne').modal('show');

        });
        if(statusQR){
            console.log('hamdollilah')
            console.log(idQr);

        }



    </script>
@endpush
