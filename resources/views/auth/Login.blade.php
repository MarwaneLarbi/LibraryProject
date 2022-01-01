@extends('Layouts.Auth')
@section('form')
    <form class="form w-100" id="kt_sign_in_form" action="{{ route("auth.check") }}" method="post">
    @csrf
    <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-primary mb-3">Connectez-vous </h1>
            <!--end::Title-->

        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark required">ID</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid"  data-fv-string-length___message="Numéro d'identité Incorrect"
                   minlength="9"
                   maxlength="9"
                   type="text" name="user_id" autocomplete="off" />

            <!--end::Input-->
        </div>
        <div class="fv-row mb-10">
            <div class="d-flex flex-stack mb-2">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6 mb-0 required">Password</label>
                <!--end::Label-->
                <!--begin::Link-->
                <a href="http://localhost:8000/ForgetPassword" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                <!--end::Link-->
            </div>
            <input class="form-control form-control-lg form-control-solid"

                   type="password" name="password" autocomplete="off" />

            <!--end::Input-->
        </div>

        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Continue</span>
                <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Submit button-->
            <!--begin::Separator-->
        </div>
        <!--end::Actions-->
    </form>
    <a  id="admin_login" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
        <img alt="Logo" src="assets/media/svg/brand-logos/qrcodelogo.png" class="h-20px me-3">Continue with QR Code</a>



    <div class="modal fade" id="qrCodeAdmin">
        <div class="modal-dialog">
            <div class="modal-content">
                @livewire('qr-code-login')

            </div>
        </div>
    </div>
<script>

    admin_login.addEventListener('click', function (e) {
        $('#qrCodeAdmin').modal('show');

    });
</script>
@endsection
