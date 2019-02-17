@extends('frontend.layouts.master')

@section('content')




    <!--=============================================
    =            Breadcrumb Area         =
    =============================================-->

    <div class="breadcrumb-area breadcrumb-bg pt-85 pb-85 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.html">Home</a> <span class="separator">/</span></li>
                            <li><a href="shop-left-sidebar.html">Shop</a> <span class="separator">/</span></li>
                            <li class="active">Sofas &amp; Chairs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
    =            shop page content         =
    =============================================-->

    <div class="shop-page-content mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  sidebar  =======-->

                    <div class="sidebar-container shop-sidebar-container">
                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget mb-30">
                            <h3 class="sidebar-title">Sofas &amp; Chairs</h3>
                            <!--=======  category dropdown  =======-->
                            <ul class="category-dropdown">
                                <li class="has-children">
                                    <a href="shop-left-sidebar.html">Living Chairs</a>
                                    <ul>
                                        <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                        <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="shop-left-sidebar.html">Sofa</a>
                                    <ul>
                                        <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                        <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                        <li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-left-sidebar.html">Storage</a></li>
                            </ul>
                            <!--=======  End of category dropdown  =======-->
                        </div>

                        <!--=======  End of single widget  =======-->

                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget">
                            <h3 class="sidebar-title mb-30">Filter By</h3>

                            <div class="sub-widget mb-30">
                                <h3 class="sidebar-title">Categories</h3>
                                <div class="category-container">
                                    <ul>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">Living Chairs (9)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">Sofa (3)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">Storage (5)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sub-widget mb-30">
                                <h3 class="sidebar-title">Brand</h3>
                                <div class="category-container">
                                    <ul>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">Graphic Corner (9)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">Studio Design(3)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sub-widget mb-30">
                                <h3 class="sidebar-title">Price</h3>
                                <div class="category-container mb-30">
                                    <ul>
                                        <li>
                                            <label class="radio-container">
                                                <a href="shop-left-sidebar.html"> $11.00 - $12.00 (1)</a>
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-container">
                                                <a href="shop-left-sidebar.html"> $45.00 - $48.00 (16)</a>
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-container">
                                                <a href="shop-left-sidebar.html"> $50.00 - $66.00 (10)</a>
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-container">
                                                <a href="shop-left-sidebar.html"> $70.00 - $80.00 (9)</a>
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>



                            <div class="sub-widget">
                                <h3 class="sidebar-title">Size</h3>
                                <div class="category-container">
                                    <ul>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">S(9)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">M (3)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">L (13)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <a href="shop-left-sidebar.html">XL (8)</a>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!--=======  End of single widget  =======-->
                    </div>

                    <!--=======  End of sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  shop header  =======-->

                    <div class="shop-header mb-20">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-20 d-flex align-items-center">
                                <!--=======  view mode  =======-->

                                <div class="view-mode-icons">
                                    <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                    <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                </div>

                                <p class="result-show-message">Showing 1–12 of 41 results</p>

                                <!--=======  End of view mode  =======-->

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column flex-sm-row justify-content-start justify-content-md-end align-items-sm-center">

                                <!--=======  Sort by dropdown  =======-->

                                <div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
                                    <p class="mr-10 mb-0">Sort By: </p>
                                    <select name="sort-by" id="sort-by" class="nice-select">
                                        <option value="0">Sort By Popularity</option>
                                        <option value="0">Sort By Average Rating</option>
                                        <option value="0">Sort By Newness</option>
                                        <option value="0">Sort By Price: Low to High</option>
                                        <option value="0">Sort By Price: High to Low</option>
                                    </select>
                                </div>

                                <!--=======  End of Sort by dropdown  =======-->


                            </div>
                        </div>
                    </div>

                    <!--=======  End of shop header  =======-->

                    <!--=======  shop product wrap   =======-->

                    <div class="shop-product-wrap grid row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product01.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product01.jpg') }}" class="img-fluid" alt="">
                                    </a>

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dolorum architecto adipisci.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product02.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->


                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Printed Chair</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt="">
                                    </a>




                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Printed Chair</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Lorem ipsum dolor</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Lorem ipsum dolor</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product04.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->
                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product04.jpg') }}" class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->
                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }} " class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product06.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Aim Analog</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->
                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product06.jpg') }}" class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Aim Analog</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product07.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->
                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product07.jpg') }}" class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product08.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product08.jpg') }} " class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product09.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product09.jpg') }} " class="img-fluid" alt="">
                                    </a>

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product10.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product10.jpg') }}" class="img-fluid" alt="">
                                    </a>

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }} " class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <div class="ptk-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of grid view product  =======-->

                            <!--=======  product list view  =======-->

                            <div class="ptk-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="">
                                    </a>


                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <div class="rating ">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloremque.</p>
                                    <!--=======  hover icons  =======-->
                                    <div class="hover-icons">
                                        <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                        <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                    <!--=======  End of hover icons  =======-->
                                </div>

                            </div>

                            <!--=======  End of product list view  =======-->
                        </div>
                    </div>

                    <!--=======  End of shop product wrap    =======-->

                    <!--=======  pagination  =======-->

                    <div class="pagination-container mt-50 pb-20 mb-md-80 mb-sm-80">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-left mb-sm-20">
                                <!--=======  showing result text  =======-->

                                <p class="show-result-text">Showing 1-12 of 14 item(s)</p>

                                <!--=======  End of showing result text  =======-->
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <!--=======  pagination-content  =======-->

                                <div class="pagination-content text-center text-md-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next <i class="fa fa-angle-right"></i> </a></li>
                                    </ul>
                                </div>

                                <!--=======  End of pagination-content  =======-->
                            </div>
                        </div>
                    </div>

                    <!--=======  End of pagination  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->




@endsection()



@section('modal')

    @include('frontend.partials.modal')
@endsection()