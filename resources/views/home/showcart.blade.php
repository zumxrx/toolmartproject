
<!DOCTYPE html>
<html lang="en">

<style>
.center
{
        margin: auto;
        width:70%;
        text-align:Center;
        padding:30px;


}
table,th,td{
    border:1px solid gray;

}
.th_deg
{
    font-size:30px;
    padding:5px;
    background:skyblue;

}
.img_deg
{
    height:200px;
    width:200px;

}
.tot_deg
{
    font-size:20px;
    padding:50px;
    text-align:center;




}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Decant - Perfume Store | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="home/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="home/css/core-style.css">
    <link rel="stylesheet" href="home/style.css">

    <!-- Responsive CSS -->
    <link href="home/css/responsive.css" rel="stylesheet">

</head>
<body>

<!-- ****** Header Area Start ****** -->
@include('home.header')
<!-- ****** Header Area End ****** -->

<div>

    <table class="center">
        <tr>

        <th class="th_deg">Prduct title</th>
        <th class="th_deg">product quantity</th>
        <th class="th_deg">price</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Action</th>
    </tr>
    <?php $totalprice=0 ; ?>
            @foreach($cart as $cart)
    <tr>
        <td>{{$cart->product_title}}</td>
        <td>{{$cart->quantity}}</td>
        <td>${{$cart->price}}</td>
        <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
        <td>
        <a class="btn btn-danger" onclick="return confirm('Are You sure that, you wanna remove ?')" href="{{ url('remove_cart', $cart->id) }}">Remove Product</a>
        </td>

        </tr>

        <?php $totalprice= $totalprice + $cart->price ?>
        @endforeach



    </table>
    <div>
       <h1  class="tot_deg"> Total Price: ${{$totalprice}}</h1>
    </div>

</div>


        <!-- ****** Footer Area Start ****** -->
        @include('home.footer')
        <!-- ****** Footer Area End ****** -->


</body>

</html>