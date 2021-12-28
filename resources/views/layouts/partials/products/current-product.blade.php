@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div style="background: gray; border: 2px solid black;">
            <img style="width:30rem;height:25rem;" src="{{asset($product->image)}}" alt="Image">
            <p class="card-text text-white h5 p-2">Title: {{$product->title}}</p>
            @if(!empty($categories))
            <p class="card-text text-white h5 p-2">
            Category:
                @include('layouts.partials.products.current-product-categories')
            </p>
            @endif
        </div>
    </div>
@endsection