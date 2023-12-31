@extends('layouts.app')

@section('title')
@endsection

@section('content')
    <div class="container-xl">
        <div class="row text-light">
            <div class="col-12 col-md-5">
                <img class="card-img-top " src="{{$drug->image}}" alt="image" style="width:100%">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start">
                <h4 class="h1 fw-normal pb-1">{{$drug->name}}</h4>
                <div class=" h3 fw-normal pb-2"><span class="text-warning fw-bold">Price:</span>{{$drug->price}} TMT</div>
                <div class="h5 fw-normal"><span class="text-warning fw-bold">Category:</span> {{$drug->category->name}}</div>
                <div class="h5 fw-normal pb-2"><span class="text-warning fw-bold">Description:</span> {{$drug->description}}</div>
            </div>
        </div>
    </div>
@endsection