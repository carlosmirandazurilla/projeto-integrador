@extends('layouts.front.app')

@section('content')
    <div class="container product-in-cart-list">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="alert alert-warning">Você cancelou sua ordem. Talvez gostaría de <a href="{{ route('home') }}">ver outros itens?</a></p>
            </div>
        </div>
    </div>
@endsection