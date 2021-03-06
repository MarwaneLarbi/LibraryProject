


<!DOCTYPE html>
@extends('Layouts.gest')
@section('content')
    <div class="position-lg-relative start-70 translate-middle-x">
        <h1> Categories & Mots Clés</h1>
    </div>

    @if(Session::has('abonne'))

        <div style="padding: 0 2%;" class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <!--begin::Statistics Widget 2-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center pt-3 pb-0">
                        <div class="col-md-10">
                            <div><h4 style="display: inline;">ID : </h4><span id="abonneCart_id"> {{Session::get('abonne')->id}}</span></div>
                            <div><h4 style="display: inline;">Nom :</h4><span id="abonneCart_nom"> {{Session::get('abonne')->nom}}</span></div>
                            <div><h4 style="display: inline;">Prenom :</h4><span id="abonneCart_prenom"> {{Session::get('abonne')->prenom}}</span></div>
                            <div><h4 style="display: inline;">Email :</h4><span id="abonneCart_email">{{Session::get('abonne')->email}}</span></div>
                            <div><h4 style="display: inline;">Tel :</h4><span id="abonneCart_"> {{Session::get('abonne')->tel}}</span></div>

                        </div>
                        <img src="assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px">
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Statistics Widget 2-->
            </div>

            <div class="col-xl-2">
                <!--begin::Statistics Widget 5-->
                <a class="card bg-body  card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
														<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
														<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
														<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
													</svg>
												</span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5"> {{Session::get('abonne')->endDate}}</div>
                        <div class="fw-bold text-gray-400">Abonnement</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-2">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="black"/>
<path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="black"/>
</svg>
												</span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                            {{
$books=DB::table('_activities_abonne')
->where('abonne_id', Session::get('abonne')->id)
->where('status', '=', 'active')
->count()
}}
                        </div>
                        <div class="fw-bold text-white">Total Emprunts</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-2">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-danger  card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black"/>
