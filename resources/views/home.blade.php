@extends('layouts.app')

@section('header')
    @include('header')
@endsection
@section('content')
    <div class="home-page">
        <section id="home">
            <div class="section-area home-sec">
                <div class="video-section">
                    <iframe width="1707" height="789" src="https://www.youtube.com/embed/gF0rrpMH-Jo?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="video-caption-section">
                    <div class="container">
                        <div class="col-md-6">
                            <div class="row">
                                <h3 class="seperator">New Product</h3>
                                <h1><span>Made With</span> Style</h1>
                                <p>Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box“ thinking.</p>
                                <hr>
                                <div class="col-md-6">
                                    <img src="">
                                    <div class="column-content">
                                        <h2>Great home pages</h2>
                                        <p>Interactively procrastinate high-payoff content without backward-compatible data.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="">
                                    <div class="column-content">
                                        <h2>Beautiful presentations</h2>
                                        <p>Phosfluorescently engage worldwide methodologies with web-enabled technology.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-image">
                                <img src="assets/images/wrist_band.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="section-area feature-area">
                <div class="mobile-sec">
                    <div class="container">
                        <div class="col-md-4">
                            <div class="feature-col text-right">
                                <div class="column-content">
                                    <i class="icon-compass2"></i>
                                    <h2>Beautiful presentations</h2>
                                    <p>Continually reintermediate integrated processes through technically sound intellectual capital.</p>
                                </div>
                            </div>

                            <div class="feature-col text-right">
                                <div class="column-content">
                                    <i class="icon-stopwatch"></i>
                                    <h2>Product pages</h2>
                                    <p>Quickly coordinate e-business applications through revolutionary catalysts for change.</p>
                                </div>
                            </div>

                            <div class="feature-col text-right">
                                <div class="column-content">
                                    <i class="icon-rocket"></i>
                                    <h2>New Features</h2>
                                    <p>Phosfluorescently engage worldwide methodologies with web-enabled technology.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="mobile-img">
                                <img src="assets/images/phone_centered.png">
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="feature-col text-left">
                                <div class="column-content">
                                    <i class="icon-mobile"></i>
                                    <h2>Fully responsive</h2>
                                    <p>Objectively integrate emerging core competencies before process-centric communities.</p>
                                </div>
                            </div>

                            <div class="feature-col text-left">
                                <div class="column-content">
                                    <i class="icon-upload"></i>
                                    <h2>One-click import</h2>
                                    <p>Phosfluorescently engage worldwide methodologies with web-enabled technology.</p>
                                </div>
                            </div>

                            <div class="feature-col text-left">
                                <div class="column-content">
                                    <i class="icon-location2"></i>
                                    <h2>Free updates</h2>
                                    <p>Dramatically disseminate standardized metrics after resource-leveling processes.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing">
            <div class="section-area pricing-area">
                <div class="pricing-section product-background-image">
                    <div class="container">
                        <div class="pricebox-container">

                            <div class="pricebox">
                                <div class="pricebox-header">
                                    <h2 class="previous-price"><sup>$</sup>99</h2>
                                    <h2 class="current-price"><sup>$</sup>89</h2>
                                    <h3>ROUTE PLANNING</h3>
                                </div>
                                <div class="pricebox-body">
                                    <p>Empowered manufactured products</p>
                                    <p>Holisticly predominate</p>
                                    <p>Objectively innovate</p>
                                </div>
                                <div class="pricebox-footer">
                                    <a href="{{ route('cart.view') }}" class="btn btn-danger">Add to Cart</a>
                                </div>
                            </div>


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