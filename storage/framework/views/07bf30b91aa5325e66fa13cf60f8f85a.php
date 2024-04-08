    
    <?php $__env->startSection('content'); ?>
    <style>
        .color-box {
    width: 20px;
    height: 20px;
    border: 1px solid #000;
    display: inline-block;
    margin-right: 5px;
}

    </style>
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="/single_product"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="/single_product"><i class="fa fa-star"></i></a></li>
                                    <li><a href="/single_product"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <img src="<?php echo e(asset('/pro_img/'.$row->p_img)); ?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo e($row->p_name); ?></h4>
                            <span><?php echo e($row->p_price); ?></span>
                            <ul class="stars">
                                <div class="color-box" style="background-color: <?php echo e($row->p_color); ?>;"></div>
                                <?php echo e($row->p_color); ?>

                            </ul>
                            <!-- <button class="btn btn-secondary">Add to cart</button> -->
                            <form action="/addToCart" method="post">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-secondary add-to-cart-btn" type="submit" data-product-id="<?php echo e($row->p_id); ?>">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\chirag chaudhary\Desktop\content\workshops\laravel\hexashop\resources\views\products.blade.php ENDPATH**/ ?>