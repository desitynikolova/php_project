<section id="box2">
    <h2>Products</h2>
    <ul class="style2">
        @foreach($products->reverse() as $product)
        <li class="first">
            <p>
                <a href="{{ url('products/'.$product->id) }}">
                    <img style="width:2rem;height:3rem" src="{{$product->image}}" alt="Product"> {{$product->title}} 
                </a>
            </p>
        </li>
        @endforeach
    </ul>
    <p><a href="{{ url('products') }}" class="button"><span>View All Products</span></a></p>
</section>