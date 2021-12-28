@extends('layouts.navigation.template')
@section('content')
        <div id="wrapper" class="container">
			<!-- Page Content -->
			<div id="page" class="row">
				<!-- Content Area -->
				<div id="content">
					<!-- Main Content Area -->
					<section class="row">
                        @foreach($categories as $category)
                        <div class="d-flex justify-content-center col-3 py-3">
                            <div style="background: gray; border: 2px solid black;">
                                <p class="card-text text-white h5 p-2">Name: {{$category->name}}</p>
                                <div class="d-flex justify-content-center align-items-center pb-3">
                                    <a class="btn btn-white bg-white text-danger" href="{{ url('categories/'.$category->id) }}"> View More</a>
                                </div>
                            </div>
                          </div>
                        @endforeach
					</section>
				</div>
            </div>
        </div>
@endsection