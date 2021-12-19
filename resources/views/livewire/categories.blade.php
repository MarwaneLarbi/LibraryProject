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



    <div class="position-relative start-50 translate-middle-x">
        <h1> Categories</h1>
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
                <input type="text"  wire:model="searchTerm" class="form-control form-control-solid w-150px ps-15" placeholder="Search " />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                <!--begin::Export-->
                    {{--                <button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                    <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="black" />
														<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="black" />
														<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
													</svg>
												</span>
                    <!--end::Svg Icon-->Export</button>--}}
                <!--end::Export-->
                <!--begin::Add category-->
                <button type="button" class="btn btn-primary btn-sm" id="ajoutercategoryButton"data-bs-toggle="modal" data-bs-target="#ajoutercategoryModal">Ajouter category</button>
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
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Coming Soon">
                    Selection Action
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
                <th class="min-w-125px">ID</th>
                <th class="min-w-125px">Category</th>
                <th class="min-w-125px">Nombre des Livres</th>
                <th class="text-end min-w-70px">Actions</th>
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
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    {{$category->id}}
                </td>
                <!--end::Email=-->
                <!--begin::Company=-->
                <td>                    {{$category->name}}
                </td>
                <!--end::Company=-->
                <!--begin::Payment method=-->
                <td data-filter="mastercard">
                    <img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px me-3" alt="" />**** 7357</td>
                <td class="text-end">
                    <button type="button" value="{{$category->id}}"  class="btn btn-light-success editbtn btn-sm">Editer</button>
                    <button type="button" value="{{$category->id}}" class="btn btn-light-danger deletebtn btn-sm">Supprimer</button>
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
    </div>
</div>
@push('custom-scripts')
    <script>
        $(document).on('click', '.editbtn', function (e) {
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
    </script>
@endpush
