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
        <video width="100%" height="100%" id="login_qr_code"></video>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>
@push('scripts')
    <script>

        let scanner = new Instascan.Scanner({ video: document.getElementById('login_qr_code') });
        var statusQR=false
        var idQr = 0;
        $('#qrCodeAdmin').on('shown.bs.modal', function(e) {
            console.log('enter')
            let scanner = new Instascan.Scanner({ video: document.getElementById('login_qr_code') });
            scanner.addListener('scan', function (content) {
                statusQR=true
                idQr=content
                $('#qrCodeAdmin').modal('hide');
                scanner.stop()
                $.ajax({
                    type: "post",
                    url:"{{ route('login.LoginWithQr') }}",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'id':idQr,
                    },
                    success: function (response) {
                        if(response.success==false){
                            Swal.fire({
                                    text:"Utilisateur n'existe pas .",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"Ok, got it!"
                                    ,customClass:{
                                        confirmButton:"btn btn-primary"}
                                }
                            )
                        }

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
        $('#qrCodeAdmin').on('hidden.bs.modal', function(e) {
            console.log('close')
        })

        const admin_login = document.getElementById('admin_login');

        if(statusQR){
            console.log('hamdollilah')
            console.log(idQr);

        }



    </script>
@endpush
