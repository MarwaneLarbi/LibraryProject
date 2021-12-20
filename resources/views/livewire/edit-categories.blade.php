<div>
    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
        <span class="svg-icon svg-icon-2x"></span>
    </div>
    <form class="form"  id="EditCategoryForm"  enctype="multipart/form-data">
        @csrf
        <input name="_token" value="{{csrf_token()}}" hidden>
        <div class="modal-header" id="kt_modal_editer_category_header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Editer  Category</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div id="kt_modal_editer_category_close"  class="btn btn-icon btn-sm btn-active-icon-primary">
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
        <button type="button" class="btn-close"  id="closeeditmodal"  data-bs-dismiss="modal" aria-label="Close" hidden ></button>

        <div class="modal-body py-10 px-lg-17">
            <!--begin::Scroll-->
            <div class="scroll-y me-n7 pe-7" id="kt_modal_editer_category_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_delete_customer_header" data-kt-scroll-wrappers="#kt_modal_delete_customer_scroll" data-kt-scroll-offset="300px">
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <button type="button" class="btn-close"  id="closdeletemodal"  data-bs-dismiss="modal" aria-label="Close" hidden ></button>
                    <label class="required fs-6 fw-bold mb-2">ID Category</label>
                    <input id="id_category" type="text" class="form-control form-control-solid" placeholder="" name="id_category"  readonly />
                </div>
                <div class="fv-row mb-7">
                    <label class="required fs-6 fw-bold mb-2">Category </label>
                    <input id="name_category" type="text" class="form-control form-control-solid" placeholder=""  name="name_category" />
                </div>
                <div class="fv-row mb-7">
                    <label class="required fs-6 fw-bold mb-2">Description  </label>
                    <textarea   class="form-control" id="description_category" rows="5" name="description_category"></textarea>
                    <!--end::Input-->
                </div>
            </div>
        </div>
        <div class="modal-footer flex-center">
            <button type="reset" id="kt_modal_editer_category_cancel" class="btn btn-light me-3">Discard</button>
            <button type="submit" id="EditCategoryButtonSubmit" class="btn btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>


</div>
@push('custom-scripts')
    <script>

        $("#kt_modal_editer_category_close").click(function(t){

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
        $("#kt_modal_editer_category_cancel").click(function(t){
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
        const form2 = document.getElementById('EditCategoryForm');
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator2 = FormValidation.formValidation(
            form2,
            {
                fields: {
                    'name_category': {
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
        const submitButton2 = document.getElementById('EditCategoryButtonSubmit');
        submitButton2.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();
            // Validate form before submit
            if (validator2) {
                validator2.validate().then(function (status) {
                    console.log('validated!');
                    if (status == 'Valid') {
                        // Show loading indication
                        submitButton2.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        submitButton2.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton2.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton2.disabled = false;

                            // Show popup confirmation

                            //form.submit(); // Submit form
                            var checkdata = $('#EditCategoryForm').serialize();
                            console.log()
                            $.ajax({
                                type: 'POST',
                                url:"{{ route('category.upadate') }}",
                                data: checkdata,
                                success: function(data) {
                                    console.log(data)
                                    if(data.success){
                                        Swal.fire({
                                            text: "Category has been Updeted",
                                            icon: "success",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })
                                        $("#closeeditmodal").trigger("click")
                                        Livewire.emit('refreshTableCategory')
                                    }
                                    else if(data.status==404){
                                        Swal.fire({
                                            text: "Aucune Modification detected",
                                            icon: "warning",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })
                                    }
                                    else if(data.status==505){
                                        Swal.fire({
                                            text: "Category Déja Existe",
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
                            //
                        },1000);
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
