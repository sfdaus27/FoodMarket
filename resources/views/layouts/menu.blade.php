@extends('layouts/base')

@section('head')
<link rel="stylesheet" type="text/css" href="{!! asset('/css/menu.css') !!}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
@endsection

@section('body')
<div class="container-fluid">
    <div class="judul">
        <h1>OUR MENU</h1>
    </div>
    <div class="row">
        <a href="/pizza/">
            <div class="container-menu">
                <img class="gambar" src="https://media.discordapp.net/attachments/767045716420853772/770509270097068052/bigpizza.png?width=672&height=452">
                <div class="title">
                    <p>Pizza</p>
                </div>
            </div>
        </a>

        <a href="/burger/">
            <div class="container-menu">
                <img class="gambar" src="https://nos.jkt-1.neo.id/mcdonalds/foods/November2019/0nR6ysDcMRuLttBeJ4Ho.png">
                <div class="title">
                    <p>Burger</p>
                </div>
            </div>
        </a>

        <a href="/drink/">
            <div class="container-menu">
                <img class="gambar" src="https://nos.jkt-1.neo.id/mcdonalds/foods/September2019/5nIDFH9VTNE16UcjnnyW.png">
                <div class="title">
                    <p>Beverage</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection