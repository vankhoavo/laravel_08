@extends('client.master')
@section('content')
{{-- <section class="breadcrumb-area" data-background="img/bg/page-title.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-text text-center">
                    <h1>Our Shop</h1>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.html">home</a></li>
                        <li><span>shop</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="shop-area pt-100 pb-100">
    <div class="container" style="margin-top: -90px">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="shop-banner mb-50">
                    <img src="/assets_client/img/bg/shop-banner-2.jpg" alt="">
                </div>
                <!-- tab filter -->
                <div class="row mb-10">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="product-showing mb-40">
                            <p>Showing 1–22 of 32 results</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="shop-tab f-right">
                            <ul class="nav text-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                        aria-selected="true"><i class="fas fa-list-ul"></i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false"><i class="fas fa-th-large"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-filter mb-40 f-right">
                            <form action="#">
                                <select name="pro-filter" id="pro-filter">
                                    <option value="1">Shop By </option>
                                    <option value="2">Top Sales </option>
                                    <option value="3">New Product </option>
                                    <option value="4">A to Z Product </option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- tab content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro1.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro2.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro2.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro3.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro3.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro4.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
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
                                        <div class="sale-tag">
                                            <span class="new">new</span>
                                        </div>
                                    </div>
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
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
                                    </div>
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro6.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro7.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro8.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro9.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro9.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro1.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro9.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro1.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro11.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro12.jpg" alt="">
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
                                        </div>
                                    </div>
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="product-wrapper mb-50">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro10.jpg" alt="">
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
                                    <div class="product-content pr-0">
                                        <div class="pro-cat mb-10">
                                            <a href="shop.html">furniture</a>
                                        </div>
                                        <h4>
                                            <a href="product-details.html">Minimal Deco Furniture</a>
                                        </h4>
                                        <div class="product-meta">
                                            <div class="pro-price">
                                                <span>$119.00 USD</span>
                                                <span class="old-price">$230.00 USD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro13.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro14.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="product-content pro-list-content pr-0 mb-50">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Minimal Troma Furniture</a>
                                    </h4>
                                    <div class="product-meta mb-10">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="product-action">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" title="Wishlist"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro11.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="product-content pro-list-content pr-0 mb-50">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Minimal Troma Furniture</a>
                                    </h4>
                                    <div class="product-meta mb-10">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="product-action">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" title="Wishlist"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro15.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro16.jpg" alt="">
                                        </a>
                                        <div class="sale-tag">
                                            <span class="new">new</span>
                                            <span class="sale">sale</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="product-content pro-list-content pr-0 mb-50">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Minimal Troma Furniture</a>
                                    </h4>
                                    <div class="product-meta mb-10">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="product-action">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" title="Wishlist"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro6.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro7.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="product-content pro-list-content pr-0 mb-50">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Minimal Troma Furniture</a>
                                    </h4>
                                    <div class="product-meta mb-10">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="product-action">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" title="Wishlist"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img ">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro18.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro19.jpg" alt="">
                                        </a>
                                        <div class="sale-tag">
                                            <span class="new">new</span>
                                            <span class="sale">sale</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="product-content pro-list-content pr-0 mb-50">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Minimal Troma Furniture</a>
                                    </h4>
                                    <div class="product-meta mb-10">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="product-action">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" title="Wishlist"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img mb-25">
                                        <a href="product-details.html">
                                            <img src="/assets_client/img/product/pro5.jpg" alt="">
                                            <img class="secondary-img" src="/assets_client/img/product/pro6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="product-content pro-list-content pr-0 mb-50">
                                    <div class="pro-cat mb-10">
                                        <a href="shop.html">decor, </a>
                                        <a href="shop.html">furniture</a>
                                    </div>
                                    <h4>
                                        <a href="product-details.html">Minimal Troma Furniture</a>
                                    </h4>
                                    <div class="product-meta mb-10">
                                        <div class="pro-price">
                                            <span>$119.00 USD</span>
                                            <span class="old-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <div class="product-action">
                                        <a href="#" title="Shoppingb Cart">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Quick View">
                                            <i class="flaticon-eye"></i>
                                        </a>
                                        <a href="#" title="Wishlist"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basic-pagination basic-pagination-2 text-center mt-20">
                    <ul>
                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                        <li><a href="#">01</a></li>
                        <li class="active"><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-shop">

                    <div class="shop-widget">
                        <h3 class="shop-title">Search by</h3>
                        <form action="#" class="shop-search">
                            <input type="text" placeholder="Your keyword....">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="shop-widget">
                        <h3 class="shop-title">Filter selection</h3>
                        <div class="price-filter">
                            <div id="slider-range"></div>
                            <input type="text" id="amount">
                        </div>
                    </div>

                    <div class="shop-widget">
                        <h3 class="shop-title">Catergories</h3>
                        <ul class="shop-link">
                            <li><a href="shop.html"><i class="far fa-square"></i> Accessories</a></li>
                            <li><a href="shop.html"><i class="far fa-square"></i> Bags</a></li>
                            <li><a href="shop.html"><i class="far fa-square"></i> Clothing</a></li>
                            <li><a href="shop.html"><i class="far fa-square"></i> Shoes</a></li>
                            <li><a href="shop.html"><i class="far fa-square"></i> Exclusive</a></li>
                            <li><a href="shop.html"><i class="far fa-square"></i> Uncategorized</a></li>
                            <li><a href="shop.html"><i class="far fa-square"></i> Women</a></li>
                        </ul>
                    </div>

                    <div class="shop-widget">
                        <h3 class="shop-title">Tags</h3>
                        <ul class="shop-tag">
                            <li><a href="shop.html"> Minimal</a></li>
                            <li><a href="shop.html"> T-Shirts</a></li>
                            <li><a href="shop.html"> Pants</a></li>
                            <li><a href="shop.html"> Jeants</a></li>
                            <li><a href="shop.html"> Winter</a></li>
                            <li><a href="shop.html"> Latest</a></li>
                            <li><a href="shop.html"> New</a></li>
                            <li><a href="shop.html"> Sale</a></li>

                        </ul>
                    </div>

                    <div class="shop-widget">
                        <h3 class="shop-title">color</h3>
                        <ul class="shop-link">
                            <li><a href="shop.html"><span class="blue"></span> Blue</a></li>
                            <li><a href="shop.html"><span class="green"></span> Green</a></li>
                            <li><a href="shop.html"><span class="orange"></span> Orange</a></li>
                            <li><a href="shop.html"><span class="navy"></span> Navy</a></li>
                            <li><a href="shop.html"><span class="pinkish"></span> Pinkish</a></li>
                            <li><a href="shop.html"><span class="vista"></span> Vista Blue</a></li>
                        </ul>
                    </div>

                    <div class="shop-widget">
                        <h3 class="shop-title">Recent Product</h3>
                        <ul class="shop-sidebar-product">
                            <li>
                                <div class="side-pro-img">
                                    <a href="product-details.html"><img src="/assets_client/img/product/latest/shop-rsp3.jpg" alt=""></a>
                                </div>
                                <div class="side-pro-content">
                                    <div class="side-pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5><a href="product-details.html">Raglan Baseball-Style</a></h5>
                                    <div class="side-pro-price">
                                        <span>$119.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="side-pro-img">
                                    <a href="product-details.html"><img src="/assets_client/img/product/latest/shop-rsp2.jpg" alt=""></a>
                                </div>
                                <div class="side-pro-content">
                                    <div class="side-pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5><a href="product-details.html">Raglan Baseball-Style</a></h5>
                                    <div class="side-pro-price">
                                        <span>$119.00 USD</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="side-pro-img">
                                    <a href="product-details.html"><img src="/assets_client/img/product/latest/shop-rsp4.jpg" alt=""></a>
                                </div>
                                <div class="side-pro-content">
                                    <div class="side-pro-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5><a href="product-details.html">Raglan Baseball-Style</a></h5>
                                    <div class="side-pro-price">
                                        <span>$119.00 USD</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-widget">
                        <div class="shop-sidebar-banner">
                            <a href="shop.html"><img src="/assets_client/img/banner/shop-banner.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
