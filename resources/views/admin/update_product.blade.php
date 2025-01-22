<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/public">
    <title>Update Tool</title>

    @include('admin.css')

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2c2f33;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .main-panel {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .content-wrapper {
            background: #23272a;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            width: 100%;
            padding: 30px;
        }

        h1 {
            font-size: 30px;
            color: #ffffff;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .alert {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
            position: relative;
        }

        .alert .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #ffffff;
        }

        label {
            font-weight: bold;
            color: #ffffff;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #444;
            border-radius: 5px;
            font-size: 14px;
            color: #ffffff;
            background-color: #2c2f33;
            appearance: none;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="file"]:focus,
        select:focus {
            border-color: #7289da;
            outline: none;
        }

        select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23ffffff' d='M2 0L0 2h4z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 10px;
        }

        select option {
            background-color: #2c2f33;
            color: #ffffff;
        }

        select option:checked {
            background-color: #7289da;
            color: #ffffff;
        }

        input[type="submit"] {
            background-color: #7289da;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            width: 100%;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #5b6eae;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group:last-child {
            margin-bottom: 0;
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
                <div class="alert">
                    <span class="close" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ session()->get('messege') }}
                </div>
                @endif

                <h1>Update Tool</h1>

                <form action="{{ url('/update_tool_confirm', $tool->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Tool Title</label>
                        <input type="text" name="title" placeholder="Write a title" required value="{{ $tool->title }}">
                    </div>

                    <div class="form-group">
                        <label>Tool Description</label>
                        <input type="text" name="description" placeholder="Write a description" required value="{{ $tool->description }}">
                    </div>

                    <div class="form-group">
                        <label>Tool Rental Price</label>
                        <input type="number" name="rental_price" placeholder="Write a rental price" required value="{{ $tool->rental_price }}">
                    </div>

                    <div class="form-group">
    <label>Tool Condition</label>
    <select name="condition" required>
        <option value="" disabled selected>Select condition</option>
        <option value="new">New</option>
        <option value="used">Used</option>
        <option value="refurbished">Refurbished</option>
    </select>
</div>

<div class="form-group">
    <label>Tool Availability</label>
    <select name="availability" required>
        <option value="" disabled selected>Select availability</option>
        <option value="available">Available</option>
        <option value="not_available">Not Available</option>
    </select>
</div>

<div class="form-group">
    <label>Tool Category</label>
    <select name="category" required>
        <option value="" disabled selected>Select category</option>
        @foreach($categories as $category)
        <option value="{{ $category->Category_name }}">
            {{ $category->Category_name }}
        </option>
        @endforeach
    </select>
</div>


                    <div class="form-group">
                        <label>Tool Quantity</label>
                        <input type="number" min="0" name="quantity" placeholder="Write a quantity" required value="{{ $tool->quantity }}">
                    </div>

                    <div class="form-group">
                        <label>Change Tool Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Update Tool">
                    </div>
                </form>
            </div>
        </div>

        @include('admin.script')
    </div>
</body>

</html>
