@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Movies') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if(count($movies))
                    <div>
                        @foreach($movies as $key => $movie)
                        <p>{{$movie->name}} => {{$movie->movieCategory->name}} => {{$movie->seats}} <a href="{{route('seat-book.now', $movie->id)}}">{{__('Book Now')}}</a></p>
                        @endforeach
                    </div>
                    {{ $movies->links() }}
                    @else

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection