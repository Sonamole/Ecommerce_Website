@extends('layouts.base')
{{-- If there's already content in the "styles" stack, this styles will be appended to it. --}}
@push('styles')
<link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
<style>
/* selects any <svg> elements that are nested within a <nav> element. */
    nav svg{
        height: 20px;
    }

    .product-box .product-details h5{
        width: 100%;
    }
    </style>

@endpush
@section('content')

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Shop</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 category-side col-md-4">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>
                    <div class="accordion category-name" id="accordionExample">
                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br1" name="brands"
                                                    value="1" type="checkbox">
                                                <label class="form-check-label">Quis Et</label>
                                                <p class="font-light">(1)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br2" name="brands"
                                                    value="2" type="checkbox">
                                                <label class="form-check-label">Aliquam Doloremque</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br3" name="brands"
                                                    value="3" type="checkbox">
                                                <label class="form-check-label">Sequi Repellendus</label>
                                                <p class="font-light">(1)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br4" name="brands"
                                                    value="4" type="checkbox">
                                                <label class="form-check-label">Repellendus Quia</label>
                                                <p class="font-light">(2)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br5" name="brands"
                                                    value="5" type="checkbox">
                                                <label class="form-check-label">Sint Iste</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br6" name="brands"
                                                    value="6" type="checkbox">
                                                <label class="form-check-label">Et Eos</label>
                                                <p class="font-light">(6)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br7" name="brands"
                                                    value="7" type="checkbox">
                                                <label class="form-check-label">Vel Explicabo</label>
                                                <p class="font-light">(2)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br8" name="brands"
                                                    value="8" type="checkbox">
                                                <label class="form-check-label">Ipsam Earum</label>
                                                <p class="font-light">(4)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br9" name="brands"
                                                    value="9" type="checkbox">
                                                <label class="form-check-label">Sequi Reprehenderit</label>
                                                <p class="font-light">(5)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="br10" name="brands"
                                                    value="10" type="checkbox">
                                                <label class="form-check-label">Sunt Corrupti</label>
                                                <p class="font-light">(3)</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-color">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Color
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">Price</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse show"
                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="range-slider category-list">
                                        <input type="text" class="js-range-slider" id="js-range-price" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-price">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Size
                                </button>
                            </h2>

                            <div id="collapseFive" class="accordion-collapse collapse show"
                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <a href="javascript:void(0)">xs</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">sm</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">md</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">lg</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xl</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">xxl</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct1" name="categories"
                                                    type="checkbox" value="1">
                                                <label class="form-check-label">Qui Ut</label>
                                                <p class="font-light">(7)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct2" name="categories"
                                                    type="checkbox" value="2">
                                                <label class="form-check-label">Blanditiis Error</label>
                                                <p class="font-light">(8)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct3" name="categories"
                                                    type="checkbox" value="3">
                                                <label class="form-check-label">Quam Quos</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct4" name="categories"
                                                    type="checkbox" value="4">
                                                <label class="form-check-label">Cupiditate Minus</label>
                                                <p class="font-light">(5)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct5" name="categories"
                                                    type="checkbox" value="5">
                                                <label class="form-check-label">Dolores Et</label>
                                                <p class="font-light">(4)</p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" id="ct6" name="categories"
                                                    type="checkbox" value="6">
                                                <label class="form-check-label">Quis Repudiandae</label>
                                                <p class="font-light">(0)</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven">
                                    Discount Range
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse show"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault19">
                                                <label class="form-check-label" for="flexCheckDefault19">5% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault20">
                                                <label class="form-check-label" for="flexCheckDefault20">10% and
                                                    above</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check ps-0 custome-form-check">
                                                <input class="checkbox_animated check-it" type="checkbox"
                                                    id="flexCheckDefault21">
                                                <label class="form-check-label" for="flexCheckDefault21">20% and
                                                    above</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category-product col-lg-9 col-12 ratio_30">

                <div class="row g-4">
                    <!-- label and featured section -->
                    <div class="col-md-12">
                        <ul class="short-name">


                        </ul>
                    </div>

                    <div class="col-12">
                        <div class="filter-options">
                            <div class="select-options">
                                <div class="page-view-filter">
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="orderby" id="orderby">
                                            <option value="-1" selected="">Default</option>
                                            <option value="1">Date, New To Old</option>
                                            <option value="2">Date, Old To New</option>
                                            <option value="3">Price, Low To High</option>
                                            <option value="4">Price, High To Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="dropdown select-featured">
                                    <select class="form-select" name="size" id="pagesize">
                                        <option value="5" {{ $size == 5 ? 'selected':'' }}>5 Products Per Page</option>
                                        <option value="12" {{ $size == 12 ? 'selected':'' }}>12 Products Per Page</option>
                                        {{-- It checks if the variable $size is equal to 12. If it is, it adds the attribute selected to the <option> tag; otherwise, it adds nothing. --}}
                                        <option value="24" {{ $size == 24 ? 'selected':'' }}>24 Products Per Page</option>
                                        <option value="52" {{ $size == 52 ? 'selected': '' }}>52 Products Per Page</option>
                                        <option value="100" {{ $size == 100 ? 'selected': '' }}>100 Products Per Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-options d-sm-inline-block d-none">
                                <ul class="d-flex">
                                    <li class="two-grid">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="three-grid d-md-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn active d-lg-inline-block d-none">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- label and featured section -->

                <!-- Prodcut setion -->

                <div
                    class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                   @foreach ($products as $product )

                    <div>
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="{{ route('shop.product.details',['slug'=>$product->slug]) }}">
                                        <img src="assets/images/fashion/product/front/{{ $product->image }}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{ route('shop.product.details',['slug'=>$product->slug]) }}">
                                        <img src="assets/images/fashion/product/back/{{ $product->image }}"
                                            class="bg-img blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="cart-wrap">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="rating-details">

                                    <span class="font-light grid-content">{{ $product->category->name }}</span>
                                    <ul class="rating mt-0">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-price">
                                    <a href="{{ route('shop.product.details',['slug'=>$product->slug]) }}" class="font-default">
                                        <h5 class="ms-0">{{ $product->name }}</h5>
                                    </a>
                                    <div class="listing-content">
                                        <span class="font-light">{{ $product->category->name }}</span>
                                        <p class="font-light">{{ $product->short_description }}</p>
                                    </div>
                                    <h3 class="theme-color">{{ $product->regular_price }}</h3>
                                    <button class="btn listing-content">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>

{{ $products->links("pagination.default") }}
{{-- it creates these navigation links, helping users to browse through the paginated list of products.
These links provide navigation options like "Previous Page" and "Next Page" to move between different sets of products. --}}


            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->
<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<form id="frmFilter" method="GET">
    <input type="hidden" name="page" id="page" value="{{ $page }}"/>
    <input type="hidden" name="size" id="size" value="{{ $size }}"/>
    {{-- This code defines a form with two hidden input fields (page and size). These fields are used to store the current page number and the selected number of products per page, respectively. The values of these fields are initially populated with the values of the $page and $size variables, presumably passed from the controller. --}}

</form>

@endsection

@push('scripts')

     <script>
        $("#pagesize").on("change",function(){// It listens for the "change" event, which occurs when the user selects a different option from the dropdown.
            $("#size").val($("#pagesize option:selected").val());//This line sets the value of another element with the ID "size" to the value of the selected option in the dropdown menu with the ID "pagesize". This is likely updating another hidden input field or form element with the selected value.
            $("#frmFilter").submit();
        })
     </script>
@endpush

{{-- User Interaction: The user selects an option from the dropdown menu, indicating how many products they want to see per page.
JavaScript Handling: When the user selects an option, the JavaScript code updates the hidden input field (size) in the form with the selected value and submits the form.
Form Submission: The form is submitted to the server with the updated value of size.
Controller Handling: The controller receives the form submission request, extracts the size parameter from the query string, and uses it to paginate the product query accordingly.
Database Query: The controller queries the database for products, ordering them as required and paginating the results based on the selected size. However, the selected value itself is not stored in the database.
Display: The controller sends the paginated product data to the view, which renders the products accordingly, displaying the desired number of products per page as determined by the user's selection.
So, the selected value from the dropdown menu affects how the products are displayed on the current page, but it doesn't directly affect the data stored in the database.

So, when the user initially loads the page, $size is a variable passed from the server-side controller to the view. The controller determines the default value for $size, typically based on some logic or default settings. For example, in the provided Laravel controller method:

php
Copy code
$size = $request->query("size");
if(!$size)
    $size = 12;
If there is no size parameter in the query string, $size is set to the default value of 12. This value is then passed to the view along with other data.

When the page is rendered initially, the dropdown menu will show the option with value="12" as selected because of the Blade templating code:

html
Copy code
<option value="12" {{ $size == 12 ? 'selected':'' }}>12 Products Per Page</option>
Here, if $size is equal to 12, the selected attribute will be added to this <option> tag, making it selected by default.

When the user selects a different option from the dropdown menu and submits the form through JavaScript, the new value of $size is not directly updated in the view. Instead, the form submission triggers a new HTTP request to the server, and the controller retrieves the updated value of size from the query parameters as shown in your controller method:

php
Copy code
$size = $request->query("size");
This updated value of $size is then used to fetch the corresponding number of products from the database, and the view is rendered again with the updated product list.

In summary, $size is initially set by the server and passed to the view when the page is rendered. Subsequent changes to the selected size are handled by the server-side code in response to form submissions.--}}
