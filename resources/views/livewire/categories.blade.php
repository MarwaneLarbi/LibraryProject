<div>
    <div class="modal fade" id="EditcategoryModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div    class="modal-dialog modal-xl">
            <div  class="modal-content">
                <!--begin::Form-->
                @livewire('edit-categories')
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
                <input type="text"  wire:model="searchCategory" class="form-control form-control-solid w-250px ps-15" placeholder="Search " />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                <!--begin::Export-->

                <button type="button" class="btn btn-primary " id="ajoutercategoryButton"data-bs-toggle="modal" data-bs-target="#ajoutercategoryModal">Ajouter category</button>
                <div class="modal fade" id="ajoutercategoryModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div    class="modal-dialog modal-xl">
                        <div  class="modal-content">
                            <!--begin::Form-->
                            @livewire('add-categories')
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Add category-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                </div>
                <button type="button" class="btn btn-danger btn-sm" id="delete_all_category" data-bs-toggle="tooltip" title="Coming Soon">
                    Supprimer
                </button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>

    <div class="card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_Category_table">
            <!--begin::Table head-->
            <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input"  type="checkbox" data-kt-check="true" data-kt-check-target="#kt_Category_table .form-check-input" value="1" />
                    </div>
                </th>
                <th class="min-w-125px text-center">ID</th>
                <th class="min-w-125px text-center">Category</th>
                <th class="min-w-125px text-center">Description</th>
                <th class="min-w-75px text-center">Nombre des Livres</th>
                <th class="text-end min-w-70px text-md-end">Actions</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
            @foreach($categories as $category)
            <tr>
                <!--begin::Checkbox-->
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="{{$category->id}}" />
                    </div>
                </td>
                <td class="text-center">
                    {{$category->id}}
                </td>
                <!--end::Email=-->
                <!--begin::Company=-->
                <td  class="text-center">                    {{$category->name}}
                </td>
                <td  class="text-center">                    {{$category->description}}
                </td>
                <!--end::Company=-->
                <!--begin::Payment method=-->
                <td  class="text-center">
                    {{
    DB::table('livre_category')
                   ->
                   where('category_id', '=', $category->id)
                   ->
                   count()
}}
                </td>
                <td class="text-end">
                    <button type="button" value="{{$category->id}}"  class="btn btn-light-success editCatbtn btn-sm">Editer</button>
                    <button type="button" value="{{$category->id}}" class="btn btn-light-danger deleteCatbtn btn-sm">Supprimer</button>
                    <!--end::Menu-->
                </td>
                <!-- Modal-deleteAuteur  -->
                <!--end::Action=-->
            </tr>
            @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
        <!--Start::Pagination=-->
        @if(count($categories))
            {{$categories->links()}}
        @endif
         <!--end::Pagination=-->
    </div>
    <script>

        const container = document.querySelector('#kt_Category_table');
        const checkboxes = container.querySelectorAll('[type="checkbox"]');
        checkboxes.forEach(c => {
            // Checkbox on click event
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });
        function toggleToolbars(){
            const container = document.querySelector('#kt_Category_table');
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
        const submitButton5 = document.getElementById('delete_all_category');
        submitButton5.addEventListener('click', function (e) {
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
                                    url:"{{ route('category.deleteselected') }}",
                                    data:{
                                        '_token':"{{csrf_token()}}",
                                        'id':c.value,
                                    },
                                    success: function (response) {
                                        Livewire.emit('refreshTableCategory')
                                        $("#closeupdateabonneModal").trigger("click")
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
    <script>
        $(document).on('click', '.editCatbtn', function (e) {
                e.preventDefault();
                var category_id = $(this).val();
                console.log(category_id);

            $('#EditcategoryModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/category/editer/"+category_id,
                    success: function (response) {
                        console.log(response);
                        $('#id_category').val(response.category_edt.id);
                        $('#name_category').val(response.category_edt.name);
                        $('#description_category').val(response.category_edt.description);
                    }
                });
                $('.btn-close').find('input').val('');
            }
        );

        $(document).on('click', '.deleteCatbtn', function (e) {
                var category_id = $(this).val();
                e.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?(
                            $.ajax({
                                type: "GET",
                                url: "/category/delete/"+category_id,
                                success: function (response) {
                                    Swal.fire({
                                            text:" Category has  been Deleted!.",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                                confirmButton:"btn btn-primary"}
                                        }
                                    )
                                    Livewire.emit('refreshTableCategory')

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
