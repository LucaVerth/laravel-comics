@extends('layouts.app')

@section('content')
    <main>
        @include('partials.jumbotron')
        <div class="main-container">
            <div class="card-list">
                <div class="custom-btn-main">Current Series</div>
                @include('partials.cards')
            </div>
        </div>
        <div class="load-btn">
            <div class="custom-btn"><a href="#">load more</a></div>
        </div>
    </main>
    @include('partials.banner')
@endsection
