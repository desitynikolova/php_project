@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow  d-flex bg-danger">
            <img style="width:30rem;height:25rem" src="{{$product->image}}" alt="Image">
            <p class="card-text text-white h5 p-2">Title: {{$product->title}}</p>
            <p class="card-text text-white h5 p-2">Release Date: {{$product->date}}</p>
            @if(!empty($categories))
            <p class="card-text text-white h5 p-2">
                Category:
                <br>
                @include('layouts.partials.products.current-product-categories')
            </p>
            @endif
        </div>
    </div>
@endsection