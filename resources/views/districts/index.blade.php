@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">District</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">S.I</th>
                                <th scope="col">District Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($districts as $district)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $district->name }}</td>
                                <td>
                                    <a href="{{ route('districts.edit', $district->id) }}">Edit</a>

                                    <form action="{{ route('districts.destroy', $district->id) }}" method="POST">
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
                    <a class="btn btn-success" href="{{ route('districts.create') }}">Create District</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
