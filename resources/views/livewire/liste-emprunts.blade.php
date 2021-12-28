<div>
    <div class="row">
        <div class="col-xl-8">
            <div class="border-3 pt-1">
                <div hidden class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <img  alt="Logo" src="assets/media/logos/red.png" class="h-75px logo">
                                        </td>

                                        <td>
                                            Invoice #: 123<br />
                                            Created: January 1, 2015<br />
                                            Due: February 1, 2015
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="information">
                            <td colspan="2">
                                <table>
                                    <tr>


                                        <td>
                                            Bibliothèque Tlemcen<br />
                                            22, Rue Abi Ayed Abdelkrim<br/>
                                            Fg Pasteur B.P 119 13000,<br/>
                                            Tlemcen, Algérie
                                        </td>

                                        <td>
                                            Acme Corp.<br />
                                            John Doe<br />
                                            john@example.com
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>Emprunts Nouveau </td>

                            <td>Check #</td>
                        </tr>

                        <tr class="details">
                            <td>Check</td>

                            <td>1000</td>
                        </tr>
                        <tr class="heading">
                            <td>Emprunts En attents </td>

                            <td>Check #</td>
                        </tr>

                        <tr class="details">
                            <td>Check</td>

                            <td>1000</td>
                        </tr>
                        <tr class="heading">
                            <td>Emprunts Retour</td>

                            <td>Price</td>
                        </tr>

                        <tr class="item">
                            <td>Website design</td>

                            <td>$300.00</td>
                        </tr>

                        <tr class="item">
                            <td>Hosting (3 months)</td>

                            <td>$75.00</td>
                        </tr>

                        <tr class="item last">
                            <td>Domain name (1 year)</td>

                            <td>$10.00</td>
                        </tr>

                        <tr class="total">
                            <td></td>

                            <td>Total: $385.00</td>
                        </tr>
                    </table>
                </div>
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->

                    <div class="col-auto">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <form class="form" id="form_add_emprunt">
                                <div class="row">
                                    <div class="col-auto">
                                        <input id="emprunt_add_id"  type="number" name="emprunt_id" class="form-control form-control-solid ms-0" placeholder="Emprunts" value="" />
                                    </div>
                                    <div class="col-auto">
                                        <a id="newEmprunt" class="btn btn-icon btn-light pulse pulse-success"  data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="bottom" >
                                        <span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M3 13V11C3 10.4 3.4 10 4 10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14H4C3.4 14 3 13.6 3 13Z" fill="black"/>
                                        <path d="M13 21H11C10.4 21 10 20.6 10 20V4C10 3.4 10.4 3 11 3H13C13.6 3 14 3.4 14 4V20C14 20.6 13.6 21 13 21Z" fill="black"/></svg>
                                        </span>
                                            <span class="pulse-ring"></span>
                                        </a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="p-2 bd-highlight" >
                                <a href="#" class="btn btn-flex btn-danger px-8 d-none"  data-kt-docs-table-toolbar="selected" data-bs-toggle="tooltip">
                                    <i class="fas fa-retweet fs-2tx"></i>
                                    <span class="d-flex flex-column align-items-start ms-2"></span>
                                    <span class="fs-3 fw-bolder">Retours</span>
                                </a>
                            </div>


                        </div>

                    </div>
                    <div class="row  align-items-center fs-2x fw-bolder mb-0" >


                 </div>

                    <!--end::Search-->
                </div>                    <!--begin::Card title-->
                <!--begin::Card toolbar-->

                <!--end::Card toolbar-->
            </div>
            @livewire('list-nouveau-emprunts')
            @livewire('list-anciens-emprunts')
            @livewire('list-retours-emprunts')


        </div>
        <div class="col-xl-4">
            <!--begin::List Widget 5-->
            <button id="validerEmprunts" type="button" class="btn btn-primary  fs-5x col-md-12">
                <i class="bi bi-chevron-double-right fs-4x"></i>
                Valider
            </button>
            @livewire('activites-abonne')
            <!--end: List Widget 5-->
        </div>


    </div>
</div>
<script>

</script>
@push('custom-scripts')
    <script>
        const form = document.getElementById('form_add_emprunt');
        const fv = FormValidation.formValidation(form, {
            fields: {
                'emprunt_id': {
                    validators: {
                        notEmpty: {
                            message: 'The password is required',
                        },
                        numeric: {
                            message: 'The value is not a number',
                            thousandsSeparator: '',
                            decimalSeparator: '.',
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh',
                }),
            },
        });

        const submitButton2 = document.getElementById('newEmprunt');
        submitButton2.addEventListener('click', function (e) {
            adding_id=$('#emprunt_add_id').val()
            // Prevent default button action
            e.preventDefault();
            var countnew=0;
            var countRecent=0;
            var testpendingEmprunts=[];
            var testnewEmprunts=[];
            let check=true;
            $("table#table_emprunts_recents tbody#tbodynew").each(function( i ) {
                $(".id_mar", this).each(function( j ) {
                    console.log('dkhol table1');
                    ++countnew;
                    data=parseInt(this.innerHTML)
                    testnewEmprunts.push(data);
                    if(adding_id==parseInt(this.innerHTML))
                    {
                        check=false
                        console.log('1',check);

                    }
                });
            });
            $("table#table_emprunts tbody#tbody_pending").each(function( i ) {
                $(".id_pending", this).each(function( j ) {
                    console.log('dkhol table2');
                    ++countRecent;
                    testpendingEmprunts.push(parseInt(this.innerHTML));
                    console.log('1',check,adding_id==parseInt(this.innerHTML));
                    if(adding_id==parseInt(this.innerHTML))
                    {
                        check=false
                        console.log('1',check);

                    }

                });
            });
            // Validate form before submit
                if (fv) {
                    fv.validate().then(function (status) {
                        if (status == 'Valid') {
                            submitButton2.setAttribute('data-kt-indicator', 'on');
                            submitButton2.disabled = true;
                            setTimeout(function () {

                                submitButton2.removeAttribute('data-kt-indicator');
                                submitButton2.disabled = false;

                                if(countnew+countRecent<3) {
                                    console.log(check);

                                    if(check)
                                    {
                                        console.log('kayan2!');

                                        $.ajax({
                                    type: "post",
                                    url: "{{ route('emprunts.addToTable') }}",
                                    data: {
                                        '_token': "{{csrf_token()}}",
                                        'id':adding_id,
                                    },
                                    success: function (response) {
                                        if (response.success == true) {
                                            Livewire.emit('refreshListNouveauEmprunts')
                                            beep()
                                            $('#emprunt_add_id').val('')
                                        } else {
                                            beepError(),
                                                Swal.fire({
                                                        text: "incorrect id!.",
                                                        icon: "error",
                                                        buttonsStyling: !1,
                                                        confirmButtonText: "Ok, got it!"
                                                        , customClass: {
                                                            confirmButton: "btn btn-primary"
                                                        }
                                                    }
                                                )
                                        }
                                    }

                                });}
                                    else{
                                        beepError();
                                        Swal.fire({
                                                text: "Désolé, tu es deja empruntes ce livre ",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "ok !",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                }
                                            }
                                        )
                                    }
                                }

                        else {

                                    Swal.fire({
                                            text: "Désolé,tu peux emprunter ue  3 livre ",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "ok !",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        }
                                    ),
                                    beep();
                                }

                            }, 10);
                        } else {
                            beepError();

                            Swal.fire({
                                    text: "Désolé, il semble qu'il y ait des erreurs détectées, veuillez réessayer",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "ok !",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }
                            )
                        }
                    });

            }

        });
        ///valider emprunts


    </script>
@endpush
