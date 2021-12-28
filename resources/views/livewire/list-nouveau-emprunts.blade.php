<div>
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_emprunts_recents">
        <!--begin::Table head-->
        <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

            <th class="min-w-125px text-center">ID</th>
            <th class="min-w-125px text-center">Titre</th>
            <th class="min-w-100px text-center">Editeur</th>
            <th class="min-w-125px text-center">Langue</th>

            <th class="text-end text-center ">Actions</th>
        </tr>
        <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody id="tbodynew" class="fw-bold text-gray-600">
        <tr role="group" class="bg-success">
            <td colspan="6" class="">
            <div class="row">
                <div class="col-md-12">
                    <strong class="d-flex justify-content-center text-light">Nouveau Emprunts</strong>
                </div>

            </div>
            </td>
        </tr>
        @foreach($abonneDraft as $abonne)
        <tr>

            <td value=" {{$abonne->id}}" class=" text-center id_mar">
                {{$abonne->id}}
            </td>

            <td class="min-w-125px text-center ">{{$abonne->titre}}</td>
            <td class="min-w-125px text-center ">{{$abonne->editeur}}</td>
            <td class="min-w-125px text-center ">
                {{$abonne->langue}}
            </td>
            <td class="text-end text-center">
                <button type="button" value="{{$abonne->id}}" class="btn btn-light-danger deletedraftbtn btn-sm">Supprimer</button>
                <!--end::Menu-->
            </td>
            <!-- Modal-deleteAuteur  -->
            <!--end::Action=-->
        </tr>
        @endforeach
        </tbody >

        <!--end::Table body-->
    </table>


    <script>


        $(document).on('click', '.deletedraftbtn', function (e) {
                e.preventDefault();
                var book_id = $(this).val();
                console.log(book_id);
                $.ajax({
                    type: "GET",
                    url: "/emprunts/delete_current/"+book_id,
                    success: function (response) {
                        Livewire.emit('refreshListNouveauEmprunts')
                    }
                });
            }
        );

    </script>
</div>
@push('custom-scripts')
    <script>

        ///valider emprunts
        const validerEmprunts = document.getElementById('validerEmprunts');
        validerEmprunts.addEventListener('click', function (e) {
            var retourEmprunts=[]
            var newEmprunts=[]
            e.preventDefault();
            $("table#table_emprunts_recents tbody#tbodynew").each(function( i ) {
                $(".id_mar", this).each(function( j ) {
                    newEmprunts.push(parseInt(this.innerHTML));
                });
            });
            $("table#table_emprunts_retours tbody#tbody3").each(function( i ) {
                $(".id_mar", this).each(function( j ) {
                    retourEmprunts.push(parseInt(this.innerHTML));
                });
            });

            if(newEmprunts.length==0 && retourEmprunts.length==0){
                console.log('khawi')
            }
            else{
                $.ajax({
                    type: "post",
                    data:{
                        '_token':"{{csrf_token()}}",
                        'new_ids':newEmprunts,
                        'retour_ids':retourEmprunts,

                    },
                    url:"{{ route('emprunts.store') }}",
                    success: function (response) {

                        Livewire.emit('refreshAnciensEmprunts')
                        Livewire.emit('refreshListNouveauEmprunts')
                        Livewire.emit('refreshAretoursEmprunts')
                        Livewire.emit('refreshActivitiesAbonneTable')



                    }
                });

            }

        });
///


    </script>
@endpush
