<div>

    <div class="position-relative start-50 translate-middle-x">
        <h1> Mots Clés</h1>
    </div>
    <div class="card-header border-0 pt-6"  >
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-customer-table-filter="search"  wire:model="searchTags" class="form-control form-control-solid w-250px ps-15" placeholder="Search " />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="basetags">
                <!--begin::Add customer-->
                <button type="button" class="btn btn-primary btn-xl" data-bs-toggle="modal" data-bs-target="#ajouterTagsModal">Ajouter</button>
                <!--end::Add customer-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected_tags">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count_tags"></span> selectedtags
                </div>
                <button type="button" class="btn btn-danger btn-sm" id="delete_all_tags" data-bs-toggle="tooltip" >
                    supprimer
                </button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div class="card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="mot_cles_table">
            <!--begin::Table head-->
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input"  type="checkbox" data-kt-check="true" data-kt-check-target="#mot_cles_table .form-check-input" value="1" />

                    </div>
                </th>
                <th class="min-w-125px text-center">ID</th>
                <th class="min-w-125px text-center">Mot Clé</th>
                <th class="min-w-75px text-center">Nombre des Livres</th>
                <th class="text-end min-w-70px ">Actions</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
            @foreach($tags as $tag)
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="{{$tag->id}}" />
                    </div>
                </td>
                <td class="min-w-125px text-center">{{$tag->id}}</td>
                <td class="min-w-125px text-center">{{$tag->name}}</td>

                <td class="min-w-75px text-center">
                    {{
    DB::table('livre_tag')
                   ->
                   where('tag_id', '=', $tag->id)
                   ->
                   count()
}}
                </td>
                <td class="text-end">
                    <button type="button" value="{{$tag->id}}" class="btn btn-light-danger deletetagsbtn btn-sm">Supprimer</button>
                </td>
            </tr>
            @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
        <!--Start::Pagination=-->
    @if(count($tags))
        {{$tags->links()}}
    @endif
    <!--end::Pagination=-->
    </div>
    <!------>
    <!---Start:Ajouter Modal--->
    <div class="modal fade" id="ajouterTagsModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div    class="modal-dialog modal-xl">
            <div  class="modal-content">
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--begin::Form-->
                <form class="form"  id="ajouterTagsModalForm"   method="post"  action="{{ route('Tags.store') }}" >
                    @csrf
                    <input name="_token" value="{{csrf_token()}}" hidden>
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Ajouter un Mot Clé</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="ajouterTagsModalForm_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                            <div  wire:ignore class="fv-row mb-7">
                                <button type="button" class="btn-close"  id="closeajouterTagsModalForm"  data-bs-dismiss="modal" aria-label="Close" hidden></button>
                                <label class="required fs-6 fw-bold mb-2">Mots Clés </label>
                                <input class="form-control form-control" name="tags_name" value="" id="addTags"/>


                            </div>
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="ajouterTagsModalForm_cancel" class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="ajouterTagsModalForm_submit" class="btn btn-primary">
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
        </div>
    </div>
    <!---end:Ajouter Modal--->
    <!---Start:Modify Modal--->

    <div class="modal fade" id="modifierTagsModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div    class="modal-dialog modal-xl">
            <div  class="modal-content">
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close_btn" hidden data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--begin::Form-->
                <form class="form"  id="modifierTagsModalForm" enctype="multipart/form-data">
                    @csrf
                    <input name="_token" value="{{csrf_token()}}" hidden>
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Ajouter un Mot Clé</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div id="modifierTagsModal_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
                                <button type="button" class="btn-close"  id="closemodifierTagsModal"  data-bs-dismiss="modal" aria-label="Close" hidden></button>
                                <label class="required fs-6 fw-bold mb-2">Titre </label>
                                <input type="text" class="form-control form-control-solid" placeholder="" name="nameCategory" value="" />
                            </div>
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="modifierTagsModal_cancel" class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button  id="modifierTagsModal_submit" class="btn btn-primary">
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
        </div>
    </div>
    <script>

        const container_tags = document.querySelector('#mot_cles_table');
        const checkboxes_tags = container_tags.querySelectorAll('[type="checkbox"]');
        checkboxes_tags.forEach(c => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });
        function toggleToolbars(){
            const container = document.querySelector('#mot_cles_table');
            const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="basetags"]');
            const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected_tags"]');
            const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count_tags"]');
            const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');
            let checkedState = false;
            let count = 0;
            allCheckboxes.forEach(c => {
                if (c.checked) {
                    checkedState = true;
                    count++;
                }
            });
            // Toggle toolbars
            if (checkedState) {
                selectedCount.innerHTML = count;
                toolbarBase.classList.add('d-none');
                toolbarSelected.classList.remove('d-none');
            } else {
                toolbarBase.classList.remove('d-none');
                toolbarSelected.classList.add('d-none');
            }}
        const delete_all_tags = document.getElementById('delete_all_tags');
        delete_all_tags.addEventListener('click', function (e) {
            const allCheckboxes = container_tags.querySelectorAll('tbody [type="checkbox"]');
            e.preventDefault(),Swal.fire({
                    text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                        confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                }
            ).then((function(t){
                    t.value?(

                        allCheckboxes.forEach(c => {
                            if (c.checked) {
                                console.log(c.value)
                                $.ajax({
                                    type: "post",
                                    url:"{{ route('tags.deleteselected') }}",
                                    data:{
                                        '_token':"{{csrf_token()}}",
                                        'id':c.value,
                                    },
                                    success: function (response) {
                                        Livewire.emit('refreshTableTags')
                                    }
                                });
                            }
                        })
                    ):"cancel"===Swal.fire({
                            text:"this user has not been Deleted!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                confirmButton:"btn btn-primary"}
                        }
                    )}
            ))


        });

    </script>
    <!---end:Modify Modal--->
