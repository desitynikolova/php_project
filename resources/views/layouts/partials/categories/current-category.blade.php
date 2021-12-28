@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div style="background: gray; border: 2px solid black;">
            <p class="card-text text-white h5 p-2">Name: {{$category->name}}</p>
            @if(!empty($products))
            <p class="card-text text-white h5 p-2">
                <div class="card-text text-white h5 p-2 d-flex">
                    Products:
                    @include('layouts.partials.products.current-product-products')
                </div>
            @endif
        </div>
    </div>
@endsection