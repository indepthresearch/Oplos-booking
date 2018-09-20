<?php

namespace App\Http\Controllers;
use App\Order;
use App\Listing;
use App\OrderListing;
use App\Mail\OrderPlaced;

use App\Book;
use Stripe_Customer;
use App\webmasters_tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
       return view('book');
    }

    
    public function checkout(Request $request){
     /*     require_once('./config.php');
        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail']; */
    /* if ($request->isMethod('POST')) {
            $token = $request->request->get('stripeToken');
            \Stripe\Stripe::setApiKey("sk_test_BzfLz9d0ubE5jba7Dh3bwr62");
            \Stripe\Charge::create(array(
              "amount" => Cart::total()* 100,
              "currency" => "KES",
              "source" => $token,
              "description" => "First test charge!"
            ));
        }*/
        try {
/*         $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  )); */
          /* Stripe::setApiKey("sk_test_BzfLz9d0ubE5jba7Dh3bwr62");
*/
               /*  \Stripe\Customer::create(array( */
            /* $customer = Stripe::customers()->create([
                "description" => "peter maina is my name ans im a developer",
                "source" => "tok_mastercard"*/ // obtained with Stripe.js
                  /*  ]);*/
            $charge = Stripe::charges()->create([
                "amount" => Cart::total(),
                "currency" => 'KES',
                "source" => $request->input('stripeToken'),
                "description" => 'Listing',
               "receipt_email" => $request->email, 
                'metadata' => [
                   /* 'contents' => $contents,*/
                    'quantity' => Cart::instance('default')->count(),
                    /*'discount' => collect(session()->get('coupon'))->toJson(),*/
               ],
            ]);
            
       /* return $order;*/
            $order = $this->addToOrdersTables($request, null);
           Mail::send(new OrderPlaced($order));
             Cart::instance('default')->destroy();
          /*  \Stripe\Stripe::setApiKey("pk_test_w6152p4DgZPymX5Xzjnzp8qD");

             \Stripe\Customer::all(array("limit" => 3));*/
           /* return('book')->with('success_message','Thank you your payment has been successful');*/
                return redirect('book')->with('success_message', 'Thank you your payment has been successful Check your email for confirmation');

            
        } catch (CardErrorException $e) {
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
        
    }
    protected function addToOrdersTables($request, $error)
    {
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'email' => $request->email,
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'postalcode' => $request->postalcode,
            'phone_number' => $request->phone,
            'name_on_card' => $request->name_on_card,
            
           'total' => Cart::total(),
               
            'tax' =>  Cart::tax(),
            'Subtotal' =>Cart::subtotal(),
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderListing::create([
                'order_id' => $order->id,
                'listing_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }
        return $order;

    }
  private function getNumbers()
    {
        $tax=config('cart.tax');
        $newSubtotal = (Cart::subtotal());
        $newTotal = $newSubtotal * (1 + $tax);

        return collect([
                'tax'=> $tax,
                'newSubtotal' => $newSubtotal,
                'newTotal'=> $newTotal,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('views.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Book::create(Request::all());

         return redirect('book')->with('success', 'Details has been added successfully');
       /* $request->validate([
               
              'first_name'=>'required',
              'last_name'=>'required',
              'email'=>'required',
              'phone_number'=>'required|numeric',
              'description'=>'required'


        ]);

        $book = new Book([

        $book =>   $request->get('first_name'),
        $book =>  $request->get('last_name'),
        $book =>  $request->get('email'),
        $book =>   $request->get('phone_number'),
        $book=>     $request->get('description')


        ]);
        

        $book->save();
        return redirect()->route('book')->with('success', 'Details has been added successfully one of our team members will get back to you');*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
        $listings = listing::where('property_name', $property_name)->firstOrFail();

         return view('book')->with('$listings',$listings);   
          }
         
          

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
         dd($request->all()); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \booking\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
