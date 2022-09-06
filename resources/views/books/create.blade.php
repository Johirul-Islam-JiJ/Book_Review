@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Book List
                        <a class="btn btn-success btn-sm " href="{{ route('books.index') }}">Back</a>
                    </div>



                    <div class="card-body">


                        <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                            @csrf


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control mb-3" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Enter Book Name">
                            </div>


                            <div class="form-group">
                                <label for="writer">Writer</label>
                                <input type="text" class="form-control mb-3" id="writer" name="writer"
                                    value="{{ old('writer') }}" placeholder="Enter Writer Name">
                            </div>

                            <div class="form-group">
                                <label for="publication">Publication</label>
                                <input type="text" class="form-control mb-3" id="publication" name="publication"
                                    value="{{ old('publication') }}" placeholder="Enter Publication Name">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control mb-3" id="image" name="image"
                                    value="{{ old('image') }}">
                            </div>

                            <div class="form-group">
                                <label for="published">Published On</label>
                                <input type="date" class="form-control mb-3" id="published" name="published"
                                    value="{{ old('published') }}" placeholder="Published Date">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
