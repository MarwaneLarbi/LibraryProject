@extends('Layouts.home')
@section('content')
    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="page-title">
                            <h1 class="title">Our Store</h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Our Store</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->
    <!--====== Start Products Section ======-->
    <section class="products-area pt-120 pb-120">
        <div class="container">
            <div class="products-filter mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="sort-dropdown d-flex align-items-center">
                            <div class="show-text">
                                <p>Showing Result 1-09</p>
                            </div>
                            <div class="products-dropdown">
                                <select class="wide">
                                    <option value="default" selected>Default Sorting</option>
                                    <option value="new">Newest Product</option>
                                    <option value="old">Oldest Product</option>
                                    <option value="hight-to-low">High To Low</option>
                                    <option value="low-to-high">Low To High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul class="list d-flex">
                            <li><a href="products.html"><i class="ti-view-grid"></i></a></li>
                            <li><a href="products.html" class="active"><i class="ti-view-list-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="products-item-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-1.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-1.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Hand Dumbell</a></h3>
                                <span class="price">$250 <span class="pre-price">$270</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-2.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-2.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Green Plastic Light</a></h3>
                                <span class="price">$120.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-3.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-3.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Leaser Photography</a></h3>
                                <span class="price">$320.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-4.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-4.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Nike Sports Shoe</a></h3>
                                <span class="price">$232.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-5.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-5.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Room Decorator</a></h3>
                                <span class="price">$320.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-6.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-6.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Card Showcase</a></h3>
                                <span class="price">$852.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-7.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-7.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Hand Watch</a></h3>
                                <span class="price">$25.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-8.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-8.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Realstic Dumbell</a></h3>
                                <span class="price">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="products-item products-item-one mb-25">
                            <div class="product-img">
                                <img src="assets/images/products/products-9.jpg" alt="products Image">
                                <div class="product-overlay d-flex align-items-end justify-content-center">
                                    <div class="product-meta">
                                        <a href="assets/images/products/products-9.jpg" class="icon img-popup"><i class="ti-zoom-in"></i></a>
                                        <a href="#" class="icon cart-btn"><i class="ti-shopping-cart"></i></a>
                                        <a href="#" class="icon wishlist-btn"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="title"><a href="products-details.html">Hand Speaker</a></h3>
                                <span class="price">$250.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button text-center mt-50">
                            <a href="#" class="main-btn icon-btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Products Section ======-->
@endsection
