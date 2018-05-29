@extends('layouts.app')

@section('header')
    @include('header')
@endsection
@section('content')
    <div class="cart-page">
        <section>
            <div class="page-title-area" style="background-image: url('/assets/images/cart-bg.jpg')">
                <div class="container">
                    <div class="title-content">
                        <h1>Shopping <span>Cart</span></h1>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="cart-table">
                <div class="container">
                    <div class="custom-cart-table">

                        <table class="table table-resposive">
                            <thead>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-total">Total</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-remove"><i class="icon-cross"></i></td>
                                <td class="product-thumbnail"><img src="assets/images/productimage.jpg"</td>
                                <td class="product-name">Custom Product</td>
                                <td class="product-price">$12.00</td>
                                <td class="product-quantity"><input type="number" name="product-qty" value="1"></td>
                                <td class="product-total">$12.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <div class="coupon-code">
                                        <label for="coupon_code">Coupon:</label>
                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                        <input type="submit" class="btn btn-danger" name="apply_coupon" value="Apply coupon">
                                    </div>
                                </td>
                                <td>
                                    <a href="javascript:void()" class="btn btn-danger">Update Cart</a>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="checkout-area">
                    <div class="cart-total">
                        <h3>Cart Totals</h3>
                        <table class="table table-resposive">
                            <tbody>
                            <tr>
                                <td><p>Subtotal</p></td>
                                <td>£12.00</td>
                            </tr>
                            <tr>
                                <td><h4>Total</h4></td>
                                <td><h4>£12.00</h4></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="proceed-to-checkout">
                            <a href="{{ route('checkout') }}" class="btn btn-danger">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer')
    @include('footer')
@endsection