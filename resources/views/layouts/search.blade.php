@extends('layouts.navigation.template')
@section('content')
<head>

</head>
<div id="wrapper" class="container">
    <div id="page" class="row">
        <div id="content" class="8u skel-cell-important">
            <div class="offset-4">
                <div>
                    <button id="buttonTitle" class="active" onclick="showTitle()">Title of Product</button>
                    <button id="buttonCategory" class="element" onclick="showCategory()">Category</button>
                </div>
                <div class="searchWrapper" id="searchTitle">
                    <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-start">
                        <input class="input-group-text d-inline bgRed" style="width: 40rem" type="text" name="search-title" placeholder="Title:" required/>
                        <button  class="btn textRed my-3" type="submit" >Search by Title</button>
                    </form>
                </div>

                <div class="searchWrapper" id="searchCategory" style="display: none">
                    @foreach($categories as $category)
                        <a class="categoryButton" href="{{ url('categories/'.$category->id) }}" > {{$category->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
	</div>
</div>
    <script>
        // show next step and hides current
        function showTitle(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "#eeeeee";
            document.getElementById("buttonDate").style.backgroundColor = "#F62A2A";
            document.getElementById("buttonCategory").style.backgroundColor = "#F62A2A";
            //hide others and show only title
            document.getElementById("searchTitle").style.display = "block";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchCategory").style.display = "none";
        }
        function showDate(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "#F62A2A";
            document.getElementById("buttonDate").style.backgroundColor = "#eeeeee";
            document.getElementById("buttonCategory").style.backgroundColor = "#F62A2A";
            //hide others and show only date
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "block";
            document.getElementById("searchCategory").style.display = "none";
        }
        function showCategory(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = " #F62A2A";
            document.getElementById("buttonDate").style.backgroundColor = " #F62A2A";
            document.getElementById("buttonCategory").style.backgroundColor = "#eeeeee";
            //hide others and show only category
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchCategory").style.display = "block";
        }
    </script>
@endsection