</div>
@push('custom-scripts')
    <script>

        $("#ajouterTagsModalForm_close").click(function(t){

            t.preventDefault(),Swal.fire( {
                    text:"Are you sure you would like to cancel?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                        confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                }
            ).then((function(t){
                    t.value?($("#closeajouterTagsModalForm").trigger("click")):"cancel"===t.dismiss&&Swal.fire({
                            text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                confirmButton:"btn btn-primary"}
                        }
                    )}
            ))}
        );
        $("#ajouterTagsModalForm_cancel").click(function(t){
                t.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to cancel?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, cancel it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?($("#closeajouterTagsModalForm").trigger("click")):"cancel"===Swal.fire({
                                text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                    confirmButton:"btn btn-primary"}
                            }
                        )}
                ))

            }
        );
        var x = [];

        var input = document.querySelector("#addTags");
        tagify=new Tagify(input, {
            delimiter: ',',
            whitelist:[],
        }).on('add', function(e, tagName){
            x.push(e['detail'].data.value);
        });



        const form1= document.getElementById('ajouterTagsModalForm');
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var validator1 = FormValidation.formValidation(
            form1,
            {
                fields: {
                    'tags_name': {
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

        $(function (){
            $('#ajouterTagsModalForm').on('submit',function (e){
                e.preventDefault();
                console.log("heelooooo")
                var form = this;
                var data =new FormData(form);
                data.append("tags", x);

                if (validator1) {
                    validator1.validate().then(function (status) {
                        console.log('validated!');
                        if (status == 'Valid') {
                            // Show loading indication

                            setTimeout(function () {
                                $.ajax({
                                    url:$(form).attr('action'),
                                    method:$(form).attr('method'),
                                    data:data,
                                    processData:false,
                                    contentType:false,
                                    success:function(data){
                                        console.log("data send")
                                        if(data.success){
                                            Swal.fire({
                                                text:" tags added",
                                                icon:"success",
                                                buttonsStyling:!1,
                                                confirmButtonText:"Ok, got it!",
                                                customClass:{
                                                        confirmButton:"btn btn-primary"}
                                                }
                                            )
                                            $("#closeajouterTagsModalForm").trigger("click")
                                            tagify.removeAllTags()
                                            Livewire.emit('refreshTableTags')


                                        }
                                         else {
                                            Swal.fire({
                                                    text:" tags already exist",
                                                    icon:"error",
                                                    buttonsStyling:!1,
                                                    confirmButtonText:"Ok, got it!",
                                                    customClass:{
                                                        confirmButton:"btn btn-primary"}
                                                }
                                            )
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

            })
        })

        $(document).on('click', '.deletetagsbtn', function (e) {
                var tasg_id = $(this).val();
                console.log(tasg_id)
                e.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?(
                            $.ajax({
                                type: "GET",
                                url: "/tags/delete/"+tasg_id,
                                success: function (response) {
                                    Swal.fire({
                                            text:" Category has not been Deleted!.",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                                confirmButton:"btn btn-primary"}
                                        }
                                    )
                                    Livewire.emit('refreshTableTags')

                                }
                            })
                        ):"cancel"===Swal.fire({
                                text:"Your Category has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                    confirmButton:"btn btn-primary"}
                            }
                        )}
                ))

            }
        );

    </script>

@endpush
