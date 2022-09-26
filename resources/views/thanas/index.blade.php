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
                                <th scope="col">Upazila Name</th>
                                <th scope="col">Division Name</th>
                                <th scope="col">District Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($thanas as $thana)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $thana->name }}</td>
                                <td>{{ $thana->division->name }}</td>
                                <td>{{ $thana->district->name }}</td>
                                <td>
                                    <a href="{{ route('thanas.edit', $thana->id) }}">Edit</a>

                                    <form action="{{ route('thanas.destroy', $thana->id) }}" method="POST">
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
                    <a class="btn btn-success" href="{{ route('thanas.create') }}">Create Upazila</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
