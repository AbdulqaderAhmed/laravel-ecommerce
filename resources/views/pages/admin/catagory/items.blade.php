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
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->catagory_name }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a class="btn btn-danger"
                            onclick="event.preventDefault();
                                    document.getElementById('item-delete').submit();
                                    ">
                                    Delete
                        </a>
                        <form action="{{ url('admin/'.$item->id) }}" method="post" id="item-delete">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        {{ $items->onEachSide(1)->links() }}
    </div>
</div>


@endsection
