<section id="box3">
    <h2>Categories</h2>
    <ul class="style3">
        @foreach($categories as $category)
        <ul class="style1">
            <li>
                <a href="{{ url('products/'.$category->id) }}">
                    <i class="fa fa-ticket my-2 m-2" aria-hidden="true"></i> {{$category->name}} <br> $
                </a>
            </li>
        </ul>
        @endforeach
    </ul>
</section>