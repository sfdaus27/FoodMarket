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
      <div class='steps'>
    </a>
    <span style="font-family:montserrat;font-size:20px;font-weight:700">PAYMENT</span>
  </div>
</div>
<br>
<div class="content-wrapper">
  <table id="cart" class="table table-hover table-condensed">
    <thead style="font-family:montserrat;">
      <tr>
        <br>
        <th class="text-center">ORDER SUMMARY</th>
      </tr>
    </thead>
  </table>
  <!-- <p>Naritha cahya</p> -->
  <a href="/payment/">
    <div class="btn btn-success pull-right btn-fyi" style="font-family:montserrat;font-size:15px;font-weight:700;margin-right:395px;">PAYMENT<span class="glyphicon glyphicon-chevron-right"></span></div>
  </a>
</div>
</div>
</div>
@endsection