<div id="header-wrapper" style="background: #2b3f30d1;">
    <div class="container">
        <div id="header">
            <div id="logo" style="margin-left: -5em;">
                <h1>
                <img src="{{ asset('images/logoHome.png') }}" style="width:3rem;height:3rem;margin-right:10px;">
                <a href="{{ url('/') }}"> 
                    Products Project
                </a>
                </h1>
            </div>
            <nav id="nav" style="margin-right: -5em; font-family: Georgia, serif; font-size: 15px;">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/extended-search') }}">Search</a></li>
                    <li><a href="{{ url('products') }}" >Products</a></li>
                    <li><a href="{{ url('categories')}}" >Categories</a></li>

                    <li class="current_page_item" ><a style="background: #2b3f30d1;">
                        <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-start">
                            <input class="d-inline py-1" type="text" name="search-title" required/>
                            <button  class="d-inline bg-white py-2" type="submit" >Search</button>
                        </form>
                    </a>
                </li>
                </ul>
            </nav>
        </div>
    </div>
</div>