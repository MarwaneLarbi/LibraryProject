<div>
    <div class="card card-xl-stretch mb-xl-8">
        <!--begin::Header-->
        <div class="card-header align-items-center border-0 mt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="fw-bolder mb-2 text-dark">Activities</span>
                <span class="text-muted fw-bold fs-7">ToTal Empruntes    <span class="fw-bolder mb-2 text-danger">{{$activities->count()}}</span></span>
            </h3>
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                    <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
																</g>
															</svg>
														</span>
                    <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484c40794a0">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->

                    <!--begin::Form-->
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

                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-5">
            <!--begin::Timeline-->
            <div class="timeline-label">

                <!--begin::Item-->
                @foreach ($activities as $activitie)
                <div class="timeline-item">
                    <!--begin::Label-->
                    <div class="timeline-label fw-bolder text-gray-800 fs-6 ">{{\Carbon\Carbon::parse($activitie->date)->format('d/m')}}</div>
                    <!--end::Label-->
                    <!--begin::Badge-->
                    <div class="timeline-badge">
                        @if($activitie->status=='active')

                            <i class="fa fa-genderless text-success fs-1"></i>
                        @elseif($activitie->status=='inactive')
                            <i class="fa fa-genderless text-danger fs-1"></i>
                        @endif
                    </div>
                    <!--end::Badge-->
                    <!--begin::Text-->
                    <div class="timeline-content d-flex">
                        @if($activitie->status=='active')

                            <span class="fw-bolder text-gray-800 ps-3"> Emprunté Le Livre : <a class="text-primary">
                                {{ \App\Models\livre::find($activitie->livre_id)->titre }}</a>
                            </span>
                        @elseif($activitie->status=='inactive')
                            <span class="fw-bolder text-gray-800 ps-3"> Rendu Le Livre : {{ \App\Models\livre::find($activitie->livre_id)->titre }}</span>
                        @endif
                    </div>                    <!--end::Text-->
                </div>
            @endforeach
            </div>
            <!--end::Timeline-->
        </div>
    {{ $activities->links() }}

    <!--end: Card Body-->
    </div>

</div>
