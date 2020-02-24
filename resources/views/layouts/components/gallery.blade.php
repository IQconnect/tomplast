@php
    $gallery = $data['gallery'];
    $rand = rand();
@endphp

@if($gallery)
<section class="gallery section">
    <div class="container">
        <ul class="gallery__list">
            @foreach ($gallery as $item)
            <li class="gallery__item">
                <a href="{{ $item['url'] }}"  class="gallery__elem" data-fancybox={{ $rand }}>
                    {!! image($item['id'], 'full', 'gallery__img') !!}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif