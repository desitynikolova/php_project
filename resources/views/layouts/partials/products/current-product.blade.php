@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div style="background: #718c7b; border: 2px solid black; border-radius: 1em;">
            <img style="width:30rem;height:25rem;border-radius: 1em;" src="{{asset($product->image)}}" alt="Image">
            <p class="card-text text-white h5 p-2">Title: {{$product->title}}</p>
            @if(!empty($categories))
            <p class="card-text text-white h5 p-2">
            Category:
                @include('layouts.partials.products.current-product-categories')
            </p>
            @endif
        </div>
    </div>
    <div class="footer" style="background: #2b3f30d2; padding: 5em; margin-top: 2em; color: white; text-align: center;margin-top: 10em;">
			<p style="font-size: 15px">The content of this site is copyright-protected and is the property of D and A. D and A is committed to accessibility.</p>
			<p style="font-size: 12px">Address: D and A, Lighting Way 300</p>
			<p style="font-size: 12px">Secaucus Suite 100</p>
		</div>
@endsection