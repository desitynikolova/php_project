@foreach($categories as $category)
    @foreach($category as $currentCategory)
     {{$currentCategory['name']}} 
    @endforeach
@endforeach