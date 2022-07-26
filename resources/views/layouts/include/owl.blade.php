
<div class="row">
    <div class="owl-carousel owl-theme">
        @foreach ($product as $item)
        <div class="item">
            <div class="card">
                <img src="{{asset('/images/'.$item->image_path)}}" alt="image part">
                <div class="card-body">
                    <h5>{{$item->name}}</h5>
                    <span class="float-start">{{$item->price}}</span>
                    <span class="float-end"><s>20000</s></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@section('script')
<script>
    jQuery(document).ready(function($){
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
      })
    })
    </script>
  
@endsection