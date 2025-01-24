<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\tool;

use App\Models\Cart;

use App\Models\Order;

use Session;

use Stripe;

use App\Models\Review;




class HomeController extends Controller
{
    public function index()
    {
        $tool=tool::paginate(12);
        return view('home.userpage',compact('tool'));
    }


    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.dashboard');
        }
        else
        {
            $tool = tool::paginate(10);
            return view('home.userpage', compact('tool'));
        }
    }
    public function product_details($id)
    {
        $tool = Tool::findOrFail($id);
        $reviews = Review::where('tool_id', $id)
                        ->with('user')
                        ->latest()
                        ->get();
        
        return view('home.product_details', compact('tool', 'reviews'));
    }

    public function add_cart(Request $request, $id)
    {
        if(Auth::id())
        {
        $user=Auth::user();

        $tool=tool::find($id);

        $cart=new cart;

        $cart->name=$user->name;

        $cart->email=$user->email;

        $cart->phone=$user->phone;

        $cart->address=$user->address;

        $cart->user_id=$user->id;

        $cart->product_title=$tool->title;

        $cart->price=$tool->rental_price *$request->quantity;




        $cart->image=$tool->image;

        $cart->Product_id=$tool->id;

        $cart->quantity=$request->quantity;

        $cart->save();
        return redirect()->back();



        }

        else
        {
            return redirect('login');
        }

    }

    public function show_cart()
    {
        if(Auth::user())
        {
            $id=Auth::user()->id;

            $cart=cart::where('user_id','=',$id) ->get();
    
            return view('home.show_cart', compact('cart'));
    
        }
        else
        {
            return redirect('login');
        }

    }
    public function remove_cart($id)
    {
        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back();
    }


    public function cash_order()
    {
        $user=Auth::user();

        $userid=$user->id;

        $data=cart::where('user_id', '=', $userid)->get();

        foreach($data as $data)
        {
            $order=new order;

            $order->name=$data->name;

            $order->email=$data->email;

            $order->phone=$data->phone;

            $order->address=$data->address;

            $order->user_id=$data->user_id;

            $order->product_title=$data->product_title;

            $order->price=$data->price;

            $order->quantity=$data->quantity;

            $order->product_id=$data->Product_id;

            $order->payment_status='cash on delivery';

            $order->delivery_status='processing';
            $order->save();

            $cart_id=$data->id;

            $cart=cart::find($cart_id);

            $cart->delete();




        }
        return redirect()->back()->with('messege','We have Recived Your Order.We Will Contact with You Soon.');

    }

    public function stripe($totalprice)
    { 
        return view('home.stripe',compact('totalprice'));
    }


     

    public function stripePost(Request $request)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    

        Stripe\Charge::create ([

                "amount" => 100 * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Test payment from itsolutionstuff.com." 

        ]);

      

        Session::flash('success', 'Payment successful!');

              

        return back();

    }

    public function contact()
    {
        return view('home.contact');
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function products()
{
    $tools = Tool::paginate(9); // or whatever number of items per page you want
    return view('home.products', compact('tools'));
}

public function search_product(Request $request)
{
    $search_text = $request->search;

    $tool = Tool::where('title', 'LIKE', "%$search_text%")
                ->orWhere('category', 'LIKE', "%$search_text%")
                ->orWhere('description', 'LIKE', "%$search_text%")
                ->paginate(12);

    return view('home.search_product', compact('tool', 'search_text'));
}

public function add_review(Request $request, $tool_id)
{
    \Log::info('Review submission started', [
        'request_data' => $request->all(),
        'tool_id' => $tool_id,
        'user_id' => Auth::id()
    ]);

    try {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'required|string|min:10',
        ]);

        \Log::info('Validation passed', ['validated_data' => $validated]);

        if (!Auth::check()) {
            \Log::warning('Unauthorized review attempt');
            return redirect()->route('login')->with('error', 'Please login to submit a review');
        }

        $tool = Tool::findOrFail($tool_id);
        \Log::info('Tool found', ['tool' => $tool->id]);

        $review = new Review();
        $review->user_id = Auth::id();
        $review->tool_id = $tool_id;
        $review->rating = $request->rating;
        $review->review_text = $request->review_text;
        
        \Log::info('Attempting to save review', ['review_data' => $review->toArray()]);
        
        $review->save();

        \Log::info('Review saved successfully', ['review_id' => $review->id]);

        return redirect()->back()->with('message', 'Review submitted successfully!');
    } catch (\Exception $e) {
        \Log::error('Review submission failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'user_id' => Auth::id(),
            'tool_id' => $tool_id,
            'request_data' => $request->all()
        ]);
        
        return redirect()->back()->with('error', 'Error submitting review: ' . $e->getMessage());
    }
}


}


