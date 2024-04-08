<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function products(){
        $product = DB::table('products')->get();
        return view('products', compact('product'));
    }
    public function single_product(){
        return view('single_product');
    }
    public function add_product(){
        return view('add_product');
    }
    public function cart(){
        $cart_item = DB::table('products as p')->join('cart as c', 'p.p_id', '=', 'c.p_id')->select('p.*','c.*')->get();
        return view('cart', compact('cart_item'));
    }
    public function add_product_data(Request $request){
        $pro_img = $request->file('product_file');

        // $pro_img_name = $pro_img->getClientOriginalExtension();
        $pro_img_name = 'product_file'.time().'.'.$pro_img->getClientOriginalExtension();
        // $pro_img_name = rand().'.'.$pro_img->getClientOriginalExtension();
        $pro_img->move(public_path('pro_img/'),$pro_img_name);
        DB::table('products')->insert([
            'p_name'=>$request->input('product_name'),
            'p_price'=>$request->input('product_price'),
            'p_color'=>$request->input('product_color'),
            'p_img'=>$pro_img_name
        ]);
        return redirect('/');
    }

    public function updateqty(Request $request){
        $operation = $request->input('operation');
        $cartid = $request->input('cartid');
        $quantity = $request->input('quantity');
    
        if($operation == 'plus'){
            $newqty = $quantity + 1;
        } elseif($operation == 'minus'){
            if($quantity == 1){
                DB::table('cart')->where('c_id', $cartid)->delete();
                return redirect('cart')->with('warning', 'Item removed from cart.');
            }
            $newqty = $quantity - 1;
        }
    
        DB::table('cart')->where('c_id', $cartid)->update([
            'qty' => $newqty,
        ]);
        return redirect('cart');
    }

    public function remove(Request $request){
        $cartid = $request->input('cartid');
       DB::table('cart')->where('c_id', $cartid)->delete();
        return redirect('cart')->with('warning', 'Item removed from cart.');
    }

    public function addToCart(Request $request){
        $productId = $request->input('p_id');
        DB::table('cart')->insert([
            'p_id' => $productId,
        ]);
        return redirect('/products')->with('success', 'Item added to cart successfully.');
    }

    public function order(){
        $transid = rand(10000 ,99999);

        $cartItems = DB::table('cart')->get();

        foreach($cartItems as $item){
            DB::table('order')->insert([
                'trans_id' => $transid,
                'p_id' => $item->p_id,
                'qty' => $item->qty
            ]);
        }
        DB::table('cart')->delete();
        return redirect('/');
    }
    
}
