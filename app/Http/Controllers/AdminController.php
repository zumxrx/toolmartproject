<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tool;
use App\Models\Order;

class AdminController extends Controller
{


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        // Function implementation goes here
        $data = new Category;
        $data->Category_name = $request->Category;
        $data->save();

        return redirect()->back()->with('messege', 'Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with("messege", "Category Deleted Successfully");
    }

    public function view_product()
    {
        $category = Category::all();
        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        // Change from product to Tool here
        $tool = new Tool;

        $tool->title = $request->title;
        $tool->description = $request->Description;
        $tool->price = $request->price; // Renamed field (if different, adjust accordingly)
        $tool->quantity = $request->quantity;
        $tool->discount_price = $request->dis_price;
        $tool->category = $request->category;

        // Handle image upload
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $tool->image = $imagename;

        // Save the tool
        $tool->save();

        return redirect()->back()->with('messege', 'Tool added successfully...');
    }

    public function showProductsAndTools()
    {
        // Fetch both products and tools
        $tools = Tool::all(); // Fetch tools from the Tool model
        return view('admin.show_product', compact('tools')); // Only pass tools to the view
    }

    public function delete_tool($id)
    {
        // Change from product to Tool here
        $tool = Tool::find($id);
        $tool->delete();

        return redirect()->back()->with('messege', 'Tool deleted successfully');
    }

    public function editProduct($id)
    {
        $tool = Tool::find($id); // Fetch tool instead of product
        $categories = Category::all(); // Or however you're fetching categories
        return view('admin.update_product', compact('tool', 'categories')); // Pass tool instead of product
    }

    public function update_tool_confirm(Request $request, $id)
    {
        // Change from product to Tool here
        $tool = Tool::find($id);

        $tool->title = $request->title;
        $tool->description = $request->description;
        $tool->rental_price = $request->rental_price;
        $tool->condition = $request->condition;
        $tool->availability = $request->availability;
        $tool->category = $request->category;
        $tool->quantity = $request->quantity;
        $tool->image = $request->category;


        // Handle image upload if available
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $tool->image = $imagename;
        }

        $tool->save();
        return redirect()->back()->with('messege', 'Tool Updated Successfully');
    }

    public function add_tool(Request $request)
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'rental_price' => 'required|numeric',
            'condition' => 'required|string',
            'availability' => 'required|string',
            'category' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('tool_images', 'public');

        // Save tool to the database
        Tool::create([
            'title' => $request->title,
            'description' => $request->description,
            'rental_price' => $request->rental_price,
            'condition' => $request->condition,
            'availability' => $request->availability,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'image' => $imagePath,
        ]);

        // Redirect with success message
        return redirect()->back()->with('messege', 'Tool added successfully!');
    }

    public function order()
    {
        // dd(order::all());
        $order=Order::all();
        return view('admin.order',compact('order'));
    }


    public function delivered($id)
    {
        $order=order::find($id);

        $order->delivery_status="Delivered";

        $order->payment_status="Paid";
        $order->save();
        return redirect()->back();
    }
}
