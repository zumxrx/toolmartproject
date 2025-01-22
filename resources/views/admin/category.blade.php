<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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
            <div class="text-center py-8">
                <h2 class="text-4xl font-bold mb-8">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input class="border border-gray-400 rounded px-3 py-2" type="text" name="Category" placeholder="write category name">
                    <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" name="submit" value="Add category" >
                </form>
            </div>

            <table class="mx-auto mt-6 border-collapse border border-green-800">
                <thead>
                    <tr>
                        <th class="border border-green-800 px-4 py-2">Category Name</th>
                        <th class="border border-green-800 px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td class="border border-green-800 px-4 py-2">{{$data->Category_name}}</td>
                        <td class="border border-green-800 px-4 py-2 bg-red-700">
                            <a onclick="return confirm('Are you sure to delete this?')"class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{url('delete_category',$data->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
    </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>