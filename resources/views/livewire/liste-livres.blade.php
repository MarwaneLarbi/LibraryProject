<div>
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
                <input type="text" data-kt-customer-table-filter="search"  wire:model="searchBookTerm" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
            </div>
            <!--end::Search-->
        </div>                    <!--begin::Card title-->
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



                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouterLivre">Ajouter un Livre</button>
                <div class="modal fade" id="ajouterLivre"  aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-fullscreen">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            @livewire('add-livre')

                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Add customer-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                </div>
                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                    Selection Action
                </button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div class="card-body pt-0">
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
                <th class="min-w-85px text-center">ID</th>
                <th class="min-w-125px text-center">Titre</th>
                <th class="min-w-125px text-center">Auteur</th>
                <th class="min-w-125px text-center">éditeur</th>
                <th class="min-w-125px text-center">ISBN</th>
                <th class="min-w-125px text-center">Langue</th>
                <th class="min-w-125px text-center">Nombre d'exemplaires</th>
                <th class="min-w-125px text-center">Actions</th>
            </tr>
            <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="fw-bold text-gray-600">
            @foreach($Books as $book)
                <tr>
                    <!--begin::Checkbox-->
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class=" text-center">

                        {{$book->id}}
                    </td>
                    <td class=" text-center">
                        {{$book->titre}}
                    </td>
                    <td class=" text-center">
                        {{ \App\Models\auteur::find($book->auteur)->fullname}}
                    </td>
                    <td class=" text-center">
                        {{$book->editeur}}
                    </td>
                    <td class=" text-center">
                        {{$book->isbn}}
                    </td>
                    <td class=" text-center">
                        {{$book->langue}}
                    </td>
                    <td class=" text-center">

                    </td>
                    <div id='print_{{$book->id}}' style="width: 10%" hidden>
                        {!! DNS1D::getBarcodeSVG($book->id, "CODABAR", 1, 65, '#2A3239') !!}
                    </div>
                    <td class="text-end">
                        <button type="button" value="{{$book->id}}" id="EditAuteurButton" class="btn btn-light-success editbookbtn btn-sm">Editer</button>
                        <button type="button" value="{{$book->id}}" class="btn btn-light-danger deletebookbtn btn-sm">Supprimer</button>
                        <button id="print" value="{{$book->id}}" class="btn btn-icon btn-success printbookbtn btn-sm"><i class="fas fa-print"></i></button>
                        <!--end::Menu-->
                    </td>
                </tr>
            @endforeach

            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    </div>

    <div class="modal fade" id="EditBookModal"  aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen">
            <!--begin::Modal content-->
            <div class="modal-content">
                @livewire('edit-livre')
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
</div>
@push('custom-scripts')
    <script>


        $(".printbookbtn").on("click" ,function(){
            console.log("print")
            console.log("print")
            var book_id = $(this).val();
            console.log(book_id);

            var mydiv ='print_'+book_id;
            console.log(mydiv);
            var mode = 'iframe'; // simple open the popup
            var close = mode == "popup"; //defult mode
            var options = { mode : mode, popClose : close};
            $("#"+mydiv).printArea( options );//create printThisTable id
        });


        function selectbook_category(k){
            var value = k;
            $('#edit_book_category').val(value);
            $('#edit_book_category').select2().trigger('change');
        }

        $(".editbookbtn").on("click" ,function(){
            var book_id = $(this).val();
            console.log(book_id)
            $('#EditBookModal').modal('show');
            $('#_currentcode').val(book_id);

            $.ajax({
                type: "GET",
                url: "/livre/editer/"+book_id,
                success: function (response) {
                    var categoryCount= [];
                    var tagCount= [];

                    console.log(response.book.Photo);
                    $('#edit_book_name').val(response.book.titre);
                    $('#edit_book_code').val(response.book.id);
                    $('#edit_book_annee').val(response.book.annee);
                    $('#edit_book_isbn').val(response.book.isbn);
                    $('#edit_book_editeur').val(response.book.editeur);
                    $('#edit_book_langue').val(response.book.langue);
                    $('#edit_book_langue').select2().trigger('change');
                    $('#edit_book_nbrexmp').val(response.book.nombre_exmp);
                    var cat =response.category
                    for (i = 0; i < cat.length; i++) {
                        console.log(cat[i].id);
                        categoryCount.push(cat[i].id);
                    }
                    var ta =response.tags
                    for (i = 0; i < ta.length; i++) {
                        console.log(ta[i].id);
                        tagCount.push(ta[i].name);
                    }
                    console.log(categoryCount)
                    selectbook_category(categoryCount);
                    $('#edit_book_auteur').val(response.book.auteur);
                    $('#edit_book_auteur').select2().trigger('change');
                    tagify.addTags(tagCount)
                    tinymce.get('edit_book_description').setContent(response.book.description);
                    $("#output22").attr("src", response.book.Photo);
                }
            });

        });

        $(document).on('click', '.deletebookbtn', function (e) {
            var book_id = $(this).val();
            console.log(book_id);
                e.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?(
                            $.ajax({
                                type: "GET",
                                url: "/livre/delete/"+book_id,
                                success: function (response) {
                                    Swal.fire({
                                            text:" Category has not been Deleted!.",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                                confirmButton:"btn btn-primary"}
                                        }
                                    )
                                    Livewire.emit('refreshBookTable')

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
