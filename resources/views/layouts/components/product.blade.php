@php
    $product = $data;
    $position = $product['content']['position'];
    $title = $product['content']['title'];
    $text = $product['content']['text'];
    $link = $product['content']['link'];
    $img = $product['img']['ID'];
@endphp

@if($product)
<section class="section product">
    <div class="container">
        <div class="product__content-wrapper">
            <div class="product__content product__content--{{ $position }} @if($loop->first) -is-active @endif" data-tab-content>
                {!! image($img, 'full', 'product__img') !!}
                <div>
                    <h3 class="product__title subtitle">
                        {!! $title !!}
                    </h3>
                    <p class="product__text text">
                        {!! $text !!}
                    </p>
                    <a class="product__link button button--transparent button--red" href="{{ $link['url'] }}" target={{$link['target']}}>
                        {{ $link['title'] }}
                    </a>
                    <div class="product__cnt">
                        @while (have_posts())
                            @php the_post() @endphp
                            {!! the_content() !!}
                        @endwhile
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- @dump($product) --}}