@extends('layout.header')

@section('title')
   <title>Food</title>
@endsection

@section('main-section')
<div>
    <div class="  border-2 flex justify-between items-center p-2  bg-green-500  text-white">
        <button class="border rounded p-1 bg-blue-700">Add New</button>
        <div class="search flex items-center border-2 rounded bg-white ">
            <form action="">
                <input
                    class="border-none outline-none text-black p-1 w-[300px]"
                    type="text"
                    name="search"
                    placeholder="Search..."
                    value="{{ request('search') }}"
                >
                <button class="border-l-2 text-blue-500 px-3">Search</button>
            </form>
        </div>
    </div>
    <table class="table-fixed w-[100%] border-2 border-collapse text-white">
        <thead>
          <tr class="p-5 border-2xl border-black bg-gray-700">
            <th class="p-3 w-12">Sr.</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Hotel Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food => $item )
            <tr class="border-2 text-center bg-gray-500">
                <td class="p-2">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->Hotel_name}}</td>
                <td>
                    <button class=" text-white bg-blue-700 py-1 px-2 mx-1 rounded">Update</button>
                    <button class=" text-white bg-red-600 py-1 px-2 mx-1 rounded">Delete</button>
                </td>
              </tr>
            @endforeach


        </tbody>
      </table>
</div>

@endsection
