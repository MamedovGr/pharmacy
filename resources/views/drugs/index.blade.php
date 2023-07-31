@extends('layouts.app')
@section('title')
    Search
@endsection
@section('content')
    <div class="container-xl py-4">
        <div class="row g-4 justify-content-sm-center">
            <div class="col-md-4 col-xl-3">
                @include('app.filter')
            </div>
            <div class="col">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4">
                    @foreach($drugs as $drug)
                        <div class="col">
                            <a href="{{route('show', $drug->id)}}" class="text-decoration-none link-danger">
                                <div class="card bg-light text-success-emphasis border-primary" style="width:20rem;margin:20px 0 24px 0">
                                    <img class="img-fluid bg-secondary-subtle" src="{{$drug->image}}" alt="image">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$drug->name}}</h4>
                                        <h5 class="">{{$category->name}}</h5>
                                        <div class="card-text pb-3">{{$drug->price}} TMT</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{--{{ $drugs->links() }}--}}
            </div>
        </div>
    </div>
@endsection
