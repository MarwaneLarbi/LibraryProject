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
                <input type="text" data-kt-customer-table-filter="search"  wire:model="searchabonneTerm" class="form-control form-control-solid w-250px ps-15" placeholder="Search Abonne" />
            </div>
            <!--end::Search-->
        </div>                    <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                <!--begin::Export-->
                <button id="exportabonne" type="button" class="btn btn-light-primary me-3" >
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


                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
													</svg>
												</span>
                    <!--end::Svg Icon-->Filter</button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Content-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-5 fw-bold mb-3">Option:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-select form-select-solid fw-bolder" wire:model="Options"  >
                                <option></option>
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                                <option value="dateexp">Date Expiration</option>

                            </select>

                            <!--end::Input-->
                        </div>

                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
                <!--end::Filter-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouterAbonne">Ajouter un Abonne</button>
                <!--begin::Modal - New Target-->
                <div class="modal fade" id="ajouterAbonne"  aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">

                            @livewire('add-abonnes')

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
                <button type="button" class="btn btn-danger" id="delete_all_abonne" data-bs-toggle="tooltip" >
                    Delete
                </button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="abonnes_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input"  type="checkbox" data-kt-check="true" data-kt-check-target="#abonnes_table .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="w-100px  text-center">ID</th>
                    <th class="w-150px text-center">Nom & Prenom</th>
                    <th class="w-150px text-center">Email</th>
                    <th class="w-125px text-center">Date Naissence</th>
                    <th class="w-80px text-center">Status</th>
                    <th class="w-150px text-center">Expiry Date</th>
                    <th class="text-center">Actions</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                @foreach($abonnes as $abonne)

                    <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="{{$abonne->id}}" />
                        </div>
                    </td>
                <td class="text-center">{{$abonne->id}}</td>
                <td class="text-center">{{$abonne->nom}}  {{$abonne->prenom}}</td>
                <td class="text-center">{{$abonne->email}}</td>
                <td class="text-center">{{$abonne->dateNaissence}}</td>
                <td class="text-center">
                    @if($abonne->status=='active')

                        <button type="button" value="{{$abonne->id}}" class="btn btn-light-success btn-sm updatebtn" > {{$abonne->status}}</button>

                    @else
                        <button type="button" value="{{$abonne->id}}" class="btn btn-light-danger btn-sm updatebtn" > {{$abonne->status}}</button>

                    @endif
                </td>
                <td class="text-center">{{$abonne->endDate}}</td>
                        <td class="text-end">
                            <button type="button" value="{{$abonne->id}}" class="btn btn-light-primary  btn-sm" data-bs-toggle="modal" data-bs-target="#Modal{{$abonne->id}}">view card</button>
                            <button type="button" value="{{$abonne->id}}" id="EditAuteurButton" class="btn btn-light-success editAbonnebtn btn-sm">Editer</button>
                            <button type="button" value="{{$abonne->id}}" class="btn btn-light-danger deletebookbtn btn-sm">Supprimer</button>

                            <!--end::Menu-->
                        </td>
                    </tr>



                    <div class="modal fade" id="Modal{{$abonne->id}}"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$abonne->nom}}  {{$abonne->prenom}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div   id="html-content-holder-{{$abonne->id}}"  class="idcard" >
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
                                                <div><h6 style="display: inline;">ID : </h6><span id="abonneCart_id"> {{$abonne->id}}</span></div>
                                                <div><h6 style="display: inline;">Nom :</h6><span id="abonneCart_nom"> {{$abonne->nom}}</span></div>
                                                <div><h6 style="display: inline;">Prenom :</h6><span id="abonneCart_prenom"> {{$abonne->prenom}}</span></div>
                                                <div><h6 style="display: inline;">Email :</h6><span id="abonneCart_email"> {{$abonne->email}}</span></div>
                                                <div><h6 style="display: inline;">Tel :</h6><span id="abonneCart_"> {{$abonne->tel}}</span></div>

                                            </div>
                                            <div  class="col-md-2 ">

                                                <div class="mb-3">{!! DNS2D::getBarcodeHTML($abonne->id.'', 'QRCODE',4,4) !!}</div>
                                            </div>
                                        </div>
                                        <div class="position-absolute bottom-0 end-25">
                                            <div><h6 style="display: inline;">EXPIRY DATE : </h6><span id="abonneCart_"> {{$abonne->endDate}}</span></div>

                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">


                                </div>
                                <script>

                                    $(document).ready(function () {
                                        var getCanvas; //global variable

                                        $("#btn-Convert-Html2Image-{{$abonne->id}}").on('click', function () {
                                            $('#html-content-holder-{{$abonne->id}}').show();
                                            var element = $("#html-content-holder-{{$abonne->id}}"); // global variable
                                            html2canvas(element, {
                                                onrendered: function (canvas) {
                                                    getCanvas = canvas;
                                                }
                                            });


                                            var imgageData = get.toDataURL("image/png");
                                            //Now browser starts downloading it instead of just showing it
                                            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                                            $("#btn-Convert-Html2Image-{{$abonne->id}}").attr("download", "your_image.png").attr("href", newData);
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
        @if(count($abonnes))
            {{$abonnes->links()}}
        @endif
            <!--end::Table-->
        </div>
    </div>
<div class="modal fade" id="EditAbonneModal"  aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">

            @livewire('edit-abonnes')

            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
</div>
<div class="modal fade" id="UpdateAbonneModal"  aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <button type="button" id="closeupdateabonneModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close" hidden></button>

                <!--begin:Form-->
                <form id="kt_modal_update_abonne_form" class="form" action="#">
                    @csrf
                    <input name="_token" value="{{csrf_token()}}" hidden>

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Mise à jours d'Abonnement </h1>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-8 fv-row">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span >Nom</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder=""id="update_abonne_nom" readonly />
                            </div>
                            <div class="col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span >Numéro d'identité </span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Numéro de carte d'identité ou passport"></i>
                                </label>
                                <!--end::Label-->
                                <input id="update_abonne_id" type="text"
                                       data-fv-string-length___message="Numéro d'identité Incorrect"
                                       minlength="9"
                                       maxlength="9"
                                       class="form-control form-control-solid" placeholder="" name="update_abonne_id" readonly/>
                            </div>
                            <!--begin::Label-->
                        </div>
                    </div>
                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Expiry Date</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
																		<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
																		<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
																	</svg>
																</span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date" id="update_abonne_end" name="update_abonne_end" disabled />
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>

                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Abonnement</label>
                            <select id="update_abonne_abonnement" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a package" name="update_abonne_abonnement" required>
                                <option></option>
                                @foreach($packages as $package)
                                    <option value="{{$package->id}}"> {{$package->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--end::Col-->
                    </div>

                    <div class="text-center">
                        <button id="valider" class="btn btn-primary valider">
                            <span class="indicator-label">valider</span>
                            <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>



            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<script>
    $(document).ready(function () {
        $("#exportabonne").click(function(){
            TableToExcel.convert(document.getElementById("abonnes_table"), {
                name: "Traceability.xlsx",
                sheet: {
                    name: "Sheet1"
                }
            });
        });
    });

    const container = document.querySelector('#abonnes_table');
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
        const container = document.querySelector('#abonnes_table');
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

    const submitButton4 = document.getElementById('delete_all_abonne');
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
                            url:"{{ route('abonne.deleteselected') }}",
                            data:{
                                '_token':"{{csrf_token()}}",
                                'id':c.value,
                            },
                            success: function (response) {
                                Livewire.emit('refreshAbonneTable')
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
<!--end::Modal - New Target-->
</div>

@push('custom-scripts')
<script>
    $("#update_abonne_end").flatpickr();

    $(document).on('click', '.updatebtn', function (e) {
            abonne= $(this).val();
        $('#UpdateAbonneModal').modal('show');
        $.ajax({
            type: "GET",
            url: "/abonne/editer/"+abonne,
            success: function (response) {
                fullname=response.abonne.nom+' '+response.abonne.prenom
                $('#update_abonne_id').val(response.abonne.id);
                $('#update_abonne_nom').val(fullname);
                $('#update_abonne_end').val(response.abonne.endDate);

            }
        });
        /*
                    var abonne_id = $(this).val();
                    $('#UpdateAbonneModal').modal('show');

        */

        }
    );
    const submitButton3 = document.getElementById('valider');
    submitButton3.addEventListener('click', function (e) {

        e.preventDefault();
        var data2 = $('#kt_modal_update_abonne_form').serialize();
        $.ajax({
            type: "post",
            url:"{{ route('abonne.update_package') }}",
            data:data2,
            success: function (response) {

                Livewire.emit('refreshAbonneTable')
                $("#closeupdateabonneModal").trigger("click")

            }
        });
    });
    $(document).on('click', '.deletebookbtn', function (e) {
            var abonne_id = $(this).val();
            e.preventDefault(),Swal.fire({
                    text:"Are you sure you would like to Delete?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, Delete it!",cancelButtonText:"No, return",customClass:{
                        confirmButton:"btn btn-danger",cancelButton:"btn btn-active-light"}
                }
            ).then((function(t){
                    t.value?(
                        $.ajax({
                            type: "GET",
                            url: "/abonne/delete/"+abonne_id,
                            success: function (response) {
                                Swal.fire({
                                        text:" Abonne has  been Deleted!.",icon:"success",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                            confirmButton:"btn btn-primary"}
                                    }
                                )
                                Livewire.emit('refreshAbonneTable')

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

    $(".editAbonnebtn").on("click" ,function(){
        var Abonne_id = $(this).val();
        console.log(Abonne_id);
        $('#EditAbonneModal').modal('show');

        $.ajax({
            type: "GET",
            url: "/abonne/editer/"+Abonne_id,
            success: function (response) {
                $('#edit_abonne_id').val(response.abonne.id);
                $('#edit_abonne_current_id').val(response.abonne.id);
                $('#edit_abonne_nom').val(response.abonne.nom);
                $('#edit_abonne_prenom').val(response.abonne.prenom);
                $('#edit_abonne_email').val(response.abonne.email);
                $('#edit_abonne_tel').val(response.abonne.tel);
                $('#edit_abonne_adresse').val(response.abonne.adresse);

                $('#edit_abonne_abonnement').val(response.abonne.package_id);
                $('#edit_abonne_abonnement').select2().trigger('change');
                $('#edit_abonne_DN').val(response.abonne.dateNaissence);

            }
        });

    });


</script>
@endpush
