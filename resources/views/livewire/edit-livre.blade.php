<div>
@csrf
<!--begin::Modal header-->
    <div class="modal-header">
        <!--begin::Modal title-->
        <h2>Modifier Livre</h2>
        <!--end::Modal title-->
        <!--begin::Close-->
        <div class="btn btn-sm btn-icon btn-active-color-primary" id="close_edit_modal_top">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
            <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <button type="button" class="btn-close"  id="closeEditBookModalForm"  data-bs-dismiss="modal" aria-label="Close" hidden></button>

        <!--end::Close-->
    </div>
    <!--end::Modal header-->
    <!--begin::Modal body-->
    <div class="modal-body py-lg-10 px-lg-10">
        <!--begin::Stepper-->
        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_stepper_example">
            <!--begin::Aside-->
            <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                <!--begin::Nav-->
                <div class="stepper-nav ps-lg-10">
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="  stepper-icon w-40px h-40px ">
                            <i class="stepper-check fas fa-check "></i>
                            <span class="stepper-number">1</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label" style="border-color: red">
                            <h3 class="stepper-title ">En-tête de Livre <i  id="erreur1"   style="color: red;display: none" class="fas fa-exclamation-triangle"data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="right" title="vous avez des erreur"></i></h3>
                            <div class="stepper-desc">Titre & Codebar</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">2</span>
                        </div>
                        <!--begin::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Détail</h3>
                            <div class="stepper-desc">Détail de Livre</div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Step 2-->
                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">3</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Déscription</h3>
                            <div class="stepper-desc">Ajouter un résumé</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 3-->
                    <!--begin::Step 4-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">4</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Image</h3>
                            <div class="stepper-desc">Ajouter un Photo de cover</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 4-->
                    <!--begin::Step 5-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">5</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Validation</h3>
                            <div class="stepper-desc">Confirmation avant valider</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 5-->
                </div>
                <!--end::Nav-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid py-lg-5 px-lg-15">
                <!--begin::Form-->
                <form class="form"  method="post"  action="{{ route('livre.edit') }}"  id="kt_modal_update_book_form" enctype="multipart/form-data">

                    <!--begin::Step 1-->
                    <div class="js-step current" data-step="1" data-kt-stepper-element="content" data-step="1">
                        <div class="w-100">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                    <span class="required">Titre de Livre</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Ajouter un titre de Livre"></i>

                                </label>
                                <input type="text"
                                       minlength="5"
                                       data-fv-string-length___message="The full name must be more than 5 "
                                       class="form-control form-control-lg form-control-solid" name="edit_book_name" id="edit_book_name" placeholder="" value="" />
                                <input name="_token" value="{{csrf_token()}}" hidden>


                            </div>
                            <input name="_currentcode" id="_currentcode" value="" hidden>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                    <span class="required">CodeBar</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Ajouter un CodeBar"></i>
                                </label>
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="text" id="edit_book_code" class="form-control form-control-lg form-control-solid" name="edit_book_code" placeholder="" value="" />
                                    </div>
                                    <div class="col-md-3">
                                        <a id="genbarcode2" class="btn btn-light-primary generat">Gen CodeBar</a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="js-step " data-step="2" data-kt-stepper-element="content">
                        <div class="w-100">
                            <!--begin::Input group-->
                            <div class="row">
                                <div   class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Auteur</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                    </label>
                                    <select class="form-select form-select-solid" id="edit_book_auteur" name="edit_book_auteur" data-placeholder="Select an option">
                                        <option></option>
                                        @foreach($auteurs as $auteur)
                                            <option value="{{$auteur->id}}"> {{$auteur->fullname}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col">
                                    <div   class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">Editeur</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                        </label>
                                        <input name="_token" value="{{csrf_token()}}" hidden>
                                        <input type="text" id="edit_book_editeur" class="form-control form-control-lg form-control-solid" name="edit_book_editeur" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div   class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">ISBN</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                        </label>
                                        <input type="text" id="edit_book_isbn" class="form-control form-control-lg form-control-solid" name="edit_book_isbn" placeholder="" value="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div   class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">Nombre d'exemplaires</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                        </label>
                                        <!--begin::Dialer-->
                                        <div class="input-group w-md-300px"
                                             data-kt-dialer="true"
                                             data-kt-dialer-min="0"
                                             data-kt-dialer-max="1000"
                                             data-kt-dialer-step="1">

                                            <!--begin::Decrease control-->
                                            <button class="btn btn-icon btn-outline btn-outline-secondary" type="button" data-kt-dialer-control="decrease">
                                                <i class="bi bi-dash fs-1"></i>
                                            </button>
                                            <!--end::Decrease control-->

                                            <!--begin::Input control-->
                                            <input type="text" class="form-control" id="edit_book_nbrexmp" name="edit_book_nbrexmp"  placeholder="Nombre Livre" value="10" data-kt-dialer-control="input"/>
                                            <!--end::Input control-->

                                            <!--begin::Increase control-->
                                            <button class="btn btn-icon btn-outline btn-outline-secondary" type="button" data-kt-dialer-control="increase">
                                                <i class="bi bi-plus fs-1"></i>
                                            </button>
                                            <!--end::Increase control-->
                                        </div>
                                        <!--end::Dialer-->
                                    </div>
                                </div>
                                <div class="col">
                                    <div   class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">Année</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                        </label>
                                        <input type="text" id="edit_book_annee" maxlength="4" max="2021" class="form-control form-control-lg form-control-solid" name="edit_book_annee" placeholder="" value="" />

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <label class="fs-6 fw-bold mb-2">
                                        <span class="required">Langue </span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                    </label>
                                    <select name="edit_book_langue" id="edit_book_langue" class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        <option value="Arabe" >Arabe</option>
                                        <option value="Anglais">Anglais </option>
                                        <option value="Français">Français</option>
                                        <option value="Espagnol">Espagnol</option>
                                    </select>
                                </div>

                                <div class="col-md-8">
                                    <div  wire:ignore class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">Catégorie </span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                        </label>
                                        <select id="edit_book_category" name="edit_book_category[]" class="form-select form-select-lg form-select-solid"  data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                            <option></option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Step 2-->
                    <!--begin::Step 3-->
                    <div class="js-step " data-step="3" data-kt-stepper-element="content">
                        <div class="w-100">

                            <div   class="d-flex flex-column mb-7 fv-row">

                                <label class="fs-6 fw-bold mb-2">Description</label>
                                <textarea id="edit_book_description" name="edit_book_description"></textarea>
                            </div>

                            <div  wire:ignore class="d-flex flex-column mb-7 fv-row">

                                <label class="fs-6 fw-bold mb-2">Mots Cles</label>
                                <input class="form-control form-control-solid" name="edit_book_cles" value="" id="edit_book_cles"/>
                            </div>
                        </div>

                    </div>
                    <!--end::Step 3-->
                    <!--begin::Step 4-->
                    <div  class="js-step " data-step="4" data-kt-stepper-element="content">

                        <div class="w-100">

                            <div class="d-flex flex-column mb-7 fv-row">
                                <input type="file" name="edit_book_photo"   value="c:/amrit.txt" accept="image/*" class="form-control" id="inputGroupFile02" onchange="loadFile(event)">
                            </div>

                            <div class="d-flex flex-column mb-7 fv-row">
                                <img width="400" name="book_photo_cover"   height="300" id="output22"/>

                            </div>
                        </div>
                        <script>
                            var loadFile = function(event) {
                                var reader = new FileReader();
                                reader.onload = function(){
                                    var output = document.getElementById('output');
                                    output.src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            };
                        </script>

                    </div>
                    <!--end::Step 4-->
                    <!--begin::Step 5-->
                    <div class="js-step " data-step="5"  data-kt-stepper-element="content">
                        <div class="w-100 text-center">
                            <!--begin::Heading-->
                            <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-3">Vérifier Toutes Les informations Avant De Soumettre</div>
                            <br>
                            <button type="submit" id="submitEditBookButton" class="btn btn-primary btn-lg" >modifie</button>
                            <br><br><br><br><br><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                            <span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
												</svg>
											</span>
                            <!--end::Svg Icon-->Back</button>
                        <button type="button" id="next_edit-livre" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
                            <!--end::Svg Icon--></button>
                        <a id="annuleredit" class="btn btn-danger">Annuler</a>


                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Stepper-->
    </div>
    <!--end::Modal body-->
    <!--begin::Modal footer-->

    <!--end::Modal footer-->

</div>
@push('custom-scripts')
    <script>


        const genbarcodebtn2 = document.getElementById('genbarcode2');

        genbarcodebtn2.addEventListener('click', function (e) {
            console.log("genbarcode clicked")
            $.ajax({
                type: 'get',
                url:"{{ route('livre.gen') }}",
                success: function (response) {
                    $('#edit_book_code').val(response.code);
                }

            });})


        var livreedittags = [];

        var input = document.querySelector("#edit_book_cles");
        tagify=new Tagify(input, {
            delimiter: ',',
            whitelist:[],
        }).on('add', function(e, tagName){
            console.log("add")
            livreedittags.push(e['detail'].data.value);
            console.log(livreedittags)
        }).on('remove', function(e, tagName){
            console.log("remove")
            a =e['detail'].data.value
             index = livreedittags.indexOf(a);
            livreedittags.splice(index, 1);
            console.log(index)
            console.log(livreedittags)

        });


        tinymce.init({
            selector: "#edit_book_description",
            setup: function (editor) {
                editor.on('change', function () {
                    tinymce.triggerSave();
                });
            },
            block_unsupported_drop: false,
            menubar: false,
            toolbar: ["styleselect fontselect fontsizeselect",
                "undo redo |  alignleft aligncenter alignright alignjustify | bold italic forecolor backcolor   | cut copy paste",
                "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  link image code"],
            plugins : "advlist autolink link image lists charmap print preview code"
        });
        var addForm = document.getElementById('kt_modal_update_book_form');
        var step6 = addForm.querySelector('.js-step[data-step="1"]');
        var step7 = addForm.querySelector('.js-step[data-step="2"]');
        var step8 = addForm.querySelector('.js-step[data-step="3"]');
        var step9 = addForm.querySelector('.js-step[data-step="4"]');
        var step10 = addForm.querySelector('.js-step[data-step="5"]');
        $("#edit_book_category").select2({
            maximumSelectionLength: 3
        });
        $("#edit_book_auteur").select2({
            dropdownParent: $('#EditBookModal')

        });
        var fv8 = FormValidation
            .formValidation(
                step9,
                {
                    fields: {
                        'edit_book_photo': {
                            validators: {
                                notEmpty: {
                                    message: 'Please select an image',
                                },
                                file: {
                                    extension: 'jpeg,jpg,png',
                                    type: 'image/jpeg,image/png',
                                    maxSize: 2097152, // 2048 * 1024
                                    message: 'The selected file is not valid',
                                },
                            },
                        },
                    },
                    plugins: {
                        declarative: new FormValidation.plugins.Declarative({
                            html5Input: true,
                        }),
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    },
                }
            );
        var fv5 = FormValidation
            .formValidation(
                step6,
                {
                    fields: {
                        'edit_book_name': {
                            validators: {
                                notEmpty: {
                                    message: 'champ requis'
                                },
                                /*                                regexp: {
                                                                    regexp: /^[a-z\s\d]+$/i,
                                                                    message: 'The full name can consist of alphabetical characters and spaces only',
                                                                },*/
                            }
                        },
                        'edit_book_code': {
                            validators: {
                                numeric: {
                                    message: 'The value is not a number',
                                    thousandsSeparator: '',
                                    decimalSeparator: '.',
                                },

                                notEmpty: {
                                    message: 'champ requis'
                                }
                            }
                        },
                    },
                    plugins: {
                        declarative: new FormValidation.plugins.Declarative({
                            html5Input: true,
                        }),
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    },
                }
            );
        var fv6 = FormValidation
            .formValidation(
                step7,
                {
                    fields: {
                        'edit_book_auteur': {
                            validators: {
                                notEmpty: {
                                    message: 'champ requis'
                                },
                                /*                                regexp: {
                                                                    regexp: /^[a-z\s\d]+$/i,
                                                                    message: 'The full name can consist of alphabetical characters and spaces only',
                                                                },*/
                            }
                        },
                        'edit_book_editeur': {
                            validators: {
                                notEmpty: {
                                    message: 'champ requis'
                                },
                            }
                        },
                        'edit_book_isbn': {
                            validators: {
                                isbn: {
                                    message: 'The value is not valid ISBN',
                                },
                                notEmpty: {
                                    message: 'champ requis'
                                },
                            }
                        },
                        'edit_book_nbrexmp': {
                            validators: {
                                numeric: {
                                    message: 'The value is not a number',
                                    thousandsSeparator: '',
                                    decimalSeparator: '.',
                                },

                                notEmpty: {
                                    message: 'champ requis'
                                }
                            }
                        },
                        'edit_book_annee': {
                            validators: {
                                numeric: {
                                    message: 'The value is not a number',
                                    thousandsSeparator: '',
                                    decimalSeparator: '.',
                                },

                                notEmpty: {
                                    message: 'champ requis'
                                }
                            }
                        },
                        'edit_  book_category': {
                            validators: {
                                notEmpty: {
                                    message: 'champ requis'
                                },
                            }
                        },
                    },
                    plugins: {
                        declarative: new FormValidation.plugins.Declarative({
                            html5Input: true,
                        }),
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    },
                }
            );
        var fv7 = FormValidation
            .formValidation(
                step8,
                {
                    fields: {
                        'edit_book_description': {
                            validators: {
                                notEmpty: {
                                    message: 'champ requis'
                                },
                            }
                        },
                    },
                    plugins: {
                        declarative: new FormValidation.plugins.Declarative({
                            html5Input: true,
                        }),
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    },
                }
            );
        // Stepper lement
        var currentstep=1;
        var stepperEl = document.querySelector("#kt_stepper_example");
        var marwane = new KTStepper(stepperEl);
        marwane.on("kt.stepper.change", function() {


        });

        marwane.on("kt.stepper.next", function() {
            switch (currentstep){
                case 1:{
                    console.log('anny changer1')
                    if(fv5){
                        fv5.validate().then(function (status) {
                            if (status == 'Valid') {
                                console.log('validated!');
                                var checkdata =$('#edit_book_code').val();
                                var currentcode=$('#_currentcode').val();
                                if(checkdata==currentcode){
                                    marwane.goTo(++currentstep);

                                }
                                else {
                                    console.log("errororororororo")
                                    $.ajax({
                                        type: 'get',
                                        url:"{{ route('livre.edit.step1') }}",
                                        data: {'code':checkdata,},
                                        success: function (response) {
                                            if(response.success){
                                                marwane.goTo(++currentstep);

                                            }
                                            else{
                                                Swal.fire({
                                                    text:"Désolé, code  bar deja utilisé",
                                                    icon:"warning",
                                                    buttonsStyling:!1,
                                                    confirmButtonText:"ok !",
                                                    customClass:{
                                                        confirmButton:"btn btn-primary"}
                                                    }
                                                )

                                            }

                                        }

                                    });

                                }}
                            else {
                                Swal.fire({
                                        text:"Désolé, il semble qu'il y ait des erreurs détectées, veuillez réessayer",icon:"warning",buttonsStyling:!1,confirmButtonText:"ok !",customClass:{
                                            confirmButton:"btn btn-primary"}
                                    }
                                )
                            }
                        });

                    }

                }break;
                case 2:{
                    console.log('anny changer2')
                    if(fv6){
                        fv6.validate().then(function (status) {
                            if (status == 'Valid') {
                                console.log('validated! 2');
                                marwane.goTo(++currentstep);

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

                }break;
                case 3:{
                    console.log('anny changer3')
                    if(fv7){
                        fv7.validate().then(function (status) {
                            if (status == 'Valid') {
                                console.log('validated! 3');
                                marwane.goTo(++currentstep);

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

                }break;
                case 4:{
                    console.log('anny changer4')


                    marwane.goTo(++currentstep);


                }break;
                case 5:{
                    console.log('anny changer')
                }
                    break;

            }

        });


        marwane.on("kt.stepper.previous", function (stepper) {
            marwane.goPrevious();
            --currentstep// go previous step
        });

        $('#close_edit_modal_top').on('click',function (e){
            e.preventDefault();
            currentstep=1;
            marwane.goFirst();
            $("#closeEditBookModalForm").trigger("click")
        })
        $('#annuleredit').on('click',function (e){
            e.preventDefault();
            currentstep=1;
            marwane.goFirst();
            $("#closeEditBookModalForm").trigger("click")
        })
        $(function (){
            $('#kt_modal_update_book_form').on('submit',function (e){
                e.preventDefault();
                console.log("submit")
                var form = this;
                data_book2=new FormData(form)
                data_book2.append("edit_book_tags", livreedittags);

                $.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:data_book2,
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    success:function(data){
                        if(data.status==200){
                            $("#closeEditBookModalForm").trigger("click")
                            Livewire.emit('refreshBookTable')
                            currentstep=1;
                            marwane.goFirst();
                        }

                    }

                });
            })
        })

    </script>
@endpush
