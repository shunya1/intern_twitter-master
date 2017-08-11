@extends('layouts.user')

@section('content')
    <div class="col-lg-3">
        @include('user.fragments.friendship')
    </div>

    <div class="col-lg-6">
        <ul class="list-group media-list-stream mb-4">
            @foreach($tweets as $tweet)
              @include('fragments.tweet', $tweet)
            @endforeach
        </ul>
    </div>

    <div class="col-lg-3">

          @include('fragments.footer')

    </div>
@endsection