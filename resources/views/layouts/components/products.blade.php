<section class="products section">
    <div class="container">
        <div class="products__wrapper">
            @include('blocks.cats', ['data'=>$cats])
            @if ($products)
            <ul class="products__list"  id="products">
                @foreach ($products as $item)
                @php
                    $img = get_post_thumbnail_id($item -> ID);
                @endphp
                <li class="products__item">
                    <a href="{{ get_permalink($item -> ID) }}" class="products__elem">
                        {!! image($img, 'full', 'products__img') !!}
                        <h3 class="major-text products__title">
                            {{ $item -> post_title }}
                        </h3>
                        <span class="products__text text">
                            {{ $item -> post_excerpt }}
                        </span>
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</section>