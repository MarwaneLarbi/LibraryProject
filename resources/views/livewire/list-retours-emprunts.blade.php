<div>
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_emprunts_retours">
        <tbody class="fw-bold text-gray-600" id="tbody3">
        <tr role="group" class="bg-danger">
            <td colspan="5" class="">
                <div class="row">
                    <div class="col-md-12">
                        <strong class="d-flex justify-content-center text-light">Emprunts Retours </strong>
                    </div>

                </div>
            </td>

        </tr>
        @foreach($abonneretours as $abonne)
            <tr>

                <td class="id_mar min-w-125px text-center ">
                    {{$abonne->id}}
                </td>

                <td class="min-w-125px text-center ">{{$abonne->titre}}</td>
                <td class="min-w-125px text-center ">{{$abonne->editeur}}</td>
                <td class="min-w-125px text-center ">
                    {{$abonne->langue}}
                </td>
                <td class="text-end min-w-125px text-center">
                    <button type="button" value="{{$abonne->id}}" class="btn btn-light-danger annulerRetourtbtn btn-sm">Annuler</button>
                    <!--end::Menu-->
                </td>
                <!-- Modal-deleteAuteur  -->
                <!--end::Action=-->
            </tr>
        @endforeach
        </tbody>

    </table>
    <script>


        $(document).on('click', '.retourPendingtbtn', function (e) {
                e.preventDefault();
                var book_id = $(this).val();
                console.log(book_id);
                $.ajax({
                    type: "post",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'id':book_id,
                    },
                    url:"{{ route('emprunts.retour') }}",
                    success: function (response) {
                        Livewire.emit('refreshAnciensEmprunts')
                    }
                });
            }
        );

        $(document).on('click', '.annulerRetourtbtn', function (e) {
                e.preventDefault();
                var book_id = $(this).val();
                console.log(book_id);
                $.ajax({
                    type: "post",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'id':book_id,
                    },
                    url:"{{ route('emprunts.annulerRetour') }}",
                    success: function (response) {
                        Livewire.emit('refreshAnciensEmprunts')
                        Livewire.emit('refreshAretoursEmprunts')
                        Livewire.emit('refreshActivitiesAbonneTable')

                    }
                });
            }
        );

    </script>
    <script>
        function onBeforeUnload(e) {
            if (thereAreUnsavedChanges()) {
                e.preventDefault();
                e.returnValue = '';
                return;
            }

            delete e['returnValue'];
        }

        window.addEventListener('beforeunload', onBeforeUnload);
    </script>
</div>
