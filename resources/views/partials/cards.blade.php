@foreach ($comics as $comic)
    <div class="card">
        <img src="{{ $comic['thumb'] }}" alt="">
        <h4>{{ $comic['series'] }}</h4>
    </div>
@endforeach
