@extends('layout')
@section('content')

@if(session('warning'))
<script>
    alert("{{session('warning')}}");
</script>
@endif

<div class="logo">
    <h3>Flat Cart Widget</h3>
</div>
<div class="cart">
   <div class="cart-top">
        <div class="cart-experience">
             <h4>Shopping Cart</h4>
        </div>
        <div class="cart-login">
                  
             <div class="clear"> </div>
        </div>
       <div class="clear"> </div>
   </div>
   <div class="cart-bottom">
     <div class="table">
        <table>
            <tbody>
                  <tr  class="main-heading">                
                    <th>Images</th>
                    <th class="long-txt">Product Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>                  
                  </tr>
             @foreach ($cart_item as $cart)
             <form method="post" action='/updateqty'>
                 @csrf
                  <tr class="cake-top">
                    <td class="cakes">
                        <div class="product-img">
                            <img src="{{asset('/pro_img/'.$cart->p_img)}}">
                        </div>
                    </td>
                    <td class="cake-text">
                        <div class="product-text">
                            <h3>{{$cart->p_name}}</h3>
                        </div>
                    </td>
					<form action="/updateqty" method="post">
						@csrf
                    <td class="quantity">                    
                      <div class="product-right">
                        <button class="btn" type="submit" value="minus" name="operation">-</button>
                        <input type="hidden" name="cartid" id="" value="{{$cart->c_id}}" >
                        <input type="number" id="quantity" name="quantity" value="{{$cart->qty}}" class="form-control input-small" style="outline:none; border:none;" readonly>
                        <button class="btn" type="submit" value="plus" name="operation">+</button>
                      </div>
                    </td>
					</form>
                    <td class="price">
                        <h4>{{$cart->p_price}}</h4>                  
                    </td>
                    <td class="top-remove">
                        <h4>
                            <?php  
                            $item_total = $cart->p_price * $cart->qty;
                            echo $item_total 
                            ?>
                        </h4>
                        <div class="close">
                           <form action="/remove" method="post">
							@csrf
							<input type="text" name="cartid" value="{{$cart->c_id}}">
							<button type="submit" onclick="return confirm('Are you sure ?')">Remove</button>
						   </form>
                        </div>
                    </td>                  
                  </tr>
              </form>
             @endforeach
           </tbody>
        </table>
     </div>
     <?php
     $total = 0;
     foreach ($cart_item as $cart) {
         $total = $total + $cart->p_price * $cart->qty;
     }
     ?>
     <div class="vocher">      
        <div class="dis-total">
            @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <h1>Total <?php  echo $total ?></h1>
            <div class="tot-btn">
                <a class="shop" href="#">Back to Shop</a>
				<form action="/order" method="post">
					@csrf
				<button type="submit" >Continue to Checkout</button>
				</form>
            </div>
        </div>
       <div class="clear"> </div>
     </div>
   </div>
</div>


@stop
