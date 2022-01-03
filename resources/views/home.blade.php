@extends('layouts.navigation.template')
@section('content')
		<div id="wrapper" class="container" style="width: 100%;">
			<div id="page" class="row">
				<div id="content" class="8u skel-cell-important">

					<section>
                        <h2>Welcome to Online Magazine</h2>
                        <p><a href="#"><img style="height:30rem" src="{{ ('images/homePhoto.jpg') }}" alt=""></a></p>
						<p style="text-align:justify;  font-size: 18px;">Choosing clothes online is much better and faster. Save time so you can have more time for your loved ones. With us you will find a variety of products that will make you look remarkable.</p>
					</section>
				</div>

				<div id="sidebar" class="4u">
                    {{-- Right part collection of categories --}}
					@include('layouts.partials.home.home-categories')
					{{-- Right part collection of products --}}
                    @include('layouts.partials.home.home-products')
				</div>
			</div>
        </div>
		<div style="text-align: -webkit-center;">
		<footer style="background-color: #f4f3f3;margin: 30px;text-align: center; padding: 30px;max-width: 1320px;">
			<h1 style="font-size: 40px;"><strong>Make</strong> Your Order</h1>
			<p style="margin: 50px 50px; font-size: 20px; font-style: italic;">
			Make your inquiry and we will respond immediately. We know in the shops how disgusting it is to wait, so we have thought about it! Do not hesitate and write to us.
			</p>
			<form action="" style="font-size: 25px;">
				<input style="margin: 0px 20px 20px 20px;padding: 5px 40px 5px 0px;" type="text" id="email" name="email" placeholder="Your Email" />
				<input style="margin: 0px 20px 20px 20px;padding: 5px 40px 5px 0px;" type="text" id="subject" name="subject" placeholder="Subject" />
				<br />
				<textarea style="width: 450px;" name="message" rows="5" cols="40">Message</textarea>
				<button style="display: block; text-align: center;background-color: black;color: white; margin: auto;margin-top: 20px;" type="button" onclick="alert('You send your message')">
				SEND MESSAGE
				</button>
			</form>
    	</footer>
		</div>
		<div class="footer" style="background: #2b3f30d2; padding: 5em; margin-top: 2em; color: white; text-align: center;">
			<p style="font-size: 15px">The content of this site is copyright-protected and is the property of D and A. D and A is committed to accessibility.</p>
			<p style="font-size: 12px">Address: D and A, Lighting Way 300</p>
			<p style="font-size: 12px">Secaucus Suite 100</p>
		</div>
@endsection