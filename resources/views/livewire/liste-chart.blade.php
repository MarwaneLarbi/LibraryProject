<div>

    <div class="row">
        <div class="col-md-7">
            <div class="card card-bordered">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Emprunts / Retours</span>
                        <span class="text-muted fw-bold fs-7">More than
                            {{DB::table('_activities_abonne')-> count()}}
</span>
                    </h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar" data-kt-buttons="true">
                        <a  value="aaaaaaa" class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1 active" id="kt_charts_widget_2_year_btn">Year</a>
                        <a  class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">Month</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <div class="card-body">
                    <div id="kt_apexcharts_1" style="height: 485px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-bordered">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Livres</span>
                        <span class="text-muted fw-bold fs-7">More than
                        {{\App\Models\livre::all()->count()}}
                        </span>
                    </h3>

                </div>
                <div class="card-body">
                    <div id="kt_amcharts_3" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card card-bordered">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Nombres Livres</span>
                <span class="text-muted fw-bold fs-7">More than
                        {{\App\Models\livre::all()->count()}}
                        </span>
            </h3>

        </div>
        <div class="card-body">
            <div id="kt_apexcharts_3" style="height: 350px;"></div>
        </div>
    </div>
</div>
@push('custom-scripts')
    <script>
        perYears('years')
        const perYear = document.getElementById('kt_charts_widget_2_year_btn');
        perYear.addEventListener('click', function (e) {
            perYears('years')
        });
        const perMonth = document.getElementById('kt_charts_widget_2_month_btn');
        perMonth.addEventListener('click', function (e) {
            perYears('month')
        });
function perYears(option){
    console.log(option)
    var element = document.getElementById('kt_apexcharts_1');

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
    var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
    var baseColor = KTUtil.getCssVariableValue('--bs-primary');
    var secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');

    if (!element) {

    }
    if(option=='years'){
        var options = {
            series: [{
                name: 'Emprunts',
                data: [

                    @for($i=1;$i<13;$i++)
                        {{
                            DB::table('_activities_abonne')
            ->
            where(DB::raw('MONTH(created_at)'), '=', $i)
            ->
            where('status', '=', 'active')
            ->
            count().','
    }}
                        @endfor
                ]
            }, {
                name: 'Retours',
                data: [

                    @for($i=1;$i<13;$i++)
                        {{
                            DB::table('_activities_abonne')
            ->
            where(DB::raw('MONTH(created_at)'), '=', $i)
            ->
            where('status', '=', 'inactive')
            ->
            count().','
    }}
                        @endfor
                ]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['janv', 'févr', 'mars', 'avr', 'mai', 'juin', 'juill', 'août', 'sept', 'oct', 'nov', 'déc'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return '' + val + ' Livres'
                    }
                }
            },
            colors: [baseColor, '#E91E63'],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

    }
    else if(option=='month'){
        var options = {
            series: [{
                name: 'Emprunts',
                data: [

                    @for($i=1;$i<30;$i++)
                        {{
                            DB::table('_activities_abonne')
                   ->
                   where(DB::raw('DAY(created_at)'), '=', $i)
                   ->
                   where(DB::raw('MONTH(created_at)'), '=', now()->format('m'))
                   ->
                   where('status', '=', 'active')
                   ->
                   count().','
    }}
                        @endfor
                ]
            }, {
                name: 'Retours',
                data: [

                    @for($i=1;$i<30;$i++)
                        {{
                            DB::table('_activities_abonne')
                   ->
                   where(DB::raw('DAY(created_at)'), '=', $i)
                   ->
                   where(DB::raw('MONTH(created_at)'), '=', now()->format('m'))
                   ->
                   where('status', '=', 'inactive')
                   ->
                   count().','
    }}
                        @endfor
                ]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: [

                    @for($i=1;$i<31;$i++)
                        {{
                            $i.','
    }}
                        @endfor

                ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return '' + val + ' Livres'
                    }
                }
            },
            colors: [baseColor, '#E91E63'],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

    }

    var chart = new ApexCharts(element, options);
    chart.render();
}

        //////2///////////////////
        am4core.ready(function () {

            // Themes begin
            am4core.useTheme(am4themes_dataviz);
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart
            chart2 = am4core.create('kt_amcharts_3', am4charts.PieChart);
            chart2.hiddenState.properties.opacity = 0; // this creates initial fade-in

            chart2.data = [
                @foreach($categoriesChart as $category)
                {
                    country: '{{$category->name}}',
                    value: {{$category->livres->count()}}
                },
                @endforeach
            ];

            var series = chart2.series.push(new am4charts.PieSeries());
            series.dataFields.value = 'value';
            series.dataFields.radiusValue = 'value';
            series.dataFields.category = 'country';
            series.slices.template.cornerRadius = 6;
            series.colors.step = 1;
            chart2.responsive.enabled = true;

            series.hiddenState.properties.endAngle = -90;

            chart2.legend = new am4charts.Legend();

        }); // end am4core.ready()



        ////3////////////
        var element3 = document.getElementById('kt_apexcharts_3');

        var height = parseInt(KTUtil.css(element3, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var baseColor = KTUtil.getCssVariableValue('--bs-info');
        var lightColor = KTUtil.getCssVariableValue('--bs-light-info');

        if (!element3) {

        }

        var options3 = {
            series: [{
                name: 'Livres',
                data: [

                    @for($i=2012;$i<2023;$i++)
                        {{
                  $user=       \App\Models\livre::where(DB::raw('YEAR(created_at)'), '=', $i)->count().','

    }}
                        @endfor
                ]
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {

            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [baseColor]
            },
            xaxis: {
                categories: ['2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022' ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    position: 'front',
                    stroke: {
                        color: baseColor,
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function (val) {
                        return '' + val + ' Livres'
                    }
                }
            },
            colors: [lightColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            markers: {
                strokeColor: baseColor,
                strokeWidth: 3
            }
        };

        var chart3 = new ApexCharts(element3, options3);
        chart3.render();
    </script>

@endpush
