@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/cart.css') !!}">
@endsection

@section('body')

<div class="container-fluid">
    <p> <br> <br> </p>
    <div class="back">
        <a href="/menu/">
            <i class="fa fa-arrow-left"></i><i style="font-family:montserrat;">Continue Shopping</i>
        </a>
    </div>
    <div class='steps-container' style="margin-left:410px;position:relative;">
        <div class='steps active'>
            <a href="/cart/"><span style="font-family:montserrat;font-size:20px;font-weight:700">CART</span></a>
        </div>
        <div class='steps active'>
            <a href="/summary/"><span style="font-family:montserrat;font-size:20px;font-weight:700">CHECKOUT</span></a>
        </div>
        <a href="/payment">
            <div class='steps active'>
        </a>
        <span style="font-family:montserrat;font-size:20px;font-weight:700">PAYMENT</span>
    </div>
</div>
<div class="content-wrapper">
    <table id="checkout" class="table table-hover table-condensed">

        <thead style="font-family:montserrat;">
            <tr>
                <br>
                <th class="text-center">PAYMENT METHOD</th>
            </tr>
        </thead>
    </table>
    <div class="container" style="width: 915px;">
        <div class="row">
            <div class="paymentCont" style="margin:auto;">
                <div class="paymentWrap">
                    <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                        <label class="btn paymentMethod">
                            <div class="method visa"></div>
                            <input type="radio" name="payment" value="dana">
                        </label>
                        <label class="btn paymentMethod">
                            <div class="method master-card"></div>
                            <input type="radio" name="payment" value="gopay">
                        </label>
                        <label class="btn paymentMethod">
                            <div class="method amex"></div>
                            <input type="radio" name="payment" value="ovo">
                        </label>
                        <label class="btn paymentMethod">
                            <div class="method vishwa"></div>
                            <input type="radio" name="payment" value="linkaja">
                        </label>
                    </div>
                </div>
                <div class="btn btn-success pull-right btn-fyi" style="font-family:montserrat;font-size:15px;font-weight:700;margin-right:420px;">PROCEED<span class="glyphicon glyphicon-chevron-right"></span></div>
            </div>

        </div>
    </div>
</div>
@endsection