<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Bootstrap CSS -->
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      @vite('resources/css/app.css')
    @yield('title')

</head>
<body class="flex ">
   <nav class="flex flex-col  text-white w-[15vw]   h-[100vh] bg-gray-800">
    <div class="logo px-9 pt-2 pb-9 text-green-600">
      <h1 class=" text-[40px] cursor-pointer">Hotel</h1>
    </div>
    <div  >
      <ul class="flex flex-col gap-6 text-xl  cursor-pointer">
          <a href="{{url('/')}}"><li class="hover:text-green-900 hover:font-semibold   px-9 py-2">Dashbord</li></a>
        {{-- <a href="{{url('/')}}"><li class="hover:text-green-900 hover:font-semibold hover:underline ">Home</li></a> --}}
        <a href="{{url('/hotel')}}"><li class="hover:text-green-900 hover:font-semibold px-9 py-2">Hotels</li></a>
        <a href="{{url('/food')}}"><li class="hover:text-green-900 hover:font-semibold  px-9 py-2">Food</li></a>
        {{-- <a href="{{url('/')}}"><li class="hover:text-green-900 hover:font-semibold hover:underline">ContacUs</li></a> --}}

      </ul>
    </div>
   </nav>
  <div>
    <nav class="bg-gray-700 w-[85vw] h-[50px] text-white  flex items-center text-2xl pl-5">Dashbord</nav>
    <div class=" p-5 b-[#fffff]  w-[85vw] overflow-auto">
     @yield("main-section")

 </div>
  </div>
@include('layout.footer')


