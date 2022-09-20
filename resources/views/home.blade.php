@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-md-4 mt-5">
            <div class="card" style="width: 18rem;">
                <img src={{"$book->image"}} class="img-fluid"  alt="">
                <div class="card-body">
                  <h5 class="card-title"><span style="color: blue; font-weight=700;">{{ $book->name }}</span></h5>
                  <p class="card-text">Writter Name <span style="color: red">{{ $book->writer }}</span></p>
                  <p  class="card-tex">{{ $book->publication }}</p>
                  <a href="#" class="btn btn-primary">Learn More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
