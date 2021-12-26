<div>
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_emprunts">
        <tbody class="fw-bold text-gray-600" id="tbody_pending">
        <tr role="group" class="bg-warning">
            <td colspan="5" class="">
                <div class="row">
                    <div class="col">
                        <strong class="d-flex justify-content-center text-light">Emprunts En attent de retours </strong>
                    </div>

                </div>
            </td>

        </tr>
        @foreach($abonnePending as $abonne)
            <tr>
                <td class="id_pending min-w-125px text-center ">
                    {{$abonne->id}}
                </td>

                <td class="min-w-125px text-center ">{{$abonne->titre}}</td>
                <td class="min-w-125px text-center ">{{$abonne->editeur}}</td>
                <td class="min-w-125px text-center ">
                    {{$abonne->langue}}
                </td>
                <td class="text-end min-w-125px text-center">
                    <button type="button" value="{{$abonne->id}}" class="btn btn-light-danger retourPendingtbtn btn-sm">Retour</button>
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
                    Livewire.emit('refreshAretoursEmprunts')

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
