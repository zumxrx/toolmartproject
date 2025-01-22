<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
      .center {
        margin: auto;
        width: 90%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
      }
      .font_size {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
      }
      .img_size {
        width: 180px;
        height: 150px;
      }
      .th_color {
        background: skyblue;
      }
      .th_deg {
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.header')

      <div class="main-panel">
        <div class="content-wrapper">

          @if(session()->has('messege'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('messege') }}
          </div>
          @endif

          <h2 class="font_size">All Tools</h2>

          <table class="center">
            <tr class="th_color">
              <th class="th_deg">Tool Title</th>
              <th class="th_deg">Description</th>
              <th class="th_deg">Category</th>
              <th class="th_deg">Quantity</th>
              <th class="th_deg">Rental Price</th>
              <th class="th_deg">Condition</th>
              <th class="th_deg">Image</th>
              <th class="th_deg">Delete</th>
              <th class="th_deg">Edit</th>
            </tr>
            @foreach ($tools as $tool)
            <tr>
              <td>{{ $tool->title }}</td>
              <td>{{ $tool->description }}</td>
              <td>{{ $tool->category }}</td>
              <td>{{ $tool->quantity }}</td>
              <td>{{ $tool->rental_price }}</td>
              <td>{{ $tool->condition }}</td>
              <td>
                <img class="img_size" src="/storage/{{ $tool->image }}">
              </td>
              <td>
                <a class="btn btn-danger"
                  onclick="return confirm('Are sure u wanna delete this?')"
                  href="{{ url('delete_tool', $tool->id) }}">Delete</a>
              </td>
              <td>
                <a class="btn btn-success" href="{{ url('update_product', $tool->id) }}">Edit</a>
              </td>
            </tr>
            @endforeach
          </table>

        </div>
      </div>
    </div>
    @include('admin.script')
  </body>
</html>
