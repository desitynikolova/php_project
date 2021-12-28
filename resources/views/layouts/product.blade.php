@extends('layouts.navigation.template')
@section('content')
        <div id="wrapper" class="container">
			<!-- Page Content -->
			<div id="page" class="row">
				<!-- Content Area -->
				<div id="content">
					<!-- Main Content Area -->
					<section class="row">
                        @foreach($products->reverse() as $product)
                        <div class="d-flex justify-content-center col-lg-12 col-xl-6 py-3">
                            <div style="background: gray; border: 2px solid black;">
                                <img style="width:30rem;height:25rem" src="{{$product->image}}" alt="Image">
                                <p class="card-text text-white h5 p-2">Title: {{$product->title}}</p>
                                <div class="d-flex justify-content-center align-items-center pb-3">
                                    <a class="btn btn-white bg-white text-danger" href="{{ url('products/'.$product->id) }}"> View More</a>
                                </div>
                            </div>
                          </div>
                        @endforeach
					</section>
				</div>
            </div>
        </div>
@endsection