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
                        <h1>Shop <span>Checkout</span></h1>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="billing-informarion">
                <div class="container">
                    <div class="col-md-6">
                        <div class="billing-details">
                            <h3>Billing details</h3>
                            <form>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <label>First name *</label>
                                            <input type="text" required="" name="first_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Last name *</label>
                                            <input type="text" required="" name="last_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Company name</label>
                                            <input type="text" name="company_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Country *</label>
                                            <select class="selectsearch" required="">
                                                <option>Pakistan</option>
                                                <option>Palestinian Territory</option>
                                                <option>Norfolk Island</option>
                                                <option>North Korea</option>
                                                <option>Niue</option>
                                                <option>Nigeria</option>
                                                <option>Philippines</option>
                                                <option>Pitcairn</option>
                                                <option>Poland</option>
                                                <option>Portugal</option>
                                                <option>Saint Barthélemy</option>
                                                <option>United States (US)</option>
                                                <option>United Kingdom (UK)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address *</label>
                                            <input type="text" name="street_address" placeholder="Street address" class="form-control margin-bottom-13" required="">
                                            <input type="text" name="optional_address" placeholder="Apartment, suite, unit etc. (optional)" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Town / City *</label>
                                            <input type="text" name="city_address" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>State / County *</label>
                                            <input type="text" name="country_address" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Postcode / ZIP *</label>
                                            <input type="text" name="zip_code" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="number" name="phone_nunber" class="form-control" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address *</label>
                                            <input type="Email" name="email_address" class="form-control" required="">
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="addition-details">
                            <h3>Additional information</h3>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Order notes</label>
                                        <textarea style="height:150px;" name="first_name" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="cart-table checkout">
                <div class="container">
                    <div class="col-md-12">
                        <div class="custom-cart-table checkout-cart-table">
                            <h3>Your order</h3>
                            <table class="table table-resposive">
                                <thead>
                                <th class="checkout-product-name">Product</th>
                                <th class="checkout-product-total">Total</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="checkout-product-name">Flying Ninja 	<span class="product-qty">× 4</span></td>
                                    <td class="checkout-product-total">$48.00</td>
                                </tr>
                                <tr>
                                    <td class="checkout-product-name"><strong>Subtotal</strong></td>
                                    <td class="checkout-product-total">$48.00</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <h4>Total</h4>
                                    </td>
                                    <td>
                                        <h4>$48.00</h4>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="col-md-12">

                    <div class="checkout-method">
                        <div class="payment">
                            <ul class="payment-method">
                                <li class="payment-option-method">
                                    <div class="form-group">
                                        <input type="radio" id="bank-transfer" name="payment_mtd" class="form-control" value="bank-transfer">
                                        <label>Bank Transfer</label>
                                        <div class="detail-box bank-transfer">
                                            <p>Please send Bank Account Details</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="payment-option-method">
                                    <div class="form-group">
                                        <input type="radio" id="stripe" name="payment_mtd" class="form-control" value="stripe">
                                        <label>Stripes</label>
                                        <div class="detail-box stripe">
                                            <p>Pay via Stripe; you can pay with your credit card if you don’t have a Stripe account.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="payment-option-method">
                                    <div class="form-group">
                                        <input type="checkbox" name="terms&condition">
                                        <label class="terms">I’ve read and accept the <a class="link" href="javascript:void()">Terms & Conditions</a> *</label>
                                    </div>
                                </li>
                                <li class="payment-option-method">
                                    <div class="form-group order-place">
                                        <a href="javascript:void()" disabled class="btn btn-danger">Place Order</a>
                                    </div>
                                </li>
                            </ul>
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