@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Division</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">S.I</th>
                                <th scope="col">Division Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($divisions as $division)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $division->name }}</td>
                                <td>
                                    <a href="{{ route('divisions.edit', $division->id) }}">Edit</a>

                                    <form action="{{ route('divisions.destroy', $division->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ route('divisions.create') }}">Create division</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
