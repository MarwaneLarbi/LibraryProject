<div>
        <div class="modal fade" id="EditAuteurModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div    class="modal-dialog modal-xl">
            <div  class="modal-content">
                <!--begin::Form-->
                @livewire('editer-auteur')
                <!--end::Form-->
            </div>
        </div>
        </div>
    <div class="card-header border-0 pt-6">
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
                <input type="text" data-kt-customer-table-filter="search"  wire:model="searchTerm" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                <!--begin::Export-->
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                    <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
														<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
														<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
													</svg>
												</span>
                    <!--end::Svg Icon-->Export</button>
                <!--end::Export-->
                <!--begin::Add customer-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Ajouter Auteur</button>
                <!--end::Add customer-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                </div>
                <button type="button"  id="delete_all_auteurs" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                    Supprimer
                </button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
            <!--begin::Table head-->
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input"  type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                    </div>
                </th>
                <th class="min-w-125px">ID</th>
                <th class="min-w-125px">Nom & Prenom</th>
                <th class="min-w-125px">Country</th>
                <th class="min-w-125px">Nombre des Livres</th>
                <th class="min-w-125px">Description</th>
                <th class="text-end min-w-70px">Actions</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
            @foreach($auteurs as $auteur)
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="{{$auteur->id}}" />
                    </div>
                </td>
                <!--end::Checkbox-->
                <!--begin::Name=-->
                <td>
                    <a href="../../demo1/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">{{$auteur->id}}</a>
                </td>
                <!--end::Name=-->
                <!--begin::Email=-->
                <td>
                    <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$auteur->fullname}}</a>
                </td>
                <!--end::Email=-->
                <!--begin::Company=-->
                <td>{{$auteur->country}}</td>
                <!--end::Company=-->
                <!--begin::Payment method=-->
                <td data-filter="mastercard">
                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3" alt="" />**** 7357</td>
                <!--end::Payment method=-->
                <!--begin::Date=-->
                <td>
                    <div class="modal fade" id="descriptionModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div  id="55">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-active-primary" id="afficherDesc"  value="{{$auteur->id}}"  >
                        Afficher la Description
                    </button>
                </td>
                <!--end::Date=-->
                <!--begin::Action=-->
                <td class="text-end">
                    <button type="button" value="{{$auteur->id}}" id="EditAuteurButton" class="btn btn-light-success editbtn btn-sm">Editer</button>
                    <button type="button" value="{{$auteur->id}}" class="btn btn-light-danger deletebtn btn-sm">Supprimer</button>
                    <!--end::Menu-->
                </td>
                <!-- Modal-deleteAuteur  -->
                <!--end::Action=-->
            </tr>
            @endforeach
            </tbody>
            <!--end::Table body-->
        </table>

    @if(count($auteurs))
        {{$auteurs->links()}}
    @endif
        </div>
    <!--end::Table-->
    </div>

<script>
    const submitButton4 = document.getElementById('delete_all_auteurs');
    submitButton4.addEventListener('click', function (e) {
        const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');
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
                                url:"{{ route('auteur.deleteselected') }}",
                                data:{
                                    '_token':"{{csrf_token()}}",
                                    'id':c.value,
                                },
                                success: function (response) {
                                    Livewire.emit('refreshTable')
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
</div>
@push('custom-scripts')
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script>
    $(document).on('click', '#afficherDesc', function (e) {
            e.preventDefault();
            var category_id = $(this).val();
            console.log(category_id);

            $('#descriptionModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/auteurs/description/"+category_id,
                success: function (response) {
                    console.log(response);

                    document.getElementById("55").innerHTML = response.description;


                }
            });
        }
    );

        // Toggle selected action toolbar
        // Select all checkboxes
        const container = document.querySelector('#kt_customers_table');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');

        // Select elements
        const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');

        // Toggle delete selected toolbar
        checkboxes.forEach(c => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });
    function toggleToolbars(){
    const container = document.querySelector('#kt_customers_table');
    const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
    const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
    const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');
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



    $("#selectCountry").select2({
        width: 'resolve' // need to override the changed default
    });


function selectcountry(k){
    var value = k;
    $('#selectCountry').val(value);
    $('#selectCountry').select2().trigger('change');

    }
    $(document).on('click', '.editbtn', function (e) {
            e.preventDefault();
            var auteur_id = $(this).val();
            $('#EditAuteurModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/auteurs/edit/"+auteur_id,
                success: function (response) {
                    if (response.status == 404) {
                        console.log(response);

                        /*                        $('#success_message').addClass('alert alert-success');
                                                $('#success_message').text(response.message);
                                                $('#editeauteur').modal('hide');*/
                    } else {
                        (response.student.description==null)? tinymce.get('content22').setContent(''): tinymce.get('content22').setContent(response.student.description);
                        $('#id_auteur').val(response.student.id);
                        $('#fullname').val(response.student.fullname);
                        selectcountry(response.student.country)
                    }
                }
            });
            $('.btn-close').find('input').val('');
    }
    );

    window.addEventListener('showeditModel', event => {
        $('#EditAuteurModal').modal('show');
    });
    window.addEventListener('hideeditModel', event => {
        $('#EditAuteurModal').modal('hide');
        $('.modal').modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        livewire.emit('forcedCloseModal');
    });
    window.addEventListener('changetext', event => {
        tinymce.get('content22').setContent("{{$auteur}}");
    });
    //delete script

        $(document).on('click', '.deletebtn', function (e) {
                var auteur_id = $(this).val();
                e.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?(
                            $.ajax({
                                type: "GET",
                                url: "/auteurs/delete/"+auteur_id,
                                success: function (response) {
                                    Swal.fire({
                                            text:" Auteur has not been Deleted!.",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                                confirmButton:"btn btn-primary"}
                                        }
                                    )
                                    Livewire.emit('refreshTable')

                                }
                            })
                            ):"cancel"===Swal.fire({
                                text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                    confirmButton:"btn btn-primary"}
                            }
                        )}
                ))

            }
        );



</script>
@endpush
