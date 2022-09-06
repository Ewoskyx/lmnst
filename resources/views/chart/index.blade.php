@extends('home')
@section('css-part')
    <link rel="stylesheet" media="screen, print" href="{{ asset('assets/css/statistics/chartjs/chartjs.css') }}">
@endsection
@section('content')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
    <div class="reports_wrapper">
        <div class="chart_header">
            <h3>Rollerine Göre Kullanıcı Oranı</h3>
        </div>
        <div id="chartdiv"></div>
    </div>
@endsection


@section('scripts')
    <script>
        am5.ready(function() {
            var root = am5.Root.new("chartdiv");
            root.setThemes([
                am5themes_Animated.new(root)
            ]);
            var chart = root.container.children.push(am5percent.PieChart.new(root, {
                radius: am5.percent(90),
                innerRadius: am5.percent(50),
                layout: root.horizontalLayout
            }));
            var series = chart.series.push(am5percent.PieSeries.new(root, {
                name: "Series",
                valueField: "count",
                categoryField: "category"
            }));
            series.data.setAll([{
                category: "User",
                count: {{ $user_count }}
            },
            {
                category: "Super Admin",
                count: {{ $admin_count }}
            }
        ]);
            series.labels.template.set("visible", false);
            series.ticks.template.set("visible", false);

            series.slices.template.set("strokeOpacity", 0);
            series.slices.template.set("fillGradient", am5.RadialGradient.new(root, {
                stops: [{
                    brighten: -0.8
                }, {
                    brighten: -0.8
                }, {
                    brighten: -0.5
                }, {
                    brighten: 0
                }, {
                    brighten: -0.5
                }]
            }));
            var legend = chart.children.push(am5.Legend.new(root, {
                centerY: am5.percent(50),
                y: am5.percent(50),
                layout: root.verticalLayout
            }));

            legend.valueLabels.template.setAll({
                textAlign: "right"
            })

            legend.labels.template.setAll({
                maxWidth: 140,
                width: 140,
                oversizedBehavior: "wrap"
            });

            legend.data.setAll(series.dataItems);

            series.appear(1000, 100);

        });
    </script>
@endsection
