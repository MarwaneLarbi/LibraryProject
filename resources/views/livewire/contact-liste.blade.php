<div>
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">Nom & Prenom</th>
                    <th class="min-w-125px">email</th>

                    <th class="min-w-125px">sujet</th>
                    <th class="min-w-125px">Description</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                @foreach($messages as $message)
                    <tr>

                        <!--end::Name=-->
                        <!--begin::Email=-->
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$message->name}} {{$message->lastname}}</a>
                        </td>
                        <!--end::Email=-->
                        <!--begin::Company=-->
                        <td>{{$message->email}}</td>
                        <!--end::Company=-->
                        <!--begin::Payment method=-->
                        <td >
                            {{$message->subject}}
                           </td>
                        <!--end::Payment method=-->
                        <!--begin::Date=-->
                        <td>
                            <div class="modal fade" id="exampleModalcontacts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="message-text"   readonly style="height: 600px">

                                                    </textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-active-primary" data-bs-toggle="modal" data-bs-target="#exampleModalcontacts" data-bs-whatever="{{$message->message}}" >
                                Afficher le Message
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>

            {{ $messages->links() }}
        </div>
        <!--end::Table-->
    </div>
</div>
<script>
    var exampleModal = document.getElementById('exampleModalcontacts')
    exampleModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body textarea')
        modalTitle.textContent = 'New message  '
        modalBodyInput.value = recipient
    })

</script>
