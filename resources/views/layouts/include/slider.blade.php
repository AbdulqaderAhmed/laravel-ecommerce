

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    {{-- Indicators --}}
    <div class="carousel-indicators ">
        @foreach ($product as $item)
            <button 
                type="button" 
                data-bs-target="#demo" 
                data-bs-slide-to={{$item->id}} 
                class="{{$item->id == '1' ? 'active' : ''}} bg-black">
            </button>
        @endforeach
    </div>
    
    {{-- slide show --}}
    <div class="carousel-inner">
        @php
            $i = 1;
        @endphp
        @foreach ($product as $item)
            <div class="carousel-item {{$i == '1' ? 'active':''}}">
                @php
                    $i++;
                @endphp
                <img 
                    src="{{asset('/images/'.$item->image_path)}}" 
                    alt="slider image" 
                >
            </div>
        @endforeach
    </div>

    {{-- left and rigth controller --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-black"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-black"></span>
    </button>
    
</div>