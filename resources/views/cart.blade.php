@extends('layouts.base')
@section('content')
{{-- Add hardevine/shoppingcart package from online and stored on vendor\hardvine\shoppingcart--}}

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
                <h3>Cart</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Cart Section Start -->
<section class="cart-section section-b-space">
    <div class="container">
        @if($cartItems->Count()>0)
        <div class="row">
            <div class="col-md-12 text-center">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($cartItems as $item )
                        <tr>
                            <td>

                                {{--  when you associate a model with an item in the cart using associate('App\Models\Product'), as seen in your addToCart() method, it means that each item
                                in the cart is associated with an instance of the Product model.
                                 So, when you retrieve an item from the cart using $item, accessing $item->model refers to the associated model instance, in this case, a Product model. --}}
                                <a href="{{ route('shop.product.details',['slug'=>$item->model->slug]) }}">
                                    <img src="{{ asset('assets/images/fashion/product/front')}}/{{ $item->model->image }}" class="blur-up lazyloaded"
                                        alt="{{$item->model->name  }}">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('shop.product.details',['slug'=>$item->model->slug]) }}">{{ $item->model->name }}
                                  </a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number"
                                                    value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h2>${{ $item->price }}</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>${{ $item->price }}</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity"
                                            data-rowid="{{ $item->rowId }}" onchange="updateQuantity(this)"
                                            class="form-control input-number" value="{{ $item->qty }}">
                                    </div>

{{-- onchange="updateQuantity(this)": This is an event handler that triggers a JavaScript function named "updateQuantity" when the value of the input field changes. The this keyword refers to the input field itself .Whenever the user change value something into the quantity input field and then clicks outside of it or tabs away from it, the updateQuantity() function will be triggered--}}
{{-- value="{{ $item->qty }}": This sets the initial value of the input field dynamically using server-side code (again, Laravel's Blade syntax). It appears to be pulling the quantity value associated with the current item. --}}
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">${{ $item->subtotal() }}</h2>
                            </td>
                            <td>
                                <a href="javascript:void(0)">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 mt-md-5 mt-4">
                <div class="row">
                    <div class="col-sm-7 col-5 order-1">
                        <div class="left-side-button text-end d-flex d-block justify-content-end">
                            <a href="javascript:void(0)"
                                class="text-decoration-underline theme-color d-block text-capitalize">clear
                                all items</a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-7">
                        <div class="left-side-button float-start">
                            <a href="../shop.html" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart-checkout-section">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="promo-section">
                            <form class="row g-3">
                                <div class="col-7">
                                    <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                </div>
                                <div class="col-5">
                                    <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 ">
                        <div class="checkout-button">
                            <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-box">
                            <div class="cart-box-details">
                                <div class="total-details">
                                    <div class="top-details">
                                        <h3>Cart Totals</h3>
                                        <h6>Sub Total <span>{{ Cart::instance('cart')->subtotal() }}</span></h6>
                                        {{--  calculates the total cost of all items in the cart without considering taxes or discounts. --}}
                                        <h6>Tax <span>{{ Cart::instance('cart')->tax() }}</span></h6>
                                        {{-- calculates the total tax amount based on the items in the cart. --}}
                                        <h6>Total <span>{{ Cart::instance('cart')->total() }}</span></h6>
                                        {{-- calculates and displays the total cost, including both the subtotal and tax, of the items in the shopping cart --}}
                                    </div>


                                    {{-- subtotal(),total(),tax() are all defined at vendor/hardvine\shoppingcart\src\cart.php --}}
                                    <div class="bottom-details">
                                        <a href="checkout">Process Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Your cart is empty!</h2>
                <h5 class="mt-3">Add items to it now</h5>
                <a href="{{ route('shop.index') }}" class="btn btn-warning mt-5">Shop Now</a>
            </div>


        </div>
        @endif
    </div>
</section>
    <form id="updateCartQty" method="post" action="{{ route('cart.update') }}">
      @csrf
      @method('put')
        <input type="hidden" id="rowId" name="rowId">
        <input type="hidden" id="quantity" name="quantity">
    </form>
@endsection

@push('scripts')

<script>
   function updateQuantity(qty)
   {
      $('#rowId').val($(qty).data('rowid'));//This line sets the value of the hidden input field with the ID "rowId" to the value of the "rowid" data attribute of the input field passed as "qty".
      $('#quantity').val($(qty).val());//This line sets the value of the hidden input field with the ID "quantity" to the value entered by the user in the input field passed as "qty".
      $('#updateCartQty').submit();//This line submits the form with the ID "updateCartQty", triggering the form submission to update the cart with the new quantity.
   }
</script>

{{-- update cart quantity flow --}}
{{-- HTML Form Submission:
The HTML form is rendered with hidden input fields for "rowId" and "quantity".
When a user changes the quantity of an item using the input field, the updateQuantity() JavaScript function is triggered.
JavaScript Function updateQuantity(qty):
This function is called when the quantity input field is changed.
It extracts the "rowid" attribute value from the input field and sets it as the value of the hidden input field with ID "rowId".
It extracts the quantity value entered by the user and sets it as the value of the hidden input field with ID "quantity".
Finally, it submits the form with the ID "updateCartQty", causing a POST request to be sent to the server.
Controller Method updateCart(Request $request):
When the form is submitted, it triggers the updateCart method in the controller.
The method receives the request object, which contains the updated "rowId" and "quantity" values from the form.
It uses the Laravel Cart facade (Cart::instance('cart')->update(...)) to update the quantity of the item in the shopping cart based on the provided "rowId" and "quantity".
After updating the cart, it redirects the user to the 'cart.index' route, likely to display the updated cart contents.
So, in summary, when a user changes the quantity of an item in the cart, the JavaScript function updates hidden input fields with the new quantity and the item's identifier, then submits the form. The server-side controller method processes this form submission, updates the cart accordingly, and redirects the user back to the cart page.

 --}}

@endpush