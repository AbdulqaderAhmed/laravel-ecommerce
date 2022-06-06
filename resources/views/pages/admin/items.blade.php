@extends('layouts.admin') 

@section('content')

<div class="row my-3">
    <h3 class="fs-4 mb-3">All itmes</h3>
    <div class="col">
        <table class="table bg-transparent rounded shadow-lg table-hover">
            <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->price }}</td>
                    <td><img src="{{ asset('/images/'.$item->image_path) }}" height="80px" class="activator"></td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger ">Delete</a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        {{ $items->onEachSide(1)->links() }}
    </div>
</div>


@endsection
