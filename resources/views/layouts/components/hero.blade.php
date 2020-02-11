@php
    $hero = $data['hero'];
@endphp

{{-- @dump($hero) --}}

@if($hero)
<section class="hero">
    @foreach ($hero as $item)
    @php
        $img = $item['img']['ID'];
        $title = $item['content']['title'];
        $text = $item['content']['text'];
        $link = $item['content']['link'];
    @endphp
    <div class="hero__cell">
        {!! image($img, 'full', 'hero__image') !!}
        <div class="hero__wrapper container">
            <div class="hero__content">
                @if ($title)
                <h2 class="hero__title title">
                    {!! $title !!}
                </h2>
                @endif
                @if($text)
                <p class="hero__text text">
                    {!! $text !!}
                </p>
                @endif
                @if ($link)
                <a class="hero__link button" href="{{ $link['url'] }}" target={{$link['target']}}>
                    {{ $link['title'] }}
                </a>
                @endif
            </div>
        </div>
    </div>  
    @endforeach
    <ul class="hero__nav">
        @foreach ($hero as $item)
        <li class="hero__items">
            <button class="hero__btn" data-index="{{ $loop->index }}">
                {{ $item['content']['name'] }} @include('svg.arrow-round')
            </button>
        </li>
        @endforeach
    </ul>
</section>

@endif