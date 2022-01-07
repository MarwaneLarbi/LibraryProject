

<!DOCTYPE html>
@extends('Layouts.gest')
@section('content')
    <div style="padding: 0 2%;" >
        <div class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a  class="card bg-body  card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <i class="fas fa-book text-primary fs-2qx"></i>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5">{{\App\Models\livre::all()->count()}}</div>
                        <div class="fw-bold text-gray-400">Nombre Totals des Livres</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a  class="card bg-dark  card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                        <i class="fas fa-user-friends text-light fs-2qx"></i>
                        <!--end::Svg Icon-->
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{\App\Models\abonne::all()->count()}}</div>
                        <div class="fw-bold text-gray-100">Nombre Totals des Abonnes</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a  class="card bg-success  card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                        <i class="fas fa-arrow-up text-light fs-2qx"></i>

                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                            {{DB::table('_activities_abonne')->where('status', '=', 'active')-> count()}}
                        </div>
                        <div class="fw-bold text-white">Nombre Totals des Emprunts</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a  class="card bg-danger  card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                        <i class="fas fa-arrow-down text-light fs-2qx"></i>

                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">
                            {{DB::table('_activities_abonne')->where('status', '=', 'inactive')-> count()}}
                        </div>
                        <div class="fw-bold text-white">Nombre Totals des Retours</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
        </div>
        <div class="card card-bordered">
            <div class="card-body">
                <h1 class="text-xxl-center"> Statistique</h1>
            </div>
        </div>
        <br>
        @livewire('liste-chart')


    </div>

@endsection
