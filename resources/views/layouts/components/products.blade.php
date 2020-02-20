<section class="products section">
    <div class="container">
        <div class="products__wrapper">
            @include('blocks.cats')
            @if ($products)
            <ul class="products__list">
                @foreach ($products as $item)
                <li class="products__item">
                    <a href="#" class="products__elem">
                        {{-- {!! image($img, 'full', 'products__img') !!} --}}
                        <img class="products__img" src="http://localhost:3000/tomplast/wp-content/uploads/2020/02/beton_3e34fc27.png" alt="">
                        <h3 class="major-text products__title">
                            {{ $item -> post_title }}
                        </h3>
                        <span class="products__text minor-text">
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