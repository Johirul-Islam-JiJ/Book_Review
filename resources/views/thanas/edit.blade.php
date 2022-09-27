@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">Upazila List
                        <a class="btn btn-success btn-sm float-right" href="{{ route('thanas.index') }}">Back</a>
                    </div>



                    <div class="card-body">


                        <form method="POST" action="{{ route('thanas.update', $thana->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


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
                                    value="{{ $thana->name }}">
                            </div>

                            <div class="form-group">
                                <label for="division_id">Division</label>
                                <select class="form-select form-control mb-3" name="division_id" id="division_id">
                                    <option selected>Select Division...</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="district_id">District</label>
                            <select class="form-select form-control mb-3" name="district_id" id="district_id">
                                <option selected>Select District...</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name}}</option>
                                @endforeach
                            </select>
                        </div>



                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
