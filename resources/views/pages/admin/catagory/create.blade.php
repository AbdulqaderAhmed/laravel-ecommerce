@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Create Catagory</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="name" class="col-form-label">Catagory (Type/Name):</label>
                                </div>

                                <div class="col-auto">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            
                            <div class="col-auto">
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