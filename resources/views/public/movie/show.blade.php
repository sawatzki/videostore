@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row card-header w-100">
                    <h3>{{ $data->title }}</h3>
                    <form class="position-absolute d-block" style="right:3.0rem"
                        action="{{ route('scard.update', ['scard' => $data->id]) }}"
                        method="post"
                    >
                        @csrf
                        @method('PUT')
                        <button class="btn btn-primary d-inline-block" type="submit">
                            <i class="d-inline-block float-right fas fa-shopping-cart"></i>
                            @lang('Add to shopping card') @if($added && $added > 0)({{ $added }})@endif</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="row"><p>{{ $data->author }}</p></div>
                    <div class="row images p-0">
                        @forelse($data->images as $img)
                            <img class="img-fluid m-0 mr-2" src="{{ $img->image }}" width="20" height="20" />
                        @empty
                            <h5>no images available</h5>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
