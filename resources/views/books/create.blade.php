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


                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control mb-3" id="name" name="name"
                                placeholder="Enter Book Name">
                        </div>

                        <div class="form-group">
                            <label for="writer">Writer</label>
                            <input type="writer" class="form-control mb-3" id="writer" name="writer"
                                placeholder="Enter Writer Name">
                        </div>

                        <div class="form-group">
                            <label for="publication">Publication</label>
                            <input type="publication" class="form-control mb-3" id="publication" name="publication"
                                placeholder="Enter Publication Name">
                        </div>

                        <div class="form-group">
                            <label for="published">Published On</label>
                            <input type="published" class="form-control mb-3" id="published" name="published"
                                placeholder="Published Date">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
