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
                            <div style="background: #718c7b; border: 2px solid black;border-radius: 1em;">
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
        <div class="footer" style="background: #2b3f30d2; padding: 5em; margin-top: 2em; color: white; text-align: center;margin-top: 10em;">
			<p style="font-size: 15px">The content of this site is copyright-protected and is the property of D and A. D and A is committed to accessibility.</p>
			<p style="font-size: 12px">Address: D and A, Lighting Way 300</p>
			<p style="font-size: 12px">Secaucus Suite 100</p>
		</div>
@endsection