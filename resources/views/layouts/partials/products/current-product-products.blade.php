@foreach($products as $product)
    @foreach($product as $currentProduct)
        <div class="px-1 bg-white text-danger mx-1">
        <p class="d-flex">Title: {{$currentProduct['title']}}</P>
        <p class="d-flex">Date: {{$currentProduct['date']}}</P>
        <img style="width:15rem;height:15rem" src="{{$currentProduct['image']}}" alt="Image">
        </div>
    @endforeach
@endforeach