<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black"/>
</svg>
												</span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                            {{
$books=DB::table('_activities_abonne')
->where('abonne_id', Session::get('abonne')->id)
->where('status', '=', 'inactive')
->count()
}}
                        </div>
                        <div class="fw-bold text-white">Total Retours</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-2">
                <!--begin: Statistics Widget 6-->
                <div class="card bg-warning card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body my-3">
                        <a  class="card-title fw-bolder text-light fs-5 mb-3 d-block">Nombre Livres en attents</a>
                        <div class="py-1">
                            <span class="text-light  text-center fs-1 fw-bolder me-2">
                                {{
                $books=DB::table('livre_abonne')
                                ->where('abonne_id', Session::get('abonne')->id)
                                ->where('status', '=', 'pending')
            ->count()
}}

                                </span>
                        </div>
                        <div class="progress h-7px bg-light bg-opacity-50 mt-7">
                            <div class="progress-bar bg-light" role="progressbar" style="width: {{$books*33}}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end:: Body-->
                </div>
                <!--end: Statistics Widget 6-->
            </div>
            <div class="col-xl-1">
                <a  id="deconnect_abonne" href="#" class="card bg-body hoverable card-xl-stretch ">
                <!--begin::Statistics Widget 2-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center pt-3 pb-0">
                        <i class="bi bi-box-arrow-in-left fs-5x"></i>
                        </div>

                    <!--end::Body-->
                </div>
                    <h1 class="" style="padding-left: 11px"> LogOut</h1>

                </a>

                <!--end::Statistics Widget 2-->
            </div>
        </div>
        <div id="dataAbonne" class="row" style="padding: 0 2%; ">
            <div class="card lg-2 ">
                <div class="card-body">
                    <div class="position-relative start-50 translate-middle-x">
                        <br>
                    </div>
                    @livewire('liste-emprunts')
                </div>

            </div>

        </div>
        <script>
            const deconnect_abonne = document.getElementById('deconnect_abonne');
            deconnect_abonne.addEventListener('click', function (e) {
                // Prevent default button action
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "{{ route('emprunts.logout') }}",
                    data: {
                        '_token': "{{csrf_token()}}",
                    },
                    success: function (response) {
                        window.location.reload();
                    }

                });
            })
        </script>
    @else
        <div id="enmprunter_login" class="container-xxl"  >
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Heading-->
                    <div class="card-px text-center pt-20 pb-5">
                        <!--begin::Title-->
                        <h2 class="fs-2x fw-bolder mb-0">Nouvelle Emprunts</h2>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fs-4 fw-bold py-7">Click on the below buttons to launch
                            <br />a new target example.</p>
                        <!--end::Description-->
                        <!--begin::Action-->
                        <div class="d-flex justify-content-center">
                            <div class="row  align-items-center fs-2x fw-bolder mb-0" >
                                <div class="col-auto">
                                    <label class="required fw-bold fs-6 mb-md-0">
                                        Numéro d'identité
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input id="login_abonne_id" type="number" name="login_id" class="border border-danger form-control form-control-solid ms-0" placeholder="" value="" />
                                </div>
                                <div class="col-auto">
                                    <a  id="abonneQrcode"
                                        class="btn btn-icon btn-light pulse pulse-primary"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="bottom" title="Clicker pour scanner QRcode">
                                        <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"/>
                                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"/>
                                        </svg></span>
                                        <span class="pulse-ring"></span>
                                    </a>
                                    <a id="abonne_login" class="btn btn-icon btn-light pulse pulse-primary"  >
                                    <span class="svg-icon svg-icon-2x svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black"/>
                                        <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black"/>
                                        <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4"/>
                                        </svg>
                                    </span>
                                    </a>
                                </div>


                                </a>
                            </div>

                        </div>


                    </div>


                    <div class="modal fade" id="qrCodeAbonne">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                @livewire('qr-code-reader-abonne')
                            </div>
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Illustration-->
                    <div class="text-center px-5">
                        <img src="assets/media/books/6607.jpg" alt="" class="mw-100 h-200px h-sm-325px" />
                    </div>

                    <!--end::Illustration-->
                </div>
                <!--end::Card body-->
            </div>

        </div>
        <script src="assets/plugins/global/plugins.bundle.js"></script>

        <script>
            $('#login_abonne_id').on('input', function() {
               id= $(this).val()
                $('#login_abonne_id').removeClass('border-danger');
                console.log('fffffffffffffff!',id);
            });
    const abonne_login = document.getElementById('abonne_login');
    abonne_login.addEventListener('click', function (e) {
          id=  $('#login_abonne_id').val()
            if (id){
                $.ajax({
                    type: "post",
                    url:"{{ route('emprunts.login') }}",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'id':id,
                    },
                    success: function (response) {
                        if(response.status==200){
                            window.location.reload();
                        }
                        else if(response.status==505)
                            { Swal.fire({
                                    text:"utilisateur introuvable",
                                    icon:"error",
                                    buttonsStyling:!1,
                                    confirmButtonText:"Ok, got it!"
                                    ,customClass:{
                                        confirmButton:"btn btn-primary"}
                                }
                            )}
                        else {
                                Swal.fire({
                                        text:"votre abonnement est expiré si vous voulez de réactiver ?",icon:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"oui,réactiver!",cancelButtonText:"No, annuler",customClass:{
                                            confirmButton:"btn btn-primary",cancelButton:"btn btn-active-light"}
                                    }
                                ).then((function(t){
                                        t.value?(window.location.replace("http://localhost:8000/abonne")
                                    ):"cancel"===t.dismiss&&Swal.fire({
                                                text:"Your form has not been cancelled!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{
                                                    confirmButton:"btn btn-primary"}
                                            }
                                        )}
                                ))
                        }
                    }

                });
            }
            else {
                $('#login_abonne_id').addClass('border-danger');
                Swal.fire({
                        text:" entre un id .",
                        icon:"error",
                        buttonsStyling:!1,
                        confirmButtonText:"Ok, got it!"
                        ,customClass:{
                            confirmButton:"btn btn-primary"}
                    }
                )}




    })
</script>
    @endif


@endsection
@push('custom-scripts')
@endpush
