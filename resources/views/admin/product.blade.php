<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tool</title>
    @include('admin.css')

    <!-- Add Tailwind CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
       
        <!-- container-scroller -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('messege'))
                    <div class="alert alert-success"> 
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('messege')}}
                    </div>
                @endif

                <div class="flex justify-center pt-0">
                    <div class="max-w-md mx-auto p-4 bg-gray-800 rounded-lg shadow-md">
                        <h1 class="text-4xl pb-10">Add Tool</h1>
                        <form action="{{url('/add_tool')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Tool Title -->

                            <div class="mb-4">
                                <label class="block w-64 mb-2">Tool Title</label>
                                <input class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                       type="text" name="title" placeholder="Enter tool title" required>
                            </div>

                            <!-- Tool Description -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Tool Description</label>
                                <input class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                       type="text" name="description" placeholder="Enter tool description" required>
                            </div>

                            <!-- Rental Price -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Rental Price</label>
                                <input class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                       type="number" name="rental_price" placeholder="Enter rental price per day" required>
                            </div>

                            <!-- Condition -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Condition</label>
                                <select class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                        name="condition" required>
                                    <option value="" selected="">Select condition</option>
                                    <option value="new">New</option>
                                    <option value="used">Used</option>
                                    <option value="refurbished">Refurbished</option>
                                </select>
                            </div>

                            <!-- Availability -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Availability</label>
                                <select class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                        name="availability" required>
                                    <option value="available" selected>Available</option>
                                    <option value="not_available">Not Available</option>
                                </select>
                            </div>

                            <!-- Product Category -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Tool Category</label>
                                <select class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                        name="category" required>
                                    <option value="" selected="">Select category</option>
                                    @foreach($category as $category)
                                        <option value="{{$category->Category_name}}">{{$category->Category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Product Quantity -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Quantity</label>
                                <input class="text-black mb-2 w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                       type="number" min="0" name="quantity" placeholder="Enter quantity" required>
                            </div>

                            <!-- Tool Image -->
                            <div class="mb-4">
                                <label class="block w-64 mb-2">Tool Image</label>
                                <input class="w-full p-2 text-sm text-gray-700 rounded-lg border border-gray-400" 
                                       type="file" name="image" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" 
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    Add Tool
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    </body>
</html>
