@extends('layouts.navigation.template-current')
@section('content')
    <div class="d-flex justify-content-center">
        <div style="background: #718c7b; border: 2px solid black;">
            <p class="card-text text-white h5 p-2">Name: {{$category->name}}</p>
            @if(!empty($products))
            <p class="card-text text-white h5 p-2">
                <div>
                    Products:
                    @include('layouts.partials.products.current-product-products')
                </div>
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