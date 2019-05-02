@extends('layouts.front.app')

@section('content')
    <div class="container product-in-cart-list">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="alert alert-success">Seu pedido está a caminho! <a href="{{ route('home') }}">Veja mais!</a></p>
            </div>
        </div>
    </div>
@endsection