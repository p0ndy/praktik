@extends('layouts.app')

@section('content')
    


    <section>
        <div class="container">
            <div class="d-flex">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                    @foreach($comic as $comi)
                    @if($loop->first)
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="{{$comi->img}}" alt="Первый слайд">
                    </div>
                    @else
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{$comi->img}}" alt="Второй слайд">
                    </div>
                    @endif
                    @endforeach
                
                </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
            </div>
        </div>
    </section>
@endsection