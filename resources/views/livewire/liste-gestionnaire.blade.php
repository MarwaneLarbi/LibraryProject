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
                <input type="text" data-kt-customer-table-filter="search"  wire:model="searchgestionnaireTerm" class="form-control form-control-solid w-250px ps-15" placeholder="Search " />
            </div>
            <!--end::Search-->
        </div>                    <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">

                <!--end::Menu 1-->
                <!--end::Filter-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouterAdmin">Ajouter un Gestionnaire</button>
                <!--begin::Modal - New Target-->
                <div class="modal fade" id="ajouterAdmin"  aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">

                            @livewire('add-gestionnaire')

                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Target-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                </div>
                <button type="button" class="btn btn-danger" id="delete_all_gestionaire" data-bs-toggle="tooltip" >
                    Delete
                </button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="gestionaire_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input"  type="checkbox" data-kt-check="true" data-kt-check-target="#gestionaire_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-85px text-center">ID</th>
                    <th class="min-w-125px text-center">Nom & Prenom</th>
                    <th class="min-w-125px text-center">Email</th>
                    <th class="min-w-125px text-center">Date Naissence</th>
                    <th class="min-w-125px text-center">Role</th>
                    <th class="min-w-125px text-center">Actions</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                @foreach($gestionnaires as $gestionnaire)
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="{{$gestionnaire->id}}" />
                            </div>
                        </td>
                        <td class="text-center">{{$gestionnaire->id}}</td>
                        <td class="text-center">{{$gestionnaire->nom}}  {{$gestionnaire->prenom}}</td>
                        <td class="text-center">{{$gestionnaire->email}}</td>
                        <td class="text-center">{{$gestionnaire->dateNaissence}}</td>
                        <td class="text-center">
                            {{$gestionnaire->role}}
                        </td>
                        <td class="text-end">
                            <button type="button" value="{{$gestionnaire->id}}"  class="btn btn-light-success editgestbtn btn-sm">Editer</button>
                            <button type="button" value="{{$gestionnaire->id}}" class="btn btn-light-primary  btn-sm" data-bs-toggle="modal" data-bs-target="#Modal{{$gestionnaire->id}}">view card</button>
                            <button type="button" value="{{$gestionnaire->id}}" class="btn btn-light-danger deletegestbtn btn-sm">Supprimer</button>
                        </td>
                    </tr>



                    <div class="modal fade" id="Modal{{$gestionnaire->id}}"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$gestionnaire->nom}}  {{$gestionnaire->prenom}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div   id="html-content-holder-{{$gestionnaire->id}}"  class="idcard">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                            <path fill="#67f" fill-opacity="0.20" d="M0,256L48,240C96,224,192,192,288,170.7C384,149,480,139,576,144C672,149,768,171,864,176C960,181,1056,171,1152,144C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                                        </svg>
                                        <header>
                                            <div>
                                                <h1>Bibliothèque Tlemcen</h1>
                                                <h2>22, Rue Abi Ayed Abdelkrim Fg Pasteur B.P 119 13000, Tlemcen, Algérie</h2>
                                            </div>
                                        </header>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div><h6 style="display: inline;">ID : </h6><span id="abonneCart_id"> {{$gestionnaire->id}}</span></div>
                                                <div><h6 style="display: inline;">Nom :</h6><span id="abonneCart_nom"> {{$gestionnaire->nom}}</span></div>
                                                <div><h6 style="display: inline;">Prenom :</h6><span id="abonneCart_prenom"> {{$gestionnaire->prenom}}</span></div>
                                                <div><h6 style="display: inline;">Email :</h6><span id="abonneCart_email"> {{$gestionnaire->email}}</span></div>
                                                <div><h6 style="display: inline;">Tel :</h6><span id="abonneCart_"> {{$gestionnaire->tel}}</span></div>

                                            </div>
                                            <div  class="col-md-2 ">

                                                <div class="mb-3">{!! DNS2D::getBarcodeHTML($gestionnaire->id.'', 'QRCODE',4,4) !!}</div>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 end-25">
                                            <div><h6 style="display: inline;">Role : </h6><span id="abonneCart_"> Gestionnaire</span></div>

                                        </div>
                                    </div>

                                    <div id="previewImage">
                                    </div>
                                </div>

                                <div class="modal-footer">


                                </div>
                                <script>

                                    $(document).ready(function () {
                                        var element = $("#html-content-holder-{{$gestionnaire->id}}"); // global variable
                                        var getCanvas; //global variable
                                        html2canvas(element, {
                                            onrendered: function (canvas) {
                                                getCanvas = canvas;
                                            }
                                        });

                                        $("#btn-Convert-Html2Image-{{$gestionnaire->id}}").on('click', function () {
                                            var imgageData = getCanvas.toDataURL("image/png");
                                            //Now browser starts downloading it instead of just showing it
                                            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                                            $("#btn-Convert-Html2Image-{{$gestionnaire->id}}").attr("download", "your_image.png").attr("href", newData);
                                        });
                                    });

                                </script>

                            </div>
                        </div>
                    </div>


                @endforeach
                </tbody>

                <!-- Button trigger modal -->


                <!-- Modal -->

                <!--end::Table body-->
            </table>
        @if(count($gestionnaires))
            {{$gestionnaires->links()}}
        @endif
            <!--end::Table-->
        </div>
    </div>
    <div class="modal fade" id="EditGestionnaireModal"  aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">

                @livewire('edit-gestionnaire')

                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->
</div>
<script>

    const container33 = document.querySelector('#gestionaire_table');
    const checkboxes33 = container33.querySelectorAll('[type="checkbox"]');
    checkboxes33.forEach(c => {
        // Checkbox on click event
        c.addEventListener('click', function () {
            setTimeout(function () {
                toggleToolbars();
            }, 50);
        });
    });
    function toggleToolbars(){
        const container = document.querySelector('#gestionaire_table');
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

    const delete_all_gestionaire = document.getElementById('delete_all_gestionaire');
    delete_all_gestionaire.addEventListener('click', function (e) {
        const allCheckboxes = container33.querySelectorAll('tbody [type="checkbox"]');
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
                                url:"{{ route('gestionnaire.deleteselected') }}",
                                data:{
                                    '_token':"{{csrf_token()}}",
                                    'id':c.value,
                                },
                                success: function (response) {
                                    Livewire.emit('refreshGestionnaireTable')
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
<!--end::Modal - New Target-->
</div>

@push('custom-scripts')
    <script>
        $(document).on('click', '.deletegestbtn', function (e) {
                var gest_id = $(this).val();
                e.preventDefault(),Swal.fire({
                        text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                            confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                    }
                ).then((function(t){
                        t.value?(
                            $.ajax({
                                type: "GET",
                                url: "/gestionnaire/delete/"+gest_id,
                                success: function (response) {
                                    Swal.fire({
                                            text:" gestionnaire has  been Deleted!.",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                                confirmButton:"btn btn-primary"}
                                        }
                                    )
                                    Livewire.emit('refreshGestionnaireTable')

                                }
                            })
                        ):"cancel"===Swal.fire({
                                text:"this user has not been Deleted!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                    confirmButton:"btn btn-primary"}
                            }
                        )}
                ))

            }
        );

        $(".editgestbtn").on("click" ,function(){
            var Gestionnaire = $(this).val();
            console.log('gestionnaire');
            $('#EditGestionnaireModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/gestionnaire/editer/"+Gestionnaire,
                success: function (response) {
                    $('#edit_gest_id').val(response.gest.id);
                    $('#_current_id').val(response.gest.id);
                    $('#edit_gest_nom').val(response.gest.nom);
                    $('#edit_gest_prenom').val(response.gest.prenom);
                    $('#edit_gest_email').val(response.gest.email);
                    $('#edit_gest_tel').val(response.gest.tel);
                    $('#edit_gest_adresse').val(response.gest.adresse);
                    $('#edit_date_naissence').val(response.gest.dateNaissence);

                }
            });

        });


    </script>
@endpush
