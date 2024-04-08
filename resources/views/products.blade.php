    @extends('layout')
    @section('content')
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
                @foreach($product as $row)
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
                            <img src="{{asset('/pro_img/'.$row->p_img)}}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{$row->p_name}}</h4>
                            <span>{{$row->p_price}}</span>
                            <ul class="stars">
                                <div class="color-box" style="background-color: {{$row->p_color}};"></div>
                                {{$row->p_color}}
                            </ul>
                            <form action="/addToCart" method="post">
                                @csrf
                                <input type="hidden" name="p_id" id="" value="{{$row->p_id}}" >

                                <button class="btn btn-secondary add-to-cart-btn" type="submit" data-product-id="{{ $row->p_id }}">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @stop