@extends('layouts.app')

@section('title','My Account')
    <!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


@section('content')

<!-- Start Top Search -->
<!-- End Top Search -->

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>My Account</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Shop</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->
<!-- Start My Account  -->
<div class="my-account-box-main">
    <div class="container">
        <div class="my-account-page">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-gift"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Your Orders</h4>
                                <p>Track, return, or buy things again</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
{{--                                <a href="{{route('profile.show')}}"><i class="fa fa-lock"></i> </a>--}}
                            </div>
                            <div class="service-desc">
                                <h4>Login &amp; security</h4>
                                <p>Edit login, name, and mobile number</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-location-arrow"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Your Addresses</h4>
                                <p>Edit addresses for orders and gifts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-credit-card"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Payment options</h4>
                                <p>Edit or add payment methods</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fab fa-paypal"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>PayPal</h4>
                                <p>View benefits and payment settings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fab fa-amazon"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Amazon Pay balance</h4>
                                <p>Add money to your balance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End My Account -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->



<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/inewsticker.js"></script>
<script src="js/bootsnav.js."></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>


</html>
@endsection
