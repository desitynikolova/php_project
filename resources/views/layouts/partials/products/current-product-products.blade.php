@foreach($products as $product)
    @foreach($product as $currentProduct)
        <div style="border: 1px solid gray;">
        <p class="d-flex">Title: {{$currentProduct['title']}}</p>
        <img src="{{asset($currentProduct['image'])}}" alt="Image" />
        </div>
    @endforeach
@endforeach