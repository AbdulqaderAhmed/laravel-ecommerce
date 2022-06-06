@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Create Items</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="row mb-3 offset-md-1">
                            <div class="col-md-6 ">
                                <label for="name">Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <label for="type">Type:</label>
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" >

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 offset-md-1">
                            <div class="col-md-6 ">
                                <label for="image">Image:</label>
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="price">Price:</label>
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" >

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" rows="3" class="form-control" @error('desc') is-invalid @enderror"></textarea>

                                @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection