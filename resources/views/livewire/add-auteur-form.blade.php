<div>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
        <span class="svg-icon svg-icon-2x"></span>
    </div>
    <!--begin::Form-->
    <form class="form"  id="kt_modal_add_auteur_form" method="post"  action="{{ route('AddAuteurForm.store') }}" enctype="multipart/form-data">
        @csrf
            <input name="_token" value="{{csrf_token()}}" hidden>
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
            <h2 class="fw-bolder">ajouter un Auteur</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
            <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
							</svg>
							</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <button type="button" class="btn-close"  id="closaddauteurmodal"  data-bs-dismiss="modal" aria-label="Close" hidden></button>

                                <label class="required fs-6 fw-bold mb-2">Nom & Prenom</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="fullname" value="" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <div id="kt_modal_add_customer_billing_info" class="collapse show">

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Country</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                    </label>
                                    <!--end::Label-->
                                    <select id="select14" name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid fw-bolder">
                                        @foreach($countries as $country)
                                            <option value="{{$country->name}}"> {{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    <!--begin::Input-->
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="fv-row mb-15">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Photo d'auteur</label>
                                    <input class="form-control" type="file" id="formFile" name="photo">
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-15">
                                <label class="fs-6 fw-bold mb-2">Description</label>
                                    <textarea id="content" name="content"></textarea>
                            </div>


                            <!--end::Billing form-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
            </div>
                    <!--end::Modal footer-->
    </form>
                <!--end::Form-->

</div>
@push('custom-scripts')
    <script>
        const kt_modal_add_auteur_form = document.getElementById('kt_modal_add_auteur_form');
        var validator_add_auteur = FormValidation.formValidation(
            kt_modal_add_auteur_form,
            {
                fields: {
                    'fullname': {
                        validators: {
                            notEmpty: {
                                message: "auteur name is required"
                            }
                        }
                    },
                    'photo': {
                        validators: {
                            notEmpty: {
                                message: "auteur name is required"
                            }
                        }
                    },
                },


                plugins: {
                    declarative: new FormValidation.plugins.Declarative({
                        html5Input: true,

                    }),
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
        $(function (){
            $('#kt_modal_add_auteur_form').on('submit',function (e){
                e.preventDefault();
                var form = this;
                data_auteur=new FormData(form)
                // Validate form before submit
                if (validator_add_auteur) {
                    validator_add_auteur.validate().then(function (status) {
                        console.log('validated!');
                        if (status == 'Valid') {
                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function () {

                                $.ajax({
                                    url:$(form).attr('action'),
                                    method:$(form).attr('method'),
                                    data:data_auteur,
                                    processData:false,
                                    dataType:'json',
                                    contentType:false,
                                    success:function(response){

                                        if(response.success==true)
                                        {
                                            Livewire.emit('refreshAuteurTable')
                                            $("#closaddauteurmodal").trigger("click")
                                            $( '#kt_modal_add_auteur_form' ).each(function(){
                                                this.reset();
                                            });

                                        }
                                        else {
                                            Swal.fire({
                                                text: "Auteur Déja Existe",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                }
                                            })
                                        }

                                    }

                                });
                            }, 2000);
                        }
                        else {
                            Swal.fire({
                                    text:"Désolé, il semble qu'il y ait des erreurs détectées, veuillez réessayer",icon:"warning",buttonsStyling:!1,confirmButtonText:"ok !",customClass:{
                                        confirmButton:"btn btn-primary"}
                                }
                            )
                        }
                    });
                }


            })
        })
        tinymce.init({
            selector: "#content",
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            },
            menubar: false,
            toolbar: ["styleselect fontselect fontsizeselect",
                "undo redo |  alignleft aligncenter alignright alignjustify | bold italic forecolor backcolor   | cut copy paste",
                "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  link image code"],
            plugins : "advlist autolink link image lists charmap print preview code"
        });





    </script>

@endpush
@section('script')
    <script>


    </script>

@endsection
