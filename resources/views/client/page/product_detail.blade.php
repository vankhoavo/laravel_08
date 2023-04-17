@extends('client.master')
@section('content')
     <!-- breadcrumb-area-start -->
     <section class="breadcrumb-area" data-background="/assets_client/img/bg/page-title.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Our Shop</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">home</a></li>
                            <li><span>shop details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- shop-area start -->
    <section class="shop-details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4">
                    <div class="product-details-img mb-10">
                        <div class="tab-content" id="myTabContentpro">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ $sanPham->hinh_anh }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-thumb-tab mb-30">
                        <ul class="nav" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-selected="true"><img
                                        src="/assets_client/img/product/pro1.jpg" alt=""> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-selected="false"><img
                                        src="/assets_client/img/product/pro2.jpg" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab" aria-selected="false"><img
                                        src="/assets_client/img/product/pro3.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="product-details mb-30 pl-30">
                        <div class="details-cat mb-20">
                            <a href="#">decor,</a>
                            <a href="#">furniture</a>
                        </div>
                        <h2 class="pro-details-title mb-15">{{ $sanPham->ten_san_pham }}</h2>
                        <div class="details-price mb-20">
                            <span>{{ number_format($sanPham->gia_khuyen_mai, 0, ',', '.') }} đ</span>
                            <span class="old-price">{{ number_format($sanPham->gia_ban, 0, ',', '.') }} đ</span>
                        </div>
                        <div class="product-variant">

                            <div class="product-color variant-item">
                                <div class="variant-name">
                                    <span>Colors</span>
                                </div>
                                <ul class="shop-link shop-color">
                                    <li><a href="shop.html"><span class="blue"></span></a></li>
                                    <li><a href="shop.html"><span class="green"></span> </a></li>
                                    <li><a href="shop.html"><span class="orange"></span> </a></li>
                                    <li><a href="shop.html"><span class="navy"></span> </a></li>
                                    <li><a href="shop.html"><span class="pinkish"></span> </a></li>
                                    <li><a href="shop.html"><span class="vista"></span> </a></li>
                                </ul>
                            </div>

                            <div class="product-desc variant-item">
                                <p>{{ $sanPham->mo_ta_ngan }}</p>
                            </div>

                            <div class="product-info-list variant-item">
                                <ul>
                                    <li><span>Brands:</span> Hewlett-Packard</li>
                                    <li><span>Product Code:</span> d12</li>
                                    <li><span>Reward Points:</span> 100</li>
                                    <li><span>Stock:</span> <span class="in-stock">In Stock</span></li>
                                </ul>
                            </div>

                            <div class="product-action-details variant-item">
                                <div class="product-details-action">
                                    <form action="#">
                                        <div class="plus-minus">
                                            <div class="cart-plus-minus"><input type="text" value="1" /></div>
                                        </div>
                                        <button class="details-action-icon" type="submit"><i class="fas fa-heart"></i></button>
                                        <button class="details-action-icon" type="submit"><i class="fas fa-hourglass"></i></button>
                                        <div class="details-cart mt-40">
                                            <button class="btn theme-btn">purchase now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-xl-8 col-lg-8">
                    <div class="product-review">
                        <ul class="nav review-tab" id="myTabproduct" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab6" data-toggle="tab" href="#home6" role="tab" aria-controls="home"
                                    aria-selected="true">Description </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile"
                                    aria-selected="false">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">
                                <div class="desc-text" style="text-align: justify">
                                    {{ $sanPham->mo_ta_chi_tiet }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
                                <div class="desc-text review-text">
                                    <div class="product-commnets">
                                        <div class="product-commnets-list mb-25 pb-15">
                                            <div class="pro-comments-img">
                                                <img src="{{ $sanPham->hinh_anh }}" alt="">
                                            </div>
                                            <div class="pro-commnets-text">
                                                <h4>Roger West -
                                                    <span>June 5, 2018</span>
                                                </h4>
                                                <div class="pro-rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation.</p>
                                            </div>
                                        </div>
                                        <div class="product-commnets-list mb-25 pb-15">
                                            <div class="pro-comments-img">
                                                <img src="/assets_client/img/product/comments/02.png" alt="">
                                            </div>
                                            <div class="pro-commnets-text">
                                                <h4>Roger West -
                                                    <span>June 5, 2018</span>
                                                </h4>
                                                <div class="pro-rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-box mt-50">
                                        <h4>Add a Review</h4>
                                        <div class="your-rating mb-40">
                                            <span>Your Rating:</span>
                                            <div class="rating-list">
                                                <a href="#">
                                                    <i class="far fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="far fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="far fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="far fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="far fa-star"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <form class="review-form" action="#">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <label for="message">YOUR REVIEW</label>
                                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="r-name">Name</label>
                                                    <input type="text" id="r-name">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="r-email">Email</label>
                                                    <input type="email" id="r-email">
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="btn theme-btn">Add your Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="pro-details-banner">
                        <a href="shop.html"><img src="{{ $sanPham->hinh_anh }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area end -->

        <!-- product-area start -->
        <section class="product-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="area-title text-center mb-50">
                            <h2>Releted Products</h2>
                            <p>Browse the huge variety of our products</p>
                        </div>
                    </div>
                </div>
                <div class="product-slider-2 owl-carousel">
                    <div class="pro-item">
                        <div class="product-wrapper">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img src="/assets_client/img/product/pro4.jpg" alt="">
                                    <img class="secondary-img" src="/assets_client/img/product/pro5.jpg" alt="">
                                </a>
                                <div class="product-action text-center">
                                    <a href="#" title="Shoppingb Cart">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-eye"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="pro-cat mb-10">
                                    <a href="shop.html">decor, </a>
                                    <a href="shop.html">furniture</a>
                                </div>
                                <h4>
                                    <a href="product-details.html">Raglan Baseball Style shirt</a>
                                </h4>
                                <div class="product-meta">
                                    <div class="pro-price">
                                        <span>$119.00 USD</span>
                                        <span class="old-price">$230.00 USD</span>
                                    </div>
                                </div>
                                <div class="product-wishlist">
                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-item">
                        <div class="product-wrapper">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img src="/assets_client/img/product/pro5.jpg" alt="">
                                    <img class="secondary-img" src="/assets_client/img/product/pro6.jpg" alt="">
                                </a>
                                <div class="product-action text-center">
                                    <a href="#" title="Shoppingb Cart">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-eye"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                </div>
                                <div class="sale-tag">
                                    <span class="new">new</span>
                                    <span class="sale">sale</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="pro-cat mb-10">
                                    <a href="shop.html">decor, </a>
                                    <a href="shop.html">furniture</a>
                                </div>
                                <h4>
                                    <a href="product-details.html">Raglan Baseball Style shirt</a>
                                </h4>
                                <div class="product-meta">
                                    <div class="pro-price">
                                        <span>$119.00 USD</span>
                                        <span class="old-price">$230.00 USD</span>
                                    </div>
                                </div>
                                <div class="product-wishlist">
                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-item">
                        <div class="product-wrapper">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img src="/assets_client/img/product/pro7.jpg" alt="">
                                    <img class="secondary-img" src="/assets_client/img/product/pro8.jpg" alt="">
                                </a>
                                <div class="product-action text-center">
                                    <a href="#" title="Shoppingb Cart">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-eye"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="pro-cat mb-10">
                                    <a href="shop.html">decor, </a>
                                    <a href="shop.html">furniture</a>
                                </div>
                                <h4>
                                    <a href="product-details.html">Raglan Baseball Style shirt</a>
                                </h4>
                                <div class="product-meta">
                                    <div class="pro-price">
                                        <span>$119.00 USD</span>
                                        <span class="old-price">$230.00 USD</span>
                                    </div>
                                </div>
                                <div class="product-wishlist">
                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-item">
                        <div class="product-wrapper">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img src="/assets_client/img/product/pro9.jpg" alt="">
                                    <img class="secondary-img" src="/assets_client/img/product/pro10.jpg" alt="">
                                </a>
                                <div class="product-action text-center">
                                    <a href="#" title="Shoppingb Cart">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-eye"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                </div>
                                <div class="sale-tag">
                                    <span class="new">new</span>
                                    <span class="sale">sale</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="pro-cat mb-10">
                                    <a href="shop.html">decor, </a>
                                    <a href="shop.html">furniture</a>
                                </div>
                                <h4>
                                    <a href="product-details.html">Raglan Baseball Style shirt</a>
                                </h4>
                                <div class="product-meta">
                                    <div class="pro-price">
                                        <span>$119.00 USD</span>
                                        <span class="old-price">$230.00 USD</span>
                                    </div>
                                </div>
                                <div class="product-wishlist">
                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-item">
                        <div class="product-wrapper">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img src="/assets_client/img/product/pro1.jpg" alt="">
                                    <img class="secondary-img" src="/assets_client/img/product/pro11.jpg" alt="">
                                </a>
                                <div class="product-action text-center">
                                    <a href="#" title="Shoppingb Cart">
                                        <i class="flaticon-shopping-cart"></i>
                                    </a>
                                    <a href="#" title="Quick View">
                                        <i class="flaticon-eye"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                        <i class="flaticon-compare"></i>
                                    </a>
                                </div>
                                <div class="sale-tag">
                                    <span class="new">new</span>
                                    <span class="sale">sale</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="pro-cat mb-10">
                                    <a href="shop.html">decor, </a>
                                    <a href="shop.html">furniture</a>
                                </div>
                                <h4>
                                    <a href="product-details.html">Raglan Baseball Style shirt</a>
                                </h4>
                                <div class="product-meta">
                                    <div class="pro-price">
                                        <span>$119.00 USD</span>
                                        <span class="old-price">$230.00 USD</span>
                                    </div>
                                </div>
                                <div class="product-wishlist">
                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product-area end -->
@endsection
