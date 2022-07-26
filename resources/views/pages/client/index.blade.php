@extends('layouts.app')

@section('content')
<div class="container-fluid bg-black">
    @include('layouts.include.slider')
</div>

<div class="py-5">
    <div class="container">
        <h2>Featured Products</h2>
        {{-- owl carousel --}}
        @include('layouts.include.owl')
    </div>
</div>
@endsection
