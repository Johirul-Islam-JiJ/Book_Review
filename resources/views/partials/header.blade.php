<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/">Book Review</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Book List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('categories.index') }}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sub-categories.index') }}">SubCategory</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('divisions.index') }}">Divisions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('districts.index') }}">Districts</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<!-- Navbar -->
