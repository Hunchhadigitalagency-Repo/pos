@extends('dashboard.layout.main')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="rounded-lg dark:border-gray-700 mt-14 flex justify-between content-start item-center">
        <h1 class="flex items-center font-bold text-[20px]">Dashboard</h1>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5">
        <div class="bg-gray-100">
            <p class="p-3 pl-5 text-xl">Store Sales</p>
            <div id="curve_chart" style="width: 100%; height: 300px"></div>
        </div>
        <div>
            <!-- <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt=""> -->
        </div>
       
    </div>


</div>

<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales'],
            ['2004', 1000],
            ['2005', 1170],
            ['2006', 660],
            ['2007', 1030]
        ]);

        var options = {
            curveType: 'function',
            backgroundColor: '#f3f4f6',
            chartArea: {left:60,top:20,width:'85%',height:'75%'},
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>
@endsection