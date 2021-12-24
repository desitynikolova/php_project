@extends('layouts.navigation.template')
@section('content')
		<div id="wrapper" class="container">
			<div id="page" class="row">
				<div id="content" class="8u skel-cell-important">

					<section>
                        <h2>Welcome to Products Project</h2>
                        <p class="button p-1">Welcome to my site for clothes</p>
                        <p><a href="#"><img style="height:30rem" src="{{ ('images/camera.jpg') }}" alt=""></a></p>
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