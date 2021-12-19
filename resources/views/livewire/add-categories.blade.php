<div>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
        <span class="svg-icon svg-icon-2x"></span>
    </div>
    <!--begin::Form-->
    <form class="form"  id="ajoutercategoryModalForm" enctype="multipart/form-data">
        @csrf
        <input name="_token" value="{{csrf_token()}}" hidden>
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_add_customer_header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Ajouter un Category</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div id="ajoutercategoryModalForm_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                    <button type="button" class="btn-close"  id="closaddmodal"  data-bs-dismiss="modal" aria-label="Close" hidden></button>
                    <label class="required fs-6 fw-bold mb-2">Titre </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="nameCategory" value="" />
                </div>
                <div class="fv-row mb-7">
                    <label class="required fs-6 fw-bold mb-2">Description  </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
                    <!--end::Input-->
                </div>
            </div>
            <!--end::Scroll-->
        </div>
        <!--end::Modal body-->
        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" id="ajoutercategoryModalForm_cancel" class="btn btn-light me-3">Discard</button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="ajoutercategoryModalForm_submit" class="btn btn-primary">
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
        const form = document.getElementById('ajoutercategoryModalForm');
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'nameCategory': {
                        validators: {
                            notEmpty: {
                                message: 'champ requis'
                            }
                        }
                    },
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
        const submitButton = document.getElementById('ajoutercategoryModalForm_submit');
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
                            var checkdata = $('#ajoutercategoryModalForm').serialize();
                            console.log()
                            $.ajax({
                                type: 'POST',
                                url:"{{ route('category.store') }}",
                                data: checkdata,
                                success: function(data) {
                                    if(data.success==true)
                                    {
                                        Swal.fire({
                                            text: "Category has been added",
                                            icon: "success",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })
                                        $("#closaddmodal").trigger("click")
                                        Livewire.emit('refreshTable')

                                    }
                                    else Swal.fire({
                                        text: "Category Déja Existe",
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    })
                                }
                            });
                            //
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
        });



    </script>

@endpush
