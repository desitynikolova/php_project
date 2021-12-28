@extends('layouts.navigation.template')
@section('content')
		<div id="wrapper" class="container">
			<div id="page" class="row">
				<div id="content" class="8u skel-cell-important">

					<section>
                        <h2>Welcome to Online Magazine</h2>
                        <p><a href="#"><img style="height:30rem" src="{{ ('images/homePhoto.jpg') }}" alt=""></a></p>
						<p style="text-align:justify">This is a site for clothes -> at home.blade.php to edit text</p>
					</section>
				</div>

				<div id="sidebar" class="4u">
                    {{-- Right part collection of products --}}
                    @include('layouts.partials.home.home-products')
                    {{-- Right part collection of categories --}}
					@include('layouts.partials.home.home-categories')
				</div>
			</div>
        </div>
@endsection