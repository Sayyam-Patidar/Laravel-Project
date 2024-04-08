
<?php $__env->startSection('content'); ?>

<?php if(session('warning')): ?>
<script>
    alert("<?php echo e(session('warning')); ?>");
</script>
<?php endif; ?>

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
             <?php $__currentLoopData = $cart_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <form method="post" action='/updateqty'>
                 <?php echo csrf_field(); ?>
                  <tr class="cake-top">
                    <td class="cakes">
                        <div class="product-img">
                            <img src="<?php echo e(asset('/pro_img/'.$cart->p_img)); ?>">
                        </div>
                    </td>
                    <td class="cake-text">
                        <div class="product-text">
                            <h3><?php echo e($cart->p_name); ?></h3>
                        </div>
                    </td>
					<form action="/updateqty" method="post">
						<?php echo csrf_field(); ?>
                    <td class="quantity">                    
                      <div class="product-right">
                        <button class="btn" type="submit" value="minus" name="operation">-</button>
                        <input type="hidden" name="cartid" id="" value="<?php echo e($cart->c_id); ?>" >
                        <input type="number" id="quantity" name="quantity" value="<?php echo e($cart->qty); ?>" class="form-control input-small" style="outline:none; border:none;" readonly>
                        <button class="btn" type="submit" value="plus" name="operation">+</button>
                      </div>
                    </td>
					</form>
                    <td class="price">
                        <h4><?php echo e($cart->p_price); ?></h4>                  
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
							<?php echo csrf_field(); ?>
							<input type="text" name="cartid" value="<?php echo e($cart->c_id); ?>">
							<button type="submit" onclick="return confirm('Are you sure ?')">Remove</button>
						   </form>
                        </div>
                    </td>                  
                  </tr>
              </form>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <h1>Total <?php  echo $total ?></h1>
            <div class="tot-btn">
                <a class="shop" href="#">Back to Shop</a>
				<form action="/order" method="post">
					<?php echo csrf_field(); ?>
				<button type="submit" >Continue to Checkout</button>
				</form>
            </div>
        </div>
       <div class="clear"> </div>
     </div>
   </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chirag chaudhary\Desktop\content\workshops\laravel\hexashop\resources\views/cart.blade.php ENDPATH**/ ?>