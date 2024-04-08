<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    
    <link rel="stylesheet" href="assets/css/style.css">

    

    <title>Document</title>
</head>
<body>
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/index" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/index">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/products">Products</a></li>
                            <li><a href="/single_product">Single Product</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/add_product">Add Product</a></li>
                            <li><a href="/cart">Cart</a></li>
                        </ul>        
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                        <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/accordions.js"></script>
    <script src="/assets/js/datepicker.js"></script>
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script> 
    <script src="/assets/js/slick.js"></script> 
    <script src="/assets/js/lightbox.js"></script> 
    <script src="/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

</body>
</html><?php /**PATH C:\Users\chirag chaudhary\Desktop\content\workshops\laravel\hexashop\resources\views/layout.blade.php ENDPATH**/ ?>