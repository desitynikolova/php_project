@extends('layouts.navigation.template')
@section('content')
<head>

</head>
<div id="wrapper" class="container">
    <div id="page" class="row">
        <div id="content" class="8u skel-cell-important">
            <div class="offset-4">
                <div>
                    <button id="buttonTitle" class="active" style="background: #6f7e73d1" onclick="showTitle()">Title of Product</button>
                    <button id="buttonDate" class="element" style="background: #6f7e73d1" onclick="showDate()">Date</button>
                    <button id="buttonCategory" class="element" style="background: #6f7e73d1" onclick="showCategory()">Category</button>
                </div>
                <div class="searchWrapper" style="background: #6f7e73d1" id="searchTitle">
                    <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-start">
                        <input class="input-group-text d-inline bgRed" style="width: 40rem; background: #9ec4af;" type="text" name="search-title" placeholder="Title:" required/>
                        <button  class="btn textRed my-3" type="submit" style="border: none; background: white;">Search by Title</button>
                    </form>
                </div>
                <div class="searchWrapper" id="searchDate" style="display: none; background: #6f7e73d1;">
                    <form action="{{ route('search-date') }}" method="GET" class="d-inline align-items-start">
                        <input class="input-group-text d-inline bgRed" style="width: 40rem; background: #9ec4af;" type="date" name="search-date" required/>
                        <button  class="btn textRed my-3" type="submit" style="border: none; background: white;" >Search by Date</button>
                    </form>
                </div>

                <div class="searchWrapper" id="searchCategory" style="display: none; background: #6f7e73d1;">
                    @foreach($categories as $category)
                        <a class="categoryButton" style="background: #9ec4af;" href="{{ url('categories/'.$category->id) }}" > {{$category->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
	</div>
</div>
<div class="footer" style="background: #2b3f30d2; padding: 5em; margin-top: 2em; color: white; text-align: center;">
			<p style="font-size: 15px">The content of this site is copyright-protected and is the property of D and A. D and A is committed to accessibility.</p>
			<p style="font-size: 12px">Address: D and A, Lighting Way 300</p>
			<p style="font-size: 12px">Secaucus Suite 100</p>
		</div>
    <script>
        // show next step and hides current
        function showTitle(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "#6f7e73d1";
            document.getElementById("buttonDate").style.backgroundColor = "#6f7e73d1";
            document.getElementById("buttonCategory").style.backgroundColor = "#6f7e73d1";
            //hide others and show only title
            document.getElementById("searchTitle").style.display = "block";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchCategory").style.display = "none";
        }
        function showDate(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = "#6f7e73d1";
            document.getElementById("buttonDate").style.backgroundColor = "#6f7e73d1";
            document.getElementById("buttonCategory").style.backgroundColor = "#6f7e73d1";
            //hide others and show only date
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "block";
            document.getElementById("searchCategory").style.display = "none";
        }
        function showCategory(){
            //change color of button
            document.getElementById("buttonTitle").style.backgroundColor = " ##6f7e73d1";;
            document.getElementById("buttonDate").style.backgroundColor = " ##6f7e73d1";
            document.getElementById("buttonCategory").style.backgroundColor = "#6f7e73d1";
            //hide others and show only category
            document.getElementById("searchTitle").style.display = "none";
            document.getElementById("searchDate").style.display = "none";
            document.getElementById("searchCategory").style.display = "block";
        }
    </script>
@endsection