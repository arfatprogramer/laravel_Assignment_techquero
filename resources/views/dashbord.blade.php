@extends('layout.header')
@section('title')
    <title>Dashbord</title>
@endsection

@section('main-section')
   <div class="flex justify-around">
    <div class=" border-2 border-black p-4 m-2 rounded-2xl">
        <h2 class="font-bold text-[20px]">Total numbers of Hottel </h2>
        <p class="text-center text-[30px]">{{count($hotels)}}</p>
    </div>
    <div class=" border-2 border-black p-4 m-2 rounded-2xl">
        <h2 class="font-bold text-[20px]">Total numbers of food items</h2>
        <p class="text-center text-[30px]">{{count($foods)}}</p>
    </div>

   </div>

   <div class="border-2 border-black rounded p-4  flex justify-center items-center ">

    <div class="h-[400px] w-[400px]"><canvas id="myChart"></canvas></div>
    <script>
        const labels = @json($labels); // Pass labels from the controller
        const data = @json($data);     // Pass data from the controller

        const pieData = {
            labels: labels,
            datasets: [{
                label: 'Hotels',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)'

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'

                ],
                borderWidth: 2
            }]
        };

        const config = {
            type: 'pie',
            data: pieData,
        };

        const myPieChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</div>
@endsection
