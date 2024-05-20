@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    @include ('partials.jumbotron')
    <div class="container">
        <div class="row">
        @foreach ($comics['comics'] as $comic )

            <div class=" d-flex col-12 col-sm-6 col-md-4 col-lg-2 pt-5">
                 <div class="mycard" >
                    <img src="{{ $comic ['thumb'] }}"class="card-img-top" alt="{{$comic ['title']}}">
                    <div class="card-body bg-black ">
                        <h5 class="card-title">{{ $comic ['title']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="d-grid col-2 mx-auto py-5">
            <button type="button" class="button-main btn fs-5 text-uppercase ">
                    load more
            </button>
        </div>
        
    </div>
 
</section>
@endsection
