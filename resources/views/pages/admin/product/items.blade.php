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
                    <th scope="col">Catagory</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->catagory }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td><img src="{{ asset('/images/'.$item->image_path) }}" height="80px" class="activator"></td>
                    <td>
                        <a href="{{ url('/admin/product/'.$item->id) }}" class="btn btn-danger">
                            Delete
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/admin/product/update/'.$item->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    </div>
</div>


@endsection
