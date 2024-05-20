@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    @include ('partials.jumbotron')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 py-2">
                @foreach ($comics as $comic )
                 <div class="card" >
                <img src={{$comics ['thumb']}} class="card-img-top" :alt="title">
                <div class="card-body bg-black ">
                    <h5 class="card-title">{{ $comics ['title']}}</h5>
                </div>
                 </div>
                 @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
