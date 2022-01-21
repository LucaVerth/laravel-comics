<section>
    <div class="central-banner">

        <div class="shop-link">
            @foreach (config('banner') as $item)
                <div class="shop-icon">
                    <img src="{{ $item['image'] }}" alt="" />
                </div>
                <span class="shop-text">{{ $item['text']}}</span>
            @endforeach
        </div>
    </div>
</section>
