<div>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
        <span class="svg-icon svg-icon-2x"></span>
    </div>
    <!--begin::Form-->

    <form class="form"  id="EditAuteurForm"  method="post" action="{{ route('EditerAuteur.store') }}" enctype="multipart/form-data">
        @csrf
        <input name="_token" value="{{csrf_token()}}" hidden>
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_delete_customer_header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Editer  Auteur</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div id="kt_modal_delete_auteur_close"  class="btn btn-icon btn-sm btn-active-icon-primary">
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
            <div class="scroll-y me-n7 pe-7" id="kt_modal_delete_auteur_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_delete_customer_header" data-kt-scroll-wrappers="#kt_modal_delete_customer_scroll" data-kt-scroll-offset="300px">
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <button type="button" class="btn-close"  id="closeeditauteurmodal"  data-bs-dismiss="modal" aria-label="Close" hidden ></button>
                    <label class="required fs-6 fw-bold mb-2">ID Auteur</label>
                    <input id="id_auteur" type="text" class="form-control form-control-solid" placeholder="" name="id_auteur"  readonly />
                </div>
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <button type="button" class="btn-close"  id="closdeletemodal"  data-bs-dismiss="modal" aria-label="Close" hidden ></button>

                    <label class="required fs-6 fw-bold mb-2">Nom & Prenom</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="fullname" type="text" class="form-control form-control-solid" placeholder=""  name="fullname_edit" />

                    <!--end::Input-->
                </div>

                <!--end::Input group-->
                <div id="kt_modal_delete_customer_billing_info" class="collapse show">

                    <!--begin::Input group-->
                    <div   class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Country</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                        </label>

                        <select id="selectCountry" class="form-select"  name="country_edit"  data-placeholder="Select an option">

                            @foreach($countries as $country)
                                @if ($country->name=='Algeria')
                                    <option value="{{ $country->name }}" selected>{{ $country->name }}</option>
                                @else
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endif
                            @endforeach
                        </select>

                    </div>
                    <!--end::Input group-->
                </div>

                <div class="fv-row mb-15">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo d'auteur</label>
                        <input class="form-control" type="file" id="formFile" name="edit_auteur_photo">
                        <a target="_blank" id="lastpic" href="{{ URL::to('/') }}/images/stackoverflow.png"> ancien photo</a>
                    <img src="" id="auteur_editer_img" width="420px">
                    </div>
                </div>

                <!--begin::Input group-->
                <div class="fv-row mb-15">
                    <label class="fs-6 fw-bold mb-2">Description</label>
                    <textarea id="content22" name="description_edit">
                    </textarea>
                </div>
                <!--end::Billing form-->
            </div>
            <!--end::Scroll-->
        </div>
        <!--end::Modal body-->
        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" id="kt_modal_delete_auteur_cancel" class="btn btn-light me-3">Discard</button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="EditAuteurButtonSubmit" class="btn btn-primary">
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



        $("#kt_modal_delete_auteur_close").click(function(t){

            t.preventDefault(),Swal.fire( {
                    text:"Are you sure you would like to cancel?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                        confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                }
            ).then((function(t){
                    t.value?($("#closdeletemodal").trigger("click")):"cancel"===t.dismiss&&Swal.fire({
                            text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                confirmButton:"btn btn-primary"}
                        }
                    )}
            ))}
        );
        $("#kt_modal_delete_auteur_cancel").click(function(t){
                t.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to cancel?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?($("#closdeletemodal").trigger("click")):"cancel"===Swal.fire({
                                text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                    confirmButton:"btn btn-primary"}
                            }
                        )}
                ))

            }
        );

        tinymce.init({
            selector: "#content22",
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

        // Define form element
        const EditAuteurForm = document.getElementById('EditAuteurForm');
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator_EditAuteurForm = FormValidation.formValidation(
            EditAuteurForm,
            {
                fields: {
                    'fullname_edit': {
                        validators: {
                            notEmpty: {
                                message: 'champ requis'
                            }
                        }
                    },
                    'country_edit':{
                        validators:{
                            notEmpty:{
                                message:"champ requis"}}},
                },

                plugins: {
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
            $('#EditAuteurForm').on('submit',function (e){
                e.preventDefault();
                var form = this;
                data_auteur=new FormData(form)
                // Validate form before submit
                if (validator_EditAuteurForm) {
                    validator_EditAuteurForm.validate().then(function (status) {
                        if (status == 'Valid') {
                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function () {
                                console.log('validated!');

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
                                            $("#closeeditauteurmodal").trigger("click")

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


      /*  // Submit button handler
        const submitButton = document.getElementById('EditAuteurButtonSubmit');
        submitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();
            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');
                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation

                            //form.submit(); // Submit form
                            var checkdata = $('#EditAuteurForm').serialize();
                            $.ajax({
                                type: 'POST',
                                data: checkdata,
                                success: function(data) {
                                    if(data.status==200){
                                        console.log(data.message)

                                        var data = $('#EditAuteurForm').serialize();

                                        $.ajax({
                                            type:'post',
                                            url:"{{ route('EditerAuteur.store') }}",
                                            data:data,
                                            beforeSend:function(data){

                                            },
                                            success:function (data){
                                                if(data.status==200){
                                                    Swal.fire({
                                                        text: "Form has been successfully submitted!",
                                                        icon: "success",
                                                        buttonsStyling: false,
                                                        confirmButtonText: "Ok, got it!",
                                                        customClass: {
                                                            confirmButton: "btn btn-primary"
                                                        }
                                                    });
                                                    $("#closdeletemodal").trigger("click")
                                                    Livewire.emit('refreshTable')

                                                }
                                            },
                                            error:function (reject){

                                            }
                                        });

                                    }
                                    else if(data.status==404){
                                        console.log(data.message)
                                        Swal.fire({
                                            text: data.message,
                                            icon: "warning",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        });
                                    }
                                    else if(data.status==505) {
                                        console.log(data.message)
                                        Swal.fire({
                                            text: data.message,
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        });
                                    }

                                }
                            });
                            //
                        }, 2000);
                    }
                    else {
                        Swal.fire({
                                text:"Désolé, il semble qu'il y ait des erreurs détectées, veuillez réessayer",icon:"error",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                                    confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                            }
                        )
                    }
                });
            }
        });
*/
    </script>
@endpush
@section('script')
    <script>

    </script>

@endsection
