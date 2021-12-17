<div>
    @if($editing==true)
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
            <span class="svg-icon svg-icon-2x"></span>
        </div>
        <!--begin::Modal header-->
        <div class="modal-header" id="kt_modal_delete_customer_header">
            <!--begin::Modal title-->

            <h2 class="fw-bolder">ajouter un Auteur</h2>
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
        <div class="modal-body py-10 px-lg-17">
        <div class="scroll h-600px px-5">
            <form wire:submit.prevent="editer_Auteur">

                <div class="fv-row mb-7">
                    <button type="button" class="btn-close"  id="closdeletemodal"  data-bs-dismiss="modal" aria-label="Close" hidden ></button>
                    <label class="required fs-6 fw-bold mb-2">ID Auteur</label>
                    <input id="wah" type="text" class="form-control form-control-solid" placeholder="" wire:model="id_auteur"  disabled />
                </div>
                <div class="fv-row mb-7">
                    <button type="button" class="btn-close"  id="closdeletemodal"  data-bs-dismiss="modal" aria-label="Close" hidden ></button>
                    <label class="required fs-6 fw-bold mb-2">Nom & Prenom</label>
                    <input id="wah" type="text" class="form-control form-control-solid" placeholder="" wire:model="fullname"  />
                </div>
                <div id="kt_modal_delete_customer_billing_info" class="collapse show">

                    <!--begin::Input group-->
                    <div  wire:ignore class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Country</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                        </label>

                        <select class="form-select" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                            @foreach($countries as $country)
                                @if ($country_edit==$country->name)
                                    <option value="{{ $country->name }}" selected>{{ $country->name }}</option>
                                @else
                                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <!--end::Input group-->
                </div>


                <div class="form-group">
                    <label for="eventNote" class="col-form-label">Description</label>
                    <textarea class="form-control"  wire:model="description_edit" id="example-textarea"  rows="4">{!! $data_auteur->description !!}

                </textarea>



                </div>

                <div wire:ignore class="fv-row mb-15">
                    <label class="fs-6 fw-bold mb-2">Description</label>
                    <textarea id="content22" name="content">
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="submit"  value="Editer" class="btn mb-2 btn-primary">
                </div>
            </form>
        </div>
        </div>
    @endif
</div>
@push('custom-scripts')
    <script>
        window.addEventListener('changetext', event => {
            tinymce.get('content22').setContent("your string goes here 2....");
        });

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

    </script>
@endpush
