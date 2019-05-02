@extends('layouts.front.app')

@section('content')
    <div class="container product-in-cart-list">
        @if(!$products->isEmpty())
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
                        <li class="active">Carrinho</li>
                    </ol>
                </div>
                <div class="col-md-12 content">
                    <div class="box-body">
                        @include('layouts.errors-and-messages')
                    </div>
                    @if(count($addresses) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                @include('front.products.product-list-table', compact('products'))
                            </div>
                        </div>
                        @if(isset($addresses))
                            <div class="row">
                                <div class="col-md-12">
                                    <legend><i class="fa fa-home"></i> Endereços</legend>
                                    <table class="table table-striped">
                                        <thead>
                                            <th>Nome</th>
                                            <th>Endereço</th>
                                            <th>Endereço de cobrança</th>
                                            <th>Endreço de entrega</th>
                                        </thead>
                                        <tbody>
                                            @foreach($addresses as $key => $address)
                                                <tr>
                                                    <td>{{ $address->alias }}</td>
                                                    <td>
                                                        {{ $address->address_1 }} {{ $address->address_2 }} <br />
                                                        @if(!is_null($address->province))
                                                            {{ $address->city }} {{ $address->province->name }} <br />
                                                        @endif
                                                        {{ $address->city }} {{ $address->state_code }} <br>
                                                        {{ $address->country->name }} {{ $address->zip }}
                                                    </td>
                                                    <td>
                                                        <label class="col-md-6 col-md-offset-3">
                                                        <input
                                                                    type="radio"
                                                                    value="{{ $address->id }}"
                                                                    name="billing_address"
                                                                    @if($billingAddress->id == $address->id) checked="checked"  @endif>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        @if($billingAddress->id == $address->id)
                                                            <label for="sameDeliveryAddress">
                                                                <input type="checkbox" id="sameDeliveryAddress" checked="checked"> O mesmo que endereço de cobrança
                                                            </label>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tbody style="display: none" id="sameDeliveryAddressRow">
                                            @foreach($addresses as $key => $address)
                                                <tr>
                                                    <td>{{ $address->alias }}</td>
                                                    <td>
                                                        {{ $address->address_1 }} {{ $address->address_2 }} <br />
                                                        @if(!is_null($address->province))
                                                            {{ $address->city }} {{ $address->province->name }} <br />
                                                        @endif
                                                        {{ $address->city }} {{ $address->state_code }} <br>
                                                        {{ $address->country->name }} {{ $address->zip }}
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <label class="col-md-6 col-md-offset-3">
                                                            <input
                                                                    type="radio"
                                                                    value="{{ $address->id }}"
                                                                    name="delivery_address"
                                                                    @if(old('') == $address->id) checked="checked"  @endif>
                                                        </label>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                        @if(!is_null($rates))
                            <div class="row">
                                <div class="col-md-12">
                                    <legend><i class="fa fa-truck"></i> Empresa de entrega</legend>
                                    <ul class="list-unstyled">
                                        @foreach($rates as $rate)
                                            <li class="col-md-4">
                                                <label class="radio">
                                                    <input type="radio" name="rate" data-fee="{{ $rate->amount }}" value="{{ $rate->object_id }}">
                                                </label>
                                                <img src="{{ $rate->provider_image_75 }}" alt="courier" class="img-thumbnail" /> {{ $rate->currency }} {{ $rate->amount }}<br />
                                                {{ $rate->servicelevel->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> <br>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <legend><i class="fa fa-credit-card"></i> Pagamento</legend>
                                @if(isset($payments) && !empty($payments))
                                    <table class="table table-striped">
                                        <thead>
                                        <th class="col-md-4">Nome</th>
                                        <th class="col-md-4">Descrição</th>
                                        <th class="col-md-4 text-right">Escola forma de pagamento</th>
                                        </thead>
                                        <tbody>
                                        @foreach($payments as $payment)
                                            @include('layouts.front.payment-options', compact('payment', 'total', 'shipment'))
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="alert alert-danger">Nenhum pagamento escolhido</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <p class="alert alert-danger"><a href="{{ route('customer.address.create', [$customer->id]) }}">Nenhum endereço encontrado. Precisa preencher o endereço antes.</a></p>
                    @endif
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    <p class="alert alert-warning">No products in cart yet. <a href="{{ route('home') }}">Veja mais!</a></p>
                </div>
            </div>
        @endif
    </div>
@endsection