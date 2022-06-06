@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Item</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <label for="name">Item Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Item name..." name="name"  required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <label for="name">Item Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Item name..." name="name"  required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <label for="name">Item Name:</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Item name..." name="name"  required autofocus>

                                @error('name')
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