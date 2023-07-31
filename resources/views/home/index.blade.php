@extends('layouts.app')
@section('title')
    GM Pharmacy
@endsection

{{--@section('content')
    @include('app.slider')
    @include('app.filter')
    <div class="row align-items-center py-4 justify-content-center bg-light">
        @foreach($drugs as $drug)
            <div class="col-md-6 col-xxl-3 col-lg-4 g-4">
                <a href="{{route('home', $drug->id)}}" class="text-decoration-none">
                    <div class="card bg-success border-primary" style="...">
                        <img class="img-fluid bg-secondary-subtle" src="public/images/{{$drug->image}}" alt="image">
                        <div class="card-body text-light fw-bold">{{$drug->name}}</div>
                        <div class="card-text pb-3 text-bg-info">{{$drug->price}}<span class="fw-semibold">TMT</span></div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection--}}

@section('content')
    @include('app.slider')
    @foreach($categoryDrugs as $categoryDrug)
        <div class="border-top">
            <div class="container-xl py-4">
                <div class="h5 mb-3">
                    <a href="{{route('home',['category' => $categoryDrug['category']->id])}}" class="link-light text-decoration-none">
                        {{ $categoryDrug['category']->name }}
                    </a>
                    <span class="text-secondary">({{ $categoryDrug['category']->drugs_count }})drugs</span>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                    @foreach($categoryDrug['drugs'] as $drug)
                        <div class="col-md-6 col-xxl-3 col-sm-12 col-lg-4">
                            <a href="{{route('show', $drug->id)}}" class="text-decoration-none link-light">
                                <div class="card bg-light text-success border-primary" style="width:20rem;margin:20px 0 24px 0">
                                    <img class="img-fluid bg-secondary-subtle" src="{{$drug->image}}" alt="image">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$drug->name}}</h4>
                                        <div class="card-text pb-3">{{$drug->price}} <span class="text-primary fw-semibold">TMT</span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
@endsection
