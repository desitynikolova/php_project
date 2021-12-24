@foreach($categories as $category)
    @foreach($category as $currentCategory)
        Name: {{$currentCategory['name']}} <br>
    @endforeach
@endforeach