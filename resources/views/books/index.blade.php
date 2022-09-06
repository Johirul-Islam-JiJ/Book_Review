@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Book List</div>

                <div class="card-body">

                    <table class="table table-striped table-dark">
                        <thead>
                          <tr>
                            <th scope="col">S.I</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Writer</th>
                            <th scope="col">Publications</th>
                            <th scope="col">Image</th>
                            <th scope="col">Published At</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($books as $book)

                          <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->writer }}</td>
                            <td>{{ $book->publication }}</td>
                            <td>
                                <img src={{"$book->image"}} class="img-fluid" height="80px" width="80px" alt="">
                            </td>
                            <td>{{ $book->published }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                                <a href="" class="text-danger">Delete</a>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                      <a class="btn btn-success" href="{{ route('books.create') }}">Create Book</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
